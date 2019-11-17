<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <style>
        td {
        max-width: 200px;
        overflow: hidden;
        text-overflow: ellipsis;
        word-break: keep-all;
        }
    </style>
    <body>
        <div class="container">
            @yield('content')
        </div>
        
    </body>
</html>