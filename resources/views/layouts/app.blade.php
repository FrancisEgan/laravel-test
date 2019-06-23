<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Iversoft Test App - @yield('title')</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">

    </head>
    <body>
        <div class="navbar" style="height:100px"></div>
        @yield('content')
    </body>
</html>
