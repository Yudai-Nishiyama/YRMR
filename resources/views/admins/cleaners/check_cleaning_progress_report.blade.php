@extends('layouts.app')

@section('title', 'Check Cleaning Progress')

@section('content')

<div class="container">
    <div class="card" style="border:none;">
        <div class="card-header" style="background-color: #2C462B; border-radius:25px 25px 0px 0px;">
            <div class="row">
                <div class="col">
                    <h2 style="color:#F4BB4B" class="fw-bold">Cleaner View Task</h2>
                </div>
                <div class="col d-flex align-items-center justify-content-end">
                    <a href="#" class="float-end btn fw-bold" style="background-color:#F4924B; color:#2C462B; ">Back to Cleaning Progress</a>
                </div>
            </div>
        </div>

        <div class="cleaner-view-task card-body justify-content-center border">
            <div class="row mt-5">
                {{-- first row left --}}
                <div class="col">
                    <div class="row">
                        <div class="col">
                            <p class="fw-bold text-end">VIP Room</p>
                        </div>
                        <div class="col">
                            <p style="color: #981E1E;">Checked OUT</p>
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
                            <p>Vacant</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                {{-- second row left --}}
                <div class="col">
                    <div class="row">
                        <div class="col">
                            <p class="fw-bold text-end ">Cleaner&nbsp; &nbsp; </p>
                        </div>
                        <div class="col">
                            <p>Not Assign Yet</p>
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
                            <p>10:00</p>
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

                <div class="row text-center ">
                    <div class="col">
                        <div class="col">
                            <p class="mb-0 cleaning-task-list" style="color: #2C462B;border-bottom:3px solid #2C462B;"><i class="fa-solid fa-bed"></i> Bedrooms</p>
                        </div>
                        <div class="row mt-0">
                            <div class="col form-check d-flex align-items-center justify-content-center">
                                <p class="my-auto me-1"><i class="fa-regular fa-square-check"></i></p>
                                <p class="my-auto text-decoration-line-through" style="color: #2C462B;">Changing Sheets</p>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="col">
                            <p class="mb-0 cleaning-task-list" style="color: #2C462B; border-bottom:3px solid #2C462B;"><i class="fa-solid fa-bath"></i> Bathrooms</p>
                            <div class="row mt-0">
                                <div class="col form-check d-flex align-items-center justify-content-center">
                                    <p class="my-auto me-1"><i class="fa-regular fa-square"></i></p>
                                    <p class="my-auto" style="color: #2C462B;">Refill Amenities</p>
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
                                <p class="my-auto me-1"><i class="fa-regular fa-square"></i></p>
                                <p class="my-auto" style="color: #2C462B;">Refill Amenities</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row mt-3">
                    <div class="col">
                        <p class="fw-bold">Cleaning Progress</p>
                    </div>
                    <div class="col text-end">
                        <p class="fw-bold" style="color: #F4BB4B;">33%</p>
                    </div>
                </div>

                <div class="row ">

                    {{-- 33% --}}
                    <div class="col" style="border: 2px solid #F4BB4B; border-right:none; border-radius: 16px 0px 0px 16px;
                    background-color:#F4BB4B; background-size:100px; background-repeat: no-repeat;">
                        <br>
                    </div>

                    {{-- 66% --}}
                    <div class="col" style="border: 2px solid #F4BB4B; border-right: none; border-left:none;
                    background-color:#FFFFFF; background-size:100px; background-repeat: no-repeat;">
                    </div>

                    {{-- 100% --}}
                    <div class="col" style="border: 2px solid #F4BB4B; border-left: none; border-radius: 0px 16px 16px 0px;
                    background-color:#FFFFFF; background-size:100px; background-repeat: no-repeat;">

                    </div>
                </div>

                <div class="row">
                    <div class="col text-center">
                        <p class="fw-bold" style="color: #F4BB4B;">Cleaning</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-footer" style="background-color: #2C462B; border-radius:0px 0px 25px 25px;">
            <br>
        </div>
    </div>
</div>

@endsection