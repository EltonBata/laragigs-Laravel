<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

</head>

<body>


    <nav class="navbar p-0 navbar-expand-sm shadow-sm navbar-dark">
        <!-- Brand/logo -->
        <a class="navbar-brand p-3 fw-bolder bg-danger" href="{{ route('index') }}">Lara<b class="text-dark">Gigs</b></a>

        <!-- Links -->
        <ul class="navbar-nav w-100 justify-content-end pe-3">

            @auth
                <li class="nav-item me-5 pt-2">
                    <span class="fw-bold">
                        WELCOME {{ Str::upper(auth()->user()->username) }}
                    </span>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-dark me-3" href="{{ route('listing.manage') }}">Manage Listings</a>
                </li>

                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-sm btn-danger shadow-sm mt-1">Logout</button>
                </form>
            @else
                <li class="nav-item">
                    <a class="nav-link text-dark me-3" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="{{ route('register') }}">Register</a>
                </li>
            @endauth

        </ul>
    </nav>


    <main class="mb-5">
        @yield('content')
    </main>


    <div class="bg-danger footer w-100">
        <p class="text-center text-white ">Copyright 2023, All Rights Reserved</p>
    </div>


</body>

</html>
