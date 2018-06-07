<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fontawesome/fontawesome-all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery-ui/jquery-ui.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/simple-sidebar.css') }}" rel="stylesheet">
    <link href="{{ asset('plugin/dataTables/css/dataTables.bootstrap4.css') }}" rel="stylesheet">


    <!--Scripts-->
    <script src="{{ asset('js/jquery/jquery.slim.min.js') }}"></script>
    <script src="{{ asset('js/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('plugin/dataTables/js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('plugin/dataTables/js/dataTables.bootstrap4.js') }}"></script>
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container-fluid">
            <a id="menu-toggle" class="navbar-text nav-link mr-auto mr-md-0" href="#menu-toggle" data-toggle="wrapper"><span class="fa fa-bars"></span></a>

            <a class="navbar-brand mr-auto mr-lg-0" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li><a class="nav-link" href="{{ route('admin.login') }}">{{ __('Login') }}</a></li>
                        {{--<li><a class="nav-link" href="{{ route('admin.register') }}">{{ __('Register') }}</a></li>--}}
                    @else
                        {{--<li><a class="nav-link" href="#"><span class="fa fa-envelope"></span> Inbox</a></li>--}}
                        <li><a class="nav-link" href="#"><span class="fa fa-bell"></span></a></li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item ml-auto" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <span class="fas fa-sign-out"></span> Logout
                                </a>

                                <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <div id="wrapper">
        <div id="sidebar-wrapper">
            @include('layouts.admin.sidebar')
        </div>
        <div id="page-content-wrapper">
            <main role="main" class="container py-4">
                @yield('content')
            </main>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });

        $("table").DataTable();
    });
</script>
</body>
</html>
