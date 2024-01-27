<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class SearchController extends Controller
{
    //
    public function searchReservations(Request $request)
    {
        $roomType = $request->input('room_type');
        $checkInDate = $request->input('checkin_date');
        $checkOutDate = $request->input('checkout_date');

        $availableRooms = Room::where('room_type', $roomType)
            ->whereNotBetween('checkout_date', [$checkInDate, $checkOutDate])
            ->whereNotBetween('checkin_date', [$checkInDate, $checkOutDate])
            ->get();

        return view('room_availability_search', compact('availableRooms'));

    }
}
