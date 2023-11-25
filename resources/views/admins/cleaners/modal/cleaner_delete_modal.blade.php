@extends('layouts.app')

@section('title', 'Admin Cleaning Page')

@section('content')

    {{-- <div class="modal fade" id="delete-cleaner-id"> --}}
        <div class="modal-dialog w-50">
            <div class="modal-content" style="border:2px solid #981E1E; border-radius:13px;">
                <div class="modal-header justify-content-center" style="border-bottom : 2px solid #981E1E;">
                    <p class="my-auto" style="color:#981E1E;">Delete Confirmation</p>
                </div>
                <div class="modal-body fw-bold my-5">
                    <div class="row">
                        <div class="col-2 d-flex justify-content-center align-items-center">
                            <img src="{{ asset('images/caution.png') }}" alt="caution">
                        </div>
                        <div class="col-10">
                            <p style="font-size: 32px;">Are you sure you want to delete First Name last Name?</p>
                        </div>
                    </div>
                </div>
                <form action="#" method="post">
                <div class="modal-footer border-0 justify-content-center">
                        @csrf
                        @method('DELETE')

                        <a href="#" class="btn fw-bold mx-auto px-4 mb-3" style="background-color:#448A47; color:#FFFFFF; ">Return to the Page</a>
                        <button type="submit" class="btn w-25 mx-auto mb-3 fw-bold" style="background-color:#F4BB4B; color:#981E1E; ">Delete</button>
                </div>
            </form>
            </div>
        </div>
    {{-- </div> --}}
    
@endsection



