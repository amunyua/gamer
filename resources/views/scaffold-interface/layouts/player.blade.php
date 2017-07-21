<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>

    @include("scaffold-interface.layouts.includes.header")

    <link href="{{ URL::Asset("content/css/inspania.css") }}" rel="stylesheet">
    <link href="{{ URL::Asset("content/css/animate.css") }}" rel="stylesheet">

</head>

<body class="" style="background: #18203b url({{ URL::asset('img/header-bg-3.jpg') }}) no-repeat center;
background-size: cover;">
<div id="particles-js" style=" position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: -1;"></div>
<div class="container">
        <nav class="navbar navbar-info navbar">
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
                        Gamer
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
</div>
<!-- Mainly scripts -->
<script src="{{ URL::asset('/content/js/jquery.js') }}"></script>
<script src="{{ URL::asset('/content/js/bootstrap.js') }}"></script>
<script src="{{ URL::asset('content/js/app.min.js') }}"></script>
<script src="{{ URL::asset('content/js/demo.js') }}"></script>
<script> var baseURL = "{{ URL::to('/') }}"</script>
<script src = "{{URL::asset('content/js/ajaxisjs.js') }}"></script>
<script src = "{{URL::asset('content/js/scafolding-custom.js') }}"></script>
<script src="{{ URL::asset('content/js/pusher.js') }}"></script>
<script src="{{ URL::asset('content/js/particles.min.js') }}"></script>
<script src="{{ URL::asset('content/js/app2.js') }}"></script>
<script src=" {{ URL::asset('bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src=" {{ URL::asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<!-- SlimScroll -->
<script src=" {{ URL::asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src=" {{ URL::asset('bower_components/fastclick/lib/fastclick.js') }}"></script>
@stack('js')

<script>
//    var count_particles, stats, update;
//    stats = new Stats;
//    stats.setMode(0);
//    stats.domElement.style.position = 'absolute';
//    stats.domElement.style.left = '0px';
//    stats.domElement.style.top = '0px';
//    document.body.appendChild(stats.domElement);
//    count_particles = document.querySelector('.js-count-particles');
//    update = function() {
//        stats.begin();
//        stats.end();
//        if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
//            count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
//        }
//        requestAnimationFrame(update);
//    };
//    requestAnimationFrame(update);
</script>

<script>
   /* // pusher log to console.
    Pusher.logToConsole = true;
    // here is pusher client side code.
    var pusher = new Pusher("{{env("PUSHER_APP_KEY")}}", {
        encrypted: true
    });
    var channel = pusher.subscribe('test-channel');
    channel.bind('test-event', function(data) {
        // display message coming from server on dashboard Notification Navbar List.
        $('.notification-label').addClass('label-warning');
        $('.notification-menu').append(
            '<li><a href="#"><i class="fa fa-users text-aqua"></i> '+data.message+'</a></li>'
        );
    });*/
</script>
<script>
    $(function () {
        $('#example1').DataTable()
        $('#example2').DataTable({
            'paging'      : true,
            'lengthChange': false,
            'searching'   : false,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : false
        })
    })
</script>

</body>

</html>
