<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="keywords" content="{{ config('setting.keywords') }}">
    <meta name="description" content="{{ config('setting.description') }}">
    <meta name="author" content="{{ config('setting.author') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} | {{ $title ?? 'Default' }}</title>

    <!-- Styles -->
    <!-- Font Awesome Icons -->
    <link href="{{ asset(mix('plugins/font-awesome/css/font-awesome.min.css')) }}" rel="stylesheet">
    <!-- Theme style -->
    <link href="{{ asset(mix('css/adminlte.min.css')) }}" rel="stylesheet">
    <link href="{{ asset(mix('css/app.css')) }}" rel="stylesheet">
    @stack('styles')
</head>
<body class="hold-transition sidebar-mini">
    <div id="app"></div>

    @include('footer')
    
    <!-- Scripts -->
    <script src="{{ asset(mix('js/app.js')) }}" defer></script>
    <!-- AdminLTE App -->
    <script src="{{ asset(mix('js/adminlte.min.js')) }}"></script>
    @stack('scripts')
</body>
</html>
