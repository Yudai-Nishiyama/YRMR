@extends('layouts.app')

@section('title', 'Home')
@section('content')
    {{-- My RooM YouR RooM --}}
    <style>
        .room-background {
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
        }
        .room-background::before {
            content'';
        }

        .room-background h1 {
            font-size: 7em;
            text-shadow: 15px 2px 1px rgba(0, 0, 0, 0.8);
            color: #F4BB4B;
        }



        .images {

            display: flex;
            justify-content: space-around;
        }
        img{
            width: 500px;
            height: 300px;
        }
    </style>



    <div class="room-background">
        <h1 class="text-center" >My RoomM YouR RooM</h1>
    </div>



    {{-- MENU --}}
    <div class="memo mt-5 text-center"><h3>MEMO</h3></div>
    <div class="images mt-3">
        <div><img src="{{ asset('images/guest_home_1.png') }}"  alt="hotel_bed" ></div>
        <div><img src="{{ asset('images/guest_home_2.png') }}"  alt="hotel_bed" ></div>
        <div><img src="{{ asset('images/guest_home_sarch.png') }}"  alt="hotel_bed" ></div>
    </div>








        {{-- <table class="table mt-5 ">
            <thead>
                <tr>
                    <th class="text-center"><h3>MENU</h3></th>
                </tr>
            </thead>
            <tbody>
                <tr class="d-flex justify-content-center mt-5 ">
                    <td style=" position: relative; ">
                        <a href="#"><img src="{{ asset('images/guest_home_1.png') }}"  alt="hotel_bed" >
                            <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                                <i class="fa-solid fa-bed text-white" style="font-size: 80px;"></i>
                                <p class="text-white" style="font-size: 50px; font-family: 'Bona Nova'; ">Rooms</p>
                            </div>
                        </a>
                    </td>
                    <td style="position: relative;" >
                        <a href="#"><img src="{{ asset('images/guest_home_2.png') }}"  alt="hotel_bed" >
                            <div style=" position: absolute; top: 30%; left: 50%; transform: translate(-50%, -50%);">
                                <i class="fa-regular fa-square-check text-white " style="font-size: 80px;"></i>
                                <p class="text-white" style="font-size: 50px; font-family: 'Bona Nova'; ">Check Reservation</p>
                            </div>
                        </a>
                    </td>
                    <td style="position: relative;">
                        <a href="#"><img src="{{ asset('images/guest_home_sarch.png') }}"  alt="hotel_bed" >
                            <div style="position: absolute; top: 30%; left: 50%; transform: translate(-50%, -50%);">
                                <i class="fa-solid fa-magnifying-glass text-white" style="font-size: 80px;"></i>
                                <p class="text-white" style="font-size: 50px; font-family: 'Bona Nova'; ">Search</p>
                            </div>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table> --}}
@endsection
