@extends('layouts.app')

@section('title', 'Check Cleaning Progress')

@php
    $lastReservation = $user->reservations->last();
    $checkInDate = \Carbon\Carbon::parse($lastReservation->check_in)->format('Y-m-d (D)');
    $checkOutDate = \Carbon\Carbon::parse($lastReservation->check_out)->format('Y-m-d (D)');
@endphp

@section('content')

<div class="row g-0">
    @include('admins.admin-controls')

    <div class="col guestsPage container m-5">
        <div class="card" style="border:none;">
            <div class="card-header" style="background-color: #2C462B; border-radius:25px 25px 0px 0px;">
                <div class="row">
                    <div class="col">
                        <h2 style="color:#F4BB4B" class="fw-bold mt-1">Guest Profile</h2>
                    </div>
                    <div class="col d-flex align-items-center justify-content-end">
                        <a href="{{ route('admin.guests.guestReservationManagement') }}" class="float-end btn px-4" style="background-color:#448A47; color:#FFFFFF; ">Back to the page</a>
                    </div>
                </div>
            </div>

            <div class="cleaner-view-task card-body justify-content-center border">
                <div class="w-75 mx-auto fw-bold mt-3">
                    {{-- first row --}}
                    <div class="row">
                        <div class="col-5 guestProfileTitle">Full Name</div>
                        <div class="col-2"></div>
                        <div class="col-5 guestProfileTitle">Username</div>
                    </div>
                    <div class="row text-center">
                        <div class="col-5 guestProfileContent">{{ $user->profile->first_name }} {{ $user->profile->last_name }}</div>
                        <div class="col-2"></div>
                        <div class="col-5 guestProfileContent">{{ $user->username }}</div>
                    </div>
                    {{-- second row --}}
                    <div class="row mt-4">
                            <div class="col-5 guestProfileTitle">Phone Number</div>
                            <div class="col-2"></div>
                            <div class="col-5 guestProfileTitle">Email</div>
                    </div>
                    <div class="row text-center">
                        <div class="col-5 guestProfileContent">{{ $user->profile->phone_number }}</div>
                        <div class="col-2"></div>
                        <div class="col-5 guestProfileContent">{{ $user->email }}</div>
                    </div>
                    {{-- thrid row --}}
                    <div class="row mt-4">
                        <div class="col-5 guestProfileTitle">Address</div>
                        <div class="col-2"></div>
                        <div class="col-5 guestProfileTitle">Latest Reservation</div>
                    </div>
                    <div class="row text-center">
                        <div class="col-5 guestProfileContent">{{ $user->profile->address }}</div>
                        <div class="col-2"></div>
                        <div class="col-5 guestProfileContent">{{ $checkInDate }} ~ {{ $checkOutDate }}</div>
                    </div>

                    {{-- Reservation History --}}
                    <div class="row mt-5">
                        <div class="col guestProfileTitle">Reservation History</div>
                    </div>

                    <table class="table mt-3">
                        <thead>
                            <tr style="border-bottom: 1px solid black">
                                <th>Check In</th>
                                <th>Check Out</th>
                                <th>Room Number</th>
                                <th>Room Type</th>
                                <th>Reservation Number</th>
                            </tr>
                        </thead>
                        <tbody class="fw-normal">
                            @foreach($user->reservations->reverse() as $reservation) 
                                <tr style="border-bottom: 1px solid black">
                                    <td>{{ \Carbon\Carbon::parse($reservation->check_in)->format('Y-m-d (D.)') }}</td>
                                    <td>{{ \Carbon\Carbon::parse($reservation->check_out)->format('Y-m-d (D.)') }}</td>
                                    <td>Room {{ $reservation->room->name }}</td>
                                    <td>{{ $reservation->room->roomType->room_type_name }}</td>
                                    <td>{{ $reservation->reservation_number }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card-footer" style="background-color: #2C462B; border-radius:0px 0px 25px 25px;">
                <br>
            </div>
        </div>
    </div>
</div>
@endsection