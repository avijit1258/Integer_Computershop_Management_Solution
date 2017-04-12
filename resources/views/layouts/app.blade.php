<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Integer') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Integer = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>

    <style >
        html, body{
            background-color :#686205;
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-inverse navbar-static-top">
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
                        {{ config('app.name', 'Integer Computer Shop') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    @if(Auth::user())
                    <ul class="nav navbar-nav">
                        &nbsp;
                        <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    ADD NEW<span class="caret"></span>
                                </a>
                        
                            <ul class="dropdown-menu" role="menu">
                            <li>
                                <button class="btn btn-default navbar-btn"><a href="{{url('/catagories')}}">Catagories</a></button>
                        </li>
                        <li>
                        <button class="btn btn-default navbar-btn"><a href="{{url('/sub_catagories')}}">Sub Catagories</a></button>
                        </li>
                        <li>
                            <button class="btn btn-default navbar-btn"><a href="{{url('/products')}}">Products</a></button>
                         </li>
                        <li>
                            <button class="btn btn-default navbar-btn"><a href="{{url('/brands')}}">Brands</a></button>
                         </li>
                        <li>
                            <button class="btn btn-default navbar-btn"><a href="{{url('/vendors')}}">Vendors</a></button>

                        </li>                                
                            </ul>
                        </li>
                        
                        <li>
                        <button class="btn btn-default navbar-btn"><a href="{{url('/sells')}}">Invoice</a></button>
                        </li>
                        <li>
                            <button class="btn btn-default navbar-btn"><a href="{{url('/purchases')}}">Purchase</a></button>
                        </li>
                        <li>
                        <button class="btn btn-default navbar-btn"><a href="{{url('/sells/ledger')}}">Report</a></button>
                        </li>
                        
                        <li>


                    </ul>
                    @endif

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

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    
</body>
</html>
