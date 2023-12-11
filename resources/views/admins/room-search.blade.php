@extends('layouts.app')

@section('title', 'Room Search')

@section('content')
    <style>
        /* Admin Controls */
        .admin-control.row {
            display: flex;
            flex-wrap: wrap; /* 画面が狭い場合に要素を折り返す */
        }
        .list-group {
            font-family: 'Bona Nova', sans-serif;
            font-weight: bolder;
            font-size: 32px;
            border-radius: 0;
            background-color: #F4924B;
            margin-bottom: 0;
            height: 100%;
            display: flex;
            flex-direction: column;
            box-shadow: none;
            border: 0;
        }

        .list-group-item {
            background-color: #F4924B;
            color: #2C462B;
            border: none;
            border-bottom: 1px solid #2C462B;
        }

        .list-group-item:hover { /* カーソルが重なったとき */
            background-color: #f4914b58;
            color: #2C462B; 
        }

        .list-group-item.active { 
            background-color: #F4BB4B;
            color: #2C462B; 
            border: none;
            border-bottom: 1px solid #2C462B;   
        }

        /* Content */
        .container {
            font-family: 'Raleway', sans-serif;
        }

        .content-title {
            font-size: 64px;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
            font-family: 'Bona Nova', sans-serif;
            font-weight: bold;
        }

        .roomSearch-container {
            display: flex;
            justify-content: space-between;
            margin-top: 50px;
        }

        .MRYR-logo {
            width: 100px;
            height: 100px;
            margin-top: 50px;
            margin-left: 100px;
            text-align: center;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
        }

        .roomSearch-inputs {
            width: 300px;
            margin-top: 30px;
        }

        .input-container {
            text-align: left;
            font-weight: bold;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
        }

        .roomSearch-menu select, input, button {
            font-weight: bold;
            padding: 5px;
            height: 35px;
            width: 300px;
            margin-top: 5px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #448a47;
            cursor: pointer;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
            transition: box-shadow 0.4s ease;
        }

        .roomSearch-menu input:hover, select:hover, button:hover {
            box-shadow: none;
        }

        .roomSearch-buttons .button {
            margin-top: 30px;
            text-align: center;
            width: 150px;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
            border: none;
        }

        .roomSearch-buttons {
            text-align: center;
        }

        .search-btn {
            background-color:#448A47;
            color: #fff;
        }

        .homepage_btn {
            background-color:#F4BB4B;
            color: #981E1E;
        }      

        .search-rooms {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            margin-left: 50px;
        }

        .search-room-card {
            padding-bottom: 10px;
            height: 240px;
            width: 280px;
            border-radius: 25px;
            border: 0;
            color: #fff;
            background-color: #448A47;
        }

        .search-room-card .room-number {
            font-size: 32px;
            text-align: left;
        }

        .search-room-card-body{
            font-weight: bold;
            width: 95%;
            height: 75%;
            background-color: rgba(255, 255, 255, 0.3); 
            border-radius: 20px;
            overflow: hidden; 
            margin: auto;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
        }

        .search-room-card-body table {
            border-collapse: separate;
            border-spacing: 8px; /* 適切な間隔に調整 */
            width: 95%;
        }

        .search-room-card-body td {
            text-align: left;
            font-size: 18px; 
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
        }

        .search-room-card-body .td-right {
            color: #F4BB4B;
            font-size: 24px; 
        }
    </style>

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