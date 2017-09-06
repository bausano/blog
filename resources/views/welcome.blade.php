<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Satan codes</title>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/font-awesome/css/font-awesome.min.css') }}">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Prism -->
        <script src="{{ asset('js/prism.js') }}"></script>
        <link href="{{ asset('css/prism.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            <column class="col-sm-12 col-md-3 column text-right" heading="Previous"></column>
            <post class="col-sm-12 col-md-6"></post>
            <column class="col-sm-12 col-md-3 column" heading="Next"></column>
        </div>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
