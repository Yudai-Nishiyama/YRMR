@extends('layouts.app')

@section('title', 'Check Cleaning Progress')

@section('content')

<div class="container">
    <div class="card" style="border:none;">
        <div class="card-header" style="background-color: #2C462B; border-radius:25px 25px 0px 0px;">
            <div class="row">
                <div class="col">
                    <h2 style="color:#F4BB4B" class="fw-bold">Guest Profile</h2>
                </div>
                <div class="col d-flex align-items-center justify-content-end">
                    <a href="#" class="float-end btn px-4" style="background-color:#448A47; color:#FFFFFF; ">Back to the page</a>
                </div>
            </div>
        </div>

        <div class="cleaner-view-task card-body justify-content-center w-75 mx-auto fw-bold">
            {{-- first row --}}
           <div class="row">
                <div class="col-5">Full Name</div>
                <div class="col-2"></div>
                <div class="col-5">Username</div>
           </div>
           <div class="row text-center">
                <div class="col-5" style="border-bottom: 1px solid black">First Name Last Name</div>
                <div class="col-2"></div>
                <div class="col-5" style="border-bottom: 1px solid black;">username1</div>
           </div>
           {{-- second row --}}
           <div class="row mt-4">
                <div class="col-5">Phone Number</div>
                <div class="col-2"></div>
                <div class="col-5">Email</div>
           </div>
           <div class="row text-center">
                <div class="col-5" style="border-bottom: 1px solid black;">090-1234-5678</div>
                <div class="col-2"></div>
                <div class="col-5" style="border-bottom: 1px solid black;">sample.email_address@gmail.com</div>
            </div>
            {{-- thrid row --}}
            <div class="row mt-4">
                <div class="col-5">Address</div>
                <div class="col-2"></div>
                <div class="col-5">Latest Reservation</div>
           </div>
           <div class="row text-center">
                <div class="col-5" style="border-bottom: 1px solid black">1-2-3 sample-city, Tokyo, Japan</div>
                <div class="col-2"></div>
                <div class="col-5" style="border-bottom: 1px solid black">2023-11-14(Tue.)~2023-11-15(Wed.)</div>
            </div>

            <div class="row mt-5">
                <div class="col">Reservation History</div>
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
                    <tr style="border-bottom: 1px solid black">
                        <td>2023-11-14(Tue.)</td>
                        <td>2023-11-15(Wed.)</td>
                        <td>Room 101</td>
                        <td>Single Bed</td>
                        <td>1234656789</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="card-footer" style="background-color: #2C462B; border-radius:0px 0px 25px 25px;">
            <br>
        </div>
    </div>
</div>

@endsection