<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Portfolio</title>

        @include('snippets.fonts')


        @vite(['resources/js/app.js', 'resources/css/app.css', 'resources/css/splide.min.css'])

        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    </head>
    <body>
        @yield('content')
    </body>
</html>
