@extends('layouts.app')

@section('title', 'Calender')

@section('content')


    <div class="container">
        <div class="row">
            <div class="col-6 ">
            <div class="row">
                    <div class="col image1 mt-5"><img  src="{{ asset('images/guest_roompage.png') }}" alt="image1"></div>
                </div>
            <div class="row">
                    <div class="col image2 mt-3"><img src="{{ asset('images/room_detail_singlebed.png') }}" alt="image2"></div>
                    <div class="col"></div>
            </div>
            <div class="row">
                <div class="col"></div>
                <div class="col image3"><img class="img3" src="{{ asset('images/room_details_bath.jpg') }}" alt="image3"></div>
                <div class="col"></div>
            </div>
            </div>
            <div class="col-6 mt-4">
                <h1 style="color:#F4924B">Room1</h1>
                <p style="font-family: 'Bona Nova';">This room is New York style. There is a large living room and comfortable bedroom. You can spend your time stress-free.</p>
                <div class="detail" style="font-size:25px; width:600px; height:200px; background-color: rgba(235, 230, 230, 0.64); border-radius: 25px; margin-top:75px;">
                    <p class="ms-3" style="font-family: 'Bona Nova';">Room Name:Room1</p>
                    <p class="ms-3" style="font-family: 'Bona Nova';">Room Type: Single Bed</p>
                    <p class="ms-3" style="font-family: 'Bona Nova';">Price: $300(tax)~</p>
                </div>
                <div class="bottons row ">
                    <div class="btn btn-custom-color fw-bold " style="border-radius:25px; font-family:'Raleway';"><a href="#" style="text-decoration:none; color:#981E1E;">Back to the page</a></div>
                    <div class="btn btn-custom-color2 float-end text-light ms-5 fw-bold " style="border-radius:25px; font-family:'Raleway';"><i
                        class="fa-regular fa-calendar-check"></i>&nbsp; <a href="#" style="text-decoration:none; color:white;">Calendar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
