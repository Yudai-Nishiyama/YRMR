@extends('layouts.app')

@section('title', 'Home')
@section('content')

    <div class="homebackground mt-0">
        <h1 class="text-center"
        >My RooM YouR RooM</h1>
    </div>

<div class="home">

    {{-- MENU --}}
    <h3 class="homemenu mt-5 text-center" style="border-bottom:2px solid #448A47; width:25%;">MENU</h3>
    <div class="homeimages mt-3" >
        <div class="images1">
            <a href="{{ route('guestRoom') }}" style="text-decoration: none;"><img src="{{ asset('images/guest_home_1.png') }}"  alt="hotel_bed">
                <div class="homeitem" >
                    <i class="fa-solid fa-bed text-white " style="font-size: 80px;"></i>
                    <p class="text-white" style="font-size: 50px; font-family: 'Bona Nova'; ">Rooms</p>
                </div>
            </a>
        </div>
        <div class="images2">
            <a href="{{ route('checkReservation') }}" style="text-decoration: none;text-align: center;"><img src="{{ asset('images/guest_home_2.png') }}"  alt="hotel_bed" >
                <div class="homeitem" >
                    <i class="fa-regular fa-square-check text-white " style="font-size: 80px;"></i>
                    <p class="text-white" style="font-size: 50px; font-family: 'Bona Nova'; ">Check Reservation</p>
                </div>
            </a>
        </div>
        <div class="images3">
            <a href="{{ route('searchRoom') }}" style="text-decoration: none;text-align: center;"><img src="{{ asset('images/guest_home_sarch.png') }}"  alt="hotel_bed" >
                <div class="homeitem" >
                    <i class="fa-solid fa-magnifying-glass text-white" style="font-size: 80px;"></i>
                    <p class="text-white" style="font-size: 50px; font-family: 'Bona Nova'; ">Search</p>
                </div>
            </a>
        </div>
    </div>
</div>

@endsection
