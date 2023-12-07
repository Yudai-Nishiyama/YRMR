@extends('layouts.app')

@section('title', 'Calender')

@section('content')

<div class="container mt-5 calendar">
    <h3 class="mb-4"><a href="{{ route('showCalendar', ['ym' => $prev]) }}">&lt;</a>
        <span class="mx-3">{{ $html_title }}</span>
        @if ($next !== null)
        <a href="{{ route('showCalendar', ['ym' => $next]) }}">&gt;</a></h3>
        @endif
    <table class="table table-bordered">
        <tr>
            <th>日</th>
            <th>月</th>
            <th>火</th>
            <th>水</th>
            <th>木</th>
            <th>金</th>
            <th>土</th>
        </tr>
        @foreach ($weeks as $week)
            {!! $week !!}
        @endforeach
    </table>
</div>

@endsection