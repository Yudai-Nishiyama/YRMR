{{-- if we are going to use @include, we have to remove the @extends and @section --}}
@extends('layouts.app')

@section('title', 'Admin Cleaning Page')

@section('content')

{{-- place this button at mana-san's cleaner management page --}}
<button class="btn" data-bs-toggle="modal" data-bs-target="#delete-cleaner-id" style="background-color:#981E1E; border-radius:13px;">
    Delete
</button>

    <div class="modal fade" id="delete-cleaner-id">
        <div class="modal-dialog" style="border:2px solid #981E1E; border-radius:13px;">
            <div class="modal-content" >
                <div class="modal-header justify-content-center" style="border-bottom : 2px solid #981E1E;">
                    <p class="my-auto" style="color:#981E1E;">Delete Confirmation</p>
                </div>
                <div class="modal-body fw-bold py-0">
                    <div class="row">
                        <div class="col-2 d-flex justify-content-center align-items-center">
                            <img src="{{ asset('images/caution.png') }}" alt="caution">
                        </div>
                        <div class="col-10 ">
                            <p style="font-size: 24px;">Are you sure you want to delete First Name last Name?</p>
                        </div>
                    </div>
                </div>
                <form action="#" method="post">
                <div class="modal-footer border-0 justify-content-center pt-0">
                    @csrf
                    @method('DELETE')

                    <a href="#" class="btn fw-bold mx-auto px-4 mb-3" style="background-color:#448A47; color:#FFFFFF; ">Return to the Page</a>
                    <button type="submit" class="btn w-25 mx-auto mb-3 fw-bold" style="background-color:#F4BB4B; color:#981E1E; ">Delete</button>
                </div>
            </form>
            </div>
        </div>
    </div>
@endsection



