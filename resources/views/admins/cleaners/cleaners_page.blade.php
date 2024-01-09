@extends('layouts.app')

@section('title', 'Admin Cleaner Page')

@section('content')

<div class="row g-0">
    @include('admins.admin-controls')

    <div class="col container">
        <div class="card" style="border:none;">
            <div class="card-header" style="background-color: #2C462B; border-radius:25px 25px 0px 0px;">
                <div class="row">
                    <div class="col">
                        <h2 style="color:#F4BB4B" class="fw-bold">Cleaner Page</h2>
                    </div>
                </div>
            </div>
        
            <div class="card-body cleaner-page justify-content-center border">
                <div class="row">
                    {{-- button for cleaning progress page --}}
                    <div class="col">
                        <div class="cleaner-page-button text-center my-5 mx-auto">
                            <a href="{{ route('admin.cleaners.showCleaningProgressPage') }}" class="text-decoration-none" style="color:#FFFFFF;">
                                <div class="col mt-5">
                                    <img src="{{ asset('images/cleaning_progress.png') }}" alt="cleaning_progress">
                                </div>
                                <div class="row">
                                    <div class=" mb-5">
                                        <p>Cleaning Progress</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col">
                        <div class="col cleaner-page-button text-center mx-auto my-5">
                            <a href="{{ route('admin.cleaners.CleanerManagementPage') }}" class="text-decoration-none" style="color:#FFFFFF;">
                                <div class="col mt-5">
                                    <img class="img-md" src="{{ asset('images/cleaner_management.png') }}" alt="cleaning_management">
                                </div>
                                <div class="row">
                                    <div class="col mb-5">
                                        <p>Cleaner Management</p>
                                    </div>
                                </div>
                            </a>
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