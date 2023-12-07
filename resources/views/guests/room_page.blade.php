@extends('layouts.app')

@section('title', 'View Cleaning Task')

@section('content')


<div class="container">
    <div class="card" style="border:none;">
        <div class="card-header" style="background-color: #fbfbfb; border-radius:25px 25px 0px 0px;">
            <div class="d-flex justify-content-between align-items-center">
                <h2 style="color:#F4BB4B" class="fw-bold">Room1</h2>
                <p>
                    <i class="fa-solid fa-heart" style="font-size:40px;"></i>
                </p>
                 {{-- if we have 'favoraite'colum in db --}}
                {{-- @if ($item->is_favorite)
                    <p class="color"><i class="fa-solid fa-heart"></i></p>
                @else
                    <i class="fa-thin fa-heart"></i>
                @endif

                // データベースのマイグレーション
                Schema::table('favorites', function (Blueprint $table) {
                    $table->boolean('is_favorite')->default(false);
                }); --}}
            </div>
        </div>
        <div class="card-body text-center">
             <img src="{{ asset('images/room_details_bath.jpg') }}" class="img-fluid" alt="TEST">
             {{-- <img src="{{ $post->image }}" alt="#" class="w-100"> --}}

             {{-- details --}}
             <div class="card" >

             </div>

        </div>
    </div>
</div>


@endsection
