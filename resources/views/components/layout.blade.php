<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> @yield('title','Laravel') </title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Import de Flowbite para navbar-->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.css" rel="stylesheet" />

</head>

<body class='min-h-screen'>
    <!-- navbar -->
    <x-navbar></x-navbar>
    <x-flash-message></x-flash-message>
    <!-- contenido -->
    <div id="app" class='h-max  bg-white text-black dark:bg-gray-900 dark:text-white flex flex-col py-2 content-between'>
        {{ $slot }}
    </div>


</body>

</html>
