@extends('layouts.app')

@section('title', 'Admin All Rooms')

@section('content')

<div class="row g-0">
    @include('admins.admin-controls')
        {{-- Content of All Rooms (Admin Index Page) --}}
        <div class="adminIndex-content col me-5">
            <!-- Search and Create room button-->   
            <div class="buttons-above mt-5 me-5 text-end">
                {{-- <a href="{{ route('admin.rooms.showRoomSearch') }}" class="btn search-btn px-3"><i class="fa-solid fa-magnifying-glass me-2"></i>Search a room</a> --}}
                <a href="{{ route('admin.rooms.showCreateRoom') }}" class="btn create-btn px-3 ms-5"><i class="fa-solid fa-plus me-2"></i>Create a new room</a>
            </div>

            <div class="all-rooms-container mt-5 ms-5">
                @foreach ($cards as $card)
                @if($card['check_in'] && !$card['check_out'])
                    <a href="{{ route('admin.rooms.details', ['id' => $card['room']->id]) }}" class="text-decoration:none;">
                        <div class="all-rooms-card checkedin">
                            <p class="room-number p-1 ms-3 mb-0">Room {{ $card['room']->name }}</p>
                            <p class="room-status checked-in mt-2 mb-4">Checked IN</p>
                            <div class="date mb-4">
                                <p class="text-start ms-5 mb-0 font-weight-bold"> {{ $card['check_in_date'] }}</p>
                                <p class="text-end me-5 mb-0 font-weight-bold"> ~{{ $card['check_out_date'] }}</p> 
                            </div>
                            @if($card['next_reservation'] == "Vacant")
                            <div class="row next-reserv vacant mt-2 text-center">
                                <div class="mt-2">
                                    Next Reservation  <span class="ms-3" style="font-size: 24px;">Vacant</span>
                                </div>
                            </div>
                            @else
                            <div class="row next-reserv mt-4 my-3">
                                <div class="col mt-3 ms-4">
                                    Next Reservation
                                </div>
                                <div class="col date">
                                    <p class="mb-0 font-weight-bold">{{ $card['next_reservation_year'] }}</p>
                                    <p class="mb-0 font-weight-bold" style="font-size: 18px;">{{ $card['next_reservation'] }} ~</p>
                                </div>
                            </div>
                            @endif
                        </div>
                    </a>
                @elseif($card['status'] == null) 
                    <a href="{{ route('admin.rooms.details', ['id' => $card['room']->id]) }}" class="text-decoration:none;">
                        <div class="all-rooms-card not-cleaned">
                            <p class="room-number p-1 ms-3 mb-0">Room {{ $card['room']->name }}</p>
                            @if($card['next_reservation'] == "Vacant")
                                <p class="room-status checked-out mt-2">Checked OUT</p>
                            @else
                                <p class="room-status not-cleaned mt-2">Reserved</p>
                            @endif
                            <div class="no-gutters align-items-center">
                                <div class="ms-4 mb-2">
                                    <p class="mb-0">Cleaning Progress</p>
                                </div>
                                <div class="ms-4 me-4">
                                    <div class="cleaning-progress"></div>
                                </div>
                                <div class="cleaning-status text-end me-4 mt-1">
                                    Not Cleaned
                                </div>
                            </div>
                            @if($card['next_reservation'] == "Vacant")
                                <div class="row next-reserv vacant mt-2 text-center">
                                    <div class="mt-2">
                                        Next Reservation  <span class="ms-3" style="font-size: 24px;">Vacant</span>
                                    </div>
                                </div>
                            @else
                                <div class="row next-reserv mt-2 my-3">
                                    <div class="col mt-3 ms-4">
                                        Next Reservation
                                    </div>
                                    <div class="col date not-cleaned">
                                        <p class="mb-0 font-weight-bold">{{ $card['next_reservation_year'] }}</p>
                                        <p class="mb-0 font-weight-bold" style="font-size: 18px;">{{ $card['next_reservation'] }} ~</p>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </a>
                @elseif($card['status'] < 3 )
                    <a href="{{ route('admin.rooms.details', ['id' => $card['room']->id]) }}" class="text-decoration:none;">
                        <div class="all-rooms-card cleaning">
                            <p class="room-number p-1 ms-3 mb-0">Room {{ $card['room']->name }}</p>
                            @if($card['next_reservation'] == "Vacant")
                                <p class="room-status checked-out mt-2">Checked OUT</p>
                            @else
                                <p class="room-status cleaning mt-2">Reserved</p>
                            @endif
                            <div class="no-gutters align-items-center">
                                <div class="ms-4 mb-2">
                                    <p class="mb-0">Cleaning Progress</p>
                                </div>
                                <div class="ms-4 me-4">
                                    <div class="cleaning-progress">
                                        @if($card['status'] == 1)
                                            <div class="progress-bar-30"></div>
                                        @elseif($card['status'] == 2)
                                            <div class="progress-bar-60"></div>
                                        @else
                                            <div class="cleaning-completed"></div>
                                        @endif
                                    </div>
                                </div>
                                <div class="progress-percent text-end me-4 mt-1">
                                    @if($card['status'] == 1)
                                    30%
                                    @elseif($card['status'] == 2)
                                    60%
                                    @else
                                    100%
                                    @endif
                                </div>
                            </div>
                            @if($card['next_reservation'] == "Vacant")
                                <div class="row next-reserv vacant mt-2 text-center">
                                    <div class="mt-2">
                                        Next Reservation  <span class="ms-3" style="font-size: 24px;">Vacant</span>
                                    </div>
                                </div>
                            @else
                                <div class="row next-reserv mt-2 my-3">
                                    <div class="col mt-3 ms-4">
                                        Next Reservation
                                    </div>
                                    <div class="col date cleaning">
                                        <p class="mb-0 font-weight-bold">{{ $card['next_reservation_year'] }}</p>
                                        <p class="mb-0 font-weight-bold" style="font-size: 18px;">{{ $card['next_reservation'] }} ~</p>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </a>
                @else
                    <a href="{{ route('admin.rooms.details', ['id' => $card['room']->id]) }}" class="text-decoration:none;">
                        <div class="all-rooms-card completed">
                            <p class="room-number p-1 ms-3 mb-0">Room {{ $card['room']->name }}</p>
                            @if($card['next_reservation'] == "Vacant")
                                <p class="room-status checked-out mt-2">Checked OUT</p>
                            @else
                                <p class="room-status completed mt-2">Reserved</p>
                            @endif
                            <div class="no-gutters align-items-center">
                                <div class="ms-4 mb-2">
                                    <p class="mb-0">Cleaning Progress</p>
                                </div>
                                <div class="ms-4 me-4">
                                    <div class="cleaning-completed"></div>
                                </div>
                                <div class="cleaning-status completed text-end me-4 mt-1">
                                    Competed
                                </div>
                            </div>
                            @if($card['next_reservation'] == "Vacant")
                                <div class="row next-reserv vacant mt-2 text-center">
                                    <div class="mt-2">
                                        Next Reservation  <span class="ms-3" style="font-size: 24px;">Vacant</span>
                                    </div>
                                </div>
                            @else
                                <div class="row next-reserv mt-2 my-3">
                                    <div class="col mt-3 ms-4">
                                        Next Reservation
                                    </div>
                                    <div class="col date completed">
                                        <p class="mb-0 font-weight-bold">{{ $card['next_reservation_year'] }}</p>
                                        <p class="mb-0 font-weight-bold" style="font-size: 18px;">{{ $card['next_reservation']  }} ~</p>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </a>
                @endif
                @endforeach
            </div>
            <div class="color-indicater d-inline float-end mt-3 me-5 mb-5">
                <p class="d-inline me-4"><i class="fa-sharp fa-solid fa-square me-1" style="color: #2C462B"></i><span class="fw-bold">Checked IN</span></p>
                <p class="d-inline me-4"><i class="fa-sharp fa-solid fa-square me-1" style="color: #448A47"></i>Cleaning Status: <span class="fw-bold">Completed</span></p>
                <p class="d-inline me-4"><i class="fa-sharp fa-solid fa-square me-1" style="color: #F4BB4B"></i>Cleaning Status: <span class="fw-bold">Cleaning</span></p>
                <p class="d-inline me-4"><i class="fa-sharp fa-solid fa-square me-1" style="color: #981E1E"></i>Cleaning Status: <span class="fw-bold">Not Cleaned</span></p>
            </div>
        </div>  
    </div> 
@endsection