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
                        <form action="/calon/smp/store/{{ $user->id }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="number" name="is_data_verified" id="is_data_verified" hidden value=1>
                            
                            <div class="row">

                                <div class="col-md-6">

                                    <div class="mb-3 ml-3"><b><h4>DATA PRIBADI</h4></b>
                                
                                        <div class="form-group ml-3">
                                            <label for="nama_pd">Nama Lengkap</label>
                                                <input type="text" name="nama_pd" id="nama_pd" class="form-control @error('nama_pd') is-invalid @enderror" value="{{ old('nama_pd') }}">
                                                <small>Nama peserta didik sesuai dokumen resmi yang berlaku (Akta atau Ijazah sebelumnya ). Hanya bisa diubah melalui http://vervalpd.data.kemdikbud.go.id</small>
                                            
                                                @error('nama_pd')
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
                                            <label for="nisn">NISN</label>
                                            <input type="number" name="nisn" id="nisn" class="form-control @error('nisn') is-invalid @enderror" value="{{ old('nisn') }}">
                                            <small>Nomor Induk Siswa Nasional peserta didik (jika memiliki). Jika belum memiliki, maka wajib dikosongkan. NISN memiliki format 10 digit angka. Contoh: 0009321234. Untuk memeriksa NISN, dapat mengunjungi laman http://nisn.data.kemdikbud.go.id/page/data</small>

                                            @error('nisn')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="nik">NIK/No. KITAS (Untuk WNA)</label>
                                            <input type="number" name="nik" id="nik" class="form-control @error('nik') is-invalid @enderror" value="{{ old('nik') }}">
                                            <small>Nomor Induk Kependudukan yang tercantum pada Kartu Keluarga, Kartu Identitas Anak, atau KTP (jika sudah memiliki) bagi WNI. NIK memiliki format 16 digit angka. Contoh: 6112090906021104. <br> Pastikan NIK tidak tertukar dengan No. Kartu Keluarga, karena keduanya memiliki format yang sama. Bagi WNA, diisi dengan nomor Kartu Izin Tinggal Terbatas (KITAS)</small>

                                            @error('nik')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="no_kk">No. KK</label>
                                            <input type="number" name="no_kk" id="no_kk" class="form-control @error('no_kk') is-invalid @enderror" value="{{ old('no_kk') }}">

                                            @error('no_kk')
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
                                            <small>Tempat, tanggal lahir peserta didik sesuai dokumen resmi yang berlaku. Hanya bisa diubah melalui http://vervalpd.data.kemdikbud.go.id.</small>
                                        </div>
                                        
                                        <div class="form-group ml-3">
                                            <label for="no_akta">No Registrasi Akta Lahir</label>
                                            <input type="number" name="no_akta" id="no_akta" class="form-control @error('no_akta') is-invalid @enderror" value="{{ old('no_akta') }}">
                                            <small>Nomor registrasi Akta Kelahiran. Nomor registrasi yang dimaksud umumnya tercantum pada bagian tengah atas lembar kutipan akta kelahiran</small>

                                            @error('no_akta')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="agama">Agama</label>
                                            <select name="agama" id="agama" class="form-control @error('agama') is-invalid @enderror">
                                                    <option selected disabled>Pilih salah satu</option>
                                                        @for ($i = 0; $i < 5; $i++)
                                                        <option value="{{ $agama[$i] }}" @if(old('agama') == $agama[$i]) selected @endif>{{ $agama[$i] }}</option>
                                                        @endfor
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
                                            <label for="kebutuhan_khusus">Berkebutuhan Khusus</label>
                                            <select name="kebutuhan_khusus" id="kebutuhan_khusus" class="form-control @error('kebutuhan_khusus') is-invalid @enderror">
                                                    <option selected disabled>Pilih salah satu</option>
                                                        @for ($i = 1; $i < 17; $i++)
                                                        <option value="{{ $kebutuhan_khusus[$i] }}" @if(old('kebutuhan_khusus') == $kebutuhan_khusus[$i]) selected @endif>{{ $kebutuhan_khusus[$i] }}</option>
                                                        @endfor
                                            </select>
                                            
                                            @error('kebutuhan_khusus')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3 row">
                                            <label for="alamat_pd" class="col-12">Alamat</label>
                                            <input type="text" name="alamat_pd" id="alamat_pd" class="form-control" value="{{ old('alamat_pd') }}" placeholder="Jalan">
                                            @error('alamat_pd')
                                                <span class="invalid-feedback d-block" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <input type="number" name="rt" id="rt" class="form-control col-md-3" value="{{ old('rt') }}" placeholder="RT">
                                            @error('rt')
                                                <span class="invalid-feedback d-block" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <input type="number" name="rw" id="rw" class="form-control col-md-3" value="{{ old('rw') }}" placeholder="RW">
                                            @error('rw')
                                                <span class="invalid-feedback d-block" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <input type="text" name="dusun" id="dusun" class="form-control col-md-6" value="{{ old('dusun') }}" placeholder="Nama Dusun">
                                            @error('dusun')
                                                <span class="invalid-feedback d-block" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                            <input type="text" name="kelurahan" id="kelurahan" class="form-control col-md-6" value="{{ old('kelurahan') }}" placeholder="Kelurahan">

                                            @error('kelurahan')
                                                <span class="invalid-feedback d-block" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <input type="text" name="kecamatan" id="kecamatan" class="form-control col-md-6" value="{{ old('kecamatan') }}" placeholder="Kecamatan">
                                            @error('kecamatan')
                                                <span class="invalid-feedback d-block" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                            <input type="number" name="kode_pos" id="kode_pos" class="form-control col-md-4" value="{{ old('kode_pos') }}" placeholder="Kode Pos">
                                            @error('kode_pos')
                                                <span class="invalid-feedback d-block" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <input type="number" name="lintang" id="lintang" class="form-control col-md-4" value="{{ old('lintang') }}" placeholder="Lintang">
                                            @error('lintang')
                                                <span class="invalid-feedback d-block" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <input type="number" name="bujur" id="bujur" class="form-control col-md-4" value="{{ old('bujur') }}" placeholder="Bujur">
                                            @error('bujur')
                                                <span class="invalid-feedback d-block" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="tempat_tinggal">Tempat Tinggal</label>
                                            <select name="tempat_tinggal" id="tempat_tinggal" class="form-control @error('tempat_tinggal') is-invalid @enderror">
                                                    <option selected disabled>Pilih salah satu</option>
                                                    @for ($i = 0; $i < 3; $i++)
                                                        <option value="{{ $tempat_tinggal[$i] }}" @if(old('tempat_tinggal') == $tempat_tinggal[$i]) selected @endif>{{ $tempat_tinggal[$i] }}</option>
                                                        @endfor
                                            </select>
                                            
                                            @error('tempat_tinggal')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="moda_transportasi">Moda Transportasi</label>
                                            <select name="moda_transportasi" id="moda_transportasi" class="form-control @error('moda_transportasi') is-invalid @enderror">
                                                    <option selected disabled>Pilih salah satu</option>
                                                    @for ($i = 0; $i < 9; $i++)
                                                        <option value="{{ $moda_transportasi[$i] }}" @if(old('moda_transportasi') == $moda_transportasi[$i]) selected @endif>{{ $moda_transportasi[$i] }}</option>
                                                    @endfor
                                            </select>
                                            
                                            @error('moda_transportasi')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="anak_ke">Anak Keberapa</label>
                                            <input type="number" name="anak_ke" id="anak_ke" class="form-control @error('anak_ke') is-invalid @enderror" value="{{ old('anak_ke') }}">
                                            
                                            @error('anak_ke')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group ml-3 row">
                                            <label for="punya_kip">Apakah punya KIP</label>                                           
                                            <div class="form-check form-check-inline col-12">
                                                <input type="radio" name="punya_kip" id="punya_kip" class="form-check-input @error('punya_kip') is-invalid @enderror" value=1>
                                                <label for="punya_kip" class="form-check-label mr-3">Ya</label>

                                                <input type="radio" name="punya_kip" id="punya_kip" class="form-check-input @error('punya_kip') is-invalid @enderror" value=0>
                                                <label for="punya_kip" class="form-check-label">Tidak</label>
                                            </div>
                                            @error('punya_kip')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="tetap_menerima_kip">Apakah peserta didik tersebut tetap akan menerima KIP</label>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" name="tetap_menerima_kip" id="tetap_menerima_kip" class="form-check-input @error('tetap_menerima_kip') is-invalid @enderror" value=1>
                                                <label for="tetap_menerima_kip" class="form-check-label mr-3">Ya</label>

                                                <input type="radio" name="tetap_menerima_kip" id="tetap_menerima_kip" class="form-check-input @error('tetap_menerima_kip') is-invalid @enderror" value=0>
                                                <label for="tetap_menerima_kip" class="form-check-label">Tidak</label>
                                            </div>
                                            @error('tetap_menerima_kip')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="alasan_menolak_pip">Alasan Menolak PIP</label>
                                            <select name="alasan_menolak_pip" id="alasan_menolak_pip" class="form-control @error('alasan_menolak_pip') is-invalid @enderror">
                                                    <option selected disabled>Pilih salah satu</option>
                                                    <option value="Dilarang Pemda karena menerima bantuan serupa" @if (old('alasan_menolak_pip')  == "Dilarang Pemda karena menerima bantuan serupa") selected @endif>Dilarang Pemda karena menerima bantuan serupa</option>
                                                    <option value="Menolak" @if (old('alasan_menolak_pip')  == "Menolak") selected @endif>Menolak</option>
                                                    <option value="Sudah mampu" @if (old('alasan_menolak_pip')  == "Sudah mampu") selected @endif>Sudah mampu</option>
                                            </select>
                                            
                                            @error('alasan_menolak_pip')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>

                                    </div>

                                    <div class="mb-3 ml-3"><b><h4>KONTAK</h4></b>
                                    
                                        <div class="form-group ml-3">
                                            <label for="no_hp">Nomor Handphone</label>
                                            <input type="number" name="no_hp" id="no_hp" class="form-control @error('no_hp') is-invalid @enderror" value="{{ old('no_hp') }}">
                                            
                                            @error('no_hp')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="no_telp_rumah">Nomor Telepon Rumah</label>
                                            <input type="number" name="no_telp_rumah" id="no_telp_rumah" class="form-control @error('no_telp_rumah') is-invalid @enderror" value="{{ old('no_telp_rumah') }}">
                                            
                                            @error('no_telp_rumah')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="email">Email</label>
                                            <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
                                            
                                            @error('jemputan')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                    </div>

                                    <div class="mb-3 ml-3"><b><h4>DATA PERIODIK</h4></b>
                                        
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
                                            <label for="lingkar_kepala">lingkar Kepala</label>
                                            <div class="input-group-prepend  p-0">
                                                <input type="number" name="lingkar_kepala" id="lingkar_kepala" class="form-control @error('lingkar_kepala') is-invalid @enderror" value="{{ old('lingkar_kepala') }}">  
                                                <div class="input-group-text">Cm</div> 
                                            </div>   
                                            
                                            @error('lingkar_kepala')
                                                <span class="invalid-feedback d-block" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>

                                        <div class="form-group row ml-3">
                                            <label for="jarak_kesekolah" class="col-12">Jarak Ke Sekolah</label>
                                            <select name="jarak_kesekolah" id="jarak_kesekolah" class="form-control col-md-6 @error('jarak_kesekolah') is-invalid @enderror">
                                                    <option selected disabled>Pilih salah satu</option>
                                                    <option value="Kurang dari 1 Km" @if (old('jarak_kesekolah')  == "Kurang dari 1 Km") selected @endif>Kurang dari 1 Km</option>
                                                    <option value="Lebih dari 1 Km" @if (old('jarak_kesekolah')  == "Lebih dari 1 Km") selected @endif>Lebih dari 1 Km</option>
                                            </select>
                                            <div class="input-group-prepend col-md-6">
                                                <input type="number" name="rincian_jarak" id="rincian_jarak" class="form-control  @error('rincian_jarak') is-invalid @enderror" value="{{ old('rincian_jarak') }}">  
                                                <div class="input-group-text">Km</div> 
                                            </div>   
                                            
                                            @error('jarak_kesekolah')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="waktu_kesekolah">Waktu Tempuh Ke Sekolah</label>
                                            <input type="number" name="waktu_kesekolah" id="waktu_kesekolah" class="form-control @error('waktu_kesekolah') is-invalid @enderror" value="{{ old('waktu_kesekolah') }}" placeholder="Jam-Menit">
                                            
                                            @error('waktu_kesekolah')
                                                <span class="invalid-feedback d-block" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group ml-3">
                                            <label for="banyak_saudara_kandung">Banyak Saudara Kandung</label>
                                            <input type="number" name="banyak_saudara_kandung" id="banyak_saudara_kandung" class="form-control @error('banyak_saudara_kandung') is-invalid @enderror" value="{{ old('banyak_saudara_kandung') }}">
                                            
                                            @error('banyak_saudara_kandung')
                                                <span class="invalid-feedback d-block" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-3 ml-3"><b><h4>KESEJAHTERAAN PESERTA DIDIK</h4></b>
                                        
                                        <div class="form-group ml-3">
                                            <label for="jenis_kartu">Jenis Kesejahteraan</label>
                                            <select name="jenis_kartu" id="jenis_kartu" class="form-control @error('jenis_kartu') is-invalid @enderror" value="{{ old('jenis_kartu') }}" placeholder="Tanpa gelar">
                                                <option selected disabled>Pilih salah satu</option>
                                                <option value="PKH" @if(old('jenis_kartu') == 'PKH') selected @endif>PKH</option>
                                                <option value="PIP" @if(old('jenis_kartu') == 'PIP') selected @endif>PIP</option>
                                                <option value="Kartu Perlindungan Sosial" @if(old('jenis_kartu') == 'Kartu Perlindungan Sosial') selected @endif>Kartu Perlindungan Sosial</option>
                                                <option value="Kartu Keluarga Sejahtera" @if(old('jenis_kartu') == 'Kartu Keluarga Sejahtera') selected @endif>Kartu Keluarga Sejahtera</option>
                                                <option value="Kartu Kesehatan" @if(old('jenis_kartu') == 'Kartu Kesehatan') selected @endif>Kartu Kesehatan</option>    
                                            </select>
                                            
                                            @error('jenis_kartu')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="no_kartu">No. Kartu</label>
                                            <input type="number" name="no_kartu" id="no_kartu" class="form-control @error('no_kartu') is-invalid @enderror" value="{{ old('no_kartu') }}">
                                            
                                            @error('no_kartu')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="nama_dikartu">Nama di Kartu</label>
                                            <input type="text" name="nama_dikartu" id="nama_dikartu" class="form-control @error('nama_dikartu') is-invalid @enderror" value="{{ old('nama_dikartu') }}">
                                            
                                            @error('nama_dikartu')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                    </div>

                                    <div class="mb-3 ml-3"><b><h4>PRESTASI</h4></b>
                                        
                                        <div class="form-group ml-3">
                                            <label for="jenis_prestasi">Jenis</label>
                                            <select name="jenis_prestasi" id="jenis_prestasi" class="form-control @error('jenis_prestasi') is-invalid @enderror" value="{{ old('jenis_prestasi') }}" placeholder="Tanpa gelar">
                                                <option selected disabled>Pilih salah satu</option>
                                                <option value="Sains" @if(old('jenis_prestasi') == 'Sains') selected @endif>Sains</option>
                                                <option value="Seni" @if(old('jenis_prestasi') == 'Seni') selected @endif>Seni</option>
                                                <option value="Olahraga" @if(old('jenis_prestasi') == 'Olahraga') selected @endif>Olahraga</option>
                                                <option value="Lain-lain" @if(old('jenis_prestasi') == 'Lain-lain') selected @endif>Lain-lain</option>
                                            </select>
                                            <small>Jenis prestasi yang pernah diraih oleh peserta didik</small>
                                            
                                            @error('jenis_prestasi')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="tingkat">Tingkat</label>
                                            <select name="tingkat" id="tingkat" class="form-control @error('tingkat') is-invalid @enderror">
                                                    <option selected disabled>Pilih salah satu</option>
                                                    @for ($i = 0; $i < 5; $i++)
                                                        <option value="{{ $tingkat[$i] }}" @if(old('tingkat') == $tingkat[$i]) selected @endif>{{ $tingkat[$i] }}</option>
                                                    @endfor
                                            </select>
                                            <small>Tingkat penyelenggaraan prestasi yang pernah diraih oleh peserta didik</small>
                                            
                                            @error('tingkat')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="nama_prestasi">Nama Prestasi</label>
                                            <input type="text" name="nama_prestasi" id="nama_prestasi" class="form-control @error('nama_prestasi') is-invalid @enderror" value="{{ old('nama_prestasi') }}">
                                            <small>Nama kegiatan/acara dari prestasi yang pernah diraih oleh peserta didik. Contoh: Lomba Cerdas Cermat Bahasa Indonesia Tingkat SMP.
                                            Sesuaikan menurut piagam yang diperoleh.</small>
                                            
                                            @error('nama_prestasi')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="tahun">Tahun</label>
                                            <input type="number" name="tahun" id="tahun" class="form-control @error('tahun') is-invalid @enderror" value="{{ old('tahun') }}">
                                            <small>Tahun prestasi yang pernah diraih oleh peserta didik</small>
                                            
                                            @error('tahun')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="penyelenggara">penyelenggara</label>
                                            <input type="text" name="penyelenggara" id="penyelenggara" class="form-control @error('penyelenggara') is-invalid @enderror" value="{{ old('penyelenggara') }}">
                                            <small>Nama penyelenggara/panitia kegiatan dari prestasi yang pernah diraih oleh peserta didik. Contoh: Panitia O2SN dan FL2SN Kab. Bengkayang.
                                            Sesuaikan menurut piagam yang diperoleh.</small>
                                            
                                            @error('penyelenggara')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                    </div>
                                    
                                </div>

                                <div class="col-md-6">

                                    <div class="mb-3 ml-3"><b><h4>DATA AYAH KANDUNG</h4></b>
                                        
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
                                            <label for="nik_ayah">NIK Ayah</label>
                                            <input type="number" name="nik_ayah" id="nik_ayah" class="form-control @error('nik_ayah') is-invalid @enderror" value="{{ old('nik_ayah') }}">
                                            
                                            @error('nik_ayah')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group ml-3">
                                            <label for="lahir_ayah">Tahun Lahir</label>
                                            <input type="number" name="lahir_ayah" id="lahir_ayah" class="form-control @error('lahir_ayah') is-invalid @enderror" value="{{ old('lahir_ayah') }}">

                                            @error('lahir_ayah')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group ml-3">
                                            <label for="pendidikan_ayah">Pendidikan</label>
                                            <select name="pendidikan_ayah" id="pendidikan_ayah" class="form-control @error('pendidikan_ayah') is-invalid @enderror">
                                                    <option selected disabled>Pilih salah satu</option>
                                                    @for ($i = 0; $i < 11; $i++)
                                                        <option value="{{ $pendidikan[$i] }}" @if(old('pendidikan_ayah') == $pendidikan[$i]) selected @endif>{{ $pendidikan[$i] }}</option>
                                                    @endfor
                                            </select>
                                            
                                            @error('pendidikan_ayah')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group ml-3">
                                            <label for="pekerjaan_ayah">Pekerjaan</label>
                                            <select name="pekerjaan_ayah" id="pekerjaan_ayah" class="form-control @error('pekerjaan_ayah') is-invalid @enderror">
                                                    <option selected disabled>Pilih salah satu</option>
                                                    @for ($i = 0; $i < 12; $i++)
                                                        <option value="{{ $pekerjaan[$i] }}" @if(old('pekerjaan_ayah') == $pekerjaan[$i]) selected @endif>{{ $pekerjaan[$i] }}</option>
                                                    @endfor
                                            </select>
                                            
                                            @error('pekerjaan_ayah')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="penghasilan_ayah">Penghasilan Bulanan</label>
                                            <select name="penghasilan_ayah" id="penghasilan_ayah" class="form-control @error('penghasilan_ayah') is-invalid @enderror">
                                                    <option selected disabled>Pilih salah satu</option>
                                                    @for ($i = 0; $i < 7; $i++)
                                                        <option value="{{ $penghasilan[$i] }}" @if(old('penghasilan_ayah') == $penghasilan[$i]) selected @endif>{{ $penghasilan[$i] }}</option>
                                                    @endfor
                                            </select>
                                            
                                            @error('penghasilan_ayah')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="kebutuhan_khusus_ayah">Berkebutuhan Khusus</label>
                                            <select name="kebutuhan_khusus_ayah" id="kebutuhan_khusus_ayah" class="form-control @error('kebutuhan_khusus_ayah') is-invalid @enderror">
                                                    <option selected disabled>Pilih salah satu</option>
                                                    @for ($i = 1; $i < 10; $i++)
                                                        <option value="{{ $kebutuhan_khusus[$i] }}" @if(old('kebutuhan_khusus_ayah') == $kebutuhan_khusus[$i]) selected @endif>{{ $kebutuhan_khusus[$i] }}</option>
                                                    @endfor
                                            </select>
                                            
                                            @error('kebutuhan_khusus_ayah')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-3 ml-3"><b><h4>DATA IBU KANDUNG</h4></b>
                                        
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
                                            <label for="nik_ibu">NIK Ibu</label>
                                            <input type="number" name="nik_ibu" id="nik_ibu" class="form-control @error('nik_ibu') is-invalid @enderror" value="{{ old('nik_ibu') }}">
                                            
                                            @error('nik_ibu')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group ml-3">
                                            <label for="lahir_ibu">Tahun Lahir</label>
                                            <input type="number" name="lahir_ibu" id="lahir_ibu" class="form-control @error('lahir_ibu') is-invalid @enderror" value="{{ old('lahir_ibu') }}">

                                            @error('lahir_ibu')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group ml-3">
                                            <label for="pendidikan_ibu">Pendidikan</label>
                                            <select name="pendidikan_ibu" id="pendidikan_ibu" class="form-control @error('pendidikan_ibu') is-invalid @enderror">
                                                    <option selected disabled>Pilih salah satu</option>
                                                    @for ($i = 0; $i < 11; $i++)
                                                        <option value="{{ $pendidikan[$i] }}" @if(old('pendidikan_ibu') == $pendidikan[$i]) selected @endif>{{ $pendidikan[$i] }}</option>
                                                    @endfor
                                            </select>
                                            
                                            @error('pendidikan_ibu')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group ml-3">
                                            <label for="pekerjaan_ibu">Pekerjaan</label>
                                            <select name="pekerjaan_ibu" id="pekerjaan_ibu" class="form-control @error('pekerjaan_ibu') is-invalid @enderror">
                                                    <option selected disabled>Pilih salah satu</option>
                                                    @for ($i = 0; $i < 12; $i++)
                                                        <option value="{{ $pekerjaan[$i] }}" @if(old('pekerjaan_ibu') == $pekerjaan[$i]) selected @endif>{{ $pekerjaan[$i] }}</option>
                                                    @endfor
                                            </select>
                                            
                                            @error('pekerjaan_ibu')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="penghasilan_ibu">Penghasilan Bulanan</label>
                                            <select name="penghasilan_ibu" id="penghasilan_ibu" class="form-control @error('penghasilan_ibu') is-invalid @enderror">
                                                    <option selected disabled>Pilih salah satu</option>
                                                    @for ($i = 0; $i < 7; $i++)
                                                        <option value="{{ $penghasilan[$i] }}" @if(old('penghasilan_ibu') == $penghasilan[$i]) selected @endif>{{ $penghasilan[$i] }}</option>
                                                    @endfor
                                            </select>
                                            
                                            @error('penghasilan_ibu')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="kebutuhan_khusus_ibu">Berkebutuhan Khusus</label>
                                            <select name="kebutuhan_khusus_ibu" id="kebutuhan_khusus_ibu" class="form-control @error('kebutuhan_khusus_ibu') is-invalid @enderror">
                                                    <option selected disabled>Pilih salah satu</option>
                                                    @for ($i = 1; $i < 10; $i++)
                                                        <option value="{{ $kebutuhan_khusus[$i] }}" @if(old('kebutuhan_khusus_ibu') == $kebutuhan_khusus[$i]) selected @endif>{{ $kebutuhan_khusus[$i] }}</option>
                                                    @endfor
                                            </select>
                                            
                                            @error('kebutuhan_khusus_ibu')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-3 ml-3"><b><h4>DATA WALI (OPTIONAL</h4></b>
                                        
                                        <div class="form-group ml-3">
                                            <label for="nama_wali">Nama Lengkap</label>
                                            <input type="text" name="nama_wali" id="nama_wali" class="form-control @error('nama_wali') is-invalid @enderror" value="{{ old('nama_wali') }}" placeholder="Tanpa gelar">
                                            <small>Nama wali peserta didik sesuai dokumen resmi yang berlaku. Hindari penggunaan gelar akademik atau sosial (seperti Dr., Drs., S.Pd, dan H.)</small>
                                            
                                            @error('nama_wali')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="nik_wali">NIK Wali</label>
                                            <input type="number" name="nik_wali" id="nik_wali" class="form-control @error('nik_wali') is-invalid @enderror" value="{{ old('nik_wali') }}">
                                            <small>Nomor Induk Kependudukan yang tercantum pada Kartu Keluarga atau KTP wali peserta didik</small>
                                            
                                            @error('nik_wali')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group ml-3">
                                            <label for="lahir_wali">Tahun Lahir</label>
                                            <input type="number" name="lahir_wali" id="lahir_wali" class="form-control @error('lahir_wali') is-invalid @enderror" value="{{ old('lahir_wali') }}">
                                            <small>Tahun lahir wali peserta didik</small>

                                            @error('lahir_wali')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group ml-3">
                                            <label for="pendidikan_wali">Pendidikan</label>
                                            <select name="pendidikan_wali" id="pendidikan_wali" class="form-control @error('pendidikan_wali') is-invalid @enderror">
                                                    <option selected disabled>Pilih salah satu</option>
                                                    @for ($i = 0; $i < 11; $i++)
                                                        <option value="{{ $pendidikan[$i] }}" @if(old('pendidikan_wali') == $pendidikan[$i]) selected @endif>{{ $pendidikan[$i] }}</option>
                                                    @endfor
                                            </select>
                                            <small>Pendidikan terakhir wali peserta didik</small>
                                            
                                            @error('pendidikan_wali')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group ml-3">
                                            <label for="pekerjaan_wali">Pekerjaan</label>
                                            <select name="pekerjaan_wali" id="pekerjaan_wali" class="form-control @error('pekerjaan_wali') is-invalid @enderror">
                                                    <option selected disabled>Pilih salah satu</option>
                                                    @for ($i = 0; $i < 12; $i++)
                                                        <option value="{{ $pekerjaan[$i] }}" @if(old('pekerjaan_wali') == $pekerjaan[$i]) selected @endif>{{ $pekerjaan[$i] }}</option>
                                                    @endfor
                                            </select>
                                            <small>Pekerjaan utama wali peserta didik.</small>
                                            
                                            @error('pekerjaan_wali')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="penghasilan_wali">Penghasilan Bulanan</label>
                                            <select name="penghasilan_wali" id="penghasilan_wali" class="form-control @error('penghasilan_wali') is-invalid @enderror">
                                                    <option selected disabled>Pilih salah satu</option>
                                                    @for ($i = 0; $i < 7; $i++)
                                                        <option value="{{ $penghasilan[$i] }}" @if(old('penghasilan_wali') == $penghasilan[$i]) selected @endif>{{ $penghasilan[$i] }}</option>
                                                    @endfor
                                            </select>
                                            <small>Rentang penghasilanwali peserta didik. Kosongkan kolom ini apabila wali tidak bekerja</small>
                                            
                                            @error('penghasilan_wali')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-3 ml-3"><b><h4>REGISTRASI PD</h4></b>
                                        
                                        <div class="form-group ml-3">
                                            <label for="kompetensi_keahlian">Komptensi Keahlian</label>
                                            <input type="text" name="kompetensi_keahlian" id="kompetensi_keahlian" class="form-control @error('kompetensi_keahlian') is-invalid @enderror" value="{{ old('kompetensi_keahlian') }}">
                                            <small>kompentensi keahlian yang dipilih oleh peserta didik saat diterima di sekolah ini (khusus SMK).</small>

                                            @error('kompetensi_keahlian')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="jenis_pendaftaran">Jenis Pendaftaran</label>
                                            <select name="jenis_pendaftaran" id="jenis_pendaftaran" class="form-control @error('jenis_pendaftaran') is-invalid @enderror">
                                                    <option selected disabled>Pilih salah satu</option>
                                                    <option value="Siswa baru" @if (old('jenis_pendaftaran')  == "Siswa baru") selected @endif>Siswa baru</option>
                                                    <option value="Pindahan" @if (old('jenis_pendaftaran')  == "Pindahan") selected @endif>Pindahan</option>
                                                    <option value="Kembali bersekolah" @if (old('jenis_pendaftaran')  == "Kembali bersekolah") selected @endif>Kembali bersekolah</option>
                                            </select>
                                            <small>Status peserta didik saat pertama kali diterima di sekolah ini.</small>

                                            @error('jenis_pendaftaran')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="nis">NIS/Nomor Induk PD</label>
                                            <input type="number" name="nis" id="nis" class="form-control @error('nis') is-invalid @enderror" value="{{ old('nis') }}">
                                            <small>Nomor induk peserta didik sesuai yang tercantum pada buku induk</small>

                                            @error('nis')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="tgl_masuk">Tanggal Masuk</label>
                                            <input type="date" name="tgl_masuk" id="tgl_masuk" class="form-control @error('tgl_masuk') is-invalid @enderror" value="{{ old('tgl_masuk') }}">
                                            <small>Tanggal pertama kali peserta didik diterima di sekolah ini. Jika siswa baru, maka isikan tanggal awal tahun pelajaran saat peserta didik masuk. Jika
                                            siswa mutasi/pindahan, maka isikan tanggal sesuai tanggal diterimanya peserta didik di sekolah ini atau tanggal yang tercantum pada lembar mutasi
                                            masuk yang umumnya terdapat di bagian akhir buku rapor</small>

                                            @error('tgl_masuk')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="asal_sekolah">Sekolah Asal</label>
                                            <input type="date" name="asal_sekolah" id="asal_sekolah" class="form-control @error('asal_sekolah') is-invalid @enderror" value="{{ old('asal_sekolah') }}">
                                            <small>Nama sekolah peserta didik sebelumnya. Untuk peserta didik baru, isikan nama sekolah pada jenjang sebelumnya. Sedangkan bagi peserta didik
                                            mutasi/pindahan, diisi dengan nama sekolah sebelum pindah ke sekolah saat ini.</small>
                                            
                                            @error('asal_sekolah')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="no_un">No. Peserta UN SMP/MTs</label>
                                            <input type="numbebr" name="no_un" id="no_un" class="form-control @error('no_un') is-invalid @enderror" value="{{ old('no_un') }}">
                                            <small>* Nomor peserta Ujian adalah 20 Digit yang tertera dalam SKHU (Format Baku 2-12-02-01-001-002-7), diisi bagi peserta didik jenjang SMP <br>
                                            Nomor peserta ujian saat peserta didik masih di jenjang sebelumnya. Formatnya adalah x-xx-xx-xx-xxx-xxx-x (20 digit). Untuk Peserta Didik WNA,
                                            diisi dengan Luar Negeri.</small>

                                            @error('no_un')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="no_ijazah">No. Seri Ijazah SMP/MTs</label>
                                            <input type="text" name="no_ijazah" id="no_ijazah" class="form-control @error('no_ijazah') is-invalid @enderror" value="{{ old('no_ijazah') }}">
                                            <small>Nomor seri ijazah peserta didik pada jenjang sebelumnya</small>
                                            
                                            @error('no_ijazah')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="no_skhun">No. Seri SKHUN SMP/MTs</label>
                                            <input type="text" name="no_skhun" id="no_skhun" class="form-control @error('no_skhun') is-invalid @enderror" value="{{ old('no_skhun') }}">
                                            <small>Nomor seri SKHUN/SHUN peserta didik pada jenjang sebelumnya (jika memiliki).</small>

                                            @error('no_skhun')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                    </div>

                                    <div class="mb-3 ml-3"><b><h4>BEASISWA</h4></b>
                                        
                                        <div class="form-group ml-3">
                                            <label for="jenis_beasiswa">Jenis</label>
                                            <select name="jenis_beasiswa" id="jenis_beasiswa" class="form-control @error('jenis_beasiswa') is-invalid @enderror" value="{{ old('jenis_beasiswa') }}" placeholder="Tanpa gelar">
                                                <option selected disabled>Pilih salah satu</option>
                                                <option value="Anak Berprestasi" @if(old('jenis_beasiswa') == 'Anak Berprestasi') selected @endif>Anak Berprestasi</option>
                                                <option value="Anak Miskin" @if(old('jenis_beasiswa') == 'Anak Miskin') selected @endif>Anak Miskin</option>
                                                <option value="Pendidikan" @if(old('jenis_beasiswa') == 'Pendidikan') selected @endif>Pendidikan</option>
                                                <option value="Unggulan" @if(old('jenis_beasiswa') == 'Unggulan') selected @endif>Unggulan</option>
                                            </select>
                                            <small>Jenis beasiswa yang pernah diterima oleh peserta didik</small>
                                            
                                            @error('jenis_beasiswa')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="keterangan">Keterangan</label>
                                            <input type="text" name="keterangan" id="keterangan" class="form-control @error('keterangan') is-invalid @enderror" value="{{ old('keterangan') }}">
                                            <small>Keterangan terkait beasiswa yang pernah diterima oleh peserta didik. Misalnya dapat diisi dengan nama beasiswa, seperti Beasiswa Murid Berprestasi Tahun 2017, atau
                                            keterangan lain yang relevan</small>
                                            
                                            @error('keterangan')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="tahun_mulai">Tahun Mulai</label>
                                            <input type="number" name="tahun_mulai" id="tahun_mulai" class="form-control @error('tahun_mulai') is-invalid @enderror" value="{{ old('tahun_mulai') }}">
                                            <small>Tahun mulai diterimanya beasiswa oleh peserta didik</small>
                                            
                                            @error('tahun_mulai')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="tahun_selesai">Tahun Selesai</label>
                                            <input type="number" name="tahun_selesai" id="tahun_selesai" class="form-control @error('tahun_selesai') is-invalid @enderror" value="{{ old('tahun_selesai') }}">
                                            <small>Tahun selesai diterimanya beasiswa oleh peserta didik. Apabila beasiswa tersebut hanya diterima sekali dalam tahun yang sama, maka diisi sama seperti Tahun Mulai</small>

                                            @error('tahun_selesai')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                    </div>

                                </div>
                                
                                <div class="mb-3 ml-3 d-md-flex justify-content-center"><b><h4>DOKUMEN</h4></b>
                                        
                                    <div class="form-group ml-3">
                                        <label for="foto_pd">Pas Foto 3 X 4</label>
                                        <input type="file" name="foto_pd" id="foto_pd" class="form-control @error('foto_pd') is-invalid @enderror">
                                        
                                        @error('foto_pd')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                        @enderror
                                    </div>
                                    
                                    <div class="form-group ml-3">
                                        <label for="scan_ijazah">Scan Ijazah SMP/MTs</label>
                                        <input type="file" name="scan_ijazah" id="scan_ijazah" class="form-control @error('scan_ijazah') is-invalid @enderror">
                                        
                                        @error('scan_ijazah')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                        @enderror
                                    </div>
                                    
                                    <div class="form-group ml-3">
                                        <label for="scan_skhun">Scan SKHUN SMP/MTs</label>
                                        <input type="file" name="scan_skhun" id="scan_skhun" class="form-control @error('scan_skhun') is-invalid @enderror">
                                        
                                        @error('scan_skhun')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                        @enderror
                                    </div>

                                </div>
                                
                            </div>
                            
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary float-right" style="width 100px">Kirim</button>
                            </div>
                        </form>
                    </div>
                @else
                    <div class="card-body mt-3">
                        <br>
                        <form action="/calon/smp/update/{{ $user->id }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            @foreach ($calon_siswa_smps as $pesertadidik)
                            
                            <div class="row">

                                <div class="col-md-6">

                                    <div class="mb-3 ml-3"><b><h4>DATA PRIBADI</h4></b>
                                
                                        <div class="form-group ml-3">
                                            <label for="nama_pd">Nama Lengkap</label>
                                                <input type="text" name="nama_pd" id="nama_pd" class="form-control @error('nama_pd') is-invalid @enderror" value="{{ $pesertadidik->nama_pd }}">
                                                <small>Nama peserta didik sesuai dokumen resmi yang berlaku (Akta atau Ijazah sebelumnya ). Hanya bisa diubah melalui http://vervalpd.data.kemdikbud.go.id</small>
                                            
                                                @error('nama_pd')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="jenis_kelamin">Jenis Kelamin</label>
                                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control @error('jenis_kelamin') is-invalid @enderror">
                                                    <option selected disabled>Pilih salah satu</option>
                                                    <option value="Laki-laki" @if ($pesertadidik->jenis_kelamin  == "Laki-laki") selected @endif>Laki-laki</option>
                                                    <option value="Perempuan" @if ($pesertadidik->jenis_kelamin  == "Perempuan") selected @endif>Perempuan</option>
                                            </select>
                                            
                                            @error('jenis_kelamin')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="nisn">NISN</label>
                                            <input type="number" name="nisn" id="nisn" class="form-control @error('nisn') is-invalid @enderror" value="{{ $pesertadidik->nisn }}">
                                            <small>Nomor Induk Siswa Nasional peserta didik (jika memiliki). Jika belum memiliki, maka wajib dikosongkan. NISN memiliki format 10 digit angka. Contoh: 0009321234. Untuk memeriksa NISN, dapat mengunjungi laman http://nisn.data.kemdikbud.go.id/page/data</small>

                                            @error('nisn')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="nik">NIK/No. KITAS (Untuk WNA)</label>
                                            <input type="number" name="nik" id="nik" class="form-control @error('nik') is-invalid @enderror" value="{{ $pesertadidik->nik }}">
                                            <small>Nomor Induk Kependudukan yang tercantum pada Kartu Keluarga, Kartu Identitas Anak, atau KTP (jika sudah memiliki) bagi WNI. NIK memiliki format 16 digit angka. Contoh: 6112090906021104. <br> Pastikan NIK tidak tertukar dengan No. Kartu Keluarga, karena keduanya memiliki format yang sama. Bagi WNA, diisi dengan nomor Kartu Izin Tinggal Terbatas (KITAS)</small>

                                            @error('nik')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="no_kk">No. KK</label>
                                            <input type="number" name="no_kk" id="no_kk" class="form-control @error('no_kk') is-invalid @enderror" value="{{ $pesertadidik->no_kk }}">

                                            @error('no_kk')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group ml-3">
                                            <label for="tempat_lahir">Tempat, Tanggal Lahir </label>
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
                                            <small>Tempat, tanggal lahir peserta didik sesuai dokumen resmi yang berlaku. Hanya bisa diubah melalui http://vervalpd.data.kemdikbud.go.id.</small>
                                        </div>
                                        
                                        <div class="form-group ml-3">
                                            <label for="no_akta">No Registrasi Akta Lahir</label>
                                            <input type="number" name="no_akta" id="no_akta" class="form-control @error('no_akta') is-invalid @enderror" value="{{ $pesertadidik->no_akta }}">
                                            <small>Nomor registrasi Akta Kelahiran. Nomor registrasi yang dimaksud umumnya tercantum pada bagian tengah atas lembar kutipan akta kelahiran</small>

                                            @error('no_akta')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="agama">Agama</label>
                                            <select name="agama" id="agama" class="form-control @error('agama') is-invalid @enderror">
                                                    <option selected disabled>Pilih salah satu</option>
                                                        @for ($i = 0; $i < 5; $i++)
                                                        <option value="{{ $agama[$i] }}" @if( $pesertadidik->agama == $agama[$i] ) selected @endif>{{ $agama[$i] }}</option>
                                                        @endfor
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
                                            <label for="kebutuhan_khusus">Berkebutuhan Khusus</label>
                                            <select name="kebutuhan_khusus" id="kebutuhan_khusus" class="form-control @error('kebutuhan_khusus') is-invalid @enderror">
                                                    <option selected disabled>Pilih salah satu</option>
                                                        @for ($i = 1; $i < 17; $i++)
                                                        <option value="{{ $kebutuhan_khusus[$i] }}" @if($pesertadidik->kebutuhan_khusus == $kebutuhan_khusus[$i]) selected @endif>{{ $kebutuhan_khusus[$i] }}</option>
                                                        @endfor
                                            </select>
                                            
                                            @error('kebutuhan_khusus')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3 row">
                                            <label for="alamat_pd" class="col-12">Alamat</label>
                                            <input type="text" name="alamat_pd" id="alamat_pd" class="form-control" value="{{ $pesertadidik->alamat_pd }}" placeholder="Jalan">
                                            @error('alamat_pd')
                                                <span class="invalid-feedback d-block" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <input type="number" name="rt" id="rt" class="form-control col-md-3" value="{{ $pesertadidik->rt }}" placeholder="RT">
                                            @error('rt')
                                                <span class="invalid-feedback d-block" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <input type="number" name="rw" id="rw" class="form-control col-md-3" value="{{ $pesertadidik->rw }}" placeholder="RW">
                                            @error('rw')
                                                <span class="invalid-feedback d-block" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <input type="text" name="dusun" id="dusun" class="form-control col-md-6" value="{{ $pesertadidik->dusun }}" placeholder="Nama Dusun">
                                            @error('dusun')
                                                <span class="invalid-feedback d-block" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                            <input type="text" name="kelurahan" id="kelurahan" class="form-control col-md-6" value="{{ $pesertadidik->kelurahan }}" placeholder="Kelurahan">

                                            @error('kelurahan')
                                                <span class="invalid-feedback d-block" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <input type="text" name="kecamatan" id="kecamatan" class="form-control col-md-6" value="{{ $pesertadidik->kecamatan }}" placeholder="Kecamatan">
                                            @error('kecamatan')
                                                <span class="invalid-feedback d-block" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                            <input type="number" name="kode_pos" id="kode_pos" class="form-control col-md-4" value="{{ $pesertadidik->kode_pos }}" placeholder="Kode Pos">
                                            @error('kode_pos')
                                                <span class="invalid-feedback d-block" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <input type="number" name="lintang" id="lintang" class="form-control col-md-4" value="{{ $pesertadidik->lintang }}" placeholder="Lintang">
                                            @error('lintang')
                                                <span class="invalid-feedback d-block" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <input type="number" name="bujur" id="bujur" class="form-control col-md-4" value="{{ $pesertadidik->bujur }}" placeholder="Bujur">
                                            @error('bujur')
                                                <span class="invalid-feedback d-block" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="tempat_tinggal">Tempat Tinggal</label>
                                            <select name="tempat_tinggal" id="tempat_tinggal" class="form-control @error('tempat_tinggal') is-invalid @enderror">
                                                    <option selected disabled>Pilih salah satu</option>
                                                    @for ($i = 0; $i < 3; $i++)
                                                        <option value="{{ $tempat_tinggal[$i] }}" @if($pesertadidik->tempat_tinggal == $tempat_tinggal[$i]) selected @endif>{{ $tempat_tinggal[$i] }}</option>
                                                        @endfor
                                            </select>
                                            
                                            @error('tempat_tinggal')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="moda_transportasi">Moda Transportasi</label>
                                            <select name="moda_transportasi" id="moda_transportasi" class="form-control @error('moda_transportasi') is-invalid @enderror">
                                                    <option selected disabled>Pilih salah satu</option>
                                                    @for ($i = 0; $i < 9; $i++)
                                                        <option value="{{ $moda_transportasi[$i] }}" @if($pesertadidik->moda_transportasi == $moda_transportasi[$i])) selected @endif>{{ $moda_transportasi[$i] }}</option>
                                                    @endfor
                                            </select>
                                            
                                            @error('moda_transportasi')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="anak_ke">Anak Keberapa</label>
                                            <input type="number" name="anak_ke" id="anak_ke" class="form-control @error('anak_ke') is-invalid @enderror" value="{{ $pesertadidik->anak_ke }}">
                                            
                                            @error('anak_ke')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group ml-3 row">
                                            <label for="punya_kip">Apakah punya KIP</label>                                           
                                            <div class="form-check form-check-inline col-12">
                                                <input type="radio" name="punya_kip" id="punya_kip" class="form-check-input @error('punya_kip') is-invalid @enderror" value=1 @if($pesertadidik->punya_kip == 1) checked="checked" @endif>
                                                <label for="punya_kip" class="form-check-label mr-3">Ya</label>

                                                <input type="radio" name="punya_kip" id="punya_kip" class="form-check-input @error('punya_kip') is-invalid @enderror" value=0 @if($pesertadidik->punya_kip == 0) checked="checked" @endif>
                                                <label for="punya_kip" class="form-check-label">Tidak</label>
                                            </div>
                                            @error('punya_kip')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="tetap_menerima_kip">Apakah peserta didik tersebut tetap akan menerima KIP</label>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" name="tetap_menerima_kip" id="tetap_menerima_kip" class="form-check-input @error('tetap_menerima_kip') is-invalid @enderror" value=1 @if($pesertadidik->tetap_menerima_kip == 1) checked="checked" @endif>
                                                <label for="tetap_menerima_kip" class="form-check-label mr-3">Ya</label>

                                                <input type="radio" name="tetap_menerima_kip" id="tetap_menerima_kip" class="form-check-input @error('tetap_menerima_kip') is-invalid @enderror" value=0 @if($pesertadidik->tetap_menerima_kip == 0) checked="checked" @endif>
                                                <label for="tetap_menerima_kip" class="form-check-label">Tidak</label>
                                            </div>
                                            @error('tetap_menerima_kip')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="alasan_menolak_pip">Alasan Menolak PIP</label>
                                            <select name="alasan_menolak_pip" id="alasan_menolak_pip" class="form-control @error('alasan_menolak_pip') is-invalid @enderror">
                                                    <option selected disabled>Pilih salah satu</option>
                                                    <option value="Dilarang Pemda karena menerima bantuan serupa" @if ($pesertadidik->alasan_menolak_pip  == "Dilarang Pemda karena menerima bantuan serupa") selected @endif>Dilarang Pemda karena menerima bantuan serupa</option>
                                                    <option value="Menolak" @if ($pesertadidik->alasan_menolak_pip  == "Menolak") selected @endif>Menolak</option>
                                                    <option value="Sudah mampu" @if ($pesertadidik->alasan_menolak_pip  == "Sudah mampu") selected @endif>Sudah mampu</option>
                                            </select>
                                            
                                            @error('alasan_menolak_pip')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>

                                    </div>

                                    <div class="mb-3 ml-3"><b><h4>KONTAK</h4></b>
                                    
                                        <div class="form-group ml-3">
                                            <label for="no_hp">Nomor Handphone</label>
                                            <input type="number" name="no_hp" id="no_hp" class="form-control @error('no_hp') is-invalid @enderror" value="{{ $pesertadidik->no_hp }}">
                                            
                                            @error('no_hp')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="no_telp_rumah">Nomor Telepon Rumah</label>
                                            <input type="number" name="no_telp_rumah" id="no_telp_rumah" class="form-control @error('no_telp_rumah') is-invalid @enderror" value="{{ $pesertadidik->no_telp_rumah }}">
                                            
                                            @error('no_telp_rumah')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="email">Email</label>
                                            <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ $pesertadidik->email }}">
                                            
                                            @error('jemputan')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                    </div>

                                    <div class="mb-3 ml-3"><b><h4>DATA PERIODIK</h4></b>
                                        
                                        <div class="form-group ml-3">
                                            <label for="berat">Berat Badan</label>
                                            
                                            <div class="input-group-prepend  p-0">
                                                <input type="number" name="berat" id="berat" class="form-control @error('berat') is-invalid @enderror" value="{{ $pesertadidik->berat }}">  
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
                                                <input type="number" name="tinggi" id="tinggi" class="form-control @error('tinggi') is-invalid @enderror" value="{{ $pesertadidik->tinggi }}">  
                                                <div class="input-group-text">Cm</div> 
                                            </div>   
                                            
                                            @error('tinggi')
                                                <span class="invalid-feedback d-block" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="lingkar_kepala">lingkar Kepala</label>
                                            <div class="input-group-prepend  p-0">
                                                <input type="number" name="lingkar_kepala" id="lingkar_kepala" class="form-control @error('lingkar_kepala') is-invalid @enderror" value="{{ $pesertadidik->lingkar_kepala }}">  
                                                <div class="input-group-text">Cm</div> 
                                            </div>   
                                            
                                            @error('lingkar_kepala')
                                                <span class="invalid-feedback d-block" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>

                                        <div class="form-group row ml-3">
                                            <label for="jarak_kesekolah" class="col-12">Jarak Ke Sekolah</label>
                                            <select name="jarak_kesekolah" id="jarak_kesekolah" class="form-control col-md-6 @error('jarak_kesekolah') is-invalid @enderror">
                                                    <option selected disabled>Pilih salah satu</option>
                                                    <option value="Kurang dari 1 Km" @if ($pesertadidik->jarak_kesekolah  == "Kurang dari 1 Km") selected @endif>Kurang dari 1 Km</option>
                                                    <option value="Lebih dari 1 Km" @if ($pesertadidik->jarak_kesekolah  == "Lebih dari 1 Km") selected @endif>Lebih dari 1 Km</option>
                                            </select>
                                            <div class="input-group-prepend col-md-6">
                                                <input type="number" name="rincian_jarak" id="rincian_jarak" class="form-control  @error('rincian_jarak') is-invalid @enderror" value="{{ $pesertadidik->rincian_jarak }}">  
                                                <div class="input-group-text">Km</div> 
                                            </div>   
                                            
                                            @error('jarak_kesekolah')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="waktu_kesekolah">Waktu Tempuh Ke Sekolah</label>
                                            <input type="number" name="waktu_kesekolah" id="waktu_kesekolah" class="form-control @error('waktu_kesekolah') is-invalid @enderror" value="{{ $pesertadidik->waktu_kesekolah }}" placeholder="Jam-Menit">
                                            
                                            @error('waktu_kesekolah')
                                                <span class="invalid-feedback d-block" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group ml-3">
                                            <label for="banyak_saudara_kandung">Banyak Saudara Kandung</label>
                                            <input type="number" name="banyak_saudara_kandung" id="banyak_saudara_kandung" class="form-control @error('banyak_saudara_kandung') is-invalid @enderror" value="{{ $pesertadidik->banyak_saudara_kandung }}">
                                            
                                            @error('banyak_saudara_kandung')
                                                <span class="invalid-feedback d-block" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-3 ml-3"><b><h4>KESEJAHTERAAN PESERTA DIDIK</h4></b>
                                        
                                        <div class="form-group ml-3">
                                            <label for="jenis_kartu">Jenis Kesejahteraan</label>
                                            <select name="jenis_kartu" id="jenis_kartu" class="form-control @error('jenis_kartu') is-invalid @enderror" placeholder="Tanpa gelar">
                                                <option selected disabled>Pilih salah satu</option>
                                                <option value="PKH" @if($pesertadidik->jenis_kartu == 'PKH') selected @endif>PKH</option>
                                                <option value="PIP" @if($pesertadidik->jenis_kartu == 'PIP') selected @endif>PIP</option>
                                                <option value="Kartu Perlindungan Sosial" @if($pesertadidik->jenis_kartu == 'Kartu Perlindungan Sosial') selected @endif>Kartu Perlindungan Sosial</option>
                                                <option value="Kartu Keluarga Sejahtera" @if($pesertadidik->jenis_kartu == 'Kartu Keluarga Sejahtera') selected @endif>Kartu Keluarga Sejahtera</option>
                                                <option value="Kartu Kesehatan" @if($pesertadidik->jenis_kartu == 'Kartu Kesehatan') selected @endif>Kartu Kesehatan</option>    
                                            </select>
                                            
                                            @error('jenis_kartu')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="no_kartu">No. Kartu</label>
                                            <input type="number" name="no_kartu" id="no_kartu" class="form-control @error('no_kartu') is-invalid @enderror" value="{{ $pesertadidik->no_kartu }}">
                                            
                                            @error('no_kartu')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="nama_dikartu">Nama di Kartu</label>
                                            <input type="text" name="nama_dikartu" id="nama_dikartu" class="form-control @error('nama_dikartu') is-invalid @enderror" value="{{ $pesertadidik->nama_dikartu }}">
                                            
                                            @error('nama_dikartu')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                    </div>
                                    
                                    <div class="mb-3 ml-3"><b><h4>PRESTASI</h4></b>
                                        
                                        <div class="form-group ml-3">
                                            <label for="jenis_prestasi">Jenis</label>
                                            <select name="jenis_prestasi" id="jenis_prestasi" class="form-control @error('jenis_prestasi') is-invalid @enderror" placeholder="Tanpa gelar">
                                                <option selected disabled>Pilih salah satu</option>
                                                <option value="Sains" @if($pesertadidik->user->prestasi->jenis_prestasi == 'Sains') selected @endif>Sains</option>
                                                <option value="Seni" @if($pesertadidik->user->prestasi->jenis_prestasi == 'Seni') selected @endif>Seni</option>
                                                <option value="Olahraga" @if($pesertadidik->user->prestasi->jenis_prestasi == 'Olahraga') selected @endif>Olahraga</option>
                                                <option value="Lain-lain" @if($pesertadidik->user->prestasi->jenis_prestasi == 'Lain-lain') selected @endif>Lain-lain</option>
                                            </select>
                                            <small>Jenis prestasi yang pernah diraih oleh peserta didik</small>
                                            
                                            @error('jenis_prestasi')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="tingkat">Tingkat</label>
                                            <select name="tingkat" id="tingkat" class="form-control @error('tingkat') is-invalid @enderror">
                                                    <option selected disabled>Pilih salah satu</option>
                                                    @for ($i = 0; $i < 5; $i++)
                                                        <option value="{{ $tingkat[$i] }}" @if($pesertadidik->user->prestasi->tingkat == $tingkat[$i]) selected @endif>{{ $tingkat[$i] }}</option>
                                                    @endfor
                                            </select>
                                            <small>Tingkat penyelenggaraan prestasi yang pernah diraih oleh peserta didik</small>
                                            
                                            @error('tingkat')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="nama_prestasi">Nama Prestasi</label>
                                            <input type="text" name="nama_prestasi" id="nama_prestasi" class="form-control @error('nama_prestasi') is-invalid @enderror" value="{{ $pesertadidik->user->prestasi->nama_prestasi }}">
                                            <small>Nama kegiatan/acara dari prestasi yang pernah diraih oleh peserta didik. Contoh: Lomba Cerdas Cermat Bahasa Indonesia Tingkat SMP.
                                            Sesuaikan menurut piagam yang diperoleh.</small>
                                            
                                            @error('nama_prestasi')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="tahun">Tahun</label>
                                            <input type="number" name="tahun" id="tahun" class="form-control @error('tahun') is-invalid @enderror" value="{{ $pesertadidik->user->prestasi->tahun }}">
                                            <small>Tahun prestasi yang pernah diraih oleh peserta didik</small>
                                            
                                            @error('tahun')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="penyelenggara">Penyelenggara</label>
                                            <input type="text" name="penyelenggara" id="penyelenggara" class="form-control @error('penyelenggara') is-invalid @enderror" value="{{ $pesertadidik->user->prestasi->penyelenggara }}">
                                            <small>Nama penyelenggara/panitia kegiatan dari prestasi yang pernah diraih oleh peserta didik. Contoh: Panitia O2SN dan FL2SN Kab. Bengkayang.
                                            Sesuaikan menurut piagam yang diperoleh.</small>
                                            
                                            @error('penyelenggara')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                    </div>

                                </div>

                                <div class="col-md-6">

                                    <div class="mb-3 ml-3"><b><h4>DATA AYAH KANDUNG</h4></b>
                                        
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
                                            <label for="nik_ayah">NIK Ayah</label>
                                            <input type="number" name="nik_ayah" id="nik_ayah" class="form-control @error('nik_ayah') is-invalid @enderror" value="{{ $pesertadidik->nik_ayah }}">
                                            
                                            @error('nik_ayah')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group ml-3">
                                            <label for="lahir_ayah">Tahun Lahir</label>
                                            <input type="number" name="lahir_ayah" id="lahir_ayah" class="form-control @error('lahir_ayah') is-invalid @enderror" value="{{ $pesertadidik->lahir_ayah }}">

                                            @error('lahir_ayah')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group ml-3">
                                            <label for="pendidikan_ayah">Pendidikan</label>
                                            <select name="pendidikan_ayah" id="pendidikan_ayah" class="form-control @error('pendidikan_ayah') is-invalid @enderror">
                                                    <option selected disabled>Pilih salah satu</option>
                                                    @for ($i = 0; $i < 11; $i++)
                                                        <option value="{{ $pendidikan[$i] }}" @if($pesertadidik->pendidikan_ayah == $pendidikan[$i]) selected @endif>{{ $pendidikan[$i] }}</option>
                                                    @endfor
                                            </select>
                                            
                                            @error('pendidikan_ayah')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group ml-3">
                                            <label for="pekerjaan_ayah">Pekerjaan</label>
                                            <select name="pekerjaan_ayah" id="pekerjaan_ayah" class="form-control @error('pekerjaan_ayah') is-invalid @enderror">
                                                    <option selected disabled>Pilih salah satu</option>
                                                    @for ($i = 0; $i < 12; $i++)
                                                        <option value="{{ $pekerjaan[$i] }}" @if($pesertadidik->pekerjaan_ayah == $pekerjaan[$i]) selected @endif>{{ $pekerjaan[$i] }}</option>
                                                    @endfor
                                            </select>
                                            
                                            @error('pekerjaan_ayah')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="penghasilan_ayah">Penghasilan Bulanan</label>
                                            <select name="penghasilan_ayah" id="penghasilan_ayah" class="form-control @error('penghasilan_ayah') is-invalid @enderror">
                                                    <option selected disabled>Pilih salah satu</option>
                                                    @for ($i = 0; $i < 7; $i++)
                                                        <option value="{{ $penghasilan[$i] }}" @if($pesertadidik->penghasilan_ayah == $penghasilan[$i]) selected @endif>{{ $penghasilan[$i] }}</option>
                                                    @endfor
                                            </select>
                                            
                                            @error('penghasilan_ayah')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="kebutuhan_khusus_ayah">Berkebutuhan Khusus</label>
                                            <select name="kebutuhan_khusus_ayah" id="kebutuhan_khusus_ayah" class="form-control @error('kebutuhan_khusus_ayah') is-invalid @enderror">
                                                    <option selected disabled>Pilih salah satu</option>
                                                    @for ($i = 1; $i < 10; $i++)
                                                        <option value="{{ $pekerjaan[$i] }}" @if($pesertadidik->kebutuhan_khusus_ayah == $pekerjaan[$i]) selected @endif>{{ $pekerjaan[$i] }}</option>
                                                    @endfor
                                            </select>
                                            
                                            @error('kebutuhan_khusus_ayah')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-3 ml-3"><b><h4>DATA IBU KANDUNG</h4></b>
                                        
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
                                            <label for="nik_ibu">NIK Ibu</label>
                                            <input type="number" name="nik_ibu" id="nik_ibu" class="form-control @error('nik_ibu') is-invalid @enderror" value="{{ $pesertadidik->nik_ibu }}">
                                            
                                            @error('nik_ibu')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group ml-3">
                                            <label for="lahir_ibu">Tahun Lahir</label>
                                            <input type="number" name="lahir_ibu" id="lahir_ibu" class="form-control @error('lahir_ibu') is-invalid @enderror" value="{{ $pesertadidik->lahir_ibu }}">

                                            @error('lahir_ibu')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group ml-3">
                                            <label for="pendidikan_ibu">Pendidikan</label>
                                            <select name="pendidikan_ibu" id="pendidikan_ibu" class="form-control @error('pendidikan_ibu') is-invalid @enderror">
                                                    <option selected disabled>Pilih salah satu</option>
                                                    @for ($i = 0; $i < 11; $i++)
                                                        <option value="{{ $pendidikan[$i] }}" @if($pesertadidik->pendidikan_ibu == $pendidikan[$i]) selected @endif>{{ $pendidikan[$i] }}</option>
                                                    @endfor
                                            </select>
                                            
                                            @error('pendidikan_ibu')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group ml-3">
                                            <label for="pekerjaan_ibu">Pekerjaan</label>
                                            <select name="pekerjaan_ibu" id="pekerjaan_ibu" class="form-control @error('pekerjaan_ibu') is-invalid @enderror">
                                                    <option selected disabled>Pilih salah satu</option>
                                                    @for ($i = 0; $i < 12; $i++)
                                                        <option value="{{ $pekerjaan[$i] }}" @if($pesertadidik->pekerjaan_ibu == $pekerjaan[$i]) selected @endif>{{ $pekerjaan[$i] }}</option>
                                                    @endfor
                                            </select>
                                            
                                            @error('pekerjaan_ibu')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="penghasilan_ibu">Penghasilan Bulanan</label>
                                            <select name="penghasilan_ibu" id="penghasilan_ibu" class="form-control @error('penghasilan_ibu') is-invalid @enderror">
                                                    <option selected disabled>Pilih salah satu</option>
                                                    @for ($i = 0; $i < 7; $i++)
                                                        <option value="{{ $penghasilan[$i] }}" @if($pesertadidik->penghasilan_ibu == $penghasilan[$i]) selected @endif>{{ $penghasilan[$i] }}</option>
                                                    @endfor
                                            </select>
                                            
                                            @error('penghasilan_ibu')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="kebutuhan_khusus_ibu">Berkebutuhan Khusus</label>
                                            <select name="kebutuhan_khusus_ibu" id="kebutuhan_khusus_ibu" class="form-control @error('kebutuhan_khusus_ibu') is-invalid @enderror">
                                                    <option selected disabled>Pilih salah satu</option>
                                                    @for ($i = 1; $i < 10; $i++)
                                                        <option value="{{ $pekerjaan[$i] }}" @if($pesertadidik->kebutuhan_khusus_ibu == $pekerjaan[$i]) selected @endif>{{ $pekerjaan[$i] }}</option>
                                                    @endfor
                                            </select>
                                            
                                            @error('kebutuhan_khusus_ibu')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-3 ml-3"><b><h4>DATA WALI (OPTIONAL</h4></b>
                                        
                                        <div class="form-group ml-3">
                                            <label for="nama_wali">Nama Lengkap</label>
                                            <input type="text" name="nama_wali" id="nama_wali" class="form-control @error('nama_wali') is-invalid @enderror" value="{{ $pesertadidik->nama_wali }}" placeholder="Tanpa gelar">
                                            <small>Nama wali peserta didik sesuai dokumen resmi yang berlaku. Hindari penggunaan gelar akademik atau sosial (seperti Dr., Drs., S.Pd, dan H.)</small>
                                            
                                            @error('nama_wali')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="nik_wali">NIK Wali</label>
                                            <input type="number" name="nik_wali" id="nik_wali" class="form-control @error('nik_wali') is-invalid @enderror" value="{{ $pesertadidik->nik_wali }}">
                                            <small>Nomor Induk Kependudukan yang tercantum pada Kartu Keluarga atau KTP wali peserta didik</small>
                                            
                                            @error('nik_wali')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group ml-3">
                                            <label for="lahir_wali">Tahun Lahir</label>
                                            <input type="number" name="lahir_wali" id="lahir_wali" class="form-control @error('lahir_wali') is-invalid @enderror" value="{{ $pesertadidik->lahir_wali }}">
                                            <small>Tahun lahir wali peserta didik</small>

                                            @error('lahir_wali')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group ml-3">
                                            <label for="pendidikan_wali">Pendidikan</label>
                                            <select name="pendidikan_wali" id="pendidikan_wali" class="form-control @error('pendidikan_wali') is-invalid @enderror">
                                                    <option selected disabled>Pilih salah satu</option>
                                                    @for ($i = 0; $i < 11; $i++)
                                                        <option value="{{ $pendidikan[$i] }}" @if($pesertadidik->pendidikan_wali) selected @endif>{{ $pendidikan[$i] }}</option>
                                                    @endfor
                                            </select>
                                            <small>Pendidikan terakhir wali peserta didik</small>
                                            
                                            @error('pendidikan_wali')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group ml-3">
                                            <label for="pekerjaan_wali">Pekerjaan</label>
                                            <select name="pekerjaan_wali" id="pekerjaan_wali" class="form-control @error('pekerjaan_wali') is-invalid @enderror">
                                                    <option selected disabled>Pilih salah satu</option>
                                                    @for ($i = 0; $i < 12; $i++)
                                                        <option value="{{ $pekerjaan[$i] }}" @if($pesertadidik->pekerjaan_wali == $pekerjaan[$i]) selected @endif>{{ $pekerjaan[$i] }}</option>
                                                    @endfor
                                            </select>
                                            <small>Pekerjaan utama wali peserta didik.</small>
                                            
                                            @error('pekerjaan_wali')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="penghasilan_wali">Penghasilan Bulanan</label>
                                            <select name="penghasilan_wali" id="penghasilan_wali" class="form-control @error('penghasilan_wali') is-invalid @enderror">
                                                    <option selected disabled>Pilih salah satu</option>
                                                    @for ($i = 0; $i < 7; $i++)
                                                        <option value="{{ $penghasilan[$i] }}" @if($pesertadidik->penghasilan_wali == $penghasilan[$i]) selected @endif>{{ $penghasilan[$i] }}</option>
                                                    @endfor
                                            </select>
                                            <small>Rentang penghasilan wali peserta didik. Kosongkan kolom ini apabila wali tidak bekerja</small>
                                            
                                            @error('penghasilan_wali')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-3 ml-3"><b><h4>REGISTRASI PD</h4></b>
                                        
                                        <div class="form-group ml-3">
                                            <label for="kompetensi_keahlian">Kompetensi Keahilan</label>
                                            <input type="text" name="kompetensi_keahlian" id="kompetensi_keahlian" class="form-control @error('kompetensi_keahlian') is-invalid @enderror" value="{{ $pesertadidik->kompetensi_keahlian }}">
                                            <small>kompentensi keahlian yang dipilih oleh peserta didik saat diterima di sekolah ini (khusus SMK).</small>

                                            @error('kompetensi_keahlian')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="jenis_pendaftaran">Jenis Pendaftaran</label>
                                            <select name="jenis_pendaftaran" id="jenis_pendaftaran" class="form-control @error('jenis_pendaftaran') is-invalid @enderror">
                                                    <option selected disabled>Pilih salah satu</option>
                                                    <option value="Siswa baru" @if ($pesertadidik->jenis_pendaftaran  == "Siswa baru") selected @endif>Siswa baru</option>
                                                    <option value="Pindahan" @if ($pesertadidik->jenis_pendaftaran  == "Pindahan") selected @endif>Pindahan</option>
                                                    <option value="Kembali bersekolah" @if ($pesertadidik->jenis_pendaftaran  == "Kembali bersekolah") selected @endif>Kembali bersekolah</option>
                                            </select>
                                            <small>Status peserta didik saat pertama kali diterima di sekolah ini.</small>

                                            @error('jenis_pendaftaran')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="nis">NIS/Nomor Induk PD</label>
                                            <input type="number" name="nis" id="nis" class="form-control @error('nis') is-invalid @enderror" value="{{ $pesertadidik->nis }}">
                                            <small>Nomor induk peserta didik sesuai yang tercantum pada buku induk</small>

                                            @error('nis')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="tgl_masuk">Tanggal Masuk</label>
                                            <input type="date" name="tgl_masuk" id="tgl_masuk" class="form-control @error('tgl_masuk') is-invalid @enderror" value="{{ $pesertadidik->tgl_masuk }}">
                                            <small>Tanggal pertama kali peserta didik diterima di sekolah ini. Jika siswa baru, maka isikan tanggal awal tahun pelajaran saat peserta didik masuk. Jika
                                            siswa mutasi/pindahan, maka isikan tanggal sesuai tanggal diterimanya peserta didik di sekolah ini atau tanggal yang tercantum pada lembar mutasi
                                            masuk yang umumnya terdapat di bagian akhir buku rapor</small>

                                            @error('tgl_masuk')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="asal_sekolah">Sekolah Asal</label>
                                            <input type="date" name="asal_sekolah" id="asal_sekolah" class="form-control @error('asal_sekolah') is-invalid @enderror" value="{{ $pesertadidik->asal_sekolah }}">
                                            <small>Nama sekolah peserta didik sebelumnya. Untuk peserta didik baru, isikan nama sekolah pada jenjang sebelumnya. Sedangkan bagi peserta didik
                                            mutasi/pindahan, diisi dengan nama sekolah sebelum pindah ke sekolah saat ini.</small>
                                            
                                            @error('asal_sekolah')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="no_un">No. Peserta UN SMP/MTs</label>
                                            <input type="numbebr" name="no_un" id="no_un" class="form-control @error('no_un') is-invalid @enderror" value="{{ $pesertadidik->no_un }}">
                                            <small>* Nomor peserta Ujian adalah 20 Digit yang tertera dalam SKHU (Format Baku 2-12-02-01-001-002-7), diisi bagi peserta didik jenjang SMP <br>
                                            Nomor peserta ujian saat peserta didik masih di jenjang sebelumnya. Formatnya adalah x-xx-xx-xx-xxx-xxx-x (20 digit). Untuk Peserta Didik WNA,
                                            diisi dengan Luar Negeri.</small>

                                            @error('no_un')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="no_ijazah">No. Seri Ijazah SMP/MTs</label>
                                            <input type="text" name="no_ijazah" id="no_ijazah" class="form-control @error('no_ijazah') is-invalid @enderror" value="{{ $pesertadidik->no_ijazah }}">
                                            <small>Nomor seri ijazah peserta didik pada jenjang sebelumnya</small>
                                            
                                            @error('no_ijazah')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="no_skhun">No. Seri SKHUN SMP/MTs</label>
                                            <input type="text" name="no_skhun" id="no_skhun" class="form-control @error('no_skhun') is-invalid @enderror" value="{{ $pesertadidik->no_skhun }}">
                                            <small>Nomor seri SKHUN/SHUN peserta didik pada jenjang sebelumnya (jika memiliki).</small>

                                            @error('no_skhun')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                    </div>
                                    
                                    <div class="mb-3 ml-3"><b><h4>BEASISWA</h4></b>
                                        
                                        <div class="form-group ml-3">
                                            <label for="jenis_beasiswa">Jenis</label>
                                            <select name="jenis_beasiswa" id="jenis_beasiswa" class="form-control @error('jenis_beasiswa') is-invalid @enderror" placeholder="Tanpa gelar">
                                                <option selected disabled>Pilih salah satu</option>
                                                <option value="Anak Berprestasi" @if($pesertadidik->user->prestasi->jenis_beasiswa == 'Anak Berprestasi') selected @endif>Anak Berprestasi</option>
                                                <option value="Anak Miskin" @if($pesertadidik->user->prestasi->jenis_beasiswa == 'Anak Miskin') selected @endif>Anak Miskin</option>
                                                <option value="Pendidikan" @if($pesertadidik->user->prestasi->jenis_beasiswa == 'Pendidikan') selected @endif>Pendidikan</option>
                                                <option value="Unggulan" @if($pesertadidik->user->prestasi->jenis_beasiswa == 'Unggulan') selected @endif>Unggulan</option>
                                            </select>
                                            <small>Jenis beasiswa yang pernah diterima oleh peserta didik</small>
                                            
                                            @error('jenis_beasiswa')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="keterangan">Keterangan</label>
                                            <input type="text" name="keterangan" id="keterangan" class="form-control @error('keterangan') is-invalid @enderror" value="{{ $pesertadidik->user->prestasi->keterangan }}">
                                            <small>Keterangan terkait beasiswa yang pernah diterima oleh peserta didik. Misalnya dapat diisi dengan nama beasiswa, seperti Beasiswa Murid Berprestasi Tahun 2017, atau
                                            keterangan lain yang relevan</small>
                                            
                                            @error('keterangan')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="tahun_mulai">Tahun Mulai</label>
                                            <input type="number" name="tahun_mulai" id="tahun_mulai" class="form-control @error('tahun_mulai') is-invalid @enderror" value="{{ $pesertadidik->user->prestasi->tahun_mulai }}">
                                            <small>Tahun mulai diterimanya beasiswa oleh peserta didik</small>
                                            
                                            @error('tahun_mulai')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="tahun_selesai">Tahun Selesai</label>
                                            <input type="number" name="tahun_selesai" id="tahun_selesai" class="form-control @error('tahun_selesai') is-invalid @enderror" value="{{ $pesertadidik->user->prestasi->tahun_selesai }}">
                                            <small>Tahun selesai diterimanya beasiswa oleh peserta didik. Apabila beasiswa tersebut hanya diterima sekali dalam tahun yang sama, maka diisi sama seperti Tahun Mulai</small>

                                            @error('tahun_selesai')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                    </div>

                                </div>
                                
                                <div class="mb-3 ml-3 d-md-flex justify-content-center"><b><h4>DOKUMEN</h4></b>
                                        
                                    <div class="form-group ml-3">
                                        <label for="foto_pd">Pas Foto 3 X 4</label>
                                        <input type="file" name="foto_pd" id="foto_pd" class="form-control @error('foto_pd') is-invalid @enderror">

                                        @if ($pesertadidik->foto_pd)
                                            <img class="d-flex mx-auto mb-3" src="{{ asset("dokumen/smp/" . $pesertadidik->foto_pd) }}" alt="{{ $pesertadidik->foto_pd }}">
                                        @endif
                                        
                                        @error('foto_pd')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                        @enderror
                                    </div>
                                    
                                    <div class="form-group ml-3">
                                        <label for="scan_ijazah">Scan Ijazah SMP/MTs</label>
                                        <input type="file" name="scan_ijazah" id="scan_ijazah" class="form-control @error('scan_ijazah') is-invalid @enderror">

                                        @if ($pesertadidik->scan_ijazah)
                                            <img class="d-flex mx-auto mb-3" src="{{ asset("dokumen/smp/" . $pesertadidik->scan_ijazah) }}" alt="{{ $pesertadidik->scan_ijazah }}">
                                        @endif
                                        
                                        @error('scan_ijazah')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                        @enderror
                                    </div>
                                    
                                    <div class="form-group ml-3">
                                        <label for="scan_skhun">Scan SKHUN SMP/MTs</label>
                                        <input type="file" name="scan_skhun" id="scan_skhun" class="form-control @error('scan_skhun') is-invalid @enderror">
                                        
                                        @if ($pesertadidik->scan_skhun)
                                            <img class="d-flex mx-auto mb-3" src="{{ asset("dokumen/smp/" . $pesertadidik->scan_skhun) }}" alt="{{ $pesertadidik->scan_skhun }}">
                                        @endif
                                        
                                        @error('scan_skhun')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                        @enderror
                                    </div>

                                </div>

                            </div>

                            @if (Auth::user()->is_data_verified == 3)
                                <input type="hidden" name="is_data_verified" value=1>
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-warning text-white float-right" style="width 100px">Ubah</button>
                                </div>
                            @endif    

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