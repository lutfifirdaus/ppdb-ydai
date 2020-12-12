@extends('layouts.app')

@section('content')
    <div class="row d-flex">
        <div class="col-2 border-right">

        </div>
        <div class="col-10">
            <div>
                <h1 class="text-center">Alur Pendaftaran</h1>
                <hr>
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-3 col-2">
                        <div class="small-box bg-primary">
                            <!-- small card -->
                            <br>
                            <div class="inner">
                                <p>Memilih Sekolah</p>
                            </div>
                            <br>
                            <div class="icon">
                                <i class="fas fa-school"></i>
                            </div>
                            @if (!Auth::user()->status)
                                <a class="small-box-footer">
                                        Belum <i class="fas fa-times"></i>
                                </a>
                            @else
                                <a class="small-box-footer">
                                    Sudah <i class="fas fa-check-circle"></i>
                                </a>
                            @endif
                        </div>
                    </div>
                    <div class="col-1 my-auto">
                        <i class="fas fa-arrow-right fa-4x"></i>
                    </div>
                    <div class="col-lg-3 col-2">
                        <div class="small-box bg-warning">
                            <!-- small card -->
                            <br>
                            <div class="inner">
                                <p>Mengisi Formulir <br> Pendaftaran</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-list"></i>
                            </div>
                            @if (Auth::user()->is_data_verified != 0)    
                                <a href="#" class="small-box-footer">
                                    Sudah <i class="fas fa-check-circle"></i>
                                </a>
                            @else
                                <a href="{{ route('calon.sd.buat') }}" class="small-box-footer">
                                    Belum <i class="fas fa-times"></i>
                                </a>
                            @endif
                        </div>
                    </div>
                    <div class="col-1 my-auto">
                        <i class="fas fa-arrow-right fa-4x"></i>
                    </div>
                    <div class="col-lg-3 col-2">
                        <div class="small-box bg-danger">
                            <!-- small card -->
                            <br>
                            <div class="inner">
                                <p>Data Formulir <br> Diverifikasi Oleh Panitia</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-check"></i>
                            </div>
                            @if (Auth::user()->is_data_verified == 0)
                                <a class="small-box-footer">
                                    Belum <i class="fas fa-times"></i>
                                </a>
                            @elseif(Auth::user()->is_data_verified == 1)
                                <a class="small-box-footer">
                                    Dalam antrian <i class="fas fa-list"></i>
                                </a>
                            @elseif(Auth::user()->is_data_verified == 2)
                                <a class="small-box-footer">
                                    Ada yang salah <i class="fas fa-times"></i>
                                </a>
                            @elseif(Auth::user()->is_data_verified == 3)
                                <a class="small-box-footer">
                                    Sudah <i class="fas fa-check-circle"></i>
                                </a>
                            @endif
                        </div>
                    </div>  
                </div>
                <div class="col-2 ml-auto mb-3">
                    <i class="fas fa-arrow-down fa-4x"></i>
                </div>
                <div class="row d-flex flex-row-reverse justify-content-center">
                    <div class="col-lg-3 col-2">
                        <div class="small-box bg-primary">
                            <!-- small card -->
                            <br>
                            <div class="inner">
                                <p>Mengambil Nomor <br> Pembayaran</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-file-invoice"></i>
                            </div>
                            @if (!Auth::user()->status)
                                <a class="small-box-footer">
                                        Belum <i class="fas fa-times"></i>
                                </a>
                            @else
                                <a class="small-box-footer">
                                    Sudah <i class="fas fa-check-circle"></i>
                                </a>
                            @endif
                        </div>
                    </div>
                    <div class="col-1 my-auto">
                        <i class="fas fa-arrow-left fa-4x"></i>
                    </div>
                    <div class="col-lg-3 col-2">
                        <div class="small-box bg-danger">
                            <!-- small card -->
                            <br>
                            <div class="inner">
                                <p>Pembayaran <br> diverifikasi oleh Panitia</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-check"></i>
                            </div>
                            @if (!Auth::user()->is_bayar)
                                <a href="{{ route('calon.sd.buat') }}" class="small-box-footer">
                                    Belum <i class="fas fa-times"></i>
                                </a>
                            @else
                                <a href="#" class="small-box-footer">
                                    Sudah <i class="fas fa-check-circle"></i>
                                </a>
                            @endif
                        </div>
                    </div>
                    <div class="col-1 my-auto">
                        <i class="fas fa-arrow-left fa-4x"></i>
                    </div>
                    <div class="col-lg-3 col-2">
                        <div class="small-box bg-warning">
                            <!-- small card -->
                            <br>
                            <div class="inner">
                                <p>Melakukan Daftar ulang</p>
                            </div>
                            <br>
                            <div class="icon">
                                <i class="fas fa-user-graduate"></i>
                            </div>
                            @if (!Auth::user()->is_data_verified)
                                <a href="" class="small-box-footer">
                                    Belum <i class="fas fa-times"></i>
                                </a>
                            @else
                                <a href="#" class="small-box-footer">
                                    Sudah <i class="fas fa-check-circle"></i>
                                </a>
                            @endif
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
@endsection