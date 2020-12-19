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

            .special {
                font-size: 92px;
                text-align: center;
                text-transform: uppercase;
                text-rendering: optimizeLegibility;
            }

            .retroshd {
                color: #2c2c2c;
                background-color: #d5d5d5;
                opacity: 80%;
                letter-spacing: .05em;
                text-shadow: 4px 4px 0px #d5d5d5, 7px 7px 0px rgba(0, 0, 0, 0.2);
            }
            .retroshd:hover {
                text-decoration: none;
            }

            .mb-3 {
                margin-bottom: 6rem !important;
            }

            .navbar-dark .navbar-nav .nav-link {
                color: white;
            }

            body {
                font-size: 14px;
                
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-md fixed-top  navbar-dark bg-primary shadow-sm">
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
                        <a href="#jenjang" class="nav-link">Jenjang Sekolah</a>
                    </li>
                    
                    <li class="nav-item">
                        <a href="#alur-pendaftaran" class="nav-link">Alur Pendaftaran</a>
                    </li>

                    <li class="nav-item">
                        <a href="#kontak" class="nav-link">Kontak dan Bantuan</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a href="#alur-pendaftaran" class="nav-link">Biaya Pendaftaran</a>
                    </li> --}}
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
                            <img class="d-block w-100" src="{{ asset('picture/siswa-tk.jpg') }}" alt="First slide">
                            <div class="carousel-caption d-none retroshd d-md-block special">
                                <h2><b>TK ANANDA UT</b></h2>
                                <p>kreatif | cerdas | aktif | berprestasi</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ asset('picture/siswa-sd.jpg') }}" alt="Second slide">
                            <div class="carousel-caption d-none retroshd d-md-block special">
                                <h2><b>SD Dharma Karya</b></h2>
                                <p>tempat yang tepat untuk mengeksplor bakat dan minat</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ asset('picture/siswa-smp.jpg') }}" alt="Third slide">
                            <div class="carousel-caption d-none retroshd d-md-block special">
                                <h2><b>SMP Dharma Karya</b></h2>
                                <p>jadikan tumbuh kembangmu semakin bermakna</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ asset('picture/siswa-sma.JPG') }}" alt="Fourd slide">
                            <div class="carousel-caption d-none retroshd d-md-block special">
                                <h2><b>SMA Dharma Karya</b></h2>
                                <p>sehat, cerdas, dan berprestasi di masa muda</p>
                            </div>
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
                    <p style="font-size: 20px">Website ini diciptakan guna mempermudah pendaftaran peserta didik baru <br> untuk seluruh sekolah yang berada di dalam naungan Yayasan Dharma Ananda Indonesia</p>
                </div>
                <div class="text-center" id="jenjang">
                    <h3>Sekolah Dalam Naungan</h3>
                </div>
                <hr>
                <div class="row">
                    <div class="col-6 border-right">
                        <div class="card">
                            <img class="card-img-top" height="366" src="{{ asset('/picture/siswa2-tk.jpg') }}" alt="foto TK Ananda UT">
                            <div class="card-body">
                                <div class="card-text">
                                    <h5 class="text-center">TK Ananda UT</h5>
                                    <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Error perferendis sit, aspernatur quae vitae illum quaerat ea? Mollitia, quibusdam? Sint velit enim voluptatum fugiat! Molestias, accusantium! Adipisci ipsum reiciendis voluptate quos vitae inventore doloremque? Minus harum deleniti, rem maxime voluptas laudantium, quas veritatis ullam molestias, placeat excepturi laborum sint dicta!</p>
                                    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
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
                            <img class="card-img-top" src="{{ asset('/picture/siswa2-sd.jpg') }}" alt="foto TK Ananda UT">
                            <div class="card-body">
                                <div class="card-text">
                                    <h5 class="text-center">SD Dharma Karya</h5>
                                    <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Error perferendis sit, aspernatur quae vitae illum quaerat ea? Mollitia, quibusdam? Sint velit enim voluptatum fugiat! Molestias, accusantium! Adipisci ipsum reiciendis voluptate quos vitae inventore doloremque? Minus harum deleniti, rem maxime voluptas laudantium, quas veritatis ullam molestias, placeat excepturi laborum sint dicta!</p>
                                    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
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
                            <img class="card-img-top" src="{{ asset('/picture/siswa2-smp.jpg') }}" alt="foto TK Ananda UT">
                            <div class="card-body">
                                <div class="card-text">
                                    <h5 class="text-center">SMP Dharma Karya</h5>
                                    <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Error perferendis sit, aspernatur quae vitae illum quaerat ea? Mollitia, quibusdam? Sint velit enim voluptatum fugiat! Molestias, accusantium! Adipisci ipsum reiciendis voluptate quos vitae inventore doloremque? Minus harum deleniti, rem maxime voluptas laudantium, quas veritatis ullam molestias, placeat excepturi laborum sint dicta!</p>
                                    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
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
                            <img class="card-img-top" src="{{ asset('/picture/siswa2-sma.jpg') }}" alt="foto TK Ananda UT">
                            <div class="card-body">
                                <div class="card-text">
                                    <h5 class="text-center">SMA Dharma Karya</h5>
                                    <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Error perferendis sit, aspernatur quae vitae illum quaerat ea? Mollitia, quibusdam? Sint velit enim voluptatum fugiat! Molestias, accusantium! Adipisci ipsum reiciendis voluptate quos vitae inventore doloremque? Minus harum deleniti, rem maxime voluptas laudantium, quas veritatis ullam molestias, placeat excepturi laborum sint dicta!</p>
                                    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
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

                <div class="mb-3" id="alur-pendaftaran">
                    <h3 class="text-center">Alur Pendaftaran</h3>
                    <hr>
                    <ol class=" text-md">
                        <li>Calon peserta didik melakukan registrasi/pendaftaran akun</li>
                        <li>Calon peserta didik melakukan verifikasi e-mail akun yang telah didaftarkan</li>
                        <li>Calon peserta didik memilih jenjang sekolah mana yang akan dimasuki</li>
                        <li>Calon Peserta didik mengisi data formulir pendaftaran</li>
                        <li>Data formulir pendaftaran yang telah terkirim akan diverifikasi oleh Panitia</li>
                        <li>Peserta didik yang telah terverifikasi, akan mendapatkan nomor biling untuk melakukan pembayaran registrasi sekolah</li>
                        <li>Setelah melakukan pembayaran, calon peserta didik dapat mengunduh laporan bukti pembayaran beserta formulir pendaftaran</li>
                        <li>Calon peserta didik yang telah mengunduh laporan bukti pembayaran diharuskan mendaftar ulang ke sekolah yang bersangkutan</li>
                        <li>Selesai</li>
                    </ol>
                </div>
                
                <div class="mb-3">
                    <h3 class="text-center" id="kontak">Kontak dan Bantuan</h3>
                    <hr>
                    <div class="row">
                        <div class="col-3 border">
                            <div class="text-center text-lg border-bottom">TK ANANDA UT</div>
                                <li>E-mail : example@smp.com</li>
                                <li>Sulaiman : 0891234567890</li>
                        </div>
                        <div class="col-3 border">
                            <div class="text-center text-lg border-bottom">SD DHARMA KARYA UT</div>
                            <li>E-mail : example@smp.com</li>
                            <li>Sulaiman : 0891234567890</li>
                        </div>
                        <div class="col-3 border">
                            <div class="text-center text-lg border-bottom">SMP DHARMA KARYA UT</div>
                            <li>E-mail : example@smp.com</li>
                            <li>Sulaiman : 0891234567890</li>
                        </div>
                        <div class="col-3 border">
                            <div class="text-center text-lg border-bottom">SMA DHARMA KARYA UT</div>
                            <li>E-mail : example@smp.com</li>
                            <li>Sulaiman : 0891234567890</li>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <footer class="text-center p-3 bg-secondary">
            <h5>Copyright Yayasan Dharma Ananda Indonesia UT</h5>
        </footer>
    </body>
</html>
