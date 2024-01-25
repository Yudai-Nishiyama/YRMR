@extends('layouts.app')

@section('title', 'Calender')

@section('content')

<div class="container-fluid px-5">
    <div class="row">
        <div class="col"></div>
        <div class="col text-center" style="border-bottom: 1px solid #448A47;">
            <h2 class="display-5 fw-bold">Calendar</h2>
        </div>
        <div class="col"></div>
    </div>

    <div class="row">
        <div class="col-5">
            <div class="row mt-5">
                <div class="col">
                    <h2 class="display-5 fw-bold" style="color:#F4924B;">Room 1</h2>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col">
                    <img class="room_img my-3" src="{{ asset('images/room1.png') }}" alt="Room1">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button class="btn btn-lg mt-5 px-5 fw-bold" style="background-color: #F4BB4B; color:#981E1E">Back to the page</button>
                </div>
            </div>
        </div>

        <div class="col-7 d-flex justify-content-center">
            <div class=" calendar mt-2">
                <div class="calender-head px-4 py-3 text-center">
                    <div class="row">
                        <div class="col-2 text-start">
                            <a class="btn fw-bold" href="{{ route('showCalendar', ['ym' => $prev, 'id' => $room->id]) }}" style="background-color: #2C462B; color: #ffffff;"><i class="fa-solid fa-caret-left"></i> Last Month</a>
                        </div>
                        <div class="col-8">
                            <span class="mx-3 h2 display-5 fw-bold">{{ $html_title }}</span>
                        </div>
                        {{-- @if ($next !== null) --}}
                        <div class="col-2 text-end">
                            <a class="btn fw-bold" href="{{ route('showCalendar', ['ym' => $next, 'id' => $room->id]) }}" style="background-color: #2C462B; color: #ffffff;"><i class="fa-solid fa-caret-right"></i> Next Month</a>
                        </div>
                        {{-- @endif --}}
                    </div>
                </div>
                <a href=""></a>
                <table class="table">
                    <thead>
                    <tr>
                        <th>Sun</th>
                        <th>Mon</th>
                        <th>Tue</th>
                        <th>Wed</th>
                        <th>Thu</th>
                        <th>Fri</th>
                        <th>Sat</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($weeks as $week)
                            {!! $week !!}
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection