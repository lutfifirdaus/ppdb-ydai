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

    <style>
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }
        
        input[type=file] {
            border: 0px solid black !important;
        }

        input, select {
            border: 0px solid black !important;
            border-radius: 0% !important;
            border-bottom: 1px solid black !important;
        }

        .form-control:focus {   
            border: 0px solid white !important;
            border-color: none;
            box-shadow: none;
            border-bottom: 1px solid blue !important;
        }

        .card-title {
            float: none;
        }

        p {
            font-size: 14px
        }

        .nol9{
            opacity: 0.9
        }

        .rnd{
            border-radius: 25px
        }
    </style>

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