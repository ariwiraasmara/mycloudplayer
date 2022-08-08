@inject('fun', 'App\MyLibs\myfunction')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title></title>

        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="keywords" content="Syahri Ramadhan Wiraasmara's Private Website, Personal Use Only" />

        <meta content="IE=edge" http-equiv="x-ua-compatible">
        <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width, user-scalable=no" >
        <meta name="apple-mobile-web-app-capable" content="yes" >
        <meta name="apple-touch-fullscreen" content="yes" >

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine"/>

        <link rel="stylesheet" type="text/css" href="{{ URL::to('bulma/css/bulma-rtl.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::to('bulma/css/bulma-rtl.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::to('bulma/css/bulma.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::to('bulma/css/bulma.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::to('bulma/css/additional.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::to('css/style.css') }}">

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>

    <body>
        @yield('content')

        @php /*
        @auth
            @include('2.js')
            <script src="bulma/js/tabs.js"></script>
            <script src="bulma/js/navs.js"></script>
        @endauth
        */ @endphp



        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

        <script src="bulma/js/tabs.js"></script>
        <script src="bulma/js/navs.js"></script>
    </body>

    <footer>
        @if ($footer == 1)
            @include('footer_copyright')
        @endif
        @include('0.title')
    </footer>
</html>
