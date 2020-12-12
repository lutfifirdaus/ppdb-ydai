<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('layouts.head')

        <style>
            .carousel
            .carousel-inner
            img {
                height:500px; 
                object-fit:cover; 
                object-position: center
            }

            .mb-3 {
                margin-bottom: 6rem !important;
            }

            .navbar-dark .navbar-nav .nav-link {
                color: white;
            }

            body {
                font-size: 14px
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-md fixed-top  navbar-dark bg-primary shadow-sm">
            <div class="container">       
                {{-- <img class="img-thumbnail mr-2" style="width: 70px; height: 70px; border-radius:50%" src="{{ asset('picture/logo-ydai.jpeg') }}" alt=""> --}}
                <a class="navbar-brand" href="/">
                    {{ config('app.name') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a href="#syarat" class="nav-link">Jenjang Sekolah</a>
                        </li>
                        <li class="nav-item">
                            <a href="#syarat" class="nav-link">Persayaratan</a>
                        </li>
                        <li class="nav-item">
                            <a href="#alur-pendaftaran" class="nav-link">Alur Pendaftaran</a>
                        </li>
                        <li class="nav-item">
                            <a href="#alur-pendaftaran" class="nav-link">Biaya Pendaftaran</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            @if (Route::has('login'))
                                @auth
                                    <a href="{{ route('admin.page') }}" class="nav-link">Home</a>
                                @else
                        </li>
                        <li class="nav-item my-2 my-lg-0">
                            <a href="{{ route('login') }}" class="nav-link">Login</a>
                        </li>
                        <li class="nav-item">
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-4 nav-link">Register</a>
                                @endif
                            @endauth
                        </li>
                            @endif
                        </li>
                    </ul>
                </div>      
            </div>
        </nav>

        <main >
            <div class="row">
                <div class="col-sm-12">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img class="d-block w-100" src="{{ asset('picture/smp.jpeg') }}" alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h2><b>TK Ananda UT</b></h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio, fugit.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ asset('picture/sma.jpeg') }}" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ asset('picture/smp1.jpeg') }}" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ asset('picture/sma.jpeg') }}" alt="Fourd slide">
                        </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="mb-3 text-center">
                    <img class="mx-auto mr-2" style="height: 300px; border-radius:50%" src="{{ asset('picture/logo-ydai.png') }}" alt="">
                    <h1>Selamat Datang di PPDB Yayasan Dharma Anak Indonesia UT</h1><hr>
                    <p>Yayasan Dharma Ananda Indonesia UT menyediakan situs ini guna mempermudah pendaftaran peserta didik baru <br> untuk seluruh sekolah yang berada di dalam naungannya</p>
                </div>
                <div class="text-center" id="">
                    <h3>Sekolah Dalam Naungan</h3>
                </div>
                <hr>
                <div class="row">
                    <div class="col-6 text-center border-right">
                        <div class="card">
                            <img class="card-img-top" src="{{ asset('/picture/logo-ydai.jpeg') }}" alt="foto TK Ananda UT">
                            <div class="card-body">
                                <div class="card-text">
                                    <h5>TK Ananda UT</h5>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error perferendis sit, aspernatur quae vitae illum quaerat ea? Mollitia, quibusdam? Sint velit enim voluptatum fugiat! Molestias, accusantium! Adipisci ipsum reiciendis voluptate quos vitae inventore doloremque? Minus harum deleniti, rem maxime voluptas laudantium, quas veritatis ullam molestias, placeat excepturi laborum sint dicta!</p>
                                    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: darkred;">
                                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                            <ul class="navbar-nav mx-auto">
                                                <li class="nav-item">
                                                    <a class="nav-link border-right" href="#">Profil Sekolah</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link border-right" href="#">Visi dan Misi</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link border-right" href="#">Keunggulan</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Guru dan Staff</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 text-center">
                        <div class="card border-danger">
                            <img class="card-img-top" src="{{ asset('/picture/logo-ydai.jpeg') }}" alt="foto TK Ananda UT">
                            <div class="card-body">
                                <div class="card-text">
                                    <h5>SD Dharma Karya</h5>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error perferendis sit, aspernatur quae vitae illum quaerat ea? Mollitia, quibusdam? Sint velit enim voluptatum fugiat! Molestias, accusantium! Adipisci ipsum reiciendis voluptate quos vitae inventore doloremque? Minus harum deleniti, rem maxime voluptas laudantium, quas veritatis ullam molestias, placeat excepturi laborum sint dicta!</p>
                                    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: darkred;">
                                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                            <ul class="navbar-nav mx-auto">
                                                <li class="nav-item">
                                                    <a class="nav-link border-right" href="#">Profil Sekolah</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link border-right" href="#">Visi dan Misi</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link border-right" href="#">Keunggulan</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Guru dan Staff</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 text-center border-right mb-3">
                        <div class="card">
                            <img class="card-img-top" src="{{ asset('/picture/logo-ydai.jpeg') }}" alt="foto TK Ananda UT">
                            <div class="card-body">
                                <div class="card-text">
                                    <h5>TK Ananda UT</h5>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error perferendis sit, aspernatur quae vitae illum quaerat ea? Mollitia, quibusdam? Sint velit enim voluptatum fugiat! Molestias, accusantium! Adipisci ipsum reiciendis voluptate quos vitae inventore doloremque? Minus harum deleniti, rem maxime voluptas laudantium, quas veritatis ullam molestias, placeat excepturi laborum sint dicta!</p>
                                    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: darkred;">
                                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                            <ul class="navbar-nav mx-auto">
                                                <li class="nav-item">
                                                    <a class="nav-link border-right" href="#">Profil Sekolah</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link border-right" href="#">Visi dan Misi</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link border-right" href="#">Keunggulan</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Guru dan Staff</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 text-center mb-3">
                        <div class="card border-danger">
                            <img class="card-img-top" src="{{ asset('/picture/logo-ydai.jpeg') }}" alt="foto TK Ananda UT">
                            <div class="card-body">
                                <div class="card-text">
                                    <h5>SD Dharma Karya</h5>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error perferendis sit, aspernatur quae vitae illum quaerat ea? Mollitia, quibusdam? Sint velit enim voluptatum fugiat! Molestias, accusantium! Adipisci ipsum reiciendis voluptate quos vitae inventore doloremque? Minus harum deleniti, rem maxime voluptas laudantium, quas veritatis ullam molestias, placeat excepturi laborum sint dicta!</p>
                                    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: darkred;">
                                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                            <ul class="navbar-nav mx-auto">
                                                <li class="nav-item">
                                                    <a class="nav-link border-right" href="#">Profil Sekolah</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link border-right" href="#">Visi dan Misi</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link border-right" href="#">Keunggulan</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Guru dan Staff</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3 text-center" id="alur-pendaftaran">
                    <h3>Alur Pendaftaran</h3>
                    <hr>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, quo dolore ducimus nisi quaerat laboriosam delectus, alias earum suscipit fuga ad sequi a deleniti corrupti dolorum ipsam ipsa molestias inventore! Velit, laudantium amet. Voluptate, earum! Magnam incidunt molestias eveniet ex quo illum soluta rem vitae modi similique vero, voluptatibus accusantium sunt ullam blanditiis? Quidem omnis maxime enim cumque, quo eligendi magni necessitatibus, error impedit exercitationem voluptate. Autem laboriosam voluptatibus explicabo beatae, alias est ex distinctio pariatur quibusdam delectus illo expedita nesciunt eos necessitatibus deleniti inventore. Assumenda non aspernatur quod id laudantium est facilis a architecto ad totam. Cumque, mollitia quas.</p>
                </div>
                <div class="text-center" id="syarat">
                    <h3>Persyaratan dan Ketentuan</h3>
                </div>
                <hr>
                <div class="row">
                    <div class="col-6 text-center border-right mb-3">
                        <h5>TK Ananda UT</h5>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita eos delectus quo odit dolor quisquam veritatis beatae maiores aliquid quod, consequatur debitis facere ullam magnam eum esse? Labore a laboriosam, eum veritatis fuga illum atque repellat quibusdam corrupti provident? Excepturi ad earum rem! Earum accusantium dolorum eius ratione minima consectetur!</p>
                    </div>
                </div>
            </div>
        </main>

        <footer class="text-center p-3 bg-secondary">
            <h5>Copyright Yayasan Dharma Ananda Indonesia UT</h5>
        </footer>
    </body>
</html>
