@extends('layouts.app')

@section('title', 'View Cleaning Task')

@section('content')

<style>

body {
    background-image: url('../images/guest_home_1.png');
    background-size:cover;
    position:relative;

}
body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(255, 255, 255, 0.3);
            z-index: -1;
            background-size:cover;
        }

.card{
        position: relative;
        z-index: -1;
}

.detail {
        content: '';
        position: absolute;
        top: 70%;
        left: 5%;
        right: 5%;
        bottom: 8%;
        background-color: rgba(235, 230, 230, 0.64);
        border-radius: 5%;
        }

.custom-card{
        height:500px;
}

</style>


<div class="container ">
    <div class="card mt-5 col-6 custom-card" >
        <div class="card-header" style="border:none; background-color: #fbfbfb; border-radius:25px 25px 0px 0px;">
            <div class="d-flex justify-content-between align-items-center">
                <h2 style="color:#F4BB4B" class="fw-bold">Room1</h2>
                <p>
                    <i class="fa-solid fa-heart" style="font-size:40px; color:rgb(142, 8, 8);"></i>
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
        <div class="card-body">
             <img src="{{ asset('images/room_details_bath.jpg') }}" class="img-fluid text-center" alt="TEST">
             {{-- <img src="{{ $post->image }}" alt="#" class="w-100"> --}}

             {{-- details --}}
             <div class="detail" >
                <div class="ms-3">
                    <p>Adult</p>
                    <div class="row align-items-center">
                        <h3>Sum $#(tax)</h3>
                        <a href="#" style="text"><i class="fa-solid fa-chevron-right"></i></a>
                    </div>
                </div>
             </div>

        </div>
    </div>
</div>


@endsection
