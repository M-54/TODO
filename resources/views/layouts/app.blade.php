<!doctype html>
<html lang="{{ app()->getLocale() }}" dir="rtl">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>@lang('Laravel') - @yield('title')</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ env('APP_URL') }}">{{ env('APP_NAME') }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('user.index') ? 'active' : '' }}"
                       href="{{ route('user.index') }}">Users</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ !request()->routeIs('user.create') ?: 'active' }}"
                       href="{{ route('user.create') }}">Create User</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('tasks.index') ? 'active' : '' }}"
                       href="{{ route('tasks.index') }}">Tasks</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ !request()->routeIs('tasks.create') ?: 'active' }}"
                       href="{{ route('tasks.create') }}">Create Task</a>
                </li>

                <!-- TODO: refactor nav-item to blade Component: https://laravel.com/docs/8.x/blade#components -->
            </ul>

            @if(auth()->check())
                <form class="d-flex" method="post" action="{{ route('auth.logout') }}">
                    @csrf
                    <button class="btn btn-outline-success" type="submit">{{ auth()->user()->name }} (Logout)</button>
                </form>
            @else
                <a class="btn btn-outline-success" href="{{ route('auth.form.login') }}">Login</a>
            @endif
        </div>
    </div>
</nav>
<div class="container">
    @yield('content')
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="{{ asset('js/app.js') }}"></script>
@yield('custom_scripts')
</body>
</html>
