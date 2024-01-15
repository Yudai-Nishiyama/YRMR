<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class GuestsController extends Controller
{
    public function guestReservationManagement()
    {
        return view('admins.guests.guest_reservation_management');
    }

    public function guestProfile()
    {
        return view('admins.guests.guest_profile');
    }
}
