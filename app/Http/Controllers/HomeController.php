<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


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

    public function GuestReservationManagementPage()
    {
        return view('admins.guests.guest_reservation_management');
    }

    public function GuestProfilePage()
    {
        return view('admins.guests.guest_profile');
    }

}
