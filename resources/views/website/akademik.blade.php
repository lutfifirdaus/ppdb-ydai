@extends('website.master')

@section('content')
    <div id="akademik" class="cards-2">
        <div class="bg-dark" style="height: 6rem; width: 100%; position: absolute; top: 0;"></div>
        <div class="separater">
            <h1>AKADEMIK</h1>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h2>Sekolah Dalam Lingkungan <br> Yayasan Dharma Ananda Indonesia</h2>
            </div>
        </div>

        <div class="akademik row">

            <div id="TK" class="area-1 col-6">
                <div>
                    <img src="{{ asset('images/tk-depan.jpg') }}" alt="TK Ananda UT">
                </div>
                <div>
                    <img src="{{ asset('images/tk-depan-2.jpg') }}" alt="TK Ananda UT">
                </div>
                <div>
                    <img src="{{ asset('images/tk-prestasi.jpg') }}" alt="TK Ananda UT">
                </div>
                <div>
                    <img src="{{ asset('images/tk-siswa.jpg') }}" alt="TK Ananda UT">
                </div>
                <div>
                    <img src="{{ asset('images/tk-siswa-2.jpg') }}" alt="TK Ananda UT">
                </div>
            </div>

            <div class="area-2 col-6">

                <div class="akademik-container" id="akademikTK">
                    <a href="#" class="text-decoration-none">
                        <h2>TK ANANDA UT</h2>
                    </a>
                    <div class="item">
                        <div id="headingOneTK">
                            <span data-toggle="collapse" data-target="#collapseOneTK" aria-expanded="true"
                                aria-controls="collapseOneTK" role="button" class="">
                                <span class="circle-numbering">1</span><span class="akademik-title">Tujuan Kami</span>
                            </span>
                        </div>
                        <div id="collapseOneTK" class="collapse show" aria-labelledby="headingOneTK"
                            data-parent="#akademikTK" style="">
                            <div class="akademik-body">
                                Menjadi tempat bermain dan belajar yang menyenangkan, aman dan nyaman bagi anak dalam
                                mengembangkan seluruh potensinya.
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div id="headingTwoTK">
                            <span class="collapsed" data-toggle="collapse" data-target="#collapseTwoTK"
                                aria-expanded="false" aria-controls="collapseTwoTK" role="button">
                                <span class="circle-numbering">2</span><span class="akademik-title">Fasilitas yang Kami
                                    Berikan</span>
                            </span>
                        </div>
                        <div id="collapseTwoTK" class="collapse" aria-labelledby="headingTwoTK" data-parent="#akademikTK"
                            style="">
                            <div class="akademik-body">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius molestias ullam error natus
                                hic excepturi impedit? Modi quam, sequi laboriosam impedit dolores et! Sunt, expedita?
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div id="headingThreeTK">
                            <span class="collapsed" data-toggle="collapse" data-target="#collapseThreeTK"
                                aria-expanded="false" aria-controls="collapseThreeTK" role="button">
                                <span class="circle-numbering">3</span><span class="akademik-title">Hubungi Kami</span>
                            </span>
                        </div>
                        <div id="collapseThreeTK" class="collapse" aria-labelledby="headingThreeTK"
                            data-parent="#akademikTK" style="">
                            <div class="akademik-body">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae laborum velit perferendis
                                eum officiis voluptatum! Ex neque dolorum maiores totam inventore reprehenderit labore dicta
                                autem, praesentium cumque doloremque perferendis accusantium?
                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </div>

        <div class="akademik row">

            <div class="area-2 col-6">


                <div class="akademik-container" id="akademikSD">
                    <a href="https://www.sddharmakarya.com/" class="text-decoration-none">
                        <h2>SD DHARMA KARYA UT</h2>
                    </a>
                    <div class="item">
                        <div id="headingOneSD">
                            <span data-toggle="collapse" data-target="#collapseOneSD" aria-expanded="true"
                                aria-controls="collapseOneSD" role="button" class="">
                                <span class="circle-numbering">1</span><span class="akademik-title">Fasilitas yang Kami
                                    miliki</span>
                            </span>
                        </div>
                        <div id="collapseOneSD" class="collapse show" aria-labelledby="headingOneSD"
                            data-parent="#akademikSD" style="">
                            <div class="akademik-body">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, repellat eligendi minima
                                dolores at cupiditate quis laudantium quibusdam nesciunt molestiae voluptatibus beatae odio!
                                Aperiam quidem est tempore facilis eos aspernatur?
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div id="headingTwoSD">
                            <span class="collapsed" data-toggle="collapse" data-target="#collapseTwoSD"
                                aria-expanded="false" aria-controls="collapseTwoSD" role="button">
                                <span class="circle-numbering">2</span><span class="akademik-title">Keunggulan Kami</span>
                            </span>
                        </div>
                        <div id="collapseTwoSD" class="collapse" aria-labelledby="headingTwoSD" data-parent="#akademikSD"
                            style="">
                            <div class="akademik-body">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius molestias ullam error natus
                                hic excepturi impedit? Modi quam, sequi laboriosam impedit dolores et! Sunt, expedita?
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div id="headingThreeSD">
                            <span class="collapsed" data-toggle="collapse" data-target="#collapseThreeSD"
                                aria-expanded="false" aria-controls="collapseThreeSD" role="button">
                                <span class="circle-numbering">3</span><span class="akademik-title">Prestasi dan
                                    Penghargaan</span>
                            </span>
                        </div>
                        <div id="collapseThreeSD" class="collapse" aria-labelledby="headingThreeSD"
                            data-parent="#akademikSD" style="">
                            <div class="akademik-body">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae laborum velit perferendis
                                eum officiis voluptatum! Ex neque dolorum maiores totam inventore reprehenderit labore dicta
                                autem, praesentium cumque doloremque perferendis accusantium?
                            </div>
                        </div>
                    </div>
                </div>


            </div>

            <div id="SD" class="area-1 col-6">
                <div>
                    <img src="{{ asset('images/sd-gerbang.JPG') }}" alt="SD Dharma Karya UT">
                </div>
                <div>
                    <img src="{{ asset('images/sd-gerbang-2.JPG') }}" alt="SD Dharma Karya UT">
                </div>
                <div>
                    <img src="{{ asset('images/sd-siswa.jpg') }}" alt="SD Dharma Karya UT">
                </div>
                <div>
                    <img src="{{ asset('images/sd-menggambar.JPG') }}" alt="SD Dharma Karya UT">
                </div>
                <div>
                    <img src="{{ asset('images/sd-laling.JPG') }}" alt="SD Dharma Karya UT">
                </div>
            </div>
        </div>

        <div class="akademik row">

            <div id="SMP" class="area-1 col-6">
                <div>
                    <img src="{{ asset('images/smp-depan.jpeg') }}" alt="SMP Dharma Karya UT">
                </div>
                <div>
                    <img src="{{ asset('images/smp-gerbang.jpeg') }}" alt="SMP Dharma Karya UT">
                </div>
                <div>
                    <img src="{{ asset('images/smp-ldks.jpg') }}" alt="SMP Dharma Karya UT">
                </div>
                <div>
                    <img src="{{ asset('images/smp-siswa.jpg') }}" alt="SMP Dharma Karya UT">
                </div>
                <div>
                    <img src="{{ asset('images/dk-gerbang.JPG') }}" alt="SMP Dharma Karya UT">
                </div>
            </div>

            <div class="area-2 col-6">


                <div class="akademik-container" id="akademikSMP">
                    <a href="http://www.dharmakaryaut.com/" class="text-decoration-none">
                        <h2>SMP DHARMA KARYA UT</h2>
                    </a>
                    <div class="item">
                        <div id="headingOneSMP">
                            <span data-toggle="collapse" data-target="#collapseOneSMP" aria-expanded="true"
                                aria-controls="collapseOneSMP" role="button" class="">
                                <span class="circle-numbering">1</span><span class="akademik-title">Fasilitas yang Kami
                                    miliki</span>
                            </span>
                        </div>
                        <div id="collapseOneSMP" class="collapse show" aria-labelledby="headingOneSMP"
                            data-parent="#akademikSMP" style="">
                            <div class="akademik-body">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, repellat eligendi minima
                                dolores at cupiditate quis laudantium quibusdam nesciunt molestiae voluptatibus beatae odio!
                                Aperiam quidem est tempore facilis eos aspernatur?
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div id="headingTwoSMP">
                            <span class="collapsed" data-toggle="collapse" data-target="#collapseTwoSMP"
                                aria-expanded="false" aria-controls="collapseTwoSMP" role="button">
                                <span class="circle-numbering">2</span><span class="akademik-title">Keunggulan Kami</span>
                            </span>
                        </div>
                        <div id="collapseTwoSMP" class="collapse" aria-labelledby="headingTwoSMP" data-parent="#akademikSMP"
                            style="">
                            <div class="akademik-body">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius molestias ullam error natus
                                hic excepturi impedit? Modi quam, sequi laboriosam impedit dolores et! Sunt, expedita?
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div id="headingThreeSMP">
                            <span class="collapsed" data-toggle="collapse" data-target="#collapseThreeSMP"
                                aria-expanded="false" aria-controls="collapseThreeSMP" role="button">
                                <span class="circle-numbering">3</span><span class="akademik-title">Prestasi dan
                                    Penghargaan</span>
                            </span>
                        </div>
                        <div id="collapseThreeSMP" class="collapse" aria-labelledby="headingThreeSMP"
                            data-parent="#akademikSMP" style="">
                            <div class="akademik-body">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae laborum velit perferendis
                                eum officiis voluptatum! Ex neque dolorum maiores totam inventore reprehenderit labore dicta
                                autem, praesentium cumque doloremque perferendis accusantium?
                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </div>

        <div class="akademik row">

            <div class="area-2 col-6">


                <div class="akademik-container" id="akademikSMA">
                    <a href="https://smadharmakaryaut.sch.id/" class="text-decoration-none">
                        <h2>SMA DHARMA KARYA UT</h2>
                    </a>
                    <div class="item">
                        <div id="headingOneSMA">
                            <span data-toggle="collapse" data-target="#collapseOneSMA" aria-expanded="true"
                                aria-controls="collapseOneSMA" role="button" class="">
                                <span class="circle-numbering">1</span><span class="akademik-title">Fasilitas yang Kami
                                    miliki</span>
                            </span>
                        </div>
                        <div id="collapseOneSMA" class="collapse show" aria-labelledby="headingOneSMA"
                            data-parent="#akademikSMA" style="">
                            <div class="akademik-body">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, repellat eligendi minima
                                dolores at cupiditate quis laudantium quibusdam nesciunt molestiae voluptatibus beatae odio!
                                Aperiam quidem est tempore facilis eos aspernatur?
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div id="headingTwoSMA">
                            <span class="collapsed" data-toggle="collapse" data-target="#collapseTwoSMA"
                                aria-expanded="false" aria-controls="collapseTwoSMA" role="button">
                                <span class="circle-numbering">2</span><span class="akademik-title">Keunggulan Kami</span>
                            </span>
                        </div>
                        <div id="collapseTwoSMA" class="collapse" aria-labelledby="headingTwoSMA" data-parent="#akademikSMA"
                            style="">
                            <div class="akademik-body">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius molestias ullam error natus
                                hic excepturi impedit? Modi quam, sequi laboriosam impedit dolores et! Sunt, expedita?
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div id="headingThreeSMA">
                            <span class="collapsed" data-toggle="collapse" data-target="#collapseThreeSMA"
                                aria-expanded="false" aria-controls="collapseThreeSMA" role="button">
                                <span class="circle-numbering">3</span><span class="akademik-title">Prestasi dan
                                    Penghargaan</span>
                            </span>
                        </div>
                        <div id="collapseThreeSMA" class="collapse" aria-labelledby="headingThreeSD"
                            data-parent="#akademikSD" style="">
                            <div class="akademik-body">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae laborum velit perferendis
                                eum officiis voluptatum! Ex neque dolorum maiores totam inventore reprehenderit labore dicta
                                autem, praesentium cumque doloremque perferendis accusantium?
                            </div>
                        </div>
                    </div>
                </div>


            </div>

            <div id="SMA" class="area-1 col-6">
                <div>
                    <img src="{{ asset('images/smp-depan.jpeg') }}" alt="SMP Dharma Karya UT">
                </div>
                <div>
                    <img src="{{ asset('images/smp-gerbang.jpeg') }}" alt="SMP Dharma Karya UT">
                </div>
                <div>
                    <img src="{{ asset('images/smp-ldks.jpg') }}" alt="SMP Dharma Karya UT">
                </div>
                <div>
                    <img src="{{ asset('images/smp-siswa.jpg') }}" alt="SMP Dharma Karya UT">
                </div>
                <div>
                    <img src="{{ asset('images/dk-gerbang.JPG') }}" alt="SMP Dharma Karya UT">
                </div>
            </div>

        </div>

    </div>
@endsection
