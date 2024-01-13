<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class CleanerController extends Controller
{
    private $reservation;

    public function __construct(Reservation $reservation)
    {
        $this->reservation = $reservation;

    }

    public function showCleanerPage()
    {
        $all_reservations = $this->reservation->all();
        return view('cleaners.cleaning_page')->with('all_reservations',$all_reservations);
    }

    public function showCleaningTask()
    {
        return view('cleaners.view_cleaning_task');
    }


}
