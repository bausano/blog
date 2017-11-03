<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" href="/favicon.png">

        <title>Blog | Michael Bausano</title>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Fonts -->
        <link rel="stylesheet" href="{{ asset('css/font-awesome/css/font-awesome.min.css') }}">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Prism -->
        <script src="{{ asset('js/prism.js') }}"></script>
        <link href="{{ asset('css/prism.css') }}" rel="stylesheet">
    </head>
    <body>
        @yield('content')
    </body>
</html>
