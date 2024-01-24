
@extends('layouts.app')

@section('title', 'Reservation')

@section('content')

<div class="container mt-4">
    <div class="row">
        <div class="col-md-12 text-center">
            <h1 style="font-size: 64px; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);" class="underline">Reservation</h1>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-6">
            <div class="card" style="background-color: #981E1E; color: white;">
                <div class="card-header d-flex justify-content-center align-items-center" style="height: 100px; border-bottom: 1px solid white;">
                    <h1 style="font-size: 48px; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">Room1</h1>
                </div>
                <div class="card-body d-flex justify-content-center align-items-center" style="height: 500px;">
                    <div class="d-flex justify-content-center align-items-center" style="width: 100%; height: 100%; background-color: rgba(255, 255, 255, 0.3); border-radius: 20px; overflow: hidden;">
                        <img src={{ asset($room->image) }} class="img-fluid" alt="Room1 Image" style="width: 90%; height: 90%; object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card" style="background-color: #2C462B; color: white;">
                <div class="card-header d-flex justify-content-center align-items-center" style="height: 100px; border-bottom: 1px solid white;">
                    <h1 style="font-size: 48px; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">Reservation Details</h1>
                </div>
                <div class="card-body d-flex justify-content-center align-items-center" style="height: 400px;">
                    <div class="d-flex justify-content-center align-items-center" style="width: 100%; height: 100%; background-color: rgba(255, 255, 255, 0.3); border-radius: 20px; overflow: hidden;">
                        <form method="post" action="{{ route('guests.reserveRoom', ['room' => $room->id] )}}" id='reservation-form'>
                        @csrf
                            <table style="width: 100%; font-family: 'Bona Nova', sans-serif;">
                                <tbody>
                                    <tr>
                                        <td class="room_detail_style">Room Name</td>
                                        <td class="room_detail_custom">{{$room->name}}</td>
                                    </tr>
                                    <tr>
                                        <td class="room_detail_style">Room Type</td>
                                        <td class="room_detail_custom">{{$room->roomType->room_type_name}}</td>
                                    </tr>
                                    <tr>
                                        <td class="room_detail_style">Price</td>
                                        <td class="room_detail_custom">{{$room->roomType->price}}</td>
                                    </tr>

                                    <tr>
                                        <td class="room_detail_style">Check In</td>
                                        <td class="room_detail_custom">
                                            <input type="datetime-local" id="check_in" name="check_in" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="room_detail_style">Check Out</td>
                                        <td class="room_detail_custom">
                                            <input type="datetime-local" id="check_out" class="" name="check_out" required>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Set the width of the buttons to 150px -->
            <table style="width: 100%; font-family: 'Bona Nova', sans-serif; margin-top: 40px;">
                <tbody>
                    <tr>
                        <td style="text-align: center;">
                            <a href="/guests/rooms"><button class="yellow_button" style="width: 250px; height: 35px; border-radius: 5px; background-color: #F4BB4B; color: #981E1E; font-family: 'Raleway', sans-serif; font-weight: bold;">Back to the page</button></a>
                        </td>
                        <td style="text-align: center;">
                            <a href="#"><button class="green_button" data-bs-toggle="modal" data-bs-target="#reservation-completion-id" style="width: 250px; height: 35px; border-radius: 5px; background-color: #448A47; color: #ffffff; font-family: 'Raleway', sans-serif; font-weight: bold;">Reservation</button></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        @include('guests.modal.reservation_completion_modal')
    </div>
</div>

@endsection





