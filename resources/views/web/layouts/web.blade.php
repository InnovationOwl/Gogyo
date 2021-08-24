<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    {{--<!-- CSRF Token -->--}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @stack('meta')
    <title>{{ config('app.name') }}</title>

    {{--<!-- Scripts -->--}}
    @stack('js')

    {{--<!-- Fonts -->--}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@4.x/css/materialdesignicons.min.css" rel="stylesheet">

    {{--<!-- Styles -->--}}
    <link href="{{ mix('css/web.css', 'dist') }}" rel="stylesheet">
    @stack('css')

</head>

<body class="@yield('body-class')">
    @yield('body')
    <script src="{{ mix('js/web.js', 'dist') }}"></script>
    @stack('last-js')
</body>

</html>
