@include('layouts.head')
<body style="width: 100%; height:100%">
    @include('layouts.alert')
    <nav class="navbar navbar-expand-md navbar-dark bg-success shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ route('calon') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    @if (Auth::check() && Auth::user()->status == 0)
                        <li class="nav-item">
                            <a href="{{ route('calon.siswa') }}" class="nav-link">Daftar Sekolah</a>
                        </li>
                    @endif
                    @if (Auth::check() && Auth::user()->status == 1)
                        <li class="nav-item">
                            <a href="{{ route('calon.tk.buat') }}" class="nav-link">Formulir Pendaftaran</a>
                        </li>
                    @elseif (Auth::check() && Auth::user()->status == 2)
                        <li class="nav-item">
                            <a href="{{ route('calon.sd.buat') }}" class="nav-link">Formulir Pendaftaran</a>
                        </li>
                    @elseif (Auth::check() && Auth::user()->status == 3)
                        <li class="nav-item">
                            <a href="{{ route('calon.smp.buat') }}" class="nav-link">Formulir Pendaftaran</a>
                        </li>
                    @elseif (Auth::check() && Auth::user()->status == 4)
                        <li class="nav-item">
                            <a href="{{ route('calon.sma.buat') }}" class="nav-link">Formulir Pendaftaran</a>
                        </li>
                    @endif
                    @if (Auth::check() && Auth::user()->status == 1)
                    <li class="nav-item">
                        <a href="{{ route('calon.tk') }}" class="nav-link">Alur Pendaftaran</a>
                    </li>
                    @elseif (Auth::check() && Auth::user()->status == 2)
                    <li class="nav-item">
                        <a href="{{ route('calon.sd') }}" class="nav-link">Alur Pendaftaran</a>
                    </li>
                    @elseif (Auth::check() && Auth::user()->status == 3)
                    <li class="nav-item">
                        <a href="{{ route('calon.smp') }}" class="nav-link">Alur Pendaftaran</a>
                    </li>
                    @elseif (Auth::check() && Auth::user()->status == 4)
                    <li class="nav-item">
                        <a href="{{ route('calon.sma') }}" class="nav-link">Alur Pendaftaran</a>
                    </li>
                    @endif
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
        </div>
    </nav>
    <main id="app">
        <div class="container h-100" style="padding-top: 2rem">
                @yield('content')
        </div>
    </main>
</body>
</html>
