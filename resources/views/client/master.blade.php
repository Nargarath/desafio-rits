<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Rits - Carreira</title>

        <!-- Fonts -->
        <link href="{{asset('css/fonts.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

        <!-- Framework CSS -->
        <link href="{{asset('css/bulma.min.css')}}" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{asset('css/main.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/animations.css')}}" rel="stylesheet" type="text/css">
    </head>
    <body>
        @yield('body')
    </body>
    @if(request()->route()->getName() == 'client.vacant')
        <script src="{{asset('js/app.js')}}"></script>
    @endif
    <script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>

    <script src="{{asset('js/smooth-scroll.js')}}"></script>
    @routes
</html>
