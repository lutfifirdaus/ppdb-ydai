@extends('layouts.app')

@section('content')
@foreach ($calon_siswa_sds as $pesertadidik)              
    
    <div class="card">
        <div class="card-header text-center">
            <h3>Biaya Pendidikan SMP DHARMA ANANDA</h3>
        </div>
        <div class="card-body">
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic natus exercitationem quas in quasi iste, ipsa minus veniam dolores architecto eveniet atque assumenda ad, sed eos, dolor cupiditate sit saepe quaerat. Repellendus, tenetur adipisci inventore harum in atque delectus! Molestias velit rem obcaecati unde consequuntur? Omnis expedita adipisci enim quibusdam!</p>
        </div>
    </div>
    
    @if ($user->billing->no_billing != null)
        <hr>
        <div class="card">
            <div class="card-header text-center">
                <h3>Berikut Informasi Biaya Pendaftaran Anda</h3>
            </div>
            <div class="card-body">
                <div class="card-title mb-3">
                    <div class="row">
                        <div class="col-sm-4 col-md-3">Atas Nama</div>
                        <div class="col-sm-4 col-md-3">: {{ $user->csSd->nama_pd}}</div>
                    </div> 
                    <hr>
                </div>
                <div class="card-text">
                    <div class="row">
                        <div class="col-sm-4 col-md-3 border p-3">Nomor Registrasi</div>
                        <div class="col-sm-8 col-md-3 border p-3">: {{ $user->no_registrasi }}</div>
                        
                        <div class="col-sm-4 col-md-3 border p-3">Nomor Billing</div>
                        <div class="col-sm-8 col-md-3 border p-3">: {{ $user->billing->no_billing }}</div>

                        <div class="col-sm-4 col-md-3 border p-3">Batas Tanggal Pembayaran</div>
                        <div class="col-sm-8 col-md-3 border p-3">: {{ $user->user_date_create }}</div>
                        
                        <div class="col-sm-4 col-md-3 border p-3">Tanggal Pembayaran</div>
                        <div class="col-sm-8 col-md-3 border p-3">: {{ $user->billing->tanggal_bayar }}</div>
                    </div>
                </div>
            </div>
            <div class="card-footer d-flex justify-content-end">
                <form method="post" action="">
                    <button type="submit" class="btn btn-primary">Cetak</button>
                </form>
            </div>
        </div>
    @endif
@endforeach
@endsection