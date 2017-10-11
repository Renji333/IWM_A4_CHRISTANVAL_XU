<!doctype html>
<html lang="{{ app()->getLocale() }}">
    @include('layouts.app.header')
    <body>
        @yield('content')
        @yield('sideBar')
        @include('layouts.app.footer')
    </body>
</html>