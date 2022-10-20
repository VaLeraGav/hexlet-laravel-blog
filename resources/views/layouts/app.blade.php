<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
{{--        <link href="css/app.css" rel="stylesheet">--}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>

<div class="navbar-dark bg-dark">
    <header class="flex-shrink-0 container">
        <nav class="navbar navbar-expand-md ">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('articles.index') }}">Articles</a>
                </li>
            </ul>

        </nav>
    </header>
</div>

<div class="container">
    <h1 class="mt-3 ">@yield('header')</h1>
    @yield('content')
</div>


</body>
</html>

