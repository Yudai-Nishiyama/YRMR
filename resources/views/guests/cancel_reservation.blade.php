@extends('layouts.app')

@section('title', 'Reservation')

@section('content')

<div class="container mt-4">
    <div class="row">
        <div class="col-md-12 text-center">
            <h1 style="font-size: 64px; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);" class="underline">Cancel Reservation</h1>
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
                                    <td style="text-align: left; font-size: 28px; font-family: 'Bona Nova', sans-serif; color: #F4BB4B; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">Room1</td>
                                </tr>
                                <tr>
                                    <td style="text-align: left; font-size: 28px; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">Room Type</td>
                                    <td style="text-align: left; font-size: 28px; font-family: 'Bona Nova', sans-serif; color: #F4BB4B; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">Single bed</td>
                                </tr>
                                <tr>
                                    <td style="text-align: left; font-size: 28px; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">Price</td>
                                    <td style="text-align: left; font-size: 28px; font-family: 'Bona Nova', sans-serif; color: #F4BB4B; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">$300</td>
                                </tr>
                                <tr>
                                    <td style="text-align: left; font-size: 28px; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">Date</td>
                                    <td style="text-align: left; font-size: 28px; font-family: 'Bona Nova', sans-serif; color: #F4BB4B; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">11/1~11/2</td>
                                </tr>
                                <tr>
                                    <td style="text-align: left; font-size: 28px; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">Reservation Number</td>
                                    <td style="text-align: left; font-size: 28px; font-family: 'Bona Nova', sans-serif; color: #F4BB4B; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">2#426740671012</td>
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
                            <a href="#"><button class="back_button" style="width: 250px; height: 35px; border-radius: 5px; background-color: #448A47; color: #ffffff; font-family: 'Raleway', sans-serif; font-weight: bold;">Back to home page</button></a>
                        </td>
                        <td style="text-align: center;">
                            <a href="#"><button class="reservation_button" data-bs-toggle="modal" data-bs-target="#reservation-completion-id" style="width: 250px; height: 35px; border-radius: 5px; background-color: #F4BB4B; color: #981E1E; font-family: 'Raleway', sans-serif; font-weight: bold;">Cancel the reservation</button></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        @include('guests.modal.cancel_reservation_completion_modal')
    </div>
</div>


<style>
    /* カスタムのスタイルを追加 */
    .underline {
        border-bottom: 1px solid #448a47;
    }

    .back_button {
        border: 1px solid #448a47;
        box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
        transition: box-shadow 0.4s ease;
    }

    .reservation_button {
        border: 1px solid #F4BB4B;
        box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
        transition: box-shadow 0.4s ease;
    }

    .back_button:hover {
        box-shadow: none;
    }

    .reservation_button:hover {
        box-shadow: none;
    }
</style>

@endsection
