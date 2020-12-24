<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset("adminlte/plugins/fontawesome-free/css/all.min.css") }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset("adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css") }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset("adminlte/dist/css/adminlte.min.css") }}">


    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('picture/logo-ydai.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('picture/logo-ydai.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('picture/logo-ydai.png') }}">
    <link rel="manifest" href="/site.webmanifest">

    <script>
        $(document).ready(function() {
            $(document).on('submit', 'form', function() {
                $('button').attr('disabled', 'disabled');
            });
        });
    </script>
</head>