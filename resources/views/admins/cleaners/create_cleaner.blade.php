@extends('layouts.app')

@section('title', 'Admin Create Cleaner Page')

@section('content')

<div class="container create_cleaner">
    <div class="row">
        <div class="col-7 my-auto">
            <div class="row">
                <div class="col text-center my-5 me-5">
                    <img src="{{ asset('images/logo.jpeg') }}" alt="MRYR LOGO" style="height: 94px; width: auto; ">
                </div>
            </div>
        
            <div class="row me-5">
                <div class="col-3"></div>
                <div class="col-6 text-center mb-2">
                    <h2 style="border-bottom:1px solid #448A47">Create Cleaner Account</h2>
                </div>
                <div class="col-3"></div>
            </div>
        
            <form action="#" method="POST">
                <div class="row">
                    {{-- left form --}}
                    <div class="col me-5">
                        <div class="col mb-5">
                            <label for="first_name" class="form-label fw-bold">First Name</label>
                            <input type="text" name="first_name" id="first_name" class="form-control" placeholder="Enter First Name" style="border:1px solid #448A47;">
                        </div>
        
                        <div class="row">
                            <div class="col mb-5">
                                <label for="last_name" class="form-label fw-bold">Last Name</label>
                                <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Enter Last Name" style="border:1px solid #448A47;">
                            </div>
                        </div>
        
                        <div class="row">
                            <div class="col mb-5">
                                <label for="username" class="form-label fw-bold">Username</label>
                                <input type="text" name="username" id="username" class="form-control" placeholder="Enter Username" style="border:1px solid #448A47;">
                            </div>
                        </div>
        
                        <div class="row">
                            <div class="col mb-5">
                                <label for="email" class="form-label fw-bold">Email</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="mail@mail.com" style="border:1px solid #448A47;">
                            </div>
                        </div>
                    </div>

                    {{-- right form --}}
                    <div class="col me-5">
                        <div class="col mb-5">
                            <label for="phone_number" class="form-label fw-bold">Phone Number</label>
                            <input type="text" name="phone_number" id="phone_number" class="form-control" placeholder="(+63)0123456789" style="border:1px solid #448A47;">
                        </div>
        
                        <div class="row">
                            <div class="col mb-5">
                                <label for="address" class="form-label fw-bold">Address</label>
                                <input type="text" name="address" id="address" class="form-control" placeholder="123 street, Apt567, State 12345, USA" style="border:1px solid #448A47;">
                            </div>
                        </div>
        
                        <div class="row">
                            <div class="col mb-5">
                                <label for="password" class="form-label fw-bold">Password</label>
                                <input type="text" name="password" id="password" class="form-control" placeholder="Enter Password" style="border:1px solid #448A47;">
                            </div>
                        </div>
        
                        <div class="row">
                            <div class="col mb-5">
                                <label for="password-confirm" class="form-label fw-bold">Password Confirmation</label>
                                <input type="password" name="password_confirmation" id="password-confirm" class="form-control" placeholder="Enter Password" style="border:1px solid #448A47;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-end me-5">
                        <a href="#" class="btn text-decoration-none px-5 fw-bold" style="background-color:#F4BB4B; color:#981E1E;">Cancel</a>
                    </div>
                    <div class="col me-5">
                        <button type="submit" class="btn text-white px-5 fw-bold" style="background-color: #448A47">
                            Create
                        </button>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-5">
            <img src="{{ asset('images/brick_building1.jpeg') }}" alt="brick_building" style="height:986px; width:815px;">
        </div>
    </div>

</div>

@endsection