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
    <div class="announcement">
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere quo rem perspiciatis hic laudantium exercitationem? Ad dolorem consectetur explicabo quia consequuntur, in distinctio dicta quaerat doloremque, nemo ullam dignissimos delectus.
        </p>
    </div>




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

    <div id="akademik" class="cards-2">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">AKADEMIK</div>
                <h2>Sekolah Dalam Lingkungan <br> Yayasan Dharma Ananda Indonesia</h2>
            </div>
        </div>             
        
        <div class="akademik">

            <div class="area-1">
            </div><div class="area-2">
                
                
                <div class="akademik-container" id="akademikTK">
                    <h2>TK ANANDA UT</h2>
                    <div class="item">
                        <div id="headingOneTK">
                            <span data-toggle="collapse" data-target="#collapseOneTK" aria-expanded="true" aria-controls="collapseOneTK" role="button" class="">
                                <span class="circle-numbering">1</span><span class="akademik-title">Fasilitas yang Kami miliki</span>
                            </span>
                        </div>
                        <div id="collapseOneTK" class="collapse show" aria-labelledby="headingOneTK" data-parent="#akademikTK" style="">
                            <div class="akademik-body">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, repellat eligendi minima dolores at cupiditate quis laudantium quibusdam nesciunt molestiae voluptatibus beatae odio! Aperiam quidem est tempore facilis eos aspernatur?
                            </div>
                        </div>
                    </div> 
                
                    <div class="item">
                        <div id="headingTwoTK">
                            <span class="collapsed" data-toggle="collapse" data-target="#collapseTwoTK" aria-expanded="false" aria-controls="collapseTwoTK" role="button">
                                <span class="circle-numbering">2</span><span class="akademik-title">Keunggulan Kami</span>
                            </span>
                        </div>
                        <div id="collapseTwoTK" class="collapse" aria-labelledby="headingTwoTK" data-parent="#akademikTK" style="">
                            <div class="akademik-body">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius molestias ullam error natus hic excepturi impedit? Modi quam, sequi laboriosam impedit dolores et! Sunt, expedita?
                            </div>
                        </div>
                    </div> 
                
                    <div class="item">
                        <div id="headingThreeTK">
                            <span class="collapsed" data-toggle="collapse" data-target="#collapseThreeTK" aria-expanded="false" aria-controls="collapseThreeTK" role="button">
                                <span class="circle-numbering">3</span><span class="akademik-title">Prestasi dan Penghargaan</span>
                            </span>
                        </div>
                        <div id="collapseThreeTK" class="collapse" aria-labelledby="headingThreeTK" data-parent="#akademikTK" style="">
                            <div class="akademik-body">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae laborum velit perferendis eum officiis voluptatum! Ex neque dolorum maiores totam inventore reprehenderit labore dicta autem, praesentium cumque doloremque perferendis accusantium?
                            </div>
                        </div>
                    </div> 
                </div>
                
    
            </div> 

        </div>

        <div class="akademik">

            <div class="area-2">
                
                
                <div class="akademik-container" id="akademikSD">
                    <h2>SD ANANDA UT</h2>
                    <div class="item">
                        <div id="headingOneSD">
                            <span data-toggle="collapse" data-target="#collapseOneSD" aria-expanded="true" aria-controls="collapseOneSD" role="button" class="">
                                <span class="circle-numbering">1</span><span class="akademik-title">Fasilitas yang Kami miliki</span>
                            </span>
                        </div>
                        <div id="collapseOneSD" class="collapse show" aria-labelledby="headingOneSD" data-parent="#akademikSD" style="">
                            <div class="akademik-body">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, repellat eligendi minima dolores at cupiditate quis laudantium quibusdam nesciunt molestiae voluptatibus beatae odio! Aperiam quidem est tempore facilis eos aspernatur?
                            </div>
                        </div>
                    </div> 
                
                    <div class="item">
                        <div id="headingTwoSD">
                            <span class="collapsed" data-toggle="collapse" data-target="#collapseTwoSD" aria-expanded="false" aria-controls="collapseTwoSD" role="button">
                                <span class="circle-numbering">2</span><span class="akademik-title">Keunggulan Kami</span>
                            </span>
                        </div>
                        <div id="collapseTwoSD" class="collapse" aria-labelledby="headingTwoSD" data-parent="#akademikSD" style="">
                            <div class="akademik-body">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius molestias ullam error natus hic excepturi impedit? Modi quam, sequi laboriosam impedit dolores et! Sunt, expedita?
                            </div>
                        </div>
                    </div> 
                
                    <div class="item">
                        <div id="headingThreeSD">
                            <span class="collapsed" data-toggle="collapse" data-target="#collapseThreeSD" aria-expanded="false" aria-controls="collapseThreeSD" role="button">
                                <span class="circle-numbering">3</span><span class="akademik-title">Prestasi dan Penghargaan</span>
                            </span>
                        </div>
                        <div id="collapseThreeSD" class="collapse" aria-labelledby="headingThreeSD" data-parent="#akademikSD" style="">
                            <div class="akademik-body">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae laborum velit perferendis eum officiis voluptatum! Ex neque dolorum maiores totam inventore reprehenderit labore dicta autem, praesentium cumque doloremque perferendis accusantium?
                            </div>
                        </div>
                    </div> 
                </div>
                
    
            </div><div class="area-1">
            </div> 

        </div>

        <div class="akademik">

            <div class="area-1">
            </div><div class="area-2">
                
                
                <div class="akademik-container" id="akademikSMP">
                    <h2>SMP ANANDA UT</h2>
                    <div class="item">
                        <div id="headingOneSMP">
                            <span data-toggle="collapse" data-target="#collapseOneSMP" aria-expanded="true" aria-controls="collapseOneSMP" role="button" class="">
                                <span class="circle-numbering">1</span><span class="akademik-title">Fasilitas yang Kami miliki</span>
                            </span>
                        </div>
                        <div id="collapseOneSMP" class="collapse show" aria-labelledby="headingOneSMP" data-parent="#akademikSMP" style="">
                            <div class="akademik-body">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, repellat eligendi minima dolores at cupiditate quis laudantium quibusdam nesciunt molestiae voluptatibus beatae odio! Aperiam quidem est tempore facilis eos aspernatur?
                            </div>
                        </div>
                    </div> 
                
                    <div class="item">
                        <div id="headingTwoSMP">
                            <span class="collapsed" data-toggle="collapse" data-target="#collapseTwoSMP" aria-expanded="false" aria-controls="collapseTwoSMP" role="button">
                                <span class="circle-numbering">2</span><span class="akademik-title">Keunggulan Kami</span>
                            </span>
                        </div>
                        <div id="collapseTwoSMP" class="collapse" aria-labelledby="headingTwoSMP" data-parent="#akademikSMP" style="">
                            <div class="akademik-body">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius molestias ullam error natus hic excepturi impedit? Modi quam, sequi laboriosam impedit dolores et! Sunt, expedita?
                            </div>
                        </div>
                    </div> 
                
                    <div class="item">
                        <div id="headingThreeSMP">
                            <span class="collapsed" data-toggle="collapse" data-target="#collapseThreeSMP" aria-expanded="false" aria-controls="collapseThreeSMP" role="button">
                                <span class="circle-numbering">3</span><span class="akademik-title">Prestasi dan Penghargaan</span>
                            </span>
                        </div>
                        <div id="collapseThreeSMP" class="collapse" aria-labelledby="headingThreeSMP" data-parent="#akademikSMP" style="">
                            <div class="akademik-body">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae laborum velit perferendis eum officiis voluptatum! Ex neque dolorum maiores totam inventore reprehenderit labore dicta autem, praesentium cumque doloremque perferendis accusantium?
                            </div>
                        </div>
                    </div> 
                </div>
                
    
            </div>

        </div>

        <div class="akademik">

            <div class="area-2">
                
                
                <div class="akademik-container" id="akademikSMA">
                    <h2><a href="https://smadharmakaryaut.sch.id/" class="text-decoration-none">SMA ANANDA UT</a></h2>
                    <div class="item">
                        <div id="headingOneSMA">
                            <span data-toggle="collapse" data-target="#collapseOneSMA" aria-expanded="true" aria-controls="collapseOneSMA" role="button" class="">
                                <span class="circle-numbering">1</span><span class="akademik-title">Fasilitas yang Kami miliki</span>
                            </span>
                        </div>
                        <div id="collapseOneSMA" class="collapse show" aria-labelledby="headingOneSMA" data-parent="#akademikSMA" style="">
                            <div class="akademik-body">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, repellat eligendi minima dolores at cupiditate quis laudantium quibusdam nesciunt molestiae voluptatibus beatae odio! Aperiam quidem est tempore facilis eos aspernatur?
                            </div>
                        </div>
                    </div> 
                
                    <div class="item">
                        <div id="headingTwoSMA">
                            <span class="collapsed" data-toggle="collapse" data-target="#collapseTwoSMA" aria-expanded="false" aria-controls="collapseTwoSMA" role="button">
                                <span class="circle-numbering">2</span><span class="akademik-title">Keunggulan Kami</span>
                            </span>
                        </div>
                        <div id="collapseTwoSMA" class="collapse" aria-labelledby="headingTwoSMA" data-parent="#akademikSMA" style="">
                            <div class="akademik-body">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius molestias ullam error natus hic excepturi impedit? Modi quam, sequi laboriosam impedit dolores et! Sunt, expedita?
                            </div>
                        </div>
                    </div> 
                
                    <div class="item">
                        <div id="headingThreeSMA">
                            <span class="collapsed" data-toggle="collapse" data-target="#collapseThreeSMA" aria-expanded="false" aria-controls="collapseThreeSMA" role="button">
                                <span class="circle-numbering">3</span><span class="akademik-title">Prestasi dan Penghargaan</span>
                            </span>
                        </div>
                        <div id="collapseThreeSMA" class="collapse" aria-labelledby="headingThreeSD" data-parent="#akademikSD" style="">
                            <div class="akademik-body">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae laborum velit perferendis eum officiis voluptatum! Ex neque dolorum maiores totam inventore reprehenderit labore dicta autem, praesentium cumque doloremque perferendis accusantium?
                            </div>
                        </div>
                    </div> 
                </div>
                
    
            </div><div class="area-1">
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
