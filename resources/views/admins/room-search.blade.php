@extends('layouts.app')

@section('title', 'Room Search')

@section('content')
    {{-- Admin Controls --}}
    <div class="row g-0">
        @include('admins.admin-controls')

        {{-- Content --}}
        <div class="AdminRoomSearch-container col mx-5">  
            <div class="mt-4 text-center">
                <div class="content-title">Room Search</div>
                <div style="border-top: 3px solid #448A47; width: 600px; margin: 1px auto;"></div>
            </div>
        
            <div class="roomSearch-container">
                <div class="roomSearch-menu">
                    <img class="MRYR-logo" src="{{asset('images/MRYR-logo.png')}}" alt="MRYR logo">
                    <form method="post" action="{{ route('admin.rooms.roomSearcher') }}">
                        @csrf
                        <div class="roomSearch-inputs">
                            <div class="input-container mb-3">
                                <label for="room_name">Room Name</label>
                                <input type="text" id="room_name" name="room_name">
                            </div>
                            <div class="input-container mb-3">
                                <label for="roomtype">Room Type</label>
                                <select name="room_type" id="roomtype">
                                    <option value="all">All Types</option>
                                    <option value="1" selected>Single</option>
                                    <option value="2">Double</option>
                                    <option value="3">triple</option>
                                </select>
                            </div>
                        </div>
                        <div class="roomSearch-buttons">                      
                            <input class="button search-btn mt-5" type="submit" value="Search">
                            {{-- <a href=""><input class="button homepage_button" type="submit" value="Home page"></a> --}}
                            <a href="{{ route('admin.rooms.index') }}"><button class="button homepage_btn mt-3">Back to the page</button></a>
                        </div>
                    </form> 
                </div>
                
                @foreach ($rooms as $room )
                    <a class="search-result" href="#{{-- {{ route('guests.guestRoom') }} --}}">
                        <div class="search-rooms">
                            <div class="search-room-card">
                                <div class="room-number p-1 ms-3 mb-0">Room {{ $room->name }}</div>
                                    <div class="search-room-card-body d-flex justify-content-center align-items-center">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td>Room Type</td>
                                                    <td class="td-right td-spacing">{{ $room->roomType->room_type_name }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Price</td>
                                                    <td class="td-right td-spacing">{{ $room->roomType->price }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Status</td>
                                                    <td class="td-right td-spacing">{{ $room->status }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
                {{-- <div class="search-rooms">
                    <div class="search-room-card">
                        <div class="room-number p-1 ms-3 mb-0">Room {{$room->name}</div>
                        <div class="search-room-card-body d-flex justify-content-center align-items-center">
                            <table>
                                <tbody>
                                    <tr>
                                        <td>Room Type</td>
                                        <td class="td-right td-spacing">Single bed</td>
                                    </tr>
                                    <tr>
                                        <td>Price</td>
                                        <td class="td-right td-spacing">$300</td>
                                    </tr>
                                    <tr>
                                        <td>Date</td>
                                        <td class="td-right td-spacing">11/1~11/2</td>
                                    </tr>
                                </tbody>    
                            </table>
                        </div>
                    </div>
                </div> --}}
            </div>        
        </div>
    </div>
@endsection