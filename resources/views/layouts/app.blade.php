<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }}| @yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    {{-- custom --}}
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    {{-- css --}}
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admins/cleaners/modal/cleaner_delete_modal.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admins/cleaners/cleaning_progress_page.css') }}" rel="stylesheet">
    <link href="{{ asset('css/guests/calendar.css') }}" rel="stylesheet">


    {{-- FontAwesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
    <!-- Link to Raleway font -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
    <!-- Link to Bona Nova font -->
    <link href="https://fonts.googleapis.com/css2?family=Bona Nova:wght@400;700&display=swap" rel="stylesheet">
    {{-- font Bona Nova and Raleway --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bona+Nova:wght@400;700&family=Raleway:wght@400;700&display=swap" rel="stylesheet">

    <style>
        /* *{
            border:1px solid blue;
        } */

       

    </style>
</head>
<body>
    <div id="app">
        {{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'MRYR') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="#" role="button" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> --}}
        <nav class="navbar navbar-expand-md shadow-sm navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand d-flex align-items-center me-5" href="{{ url('/') }}">
                    <img src="/images/logo.jpeg" alt="Logo">
                </a>
                <span class="admin-panel me-auto h2 mb-0">Admin Panel</span>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <span class="hi-username d-block mt-2 me-5">Hi username!</span>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link logout ms-4 me-4" href="#">Log Out</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
            <main class="py-0">
                @yield('content')
            </main>
    </div>
</body>
</html>
