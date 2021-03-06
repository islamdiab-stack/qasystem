<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Unknown Page') - Q & A System</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/fontawsome.all.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Other styles -->
    @yield('styles')
</head>
<body>
    <div id="app">

        <!-- Include Navbar -->
        @include('layouts.navbar')

        <!-- Include Navbar -->
        @include('layouts.breadcrumb')

        <!-- Main Content -->
        <main class="main-content py-4">
            <div class="container">
                @yield('content')
            </div>
        </main>

        <!-- Include Navbar -->
        @include('layouts.footer')

    </div>
    <!-- Other Scripts-->
    @yield('scripts')
</body>
</html>
