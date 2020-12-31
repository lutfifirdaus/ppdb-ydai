@include('layouts.head')

<body class="bg-white">
    <div style="padding-top: 5%">
        <div class="row h-75 shadow-lg" style="border: 5px solid rgb(73, 73, 255); margin: 0 5rem; border-radius: 25px">
            
            <div class="col-md-7 text-center"
                style="background: url({{ asset('picture/sma.jpeg') }}) no-repeat center center fixed; background-position: center; background-size: cover; border-radius: 20px 0 0 20px">
                <a href="/">
                    <img src="{{ asset('picture/logo-ydai.png') }}" alt="logo YDAI" class="m-auto mw-100 w-50 nol9">
                </a>
            </div>
    
            <div class="col-md-5 m-auto">
                <div class="text-center"><h4>{{ __('Register') }}</h4></div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                            <div class="col-md-8 offset-md-3">
                                @if (Route::has('login'))
                                    <a class="nav-link text-center"href="{{ route('login') }}">Sudah Punya Akun? <span class="btn btn-sm btn-success">Klik di Sini</span></a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    
        </div>
    </div>
</body>
