@extends('website.master')

@section('content')
    <div id="profil" class="basic-1">
        <div class="bg-dark" style="height: 6rem; width: 100%; position: absolute; top: 0;"></div>
        <div class="separater">
            <h1>TENTANG KAMI</h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="text-container">
                        <h2>Bergerak maju dan berkembang bersama dengan Kami.</h2>
                        <p></p>
                        <p class="testimonial-text text-justify">"Kami terus berusaha memberikan dan mengembangkan sistem
                            pendidikan yang sebaik mungkin berbasis media digital serta berwawasan internasional untuk
                            memberikan yang terbaik."</p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="image-container">
                        <img class="img-fluid" src="{{ asset('images/ypii-rapat.jpg') }}" alt="alternative">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
