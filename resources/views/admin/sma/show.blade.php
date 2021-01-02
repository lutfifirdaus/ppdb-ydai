@extends('admin.layouts.app')

@section('header.content')
    <h2 class="text-center mt-3">Data {{ $pesertadidik->csTk->nama_pd }}</h2>
@endsection

@section('main.content')
<div class="card">
    <div class="card-body" style="font-size:1rem">
        <div class="row text-left p-3">
            <div class="col-md-6">
                
                <div class="mb-3 ml-3"><b><h4>IDENTITAS ANAK</h4></b>
            
                    <div class="row">
                        <div class="col-md-5 border">Nama Lengkap</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csTk->nama_pd }} </div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 border">Nama Panggilan</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csTk->nama }} </div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 border">Jenis Kelamin</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csTk->jenis_kelamin }}</div>

                    </div>

                    <div class="row">
                        <div class="col-md-5 border">Tempat, Tanggal Lahir</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csTk->tempat_lahir }},{{ $pesertadidik->csTk->tanggal_lahir }}</div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 border">Agama</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csTk->agama }}</div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 border">Kewarganegaraan</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csTk->kewarganegaraan }} </div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 border">Anak Ke</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csTk->anak_ke }} </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-5 border">Banyak Saudara Kandung</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csTk->banyak_saudara_ibu }} </div>
                        
                    </div>
                    
                    <div class="row">
                        <div class="col-md-5 border">Banyak Saudara Tiri</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csTk->banyak_saudara_tiri }} </div>
                        
                    </div>
                    
                    <div class="row">
                        <div class="col-md-5 border">Banyak Saudara Angkat</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csTk->banyak_saudara_angkat }} </div>
                        
                    </div>

                    <div class="row">
                        <div class="col-md-5 border">Bahasa sehari-hari</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csTk->bahasa }} </div>
                        
                    </div>

                    <div class="row">
                        <div class="col-md-5 border">Berat Badan</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csTk->berat }} Kg</div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 border">Tinggi Badan</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csTk->tinggi }} Cm</div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 border">Golongan Darah</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csTk->golongan_darah }}</div>

                    </div>

                    <div class="row">
                        <div class="col-md-5 border">Penyakit yang Pernah Diderita</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csTk->penyakit }} </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-5 border">Alamat</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csTk->alamat_pd }},{{ $pesertadidik->csTk->kecamatan_pd }},{{ $pesertadidik->csTk->kabupaten_pd }},{{ $pesertadidik->csTk->provinsi_pd }}</div>

                    </div>
                    
                    <div class="row">
                        <div class="col-md-5 border">Nomor Telepon</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csTk->telp_pd }} </div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 border">Bertempat Tinggal Pada</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csTk->tempat_tinggal }}</div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 border">Kegemaran/Hobi</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csTk->hobi }} </div>
                    </div>
                </div>

                
                <div class="mb-3 ml-3"><b><h4>LAIN-LAIN</h4></b>
                    <div class="row">
                        <div class="col-md-5 border">Penghasilan/Gaji Bapak dan Ibu Perbulan</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csTk->gaji_perbulan }}</div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 border">Menggunakan Jasa Antar Jemput</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csTk->jemputan }}</div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 border">Email yang dapat dihubungi</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csTk->email }} </div>
                    </div>
                </div>
            </div>
        
            <div class="col-md-6">

                <div class="mb-3 ml-3"><b><h4>DATA ORANG TUA/WALI</h4></b>
                
                    <div class="mt-3 ml-3"><b><h5>AYAH</h5></b></div>
                            
                    <div class="row">
                        <div class="col-md-5 border">Nama Lengkap</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csTk->nama_ayah }}</div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-5 border">Tempat, Tanggal Lahir </div>
                            <div class="col-md-7 border">{{ $pesertadidik->csTk->tempat_lahir_ayah }},{{ $pesertadidik->csTk->tanggal_lahir_ayah }} </div>
                    </div>
                    
                    <div class="row">
                        
                        <div class="col-md-5 border">Agama</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csTk->agama }}</div>
                        
                    </div>
                    
                    <div class="row">
                        <div class="col-md-5 border">Kewarganegaraan</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csTk->kewarganegaraan_ayah }} </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-5 border">Pendidikan Tertinggi</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csTk->pendidikan_ayah }} </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-5 border">Pekerjaan</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csTk->pekerjaan_ayah }}</div>
                    </div>
                            
                    <div class="mt-3 ml-3"><b><h5>IBU</h5></b></div>
                            
                    <div class="row">
                        <div class="col-md-5 border">Nama Lengkap</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csTk->nama_ibu }}</div>
                        
                    </div>
                    
                    <div class="row">
                        <div class="col-md-5 border">Tempat, Tanggal Lahir </div>
                            <div class="col-md-7 border">{{ $pesertadidik->csTk->tempat_lahir_ibu }},{{ $pesertadidik->csTk->tanggal_lahir_ibu }} </div>
                    </div>
                    
                    <div class="row">
                        
                        <div class="col-md-5 border">Agama</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csTk->agama }}</div>
                        
                    </div>
                    
                    <div class="row">
                        <div class="col-md-5 border">Kewarganegaraan</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csTk->kewarganegaraan_ibu }} </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-5 border">Pendidikan Tertinggi</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csTk->pendidikan_ibu }} </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-5 border">Pekerjaan</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csTk->pekerjaan_ibu }}
                        </div>
                    </div>

                    <div class="mt-3 ml-3"><b><h5>WALI</h5></b></div>
                            
                    <div class="row">
                        <div class="col-md-5 border">Nama Lengkap</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csTk->nama_wali }}</div>
                        
                    </div>
                    
                    <div class="row">
                        <div class="col-md-5 border">Tempat, Tanggal Lahir </div>
                            <div class="col-md-7 border">{{ $pesertadidik->csTk->tempat_lahir_wali }},{{ $pesertadidik->csTk->tanggal_lahir_wali }} </div>
                    </div>
                    
                    <div class="row">
                        
                        <div class="col-md-5 border">Agama</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csTk->agama }}</div>
                        
                    </div>
                    
                    <div class="row">
                        <div class="col-md-5 border">Kewarganegaraan</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csTk->kewarganegaraan_wali }} </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-5 border">Pendidikan Tertinggi</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csTk->pendidikan_wali }} </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-5 border">Pekerjaan</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csTk->pekerjaan_wali }}
                        </div>
                    </div>
                </div>

            </div>
        </div>
        
        <div class="mb-3 ml-3 text-center"><b><h4>DOKUMEN</h4></b>
            
            <div class="text-left">Scan Akta Kelahiran</div>
            <img class="d-flex mx-auto mb-3" src="{{ asset('dokumen/tk/' . $pesertadidik->csTk->scan_akta) }}" alt="{{ $pesertadidik->csTk->scan_akta }}">
        
            <div class="text-left">Scan Kartu Keluarga</div>
            <img class="d-flex mx-auto mb-3" src="{{ asset('dokumen/tk/' . $pesertadidik->csTk->scan_kk) }}" alt="{{ $pesertadidik->csTk->scan_kk }}">
        
            <div class="text-left">Scan KTP Orangtua</div>
            <img class="d-flex mx-auto mb-3" src="{{ asset('dokumen/tk/' . $pesertadidik->csTk->scan_ktp_ortu) }}" alt="{{ $pesertadidik->csTk->scan_ktp_ortu }}">
            
        </div>
    </div>
    <div class="card-footer">
        <form action="/admin/tk/verifikasi-data/{{ $pesertadidik->csTk->user->id }}" method="POST">
        @csrf
        @method('PUT')
            <div class="d-flex justify-content-around">
                <div class="form-group">
                    <label for="is_data_verified" class="form-label">Jika data telah valid maka pilih 'Terverifikas'. Jika ada yang salah maka pilih 'Data salah' dan berikan pesan kepada calon.</label>
                    <div class="row">
                        <select name="is_data_verified" id="is_data_verified" class="form-control col-4">    
                            <option @if($pesertadidik->csTk->user->is_data_verified == 1) selected @endif disabled value=1>Belum terverifikas</option>
                            <option @if($pesertadidik->csTk->user->is_data_verified == 2) selected @endif value=2>Terverifikas</option>
                            <option @if($pesertadidik->csTk->user->is_data_verified == 3) selected @endif value=3>Data salah</option>
                        </select>
                        <textarea rows="1" placeholder="Batas 300 huruf" name="isi" id="isi" class="form-control col-8"></textarea>
                        <input value="{{ $user->id }}" id="from" name="from" hidden>
                    </div>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection