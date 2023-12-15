<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }}| @yield('title')</title>

    {{-- css --}}
    <link rel="stylesheet" href={{ asset('css/admins/view_cleaning_task.css') }}>
    <link rel="stylesheet" href={{ asset('css/admins/cleaners_page.css') }}>
    <link rel="stylesheet" href={{ asset('css/admins/style.css') }}>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    {{-- custom --}}
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

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
    {{-- CSS --}}
    <link href="{{ asset('css/admins/room-search.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admins/create-a-new-room.css') }}" rel="stylesheet">

    <style>
        /* *{
            border:1px solid blue;
        } */






        /* Navbar */
        .navbar {
            background-color: #2C462B;
            font-family: 'Bona Nova', sans-serif;
        }
  
        .navbar-brand img {
            height: 80px;
            width: auto; 
        }
    
        .admin-panel {
            color: #F4BB4B;
            font-weight: bold;
            font-size: 48px
        }
    
        .hi-username {
            color: #fff;
            font-size: 27px;
            font-weight: bolder;
            font-family: 'Raleway', sans-serif;
        }

        .logout {
            color: #F4924B;
            font-size: 24px;
            font-weight: bold;
        }

        .logout:hover {
            color: #F4BB4B;
            font-size: 24px;
            font-weight: bold;
        }

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
        @if (route('showCreateCleanerPage'))
            <main class="py-0">
                @yield('content')
            </main>
        @else
            <main class="py-4">
                @yield('content')
            </main>
        @endif
    </div>
</body>
</html>
