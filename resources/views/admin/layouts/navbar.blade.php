<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
    <li class="nav-item">
    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    
    @auth     
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
            {{-- </li>
            <li class="nav-item">
                <a class="nav-link" href="/guru">Data Wali Kelas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/tagihan">Transaksi</a>
            </li> --}}
        </ul>
    @endauth
    
    </ul>

</nav>
<!-- /.navbar -->