@include('layouts.head')
<body style="width: 100%; height:100%">
    <nav class="navbar navbar-expand-md navbar-dark bg-success shadow-sm">
        <a class="navbar-brand" @if(Auth::check() && auth()->user()->hasRole('calon')) href="{{ route('calon') }}" @elseif(Auth::check() && auth()->user()->hasRole('admin')) href="{{ route('admin.page') }}" @else href="/" @endif >
            {{-- <img src="/picture/logo-ydai2.jpeg" width="50" height="30" alt="logo YDAI"> --}}
            {{ config('app.name') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

                @can('memilih sekolah')
                    <a href="{{ route('calon.siswa') }}" class="nav-link">Daftar Sekolah</a>
                @endcan

                @can('melakukan pendaftaran tk')
                    <a href="{{ route('calon.tk.buat') }}" class="nav-link">Formulir Pendaftaran</a>
                    <a href="{{ route('calon.tk') }}" class="nav-link">Alur Pendaftaran</a>
                    <a href="{{ route('calon.tk.billing') }}" class="nav-link">Biaya Pendidikan</a>
                @endcan
                
                @can('melakukan pendaftaran sd')
                    <a href="{{ route('calon.sd.buat') }}" class="nav-link">Formulir Pendaftaran</a>
                    <a href="{{ route('calon.sd') }}" class="nav-link">Alur Pendaftaran</a>
                    <a href="{{ route('calon.sd.billing') }}" class="nav-link">Biaya Pendidikan</a>
                @endcan
            
                @can('melakukan pendaftaran smp')
                    <a href="{{ route('calon.smp.buat') }}" class="nav-link">Formulir Pendaftaran</a>
                    <a href="{{ route('calon.smp') }}" class="nav-link">Alur Pendaftaran</a>
                    <a href="{{ route('calon.smp.billing') }}" class="nav-link">Biaya Pendidikan</a>
                @endcan

                @can('melakukan pendaftaran sma')
                    <a href="{{ route('calon.sma.buat') }}" class="nav-link">Formulir Pendaftaran</a>
                    <a href="{{ route('calon.sma') }}" class="nav-link">Alur Pendaftaran</a>
                    {{-- <a href="{{ route('calon.sma.billing') }}" class="nav-link">Biaya Pendidikan</a> --}}
                @endcan
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif
                    
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    
    </nav>

    <div class="container mt-3">
        @include('layouts.alert')
    </div>

    <main id="app">
        @yield('content')
    </main>

    <script>
        $(document).ready(function() {
            $(document).on('submit', 'form', function() {
                $('button').attr('disabled', 'disabled');
            });
        });
    </script>
</body>
</html>
