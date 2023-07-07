<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="shortcut icon" type="image/png" href="{{ URL::asset('/assets/images/logos/favicon.png')}}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/css/styles.css')}}" />

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    @yield('content')
    <script src="{{ URL::asset('/assets/libs/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{ URL::asset('/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <!--     <script src="{{ URL::asset('/assets/js/sidebarmenu.js')}}"></script>
    <script src="{{ URL::asset('/assets/js/app.min.js')}}"></script>
    <script src="{{ URL::asset('/assets/libs/apexcharts/dist/apexcharts.min.js')}}"></script>
    <script src="{{ URL::asset('/assets/libs/simplebar/dist/simplebar.js')}}"></script>
    <script src="{{ URL::asset('/assets/js/dashboard.js')}}"></script> -->

</body>

</html>