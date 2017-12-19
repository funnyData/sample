<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Sample') - Laravel 入门教程</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <header class="navbar navbar-fixed-top navbar-inverse">
        @include('layouts._header')
    </header>

    <div class="container">
        <div class="col-md-offset-1 col-md-10">
            @include('shared._messages')
            @yield('content')
            @include('layouts._footer')
        </div>
    </div>

    <script src="/js/app.js"></script>

</body>
</html>