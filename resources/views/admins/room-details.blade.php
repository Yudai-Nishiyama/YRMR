@extends('layouts.app')

@section('title', 'Room Details')

@section('content')


<div class="row g-0">
    @include('admins.admin-controls')

    <div class="adminIndex-content col me-5">
        <div class="container me-5 mt-4">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 style="font-size: 64px; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);" class="underline">Room {{ $room->name }}</h1>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-6">
                    <div class="card" style="background-color: #981E1E; color: white;">
                        <div class="card-header d-flex justify-content-center align-items-center" style="height: 100px; border-bottom: 1px solid white;">
                            <h1 style="font-size: 48px; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">Room {{ $room->name }}</h1>
                        </div>
                        <div class="card-body d-flex justify-content-center align-items-center" style="height: 500px;">
                            <div class="d-flex justify-content-center align-items-center" style="width: 100%; height: 100%; background-color: rgba(255, 255, 255, 0.3); border-radius: 20px; overflow: hidden;">
                                <img src="{{ asset('images/AdobeStock_633635429_Preview.png') }}" class="img-fluid" alt="Room1 Image" style="width: 90%; height: 90%; object-fit: cover;">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card" style="background-color: #2C462B; color: white;">
                        <div class="card-header d-flex justify-content-center align-items-center" style="height: 100px; border-bottom: 1px solid white;">
                            <h1 style="font-size: 48px; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">Room Details</h1>
                        </div>
                        <div class="card-body d-flex justify-content-center align-items-center" style="height: 400px;">
                            <div class="d-flex justify-content-center align-items-center" style="width: 100%; height: 100%; background-color: rgba(255, 255, 255, 0.3); border-radius: 20px; overflow: hidden;">
                                <table style="width: 80%; font-family: 'Bona Nova', sans-serif;">
                                    <tbody>
                                        <tr>
                                            <td style="text-align: left; font-size: 28px; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">Room Name</td>
                                            <td style="text-align: left; font-size: 28px; font-family: 'Bona Nova', sans-serif; color: #F4BB4B; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">Room {{ $room->name }}</td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: left; font-size: 28px; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">Room Type</td>
                                            <td style="text-align: left; font-size: 28px; font-family: 'Bona Nova', sans-serif; color: #F4BB4B; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">{{ ucfirst($room->roomType->room_type_name) }}</td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: left; font-size: 28px; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">Price</td>
                                            <td style="text-align: left; font-size: 28px; font-family: 'Bona Nova', sans-serif; color: #F4BB4B; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">${{ $room->roomType->price }}</td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: left; font-size: 28px; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">Date</td>
                                            <td style="text-align: left; font-size: 28px; font-family: 'Bona Nova', sans-serif; color: #F4BB4B; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">{{ $reservations->check_in }}</td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: left; font-size: 28px; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">Reservation Number</td>
                                            <td style="text-align: left; font-size: 28px; font-family: 'Bona Nova', sans-serif; color: #F4BB4B; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">{{ $reservations->reservation_number }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Set the width of the buttons to 150px -->
                    <table style="width: 100%; font-family: 'Bona Nova', sans-serif; margin-top: 40px;">
                        <tbody>
                            <tr>
                                <td style="text-align: center;">
                                    <a href="{{ route('admin.rooms.check_in', [$room->id, $reservations->id]) }}"><button class="yellow_button" style="width: 250px; height: 35px; border-radius: 5px; background-color: #F4BB4B; color: #981E1E; font-family: 'Raleway', sans-serif; font-weight: bold;">Check In</button></a>
                                </td>
                                <td style="text-align: center;">
                                    <a href="{{ route('admin.rooms.check_out', [$reservations->id]) }}"><button class="green_button" style="width: 250px; height: 35px; border-radius: 5px; background-color: #448A47; color: #ffffff; font-family: 'Raleway', sans-serif; font-weight: bold;">Check Out</button></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                @include('guests.modal.reservation_completion_modal')
            </div>
        </div>
    </div>
@endsection





