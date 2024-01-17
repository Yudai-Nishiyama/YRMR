<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Reservation;

class GuestsController extends Controller
{
    public function guestReservationManagement()
    {
    $reservations = Reservation::with(['user', 'room'])->get();
    return view('admins.guests.guest_reservation_management', compact('reservations'));

    }

    public function guestProfile()
    {
        return view('admins.guests.guest_profile');
    }
}
