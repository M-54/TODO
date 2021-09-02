<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('includes.head')
</head>
<body>
<div class="container">
    <header>
        @include('includes.header')
    </header>
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        @yield('content')
    </div>
    <footer>
        @include('includes.footer')
    </footer>
    @include('includes.foot')
</div>
</body>

</html>
