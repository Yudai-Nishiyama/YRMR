@extends('layouts.app')

@section('title', 'Admin Cleaning Progress Page')

@section('content')

<div class="container">
    <div class="card" style="border:none;">
        <div class="card-header" style="background-color: #2C462B; border-radius:25px 25px 0px 0px;">
            <div class="row">
                <div class="col">
                    <h2 style="color:#F4BB4B" class="fw-bold">Cleaning Progress Page</h2>
                </div>
            </div>
        </div>
    
        <div class="card-body justify-content-center border">
            <table class="table">
                <thead>
                    <tr style="border-bottom: 1px solid black;">
                        <th>Name</th>
                        <th>Room No.</th>
                        <th>Room Type</th>
                        <th>Progress bar</th>
                        <th></th>
                        <th>Cleaning Status</th>
                        <th>Estimated Finishing Time</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="border-bottom: 1px solid black;">
                        <td>
                            <form action="#" method="POST">
                                @csrf
                                <select class="classic" name="" onchange="this.form.submit()"> {{-- submit form without submit button --}}
                                    <option selected value="id_of_non_selected">Choose a cleaner</option>
                                    <option value="id_of_cleaner">cleaner A</option>
                                    <option value="id">B</option>
                                    <option value="id">C</option>
                                  </select>
                            </form>
                        </td>
                        <td>101</td>
                        <td>Double bed</td>
                        <td>
                            <div class="row">
                                <div class="col text-center ">
                                    <p class="mb-0">60%</p>
                                </div>
                            </div>
                            <div class="row progress_bar_table">
                                {{-- use if function to display color? --}}
                                <div class="col" style="background-color: #F4BB4B"></div>
                                <div class="col" style="background-color: #F4BB4B"></div>
                                <div class="col"></div>
                            </div>
                        </td>
                        <td></td>
                        <td style="color: #F4BB4B">Cleaning</td>
                        <td>10:00</td>
                        <td>
                            <a href="#" class="float-end btn fw-bold" style="background-color:#F4924B; color:#2C462B; ">Check Progress</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="card-footer" style="background-color: #2C462B; border-radius:0px 0px 25px 25px;">
            <br>
        </div>
    </div>
</div>

@endsection