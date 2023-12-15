@extends('layouts.app')

@section('title', 'Create a New Room')

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

         {{-- Content --}}
         <div class="content col" style="background-image: url('../images/create_room_background.png');
         background-size: cover;">
            <div class="container d-flex justify-content-center">
                <div class="create-room card" style="width: 875px; margin-top: 70px; margin-bottom: 100px;">
                    <div class="mt-2">
                        <img src="/images/MRYR-logo.png" class="float-center" alt="Logo">
                    </div>
                    <div class="create-room title mt-5">
                        Create a New Room
                    </div>
                    <div  style="border-top: 3px solid #448A47; width: 55%; margin: 5px auto;"></div>
                    <form>
                        <div class="row text-start mt-4" style="padding:1em;">
                            <div class="col d-flex flex-column" style="padding-right:1em;">
                                <div class="mb-3 flex-grow-1">
                                    <label for="roomName" class="form-label">Room Name</label>
                                    <input type="text" class="form-control" id="roomName" placeholder="Room 101" style="border: 1px solid #448A47;">
                                </div>
                                <div class="mb-3 flex-grow-1">
                                    <label for="roomType" class="form-label">Room Type</label>
                                    <select class="form-select" id="roomType" aria-label="Select a Room Type" style="border: 1px solid #448A47;">
                                        <option selected>Select a Room Type</option>
                                        <option value="single">Single Bed</option>
                                        <option value="double">Double Beds</option>
                                        <option value="triple">Triple Beds</option>
                                    </select>
                                </div>
                                <div class="mb-3 flex-grow-1">
                                    <label for="price" class="form-label">Price</label>
                                    <div class="input-group" style="border: 1px solid #448A47; border-radius: 5px 0px 0px 5px;">
                                        <span class="input-group-text"style="border: none; border-radius: 5px 0px 0px 5px;">$</span>
                                        <input type="number" class="form-control" id="price" placeholder="Enter Price" style="border: none; border-radius: 0px 5px 5px 0px;">
                                    </div>
                                </div>
                            </div>
                            <div class="col ps-5">
                                <div class="mb-4">
                                    <label for="image" class="form-label">Image</label>
                                    <div class="row input-group">
                                        <div class="col">
                                            <img id="image-preview" src="/images/default-image.png" alt="Image Preview" class="img-thumbnail d-none" style="max-width: 100%; border: 2px solid #448A47; border-radius: 10px;">
                                            <i class="fa-solid fa-image text-muted bg-white" style="font-size: 45px; border: 1px solid #448A47; border-radius: 10px; padding: 40px 60px;"></i>
                                        </div>
                                        <div class="col text-end">
                                            <input type="file" class="form-control" id="image" style="display: none">
                                            <label for="image" class="input-group-text btn mt-5 text-end">
                                                Select a file
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control" id="description" rows="4" placeholder="Enter Description" style="border: 1px solid #448A47;"></textarea>
                                </div>
                            </div>
                            <div class="row mb-0">
                                <div class="col text-end">
                                    <a href="#" class="cancel-btn btn px-5">Cancel</a>
                                </div>
                                <div class="col text-start ms-5" style="padding-left: 5em;">
                                    <button type="submit" class="create-btn btn px-5">Create</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>  
    </div>  
@endsection
