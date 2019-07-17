<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Matcha') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    @stack('scripts')

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img class="logo_img" src="{{ asset('images/service/heart.png') }}">
                    {{ config('app.name', 'Matcha') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->login }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    {{--My profile--}}
                                    <a class="dropdown-item" href="{{ route('profile') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('profile-form').submit();">
                                        {{ __('My profile') }}
                                    </a>

                                    <form id="profile-form" action="{{ route('profile') }}" method="GET" style="display: none;">
                                        @csrf
                                    </form>

                                    {{--Show all users--}}
                                    <a class="dropdown-item" href="{{ route('show.all.users') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('show-all-users-form').submit();">
                                        {{ __('Show all users') }}
                                    </a>

                                    <form id="show-all-users-form" action="{{ route('show.all.users') }}" method="GET" style="display: none;">
                                        @csrf
                                    </form>

                                    {{--Viewed profiles--}}
                                    <a class="dropdown-item" href="{{ route('viewed.profiles') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('viewed-profiles-form').submit();">
                                        {{ __('Viewed profiles') }}
                                    </a>

                                    <form id="viewed-profiles-form" action="{{ route('viewed.profiles') }}" method="GET" style="display: none;"></form>

                                    {{--Viewed my profile--}}
                                    <a class="dropdown-item" href="{{ route('viewed.my.profile') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('viewed-my-profile-form').submit();">
                                        {{ __('Viewed my profile') }}
                                    </a>

                                    <form id="viewed-my-profile-form" action="{{ route('viewed.my.profile') }}" method="GET" style="display: none;"></form>

                                    {{--Liked by me--}}
                                    <a class="dropdown-item" href="{{ route('liked.by.me') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('liked-by-me-form').submit();">
                                        {{ __('Liked by me') }}
                                    </a>

                                    <form id="liked-by-me-form" action="{{ route('liked.by.me') }}" method="GET" style="display: none;"></form>

                                    {{--Liked me--}}
                                    <a class="dropdown-item" href="{{ route('liked.me') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('liked-me-form').submit();">
                                        {{ __('Liked my profile') }}
                                    </a>

                                    <form id="liked-me-form" action="{{ route('liked.me') }}" method="GET" style="display: none;"></form>

                                    {{--Connections--}}
                                    <a class="dropdown-item" href="{{ route('connections') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('connections-form').submit();">
                                        {{ __('Connections') }}
                                    </a>

                                    <form id="connections-form" action="{{ route('connections') }}" method="GET" style="display: none;"></form>

                                    {{--Blocked profiles--}}
                                    <a class="dropdown-item" href="{{ route('blocked.users') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('blocked-users-form').submit();">
                                        {{ __('Blocked profiles') }}
                                    </a>

                                    <form id="blocked-users-form" action="{{ route('blocked.users') }}" method="GET" style="display: none;"></form>

                                    {{--Logout--}}
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
        <footer-component></footer-component>
    </div>
</body>
</html>
