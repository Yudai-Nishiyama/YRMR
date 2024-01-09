@extends('layouts.app')

@section('title', 'Admin Cleaning Progress Page')

@section('content')

<div class="container">
    <div class="card" style="border:none;">
        <div class="card-header" style="background-color: #2C462B; border-radius:25px 25px 0px 0px;">
            <div class="row">
                <div class="col">
                    <h2 style="color:#F4BB4B" class="fw-bold">Cleaning Progress Page</h2>
                </div>
            </div>
        </div>
    
        <div class="card-body justify-content-center border">
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Room No.</th>
                        <th>Room Type</th>
                        <th>Progress bar</th>
                        <th></th>
                        <th>Cleaning Status</th>
                        <th>Estimated Finishing Time</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($all_reservations as $reservation)
    
                    <tr>
                            @if ($reservation->cleaning->isEmpty())
                                <td>Cleaner Not Yet Assign</td>
                            @else
                                @foreach ($reservation->cleaning as $cleaning)
                                    <td>{{ $cleaning->user->username }}</td>
                                @endforeach
                            @endif

                            <td>{{ $reservation->room->name }}</td>
                            <td>{{ $reservation->room->roomType->room_type_name }}</td>
                            {{-- progress bar --}}
                            <td>
                                {{-- 30% progress --}}
                                @if ($reservation->reservationTask->count() === 1)
                                    <div class="row">
                                        <div class="col text-center ">
                                            <p class="mb-0" style="color: #F4BB4B">30%</p>
                                        </div>
                                    </div>
                                    <div class="row progress_bar_table">
                                        {{-- use if function to display color? --}}
                                        <div class="col" style="background-color: #F4BB4B"></div>
                                        <div class="col"></div>
                                        <div class="col"></div>
                                    </div>
                                    <td></td>
                                    <td style="color: #F4BB4B">Cleaning</td>

                                {{-- 60% progress  --}}
                                @elseif($reservation->reservationTask->count() === 2)
                                    <div class="row">
                                        <div class="col text-center ">
                                            <p class="mb-0" style="color: #F4BB4B">60%</p>
                                        </div>
                                    </div>
                                    <div class="row progress_bar_table">
                                        {{-- use if function to display color? --}}
                                        <div class="col" style="background-color: #F4BB4B"></div>
                                        <div class="col" style="background-color: #F4BB4B"></div>
                                        <div class="col"></div>
                                    </div>
                                    <td></td>
                                    <td style="color: #F4BB4B">Cleaning</td>

                                    {{-- 100% progress --}}
                                @elseif($reservation->reservationTask->count() === 3)
                                    <div class="row">
                                        <div class="col text-center ">
                                            <p class="mb-0" style="color:#448A47">100%</p>
                                        </div>
                                    </div>
                                    <div class="row progress_bar_table">
                                        {{-- use if function to display color? --}}
                                        <div class="col" style="background-color: #448A47"></div>
                                        <div class="col" style="background-color: #448A47"></div>
                                        <div class="col" style="background-color: #448A47"></div>
                                    </div>
                                    <td></td>
                                    <td style="color: #448A47">Completed</td>

                                    {{-- 0% progress --}}
                                @elseif($reservation->reservationTask->count() === 0)
                                    <div class="row">
                                        <div class="col text-center ">
                                            <p class="mb-0" style="color: #981E1E">0%</p>
                                        </div>
                                    </div>
                                    <div class="row progress_bar_table">
                                        {{-- use if function to display color? --}}
                                        <div class="col" style="border: 2px solid #981E1E"></div>
                                        <div class="col" style="border: 2px solid #981E1E"></div>
                                        <div class="col" style="border: 2px solid #981E1E"></div>
                                    </div>
                                    <td></td>
                                    <td style="color: #981E1E">Not Clean</td>
                                @endif
                            </td>
                            {{-- when the guest checkout the  --}}
                            @if ($reservation->guest_checkin===1 && $reservation->guest_checkout===1)

                                <td>
                                    <div id="clock{{ $reservation->id }}" class="clock_object">
                                        <span class="minutes"></span>:<span class="seconds"></span>
                                    </div>
                                </td>
  
                            @else
                                <td></td>
                            @endif

                            <td>
                                <a href="{{route('cleaner.showTask')}}" class="float-end btn fw-bold" style="background-color:#F4924B; color:#2C462B; ">View Task</a>
                            </td>
                        </tr>
                        @endforeach
                </tbody>
            </table>
        </div>

        <div class="card-footer" style="background-color: #2C462B; border-radius:0px 0px 25px 25px;">
            <br>
        </div>
    </div>
</div>

<script defer src="{{ asset('js/cleaning_page.js') }}"></script>

@endsection