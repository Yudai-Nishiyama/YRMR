<?php

namespace App\Http\Controllers;

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
<<<<<<< HEAD
        // $this->middleware('auth');
=======
        $this->middleware('auth');
>>>>>>> 5839bfd9a9168ca357b40cb65765c31d80c33eee
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
<<<<<<< HEAD

    public function showTest()
    {
        return view('admins.navbar');
    }

=======
>>>>>>> 5839bfd9a9168ca357b40cb65765c31d80c33eee
}
