<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Room;
use App\Models\User;
use App\Models\RoomType;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('guests.home_page');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function navbar(){
        return view('admins.navbar');
    }

    public function searchRoom()
    {
        return view('guests.room_availability_search',['availableRooms' => []]);
    }

    public function roomSearcher(Request $request)
{
    $roomType = $request->input('room_type');
    $checkInDate = $request->input('checkin_date');
    $checkOutDate = $request->input('checkout_date');

    $bookedRoomIds = Reservation::where(function ($query) use ($checkInDate, $checkOutDate) {
        $query->where(function ($subQuery) use ($checkInDate) {

            $subQuery->where('check_in', '<=', $checkInDate)
                     ->where('check_out', '>=', $checkInDate);
        })->orWhere(function ($subQuery) use ($checkOutDate) {

            $subQuery->where('check_in', '<=', $checkOutDate)
                     ->where('check_out', '>=', $checkOutDate);
        })->orWhere(function ($subQuery) use ($checkInDate, $checkOutDate) {

            $subQuery->where('check_in', '>=', $checkInDate)
                     ->where('check_out', '<=', $checkOutDate);
        });
    })->pluck('room_id')->unique();

    $availableRooms = Room::whereNotIn('id', $bookedRoomIds)
                           ->where('room_type_id', $roomType)
                           ->with('roomType')
                           ->get();
    return view('guests.room_availability_search', ['availableRooms' => $availableRooms]);
}

    public function checkReservation($id)
    {
        $reservation = Reservation::where('reservation_number', $id)->firstOrFail();
        $room = Room::find($reservation->room_id);
        $roomType = RoomType::find($room->room_type_id);
        $reservationHistory = Reservation::where('room_id', $reservation->room_id)->where('user_id', Auth::id())->get();
        return view('guests.check_reservation',['reservation' => $reservation, "room_type" => $roomType, "room" => $room, 'reservationHistory' => $reservationHistory]);
    }

    public function reservation(Room $room)
    {
        return view('guests.reservation',['room' => $room]);
    }

    public function cancelReservation($id)
    {
        $reservation = Reservation::where('reservation_number', $id)->firstOrFail();
        if($reservation) {
            $reservation->deleted_at = Carbon::now()->toDateTimeString();
            $reservation->save();

            $user = User::find(Auth::id());

            if($user) {
                $user->has_booking = 0;
                $user->save();
            }
        }
        return view('guests.cancel_reservation_completion');

    }

    public function reservationCompletion()
    {
        return view('guests.reservation_completion');
    }

    public function cancelCompletion()
    {
        return view('guests.cancel_reservation_completion');
    }
}
