@extends('website.master')

@section('content')
    <header id="header" class="header">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 glass">
                        <img src="{{ asset('picture/logo-ydai-change.png') }}" style="width: 300px">
                        <div class="text-container">
                            <h1>SEMAKIN <span id="js-rotating">CERDAS, BERPRESTASI, BERAKHLAK</span></h1>
                            <p class="p-heading p-large">Yayasan Dharma Ananda Indonesia UT adalah induk lembaga
                                pendidikan dari TK hingga SMA Dharma Karya UT dan sekaligus anak organisasi dari
                                Universitas Terbuka</p>
                            <a class="btn-solid-lg page-scroll" href="#intro">JELAJAHI</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>




    <div id="intro" class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="text-container">
                        <div class="section-title">INTRO</div>
                        <h2>Bergerak maju dan berkembang bersama dengan Kami.</h2>
                        <p></p>
                        <p class="testimonial-text">"Kami terus berusaha memberikan dan mengembangkan sistem pendidikan
                            yang berbasis IT serta berwawasan internasional untuk memberikan hasil yang bermutu."</p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="image-container">
                        <img class="img-fluid" src="{{ asset('picture/rapat-ypii.jpg') }}" alt="alternative">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="slider">
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

                                @foreach ($beritas as $berita)
                                    <div class="swiper-slide">
                                        <div class="card">
                                            <img class="card-image" src="" alt="alternative">
                                            <h3 class="card-header">{{ $berita->title }}</h3>
                                            <div class="card-body text-justify">
                                                <p>{{ $berita->summary ? $berita->summary : \Str::limit($berita->content, 100, '...') }}
                                                </p>
                                                <a href="#" class="text-primary">Lebih lanjut <i
                                                        class="fas fa-angle-double-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

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
                <div class="col-lg-6">
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

                <div class="col-lg-6 text-center">
                    <img src="{{ asset('picture/logo-dk.jpg') }}" style="width: 150px ;max-width: 250px" alt="logo YDAI UT">
                    <img src="{{ asset('picture/logo-ydai2.jpeg') }}" style="width: 200px ;max-width: 250px" alt="logo DK">
                    <img src="{{ asset('picture/logo-ut.png') }}" style="width: 200px ;max-width: 250px" alt="logo UT">
                </div>
            </div>
        </div>
    </div>

@endsection
