

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>@yield('pageTitle') - Kavmy.com</title>
        <meta charset="utf-8">
        @include('include.head')
    </head>
    <body>
        <div id="wrap">
            @include('include.admin-header')
            @yield('content')
        </div>
        @include('include.footer')
    </body>
</html>
