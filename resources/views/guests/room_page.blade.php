@extends('layouts.app')

@section('title', 'View Cleaning Task')

@section('content')
@foreach ($all_room as $room)
<div class="roombody " >


    <div class="row">
        <div class="col-3">
        </div>
        <div class="col-5">
            <div class="card mt-5 custom-card" style="height:700px; border-radius:25px 25px 25px 25px;" >
                <div class="card-header" style="border:1px solid black; border-bottom:none; background-color: #fbfbfb; border-radius:25px 25px 0px 0px;">
                         <div class="d-flex justify-content-between align-items-center">
                            <h1 style="color:#F4BB4B" class="fw-bold">Room1</h1>
                            <p>
                                <i class="fa-solid fa-heart" style="font-size:60px; color:rgb(142, 8, 8);"></i>
                            </p>

                        </div>
                    </div>
                    <div class="card-body"  style="border:1px solid black; border-top:none; border-radius:0px 0px 25px 25px;">
                        <div class="row "  >
                            <div class="col rp_imagebox" style="height: 330px; width: 732px;">
                                <img src="{{ asset('storage/images/room/'. $room->image)}}"  alt="TEST" style="max-width: 100%; height: auto; display: block;"></div>
                        </div>

                        {{-- details --}}
                        <div class="row mx-auto rp_detail" >
                            <div class="col">
                            <a href="#" style="text-decoration:none;" >
                                <div class=" row col">
                                    <div class="adult ms-3 col text-dark" >
                                        <h3 style="font-family: 'Raleway', sans-serif; font-size:25px;">
                                            @if ($room->roomType->room_type_name === 'single bed')
                                            Adult 1
                                            @elseif ($room->roomType->room_type_name === 'double bed')
                                            Adult 2
                                            @endif

                                        </h3>
                                    </div>
                                    <div class="col" style="font-size:25px;"><p class="badge bg-light bg-opacity-50 text-dark"
                                        style="border-radius:25px;border:1px solid black; border-shadow: 1px 2px 1px rgba(0, 0, 0, 0.3);">{{$room->roomType->room_type_name}}</p></div>
                                </div>
                                <div class="row align-items-center" >
                                    <div class="col ms-3">
                                        <h1 style="color:#981E1E;">Sum {{$room->roomType->price}}$(tax)</h1>
                                    </div>
                                    <div class="col text-end text-secondary me-3"
                                        style="font-size:30px; "><a href="{{route('guests.roomDetail' , $room->id)}}" style=""><i class="fa-solid fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </a>
                    {{-- Reservation --}}
                    <div class="row">
                        <a href="{{ route('guests.reservation', ['room' => $room->id])}}">
                            <div class="col btn  text-light float-end mt-2 "
                            style="border-radius: 25px; font-weight: bold; min-width: 200px;background-color:#448A47;"><h4 style="font-family: 'Raleway', sans-serif;">Reservation<i class="fa-solid fa-caret-right"></i></h4>
                            </div>
                        </div>

                            {{-- Reservation --}}
                            {{-- <div class="row">
                                <a href="{{route('guests.reservation')}}">
                                    <div class="col btn  text-light float-end mt-2 "
                                    style="border-radius: 25px; font-weight: bold; min-width: 200px;background-color:#448A47;"><h4 style="font-family: 'Raleway', sans-serif;">Reservation<i class="fa-solid fa-caret-right"></i></h4>
                                    </div>
                                </a>
                            </div> --}}
                        </a>
                    </div>

                </div>
            </div>

            </div>
        {{-- @endforeach --}}

        </div>
            <div class="col-3 roommenu text-end">
                @if ($room_looped===NULL)
                    <div class="mt-5 "  >
                        <div class="justify-content-center d-flex ">
                            <a href="{{ route('home') }}"><h3 class="btn rp_btn-custom-color1 text-light d-flex justify-content-center align-items-center fw-bold">HOME</h3></a>
                        </div>
                        <div class="justify-content-center d-flex ">
                            <a href="{{route('guests.checkReservation',\USER::class)}}"><h3 class="btn rp_btn-custom-color2 text-light mt-2 d-flex justify-content-center align-items-center fw-bold"><i
                            class="fa-regular fa-square-check d-flex" style="font-size:40px;"></i> <span class="d-flex me-4 p-0">Check Confirmation</span></h3></a>
                        </div>
                        <div class="justify-content-center d-flex ">
                            <a href="{{route('guests.searchRoom')}}"> <h3 class="btn rp_btn-custom-color2 text-light mt-2 d-flex justify-content-center align-items-center fw-bold"><i
                            class="fa-solid fa-magnifying-glass d-flex" style="font-size:40px; margin-right:55px;"></i><span class="d-flex" style="margin-right:85px;">Search</span>
                        </div></a>
                    </div>
                    @php
                        $room_looped = $room->id;
                    @endphp
                @else

                @endif
            </div>

     </div>

</div>
@endforeach
@endsection
