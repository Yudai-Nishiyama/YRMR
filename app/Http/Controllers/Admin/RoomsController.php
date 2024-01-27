<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Room;
use App\Models\User;
use App\Models\RoomTask;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Models\ReservationTask;
use App\Http\Controllers\Controller;


class RoomsController extends Controller
{
    private $user;
    private $reservation;

    public function __construct(User $user, Reservation $reservation)
    {
        $this->user = $user;
        $this->reservation = $reservation;
    }

    public function index() {

        // Retrieve all reservations
        $all_reservations = Reservation::all(); // Assuming you want to pass all reservations to the view

        $cards = Room::all()->map(function($room) use($all_reservations){

            $today = date('Y-m-d');
            $current_reservation = null;
            $next_reservation = null;
            $reservations = $all_reservations->where('room_id', '=', $room->id)->sortBy('check_in');


            foreach($reservations as $reservation){

                if($current_reservation == null && $today >= date('Y-m-d', strtotime($reservation->check_in)) && $today <= date('Y-m-d', strtotime($reservation->check_out)))
                {
                    $current_reservation = $reservation;
                }

                if($current_reservation != null && $current_reservation != $reservation){
                    $next_reservation = $reservation;
                    break;
                }
            }

            if($current_reservation != null){

                $status = ReservationTask::where('reservation_id', '=', $current_reservation->id)->get()->first();

                return [
                    'room' => $room,
                    'check_in' => $current_reservation->guest_checkin,
                    'check_out' => $current_reservation->guest_checkout,
                    'check_in_date' => date('Y/m/d (D)', strtotime($current_reservation->check_in)),
                    'check_out_date' => date('Y/m/d (D)', strtotime($current_reservation->check_out)),
                    'next_reservation' => $next_reservation != null ?
                        date('m/d (D)', strtotime($next_reservation->check_in)) : "Vacant",
                    'next_reservation_year' => $next_reservation != null ?
                        date('Y', strtotime($next_reservation->check_in)) : "",
                    'status' => $status != null ? $status->task_id : null
                ];
            }

            return [
                'room' => $room,
                'check_in' => null,
                'check_out' => null,
                'check_in_date' => null,
                'check_out_date' => null,
                'next_reservation' => $next_reservation != null ? $next_reservation->check_in : "Vacant",
                'status' => null
            ];

        });

        return view('admins.all-rooms', compact('cards'));
    }

    public function details($id) {
        $room = Room::with('roomType')->findOrFail($id);

        $reservations = Reservation::where('room_id', $id)->get()->first();

        return view('admins.room-details', compact('room', 'reservations'));
    }

    public function check_in(Room $room, Reservation $reservation) {
        $room->is_active = 0;
        $room->update();
        $reservation->guest_checkin = 1;
        $reservation->update();
        ReservationTask::where('reservation_id', '=', $reservation->id)->delete();

        return redirect()->route('admin.rooms.index');
    }

    public function check_out(Reservation $reservation) {
        $reservation->guest_checkout = 1;
        $reservation->update();

        return redirect()->route('admin.rooms.index');
    }

    public function roomSearcher(Request $request) {
        $roomName = $request->input('room_name');
        $roomType = $request->input('room_type');

        $query = Room::with('roomType'); // roomType関連をEagerロードする

        if (!empty($roomName)) {
            $query->where('name', 'like', '%' . $roomName . '%');
        }

        if (!empty($roomType) && $roomType != "all") {
            $query->where('room_type_id', $roomType);
        }

        $rooms = $query->get();

        return view('admins.room-search', ['rooms' => $rooms]);
    }

}
