@extends('layouts.app')

@section('title', 'Admin All Rooms')

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


        /* Contents */
        .col {
            flex-grow: 1; /* 可変の幅 */
        }

        .buttons {
            display: flex;
            justify-content: flex-end; /* ボタンを右寄せに配置 */
        }

        .search-btn {
            background-color: #448A47;
            color: #fff;
            font-weight: bold;
            border-radius: 10px;
        }

        .search-btn:hover {
            color: #fff;
            background-color: #2C462B;
            }

        .create-btn {
            background-color: #F4924B;
            color: #2C462B;
            font-weight: bold;
            border-radius: 10px;
        }

        .create-btn:hover {
            background-color: #F4BB4B;
            color: #981E1E;
            font-weight: bold;
        }

        .container {
            display: flex;
            flex-wrap: wrap; /* 画面が狭く収まらない場合にアイテムを次の行に折り返す */
            gap: 50px;
            margin-bottom: 50px;
        }

        .card {
            height: 290px;
            width: 330px;
            font-family: 'Raleway', sans-serif;
            border-radius: 25px;
            border: 0;
            font-weight: bold;
            color: #fff;
        }

        .card.checkedin {
            background-color: #2C462B;
        }

        .card.cleaning {
            background-color: #F4BB4B;
        }

        .card.not-cleaned {
            background-color: #981E1E;
        }
        
        .card.completed {
            background-color: #448A47;
        }

        .room-number {
            margin-top: 3px;
            font-size: 32px;
            font-weight: lighter;
        }        

        .room-status {
            font-family: 'Bona Nova', sans-serif;
            font-size: 36px;
            text-align: center;
        }

        .date {
            font-size: 20px;
        }
        
        .date p {    
            line-height: 1.3; /* 行間を狭くするために 1 に設定 */
        }

        .next-reserv  {
            font-size: 17px;
        }

        .room-status.cleaning,
        .date.cleaning {
            color: #2C462B;
        }

        .room-status.completed,
        .date.completed {
            color: #F4BB4B;
        }

        .room-status.completed,
        .date.completed {
            color: #F4924B;
        }

        .cleaning-progress {
        width: 100%;
        height: 10px;
        background-color: #fff; 
        border-radius: 5px;
        overflow: hidden;
        }

        .progress-bar-60 {
        height: 100%;
        width: 60%; /* 進捗に合わせて変更する値 */
        background-color: #F4924B; /* バーの色 */
        border-radius: 5px;
        }

        .progress-bar-30 {
        height: 100%;
        width: 30%; /* 進捗に合わせて変更する値 */
        background-color: #F4924B; /* バーの色 */
        border-radius: 5px;
        }

        .progress-percent {
            font-size: 24px;
            color: #F4924B;
        }

        .cleaning-completed {
        width: 100%;
        height: 10px;
        background-color: #F4BB4B; /* バーの色 */
        border-radius: 5px;
        }

        .cleaning-status {
            font-size: 24px;
            color: #ffffff;
            font-family: 'Bona Nova', sans-serif;
        }

        .cleaning-status.completed {
            font-size: 24px;
            color: #F4BB4B;
            font-family: 'Bona Nova', sans-serif;
        }

        .progress-bar.completed {
            background-color: #F4BB4B; 
        }

        .color-indicater {
            font-size: 18px;
            font-family: 'Bona Nova', sans-serif;
        }

    </style>
