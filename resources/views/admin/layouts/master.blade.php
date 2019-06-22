<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="/css/admin.css" />
        <link rel="icon" href="img/logotrash.png"/>
        <style> @css(admin.add)</style>
        <script defer type='text/javascript'> 
            @js(admin.add)
        </script>
        
        <title>Название</title>
    </head>
    <body>
        <div id ='app' >
            @include('admin.layouts.header')
            <div class='container content'>
            @yield('content')
            </div>
        </div>
        
        @if($view_name)
        
        @endif
        <script type='text/javascript' src='/js/app.js'></script>
    </body>
</html>

