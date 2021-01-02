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
                    <a href="{{ route('admin.page') }}" class="nav-link{{ request()->is('admin') ? ' active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                {{-- tk --}}
                @can('kelola data calon tk')
                <li class="nav-item{{ request()->fullUrl() ? ' menu-is-opening menu-open' : '' }}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            TK
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('index.tk') }}" class="nav-link{{ request()->fullUrl() == route('index.tk') ? ' active' : '' }}">
                                <i class="fas fa-database"></i>
                                <p>Beranda PPDB</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('verifikasi.tk') }}" class="nav-link{{ request()->fullUrl() == route('verifikasi.tk') ? ' active' : '' }}">
                                <i class="fas fa-table"></i>
                                <p>Data Verifikasi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('verifikasi.tk.valid') }}" class="nav-link{{ request()->fullUrl() == route('verifikasi.tk.valid') ? ' active' : '' }}">
                                <i class="fas fa-check"></i>
                                <p>Terverifikasi Benar</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('verifikasi.tk.takvalid') }}" class="nav-link{{ request()->fullUrl() == route('verifikasi.tk.takvalid') ? ' active' : '' }}">
                                <i class="fas fa-times"></i>
                                <p>Terverifikasi Salah</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('pembayaran.tk') }}" class="nav-link{{ request()->fullUrl() == route('pembayaran.tk') ? ' active' : '' }}">
                                <i class="fas fa-money-check"></i>
                                <p>Data Pembayaran</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @endcan

                {{-- sd --}}
                @can('kelola data calon sd')
                <li class="nav-item{{ request()->fullUrl() ? ' menu-is-opening menu-open' : '' }}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            SD
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('index.sd') }}" class="nav-link{{ request()->fullUrl() == route('index.sd') ? ' active' : '' }}">
                                <i class="fas fa-database"></i>
                                <p>Beranda PPDB</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('verifikasi.sd') }}" class="nav-link{{ request()->fullUrl() == route('verifikasi.sd') ? ' active' : '' }}">
                                <i class="fas fa-table"></i>
                                <p>Data Verifikasi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('verifikasi.sd.valid') }}" class="nav-link{{ request()->fullUrl() == route('verifikasi.sd.valid') ? ' active' : '' }}">
                                <i class="fas fa-check"></i>
                                <p>Terverifikasi Benar</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('verifikasi.sd.takvalid') }}" class="nav-link{{ request()->fullUrl() == route('verifikasi.sd.takvalid') ? ' active' : '' }}">
                                <i class="fas fa-times"></i>
                                <p>Terverifikasi Salah</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('pembayaran.sd') }}" class="nav-link{{ request()->fullUrl() == route('pembayaran.sd') ? ' active' : '' }}">
                                <i class="fas fa-money-check"></i>
                                <p>Data Pembayaran</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @endcan

                {{-- smp --}}
                @can('kelola data calon smp')
                <li class="nav-item{{ request()->fullUrl() ? ' menu-is-opening menu-open' : '' }}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            SMP
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('index.smp') }}" class="nav-link{{ request()->fullUrl() == route('index.smp') ? ' active' : '' }}">
                                <i class="fas fa-database"></i>
                                <p>Beranda PPDB</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('verifikasi.smp') }}" class="nav-link{{ request()->fullUrl() == route('verifikasi.smp') ? ' active' : '' }}">
                                <i class="fas fa-table"></i>
                                <p>Data Verifikasi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('verifikasi.smp.valid') }}" class="nav-link{{ request()->fullUrl() == route('verifikasi.smp.valid') ? ' active' : '' }}">
                                <i class="fas fa-check"></i>
                                <p>Terverifikasi Benar</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('verifikasi.smp.takvalid') }}" class="nav-link{{ request()->fullUrl() == route('verifikasi.smp.takvalid') ? ' active' : '' }}">
                                <i class="fas fa-times"></i>
                                <p>Terverifikasi Salah</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('pembayaran.smp') }}" class="nav-link{{ request()->fullUrl() == route('pembayaran.smp') ? ' active' : '' }}">
                                <i class="fas fa-money-check"></i>
                                <p>Data Pembayaran</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @endcan

                {{-- sma --}}
                @can('kelola data calon sma')
                <li class="nav-item{{ request()->fullUrl() ? ' menu-is-opening menu-open' : '' }}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            SMA
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('index.sma') }}" class="nav-link{{ request()->fullUrl() == route('index.sma') ? ' active' : '' }}">
                                <i class="fas fa-database"></i>
                                <p>Beranda PPDB</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('verifikasi.sma') }}" class="nav-link{{ request()->fullUrl() == route('verifikasi.sma') ? ' active' : '' }}">
                                <i class="fas fa-table"></i>
                                <p>Data Verifikasi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('verifikasi.sma.valid') }}" class="nav-link{{ request()->fullUrl() == route('verifikasi.sma.valid') ? ' active' : '' }}">
                                <i class="fas fa-check"></i>
                                <p>Terverifikasi Benar</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('verifikasi.sma.takvalid') }}" class="nav-link{{ request()->fullUrl() == route('verifikasi.sma.takvalid') ? ' active' : '' }}">
                                <i class="fas fa-times"></i>
                                <p>Terverifikasi Salah</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('pembayaran.sma') }}" class="nav-link{{ request()->fullUrl() == route('pembayaran.sma') ? ' active' : '' }}">
                                <i class="fas fa-money-check"></i>
                                <p>Data Pembayaran</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @endcan
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
