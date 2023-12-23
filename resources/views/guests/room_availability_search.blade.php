@extends('layouts.app')

@section('title', 'Reservation')

@section('content')


<div class="bg-search">

    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mt-4">
                <h1 style="font-size: 64px; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);" class="underline">Room Search</h1>
            </div>
        </div>

        <div class="search-container">

        <div class="search-memus">

            <img class="logo" src="{{asset('images/My Room Your Room-logos 2.png')}}" alt="ホテルのロゴ">

            <form action="#">


            <div class="search-inputs">

                <div class="input-container">
                    <label for="email">Room Type</label>
                    <select class="select_check" name="roomtype" id="roomtype">
                        <option value="1" selected>Single</option>
                        <option value="2">Double</option>
                        <option value="3">triple</option>
                    </select>
                </div>

                <div class="input-container">
                    <label for="chechIn">Reservation Date(check in)</label>
                    <input class="input_check" type="date" id="check" name="dateInput">
                </div>

                <div class="input-container">
                    <label for="checkOut">Reservation Date(check out)</label>
                    <input class="input_check" type="date" id="checkOut" name="dateInput">
                </div>

            </div>


            <div class="search-buttons">

                <div class="search-button">
                    <input class="button submit_button" type="submit" value="Search">
                </div>

                <div class="search-button">
                    {{-- <a href=""><input class="button homepage_button" type="submit" value="Home page"></a> --}}
                    <a href="#"><button class="button homepage_button button_check">Home page</button></a>
                </div>

            </div>

            </form>

        </div>

        <div class="search-rooms">
            <div class="rooms">
                <div class="tool checkedin" style="padding: 10px;">
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
                <div class="tool checkedin" style="padding: 10px;">
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
                <div class="tool checkedin" style="padding: 10px;">
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
                    <div class="tool checkedin" style="padding: 10px;">
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
                    <div class="tool checkedin" style="padding: 10px;">
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
                    <div class="tool checkedin" style="padding: 10px;">
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
                        <div class="tool checkedin" style="padding: 10px;">
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

</div>


@endsection
