<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> @yield('title','Laravel') </title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class='minvh-100 bg-secondary'>
    <!-- navbar -->
    <x-navbar></x-navbar>
    <x-flash-message></x-flash-message>
    <!-- contenido -->
    <div id="app" class='h-75'>
        {{ $slot }}
    </div>
</body>

</html>
