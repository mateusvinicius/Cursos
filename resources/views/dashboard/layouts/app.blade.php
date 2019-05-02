<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <meta name="description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <!-- Open Graph Meta -->
        <meta property="og:title" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework">
        <meta property="og:site_name" content="Codebase">
        <meta property="og:description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:image" content="">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="{{ asset('img/favicons/favicon.png') }}">
        <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('img/favicons/favicon-192x192.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/favicons/apple-touch-icon-180x180.png') }}">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Codebase framework -->
        <link rel="stylesheet" id="css-main" href="{{ asset('css/codebase.min.css') }}">


</head>
<body>
        @yield('content')




                <!-- Codebase Core JS -->
          
                <script src="{{ asset('js/core/jquery.min.js') }}"></script>
                <script src="{{ asset('js/core/popper.min.js') }}"></script>
                <script src="{{ asset('js/core/bootstrap.min.js') }}"></script>
                <script src="{{ asset('js/core/jquery.slimscroll.min.js') }}"></script>
                <script src="{{ asset('js/core/jquery.scrollLock.min.js') }}"></script>
                <script src="{{ asset('js/core/jquery.appear.min.js') }}"></script>
                <script src="{{ asset('js/core/jquery.countTo.min.js') }}"></script>
                <script src="{{ asset('js/core/js.cookie.min.js') }}"></script>
                <script src="{{ asset('js/codebase.js') }}"></script>
        
                <!-- Page JS Plugins -->
                <script src="{{ asset('js/plugins/chartjs/Chart.bundle.min.js') }}"></script>
        
                <!-- Page JS Code -->
                <script src="{{ asset('js/pages/be_pages_dashboard.js') }}"></script>
</body>
