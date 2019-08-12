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
    <script src="{{ asset('js/index.js') }}" defer></script>
    @stack('scripts')

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    @stack('style')
</head>
<body>
    <div id="page-preloader"><span class="spinner" id="spinner"></span></div>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img class="logo_img" alt="Matcha" src="{{ asset('images/service/heart.png') }}">
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
                            @if(Auth::user()->hasVerifiedEmail())

                                <form id="suggestions-form" action="{{ route('searching') }}" method="GET">
                                    <button type="submit" class="btn btn-outline-secondary">Search matches</button>
                                </form>

                                <form id="notifications-form" action="{{ route('notifications') }}" method="POST">
                                    @csrf
                                    <count-notifications-component url="{{ route('notifications.count') }}" read_url="{{ route('notifications') }}" csrf="{{ csrf_token() }}"></count-notifications-component>
                                </form>

                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->login }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        {{--My profile--}}
                                        <a class="dropdown-item" href="{{ route('profile') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('profile-form').submit();">
                                            {{ __('My profile') }}<img src="{{asset('images/service/profile.png')}}" class="dropdown-item_img">
                                        </a>

                                        <form id="profile-form" action="{{ route('profile') }}" method="GET" style="display: none;">
                                            @csrf
                                        </form>

                                        {{--Viewed profiles--}}
                                        <a class="dropdown-item" href="{{ route('viewed.profiles') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('viewed-profiles-form').submit();">
                                            {{ __('Viewed profiles') }}<img src="{{asset('images/service/history.png')}}" class="dropdown-item_img">
                                        </a>

                                        <form id="viewed-profiles-form" action="{{ route('viewed.profiles') }}" method="GET" style="display: none;"></form>

                                        {{--Viewed my profile--}}
                                        <a class="dropdown-item" href="{{ route('viewed.my.profile') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('viewed-my-profile-form').submit();">
                                            {{ __('Viewed my profile') }}<img src="{{asset('images/service/eye.png')}}" class="dropdown-item_img">
                                        </a>

                                        <form id="viewed-my-profile-form" action="{{ route('viewed.my.profile') }}" method="GET" style="display: none;"></form>

                                        {{--Liked by me--}}
                                        <a class="dropdown-item" href="{{ route('liked.by.me') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('liked-by-me-form').submit();">
                                            {{ __('Liked by me') }} <img src="{{asset('images/service/like.png')}}" class="dropdown-item_img">
                                        </a>

                                        <form id="liked-by-me-form" action="{{ route('liked.by.me') }}" method="GET" style="display: none;"></form>

                                        {{--Liked me--}}
                                        <a class="dropdown-item" href="{{ route('liked.me') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('liked-me-form').submit();">
                                            {{ __('Liked my profile') }}<img src="{{asset('images/service/like_to_me_2.png')}}" class="dropdown-item_img">
                                        </a>

                                        <form id="liked-me-form" action="{{ route('liked.me') }}" method="GET" style="display: none;"></form>

                                        {{--Connections--}}
                                        <a class="dropdown-item" href="{{ route('connections') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('connections-form').submit();">
                                            {{ __('Connections') }}  <img src="{{asset('images/service/connect.png')}}" class="dropdown-item_img">
                                        </a>

                                        <form id="connections-form" action="{{ route('connections') }}" method="GET" style="display: none;"></form>

                                        {{--Blocked profiles--}}
                                        <a class="dropdown-item" href="{{ route('blocked.users') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('blocked-users-form').submit();">
                                            {{ __('Blocked profiles') }} <img src="{{asset('images/service/block_color.png')}}" class="dropdown-item_img">
                                        </a>

                                        <form id="blocked-users-form" action="{{ route('blocked.users') }}" method="GET" style="display: none;"></form>

                                        <div class="dropdown-divider"></div>

                                        {{--Logout--}}
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}<img src="{{asset('images/service/logout.png')}}">
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->login }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

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
                            @endif
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <div id="drop_up_notifications">
            <span id="clear_all" hidden onclick="clear_all()">Clear all</span>
            <div id="drop_up_notifications_body"></div>
        </div>
        <main class="py-4">
            @yield('content')
        </main>
        <footer-component></footer-component>
    </div>
</body>
</html>
