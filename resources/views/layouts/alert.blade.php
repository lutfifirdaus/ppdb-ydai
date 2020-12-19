{{-- verifikasi email --}}
@if (Auth::check() && !Auth::user()->email_verified_at)
    <div class="alert alert-danger text-center text-black pt-3 m-0 mb-3">
        Silahkan verifikasi email terlebih dahulu sebelum melakukan pendaftaran,
        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
            @csrf
            <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Kirim verifikasi ulang') }}</button>.
        </form>
    </div>
@endif

{{-- notifikasi --}}
    @if (session()->has('masuk'))
        <div class="alert alert-warning text-center text-black text-black pt-3 m-0 mb-3">
            <button type="button" class="close" data-dismiss="alert">×</button> 
            {{ session()->get('masuk') }}
        </div>
    @endif

    @if(session()->has('edit'))
        <div class="alert alert-danger text-center text-black pt-3 m-0 mb-3">
            <button type="button" class="close" data-dismiss="alert">×</button> 
            {{ session()->get('edit') }}
        </div>
    @endif

    {{-- @if(Auth::check() && Auth::user()->status = 0)
        <div class="alert alert-primary text-center text-black pt-3 m-0">
            Selamat! <br> Formulir pendaftaran anda telah terverifikasi kebenarannya.
        </div>
    @endif --}}