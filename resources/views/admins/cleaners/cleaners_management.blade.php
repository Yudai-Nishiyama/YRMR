@extends('layouts.app')

@section('title', 'Admin Cleaner Management')

@section('content')

<div class="container">
    <div class="card" style="border:none;">
        <div class="card-header" style="background-color: #2C462B; border-radius:25px 25px 0px 0px;">
            <div class="row">
                <div class="col">
                    <h2 style="color:#F4BB4B" class="fw-bold">Cleaner Management</h2>
                </div>
            </div>
        </div>
    
        <div class="card-body justify-content-center border">
            <div class="float-end">
                <a href="#" class="float-end btn fw-bold" style="background-color:#F4924B; color:#2C462B; ">+ Create a New Cleaner</a>
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
                    <tr style="border-bottom: 1px solid black;">
                        <td>First Name last Name</td>
                        <td>Cleaner1</td>
                        <td>gmail.com</td>
                        <td>000-1234-5678</td>
                        <td>1-1-1 Marunouchi Tokyo</td>
                        <td>2023-11-14</td>
                        <td>
                            <button class="btn text-white px-5 float-end" data-bs-toggle="modal" data-bs-target="#delete-cleaner-id" style="background-color:#981E1E; border-radius:10px;">
                                Delete
                            </button>
                        </td>
                        @include('admins.cleaners.modal.cleaner_delete_modal')
                    </tr>
                </tbody>
            </table>

            <div class="float-end">
                <a href="{{ route('showCleaningProgressPage') }}" class="float-end btn fw-bold mt-5" style="background-color:#448A47; color:#FFFFFF; ">Go to the Cleaning Progress</a>
            </div>
        </div>

        <div class="card-footer" style="background-color: #2C462B; border-radius:0px 0px 25px 25px;">
            <br>
        </div>
    </div>
</div>

@endsection