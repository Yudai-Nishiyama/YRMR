<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\User;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GuestController extends Controller
{
    private $room;

    public function __construct(Room $room)
    {
        $this->room = $room;
    }

    public function guesthome()
    {
        return view('guests.home_page');
    }
    public function guestroom()
    {
        $rooms = Room::all();
        return view('guests.room_page',['rooms' => $rooms]);
    }

    public function roomdetail()
    {
        $all_rooms = $this->room->all();
        return view('guests.room_detail')->with('all_rooms',$all_rooms);
    }

    public function reserveRoom(Request $request, Room $room)
    {
        $reservation = Reservation::create([
            'user_id' => Auth::id(),
            'room_id' => $room->id,
            'check_in' => $request->check_in,
            'check_out' => $request->check_out,
            'reservation_number' => date("mdY") . bin2hex(random_bytes('5')),
            'guest_checkin' => false,
            'guest_checkout' => false,
        ]);

        $user = User::find(Auth::id());

        if($user) {
            $user->has_booking = 1;
            $user->save();
        }

        return view('guests.reservation_completion', ['room' => $room, 'reservation' => $reservation]);
    }
}