</head>
<body>
    {{-- Admin Controls --}}
    <div class="admin-control row">
        <div class="col-1" style="width: 264px;">
            <div class="list-group" style="width: 100%;">
                <a href="#" class="list-group-item p-3 text-center shadow-none active" aria-current="true">Rooms</a>          
                <a href="#" class="list-group-item p-3 text-center">Cleaners</a>
                <a href="#" class="list-group-item p-3 text-center">Guests</a>
            </div>
        </div>

        {{-- Content of All Rooms (Admin Index Page) --}}
        <div class="col me-5">
            <!-- Search and Create room button-->   
            <div class="buttons mt-5 me-5 text-end">
                <a href="#" class="btn search-btn px-3"><i class="fa-solid fa-magnifying-glass me-2"></i>Search a room</a>
                <a href="#" class="btn create-btn px-3 ms-5"><i class="fa-solid fa-plus me-2"></i>Create a new room</a>
            </div>

            <div class="container mt-5 ms-5">
                {{--  Checked IN  --}}
                <div class="card checkedin">
                    <p class="room-number p-1 ms-3 mb-0">Room 101</p>
                    <p class="room-status mt-2">Checked IN</p>
                    <div class="date mb-3">
                        <p class="text-start ms-5 mb-0 font-weight-bold">2023/11/5(Sun.)</p>
                        <p class="text-end me-5 mb-0 font-weight-bold">~2023/11/7(Tue.)</p>
                    </div>
                    <div class="row next-reserv my-3">
                        <div class="col mt-3 ms-4">
                            Next Reservation
                        </div>
                        <div class="col date">
                            <p class="mb-0 font-weight-bold">2023</p>
                            <p class="mb-0 font-weight-bold" style="font-size: 18px;">11/7 (Tue.) ~</p>
                        </div>
                    </div>
                </div>

                {{--  Cleaning / Reserved  --}}
                <div class="card cleaning">
                    <p class="room-number p-1 ms-3 mb-0">Room 102</p>
                    <p class="room-status cleaning mt-2">Reserved</p>
                    <div class="no-gutters align-items-center">
                        <div class="ms-4 mb-2">
                            <p class="mb-0">Cleaning Progress</p>
                        </div>
                        <div class="ms-4 me-4">
                            <div class="cleaning-progress">
                                <div class="progress-bar-60"></div>
                            </div>
                        </div>
                        <div class="progress-percent text-end me-4 mt-1">
                            60%
                        </div>
                    </div>
                    <div class="row next-reserv mt-2 mb-3">
                        <div class="col mt-3 ms-4">
                            Next Reservation
                        </div>
                        <div class="col date cleaning">
                            <p class="mb-0 font-weight-bold">2023</p>
                            <p class="mb-0 font-weight-bold" style="font-size: 18px;">11/7 (Tue.) ~</p>
                        </div>
                    </div>
                </div>
                
                {{--  Not Cleaned / Reserved  --}}
                <div class="card not-cleaned">
                    <p class="room-number p-1 ms-3 mb-0">Room 103</p>
                    <p class="room-status not-cleaned mt-2">Reserved</p>
                    <div class="no-gutters align-items-center">
                        <div class="ms-4 mb-2">
                            <p class="mb-0">Cleaning Progress</p>
                        </div>
                        <div class="ms-4 me-4">
                            <div class="cleaning-progress"></div>
                        </div>
                        <div class="cleaning-status text-end me-4 mt-1">
                            Not Cleaned
                        </div>
                    </div>
                    <div class="row next-reser mt-2 mb-3">
                        <div class="col mt-3 ms-4">
                            Next Reservation
                        </div>
                        <div class="col date not-cleaned">
                            <p class="mb-0 font-weight-bold">2023</p>
                            <p class="mb-0 font-weight-bold" style="font-size: 18px;">11/7 (Tue.) ~</p>
                        </div>
                    </div>
                </div>

                {{--  Checked Out / Not Cleaned / Vacant  --}}
                <div class="card not-cleaned">
                    <p class="room-number p-1 ms-3 mb-0">VIP Room</p>
                    <p class="room-status checked-out mt-2">Checked Out</p>
                    <div class="no-gutters align-items-center">
                        <div class="ms-4 mb-2">
                            <p class="mb-0">Cleaning Progress</p>
                        </div>
                        <div class="ms-4 me-4">
                            <div class="cleaning-progress"></div>
                        </div>
                        <div class="cleaning-status text-end me-4 mt-1">
                            Not Cleaned
                        </div>
                    </div>
                    <div class="row next-reserv vacant mt-2 text-center">
                        <div class="mt-2">
                            Next Reservation  <span class="ms-3" style="font-size: 24px;">Vacant</span>
                        </div>
                    </div>
                </div>

                {{--  Completed / Reserved  --}}
                <div class="card completed">
                    <p class="room-number p-1 ms-3 mb-0">Room 201</p>
                    <p class="room-status completed mt-2">Reserved</p>
                    <div class="no-gutters align-items-center">
                        <div class="ms-4 mb-2">
                            <p class="mb-0">Cleaning Progress</p>
                        </div>
                        <div class="ms-4 me-4">
                            <div class="cleaning-completed"></div>
                        </div>
                        <div class="cleaning-status completed text-end me-4 mt-1">
                            Competed
                        </div>
                    </div>
                    <div class="row next-reserv mt-2 mb-3">
                        <div class="col mt-3 ms-4">
                            Next Reservation
                        </div>
                        <div class="col date completed">
                            <p class="mb-0 font-weight-bold">2023</p>
                            <p class="mb-0 font-weight-bold" style="font-size: 18px;">11/7 (Tue.) ~</p>
                        </div>
                    </div>
                </div>

                {{--  Checked Out / Completed / Vacant  --}}
                <div class="card completed">
                    <p class="room-number p-1 ms-3 mb-0">Room 202</p>
                    <p class="room-status mt-2">Checked Out</p>
                    <div class="no-gutters align-items-center">
                        <div class="ms-4 mb-2">
                            <p class="mb-0">Cleaning Progress</p>
                        </div>
                        <div class="ms-4 me-4">
                            <div class="cleaning-completed"></div>
                        </div>
                        <div class="cleaning-status completed text-end me-4 mt-1">
                            Competed
                        </div>
                    </div>
                    <div class="row next-reserv vacant mt-2 text-center">
                        <div class="mt-2">
                            Next Reservation  <span class="ms-3" style="font-size: 24px;">Vacant</span>
                        </div>
                    </div>
                </div>

                {{--  Checked Out / Cleaning / Vacant  --}}
                <div class="card cleaning">
                    <p class="room-number p-1 ms-3 mb-0">Room 203</p>
                    <p class="room-status mt-2">Checked Out</p>
                    <div class="no-gutters align-items-center">
                        <div class="ms-4 mb-2">
                            <p class="mb-0">Cleaning Progress</p>
                        </div>
                        <div class="ms-4 me-4">
                            <div class="cleaning-progress">
                                <div class="progress-bar-30"></div>
                            </div>
                        </div>
                        <div class="progress-percent text-end me-4 mt-1">
                            30%
                        </div>
                    </div>
                    <div class="row next-reserv vacant mt-2 text-center">
                        <div class="mt-2">
                            Next Reservation  <span class="ms-3" style="font-size: 24px;">Vacant</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="color-indicater d-inline float-end mt-3 me-5 mb-5">
                <p class="d-inline me-4"><i class="fa-sharp fa-solid fa-square me-1" style="color: #2C462B"></i><span class="fw-bold">Checked IN</span></p>
                <p class="d-inline me-4"><i class="fa-sharp fa-solid fa-square me-1" style="color: #448A47"></i>Cleaning Status: <span class="fw-bold">Completed</span></p>
                <p class="d-inline me-4"><i class="fa-sharp fa-solid fa-square me-1" style="color: #F4BB4B"></i>Cleaning Status: <span class="fw-bold">Cleaning</span></p>
                <p class="d-inline me-4"><i class="fa-sharp fa-solid fa-square me-1" style="color: #981E1E"></i>Cleaning Status: <span class="fw-bold">Not Cleaned</span></p>
            </div>
        </div>  
    </div>  
@endsection