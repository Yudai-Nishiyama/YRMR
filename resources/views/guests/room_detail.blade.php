@extends('layouts.app')

@section('title', 'Calender')

@section('content')

{{$all_room}}

<div class="roomdetail">
    <div class="container">
        <div class="row">
            <div class="col-6 ">
            <div class="row">
                    <div class="col roomdetail_image1 mt-5"><img  src="{{ asset('images/guest_roompage.png') }}" alt="image1"
                        style="max-width: 70%; height: auto; display: block;"></div>
                </div>
            <div class="row">
                    <div class="col roomdetail_image2 mt-3"><img src="{{ asset('images/room_detail_singlebed.png') }}" alt="image2"
                        style="max-width: 70%; height: auto; display: block;"></div>
                    <div class="col"></div>
            </div>
            <div class="row">
                <div class="col"></div>
                <div class="col image3"><img class="roomdetail_img3" src="{{ asset('images/room_details_bath.jpg') }}" alt="image3"
                    style="max-width: 70%; height: auto; display: block; max-width: 120%; height: auto; display: block;"></div>
                <div class="col"></div>
            </div>
            </div>
            <div class="col-6 mt-4">
                <h1 style="color:#F4924B">Room1</h1>
                <p style="font-family: 'Bona Nova';">This room is New York style. There is a large living room and comfortable bedroom. You can spend your time stress-free.</p>
                <div class="rd_detail" style="font-size:25px; width:600px; height:200px; background-color: rgba(235, 230, 230, 0.64); border-radius: 25px; margin-top:75px;">
                    <p class="ms-3" >Room Name:Room1</p>
                    <p class="ms-3" >Room Type: Single Bed</p>
                    <p class="ms-3" >Price: $300(tax)~</p>
                </div>
                <div class="roomdetail_bottons row" >
                    <div class="btn rd_btn-custom-color fw-bold " ><a href="#" style="text-decoration:none; color:#981E1E" >Back to the page</a></div>
                    <div class="btn rd_btn-custom-color2 float-end text-light ms-5 fw-bold "><i
                        class="fa-regular fa-calendar-check"></i>&nbsp; <a href="#" style="text-decoration:none; color:white;">Calendar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
