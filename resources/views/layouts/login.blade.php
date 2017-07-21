<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>

    {{--<link href="css/bootstrap.min.css" rel="stylesheet">--}}
    {{--<link href="font-awesome/css/font-awesome.css" rel="stylesheet">--}}
    @include("scaffold-interface.layouts.includes.header")

    <link href="{{ URL::Asset("content/css/inspania.css") }}" rel="stylesheet">
    <link href="{{ URL::Asset("content/css/animate.css") }}" rel="stylesheet">

</head>

<body class="gray-bg" style="background: #18203b url({{ URL::asset('img/header-bg-3.jpg') }}) no-repeat center;
        background-size: cover;">
<div id="particles-js" style=" position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: -1;"></div>
<div class="container">
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                {{--{{ config('app.name', 'Laravel') }}--}}
                The Game
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
    @yield('content')

    <div class="row">
        {{--<div class="col-md-6">--}}
            {{--Gammer--}}
        {{--</div>--}}
        {{--<div class="col-md-6 text-right">--}}
            {{--<small></small>--}}
        {{--</div>--}}
    </div>

</div>

<script src="{{ URL::asset('content/js/particles.min.js') }}"></script>
<script src="{{ URL::asset('content/js/app2.js') }}"></script>
</body>

</html>
