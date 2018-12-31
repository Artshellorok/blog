<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/app.css" />
        @if($view_name)
        <link rel="stylesheet" type="text/css" href="css/{{$view_name}}.css" />
        @endif
        <title>Название</title>
    </head>
    <body>
        <div id ='app' >
            <app-search ref='search'></app-search>
            @include('layouts/header')
            @yield('content')
        </div>
        @if($view_name)
        <script type='text/javascript' src='js/{{$view_name}}.js'></script>
        
        @endif
        <script type="text/javascript" src="js/app.js" ></script>
        
    </body>
</html>
