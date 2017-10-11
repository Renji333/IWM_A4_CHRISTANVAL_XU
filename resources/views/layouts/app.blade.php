<!doctype html>
<html>
    @include('layouts.partials.header')
    <div class="container-fluid">
        @yield('content')
        @include('layouts.partials.sidebar')
    </div>
    @include('layouts.partials.footer')
</html>