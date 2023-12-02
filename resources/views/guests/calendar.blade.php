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
            <h2 class="display-5 fw-bold" style="color:#F4924B;">Room 1</h2>
            <img class="room_img my-3" src="{{ asset('images/room1.png') }}" alt="Room1">
            <button class="btn btn-lg mt-5 px-5 fw-bold" style="background-color: #F4BB4B; color:#981E1E">Back to the page</button>
        </div>

        <div class="col-7">
            <div class="mt-5 calendar">
                <div class="p-4 text-center" style="background-color: #F4BB4B; border-radius: 10px 10px 0px 0px">
                    <div class="row">
                        <div class="col-4 text-start">
                            <a class="btn fw-bold" href="{{ route('showCalendar', ['ym' => $prev]) }}" style="background-color: #2C462B; color: #ffffff;"><i class="fa-solid fa-caret-left"></i> Last Month</a>
                        </div>
                        <div class="col-4">
                            <span class="mx-3 h2 display-5 fw-bold">{{ $html_title }}</span>
                        </div>
                        {{-- @if ($next !== null) --}}
                        <div class="col-4 text-end">
                            <a class="btn fw-bold" href="{{ route('showCalendar', ['ym' => $next]) }}" style="background-color: #2C462B; color: #ffffff;"><i class="fa-solid fa-caret-right"></i> Next Month</a>
                        </div>
                        {{-- @endif --}}
                    </div>
                </div>
                
                <table class="table table-bordered" style="border:1px solid black">
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


<style>
           /* calendar */
           .calendar a {
        text-decoration: none;
        }

        .calendar th {
            height: 30px;
            text-align: center;
            background-color:  #F4BB4B;
            font-size: 32px;
        }
        
        .calendar td {
            height: 100px;
            font-size: 48px;
            font-weight: bold;
            
        }
        .calendar .today {
            background-color: orange !important;
            /* background: orange; */
        }
        .calendar th:nth-of-type(1), td:nth-of-type(1) {
            color: red;
        }
        .calendar th:nth-of-type(7), td:nth-of-type(7) {
            color: blue;
        }
        .room_img{
            width:60rem;
            height: 35rem;
        }
        /* calendar end */
</style>



@endsection