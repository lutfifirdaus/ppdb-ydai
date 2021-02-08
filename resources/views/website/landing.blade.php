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

    <header id="header" class="header">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 glass">
                        <img src="{{ asset('picture/logo-ydai-change.png') }}" style="width: 300px">
                        <div class="text-container">
                            <h1>SEMAKIN <span id="js-rotating">CERDAS, BERPRESTASI, BERAKHLAK</span></h1>
                            <p class="p-heading p-large text-center">Yayasan Dharma Ananda Indonesia UT adalah induk lembaga
                                pendidikan dari TK hingga SMA Dharma Karya UT dan sekaligus anak organisasi dari
                                Universitas Terbuka</p>
                            <div class="d-flex justify-content-center">
                                <form class="form-inline">
                                    <input class="form-control mr-sm-2" type="search" placeholder="Cari apa saja" aria-label="Search">
                                    <button class="btn btn-solid-sm my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="announcement">
        <p>
            Untuk saat ini masih belum ada pengumuman...
        </p>
    </div>

    <div id="pengumuman" class="cards-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Pengumuman di Sekitar <br> Lingkungan YDAI UT</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    
                
                    <div class="card">
                        <div class="card-header text-center">
                           <h4>TK Ananda UT</h4>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled li-space-lg">
                                {{-- @for ($i = 0; $i < 5; $i++)
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body"><a href="#" class="text-decoration-none">Environment and competition</a></div>
                                </li>
                                @endfor --}}

                                <p class="font-italic">Masih belum ada pengumuman</p>
                            </ul>
                        </div>
                        <div class="button-container">
                            <a class="btn-solid-reg page-scroll" href="#callMe">DETAILS</a>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header text-center">
                           <h4>SD Dharma Karya UT</h4>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled li-space-lg">
                                {{-- @for ($i = 0; $i < 5; $i++)
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body"><a href="#" class="text-decoration-none">Environment and competition</a></div>
                                </li>
                                @endfor --}}

                                <p class="font-italic">Masih belum ada pengumuman</p>
                            </ul>
                        </div>
                        <div class="button-container">
                            <a class="btn-solid-reg page-scroll" href="#callMe">DETAILS</a>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header text-center">
                           <h4>SMP Dharma Karya UT</h4>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled li-space-lg">
                                {{-- @for ($i = 0; $i < 5; $i++)
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body"><a href="#" class="text-decoration-none">Environment and competition</a></div>
                                </li>
                                @endfor --}}

                                <p class="font-italic">Masih belum ada pengumuman</p>
                            </ul>
                        </div>
                        <div class="button-container">
                            <a class="btn-solid-reg page-scroll" href="#callMe">DETAILS</a>
                        </div>
                    </div>
                    
                    <div class="card">
                        <div class="card-header">
                           <h4>SMA Dharma Karya UT</h4>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled li-space-lg">
                                {{-- @for ($i = 0; $i < 5; $i++)
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body"><a href="#" class="text-decoration-none">Environment and competition</a></div>
                                </li>
                                @endfor --}}

                                <p class="font-italic">Masih belum ada pengumuman</p>
                            </ul>
                        </div>
                        <div class="button-container">
                            <a class="btn-solid-reg page-scroll" href="#callMe">DETAILS</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="berita" class="slider">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Berita dan Acara di Sekitar Lingkungan YDAI</h2>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-lg-12">


                    <div class="slider-container">
                        <div class="swiper-container card-slider">
                            <div class="swiper-wrapper">

                                @if ($beritas != null)
                                    @for ($i = 0; $i < 7; $i++)
                                    <div class="swiper-slide">
                                        <div class="card">
                                            <img class="card-image" src="" alt="alternative">
                                            <h3 class="card-header">{{ $beritas[$i]->title }}</h3>
                                            <div class="card-body text-justify">
                                                <p>{{ $beritas[$i]->summary ? $beritas[$i]->summary : \Str::limit($beritas[$i]->content, 100, '...') }}
                                                </p>
                                                <a href="#" class="text-primary">Lebih lanjut <i
                                                        class="fas fa-angle-double-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    @endfor
                                
                                @else
                                    <div class="swiper-slide">
                                        <div class="card">
                                            <div class="card-body">
                                                <p class="font-italic">Masih belum ada Berita atau Acara</p>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                
                                </div>
                            </div>

                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div id="contact" class="form-2">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="text-container">
                        <div class="section-title">HUBUNGI KAMI</div>
                        <ul class="list-unstyled li-space-lg">
                            <li class="address"><i class="fas fa-map-marker-alt"></i>Jalan Cabe Raya Pondok Cabe, Pd.
                                Cabe Udik, Kec. Pamulang, Kota Tangerang Selatan, Banten 15437</li>
                            <li><i class="fas fa-phone"></i><a href="tel:">+089 XXX XXX XXX</a></li>
                            <li><i class="fas fa-phone"></i><a href="tel:">+089 XXX XXX XXX</a></li>
                            <li><i class="fas fa-envelope"></i><a href="mailto:ypii.ut@gmail.com">ypii.ut@gmail.com</a>
                            </li>
                        </ul>
                        <h3>Beri Tanggapan dan Saran Kami di</h3>

                        <span class="fa-stack">
                            <a href="#">
                                <span class="circle"></span>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="https://www.instagram.com/ydai_ut/">
                                <span class="circle"></span>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#">
                                <span class="circle"></span>
                                <i class="fab fa-linkedin-in fa-stack-1x"></i>
                            </a>
                        </span>
                    </div>
                </div>

                <div class="col-6 text-center">
                    <img src="{{ asset('picture/logo-dk.jpg') }}" style="width: 150px ;max-width: 250px" alt="logo YDAI UT">
                    <img src="{{ asset('picture/logo-ydai2.jpeg') }}" style="width: 200px ;max-width: 250px" alt="logo DK">
                    <img src="{{ asset('picture/logo-ut.png') }}" style="width: 200px ;max-width: 250px" alt="logo UT">
                </div>
            </div>
        </div>
    </div>

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