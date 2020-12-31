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
                @foreach ($calon_siswa_smps as $pesertadidik)
                @if($pesertadidik->user->is_data_verified == 3)
                <tr>
                    <td>{{ $pesertadidik->user->no_registrasi }}</td>
                    <td>{{ $pesertadidik->nama_pd }}</td>
                    <td>{{ $pesertadidik->jenis_kelamin }}</td>
                    <td>{{ $pesertadidik->alamat_pd }}</td>
                    <td>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalLong">
                        Kesalahan data
                        </button>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                <div class="modal-dialog modal-xl" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">{{ $pesertadidik->nama_pd }}</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body" style="font-size:1rem">
                                        <div class="row text-left">
                                            <div class="col-md-6">
                                                
                                                <div class="mb-3 ml-3"><b><h4>IDENTITAS ANAK</h4></b>
                                            
                                                    <div class="row">
                                                        <div class="col-md-4">Nama Lengkap</div>
                                                        <div class="col-md-8">{{ $pesertadidik->nama_pd }} </div>
                                                    </div>
                    
                                                    <div class="row">
                                                        <div class="col-md-4">Nama Panggilan</div>
                                                        <div class="col-md-8">{{ $pesertadidik->nama }} </div>
                                                    </div>
                    
                                                    <div class="row">
                                                        <div class="col-md-4">Jenis Kelamin</div>
                                                        <div class="col-md-8">{{ $pesertadidik->jenis_kelamin }}</div>
                    
                                                    </div>
                    
                                                    <div class="row">
                                                        <div class="col-md-4">Tempat, Tanggal Lahir</div>
                                                        <div class="col-md-8">{{ $pesertadidik->tempat_lahir }},{{ $pesertadidik->tanggal_lahir }}</div>
                                                    </div>
                    
                                                    <div class="row">
                                                        <div class="col-md-4">Agama</div>
                                                        <div class="col-md-8">{{ $pesertadidik->agama }}</div>
                                                    </div>
                    
                                                    <div class="row">
                                                        <div class="col-md-4">Kewarganegaraan</div>
                                                        <div class="col-md-8">{{ $pesertadidik->kewarganegaraan }} </div>
                                                    </div>
                    
                                                    <div class="row">
                                                        <div class="col-md-4">Anak Ke</div>
                                                        <div class="col-md-8">{{ $pesertadidik->anak_ke }} </div>
                                                    </div>
                                                    
                                                    <div class="row">
                                                        <div class="col-md-4">Banyak Saudara Kandung</div>
                                                        <div class="col-md-8">{{ $pesertadidik->banyak_saudara_ibu }} </div>
                                                        
                                                    </div>
                                                    
                                                    <div class="row">
                                                        <div class="col-md-4">Banyak Saudara Tiri</div>
                                                        <div class="col-md-8">{{ $pesertadidik->banyak_saudara_tiri }} </div>
                                                        
                                                    </div>
                                                    
                                                    <div class="row">
                                                        <div class="col-md-4">Banyak Saudara Angkat</div>
                                                        <div class="col-md-8">{{ $pesertadidik->banyak_saudara_angkat }} </div>
                                                        
                                                    </div>
                    
                                                    <div class="row">
                                                        <div class="col-md-4">Bahasa sehari-hari</div>
                                                        <div class="col-md-8">{{ $pesertadidik->bahasa }} </div>
                                                        
                                                    </div>
                    
                                                    <div class="row">
                                                        <div class="col-md-4">Berat Badan</div>
                                                        <div class="col-md-8">{{ $pesertadidik->berat }} Kg</div>
                                                    </div>
                    
                                                    <div class="row">
                                                        <div class="col-md-4">Tinggi Badan</div>
                                                        <div class="col-md-8">{{ $pesertadidik->tinggi }} Cm</div>
                                                    </div>
                    
                                                    <div class="row">
                                                        <div class="col-md-4">Golongan Darah</div>
                                                        <div class="col-md-8">{{ $pesertadidik->golongan_darah }}</div>
                    
                                                    </div>
                    
                                                    <div class="row">
                                                        <div class="col-md-4">Penyakit yang Pernah Diderita</div>
                                                        <div class="col-md-8">{{ $pesertadidik->penyakit }} </div>
                                                    </div>
                                                    
                                                    <div class="row">
                                                        <div class="col-md-4">Alamat</div>
                                                        <div class="col-md-8">{{ $pesertadidik->alamat_pd }},{{ $pesertadidik->kecamatan_pd }},{{ $pesertadidik->kabupaten_pd }},{{ $pesertadidik->provinsi_pd }}</div>
                    
                                                    </div>
                                                    
                                                    <div class="row">
                                                        <div class="col-md-4">Nomor Telepon</div>
                                                        <div class="col-md-8">{{ $pesertadidik->telp_pd }} </div>
                                                    </div>
                    
                                                    <div class="row">
                                                        <div class="col-md-4">Bertempat Tinggal Pada</div>
                                                        <div class="col-md-8">{{ $pesertadidik->tempat_tinggal }}</div>
                                                    </div>
                    
                                                    <div class="row">
                                                        <div class="col-md-4">Kegemaran/Hobi</div>
                                                        <div class="col-md-8">{{ $pesertadidik->hobi }} </div>
                                                    </div>
                                                </div>
            
                                                
                                                <div class="mb-3 ml-3"><b><h4>LAIN-LAIN</h4></b>
                                                    <div class="row">
                                                        <div class="col-md-4">Penghasilan/Gaji Bapak dan Ibu Perbulan</div>
                                                        <div class="col-md-8">{{ $pesertadidik->gaji_perbulan }}</div>
                                                    </div>
                    
                                                    <div class="row">
                                                        <div class="col-md-4">Menggunakan Jasa Antar Jemput</div>
                                                        <div class="col-md-8">{{ $pesertadidik->jemputan }}</div>
                                                    </div>
                    
                                                    <div class="row">
                                                        <div class="col-md-4">Email yang dapat dihubungi</div>
                                                        <div class="col-md-8">{{ $pesertadidik->email }} </div>
                                                    </div>
                                                </div>
                                            </div>
                                        
                                            <div class="col-md-6">
            
                                                <div class="mb-3 ml-3"><b><h4>DATA ORANG TUA/WALI</h4></b>
                                                
                                                    <div class="mt-3 ml-3"><b><h5>AYAH</h5></b></div>
                                                            
                                                    <div class="row">
                                                        <div class="col-md-4">Nama Lengkap</div>
                                                        <div class="col-md-8">{{ $pesertadidik->nama_ayah }}</div>
                                                    </div>
                                                    
                                                    <div class="row">
                                                        <div class="col-md-4">Tempat, Tanggal Lahir </div>
                                                        <div class="row p-2">
                                                            <div class="col-md-8">{{ $pesertadidik->tempat_lahir_ayah }},{{ $pesertadidik->tanggal_lahir_ayah }} </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="row">
                                                        
                                                        <div class="col-md-4">Agama</div>
                                                        <div class="col-md-8">{{ $pesertadidik->agama }}</div>
                                                        
                                                    </div>
                                                    
                                                    <div class="row">
                                                        <div class="col-md-4">Kewarganegaraan</div>
                                                        <div class="col-md-8">{{ $pesertadidik->kewarganegaraan_ayah }} </div>
                                                    </div>
                                                    
                                                    <div class="row">
                                                        <div class="col-md-4">Pendidikan Tertinggi</div>
                                                        <div class="col-md-8">{{ $pesertadidik->pendidikan_ayah }} </div>
                                                    </div>
                                                    
                                                    <div class="row">
                                                        <div class="col-md-4">Pekerjaan</div>
                                                        <div class="col-md-8">{{ $pesertadidik->pekerjaan_ayah }}</div>
                                                    </div>
                                                            
                                                    <div class="mt-3 ml-3"><b><h5>IBU</h5></b></div>
                                                            
                                                    <div class="row">
                                                        <div class="col-md-4">Nama Lengkap</div>
                                                        <div class="col-md-8">{{ $pesertadidik->nama_ibu }}</div>
                                                        
                                                    </div>
                                                    
                                                    <div class="row">
                                                        <div class="col-md-4">Tempat, Tanggal Lahir </div>
                                                        <div class="row p-2">
                                                            <div class="col-md-8">{{ $pesertadidik->tempat_lahir_ibu }},{{ $pesertadidik->tanggal_lahir_ibu }} </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="row">
                                                        
                                                        <div class="col-md-4">Agama</div>
                                                        <div class="col-md-8">{{ $pesertadidik->agama }}</div>
                                                        
                                                    </div>
                                                    
                                                    <div class="row">
                                                        <div class="col-md-4">Kewarganegaraan</div>
                                                        <div class="col-md-8">{{ $pesertadidik->kewarganegaraan_ibu }} </div>
                                                    </div>
                                                    
                                                    <div class="row">
                                                        <div class="col-md-4">Pendidikan Tertinggi</div>
                                                        <div class="col-md-8">{{ $pesertadidik->pendidikan_ibu }} </div>
                                                    </div>
                                                    
                                                    <div class="row">
                                                        <div class="col-md-4">Pekerjaan</div>
                                                        <div class="col-md-8">{{ $pesertadidik->pekerjaan_ }}
                                                        </div>
                                                    </div>

                                                    <div class="mt-3 ml-3"><b><h5>WALI</h5></b></div>
                                                            
                                                    <div class="row">
                                                        <div class="col-md-4">Nama Lengkap</div>
                                                        <div class="col-md-8">{{ $pesertadidik->nama_wali }}</div>
                                                        
                                                    </div>
                                                    
                                                    <div class="row">
                                                        <div class="col-md-4">Tempat, Tanggal Lahir </div>
                                                        <div class="row p-2">
                                                            <div class="col-md-8">{{ $pesertadidik->tempat_lahir_wali }},{{ $pesertadidik->tanggal_lahir_wali }} </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="row">
                                                        
                                                        <div class="col-md-4">Agama</div>
                                                        <div class="col-md-8">{{ $pesertadidik->agama }}</div>
                                                        
                                                    </div>
                                                    
                                                    <div class="row">
                                                        <div class="col-md-4">Kewarganegaraan</div>
                                                        <div class="col-md-8">{{ $pesertadidik->kewarganegaraan_wali }} </div>
                                                    </div>
                                                    
                                                    <div class="row">
                                                        <div class="col-md-4">Pendidikan Tertinggi</div>
                                                        <div class="col-md-8">{{ $pesertadidik->pendidikan_wali }} </div>
                                                    </div>
                                                    
                                                    <div class="row">
                                                        <div class="col-md-4">Pekerjaan</div>
                                                        <div class="col-md-8">{{ $pesertadidik->pekerjaan_ }}
                                                        </div>
                                                    </div>
                                                </div>
            
                                            </div>
                                        </div>
                                        
                                        <div class="mb-3 ml-3 text-center"><b><h4>DOKUMEN</h4></b>
                                            
                                            <div class="text-left">Scan Akta Kelahiran</div>
                                            <img class="d-flex mx-auto mb-3" src="{{ asset('dokumen/smp/' . $pesertadidik->scan_akta) }}" alt="{{ $pesertadidik->scan_akta }}">
                                        
                                            <div class="text-left">Scan Kartu Keluarga</div>
                                            <img class="d-flex mx-auto mb-3" src="{{ asset('dokumen/smp/' . $pesertadidik->scan_kk) }}" alt="{{ $pesertadidik->scan_kk }}">
                                        
                                            <div class="text-left">Scan KTP Orangtua</div>
                                            <img class="d-flex mx-auto mb-3" src="{{ asset('dokumen/smp/' . $pesertadidik->scan_ktp_ortu) }}" alt="{{ $pesertadidik->scan_ktp_ortu }}">
                                            
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <form action="/admin/smp/verifikasi-data/{{ $pesertadidik->user->id }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <select name="is_data_verified" id="is_data_verified">    
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
                    </td>
                </tr>
                @endif
                @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
            {{ $calon_siswa_smps->links() }}
            </div>
        </div>
    </div>
</div>
@endsection