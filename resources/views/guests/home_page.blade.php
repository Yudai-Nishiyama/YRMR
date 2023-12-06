@extends('layouts.app')

@section('title', 'Home')
@section('content')
    {{-- My RooM YouR RooM --}}
    {{-- CSS はpublic > css に格納する --}}
    <style>
        .room-background {
            position: relative;
            background-image: url('/images/guest_home.png');
            background-size: cover;
            background-position: center;
            height: 40vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            font-family: 'Bona Nova';
            z-index: -2;
        }
        .room-background::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(255, 255, 255, 0.3);
            z-index: -1;
        }

        .room-background h1 {
            font-size: 7em;
            text-shadow: 15px 2px 1px rgba(0, 0, 0, 0.8);
            color: #F4BB4B;
        }
        .memo {
            font-size:2.5em;
        }
        .images {
            position: relative;
            display: flex;
            justify-content: space-around;

        }
        .images a {
            text-decoration: none;
            text-align: center;

        }

        .item {
            margin-top: -220px;
            position: relative;
            z-index: 2;
            background-color: rgba(255, 255, 255, 0.3);
        }

        img{
            width: 500px;
            height: 270px;
        }

        h3{
            margin:0 auto;
        }


    </style>



    <div class="room-background mt-0">
        <h1 class="text-center" >My RooM YouR RooM</h1>
    </div>



    {{-- MENU --}}
    <h3 class="memo mt-5 text-center" style="border-bottom:2px solid #448A47; padding-bottom:5px;
        margin-bottom:10px; width:25%">MENU</h3>
    <div class="images mt-3">
        <div class="images1">
            <a href="#"><img src="{{ asset('images/guest_home_1.png') }}"  alt="hotel_bed" >
                <div class="item">
                    <i class="fa-solid fa-bed text-white " style="font-size: 80px;"></i>
                    <p class="text-white" style="font-size: 50px; font-family: 'Bona Nova'; ">Rooms</p>
                </div>
            </a>
        </div>
        <div class="images2">
            <a href="#"><img src="{{ asset('images/guest_home_2.png') }}"  alt="hotel_bed" >
                <div class="item">
                    <i class="fa-regular fa-square-check text-white " style="font-size: 80px;"></i>
                    <p class="text-white" style="font-size: 50px; font-family: 'Bona Nova'; ">Check Reservation</p>
                </div>
            </a>
        </div>
        <div class="images3">
            <a href="#"><img src="{{ asset('images/guest_home_sarch.png') }}"  alt="hotel_bed" >
                <div class="item">
                    <i class="fa-solid fa-magnifying-glass text-white" style="font-size: 80px;"></i>
                    <p class="text-white" style="font-size: 50px; font-family: 'Bona Nova'; ">Search</p>
                </div>
            </a>
        </div>
    </div>


@endsection
