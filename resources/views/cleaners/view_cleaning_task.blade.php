@extends('layouts.app')

@section('title', 'View Cleaning Task')

@section('content')

<div class="container">
    <div class="card mt-3" style="border:none;">
        <div class="card-header" style="background-color: #2C462B; border-radius:25px 25px 0px 0px;">
            <div class="row">
                <div class="col">
                    <h2 style="color:#F4BB4B" class="fw-bold">Cleaner View Task</h2>
                </div>
                <div class="col d-flex align-items-center justify-content-end">
                    <a href="{{ route('cleaner.showCleanerPage') }}" class="float-end btn fw-bold" style="background-color:#F4924B; color:#2C462B; ">Back to Cleaning Progress</a>
                </div>
            </div>
        </div>

        <div class="cleaner-view-task card-body justify-content-center border">
            <div class="row mt-5">
                {{-- first row left --}}
                <div class="col">
                    <div class="row">
                        <div class="col">
                            <p class="fw-bold text-end">Room:{{$reservation->room->name}}</p>
                        </div>
                        <div class="col">
                            @if ($reservation->guest_checkin===1 && $reservation->guest_checkout===1)
                                <td>
                                    <p style="color: #981E1E;">Checked OUT</p>
                                </td>
                            @elseif($reservation->guest_checkin===1 && $reservation->guest_checkout===0)
                                <td>
                                    <p style="color:#2C462B;">Checked IN</p> 
                                </td>
                            @endif
                        </div>
                    </div>
                </div>
                {{-- first row right --}}
                <div class="col">
                    <div class="row">
                        <div class="col-8">
                            <p class="fw-bold">Next Reservation</p>
                        </div>
                        <div class="col-4">
                            @if ($nearest_reservation_date)
                                <td>
                                    <p>{{ date('Y-m-d', strtotime($nearest_reservation_date->check_in))}}</p>
                                </td>
                            @else
                                <p>Vacant</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                {{-- second row left --}}
                <div class="col">
                    <div class="row">
                        <div class="col">
                            <p class="fw-bold text-end ">Cleaner:&nbsp; &nbsp; </p>
                        </div>
                        <div class="col">
                            @if ($reservation->cleaning)
                                @foreach ($reservation->cleaning as $cleaning)
                                    <p>{{ $cleaning->user->username }}</p>
                                @endforeach
                            @else
                                <p>Not Assign Yet</p>
                            @endif
                        </div>
                    </div>
                </div>
                {{-- second row right --}}
                <div class="col">
                    <div class="row">
                        <div class="col-8">
                            <p class="fw-bold ">Estimated Finishing Time</p>
                        </div>
                        <div class="col-4 ">
                            <div id="clock{{ $reservation->id }}" 
                                @if ($reservation->guest_checkout == 1)
                                    class="clock_object"
                                @else
                                    
                                @endif>
                                <p>
                                    <span class="minutes"></span>:<span class="seconds"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-75 mx-auto">
                {{-- Cleaning Task List --}}
                <div class="row">
                    <div class="col">
                        <p class="fw-bold ">Cleaning Task List</p>
                    </div>
                </div>

                <form action="#" method="POST">
                    @csrf
                    <div class="row text-center ">
                        <div class="col">
                            <div class="col">
                                <p class="mb-0 cleaning-task-list" style="color: #2C462B;border-bottom:3px solid #2C462B;"><i class="fa-solid fa-bed"></i> Bedrooms</p>
                            </div>
                            <div class="row mt-0">
                                <div class="col form-check d-flex align-items-center justify-content-center">
                                    <input class="form-check-input me-1 cleaning_task" type="checkbox" value="1" id="{{$reservation->id}}" onclick="handleCheckboxClick(this.value, this.checked,this.id)" 
                                    @if ($reservation->guest_checkout == 1)
                                        
                                    @else
                                        disabled 
                                    @endif
                                    @foreach ($reservation->reservationTask as $reservation_task)
                                            @if ($reservation_task->task_id === 1) 
                                                checked>
                                            @endif
                                        @endforeach

                                    <label class="form-check-label " for="change_sheets">
                                        <p class="my-auto changing_sheet_text" style="color: #2C462B;">
                                            Changing Sheets
                                        </p>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="col">
                                <p class="mb-0 cleaning-task-list" style="color: #2C462B; border-bottom:3px solid #2C462B;"><i class="fa-solid fa-bath"></i> Bathrooms</p>
                                <div class="row mt-0">
                                    <div class="col form-check d-flex align-items-center justify-content-center">
                                        <input class="form-check-input me-1 cleaning_task" type="checkbox" value="2" id="{{$reservation->id}}" onclick="handleCheckboxClick(this.value, this.checked,this.id)" 
                                        @if ($reservation->guest_checkout == 1)
                                            
                                        @else
                                            disabled 
                                        @endif
                                        @foreach ($reservation->reservationTask as $reservation_task)
                                            @if ($reservation_task->task_id === 2) 
                                                checked>
                                            @endif
                                        @endforeach
                                        <label class="form-check-label" for="refill_amenities">
                                            <p class="my-auto refill_amentities_task" style="color: #2C462B;">
                                                Refill Amenities
                                            </p>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="col">
                                <p class="mb-0 cleaning-task-list" style="color: #2C462B; border-bottom:3px solid #2C462B;"><i class="fa-solid fa-hand-sparkles"></i> Floors</p>
                            </div>
                            <div class="row mt-0">
                                <div class="col form-check d-flex align-items-center justify-content-center">
                                    <input class="form-check-input me-1 cleaning_task" type="checkbox" value="3" id="{{$reservation->id}}" onclick="handleCheckboxClick(this.value, this.checked,this.id)" 
                                        @if ($reservation->guest_checkout == 1)
                                                
                                        @else
                                            disabled 
                                        @endif
                                        @foreach ($reservation->reservationTask as $reservation_task)
                                                @if ($reservation_task->task_id === 3) 
                                                    checked>
                                                @endif
                                            @endforeach
                                    <label class="form-check-label" for="cleaning_the_floor">
                                        <p class="my-auto cleaning_the_floor_text" style="color: #2C462B;">
                                            Cleaning the Floor
                                        </p>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                
                @if ($reservation->reservationTask->count() == 3)
                    <div id="check_row" class="row mt-3" data-my-value="{{ $reservation->reservationTask->count() }}">
                        <div class="col">
                            <p class="fw-bold">Cleaning Progress</p>
                        </div>

                        <div id="vct_cleaning_progress_percentage" class="col text-end">
                            <p style="color:#448A47;">100%</p>
                        </div>
                    </div>

                    <div class="row">
                        <div id="vct_cleaning_progress_bar1" class="col" style="background-color:#448A47; border-right:none; border-radius: 16px 0 0 16px;">
                            <br>
                        </div>
                        <div id="vct_cleaning_progress_bar2" class="col" style="background-color:#448A47; border-right:none; border-left:none;">
                            <br>
                        </div>
                        <div id="vct_cleaning_progress_bar3" class="col" style="background-color:#448A47; border-radius: 0 16px 16px 0; border-left:none;">
                            <br>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col text-center">
                            <p class="fw-bold cleaning_label" style="color: #448A47">Completed</p>
                        </div>
                    </div>
                @elseif($reservation->reservationTask->count() == 2)
                    <div class="row mt-3">
                        <div class="col">
                            <p class="fw-bold">Cleaning Progress</p>
                        </div>

                        <div id="vct_cleaning_progress_percentage" class="col text-end">
                            <p style="color:#F4BB4B;">60%</p>
                        </div>
                    </div>

                    <div class="row">
                        <div id="vct_cleaning_progress_bar1" class="col" style="background-color:#F4BB4B; border-right:none; border-radius: 16px 0 0 16px;">
                            <br>
                        </div>
                        <div id="vct_cleaning_progress_bar2" class="col" style="background-color:#F4BB4B; border-right:none; border-left:none;">
                            <br>
                        </div>
                        <div id="vct_cleaning_progress_bar3" class="col" style=" border-radius: 0 16px 16px 0; border-left:none;">
                            <br>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col text-center">
                            <p class="fw-bold cleaning_label" style="color: #F4BB4B;">Cleaning</p>
                        </div>
                    </div>

                @elseif($reservation->reservationTask->count() == 1)
                    <div class="row mt-3">
                        <div class="col">
                            <p class="fw-bold">Cleaning Progress</p>
                        </div>

                        <div id="vct_cleaning_progress_percentage" class="col text-end">
                            <p style="color:#F4BB4B;">30%</p>
                        </div>
                    </div>

                    <div class="row">
                        <div id="vct_cleaning_progress_bar1" class="col" style="background-color:#F4BB4B; border-right:none; border-radius: 16px 0 0 16px;">
                            <br>
                        </div>
                        <div id="vct_cleaning_progress_bar2" class="col" style="; border-right:none; border-left:none;">
                            <br>
                        </div>
                        <div id="vct_cleaning_progress_bar3" class="col" style=" border-radius: 0 16px 16px 0; border-left:none;">
                            <br>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col text-center ">
                            <p class="fw-bold cleaning_label" style="color: #F4BB4B;">Cleaning</p>
                        </div>
                    </div>

                @elseif($reservation->reservationTask->count() == 0)
                    <div class="row mt-3">
                        <div class="col">
                            <p class="fw-bold">Cleaning Progress</p>
                        </div>

                        <div id="vct_cleaning_progress_percentage" class="col text-end">
                            <p></p>
                        </div>
                    </div>

                    <div class="row">
                        <div id="vct_cleaning_progress_bar1" class="col" style="border: 2px solid #981E1E; border-right:none; border-radius: 16px 0 0 16px;">
                            <br>
                        </div>
                        <div id="vct_cleaning_progress_bar2" class="col" style="border: 2px solid #981E1E; border-right:none; border-left:none;">
                            <br>
                        </div>
                        <div id="vct_cleaning_progress_bar3" class="col" style="border: 2px solid #981E1E; border-radius: 0 16px 16px 0; border-left:none;">
                            <br>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col text-center">
                            <p class="fw-bold cleaning_label" style="color: #981E1E">Not Cleaned</p>
                        </div>
                    </div>
                @endif
               
            </div>
        </div>

        <div class="card-footer" style="background-color: #2C462B; border-radius:0px 0px 25px 25px;">
            <br>
        </div>
    </div>
</div>

<script defer src="{{ asset('js/view_cleaning_task_click_to_input_checkbox.js') }}"></script>
<script defer src="{{ asset('js/cleaning_page_timer.js') }}"></script>


@endsection