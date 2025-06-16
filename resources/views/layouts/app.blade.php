<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>ThinkingMachineCenter</title>

        <!-- Fonts -->
         <link href="{{ asset('assets/css/argon-dashboard-tailwind.css') }}" rel="stylesheet">
         <link href="{{ asset('assets/css/argon-dashboard-tailwind.min.css') }}" rel="stylesheet">
         <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet">
         <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet">
         <link href="{{ asset('assets/css/perfect-crollbar.css') }}" rel="stylesheet">
         <link href="{{ asset('assets/css/tooltips.css') }}" rel="stylesheet">
         <link href="{{ asset('assets/fonts/nucleo-icons.eot') }}" rel="stylesheet">
         <link href="{{ asset('assets/fonts/nucleo-icons.svg') }}" rel="stylesheet">
         <link href="{{ asset('assets/fonts/nucleo-icons.ttf') }}" rel="stylesheet">
         <link href="{{ asset('assets/fonts/nucleo-icons.woff') }}" rel="stylesheet">
         <link href="{{ asset('assets/fonts/nucleo-icons.woff2') }}" rel="stylesheet">
         <link href="{{ asset('assets/fonts/nucleo.eot') }}" rel="stylesheet">
         <link href="{{ asset('assets/fonts/nucleo.ttf') }}" rel="stylesheet">
         <link href="{{ asset('assets/fonts/nucleo.woff') }}" rel="stylesheet">
         <link href="{{ asset('assets/fonts/nucleo.woff2') }}" rel="stylesheet">
         <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
         <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
        <!-- Scripts -->
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                @yield('content')
            </main>
        </div>
        <script src="{{ asset('js/plugins/Chart.extension.js') }}"></script>
<script src="{{ asset('js/plugins/chartjs.min.js') }}"></script>
<script src="{{ asset('js/plugins/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('js/plugins/argon-dashboard-tailwind.js') }}"></script>
<script src="{{ asset('js/plugins/argon-dashboard-tailwind.min.js') }}"></script>
<script src="{{ asset('js/plugins/carousel.js') }}"></script>
<script src="{{ asset('js/plugins/charts.js') }}"></script>
<script src="{{ asset('js/plugins/dropdown.js') }}"></script>
<script src="{{ asset('js/plugins/fixed-plugin.js') }}"></script>
<script src="{{ asset('js/plugins/nav-pills.js') }}"></script>
<script src="{{ asset('js/plugins/navbar-collapse.js') }}"></script>
<script src="{{ asset('js/plugins/navbar-sticky.js') }}"></script>
<script src="{{ asset('js/plugins/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('js/plugins/sidenav-burger.js') }}"></script>
<script src="{{ asset('js/plugins/tooltips.js') }}"></script>
    </body>
</html>
