@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header text-center">
            <h3>Biaya Pendidikan TK Ananda UT</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Makan Malam</th>
                        <th>Makan Malam</th>
                        <th>Makan Malam</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Makan Siang</td>
                        <td>Makan Siang</td>
                        <td>Makan Siang</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    
    @if ($user->billing != null)
        <hr>
        <div class="card">
            <div class="card-header text-center">
                <h3>Berikut Informasi Biaya Pendaftaran Anda</h3>
            </div>
            <div class="card-body">
                <div class="card-title mb-3">
                    <div class="row">
                        <div class="col-sm-4 col-md-3">Atas Nama</div>
                        <div class="col-sm-4 col-md-3">: {{ $user->csTk->nama_pd }}</div>
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
</div>
@endsection