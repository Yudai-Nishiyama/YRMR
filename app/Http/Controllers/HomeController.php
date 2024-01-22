<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

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

    private $user;
    public function __construct(User $user) {
        $user = $this->user;
    }

    public function index()
    {
        return view('home');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function navbar(){
        return view('admins.navbar');
    }

    public function searchRoom()
    {
        return view('guests.room_availability_search');
    }

    public function checkReservation()
    {
        return view('guests.check_reservation');
    }


    public function reservation()
    {
        return view('guests.reservation');
    }

    public function reservationCalendar($id,$date)
    {
        $user = $this->user->findOrFail($id);
        $date = $date

        return view('guests.reservation');
    }

    public function cancelReservation()
    {
        return view('guests.cancel_reservation');
    }

    public function reservationCompletion()
    {
        return view('guests.reservation_completion');
    }

    public function cancelCompletion()
    {
        return view('guests.cancel_reservation_completion');
    }
}
