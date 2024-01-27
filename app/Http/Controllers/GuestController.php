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
        $all_room = $this->room->all();
        $room_looped = NULL;
        return view('guests.room_page')
        ->with('room_looped',$room_looped)
        ->with('all_room',$all_room);
    }


    public function roomdetail($id)
    {
<<<<<<< HEAD
        $room = Room::find($id);
        return view('guests.room_detail')->with('room', $room);
=======
        $room = $this->room->findOrFail($id);
        return view('guests.room_detail')->with('room',$room);
>>>>>>> 670c76bd9dba901b949c0229d7e77223fb8b4558
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
