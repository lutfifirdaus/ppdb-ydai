@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Memverifikasi E-mail yang Anda daftarkan') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Verifikas E-mail sudah Kami kirim ulang!') }}
                        </div>
                    @endif

                    {{ __('Sebelum lanjut ke tahap selanjutnya, pastikan Anda telah mengecek E-mail Anda untuk link verifikasi.') }}
                    {{ __('Jika Anda tidak menerima E-mail verifikasi') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('tekan di sini untuk mengirim ulang.') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
