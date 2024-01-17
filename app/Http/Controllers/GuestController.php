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
        return view('guests.room_page');
    }

    public function roomdetail()
    {
        $all_rooms = $this->room->all();
        return view('guests.room_detail')->with('all_rooms',$all_rooms);
    }
}
