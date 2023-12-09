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
        body {
            background-image: url('{{ asset('images/brick_building9 1.png') }}');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        .logo {
            width: 100px;
            height: 100px;
            margin-top: 50px;
            margin-left: 100px;
        }

        .search-container {
            display: flex;
            justify-content: space-between;
            margin-top: 50px;
        }

        .search-rooms {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            margin-left: 50px;
        }

        .search-inputs {
            width: 300px;
            margin-top: 30px;
        }

        .search-buttons {
            margin-top: 30px;
            margin-left: 70px;
        }

        .input-container label {
            font-family: Raleway;
            text-align: left;
            font-weight: bold;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
        }

        select,input,button {
            font-family: Raleway;
            font-weight: bold;
            padding: 5px;
            margin-top: 5px;
            margin-bottom: 10px;
            width: 300px;
            border-radius: 5px;
            border: 1px solid #448a47;
            cursor: pointer;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
            transition: box-shadow 0.4s ease;
        }

        input:hover {
            box-shadow: none;
        }

        select:hover {
            box-shadow: none;
        }

        .button {
            width: 150px;
        }

        .card {
            height: 240px;
            width: 280px;
            font-family: 'Raleway', sans-serif;
            border-radius: 25px;
            border: 0;
            font-weight: bold;
            color: #fff;
        }

        .card.checkedin {
            background-color: #448A47;
        }

        .underline {
            border-bottom: 1px solid #448a47;
        }

        .search_button {
            background-color:#448A47;
            color: #fff;
            border: 1px solid #448a47;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
            transition: box-shadow 0.4s ease;
        }
        .homepage_button {
            background-color:#F4BB4B;
            color: #981E1E;
            border: 1px solid #F4BB4B;
        }      
    </style>
</head>
<body>
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
        <div class="container col margin:50px;">  
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 style="font-size: 64px; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">Room Search</h1>
                    <div  style="border-top: 3px solid #448A47; width: 600px; margin: 5px auto;"></div>
                </div>
            </div>
        
            <div class="search-container">
                <div class="search-menu">
                <img class="logo" src="{{asset('images/My Room Your Room-logos 2.png')}}" alt="ホテルのロゴ">
        
                <form action="#">
                    <div class="search-inputs">
                        <div class="input-container">
                            <label for="email">Room Type</label>
                            <select name="roomtype" id="roomtype">
                            <option value="1" selected>Single</option>
                            <option value="2">Double</option>
                            <option value="3">triple</option>
                            </select>
                        </div>
        
                        <div class="input-container">
                            <label for="chechIn">Reservation Date(check in)</label>
                            <input type="date" id="check" name="dateInput">
                        </div>
        
                        <div class="input-container">
                        <label for="checkOut">Reservation Date(check out)</label>
                        <input type="date" id="checkOut" name="dateInput">
                        </div>
        
                    </div>
        
        
                    <div class="search-buttons">
        
                        <div class="search-button">
                            <input class="button search_button" type="submit" value="Search">
                        </div>
        
                        <div class="search-button">
                        {{-- <a href=""><input class="button homepage_button" type="submit" value="Home page"></a> --}}
                        <a href="#"><button class="button homepage_button">Home page</button></a>
                        </div>
        
                    </div>
        
                </form>
        
                </div>
        
                <div class="search-rooms">
                    <div class="rooms">
                        <div class="card checkedin" style="padding: 10px;">
                        <h2 class="room-number p-1 ms-3 mb-0" style="font-family: 'Raleway', sans-serif;">Room 101</h2>
                            <div class="d-flex justify-content-center align-items-center" style="width: 95%; height:80%; background-color: rgba(255, 255, 255, 0.3); border-radius: 20px; overflow: hidden; margin: auto;">
                                <table style="width: 90%; font-family: 'Bona Nova', sans-serif;">
                                <tbody>
                                    <tr>
                                        <td style="text-align: left; font-size: 20px; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">Room Type</td>
                                        <td style="text-align: left; font-size: 20px; font-family: 'Bona Nova', sans-serif; color: #F4BB4B; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">Single bed</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: left; font-size: 20px; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">Price</td>
                                        <td style="text-align: left; font-size: 20px; font-family: 'Bona Nova', sans-serif; color: #F4BB4B; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">$300</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: left; font-size: 20px; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">Date</td>
                                        <td style="text-align: left; font-size: 20px; font-family: 'Bona Nova', sans-serif; color: #F4BB4B; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">11/1~11/2</td>
                                    </tr>
                                </tbody>
                                </table>
                        </div>
                        </div>
                    </div>
                    <div class="rooms">
                    <div class="card checkedin" style="padding: 10px;">
                        <h2 class="room-number p-1 ms-3 mb-0" style="font-family: 'Raleway', sans-serif;">Room 102</h2>
                        <div class="d-flex justify-content-center align-items-center" style="width: 95%; height:80%; background-color: rgba(255, 255, 255, 0.3); border-radius: 20px; overflow: hidden; margin: auto;">
                            <table style="width: 90%; font-family: 'Bona Nova', sans-serif;">
                                <tbody>
                                    <tr>
                                        <td style="text-align: left; font-size: 20px; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">Room Type</td>
                                        <td style="text-align: left; font-size: 20px; font-family: 'Bona Nova', sans-serif; color: #F4BB4B; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">Single bed</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: left; font-size: 20px; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">Price</td>
                                        <td style="text-align: left; font-size: 20px; font-family: 'Bona Nova', sans-serif; color: #F4BB4B; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">$300</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: left; font-size: 20px; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">Date</td>
                                        <td style="text-align: left; font-size: 20px; font-family: 'Bona Nova', sans-serif; color: #F4BB4B; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">11/1~11/2</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    </div>
                    <div class="rooms">
                        <div class="card checkedin" style="padding: 10px;">
                            <h2 class="room-number p-1 ms-3 mb-0" style="font-family: 'Raleway', sans-serif;">Room 103</h2>
                            <div class="d-flex justify-content-center align-items-center" style="width: 95%; height:80%; background-color: rgba(255, 255, 255, 0.3); border-radius: 20px; overflow: hidden; margin: auto;">
                                <table style="width: 90%; font-family: 'Bona Nova', sans-serif;">
                                <tbody>
                                    <tr>
                                        <td style="text-align: left; font-size: 20px; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">Room Type</td>
                                        <td style="text-align: left; font-size: 20px; font-family: 'Bona Nova', sans-serif; color: #F4BB4B; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">Single bed</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: left; font-size: 20px; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">Price</td>
                                        <td style="text-align: left; font-size: 20px; font-family: 'Bona Nova', sans-serif; color: #F4BB4B; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">$300</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: left; font-size: 20px; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">Date</td>
                                        <td style="text-align: left; font-size: 20px; font-family: 'Bona Nova', sans-serif; color: #F4BB4B; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">11/1~11/2</td>
                                    </tr>
                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="rooms">
                        <div class="card checkedin" style="padding: 10px;">
                            <h2 class="room-number p-1 ms-3 mb-0" style="font-family: 'Raleway', sans-serif;">Room 104</h2>
                            <div class="d-flex justify-content-center align-items-center" style="width: 95%; height:80%; background-color: rgba(255, 255, 255, 0.3); border-radius: 20px; overflow: hidden; margin: auto;">
                                <table style="width: 90%; font-family: 'Bona Nova', sans-serif;">
                                    <tbody>
                                        <tr>
                                            <td style="text-align: left; font-size: 20px; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">Room Type</td>
                                            <td style="text-align: left; font-size: 20px; font-family: 'Bona Nova', sans-serif; color: #F4BB4B; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">Single bed</td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: left; font-size: 20px; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">Price</td>
                                            <td style="text-align: left; font-size: 20px; font-family: 'Bona Nova', sans-serif; color: #F4BB4B; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">$300</td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: left; font-size: 20px; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">Date</td>
                                            <td style="text-align: left; font-size: 20px; font-family: 'Bona Nova', sans-serif; color: #F4BB4B; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">11/1~11/2</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
        
                        </div>
                        </div>
                        <div class="rooms">
                            <div class="card checkedin" style="padding: 10px;">
                            <h2 class="room-number p-1 ms-3 mb-0" style="font-family: 'Raleway', sans-serif;">Room 105</h2>
                                <div class="d-flex justify-content-center align-items-center" style="width: 95%; height:80%; background-color: rgba(255, 255, 255, 0.3); border-radius: 20px; overflow: hidden; margin: auto;">
                                    <table style="width: 90%; font-family: 'Bona Nova', sans-serif;">
                                    <tbody>
                                        <tr>
                                            <td style="text-align: left; font-size: 20px; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">Room Type</td>
                                            <td style="text-align: left; font-size: 20px; font-family: 'Bona Nova', sans-serif; color: #F4BB4B; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">Single bed</td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: left; font-size: 20px; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">Price</td>
                                            <td style="text-align: left; font-size: 20px; font-family: 'Bona Nova', sans-serif; color: #F4BB4B; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">$300</td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: left; font-size: 20px; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">Date</td>
                                            <td style="text-align: left; font-size: 20px; font-family: 'Bona Nova', sans-serif; color: #F4BB4B; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">11/1~11/2</td>
                                        </tr>
                                    </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="rooms">
                            <div class="card checkedin" style="padding: 10px;">
                            <h2 class="room-number p-1 ms-3 mb-0" style="font-family: 'Raleway', sans-serif;">Room 106</h2>
                                <div class="d-flex justify-content-center align-items-center" style="width: 95%; height:80%; background-color: rgba(255, 255, 255, 0.3); border-radius: 20px; overflow: hidden; margin: auto;">
                                <table>
                                    <table style="width: 90%; font-family: 'Bona Nova', sans-serif;">
                                    <tbody>
                                        <tr>
                                            <td style="text-align: left; font-size: 20px; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">Room Type</td>
                                            <td style="text-align: left; font-size: 20px; font-family: 'Bona Nova', sans-serif; color: #F4BB4B; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">Single bed</td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: left; font-size: 20px; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">Price</td>
                                            <td style="text-align: left; font-size: 20px; font-family: 'Bona Nova', sans-serif; color: #F4BB4B; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">$300</td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: left; font-size: 20px; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">Date</td>
                                            <td style="text-align: left; font-size: 20px; font-family: 'Bona Nova', sans-serif; color: #F4BB4B; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">11/1~11/2</td>
                                        </tr>
                                    </tbody>
                                </table>
                                </table>
                            </div>
        
                            </div>
                        </div>
                        <div class="rooms">
                            <div class="card checkedin" style="padding: 10px;">
                                <h2 class="room-number p-1 ms-3 mb-0" style="font-family: 'Raleway', sans-serif;">Room 107</h2>
                                <div class="d-flex justify-content-center align-items-center" style="width: 95%; height:80%; background-color: rgba(255, 255, 255, 0.3); border-radius: 20px; overflow: hidden; margin: auto;">
                                    <table style="width: 90%; font-family: 'Bona Nova', sans-serif;">
                                        <tbody>
                                            <tr>
                                                <td style="text-align: left; font-size: 20px; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">Room Type</td>
                                                <td style="text-align: left; font-size: 20px; font-family: 'Bona Nova', sans-serif; color: #F4BB4B; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">Single bed</td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left; font-size: 20px; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">Price</td>
                                                <td style="text-align: left; font-size: 20px; font-family: 'Bona Nova', sans-serif; color: #F4BB4B; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">$300</td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left; font-size: 20px; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">Date</td>
                                                <td style="text-align: left; font-size: 20px; font-family: 'Bona Nova', sans-serif; color: #F4BB4B; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">11/1~11/2</td>
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