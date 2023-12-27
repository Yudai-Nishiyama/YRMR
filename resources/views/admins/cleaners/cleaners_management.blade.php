@extends('layouts.app')

@section('title', 'Admin Cleaner Management')

@section('content')

{{-- Admin Controls --}}
<div class="admin-control row g-0">
    <div class="col-1" style="width: 264px;">
        <div class="list-group" style="width: 100%;">
            <a href="#" class="list-group-item p-3 text-center shadow-none active" aria-current="true">Rooms</a>          
            <a href="#" class="list-group-item p-3 text-center">Cleaners</a>
            <a href="#" class="list-group-item p-3 text-center">Guests</a>
        </div>
    </div>

    <div class="col cleanerManagement container m-5">
        <div class="card" style="border:none;">
            <div class="card-header" style="background-color: #2C462B; border-radius:25px 25px 0px 0px;">
                <h2 style="color:#F4BB4B" class="fw-bold mt-1">Cleaner Management</h2>
            </div>
        
            <div class="card-body justify-content-center border">
                <div class="float-end">
                    <a href="#" class="createCleanerBtn float-end btn fw-bold my-2" style="background-color:#F4924B; color:#2C462B; ">+ Create a New Cleaner</a>
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
                        <tr style="margin-top:2px; border-bottom: 1px solid black;">
                            <td>First Name last Name</td>
                            <td>Cleaner1</td>
                            <td>gmail.com</td>
                            <td>000-1234-5678</td>
                            <td>1-1-1 Marunouchi Tokyo</td>
                            <td>2023-11-14</td>
                            <td>
                                <button class="delete-btn btn text-white px-5 float-end" data-bs-toggle="modal" data-bs-target="#delete-cleaner-id">
                                    Delete
                                </button>
                            </td>
                            @include('admins.cleaners.modal.cleaner_delete_modal')
                        </tr>
                    </tbody>
                </table>

                <div class="float-end">
                    <a href="{{ route('showCleaningProgressPage') }}" class="goCPbtn float-end btn fw-bold mt-5" style="background-color:#448A47; color:#FFFFFF; ">Go to the Cleaning Progress</a>
                </div>
            </div>

            <div class="card-footer" style="background-color: #2C462B; border-radius:0px 0px 25px 25px;">
                <br>
            </div>
        </div>
    </div>
</div>
@endsection