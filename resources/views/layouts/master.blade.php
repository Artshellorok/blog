<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/app.css" />
        <title>Название</title>
    </head>
    <body>
        <div id ='app' >
            <app-search ref='search'></app-search>
            @include('layouts/header')
            @yield('content')
        </div>
        <script type="text/javascript" src="js/app.js" ></script>
    </body>
</html>
