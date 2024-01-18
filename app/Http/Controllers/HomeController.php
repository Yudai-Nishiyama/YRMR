<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\RoomType;
use App\Models\Reservation;
use Illuminate\Http\Request;

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
        return view('home');
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
        return view('guests.room_availability_search');
    }

    public function checkReservation($id)
    {
        $reservation = Reservation::where('reservation_number', $id)->firstOrFail();
        $room = Room::find($reservation->room_id);
        $roomType = RoomType::find($room->room_type_id);
        return view('guests.check_reservation',['reservation' => $reservation, "room_type" => $roomType, "room" => $room]);
    }


    public function reservation(Room $room)
    {
        return view('guests.reservation',['room' => $room]);
    }

    public function cancelReservation($id)
    {
        Reservation::where('reservation_number', $id)->delete();
        return view('home');

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
