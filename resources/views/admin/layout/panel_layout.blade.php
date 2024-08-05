<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    @include('admin.component.left-sidebar')
    {{-- @include('admin.component.top-navbar') --}}
    @yield('content')

    <footer>
        @copyright 2024
    </footer>
</body>
</html>