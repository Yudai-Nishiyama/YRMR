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
                        <tr style="border-bottom: 1px solid black;">
                            <td><a href="{{ route('admin.guests.guestProfile') }}" class="guestName text-decoration-none">First Name last Name</a></td>
                            <td>Cleaner1</td>
                            <td>2023-11-14(Tue)</td>
                            <td>2023-11-15(Wed)</td>
                            <td>Room 101</td>
                            <td>Single Bed</td>
                            <td>123456879</td>
                        </tr>
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