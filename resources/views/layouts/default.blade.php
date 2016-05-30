<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    @include('partials.head')
    @yield('header_style')
</head>
<body>
    @include('partials.header')
    @yield('content')
    @include('partials.footer')
    @include('partials.foot')
</body>
</html>