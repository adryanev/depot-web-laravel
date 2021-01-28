<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }} - @yield('title')</title>

        <!-- Styles -->
{{--        <link rel="stylesheet" href="{{ asset('css/app.css') }}">--}}
        <link rel="stylesheet" href="{{ asset('css/app-landing.css') }}">


    </head>
    <body class="show-spinner">

    <div class="landing-page">
        @section('mobile-menu')
            <div class="mobile-menu">
                <a href="{{route('landing.index')}}" class="logo-mobile">
                    <span></span>
                </a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="#">{{__('Harga')}}</a>
                    </li>
                    <li class="nav-item">
                        <div class="separator"></div>
                    </li>
                    <li class="nav-item mt-2">
                        <a href="{{route('login')}}">{{__('Masuk')}}</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('register')}}">{{__('Daftar')}}</a>
                    </li>
                </ul>
            </div>
        @show

        <div class="main-container">
            @section('navigation')
                <nav class="landing-page-nav">
                    <div class="container d-flex align-items-center justify-content-between">
                        <a href="{{route('landing.index')}}" class="navbar-logo pull-left">
                            <span class="white"></span>
                            <span class="dark"></span>
                        </a>
                        <ul class="navbar-nav d-none d-lg-flex flex-row">
                            <li class="nav-item">
                                <a href="#">{{__('Harga')}}</a>
                            </li>
                            <li class="nav-item mr-3">
                                <a href="{{route('login')}}">{{__('Masuk')}}</a>
                            </li>
                            <li class="nav-item pl-2">
                                <a href="{{route('register')}}" class="btn btn-outline-semi-light btn-sm pr-4 pl-4">{{__('Daftar')}}</a>
                            </li>
                        </ul>
                        <a href="#" class="mobile-menu-button">
                            <i class="icon-menu"></i>
                        </a>
                    </div>
                </nav>
            @show

            {{ $slot }}
        </div>

    </div>


    <!-- Scripts -->
{{--    <script src="{{ asset('js/app.js') }}" defer></script>--}}
    <script src="{{ asset('js/app-landing.js') }}" defer></script>
    </body>
</html>
