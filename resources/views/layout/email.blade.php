<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>@yield('pageTitle') - Kavmy.com</title>
        <meta charset="utf-8">
       
    </head>
    <body>
        @include('include.header-email')
        @yield('content')
        @include('include.footer-email')
    </body>
</html>
