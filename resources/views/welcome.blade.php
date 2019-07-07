<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Matcha</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
        <!-- Styles -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <style>
            html, body {
                background: url(images/couples2.png) no-repeat;
                /*-moz-background-size: auto 100%; !* Firefox 3.6+ *!*/
                /*-webkit-background-size: auto 100%; !* Safari 3.1+ и Chrome 4.0+ *!*/
                /*-o-background-size: auto 100%; !* Opera 9.6+ *!*/
                background-size: cover; /* Современные браузеры */
                background-position: center;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: white;
                opacity: 0.7;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .links > a:hover {
                opacity: 1;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
    <div id="app">
        <header id="mainPageHeader">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </header>
        <div class="flex-center position-ref" id="main_container_formain">
            <div class="content">
                <div class="title m-b-md mainTitle">
                    <span>Match. Chat. Date.</span>
                </div>
            </div>
        </div>
        <footer class="footerMainpage">
            <p class="copyright">
                &copy; created by Oleksii Rudenko & Dariia Piven, 2019 =)
            </p>
        </footer>
    </div>
    </body>
</html>
