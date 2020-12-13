@extends('admin.layouts.app')

@section('header.content')
    <h2 class="text-center mt-3">Data PPDB SMA Dharma Karya</h2>
@endsection

@section('main.content')
    <div class="card">
        <div class="card-body">

            <div>
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <!-- small card -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>{{ $calon_siswa_smas->count() }}</h3>

                                <p>Banyak Pendaftar<br>Calon Peserta Didik</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-user-plus"></i>
                            </div>
                            <a href="#" class="small-box-footer">
                                More info <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6">
                        <!-- small card -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>{{ DB::table('users')->where('no_registrasi', 'like', '004%')->where('is_data_verified', '=', '2')->count() }}
                                </h3>

                                <p>Banyak data yang<br> terverfikasi</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-check"></i>
                            </div>
                            <a href="#" class="small-box-footer">
                                More info <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6">
                        <!-- small card -->
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>{{ DB::table('users')->where('no_registrasi', 'like', '004%')->where('is_data_verified', '=', '3')->count() }}
                                </h3>

                                <p>Banyak data yang<br> salah</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-times"></i>
                            </div>
                            <a href="#" class="small-box-footer">
                                More info <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6">
                        <!-- small card -->
                        <div class="small-box bg-blue">
                            <div class="inner">
                                <h3>{{ DB::table('billings')->where('no_registrasi', 'like', '004%')->where('status_bayar', '=', '1')->count() }}
                                </h3>

                                <p>Calon Peserta<br>Melakukan Pembayaran</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-money-check"></i>
                            </div>
                            <a href="#" class="small-box-footer">
                                More info <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        <h4 class="mb-3">Baru saja mendaftar</h4>
        <div>
            <div class="row">
                @foreach ($calon_siswa_smas as $pesertadidik)
                <div class="col-lg-3 col-6">
                    <div class="card">
                        <img class="card-img-top" height="200" style=" object-fit:cover; object-position: center" src="{{ asset('dokumen/sma/' . $pesertadidik->pas_foto) }}" alt="Pas Foto 3 X 4">
                        <div class="card-body">
                            <p>{{ $pesertadidik->nama_pd }}<br>
                                {{ $pesertadidik->jenis_kelamin }}<br>
                                {{ $pesertadidik->alamat_pd }}
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        </div>
        
    </div>
    </div>
@endsection
