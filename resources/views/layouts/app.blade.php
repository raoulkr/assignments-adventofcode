<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}" />
        <title>{{config('app.name', 'AdventofcodeAPP')}}</title>
    </head>
        
    <body>
        <div class = "NavBar">
            <ul>
                <li><a href='/day1'>day 1</a></i>
                <li><a href='/day2'>day 2</a></i>
                <li><a href="/day4">day 4</a></i>
            </ul>
        </div>
        <div class="yield">
            @yield('content')
        </div>
    </body>
</html>
