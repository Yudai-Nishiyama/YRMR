<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showAllRooms()
    {
        return view('admins.all-rooms');
    }

    public function showCreateRoom()
    {
        return view('admins.create-a-new-room');
    }

    public function showRoomSearch()
    {
        return view('admins.room-search');
    }
}
