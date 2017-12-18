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

    <div class="container-fluid">
        @yield('content')
        @include('layouts._footer')
    </div>

</body>
</html>