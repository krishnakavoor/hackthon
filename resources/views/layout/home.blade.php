<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>@yield('pageTitle') - Kavmy.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
        @include('include.head')
    </head>
    <body>
        @include('include.header')
        @yield('content')
        @include('include.footer')
    </body>
</html>
