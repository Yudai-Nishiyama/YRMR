@extends('layouts.app')

@section('title', 'Calender')

@section('content')
    <a href="{{ route('guests.reservationCalendar',$date) }}"></a>
@endsection