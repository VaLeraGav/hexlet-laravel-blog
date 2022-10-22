<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    {{--        <link href="css/app.css" rel="stylesheet">--}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>

    {{-- php artisan cache:clear --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="csrf-param" content="_token"/>
    <style>
        body {
            background: #eeee;
        }
        .container {
            width: 60%;
            padding: 0;
        }
    </style>
</head>
<body>
<div>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
        <div class="container navbar-nav">

            <a class="navbar-brand" href="">LaravelBlog</a>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('/') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class=" nav-link" href="{{ route('about') }}">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('articles.index') }}">Articles</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('articles.create') }}">Creat</a>
            </li>

            <div class="navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/login">login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/register">registration</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>

<div class="container">
    <h1 class="mt-3 ">@yield('header')</h1>
    @yield('content')
</div>

</body>
</html>

