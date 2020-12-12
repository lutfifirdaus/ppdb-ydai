<!-- Main Sidebar Container -->
<aside class="main-sidebar  main-sidebar-custom sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
        <img src="{{ asset('picture/logo-ydai.jpeg') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">{{ config('app.name') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                {{-- <img src="{{ asset('') }}" class="img-circle elevation-2"
                    alt="User Image"> --}}
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('admin.page') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            SMA
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('index.sma') }}" class="nav-link">
                                <i class="fas fa-database"></i>
                                <p>Data PPDB</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('verifikasi.sma') }}" class="nav-link">
                                <i class="fas fa-check"></i>
                                <p>Terverifikasi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../../index.html" class="nav-link">
                                <i class="fas fa-money-check"></i>
                                <p>Pembayaran</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            SMP
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('index.smp') }}" class="nav-link">
                                <i class="fas fa-database"></i>
                                <p>Data PPDB</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('verifikasi.smp') }}" class="nav-link">
                                <i class="fas fa-check"></i>
                                <p>Terverifikasi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../../index.html" class="nav-link">
                                <i class="fas fa-money-check"></i>
                                <p>Pembayaran</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            TK
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('index.tk') }}" class="nav-link">
                                <i class="fas fa-database"></i>
                                <p>Data PPDB</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('verifikasi.tk') }}" class="nav-link">
                                <i class="fas fa-check"></i>
                                <p>Terverifikasi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../../index.html" class="nav-link">
                                <i class="fas fa-money-check"></i>
                                <p>Pembayaran</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            SD
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('index.sd') }}" class="nav-link">
                                <i class="fas fa-database"></i>
                                <p>Data PPDB</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('verifikasi.sd') }}" class="nav-link">
                                <i class="fas fa-check"></i>
                                <p>Terverifikasi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../../index.html" class="nav-link">
                                <i class="fas fa-money-check"></i>
                                <p>Pembayaran</p>
                            </a>
                        </li>
                    </ul>
                </li>
        </nav>
        <!-- /.sidebar-menu -->
    </div>

    <div class="sidebar-custom">
        <a href="#" class="btn btn-link"><i class="fas fa-door"></i></a>
        <a class="btn btn-danger hide-on-collapse pos-right" href="{{ route('logout') }}" onclick="event.preventDefault();
                    
                    document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
    <!-- /.sidebar -->
</aside>
