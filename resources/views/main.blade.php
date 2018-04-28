<!doctype html>
<html lang="en">
<head>
    @include('partials._head')
</head>
<body>

    @include('partials._navbar')

    <div class="container">
        @include('partials._messages')
        <br>
        @yield('content')

        <hr>
        @include('partials._footer')

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    @include('partials._scripts')

    </body>
</html>