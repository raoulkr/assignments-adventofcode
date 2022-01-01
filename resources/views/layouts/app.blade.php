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
                <li class="{{ Request::is('/') ? 'active' : '' }}"><a href={{ url('/') }}>Home</a></i>
                <li class="{{ Request::is('day1') ? 'active' : '' }}"><a href={{ url('/day1') }}>day 1</a></i>
                <li class="{{ Request::is('day2') ? 'active' : '' }}"><a href={{ url('/day2') }}>day 2</a></i>
                <li class="{{ Request::is('day3') ? 'active' : '' }}"><a href={{ url('/day3') }}>day 3</a></i>
                <li class="{{ Request::is('day4') ? 'active' : '' }}"><a href={{ url('/day4') }}>day 4</a></i>
            </ul>
        </div>
        <div class="yield">
            @yield('content')
        </div>
    </body>
</html>
