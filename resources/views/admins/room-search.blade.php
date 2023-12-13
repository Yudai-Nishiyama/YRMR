@extends('layouts.app')

@section('title', 'Room Search')

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
        <div class="container col mx-5">  
            <div class="mt-4 text-center">
                <div class="content-title">Room Search</div>
                <div style="border-top: 3px solid #448A47; width: 600px; margin: 1px auto;"></div>
            </div>
        
            <div class="roomSearch-container">
                <div class="roomSearch-menu">
                    <img class="MRYR-logo" src="{{asset('images/MRYR-logo.png')}}" alt="logo">
                    <form action="#">
                        <div class="roomSearch-inputs">
                            <div class="input-container mb-3">
                                <label for="room_type">Room Type</label>
                                <select name="roomtype" id="roomtype">
                                    <option value="1" selected>Single</option>
                                    <option value="2">Double</option>
                                    <option value="3">triple</option>
                                </select>
                            </div>
                            <div class="input-container mb-3">
                                <label for="chechIn">Reservation Date(check in)</label>
                                <input type="date" id="check" name="dateInput">
                            </div>
                            <div class="input-container mb-2">
                                <label for="checkOut">Reservation Date(check out)</label>
                                <input type="date" id="checkOut" name="dateInput">
                            </div>
                        </div>
                        <div class="roomSearch-buttons">                      
                            <input class="button search-btn mt-4" type="submit" value="Search">
                            {{-- <a href=""><input class="button homepage_button" type="submit" value="Home page"></a> --}}
                            <a href="#"><button class="button homepage_btn mt-3">Home page</button></a>
                        </div>
                    </form> 
                </div>
        
                <div class="search-rooms">
                    <div class="search-room-card">
                        <div class="room-number p-1 ms-3 mb-0">Room 101</div>
                        <div class="search-room-card-body d-flex justify-content-center align-items-center">
                            <table>
                                <tbody>
                                    <tr>
                                        <td>Room Type</td>
                                        <td class="td-right td-spacing">Single bed</td>
                                    </tr>
                                    <tr>
                                        <td>Price</td>
                                        <td class="td-right td-spacing">$300</td>
                                    </tr>
                                    <tr>
                                        <td>Date</td>
                                        <td class="td-right td-spacing">11/1~11/2</td>
                                    </tr>
                                </tbody>    
                            </table>
                        </div>
                    </div>

                    <div class="search-room-card">
                        <div class="room-number p-1 ms-3 mb-0">Room 102</div>
                        <div class="search-room-card-body d-flex justify-content-center align-items-center">
                            <table>
                                <tbody>
                                    <tr>
                                        <td>Room Type</td>
                                        <td class="td-right td-spacing">Single bed</td>
                                    </tr>
                                    <tr>
                                        <td>Price</td>
                                        <td class="td-right td-spacing">$300</td>
                                    </tr>
                                    <tr>
                                        <td>Date</td>
                                        <td class="td-right td-spacing">11/1~11/2</td>
                                    </tr>
                                </tbody>    
                            </table>
                        </div>
                    </div>

                    <div class="search-room-card">
                        <div class="room-number p-1 ms-3 mb-0">Room 103</div>
                        <div class="search-room-card-body d-flex justify-content-center align-items-center">
                            <table>
                                <tbody>
                                    <tr>
                                        <td>Room Type</td>
                                        <td class="td-right td-spacing">Single bed</td>
                                    </tr>
                                    <tr>
                                        <td>Price</td>
                                        <td class="td-right td-spacing">$300</td>
                                    </tr>
                                    <tr>
                                        <td>Date</td>
                                        <td class="td-right td-spacing">11/1~11/2</td>
                                    </tr>
                                </tbody>    
                            </table>
                        </div>
                    </div>

                    <div class="search-room-card">
                        <div class="room-number p-1 ms-3 mb-0">Room 104</div>
                        <div class="search-room-card-body d-flex justify-content-center align-items-center">
                            <table>
                                <tbody>
                                    <tr>
                                        <td>Room Type</td>
                                        <td class="td-right td-spacing">Single bed</td>
                                    </tr>
                                    <tr>
                                        <td>Price</td>
                                        <td class="td-right td-spacing">$300</td>
                                    </tr>
                                    <tr>
                                        <td>Date</td>
                                        <td class="td-right td-spacing">11/1~11/2</td>
                                    </tr>
                                </tbody>    
                            </table>
                        </div>
                    </div>

                    <div class="search-room-card">
                        <div class="room-number p-1 ms-3 mb-0">Room 106</div>
                        <div class="search-room-card-body d-flex justify-content-center align-items-center">
                            <table>
                                <tbody>
                                    <tr>
                                        <td>Room Type</td>
                                        <td class="td-right td-spacing">Single bed</td>
                                    </tr>
                                    <tr>
                                        <td>Price</td>
                                        <td class="td-right td-spacing">$300</td>
                                    </tr>
                                    <tr>
                                        <td>Date</td>
                                        <td class="td-right td-spacing">11/1~11/2</td>
                                    </tr>
                                </tbody>    
                            </table>
                        </div>
                    </div>

                    <div class="search-room-card">
                        <div class="room-number p-1 ms-3 mb-0">Room 107</div>
                        <div class="search-room-card-body d-flex justify-content-center align-items-center">
                            <table>
                                <tbody>
                                    <tr>
                                        <td>Room Type</td>
                                        <td class="td-right td-spacing">Single bed</td>
                                    </tr>
                                    <tr>
                                        <td>Price</td>
                                        <td class="td-right td-spacing">$300</td>
                                    </tr>
                                    <tr>
                                        <td>Date</td>
                                        <td class="td-right td-spacing">11/1~11/2</td>
                                    </tr>
                                </tbody>    
                            </table>
                        </div>
                    </div>

                    <div class="search-room-card">
                        <div class="room-number p-1 ms-3 mb-0">Room 108</div>
                        <div class="search-room-card-body d-flex justify-content-center align-items-center">
                            <table>
                                <tbody>
                                    <tr>
                                        <td>Room Type</td>
                                        <td class="td-right td-spacing">Single bed</td>
                                    </tr>
                                    <tr>
                                        <td>Price</td>
                                        <td class="td-right td-spacing">$300</td>
                                    </tr>
                                    <tr>
                                        <td>Date</td>
                                        <td class="td-right td-spacing">11/1~11/2</td>
                                    </tr>
                                </tbody>    
                            </table>
                        </div>
                    </div>
                </div>
            </div>        
        </div>
    </div>
@endsection