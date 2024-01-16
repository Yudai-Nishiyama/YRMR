@extends('layouts.app')

@section('title', 'Admin Guest Reservation Management Page')

@section('content')

<div class="row g-0">
    @include('admins.admin-controls')

    <div class="col guestsPage container m-5">
        <div class="card" style="border:none;">
            <div class="card-header" style="background-color: #2C462B; border-radius:25px 25px 0px 0px;">
                <h2 style="color:#F4BB4B" class="fw-bold mt-1">Guest Reservation Management</h2>
            </div>
        
            <div class="card-body justify-content-center border">
                <table class="table" >
                    <thead>
                        <tr style="border-bottom: 1px solid black;">
                            <th>Name</th>
                            <th>Username</th>
                            <th>Check In</th>
                            <th>Check Out</th>
                            <th>Room Number</th>
                            <th>Room Type</th>
                            <th>Reservation Number</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($reservations as $reservation)
                        @if($reservation->user && $reservation->user->role_id == 2)
                                <tr style="border-bottom: 1px solid black;">
                                    <td>
                                        <a href="{{ route('admin.guests.guestProfile', $reservation->user->id) }}" class="guestName text-decoration-none">
                                        {{ $reservation->user->profile->first_name }} {{ $reservation->user->profile->last_name }}
                                        </a>
                                    </td>
                                    <td>{{ $reservation->user->username }}</td>
                                    <td>{{ \Carbon\Carbon::parse($reservation->check_in)->format('Y-m-d (D.)') }}</td>
                                    <td>{{ \Carbon\Carbon::parse($reservation->check_out)->format('Y-m-d (D.)') }}</td>
                                    <td>{{ $reservation->room->name }}</td>
                                    <td>{{ $reservation->room->roomType->room_type_name }}</td>
                                    <td>{{ $reservation->reservation_number }}</td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="card-footer" style="background-color: #2C462B; border-radius:0px 0px 25px 25px;">
                <br>
            </div>
        </div>
    </div>
</div>
@endsection