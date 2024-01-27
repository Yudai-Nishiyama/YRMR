<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
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
    public function saveRoom(Request $request)
    {
        $validatedData = $request->validate([ 'roomName' => 'required|string|max:255',
                                                'roomType' => 'required',
                                                'roomPrice' => 'required',
                                                'roomDescription' => 'required|string|max:255' ]);
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->storeAs('public/images/room', $imageName);
        Room::create([ 'room_type_id' => $validatedData['roomType'],
                        'name' => $validatedData['roomName'],
                        'image' => $imageName,
                        'is_active'=>"1"]);

        return redirect()->back()->with('success', 'Image uploaded successfully.');

    }
}
