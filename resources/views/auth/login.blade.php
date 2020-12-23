@include('layouts.head')

<body class="bg-white">
    <div style="padding-top: 5%">
        <div class="row h-75 shadow-lg" style="border: 5px solid rgb(73, 73, 255); margin: 0 5rem; border-radius: 25px">

            <div class="col-md-7 text-center"
                style="background-image: url({{ asset('picture/sma.jpeg') }}); background-position: center; background-size: cover; border-radius: 20px 0 0 20px; padding-top: 10%;">
                <div class="card m-auto w-50 nol9">
                    <a href="/"><img class="card-img-top" src="{{ asset('picture/logo-ydai.png') }}" alt=""></a>
                </div>
            </div>

            <div class="col-md-5 p-0 my-auto">
                <div>
                    <div class="text-center">
                        <h4>{{ __('Login') }}</h4>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                                <div class="col-md-8 offset-md-3">
                                    @if (Route::has('register'))
                                        <a class="nav-link text-center"href="{{ route('register') }}">Atau Ingin Mendaftar? <span class="btn btn-sm btn-success">Klik di Sini</span></a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>
