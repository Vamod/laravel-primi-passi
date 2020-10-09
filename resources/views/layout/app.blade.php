<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>@yield('titolo')</title>
    </head>
    <body>
        @include('partials.header')
        <main>
            @yield('main')
        </main>

        @include('partials.footer')
    </body>
</html>
