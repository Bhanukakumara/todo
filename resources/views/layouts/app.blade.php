<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Todo</title>
    @include('libraries.style')
</head>

<body>
    @include('components.navbar')
    @yield('content')
    @include('components.footer')
    @include('libraries.scripts')
</body>

</html>
