<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

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


    public function roomdetail()
    {
        $all_rooms = $this->room->all();
        return view('guests.room_detail')->with('all_rooms',$all_rooms);
    }

}
