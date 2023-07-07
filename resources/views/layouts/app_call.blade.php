<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Call Credit Checker</title>

    <!-- Fonts -->
    <link rel="shortcut icon" type="image/png" href="{{ URL::asset('/assets/images/logos/favicon.png')}}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/css/styles.css')}}" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>

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
    <script src="{{ URL::asset('/assets/js/dashboard.js')}}"></script>
 -->

</body>

</body>

</html>