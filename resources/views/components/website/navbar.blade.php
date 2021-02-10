<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">

    <a class="navbar-brand logo-text page-scroll" href="/">YDAI UT</a>

    {{-- <a class="navbar-brand logo-image" href="/landing"><img src="{{ asset('picture/logo-ydai.png') }}" alt="alternative"></a> --}}
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-awesome fas fa-bars"></span>
        <span class="navbar-toggler-awesome fas fa-times"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link page-scroll" href="{{ Request::is('/') ? '#header' : '/' }}">BERANDA</a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link page-scroll" href="{{ Request::is('tentang-kami') ? '#profil' : '/tentang-kami' }}" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">PROFIL</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('tentang-kami') }}"><span class="item-text">TENTANG KAMI</span></a>
                    <div class="dropdown-items-divide-hr"></div>
                    <a class="dropdown-item" href="#"><span class="item-text">VISI MISI YDAI</span></a>
                    <div class="dropdown-items-divide-hr"></div>
                    <a class="dropdown-item" href="#"><span class="item-text">PIMPINAN YDAI</span></a>
                    <div class="dropdown-items-divide-hr"></div>
                    <a class="dropdown-item" href="#"><span class="item-text">SEJARAH YDAI</span></a>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link page-scroll" href="{{ Request::is('akademik') ? '#akademik' : '/akademik' }}" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">AKADEMIK</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#"><span class="item-text">TK ANANDA UT</span></a>
                    <div class="dropdown-items-divide-hr"></div>
                    <a class="dropdown-item" href="https://www.sddharmakarya.com/" target="_blank"><span class="item-text">SD DHARMA KARYA UT</span></a>
                    <div class="dropdown-items-divide-hr"></div>
                    <a class="dropdown-item" href="http://www.dharmakaryaut.com/" target="_blank"><span class="item-text">SMP DHARMA KARYA UT</span></a>
                    <div class="dropdown-items-divide-hr"></div>
                    <a class="dropdown-item" href="https://smadharmakaryaut.sch.id/" target="_blank"><span class="item-text">SMA DHARMA KARYA UT</span></a>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link page-scroll" href="#" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">INFORMASI</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item page-scroll" href="#pengumuman"><span class="item-text">PENGUMUMAN</span></a>
                    <div class="dropdown-items-divide-hr"></div>
                    <a class="dropdown-item page-scroll" href="#berita"><span class="item-text">BERITA</span></a>
                    <div class="dropdown-items-divide-hr"></div>
                    <a class="dropdown-item" href="#" target="_blank"><span class="item-text">PPDB</span></a>
                </div>
            </li>

            
            <li class="nav-item">
                <a class="nav-link page-scroll" href="#hubungi-kami">HUBUNGI KAMI</a>
            </li>

            <span class="nav-item social-icons">
                <span class="fa-stack">
                    <a href="#" >
                        <span class="circle"></span>
                        <i class="fas fa-sign-in-alt fa-stack-1x"></i>
                    </a>
                </span>
            </span>

        </ul>
        
    </div>
</nav>