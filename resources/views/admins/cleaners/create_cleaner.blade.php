@extends('layouts.app')

@section('title', 'Admin Create Cleaner Page')

@section('content')

<div class="row g-0">
    @include('admins.admin-controls')

    {{-- Content --}}
    <div class="col create_cleaner">
        <div class="row">
            <div class="col-8">
                <div style="margin-top:80px; margin-left:90px; margin-right:70px;">
                    <div class="text-center my-5">
                        <img src="{{ asset('images/logo.jpeg') }}" alt="MRYR LOGO" style="height: 94px; width: auto;">
                    </div>
                       
                    <div class="title text-center">
                        <h2>Create Cleaner Account</h2>
                        <div class="title-underline"></div>
                    </div>
    
                    <form action="#" method="POST">
                        <div class="createCleanerAccount row mt-5 mx-auto">
                            {{-- left form --}}
                            <div class="col me-5">
                                <div class="mb-4">
                                    <label for="first_name" class="form-label fw-bold">First Name</label>
                                    <input type="text" name="first_name" id="first_name" class="form-control" placeholder="Enter First Name" >
                                </div>
    
                                <div class="mb-4">
                                    <label for="last_name" class="form-label fw-bold">Last Name</label>
                                    <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Enter Last Name">
                                </div>
    
                                <div class="mb-4">
                                    <label for="username" class="form-label fw-bold">Username</label>
                                    <input type="text" name="username" id="username" class="form-control" placeholder="Enter Username">
                                </div>
                
                                <div class="mb-5">
                                    <label for="email" class="form-label fw-bold">Email</label>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="mail@mail.com">
                                </div>

                                <a href="#" class="cancel-btn btn px-5 fw-bold float-end mt-2">Cancel</a>
                            </div>
                            {{-- right form --}}
                            <div class="col">
                                <div class="mb-4">
                                    <label for="phone_number" class="form-label fw-bold">Phone Number</label>
                                    <input type="text" name="phone_number" id="phone_number" class="form-control" placeholder="(+63)0123456789" style="border:1px solid #448A47;">
                                </div>
            
                                <div class="mb-4">
                                    <label for="address" class="form-label fw-bold">Address</label>
                                    <input type="text" name="address" id="address" class="form-control" placeholder="123 street, Apt567, State 12345, USA" style="border:1px solid #448A47;">
                                </div>
        
                                <div class="mb-4">
                                    <label for="password" class="form-label fw-bold">Password</label>
                                    <input type="text" name="password" id="password" class="form-control" placeholder="Enter Password" style="border:1px solid #448A47;">
                                </div>
    
                                <div class="col mb-5">
                                    <label for="password-confirm" class="form-label fw-bold">Password Confirmation</label>
                                    <input type="password" name="password_confirmation" id="password-confirm" class="form-control" placeholder="Enter Password" style="border:1px solid #448A47;">
                                </div>

                                <button type="submit" class="create-btn btn px-5 fw-bold mt-2">Create</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-4">
                <img src="{{ asset('images/brick_building1.jpeg') }}" alt="brick_building" style="height:900px; width:100%; object-fit: cover; ">
            </div>
        </div>
    </div>
</div>
@endsection