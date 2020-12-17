@extends('admin.layouts.app')

@section('header.content')
<h2 class="text-center mt-3">Daftar Calon Peserta Didik SMA Dharma Karya</h2>
@endsection

@section('main.content')
<div class="card">
    <div class="card-body">
            <div class="card-title">
                <div class="d-flex mt-5">
                <div style="margin-right: 350px">
                    <form class="form-inline my-2 my-lg-0" action="{{ route('admin.page') }}" method="GET" role="search">
                    <input class="form-control mr-sm-2" type="search" name="search" placeholder="Cari Peserta Didik" aria-label="Search">
                    <button class="btn btn-outline-dark my-2 my-sm-0" type="submit"><i class="fas fa-search mr-1"></i>Cari</button>
                    </form>
                </div>
                {{-- <div class="d-flex justify-content-center">
                    <div>
                    <button type="button" class="btn btn-outline-danger mr-3" data-toggle="modal" data-target="#importExcel"><i class="fas fa-file-import mr-1"></i>
                        Import Data Siswa
                    </button>
                
                    <!-- Import Excel -->
                    <div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                        <form method="post" action="/peserta-didik/import/" enctype="multipart/form-data">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
                            </div>
                            <div class="modal-body">
                
                                {{ csrf_field() }}
                
                                <label>Pilih file excel</label>
                                <div class="form-group">
                                <input type="file" name="file" required="required">
                                </div>
                
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-outline-primary">Import</button>
                            </div>
                            </div>
                        </form>
                        </div>
                    </div>
                    </div>
                    <div>  
                    <a href="peserta-didik/export/" class="btn btn-outline-success mr-3"><i class="fas fa-file-import mr-1 fa-flip-horizontal"></i>Export Data</a>
                    </div>  
                    <div>
                    <a href="/peserta-didik/create" class="btn btn-outline-primary"><i class="fas fa-plus-circle mr-1"></i>Tambah Data</a>
                    </div>
                </div> --}}
                </div>
            </div>
            </div>
            <div class="card-body">
            <table class="table text-center">
                <thead>
                <tr>
                    <th scope="col">ID Registrasi</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">jenis Kelamin</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Data Terverifikasi</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($calon_siswa_tks as $pesertadidik)
                    <tr>
                    <td>{{ $pesertadidik->user->no_registrasi }}</td>
                    <td>{{ $pesertadidik->nama_pd }}</td>
                    <td>{{ $pesertadidik->jenis_kelamin }}</td>
                    <td>{{ $pesertadidik->alamat_pd }}</td>
                    <td>
                        @if ($pesertadidik->user->is_data_verified == 1)
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModalLong">
                                Belum Terverifikasi
                            </button>
                        @elseif($pesertadidik->user->is_data_verified == 2)
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalLong">
                            Terverifikasi
                            </button>
                        @elseif($pesertadidik->user->is_data_verified == 3)
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalLong">
                            Kesalahan data
                            </button>
                        @endif
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">{{ $pesertadidik->nama_pd }}</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body" style="font-size:1rem">
                                        <div class="mt-2 text-left"><b><h5>IDENTITAS ANAK</h5></b>
                                        
                                        <div class="row">
                                            <div class="col-sm-3 ml-3 text-left">Nama Lengkap</div>
                                            <div class="col-sm-8 text-left">: {{ $pesertadidik->nama_pd }}</div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-sm-3 ml-3 text-left">Nama Panggilan</div>
                                            <div class="col-sm-8 text-left">: {{ $pesertadidik->nama }}</div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-sm-3 ml-3 text-left">Jenis Kelamin</div>
                                            <div class="col-sm-8 text-left">: {{ $pesertadidik->jenis_kelamin }}</div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-3 ml-3 text-left">Tempat, Tanggal Lahir</div>
                                            <div class="col-sm-8 text-left">: {{ $pesertadidik->ttl }}</div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-3 ml-3 text-left">Agama</div>
                                            <div class="col-sm-8 text-left">: {{ $pesertadidik->agama }}</div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-sm-3 ml-3 text-left">Kewarga-negaraan</div>
                                            <div class="col-sm-8 text-left">: {{ $pesertadidik->kewarganegaraan }}</div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-sm-3 ml-3 text-left">Anak Ke</div>
                                            <div class="col-sm-8 text-left">: {{ $pesertadidik->anak_ke }}</div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-3 ml-3 text-left">Banyak Saudara Kandung (satu Ibu)</div>
                                            <div class="col-sm-8 text-left">: {{ $pesertadidik->banyak_saudara_ibu }}</div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-sm-3 ml-3 text-left">Banyak Saudara Tiri</div>
                                            <div class="col-sm-8 text-left">: {{ $pesertadidik->banyak_saudara_tiri }}</div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-sm-3 ml-3 text-left">Banyak Saudara Angkat</div>
                                            <div class="col-sm-8 text-left">: {{ $pesertadidik->banyak_saudara_angkat }}</div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-sm-3 ml-3 text-left">Bahasa Sehar-hari</div>
                                            <div class="col-sm-8 text-left">: {{ $pesertadidik->bahasa }}</div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-sm-3 ml-3 text-left">Berat Badan (Kg)</div>
                                            <div class="col-sm-8 text-left">: {{ $pesertadidik->berat }}</div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-sm-3 ml-3 text-left">Tinggi Badan (Cm)</div>
                                            <div class="col-sm-8 text-left">: {{ $pesertadidik->tinggi }}</div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-sm-3 ml-3 text-left">Golongan Darah</div>
                                            <div class="col-sm-8 text-left">: {{ $pesertadidik->golongan_darah }}</div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-sm-3 ml-3 text-left">Penyakit yang pernah dialami</div>
                                            <div class="col-sm-8 text-left">: {{ $pesertadidik->penyakit }}</div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-sm-3 ml-3 text-left">Alamat</div>
                                            <div class="col-sm-8 text-left">: {{ $pesertadidik->alamat_pd }}</div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-sm-3 ml-3 text-left">Nomor Telepon</div>
                                            <div class="col-sm-8 text-left">: {{ $pesertadidik->nomor_pd }}</div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-sm-3 ml-3 text-left">Tempat Tinggal</div>
                                            <div class="col-sm-8 text-left">: {{ $pesertadidik->tempat_tinggal }}</div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-sm-3 ml-3 text-left">Kegemaran/Hobi</div>
                                            <div class="col-sm-8 text-left">: {{ $pesertadidik->hobi }}</div>
                                        </div>
                                        
                                        <div class="mt-2 text-left"><b><h5>DATA ORANGTUA/WALI</h5></b>
                                            
                                            <div class="mt-2 text-left"><b><h6>AYAH</h6></b>
                                                <div class="row">
                                                    <div class="col-sm-3 ml-3 text-left">Nama</div>
                                                    <div class="col-sm-8 text-left">: {{ $pesertadidik->nama_ayah }}</div>
                                                </div>
                                                
                                                <div class="row">
                                                    <div class="col-sm-3 ml-3 text-left">Tempat Tanggal Lahir</div>
                                                    <div class="col-sm-8 text-left">: {{ $pesertadidik->ttl_ayah }}</div>
                                                </div>
                                                
                                                <div class="row">
                                                    <div class="col-sm-3 ml-3 text-left">Agama</div>
                                                    <div class="col-sm-8 text-left">: {{ $pesertadidik->agama_ayah }}</div>
                                                </div>
                                                
                                                <div class="row">
                                                    <div class="col-sm-3 ml-3 text-left">Kewarga-negaraan</div>
                                                    <div class="col-sm-8 text-left">: {{ $pesertadidik->kewarganegaraan_ayah }}</div>
                                                </div>
                                                
                                                <div class="row">
                                                    <div class="col-sm-3 ml-3 text-left">Pendidikan Tertinggi</div>
                                                    <div class="col-sm-8 text-left">: {{ $pesertadidik->pendidikan_ayah }}</div>
                                                </div>
                                                
                                                <div class="row">
                                                    <div class="col-sm-3 ml-3 text-left">Pekerjaan</div>
                                                    <div class="col-sm-8 text-left">: {{ $pesertadidik->pekerjaan_ayah }}</div>
                                                </div>
                                            </div>

                                            
                                            <div class="mt-2 text-left"><b><h6>IBU</h6></b>
                                                <div class="row">
                                                    <div class="col-sm-3 ml-3 text-left">Nama</div>
                                                    <div class="col-sm-8 text-left">: {{ $pesertadidik->nama_ibu }}</div>
                                                </div>
                                                
                                                <div class="row">
                                                    <div class="col-sm-3 ml-3 text-left">Tempat Tanggal Lahir</div>
                                                    <div class="col-sm-8 text-left">: {{ $pesertadidik->ttl_ibu }}</div>
                                                </div>
                                                
                                                <div class="row">
                                                    <div class="col-sm-3 ml-3 text-left">Agama</div>
                                                    <div class="col-sm-8 text-left">: {{ $pesertadidik->agama_ibu }}</div>
                                                </div>
                                                
                                                <div class="row">
                                                    <div class="col-sm-3 ml-3 text-left">Kewarga-negaraan</div>
                                                    <div class="col-sm-8 text-left">: {{ $pesertadidik->kewarganegaraan_ibu }}</div>
                                                </div>
                                                
                                                <div class="row">
                                                    <div class="col-sm-3 ml-3 text-left">Pendidikan Tertinggi</div>
                                                    <div class="col-sm-8 text-left">: {{ $pesertadidik->pendidikan_ibu }}</div>
                                                </div>
                                                
                                                <div class="row">
                                                    <div class="col-sm-3 ml-3 text-left">Pekerjaan</div>
                                                    <div class="col-sm-8 text-left">: {{ $pesertadidik->pekerjaan_ibu }}</div>
                                                </div>
                                            </div>

                                            @if ($pesertadidik->nama_wali)
                                                
                                            <div class="mt-2 text-left"><b><h6>WALI</h6></b>
                                                <div class="row">
                                                    <div class="col-sm-3 ml-3 text-left">Nama</div>
                                                    <div class="col-sm-8 text-left">: {{ $pesertadidik->nama_wali }}</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-3 ml-3 text-left">Tempat Tanggal Lahir</div>
                                                    <div class="col-sm-8 text-left">: {{ $pesertadidik->ttl_wali }}</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-3 ml-3 text-left">Agama</div>
                                                    <div class="col-sm-8 text-left">: {{ $pesertadidik->agama_wali }}</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-3 ml-3 text-left">Kewarga-negaraan</div>
                                                    <div class="col-sm-8 text-left">: {{ $pesertadidik->kewarganegaraan_wali }}</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-3 ml-3 text-left">Pendidikan Tertinggi</div>
                                                    <div class="col-sm-8 text-left">: {{ $pesertadidik->pendidikan_wali }}</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-3 ml-3 text-left">Pekerjaan</div>
                                                    <div class="col-sm-8 text-left">: {{ $pesertadidik->pekerjaan_wali }}</div>
                                                </div>
                                            @endif

                                        </div>
                                        <div class="mt-2 text-left"><b><h5>DOKUMEN</h5></b>
                                        <div class="row mb-3">
                                            <div class="col-sm-3 ml-3 text-left">Scan Akta Kelahiran</div>
                                            <img src="{{ asset('dokumen/tk/' . $pesertadidik->scan_akta) }}" alt="" class="mx-auto">
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-3 ml-3 text-left">Scan Kartu Keluarga</div>
                                            <img src="{{ asset('dokumen/tk/' . $pesertadidik->scan_kk) }}" alt="" class="mx-auto">
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-3 ml-3 text-left">Scan KTP Orangtua</div>
                                            <img src="{{ asset('dokumen/tk/' . $pesertadidik->scan_ktp_ortu) }}" alt="" class="mx-auto">
                                        </div>
                                        </div>
                                    <div class="modal-footer">
                                        <form action="/admin/tk/verifikasi-data/{{ $pesertadidik->user->id }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <select name="is_data_verified" id="is_data_verified">    
                                                <option @if($pesertadidik->user->is_data_verified == 1) selected @endif value=1>Belum terverifikas</option>
                                                <option @if($pesertadidik->user->is_data_verified == 2) selected @endif value=2>Terverifikas</option>
                                                <option @if($pesertadidik->user->is_data_verified == 3) selected @endif value=3>Data salah</option>
                                        </select>
                                        <button type="button submit" class="btn btn-primary">Save changes</button>
                                        </form>
                                    </div>
                                </div>
                                </div>
                            </div>
                    </td>
                    <td class="text-center">
                    @endforeach
                    </td>
                    </tr>
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {{ $calon_siswa_tks->links() }}
            </div>
        </div>
    </div>
</div>
@endsection