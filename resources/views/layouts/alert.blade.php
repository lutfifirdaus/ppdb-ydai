{{-- verifikasi email --}}
@if (Auth::check() && !Auth::user()->email_verified_at)
    <div class="alert alert-danger text-center text-black pt-3 m-0">
        Silahkan verifikasi email terlebih dahulu sebelum melakukan pendaftaran,
        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
            @csrf
            <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Kirim verifikasi ulang') }}</button>.
        </form>
    </div>
@endif

{{-- verifikasi data --}}
    @if (Auth::check() && (Auth::user()->is_data_verified == 1 && Auth::user()->status != 0))
        <div class="alert alert-warning text-center text-black text-black pt-3 m-0">
            Tolong ditunggu ya! <br> Formulir pendaftaran Anda telah masuk ke dalam sistem dan akan diverifikasi oleh panitia PPDB
        </div>
    @elseif(Auth::check() && (Auth::user()->is_data_verified == 3 && Auth::user()->status != 0))
        <div class="alert alert-danger text-center text-black pt-3 m-0">
            Mohon maaf, terdapat kesalahan atau kekeliruan data pada formulir pendaftaran <br> yang Anda kirimkan. Mohon dicek dan ubah!
        </div>
    @elseif(Auth::check() && (Auth::user()->is_data_verified == 2 && Auth::user()->status != 0))
        <div class="alert alert-primary text-center text-black pt-3 m-0">
            Selamat! <br> Formulir pendaftaran anda telah terverifikasi kebenarannya.
        </div>
    @endif