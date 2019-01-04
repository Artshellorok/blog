<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/app.css" />
        <link rel="icon" href="img/logotrash.png"/>
        @if($view_name)
        <link rel="stylesheet" type="text/css" href="css/{{$view_name}}.css" />
        @endif
        <title>Название</title>
    </head>
    <body>
        <div id ='app' >
            <app-search ref='search'></app-search>
            @include('layouts/header')
            <div class='container'>    
                <div class='row'>
                    <div class='col-sm-3 left'>
                        @include('layouts.social')
                        @include('layouts.polls')
                        <div>
                            <div class='widget'>
                                <h2>Теги</h2>
                            </div>
            
                            <div class='tags clearfix'>
                                <a href='#'>business</a>
                                <a href='#'>developer</a> 
                                <a href='#'>developer</a> 
                                <a href='#'>wordpress themes</a> 
                                <a href='#'>business</a> 
                                <a href='#'>developer</a> 
                                <a href='#'>wordpress themes</a> 
                                <a href='#'>business</a> 
                            </div>
                        </div>
                    </div>
                    <div class='col-sm-9 posts'>
                        @yield('content')
                    </div>
                </div>
            </div>
            @include('layouts/footer')
        </div>
        @if($view_name)
        <script type='text/javascript' src='js/{{$view_name}}.js'></script>
        
        @endif
        <script type="text/javascript" src="js/app.js" ></script>
        
    </body>
</html>
