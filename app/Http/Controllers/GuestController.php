<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
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
        return view('guests.room_detail');
    }
}
