@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-center mb-3">
        <h3>Formulir Pendaftaran Calon Peserta Didik</h3>
    </div>
    <div class="d-flex flex-column mt-3">
        <div class="col-md-auto">
            <div class="card mb-3">
                @if (Auth::user()->is_data_verified == 0)
                    <div class="card-body mt-3">
                        <div class="text-danger">
                            <h6>Perhatikan! Silahkan Anda isi formulir berikut sesuai dengan dengan data yang benar.</h6>
                        </div>
                        <br>
                        <form action="/calon/tk/store/{{ $user->id }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="number" name="is_data_verified" id="is_data_verified" hidden value=1>
                            
                            <div class="row">

                                <div class="col-6">

                                    <div class="mb-3 ml-3"><b><h4>IDENTITAS ANAK</h4></b>
                                
                                        <div class="form-group ml-3">
                                            <label for="nama_pd">Nama Lengkap</label>
                                                <input type="text" name="nama_pd" id="nama_pd" class="form-control @error('nama_pd') is-invalid @enderror" value="{{ old('nama_pd') }}">
                                            
                                                @error('nama_pd')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="nama">Nama Panggilan</label>
                                                <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}">
                                            
                                                @error('nama')
                                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                                @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="jenis_kelamin">Jenis Kelamin</label>
                                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control @error('jenis_kelamin') is-invalid @enderror">
                                                    <option selected disabled>Pilih salah satu</option>
                                                    <option value="Laki-laki" @if (old('jenis_kelamin')  == "Laki-laki") selected @endif>Laki-laki</option>
                                                    <option value="Perempuan" @if (old('jenis_kelamin')  == "Perempuan") selected @endif>Perempuan</option>
                                            </select>
                                            
                                            @error('jenis_kelamin')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="tempat_lahir">Tempat, Tanggal Lahir </label>
                                            <div class="row p-2">
                                                <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control col-md-7 @error('tempat_lahir') is-invalid @enderror" value="{{ old('tempat_lahir') }}">

                                                @error('tempat_lahir')
                                                    <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                @enderror

                                                <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control col-md-5 @error('tanggal_lahir') is-invalid @enderror" value="{{ old('tanggal_lahir') }}">

                                                @error('tanggal_lahir')
                                                    <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                @enderror
                                            </div>
                                        </div>
                                        
                                        <div class="form-group ml-3">
                                            <label for="agama">Agama</label>
                                            <select name="agama" id="agama" class="form-control @error('agama') is-invalid @enderror">
                                                    <option selected disabled>Pilih salah satu</option>
                                                    <option @if (old('agama') == 'Islam')  selected @endif value="Islam">Islam</option>
                                                    <option @if (old('agama') == 'Kristen')  selected @endif value="Kristen">Kristen</option>
                                                    <option @if (old('agama') == 'Katholik')  selected @endif value="Katholik">Katholik</option>
                                                    <option @if (old('agama') == 'Hindu')  selected @endif value="Hindu">Hindu</option>
                                                    <option @if (old('agama') == 'Buddha')  selected @endif value="Buddha">Buddha</option>
                                                    <option @if (old('agama') == 'Konghucu')  selected @endif value="Konghucu">Konghucu</option>
                                            </select>
                                            
                                            @error('agama')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="kewarganegaraan">Kewarganegaraan</label>
                                            <input type="text" name="kewarganegaraan" id="kewarganegaraan" class="form-control @error('kewarganegaraan') is-invalid @enderror" value="{{ old('kewarganegaraan') }}">
                                            
                                            @error('kewarganegaraan')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="anak_ke">Anak Ke</label>
                                            <input type="number" name="anak_ke" id="anak_ke" class="form-control @error('anak_ke') is-invalid @enderror" value="{{ old('anak_ke') }}">
                                            
                                            @error('anak_ke')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="banyak_saudara_ibu">Banyak Saudara Kandung</label>
                                            <input type="number" name="banyak_saudara_ibu" id="banyak_saudara_ibu" class="form-control @error('banyak_saudara_ibu') is-invalid @enderror" value="{{ old('banyak_saudara_ibu') }}">
                                            
                                            @error('banyak_saudara_ibu')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="banyak_saudara_tiri">Banyak Saudara Tiri</label>
                                            <input type="number" name="banyak_saudara_tiri" id="banyak_saudara_tiri" class="form-control @error('banyak_saudara_tiri') is-invalid @enderror" value="{{ old('banyak_saudara_tiri') }}">
                                            
                                            @error('banyak_saudara_tiri')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="banyak_saudara_angkat">Banyak Saudara Angkat</label>
                                            <input type="number" name="banyak_saudara_angkat" id="banyak_saudara_angkat" class="form-control @error('banyak_saudara_angkat') is-invalid @enderror" value="{{ old('banyak_saudara_angkat') }}">
                                            
                                            @error('banyak_saudara_angkat')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="bahasa">Bahasa sehari-hari</label>
                                            <input type="text" name="bahasa" id="bahasa" class="form-control @error('bahasa') is-invalid @enderror" value="{{ old('bahasa') }}">
                                            
                                            @error('bahasa')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="berat">Berat Badan</label>
                                            
                                            <div class="input-group-prepend  p-0">
                                                <input type="number" name="berat" id="berat" class="form-control @error('berat') is-invalid @enderror" value="{{ old('berat') }}">  
                                                <div class="input-group-text">Kg</div> 
                                            </div>

                                            @error('berat')
                                                <span class="invalid-feedback d-block" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="tinggi">Tinggi Badan</label>
                                            <div class="input-group-prepend  p-0">
                                                <input type="number" name="tinggi" id="tinggi" class="form-control @error('tinggi') is-invalid @enderror" value="{{ old('tinggi') }}">  
                                                <div class="input-group-text">Cm</div> 
                                            </div>   
                                            
                                            @error('tinggi')
                                                <span class="invalid-feedback d-block" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="golongan_darah">Golongan Darah</label>
                                            <select type="text" name="golongan_darah" id="golongan_darah" class="form-control @error('golongan_darah') is-invalid @enderror">
                                                <option selected disabled>Pilih salah satu</option>
                                                <option value="A" @if(old('golongan_darah') == 'A') selected @endif>A</option>
                                                <option value="B" @if(old('golongan_darah') == 'B') selected @endif>B</option>
                                                <option value="O" @if(old('golongan_darah') == 'O') selected @endif>O</option>
                                                <option value="AB" @if(old('golongan_darah') == 'AB') selected @endif>AB</option>
                                            </select>
                                            
                                            @error('golongan_darah')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="penyakit">Penyakit yang Pernah Diderita</label>
                                            <input type="text" name="penyakit" id="penyakit" class="form-control" value="{{ old('penyakit') }}" placeholder="Jika ada">
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="alamat_pd">Alamat</label>
                                            <input type="text" name="alamat_pd" id="alamat_pd" class="form-control" value="{{ old('alamat_pd') }}" placeholder="Jalan">

                                            @error('alamat_pd')
                                                <span class="invalid-feedback d-block" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                            <input type="text" name="kecamatan_pd" id="kecamatan_pd" class="form-control" value="{{ old('kecamatan_pd') }}" placeholder="Kecamatan">

                                            @error('kecamatan_pd')
                                                <span class="invalid-feedback d-block" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                            <input type="text" name="kabupaten_pd" id="kabupaten_pd" class="form-control" value="{{ old('kabupaten_pd') }}" placeholder="Kabupaten/Kota">

                                            @error('kabupaten_pd')
                                                <span class="invalid-feedback d-block" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                            <input type="text" name="provinsi_pd" id="provinsi_pd" class="form-control" value="{{ old('provinsi_pd') }}" placeholder="Provinsi">

                                            @error('provinsi_pd')
                                                <span class="invalid-feedback d-block" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="telp_pd">Nomor Telepon</label>
                                            <input type="number" name="telp_pd" id="telp_pd" class="form-control @error('telp_pd') is-invalid @enderror" value="{{ old('telp_pd') }}">
                                            
                                            @error('telp_pd')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="tempat_tinggal">Bertempat Tinggal Pada</label>
                                            <select name="tempat_tinggal" id="tempat_tinggal" class="form-control @error('tempat_tinggal') is-invalid @enderror" value="{{ old('tempat_tinggal') }}">
                                                <option selected disabled>Pilih Salah Satu</option>
                                                <option value="Orangtua" @if(old('tempat_tinggal')=="Orangtua")selected @endif>Orangtua</option>
                                                <option value="Menampung" @if(old('tempat_tinggal')=="Menampung")selected @endif>Menumpang</option>
                                                <option value="Asrama" @if(old('tempat_tinggal')=="Asrama")selected @endif>Asrama</option>
                                            </select>
                                            
                                            @error('tempat_tinggal')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="hobi">Kegemaran/Hobi</label>
                                            <input type="text" name="hobi" id="hobi" class="form-control @error('hobi') is-invalid @enderror" value="{{ old('hobi') }}">
                                            
                                            @error('hobi')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>

                                    </div>

                                    <div class="mb-3 ml-3"><b><h4>LAIN-LAIN</h4></b>

                                        <div class="form-group ml-3">
                                            <label for="gaji_perbulan">Penghasilan/Gaji Bapak dan Ibu Perbulan</label>
                                            <select name="gaji_perbulan" id="gaji_perbulan" class="form-control @error('gaji_perbulan') is-invalid @enderror">
                                                <option selected disabled>Pilih salah satu</option>
                                                <option value="1 s/d 5 Juta" @if(old('gaji_perbulan') =="1 s/d 5 Juta") selected @endif>1 s/d 5 Juta</option>
                                                <option value="1 s/d 5 Juta" @if(old('gaji_perbulan') == "1 s/d 5 Juta") selected @endif>1 s/d 5 Juta</option>
                                                <option value="10 Juta lebih" @if(old('gaji_perbulan') == "10 Juta lebih") selected @endif>10 Juta lebih</option>
                                            </select>
                                            
                                            @error('gaji_perbulan')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                    

                                        <div class="form-group ml-3">
                                            <label for="jemputan">Menggunakan Jasa Antar Jemput</label>
                                            <select name="jemputan" id="jemputan" class="form-control @error('jemputan') is-invalid @enderror">
                                                <option selected disabled>Pilih salah satu</option>
                                                <option @if(old('jemputan') == "mendaftar") selected @endif value="mendaftar">Kami mendaftarkan anak Kami untuk menggunakan jasa Antar Jemput Sekolah</option>
                                                <option @if(old('jemputan') == "tidak mendaftar") selected @endif value="tidak mendaftar">Kami tidak mendaftar anak Kami untuk menggunakan jasa Antar Jemput Sekolah</option>
                                            </select>
                                            
                                            @error('jemputan')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group ml-3">
                                            <label for="email">Email yang dapat dihubungi</label>
                                            <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
                                            
                                            @error('jemputan')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                </div>

                                <div class="col-6">

                                    <div class="mb-3 ml-3"><b><h4>DATA ORANG TUA/WALI</h4></b>

                                        <div class="mt-3 ml-3"><b><h5>AYAH</h5></b></div>
                                        
                                        <div class="form-group ml-3">
                                            <label for="nama_ayah">Nama Lengkap</label>
                                            <input type="text" name="nama_ayah" id="nama_ayah" class="form-control @error('nama_ayah') is-invalid @enderror" value="{{ old('nama_ayah') }}" placeholder="Tanpa gelar">
                                            
                                            @error('nama_ayah')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group ml-3">
                                            <label for="tempat_lahir_ayah">Tempat, Tanggal Lahir </label>
                                            <div class="row p-2">
                                                <input type="text" name="tempat_lahir_ayah" id="tempat_lahir_ayah" class="form-control col-md-7 @error('tempat_lahir_ayah') is-invalid @enderror" value="{{ old('tempat_lahir_ayah') }}">

                                                @error('tempat_lahir_ayah')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror

                                                <input type="date" name="tanggal_lahir_ayah" id="tanggal_lahir_ayah" class="form-control col-md-5 @error('tanggal_lahir_ayah') is-invalid @enderror" value="{{ old('tanggal_lahir_ayah') }}">

                                                @error('tanggal_lahir_ayah')
                                                    <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                @enderror
                                            </div>
                                        </div>
                                        
                                        <div class="form-group ml-3">
                                            
                                            <label for="agama_ayah">Agama</label>
                                            <select name="agama_ayah" id="agama_ayah" class="form-control @error('agama_ayah') is-invalid @enderror">
                                                    <option selected disabled>Pilih salah satu</option>
                                                    <option @if (old('agama_ayah') == 'Islam')  selected @endif value="Islam">Islam</option>
                                                    <option @if (old('agama_ayah') == 'Kristen')  selected @endif value="Kristen">Kristen</option>
                                                    <option @if (old('agama_ayah') == 'Katholik')  selected @endif value="Katholik">Katholik</option>
                                                    <option @if (old('agama_ayah') == 'Hindu')  selected @endif value="Hindu">Hindu</option>
                                                    <option @if (old('agama_ayah') == 'Buddha')  selected @endif value="Buddha">Buddha</option>
                                                    <option @if (old('agama_ayah') == 'Konghucu')  selected @endif value="Konghucu">Konghucu</option>
                                            </select>
                                            
                                            @error('agama_ayah')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group ml-3">
                                            <label for="kewarganegaraan_ayah">Kewarganegaraan</label>
                                            <input type="text" name="kewarganegaraan_ayah" id="kewarganegaraan_ayah" class="form-control @error('kewarganegaraan_ayah') is-invalid @enderror" value="{{ old('kewarganegaraan_ayah') }}">
                                            
                                            @error('kewarganegaraan_ayah')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group ml-3">
                                            <label for="pendidikan_ayah">Pendidikan Tertinggi</label>
                                            <input type="text" name="pendidikan_ayah" id="pendidikan_ayah" class="form-control @error('pendidikan_ayah') is-invalid @enderror" value="{{ old('pendidikan_ayah') }}">
                                            
                                            @error('pendidikan_ayah')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group ml-3">
                                            <label for="pekerjaan_ayah">Pekerjaan</label>
                                            <select name="pekerjaan_ayah" id="pekerjaan_ayah" class="form-control @error('pekerjaan_ayah') is-invalid @enderror">
                                                <option selected disabled>Pilih Salah Satu!</option>
                                                <option @if (old('pekerjaan_ayah') == 'ABRI')  selected @endif value="ABRI">ABRI</option>
                                                <option @if (old('pekerjaan_ayah') == 'Pegawai Negeri')  selected @endif  value="Pegawai Negeri">Pegawai Negeri</option>
                                                <option @if (old('pekerjaan_ayah') == 'Swasta')  selected @endif value="Swasta">Swasta</option>
                                                <option @if (old('pekerjaan_ayah') == 'Wirausaha')  selected @endif  value="Wirausaha">Wirausaha</option>
                                            </select>
                                            
                                            @error('pekerjaan_ayah')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror

                                            <input type="text" name="nip_gol_pangkat_ayah" id="nip_gol_pangkat_ayah" class="form-control @error('nip_gol_pangkat_ayah') is-invalid @enderror" value="{{ old('nip_gol_pangkat_ayah') }}" placeholder="NIP/Gol/Pangkat">

                                            @error('nip_gol_pangkat_ayah')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror

                                            <input type="text" name="nama_kantor_instansi_ayah" id="nama_kantor_instansi_ayah" class="form-control @error('nama_kantor_instansi_ayah') is-invalid @enderror" value="{{ old('nama_kantor_instansi_ayah') }}" placeholder="Nama Kantor/Instansi">

                                            @error('nama_kantor_instansi_ayah')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror

                                            <input type="text" name="alamat_kantor_no_telp_ayah" id="alamat_kantor_no_telp_ayah" class="form-control @error('alamat_kantor_no_telp_ayah') is-invalid @enderror" value="{{ old('alamat_kantor_no_telp_ayah') }}" placeholder="Alamat Kantor/No Telp">
                                            
                                            @error('alamat_kantor_no_telp_ayah')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="mt-3 ml-3"><b><h5>IBU</h5></b></div>
                                        
                                        <div class="form-group ml-3">
                                            <label for="nama_ibu">Nama Lengkap</label>
                                            <input type="text" name="nama_ibu" id="nama_ibu" class="form-control @error('nama_ibu') is-invalid @enderror" value="{{ old('nama_ibu') }}" placeholder="Tanpa gelar">
                                            
                                            @error('nama_ibu')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group ml-3">
                                            <label for="tempat_lahir_ibu">Tempat, Tanggal Lahir</label>
                                            <div class="row p-2">
                                                <input type="text" name="tempat_lahir_ibu" id="tempat_lahir_ibu" class="form-control col-md-7 @error('tempat_lahir_ibu') is-invalid @enderror" value="{{ old('tempat_lahir_ibu') }}">

                                                @error('tempat_lahir_ibu')
                                                    <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                @enderror

                                                <input type="date" name="tanggal_lahir_ibu" id="tanggal_lahir_ibu" class="form-control col-md-5 @error('tanggal_lahir_ibu') is-invalid @enderror" value="{{ old('tanggal_lahir_ibu') }}">

                                                @error('tanggal_lahir_ibu')
                                                    <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                @enderror
                                            </div>
                                        </div>
                                        
                                        <div class="form-group ml-3">
                                            <label for="agama_ibu">Agama</label>
                                            <select name="agama_ibu" id="agama_ibu" class="form-control @error('agama_ibu') is-invalid @enderror">
                                                    <option selected disabled>Pilih salah satu</option>
                                                    <option @if (old('agama_ibu') == 'Islam')  selected @endif value="Islam">Islam</option>
                                                    <option @if (old('agama_ibu') == 'Kristen')  selected @endif value="Kristen">Kristen</option>
                                                    <option @if (old('agama_ibu') == 'Katholik')  selected @endif value="Katholik">Katholik</option>
                                                    <option @if (old('agama_ibu') == 'Hindu')  selected @endif value="Hindu">Hindu</option>
                                                    <option @if (old('agama_ibu') == 'Buddha')  selected @endif value="Buddha">Buddha</option>
                                                    <option @if (old('agama_ibu') == 'Konghucu')  selected @endif value="Konghucu">Konghucu</option>
                                            </select>
                                            
                                            @error('agama_ibu')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group ml-3">
                                            <label for="kewarganegaraan_ibu">Kewarganegaraan</label>
                                            <input type="text" name="kewarganegaraan_ibu" id="kewarganegaraan_ibu" class="form-control @error('kewarganegaraan_ibu') is-invalid @enderror" value="{{ old('kewarganegaraan_ibu') }}">
                                            
                                            @error('kewarganegaraan_ibu')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group ml-3">
                                            <label for="pendidikan_ibu">Pendidikan Tertinggi</label>
                                            <input type="text" name="pendidikan_ibu" id="pendidikan_ibu" class="form-control @error('pendidikan_ibu') is-invalid @enderror" value="{{ old('pendidikan_ibu') }}">
                                            
                                            @error('pendidikan_ibu')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group ml-3">
                                            <label for="pekerjaan_ibu">Pekerjaan</label>
                                            <select name="pekerjaan_ibu" id="pekerjaan_ibu" class="form-control @error('pekerjaan_ibu') is-invalid @enderror">
                                                <option selected disabled>Pilih Salah Satu!</option>
                                                <option @if (old('pekerjaan_ibu') == 'ABRI')  selected @endif value="ABRI">ABRI</option>
                                                <option @if (old('pekerjaan_ibu') == 'Pegawai Negeri')  selected @endif  value="Pegawai Negeri">Pegawai Negeri</option>
                                                <option @if (old('pekerjaan_ibu') == 'Swasta')  selected @endif value="Swasta">Swasta</option>
                                                <option @if (old('pekerjaan_ibu') == 'Wirausaha')  selected @endif  value="Wirausaha">Wirausaha</option>
                                            </select>
                                            
                                            @error('pekerjaan_ibu')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror

                                            <input type="text" name="nip_gol_pangkat_ibu" id="nip_gol_pangkat_ibu" class="form-control @error('nip_gol_pangkat_ibu') is-invalid @enderror" value="{{ old('nip_gol_pangkat_ibu') }}" placeholder="NIP/Gol/Pangkat">

                                            @error('nip_gol_pangkat_ibu')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror

                                            <input type="text" name="nama_kantor_instansi_ibu" id="nama_kantor_instansi_ibu" class="form-control @error('nama_kantor_instansi_ibu') is-invalid @enderror" value="{{ old('nama_kantor_instansi_ibu') }}" placeholder="Nama Kantor/Instansi">

                                            @error('nama_kantor_instansi_ibu')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror

                                            <input type="text" name="alamat_kantor_no_telp_ibu" id="alamat_kantor_no_telp_ibu" class="form-control @error('alamat_kantor_no_telp_ibu') is-invalid @enderror" value="{{ old('alamat_kantor_no_telp_ibu') }}" placeholder="Alamat Kantor/No Telp">
                                            
                                            @error('alamat_kantor_no_telp_ibu')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="mb-3 ml-3"><b><h5>WALI (OPSIONAL)</h5></b></div>
                                        
                                        <div class="form-group ml-3">
                                            <label for="nama_wali">Nama Lengkap</label>
                                            <input type="text" name="nama_wali" id="nama_wali" class="form-control" value="{{ old('nama_wali') }}" placeholder="Tanpa gelar">
                                        </div>
                                        
                                        <div class="form-group ml-3">
                                            <label for="tempat_lahir_wali">Tempat, Tanggal Lahir</label>
                                            <div class="row p-2">
                                                <input type="text" name="tempat_lahir_wali" id="tempat_lahir_wali" class="form-control col-md-7 @error('tempat_lahir_wali') is-invalid @enderror" value="{{ old('tempat_lahir_wali') }}">

                                                @error('tempat_lahir_wali')
                                                    <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                @enderror

                                                <input type="date" name="tanggal_lahir_wali" id="tanggal_lahir_wali" class="form-control col-md-5 @error('tanggal_lahir_wali') is-invalid @enderror" value="{{ old('tanggal_lahir_wali') }}">

                                                @error('tanggal_lahir_wali')
                                                    <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                @enderror
                                            </div>
                                        </div>
                                        
                                        <div class="form-group ml-3">
                                            <label for="agama_wali">Agama</label>
                                            <select name="agama_wali" id="agama_wali" class="form-control @error('agama_wali') is-invalid @enderror">
                                                    <option selected disabled>Pilih salah satu</option>
                                                    <option @if (old('agama_wali') == 'Islam')  selected @endif value="Islam">Islam</option>
                                                    <option @if (old('agama_wali') == 'Kristen')  selected @endif value="Kristen">Kristen</option>
                                                    <option @if (old('agama_wali') == 'Katholik')  selected @endif value="Katholik">Katholik</option>
                                                    <option @if (old('agama_wali') == 'Hindu')  selected @endif value="Hindu">Hindu</option>
                                                    <option @if (old('agama_wali') == 'Buddha')  selected @endif value="Buddha">Buddha</option>
                                                    <option @if (old('agama_wali') == 'Konghucu')  selected @endif value="Konghucu">Konghucu</option>
                                            </select>
                                            
                                            @error('agama_wali')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group ml-3">
                                            <label for="kewarganegaraan_wali">Kewarganegaraan</label>
                                            <input type="text" name="kewarganegaraan_wali" id="kewarganegaraan_wali" class="form-control @error('kewarganegaraan_wali') is-invalid @enderror" value="{{ old('kewarganegaraan_wali') }}">
                                            
                                            @error('kewarganegaraan_wali')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group ml-3">
                                            <label for="pendidikan_wali">Pendidikan Tertinggi</label>
                                            <input type="text" name="pendidikan_wali" id="pendidikan_wali" class="form-control @error('pendidikan_wali') is-invalid @enderror" value="{{ old('pendidikan_wali') }}">
                                            
                                            @error('pendidikan_wali')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group ml-3">
                                            <label for="pekerjaan_wali">Pekerjaan</label>
                                            <select name="pekerjaan_wali" id="pekerjaan_wali" class="form-control @error('pekerjaan_wali') is-invalid @enderror">
                                                <option selected disabled>Pilih Salah Satu!</option>
                                                <option @if (old('pekerjaan_wali') == 'ABRI')  selected @endif value="ABRI">ABRI</option>
                                                <option @if (old('pekerjaan_wali') == 'Pegawai Negeri')  selected @endif  value="Pegawai Negeri">Pegawai Negeri</option>
                                                <option @if (old('pekerjaan_wali') == 'Swasta')  selected @endif value="Swasta">Swasta</option>
                                                <option @if (old('pekerjaan_wali') == 'Wirausaha')  selected @endif  value="Wirausaha">Wirausaha</option>
                                            </select>
                                            
                                            @error('pekerjaan_wali')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror

                                            <input type="text" name="nip_gol_pangkat_wali" id="nip_gol_pangkat_wali" class="form-control @error('nip_gol_pangkat_wali') is-invalid @enderror" value="{{ old('nip_gol_pangkat_wali') }}" placeholder="NIP/Gol/Pangkat">

                                            @error('nip_gol_pangkat_wali')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror

                                            <input type="text" name="nama_kantor_instansi_wali" id="nama_kantor_instansi_wali" class="form-control @error('nama_kantor_instansi_wali') is-invalid @enderror" value="{{ old('nama_kantor_instansi_wali') }}" placeholder="Nama Kantor/Instansi">

                                            @error('nama_kantor_instansi_wali')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror

                                            <input type="text" name="alamat_kantor_no_telp_wali" id="alamat_kantor_no_telp_wali" class="form-control @error('alamat_kantor_no_telp_wali') is-invalid @enderror" value="{{ old('alamat_kantor_no_telp_wali') }}" placeholder="Alamat Kantor/No Telp">
                                            
                                            @error('alamat_kantor_no_telp_wali')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-3 ml-3"><b><h4>DOKUMEN</h4></b>
                                        
                                        <div class="form-group ml-3">
                                            <label for="scan_akta">Scan Akta Kelahiran</label>
                                            <input type="file" name="scan_akta" id="scan_akta" class="form-control @error('scan_akta') is-invalid @enderror">
                                            
                                            @error('scan_akta')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group ml-3">
                                            <label for="scan_kk">Scan Kartu Keluarga</label>
                                            <input type="file" name="scan_kk" id="scan_kk" class="form-control @error('scan_kk') is-invalid @enderror">
                                            
                                            @error('scan_kk')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group ml-3">
                                            <label for="scan_ktp_ortu">Scan KTP Orangtua</label>
                                            <input type="file" name="scan_ktp_ortu" id="scan_ktp_ortu" class="form-control @error('scan_ktp_ortu') is-invalid @enderror">
                                            
                                            @error('scan_ktp_ortu')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>

                                    </div>
                                    
                                    <div class="d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary float-right" style="width 100px">Kirim</button>
                                    </div>

                                </div>
                                
                            </div>
                        </form>
                    </div>
                @else
                    <div class="card-body mt-3">
                        <br>
                        <form action="/calon/tk/update/{{ $user->id }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            @foreach ($calon_siswa_tks as $pesertadidik)
                            <div class="row">
                                <div class="col-md-6">
                                    
                                    <div class="mb-3 ml-3"><b><h4>IDENTITAS ANAK</h4></b>
                                
                                        <div class="form-group ml-3">
                                            <label for="nama_pd">Nama Lengkap</label>
                                            <input type="text" name="nama_pd" id="nama_pd" class="form-control @error('nama_pd') is-invalid @enderror" value="{{ $pesertadidik->nama_pd }}">
                                        
                                            @error('nama_pd')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
        
                                        <div class="form-group ml-3">
                                            <label for="nama">Nama Panggilan</label>
                                            <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ $pesertadidik->nama }}">
                                        
                                            @error('nama')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
        
                                        <div class="form-group ml-3">
                                            <label for="jenis_kelamin">Jenis Kelamin</label>
                                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control @error('jenis_kelamin') is-invalid @enderror">
                                                    <option selected disabled>Pilih salah satu</option>
                                                    <option @if ($pesertadidik->jenis_kelamin  == "Laki-laki") selected @endif value="Laki-laki">Laki-laki</option>
                                                    <option @if ($pesertadidik->jenis_kelamin  == "Perempuan") selected @endif value="Perempuan">Perempuan</option>
                                            </select>
        
                                            @error('jenis_kelamin')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
        
                                        <div class="form-group ml-3">
                                            <label for="tempat_lahir">Tempat, Tanggal Lahir</label>
                                            <div class="row p-2">
                                                <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control col-md-7 @error('tempat_lahir') is-invalid @enderror" value="{{ $pesertadidik->tempat_lahir }}">
        
                                                @error('tempat_lahir')
                                                    <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                @enderror
        
                                                <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control col-md-5 @error('tanggal_lahir') is-invalid @enderror" value="{{ $pesertadidik->tanggal_lahir }}">
        
                                                @error('tanggal_lahir')
                                                    <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                @enderror
                                            </div>
                                        </div>
        
                                        <div class="form-group ml-3">
                                            <label for="agama">Agama</label>
                                            <select name="agama" id="agama" class="form-control @error('agama') is-invalid @enderror">
                                                    <option selected disabled>Pilih salah satu</option>
                                                    <option @if ($pesertadidik->agama == 'Islam')  selected @endif value="Islam">Islam</option>
                                                    <option @if ($pesertadidik->agama == 'Kristen')  selected @endif value="Kristen">Kristen</option>
                                                    <option @if ($pesertadidik->agama == 'Katholik')  selected @endif value="Katholik">Katholik</option>
                                                    <option @if ($pesertadidik->agama == 'Hindu')  selected @endif value="Hindu">Hindu</option>
                                                    <option @if ($pesertadidik->agama == 'Buddha')  selected @endif value="Buddha">Buddha</option>
                                                    <option @if ($pesertadidik->agama == 'Konghucu')  selected @endif value="Konghucu">Konghucu</option>
                                            </select>
                                            @error('agama')
                                                <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                            @enderror
                                        </div>
        
                                        <div class="form-group ml-3">
                                            <label for="kewarganegaraan">Kewarganegaraan</label>
                                            <input type="text" name="kewarganegaraan" id="kewarganegaraan" class="form-control @error('kewarganegaraan') is-invalid @enderror" value="{{ $pesertadidik->kewarganegaraan }}">
                                            @error('kewarganegaraan')
                                                <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                            @enderror
                                        </div>
        
                                        <div class="form-group ml-3">
                                            <label for="anak_ke">Anak Ke</label>
                                            <input type="number" name="anak_ke" id="anak_ke" class="form-control @error('anak_ke') is-invalid @enderror" value="{{ $pesertadidik->anak_ke }}">
                                            
                                            @error('anak_ke')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
        
                                        <div class="form-group ml-3">
                                            <label for="banyak_saudara_ibu">Banyak Saudara Kandung</label>
                                            <input type="number" name="banyak_saudara_ibu" id="banyak_saudara_ibu" class="form-control @error('banyak_saudara_ibu') is-invalid @enderror" value="{{ $pesertadidik->banyak_saudara_ibu }}">
                                            
                                            @error('banyak_saudara_ibu')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
        
                                        <div class="form-group ml-3">
                                            <label for="banyak_saudara_tiri">Banyak Saudara Tiri</label>
                                            <input type="number" name="banyak_saudara_tiri" id="banyak_saudara_tiri" class="form-control @error('banyak_saudara_tiri') is-invalid @enderror" value="{{ $pesertadidik->banyak_saudara_tiri }}">
                                            
                                            @error('banyak_saudara_tiri')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
        
                                        <div class="form-group ml-3">
                                            <label for="banyak_saudara_angkat">Banyak Saudara Angkat</label>
                                            <input type="number" name="banyak_saudara_angkat" id="banyak_saudara_angkat" class="form-control @error('banyak_saudara_angkat') is-invalid @enderror" value="{{ $pesertadidik->banyak_saudara_angkat }}">
                                            
                                            @error('banyak_saudara_angkat')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
        
                                        <div class="form-group ml-3">
                                            <label for="bahasa">Bahasa sehari-hari</label>
                                            <input type="text" name="bahasa" id="bahasa" class="form-control @error('bahasa') is-invalid @enderror" value="{{ $pesertadidik->bahasa }}">
                                            
                                            @error('bahasa')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
        
                                        <div class="form-group ml-3">
                                            <label for="berat">Berat Badan</label>
                                            <div class="input-group-prepend p-0">
                                                <input type="number" name="berat" id="berat" class="form-control @error('berat') is-invalid @enderror" value="{{ $pesertadidik->berat }}">  
                                                <div class="input-group-text">Kg</div>
                                            </div> 
        
                                            @error('berat')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
        
                                        <div class="form-group ml-3">
                                            <label for="tinggi">Tinggi Badan</label>
                                            
                                            <div class="input-group-prepend p-0">
                                                <input type="number" name="tinggi" id="tinggi" class="form-control @error('tinggi') is-invalid @enderror" value="{{ $pesertadidik->tinggi }}">  
                                                <div class="input-group-text">Cm</div>
                                            </div>
        
                                            @error('tinggi')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
        
                                        <div class="form-group ml-3">
                                            <label for="golongan_darah">Golongan Darah</label>
                                            <select type="text" name="golongan_darah" id="golongan_darah" class="form-control @error('golongan_darah') is-invalid @enderror">
                                                <option selected disabled>Pilih salah satu</option>
                                                <option value="A" @if($pesertadidik->golongan_darah == 'A') selected @endif>A</option>
                                                <option value="B" @if($pesertadidik->golongan_darah == 'B') selected @endif>B</option>
                                                <option value="O" @if($pesertadidik->golongan_darah == 'O') selected @endif>O</option>
                                                <option value="AB" @if($pesertadidik->golongan_darah == 'AB') selected @endif>AB</option>
                                            </select>
        
                                            @error('golongan_darah')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
        
                                        <div class="form-group ml-3">
                                            <label for="penyakit">Penyakit yang Pernah Diderita</label>
                                            <input type="text" name="penyakit" id="penyakit" class="form-control" value="{{ $pesertadidik->penyakit }}">
                                        </div>
                                        
                                        <div class="form-group ml-3">
                                            <label for="alamat_pd">Alamat</label>
                                            <input type="text" name="alamat_pd" id="alamat_pd" class="form-control" value="{{ $pesertadidik->alamat_pd }}" placeholder="Jalan">
        
                                            @error('alamat_pd')
                                                <span class="invalid-feedback d-block" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
        
                                            <input type="text" name="kecamatan_pd" id="kecamatan_pd" class="form-control" value="{{ $pesertadidik->kecamatan_pd }}" placeholder="Kecamatan">
        
                                            @error('kecamatan_pd')
                                                <span class="invalid-feedback d-block" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
        
                                            <input type="text" name="kabupaten_pd" id="kabupaten_pd" class="form-control" value="{{ $pesertadidik->kabupaten_pd }}" placeholder="Kabupaten/Kota">
        
                                            @error('kabupaten_pd')
                                                <span class="invalid-feedback d-block" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
        
                                            <input type="text" name="provinsi_pd" id="provinsi_pd" class="form-control" value="{{ $pesertadidik->provinsi_pd }}" placeholder="Provinsi">
        
                                            @error('provinsi_pd')
                                                <span class="invalid-feedback d-block" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group ml-3">
                                            <label for="telp_pd">Nomor Telepon</label>
                                            <input type="text" name="telp_pd" id="telp_pd" class="form-control @error('telp_pd') is-invalid @enderror" value="{{ $pesertadidik->telp_pd }}">
                                            
                                            @error('telp_pd')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
        
                                        <div class="form-group ml-3">
                                            <label for="tempat_tinggal">Bertempat Tinggal Pada</label>
                                            <select name="tempat_tinggal" id="tempat_tinggal" class="form-control @error('tempat_tinggal') is-invalid @enderror" value="{{ $pesertadidik->tempat_tinggal }}">
                                                <option selected disabled>Pilih Salah Satu</option>
                                                <option value="Orangtua" @if($pesertadidik->tempat_tinggal=="Orangtua")selected @endif>Orangtua</option>
                                                <option value="Menampung" @if($pesertadidik->tempat_tinggal=="Menampung")selected @endif>Menampung</option>
                                                <option value="Asrama" @if($pesertadidik->tempat_tinggal=="Asrama")selected @endif>Asrama</option>
                                            </select>
        
                                            @error('tempat_tinggal')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
        
                                        <div class="form-group ml-3">
                                            <label for="hobi">Kegemaran/Hobi</label>
                                            <input type="text" name="hobi" id="hobi" class="form-control @error('hobi') is-invalid @enderror" value="{{ $pesertadidik->hobi }}">
                                            
                                            @error('hobi')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    
                                    <div class="mb-3 ml-3"><b><h4>LAIN-LAIN</h4></b>
                                        <div class="form-group ml-3">
                                            <label for="gaji_perbulan">Penghasilan/Gaji Bapak dan Ibu Perbulan</label>
                                            <select name="gaji_perbulan" id="gaji_perbulan" class="form-control @error('gaji_perbulan') is-invalid @enderror">
                                                <option selected disabled>Pilih salah satu</option>
                                                <option value="1 s/d 5 Juta"@if($pesertadidik->gaji_perbulan="1 s/d 5 Juta") selected @endif>1 s/d 5 Juta</option>
                                                <option value="1 s/d 5 Juta"@if($pesertadidik->gaji_perbulan="1 s/d 5 Juta") selected @endif>1 s/d 5 Juta</option>
                                                <option value="10 Juta lebih"@if($pesertadidik->gaji_perbulan="10 Juta lebih") selected @endif>10 Juta lebih</option>
                                            </select>
        
                                            @error('gaji_perbulan')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
        
                                        <div class="form-group ml-3">
                                            <label for="jemputan">Menggunakan Jasa Antar Jemput</label>
                                            <select name="jemputan" id="jemputan" class="form-control @error('jemputan') is-invalid @enderror" value="{{ $pesertadidik->jemputan }}">
                                                <option selected disabled>Pilih salah satu</option>
                                                <option  @if($pesertadidik->jemputan == "mendaftar") selected @endif value="mendaftar">Kami mendaftarkan anak Kami untuk menggunakan jasa Antar Jemput Sekolah</option>
                                                <option  @if($pesertadidik->jemputan == "tidak mendaftar") selected @endif value="tidak mendaftar">Kami tidak mendaftar anak Kami untuk menggunakan jasa Antar Jemput Sekolah</option>
                                            </select>
        
                                            @error('jemputan')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
        
                                        <div class="form-group ml-3">
                                            <label for="email">Email yang dapat dihubungi</label>
                                            <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ $pesertadidik->email }}">
                                            
                                            @error('email')
                                                <div class="text-danger mt-2">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            
                                <div class="col-md-6">

                                    <div class="mb-3 ml-3"><b><h4>DATA ORANG TUA/WALI</h4></b>
                                    
                                        <div class="mt-3 ml-3"><b><h5>AYAH</h5></b></div>
                                                
                                        <div class="form-group ml-3">
                                            <label for="nama_ayah">Nama Lengkap</label>
                                            <input type="text" name="nama_ayah" id="nama_ayah" class="form-control @error('nama_ayah') is-invalid @enderror" value="{{ $pesertadidik->nama_ayah }}" placeholder="Tanpa gelar">
                                            
                                            @error('nama_ayah')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group ml-3">
                                            <label for="tempat_lahir_ayah">Tempat, Tanggal Lahir </label>
                                            <div class="row p-2">
                                                <input type="text" name="tempat_lahir_ayah" id="tempat_lahir_ayah" class="form-control col-md-7 @error('tempat_lahir_ayah') is-invalid @enderror" value="{{ $pesertadidik->tempat_lahir_ayah }}">
        
                                                @error('tempat_lahir_ayah')
                                                    <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                @enderror
        
                                                <input type="date" name="tanggal_lahir_ayah" id="tanggal_lahir_ayah" class="form-control col-md-5 @error('tanggal_lahir_ayah') is-invalid @enderror" value="{{ $pesertadidik->tanggal_lahir_ayah }}">
        
                                                @error('tanggal_lahir_ayah')
                                                    <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                @enderror
                                            </div>
                                        </div>
                                        
                                        <div class="form-group ml-3">
                                            
                                            <label for="agama_ayah">Agama</label>
                                            <select name="agama_ayah" id="agama_ayah" class="form-control @error('agama_ayah') is-invalid @enderror">
                                                    <option selected disabled>Pilih salah satu</option>
                                                    <option @if ($pesertadidik->agama_ayah == 'Islam')  selected @endif value="Islam">Islam</option>
                                                    <option @if ($pesertadidik->agama_ayah == 'Kristen')  selected @endif value="Kristen">Kristen</option>
                                                    <option @if ($pesertadidik->agama_ayah == 'Katholik')  selected @endif value="Katholik">Katholik</option>
                                                    <option @if ($pesertadidik->agama_ayah == 'Hindu')  selected @endif value="Hindu">Hindu</option>
                                                    <option @if ($pesertadidik->agama_ayah == 'Buddha')  selected @endif value="Buddha">Buddha</option>
                                                    <option @if ($pesertadidik->agama_ayah == 'Konghucu')  selected @endif value="Konghucu">Konghucu</option>
                                            </select>
                                            
                                            @error('agama_ayah')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group ml-3">
                                            <label for="kewarganegaraan_ayah">Kewarganegaraan</label>
                                            <input type="text" name="kewarganegaraan_ayah" id="kewarganegaraan_ayah" class="form-control @error('kewarganegaraan_ayah') is-invalid @enderror" value="{{ $pesertadidik->kewarganegaraan_ayah }}">
                                            
                                            @error('kewarganegaraan_ayah')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group ml-3">
                                            <label for="pendidikan_ayah">Pendidikan Tertinggi</label>
                                            <input type="text" name="pendidikan_ayah" id="pendidikan_ayah" class="form-control @error('pendidikan_ayah') is-invalid @enderror" value="{{ $pesertadidik->pendidikan_ayah }}">
                                            
                                            @error('pendidikan_ayah')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group ml-3">
                                            <label for="pekerjaan_ayah">Pekerjaan</label>
                                            <select name="pekerjaan_ayah" id="pekerjaan_ayah" class="form-control @error('pekerjaan_ayah') is-invalid @enderror">
                                                <option selected disabled>Pilih Salah Satu!</option>
                                                <option @if ($pesertadidik->pekerjaan_ayah == 'ABRI')  selected @endif value="ABRI">ABRI</option>
                                                <option @if ($pesertadidik->pekerjaan_ayah == 'Pegawai Negeri')  selected @endif  value="Pegawai Negeri">Pegawai Negeri</option>
                                                <option @if ($pesertadidik->pekerjaan_ayah == 'Swasta')  selected @endif value="Swasta">Swasta</option>
                                                <option @if ($pesertadidik->pekerjaan_ayah == 'Wirausaha')  selected @endif  value="Wirausaha">Wirausaha</option>
                                            </select>
                                            
                                            @error('pekerjaan_ayah')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
        
                                            <input type="text" name="nip_gol_pangkat_ayah" id="nip_gol_pangkat_ayah" class="form-control @error('nip_gol_pangkat_ayah') is-invalid @enderror" value="{{ $pesertadidik->nip_gol_pangkat_ayah }}" placeholder="NIP/Gol/Pangkat">
        
                                            @error('nip_gol_pangkat_ayah')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
        
                                            <input type="text" name="nama_kantor_instansi_ayah" id="nama_kantor_instansi_ayah" class="form-control @error('nama_kantor_instansi_ayah') is-invalid @enderror" value="{{ $pesertadidik->nama_kantor_instansi_ayah }}" placeholder="Nama Kantor/Instansi">
        
                                            @error('nama_kantor_instansi_ayah')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
        
                                            <input type="text" name="alamat_kantor_no_telp_ayah" id="alamat_kantor_no_telp_ayah" class="form-control @error('alamat_kantor_no_telp_ayah') is-invalid @enderror" value="{{ $pesertadidik->alamat_kantor_no_telp_ayah }}" placeholder="Alamat Kantor/No Telp">
                                            
                                            @error('alamat_kantor_no_telp_ayah')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                                
                                        <div class="mt-3 ml-3"><b><h5>IBU</h5></b></div>
                                        
                                        <div class="form-group ml-3">
                                            <label for="nama_ibu">Nama Lengkap</label>
                                            <input type="text" name="nama_ibu" id="nama_ibu" class="form-control @error('nama_ibu') is-invalid @enderror" value="{{ $pesertadidik->nama_ibu }}" placeholder="Tanpa gelar">
                                            
                                            @error('nama_ibu')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group ml-3">
                                            <label for="tempat_lahir_ibu">Tempat, Tanggal Lahir </label>
                                            <div class="row p-2">
                                                <input type="text" name="tempat_lahir_ibu" id="tempat_lahir_ibu" class="form-control col-md-7 @error('tempat_lahir_ibu') is-invalid @enderror" value="{{ $pesertadidik->tempat_lahir_ibu }}">
        
                                                @error('tempat_lahir_ibu')
                                                    <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                @enderror
        
                                                <input type="date" name="tanggal_lahir_ibu" id="tanggal_lahir_ibu" class="form-control col-md-5 @error('tanggal_lahir_ibu') is-invalid @enderror" value="{{ $pesertadidik->tanggal_lahir_ibu }}">
        
                                                @error('tanggal_lahir_ibu')
                                                    <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                @enderror
                                            </div>
                                        </div>
                                        
                                        <div class="form-group ml-3">
                                            
                                            <label for="agama_ibu">Agama</label>
                                            <select name="agama_ibu" id="agama_ibu" class="form-control @error('agama_ibu') is-invalid @enderror">
                                                    <option selected disabled>Pilih salah satu</option>
                                                    <option @if ($pesertadidik->agama_ibu == 'Islam')  selected @endif value="Islam">Islam</option>
                                                    <option @if ($pesertadidik->agama_ibu == 'Kristen')  selected @endif value="Kristen">Kristen</option>
                                                    <option @if ($pesertadidik->agama_ibu == 'Katholik')  selected @endif value="Katholik">Katholik</option>
                                                    <option @if ($pesertadidik->agama_ibu == 'Hindu')  selected @endif value="Hindu">Hindu</option>
                                                    <option @if ($pesertadidik->agama_ibu == 'Buddha')  selected @endif value="Buddha">Buddha</option>
                                                    <option @if ($pesertadidik->agama_ibu == 'Konghucu')  selected @endif value="Konghucu">Konghucu</option>
                                            </select>
                                            
                                            @error('agama_ibu')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group ml-3">
                                            <label for="kewarganegaraan_ibu">Kewarganegaraan</label>
                                            <input type="text" name="kewarganegaraan_ibu" id="kewarganegaraan_ibu" class="form-control @error('kewarganegaraan_ibu') is-invalid @enderror" value="{{ $pesertadidik->kewarganegaraan_ibu }}">
                                            
                                            @error('kewarganegaraan_ibu')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group ml-3">
                                            <label for="pendidikan_ibu">Pendidikan Tertinggi</label>
                                            <input type="text" name="pendidikan_ibu" id="pendidikan_ibu" class="form-control @error('pendidikan_ibu') is-invalid @enderror" value="{{ $pesertadidik->pendidikan_ibu }}">
                                            
                                            @error('pendidikan_ibu')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group ml-3">
                                            <label for="pekerjaan_ibu">Pekerjaan</label>
                                            <select name="pekerjaan_ibu" id="pekerjaan_ibu" class="form-control @error('pekerjaan_ibu') is-invalid @enderror">
                                                <option selected disabled>Pilih Salah Satu!</option>
                                                <option @if ($pesertadidik->pekerjaan_ibu == 'ABRI')  selected @endif value="ABRI">ABRI</option>
                                                <option @if ($pesertadidik->pekerjaan_ibu == 'Pegawai Negeri')  selected @endif  value="Pegawai Negeri">Pegawai Negeri</option>
                                                <option @if ($pesertadidik->pekerjaan_ibu == 'Swasta')  selected @endif value="Swasta">Swasta</option>
                                                <option @if ($pesertadidik->pekerjaan_ibu == 'Wirausaha')  selected @endif  value="Wirausaha">Wirausaha</option>
                                            </select>
                                            
                                            @error('pekerjaan_ibu')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
        
                                            <input type="text" name="nip_gol_pangkat_ibu" id="nip_gol_pangkat_ibu" class="form-control @error('nip_gol_pangkat_ibu') is-invalid @enderror" value="{{ $pesertadidik->nip_gol_pangkat_ibu }}" placeholder="NIP/Gol/Pangkat">
        
                                            @error('nip_gol_pangkat_ibu')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
        
                                            <input type="text" name="nama_kantor_instansi_ibu" id="nama_kantor_instansi_ibu" class="form-control @error('nama_kantor_instansi_ibu') is-invalid @enderror" value="{{ $pesertadidik->nama_kantor_instansi_ibu }}" placeholder="Nama Kantor/Instansi">
        
                                            @error('nama_kantor_instansi_ibu')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
        
                                            <input type="text" name="alamat_kantor_no_telp_ibu" id="alamat_kantor_no_telp_ibu" class="form-control @error('alamat_kantor_no_telp_ibu') is-invalid @enderror" value="{{ $pesertadidik->alamat_kantor_no_telp_ibu }}" placeholder="Alamat Kantor/No Telp">
                                            
                                            @error('alamat_kantor_no_telp_ibu')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="mt-3 ml-3"><b><h5>WALI (OPSIONAL)</h5></b></div>
                                                
                                            <div class="form-group ml-3">
                                                <label for="nama_wali">Nama Lengkap</label>
                                                <input type="text" name="nama_wali" id="nama_wali" class="form-control" value="{{ $pesertadidik->nama_wali }}" placeholder="Tanpa gelar">
                                            </div>
                                            
                                            <div class="form-group ml-3">
                                                <label for="tempat_lahir_wali">Tempat, Tanggal Lahir </label>
                                                <div class="row p-2">
                                                    <input type="text" name="tempat_lahir_wali" id="tempat_lahir_wali" class="form-control col-md-7 @error('tempat_lahir_wali') is-invalid @enderror" value="{{ $pesertadidik->tempat_lahir_wali }}">
        
                                                    @error('tempat_lahir_wali')
                                                        <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                    @enderror
        
                                                    <input type="date" name="tanggal_lahir_wali" id="tanggal_lahir_wali" class="form-control col-md-5 @error('tanggal_lahir_wali') is-invalid @enderror" value="{{ $pesertadidik->tanggal_lahir_wali }}">
        
                                                    @error('tanggal_lahir_wali')
                                                        <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            
                                            <div class="form-group ml-3">
                                                
                                                <label for="agama_wali">Agama</label>
                                                <select name="agama_wali" id="agama_wali" class="form-control @error('agama_wali') is-invalid @enderror">
                                                        <option selected disabled>Pilih salah satu</option>
                                                        <option @if ($pesertadidik->agama_wali == 'Islam')  selected @endif value="Islam">Islam</option>
                                                        <option @if ($pesertadidik->agama_wali == 'Kristen')  selected @endif value="Kristen">Kristen</option>
                                                        <option @if ($pesertadidik->agama_wali == 'Katholik')  selected @endif value="Katholik">Katholik</option>
                                                        <option @if ($pesertadidik->agama_wali == 'Hindu')  selected @endif value="Hindu">Hindu</option>
                                                        <option @if ($pesertadidik->agama_wali == 'Buddha')  selected @endif value="Buddha">Buddha</option>
                                                        <option @if ($pesertadidik->agama_wali == 'Konghucu')  selected @endif value="Konghucu">Konghucu</option>
                                                </select>
                                                
                                                @error('agama_wali')
                                                    <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                @enderror
                                            </div>
                                            
                                            <div class="form-group ml-3">
                                                <label for="kewarganegaraan_wali">Kewarganegaraan</label>
                                                <input type="text" name="kewarganegaraan_wali" id="kewarganegaraan_wali" class="form-control @error('kewarganegaraan_wali') is-invalid @enderror" value="{{ $pesertadidik->kewarganegaraan_wali }}">
                                                
                                                @error('kewarganegaraan_wali')
                                                    <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                @enderror
                                            </div>
                                            
                                            <div class="form-group ml-3">
                                                <label for="pendidikan_wali">Pendidikan Tertinggi</label>
                                                <input type="text" name="pendidikan_wali" id="pendidikan_wali" class="form-control @error('pendidikan_wali') is-invalid @enderror" value="{{ $pesertadidik->pendidikan_wali }}">
                                                
                                                @error('pendidikan_wali')
                                                    <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                @enderror
                                            </div>
                                            
                                            <div class="form-group ml-3">
                                                <label for="pekerjaan_wali">Pekerjaan</label>
                                                <select name="pekerjaan_wali" id="pekerjaan_wali" class="form-control @error('pekerjaan_wali') is-invalid @enderror">
                                                    <option selected disabled>Pilih Salah Satu!</option>
                                                    <option @if ($pesertadidik->pekerjaan_wali == 'ABRI')  selected @endif value="ABRI">ABRI</option>
                                                    <option @if ($pesertadidik->pekerjaan_wali == 'Pegawai Negeri')  selected @endif  value="Pegawai Negeri">Pegawai Negeri</option>
                                                    <option @if ($pesertadidik->pekerjaan_wali == 'Swasta')  selected @endif value="Swasta">Swasta</option>
                                                    <option @if ($pesertadidik->pekerjaan_wali == 'Wirausaha')  selected @endif  value="Wirausaha">Wirausaha</option>
                                                </select>
                                                
                                                @error('pekerjaan_wali')
                                                    <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                @enderror
        
                                                <input type="text" name="nip_gol_pangkat_wali" id="nip_gol_pangkat_wali" class="form-control @error('nip_gol_pangkat_wali') is-invalid @enderror" value="{{ $pesertadidik->nip_gol_pangkat_wali }}" placeholder="NIP/Gol/Pangkat">
        
                                                @error('nip_gol_pangkat_wali')
                                                    <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                @enderror
        
                                                <input type="text" name="nama_kantor_instansi_wali" id="nama_kantor_instansi_wali" class="form-control @error('nama_kantor_instansi_wali') is-invalid @enderror" value="{{ $pesertadidik->nama_kantor_instansi_wali }}" placeholder="Nama Kantor/Instansi">
        
                                                @error('nama_kantor_instansi_wali')
                                                    <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                @enderror
        
                                                <input type="text" name="alamat_kantor_no_telp_wali" id="alamat_kantor_no_telp_wali" class="form-control @error('alamat_kantor_no_telp_wali') is-invalid @enderror" value="{{ $pesertadidik->alamat_kantor_no_telp_wali }}" placeholder="Alamat Kantor/No Telp">
                                                
                                                @error('alamat_kantor_no_telp_wali')
                                                    <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                @enderror
                                            </div>
                                    </div>

                                </div>
                            </div>
                            
                            <div class="mb-3 ml-3"><b><h4>DOKUMEN</h4></b>
                                
                                <div class="form-group ml-3">
                                    <label class="" for="scan_akta">Scan Akta Kelahiran</label>
                                    <input type="file" name="scan_akta" id="scan_akta" class="form-control @error('scan_akta') is-invalid @enderror">
                                    
                                    @error('scan_akta')
                                        <div class="text-danger mt-2">{{ $message }}</div>
                                    @enderror
                                    
                                    @if ($pesertadidik->scan_akta)
                                        <img class="d-flex mx-auto mb-3" src="{{ asset("dokumen/tk/" . $pesertadidik->scan_akta) }}" alt="{{ $pesertadidik->scan_akta }}">
                                    @endif
                                </div>

                                <div class="form-group ml-3">
                                    <label class="" for="scan_kk">Scan Kartu Keluarga</label>
                                    <input type="file" name="scan_kk" id="scan_kk" class="form-control @error('scan_kk') is-invalid @enderror">
                                    
                                    @error('scan_kk')
                                        <div class="text-danger mt-2">{{ $message }}</div>
                                    @enderror
                                    
                                    @if ($pesertadidik->scan_kk)
                                        <img class="d-flex mx-auto mb-3" src="{{ asset("dokumen/tk/" . $pesertadidik->scan_kk) }}" alt="{{ $pesertadidik->scan_kk }}">
                                    @endif
                                </div>

                                <div class="form-group ml-3">
                                    <label class="" for="scan_ktp_ortu">Scan KTP Orangtua</label>
                                    <input type="file" name="scan_ktp_ortu" id="scan_ktp_ortu" class="form-control @error('scan_ktp_ortu') is-invalid @enderror">
                                    
                                    @error('scan_ktp_ortu')
                                        <div class="text-danger mt-2">{{ $message }}</div>
                                    @enderror
                                    
                                    @if ($pesertadidik->scan_ktp_ortu)
                                        <img class="d-flex mx-auto mb-3" src="{{ asset("dokumen/tk/" . $pesertadidik->scan_ktp_ortu) }}" alt="{{ $pesertadidik->scan_ktp_ortu }}">
                                    @endif
                                </div>
                            </div>

                            @if (Auth::user()->is_data_verified == 3)
                            <input type="hidden" name="is_data_verified" value=1>
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-warning text-white float-right" style="width 100px">Ubah</button>
                            @endif    
                            </div>

                            @endforeach
                        </form>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection

{{-- D-}GW=Myz{k0/PY9P8za --}}