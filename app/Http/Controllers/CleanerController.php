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

    public function showCleaningTask($id)
    {
        $reservation = $this->reservation->findOrFail($id);
        $nearest_reservation_date = $reservation
                                   ->where('id', '!=', $reservation->id)
                                   ->where('room_id', $reservation->room_id)
                                   ->oldest('created_at')
                                   ->first();
        
        return view('cleaners.view_cleaning_task')
                    ->with('reservation',$reservation)
                    ->with('nearest_reservation_date',$nearest_reservation_date);
    }


}
