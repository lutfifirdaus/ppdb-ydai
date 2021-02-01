<!DOCTYPE html>
<html lang="en">
<title>{{ config('app.name') ?? $title }}</title>
<link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=latin-ext" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600&display=swap&subset=latin-ext"
    rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/swiper.css') }}">
<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
</head>

<body data-spy="scroll" data-target=".fixed-top">

    <x-website.preloader></x-website.preloader>

    <x-website.navbar></x-website.navbar>

    @yield('content')

    <x-website.footer></x-website.footer>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('js/swiper.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.js') }}"></script>
    <script src="{{ asset('js/morphext.min.js') }}"></script>
    <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/validator.min.js') }}"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>
