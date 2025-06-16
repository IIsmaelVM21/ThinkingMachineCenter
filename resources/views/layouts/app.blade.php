<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>ThinkingMachineCenter</title>

    <!-- Fonts and Icons -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <!-- Main Argon CSS (Bootstrap version) -->
    <link href="{{ asset('assets/css/argon.css') }}" rel="stylesheet">

    <!-- Elimina esto si no usas Vite -->
    {{-- @vite(['resources/js/app.js']) --}}
</head>
<body class="g-sidenav-show bg-gray-100">
    @include('layouts.navigation')

    <main>
        @yield('content')
    </main>

    <!-- Argon JS Plugins -->
    <script src="{{ asset('assets/js/plugins/chartjs.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/argon.js') }}"></script>
</body>
</html>
