<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset("adminlte/plugins/fontawesome-free/css/all.min.css") }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset("adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css") }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset("adminlte/dist/css/adminlte.min.") }}css">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        body{
            overflow: hidden;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0; 
        }

        input[type=number] {
            -moz-appearance:textfield;
        }

        .form-control:focus {
            border-color: rgb(107, 107, 233);
            box-shadow: none;
        }

        a{
            color: black;
        }

        a:hover{
            color: red;
            text-decoration: none;
        }

        .cropped-thumb{
            width: 100px;
            height: 100px;
            background-position: center center;
            background-repeat: no-repeat;
        }
    </style>
</head>
