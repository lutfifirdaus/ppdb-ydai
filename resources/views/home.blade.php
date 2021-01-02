@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="card">
            <h4 class="card-header text-center">Selamat Datang Calon Peserta Didik Baru!</h4>
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <p style="font-size: 18px">
                    Halo <b>{{ Auth::user()->name }}</b>&#128075;
                    <br>
                    Dengan Anda mendaftarkan diri pada website ini, Anda secara otomatis menyetujui serta mengikuti syarat dan ketentuan yang berlaku. Berikut <a href="#">Syarat dan Ketentuan</a> 
                </p>
                
                <br>
                
                <div class="row d-flex justify-content-around">
                    {{-- card verifikasi --}}
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-primary">
                            <div class="inner">
                                <p class="mt-3">Mendaftar di</p>
                                <h4>
                                    @if (Auth::user()->status == 1)
                                        TK ANANDA UT
                                    @elseif (Auth::user()->status == 2)
                                        SD DHARMA <br> KARYA UT
                                    @elseif (Auth::user()->status == 3)
                                        SMP DHARMA <br> KARYA UT
                                    @elseif (Auth::user()->status == 4)
                                        SMA DHARMA <br> KARYA UT
                                    @else
                                        mana ?
                                    @endif
                                </h4>
                            </div>
                            <div class="icon">
                                <i class="fas fa-school"></i>
                            </div>
                            <a href="#" class="small-box-footer">
                                @if (Auth::user()->status == 0)
                                    <i class="fas fa-times my-1"></i>
                                @else
                                    <i class="fas fa-check my-1"></i>
                                @endif
                            </a>
                        </div>
                    </div>

                    {{-- card verifikasi --}}
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-info">
                            <div class="inner">
                                <p class="mt-3">Status Verifikasi Formulir</p>
                                <h4>
                                    @if (Auth::user()->is_data_verified == 0)
                                        Belum Ada Data
                                    @elseif (Auth::user()->is_data_verified == 1)
                                        Dalam Antrian
                                    @elseif (Auth::user()->is_data_verified == 2)
                                        Terverifikasi
                                    @elseif (Auth::user()->is_data_verified == 3)
                                        Ada Data yang Salah
                                    @endif
                                </h4>
                            </div>
                            <div class="icon">
                                <i class="fas fa-list"></i>
                            </div>
                            <a href="#" class="small-box-footer">
                                <a href="#" class="small-box-footer">
                                    @if (Auth::user()->is_data_verified == 0 || Auth::user()->is_data_verified == 3)
                                        <i class="fas fa-times my-1"></i>
                                    @elseif (Auth::user()->is_data_verified == 1)
                                        <i class="fas fa-clock my-1"></i>
                                    @else
                                        <i class="fas fa-check my-1"></i>
                                    @endif
                                </a>
                            </a>
                        </div>
                    </div>

                    {{-- card verifikasi --}}
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <p class="mt-3">Status Pembayaran Biaya</p>
                                <h4>
                                    @if (Auth::user()->billing != null  )
                                        @if (Auth::user()->billing->status_bayar != null)
                                            sudah
                                        @else
                                            Belum
                                        @endif
                                    @else
                                        Belum
                                    @endif
                                </h4>
                            </div>
                            <div class="icon">
                                <i class="fas fa-list"></i>
                            </div>
                            <a href="#" class="small-box-footer">
                                @if (Auth::user()->billing != null  )
                                    @if (Auth::user()->billing->status_bayar != null)
                                        <i class="fas fa-check my-1"></i>
                                    @else
                                        <i class="fas fa-times my-1"></i>
                                    @endif
                                @else
                                    <i class="fas fa-times my-1"></i>
                                @endif
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">

            {{-- content card --}}
            <div class="col-sm-7 col-md-8">
                <div class="card" style="height: 20rem">
                    <div class="card-header">
                        <h5>Inbox Masuk</h5>
                    </div>
                    <div class="card-body">
                        @if(DB::table('pesans')->where('to', '=', $id))
                        <table class="table table-bordered">
                            <thead class="thead-light">
                                <tr>
                                    <th>Dari</th>
                                    <th>Kepada</th>
                                    <th>Isi Pesan</th>
                                    <th>Tgl</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($pesan as $pesan)
                                <tr>
                                    <td>{{ $pesan->from }}</td>
                                    <td>{{ $pesan->to }}</td>
                                    <td>{{ $pesan->isi }}</td>
                                    <td>{{ $pesan->created_at }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @endif
                    </div>
                </div>
            </div>

            {{-- sidebar --}}
            <div class="col-sm col-md">
                <div class="card" style="height: 20rem">
                    <div class="card-header">
                        <h5>Pesan dan Bantuan</h5>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" value="{{ old('name') }}"
                                    placeholder="Nama" />
                            </div>
                            <div class="form-group">
                                <textarea name="message" class="form-control" placeholder="Masukkan pesan"></textarea>
                            </div>
                            <div class="form-group d-flex justify-content-end">
                                <button type="submit" name="send" class="btn btn-primary" value="Send">Kirim</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
