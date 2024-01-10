@extends('layouts.app')

@section('title', 'Admin Cleaner Management')

@section('content')

<div class="row g-0">
    @include('admins.admin-controls')

    <div class="col cleanerManagement container m-5">
        <div class="card" style="border:none;">
            <div class="card-header" style="background-color: #2C462B; border-radius:25px 25px 0px 0px;">
                <h2 style="color:#F4BB4B" class="fw-bold mt-1">Cleaner Management</h2>
            </div>
        
            <div class="card-body justify-content-center border">
                <div class="float-end">
                    <a href="{{ route('admin.cleaners.showCreateCleanerPage') }}" class="createCleanerBtn float-end btn fw-bold my-3" style="background-color:#F4924B; color:#2C462B; ">+ Create a New Cleaner</a>
                </div>
                <table class="table" >
                    <thead>
                        <tr style="border-bottom: 1px solid black;">
                            <th>Name</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Address</th>
                            <th>Hire Date</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cleaners as $cleaner)
                            <tr style="margin-top:2px; border-bottom: 1px solid black;">
                                <td>{{ $cleaner->profile->first_name }} {{ $cleaner->profile->last_name }}</td>
                                <td>{{ $cleaner->username }}</td>
                                <td>{{ $cleaner->email }}</td>
                                <td>{{ $cleaner->profile->phone_number }}</td>
                                <td>{{ $cleaner->profile->address }}</td>
                                <td>{{ $cleaner->profile->created_at->format('Y-m-d') }}</td>
                                <td>
                                    <button class="delete-btn btn text-white px-5 float-end" data-bs-toggle="modal" data-bs-target="#deleteModal-{{ $cleaner->id }}">
                                        Delete
                                    </button>
                                </td>
                            </tr>
                            @include('admins.cleaners.modal.cleaner_delete_modal', ['cleaner' => $cleaner])
                        @endforeach
                    </tbody>
                </table>

                <div class="float-end">
                    <a href="{{ route('admin.cleaners.showCleaningProgressPage') }}" class="goCPbtn float-end btn fw-bold mt-5" style="background-color:#448A47; color:#FFFFFF; ">Go to the Cleaning Progress</a>
                </div>
            </div>

            <div class="card-footer" style="background-color: #2C462B; border-radius:0px 0px 25px 25px;">
                <br>
            </div>
        </div>
    </div>
</div>
@endsection
