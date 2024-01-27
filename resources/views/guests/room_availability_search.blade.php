@extends('layouts.app')

@section('title', 'Reservation')

@section('content')


<div class="bg-search">

    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mt-4">
                <h1 style="font-size: 64px; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);" class="underline">Room Search</h1>
            </div>
        </div>

        <div class="search-container">

        <div class="search-memus">

            <img class="logo" src="{{asset('images/My Room Your Room-logos 2.png')}}" alt="ホテルのロゴ">

            <form method="post" action="{{ url('/guests/room-searcher') }}">
                @csrf
                <div class="search-inputs">
                    <div class="input-container">
                        <label for="roomtype">Room Type</label>
                        <select class="select_check" name="room_type" id="roomtype">
                            <option value="1" selected>Single</option>
                            <option value="2">Double</option>
                            <option value="3">Triple</option>
                        </select>
                    </div>
                    <div class="input-container">
                        <label for="checkin_date">Reservation Date (check-in)</label>
                        <input class="input_check" type="date" id="checkin_date" name="checkin_date">
                    </div>
                    <div class="input-container">
                        <label for="checkout_date">Reservation Date (check-out)</label>
                        <input class="input_check" type="date" id="checkout_date" name="checkout_date">
                    </div>
                </div>
                <div class="search-buttons">
                    <div class="search-button">
                        <input class="button submit_button" type="submit" value="Search">
                    </div>
                    <div class="search-button">
                        <a href="{{ url('/') }}"><button type="button" class="button homepage_button button_check">Home page</button></a>
                    </div>
                </div>
            </form>

            {{-- @foreach($availableRooms as $room)
                <p>{{ $room->room_type }} is available</p>
            @endforeach

            @if($availableRooms->isEmpty())
                <p>No rooms available for the specified date range.</p>
            @endif --}}
        </div>

        @foreach ($availableRooms as $room )
        <a class="search-result" href="{{ route('guests.guestRoom')}}">
            <div class="search-rooms">
                <div class="rooms">
                    <div class="tool checkedin" style="padding: 10px;">
                        <h2 class="room-number p-1 ms-3 mb-0" style="font-family: 'Raleway', sans-serif;">{{$room->name}}</h2>
                        <div class="d-flex justify-content-center align-items-center" style="width: 95%; height:80%; background-color: rgba(255, 255, 255, 0.3); border-radius: 20px; overflow: hidden; margin: auto;">
                            <table style="width: 90%; font-family: 'Bona Nova', sans-serif;">
                                <tbody>
                                    <tr>
                                        <td style="text-align: left; font-size: 20px; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">Room Type</td>
                                        <td style="text-align: left; font-size: 20px; font-family: 'Bona Nova', sans-serif; color: #F4BB4B; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">{{$room->roomType->room_type_name}}</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: left; font-size: 20px; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">Price</td>
                                        <td style="text-align: left; font-size: 20px; font-family: 'Bona Nova', sans-serif; color: #F4BB4B; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">{{$room->roomType->price}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        @endforeach
    </div>

</div>


@endsection
