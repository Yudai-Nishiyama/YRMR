@extends('layouts.app')

@section('title', 'Reservation')

@section('content')

<div class="bg-image">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mt-4">
                <h1 style="font-size: 64px; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);" class="underline">Check Reservation</h1>
            </div>
        </div>

        <div class="row mt-4 justify-content-left">
            <h2>Reservation Comfirmed</h2>
        </div>

        <div class="row mt-3">
            <div class="col-md-6">
                <div class="card" style="background-color: #981E1E; color: white;">
                    <div class="card-header d-flex justify-content-center align-items-center" style="height: 100px; border-bottom: 1px solid white;">
                        <h1 style="font-size: 48px; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">Room1</h1>
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
                        <h1 style="font-size: 48px; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">Reservation Details</h1>
                    </div>
                    <div class="card-body d-flex justify-content-center align-items-center" style="height: 400px;">
                        <div class="d-flex justify-content-center align-items-center" style="width: 100%; height: 100%; background-color: rgba(255, 255, 255, 0.3); border-radius: 20px; overflow: hidden;">
                            <table style="width: 80%; font-family: 'Bona Nova', sans-serif;">
                                <tbody>
                                    <tr>
                                        <td style="text-align: left; font-size: 28px; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">Room Name</td>
                                        <td style="text-align: left; font-size: 28px; font-family: 'Bona Nova', sans-serif; color: #F4BB4B; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">{{$room->name}}</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: left; font-size: 28px; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">Room Type</td>
                                        <td style="text-align: left; font-size: 28px; font-family: 'Bona Nova', sans-serif; color: #F4BB4B; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">{{$room_type->room_type_name}}</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: left; font-size: 28px; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">Price</td>
                                        <td style="text-align: left; font-size: 28px; font-family: 'Bona Nova', sans-serif; color: #F4BB4B; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">{{$room_type->price}}</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: left; font-size: 28px; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">Date</td>
                                        <td style="text-align: left; font-size: 28px; font-family: 'Bona Nova', sans-serif; color: #F4BB4B; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">{{ $reservation->check_in }} ~ {{ $reservation->check_out }}</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: left; font-size: 28px; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">Reservation Number</td>
                                        <td style="text-align: left; font-size: 28px; font-family: 'Bona Nova', sans-serif; color: #F4BB4B; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">{{$reservation->reservation_number}}</td>
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
                                <a href="#"><button class="back_button" style="width: 250px; height: 35px; border-radius: 5px; background-color: #448A47; color: #ffffff; font-family: 'Raleway', sans-serif; font-weight: bold;">Return to home page</button></a>
                            </td>
                            <td style="text-align: center;">
                                <a href="#"><button class="reservation_button" data-bs-toggle="modal" data-bs-target="#reservation-cancelation-id" style="width: 250px; height: 35px; border-radius: 5px; background-color: #F4BB4B; color: #981E1E; font-family: 'Raleway', sans-serif; font-weight: bold;">Cancel the eservation</button></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            @include('guests.modal.cancel_reservation_completion_modal')
        </div>

        <div class="row mt-4 justify-content-left">
            <h2>Reservation History</h2>
        </div>
        <div class="row mt-3 justify-content-center">
            <table style="width: 98%; font-family: 'Bona Nova', sans-serif; background-color: white; border-radius: 25px;">
                <thead >
                    <tr>
                        <th class="history" style="font-size: 20px;">Check IN</th>
                        <th class="history" style="font-size: 20px;">Check OUT</th>
                        <th class="history" style="font-size: 20px;">Room Number</th>
                        <th class="history" style="font-size: 20px;">Room Type</th>
                        <th class="history" style="font-size: 20px;">Reservation Number</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($reservationHistory as $resHistory)
                        <tr>
                            <td class="history last" style="text-align: left; font-size: 20px;">{{$resHistory->check_in}}</td>
                            <td class="history last" style="text-align: left; font-size: 20px; font-family: 'Bona Nova', sans-serif;">{{$resHistory->check_out}}</td>
                            <td class="history last" style="text-align: left; font-size: 20px;">{{$room->name}}</td>
                            <td class="history last" style="text-align: left; font-size: 20px;">{{$room_type->room_type_name}}</td>
                            <td class="history last" style="text-align: left; font-size: 20px;">{{$resHistory->reservation_number}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>


@endsection
