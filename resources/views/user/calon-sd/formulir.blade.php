@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-center mb-3">
        <h3>FORMULIR PENDAFTARANAN SISWA BARU SD DHARMA KARYA UT</h3>
    </div>
    <div class="d-flex flex-column mt-3">
        <div class="col-md-auto">
            <div class="card mb-3">
                @if(Auth::user()->is_data_verified == 0)
                    <div class="card-body mt-3">
                        <div class="text-danger">
                            <h6>Perhatikan! Silahkan Anda isi formulir berikut sesuai data yang valid</h6>
                        </div>
                        <br>
                        <form action="/calon/sd/store/{{ $user->id }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <input type="number" name="is_data_verified" id="is_data_verified" hidden value=1>
                            
                            <div class="ml-3" style="margin-top: 10px"><b><h4 class="text-center"><hr>DATA REGISTRASI<hr></h4></b>
                                
                                <div class="row justify-content-between">

                                    <div class="form-group ml-3 col-md-5 row">
                                        <label for="no_registrasi" class="form-label col-4">No. Registrasi</label>
                                        <input type="text" class="form-control col-7" value="{{ $user->no_registrasi }}" disabled>
                                    </div>

                                    <div class="form-group ml-3 col-md-5 row">
                                        <label for="tahun_ajaran" class="form-label col-4">Tahun Ajaran</label>
                                        <input type="number" name="tahun_ajaran" id="tahun_ajaran" class="form-control col-7 @error('tahun_ajaran') is-invalid @enderror" value="{{ old('tahun_ajaran') }}">
                                        @error('tahun_ajaran')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group ml-3 col-md-5 row">
                                        <label for="sekolah_asal" class="form-label col-4">Asal Sekolah</label>
                                        <input type="text" name="sekolah_asal" id="sekolah_asal" class="form-control col-7  @error('sekolah_asal') is-invalid @enderror" value="{{ old('sekolah_asal') }}">
                                        @error('sekolah_asal')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    
                                    <div class="form-group ml-3 col-md-5 row">
                                        <label for="kecamatan_sekolah_asal" class="form-label col-4">Kecamatan Sekolah</label>
                                        <input type="text" name="kecamatan_sekolah_asal" id="kecamatan_sekolah_asal" class="form-control col-7 @error('kecamatan_sekolah_asal') is-invalid @enderror" value="{{ old('kecamatan_sekolah_asal') }}">
                                        @error('kecamatan_sekolah_asal')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                </div>
                            </div>

                            <div class="row">

                                <div class="col-md-6">

                                    <div class="ml-3" style="margin-top: 10px"><b><h4 class="mt-3 text-center"><hr>IDENTITAS SISWA<hr></h4></b>
                                
                                        <div class="form-group ml-3">
                                            <label for="nama_pd" class="form-label">Nama Lengkap</label>
                                            <input type="text" name="nama_pd" id="nama_pd" class="form-control @error('nama_pd') is-invalid @enderror" value="{{ old('nama_pd') }}" placeholder="sesuai Akta Kelahiran">
                                            
                                            @error('nama_pd')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group ml-3">
                                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control @error('jenis_kelamin') is-invalid @enderror">
                                                    <option selected disabled>Pilih salah satu</option>
                                                    <option @if(old('jenis_kelamin')  == "Laki-laki") selected @endif value="Laki-laki">Laki-laki</option>
                                                    <option @if(old('jenis_kelamin')  == "Laki-laki") selected @endif value="Perempuan">Perempuan</option>
                                            </select>

                                            @error('jenis_kelamin')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror                                        
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="nisn" class="form-label">NISN</label>
                                            <input placeholder="Sesuai Kartu Keluarga" type="number" name="nisn" id="nisn" class="form-control @error('nisn') is-invalid @enderror" value="{{ old('nisn') }}">
                                            
                                            @error('nisn')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group ml-3">
                                            <label for="nik" class="form-label">NIK (Sesuai KK)</label>
                                            <input placeholder="Sesuai Kartu Keluarga" type="number" name="nik" id="nik" class="form-control @error('nik') is-invalid @enderror" value="{{ old('nik') }}">
                                            
                                            @error('nik')
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
                                            <label for="no_akta" class="form-label">Nomor Registras Akta Lahir</label>
                                            <input placeholder="Sesuai Akta Kelahiran" type="number" name="no_akta" id="no_akta" class="form-control @error('no_akta') is-invalid @enderror" value="{{ old('no_akta') }}">
                                            @error('no_akta')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="anak_ke" class="form-label">Anak Ke</label>
                                            <input type="number" name="anak_ke" id="anak_ke" class="form-control @error('anak_ke') is-invalid @enderror" value="{{ old('anak_ke') }}">
                                            @error('anak_ke')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group ml-3">
                                            <label for="agama" class="form-label">Agama</label>
                                            <select name="agama" id="agama" class="form-control @error('agama') is-invalid @enderror">
                                                    <option selected disabled>Pilih salah satu</option>
                                                    @for($i = 0; $i < 6 ; $i++)
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
                                            <label for="kewarganegaraan" class="form-label">Kewarganegaraan</label>
                                            <input placeholder="Sesuai Kartu Keluarga" type="number" name="kewarganegaraan" id="kewarganegaraan" class="form-control @error('kewarganegaraan') is-invalid @enderror" value="{{ old('kewarganegaraan') }}">
                                            @error('kewarganegaraan')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="kebutuhan_khusus" class="form-label">Berkebutuhan Khusus</label>
                                            <select name="kebutuhan_khusus" id="kebutuhan_khusus" class="form-control @error('kebutuhan_khusus') is-invalid @enderror">
                                                <option selected disabled>Pilih salah satu</option>
                                                @for($i = 0; $i < 17; $i++)
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
                                            <label for="alamat_pd" class="form-label col-12">Alamat Tempat Tinggal</label>
                                            <input type="text" name="alamat_pd" id="alamat_pd" class="form-control col-md-8 @error('alamat_pd') is-invalid @enderror" value="{{ old('alamat_pd') }}" placeholder="Alamat">
                                            @error('alamat_pd')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            
                                            <input type="text" name="rt" id="rt" class="form-control col-md-2 @error('rt') is-invalid @enderror" value="{{ old('rt') }}" placeholder="RT">
                                            @error('rt')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <input type="text" name="rw" id="rw" class="form-control col-md-2 @error('rw') is-invalid @enderror" value="{{ old('rw') }}" placeholder="RW">
                                            @error('rw')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                            <input type="text" name="kelurahan" id="kelurahan" class="form-control col-md-6 @error('kelurahan') is-invalid @enderror" value="{{ old('kelurahan') }}" placeholder="Kelurahan/Desa">
                                            @error('kelurahan')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <input type="text" name="kecamatan" id="kecamatan" class="form-control col-md-6 @error('kecamatan') is-invalid @enderror>" value="{{ old('kecamatan') }}" placeholder="Kecamatan">
                                            @error('kecamatan')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                            <input type="text" name="kabupaten" id="kabupaten" class="form-control col-6 @error('kabupaten') is-invalid @enderror" value="{{ old('kabupaten') }}" placeholder="Kabupaten/Kota">
                                            @error('kabupaten')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <input type="number" name="kode_pos" id="kode_pos" class="form-control col-6 @error('kode_pos') is-invalid @enderror" value="{{ old('kode_pos') }}" placeholder="kode pos">
                                            @error('kode_pos')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                            <input type="text" name="lintang" id="lintang" class="form-control col-6 @error('lintang') is-invalid @enderror" value="{{ old('lintang') }}" placeholder="Lintang">
                                            @error('lintang')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <input type="text" name="bujur" id="bujur" class="form-control col-6 @error('bujur') is-invalid @enderror" value="{{ old('bujur') }}" placeholder="Bujur">
                                            @error('bujur')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="telp_rumah" class="form-label">Nomor Telepon Rumah</label>
                                            <input placeholder="Sesuai Akta Kelahiran" type="number" name="telp_rumah" id="telp_rumah" class="form-control @error('telp_rumah') is-invalid @enderror" value="{{ old('telp_rumah') }}">
                                            @error('telp_rumah')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group ml-3">
                                            <label for="telp_pd" class="form-label">Nomor Handphone</label>
                                            <input placeholder="Sesuai Akta Kelahiran" type="number" name="telp_pd" id="telp_pd" class="form-control @error('telp_pd') is-invalid @enderror" value="{{ old('telp_pd') }}">
                                            @error('telp_pd')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="moda_transportasi" class="form-label">Alat Transportasi Ke Sekolah</label>
                                            <select name="moda_transportasi" id="moda_transportasi" class="form-control @error('moda_transportasi') is-invalid @enderror">
                                                <option selected disabled>Pili salah satu</option>
                                                @for($i = 0; $i < 9; $i++)
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
                                            <label for="jenis_tinggal" class="form-label">Jenis Tinggal</label>
                                            <select name="jenis_tinggal" id="jenis_tinggal" class="form-control @error('jenis_tinggal') is-invalid @enderror">
                                                <option selected disabled></option>
                                                @for($i = 0; $i < 5; $i++)
                                                    <option value="{{ $tempat_tinggal[$i] }}" @if(old('jenis_tinggal') == $tempat_tinggal[$i]) selected @endif>{{ $tempat_tinggal[$i] }}</option>
                                                @endfor
                                            </select>
                                            @error('jenis_tinggal')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3 row">
                                            <label for="penerima_kks" class="col-12 form-label">Apakah penerima KKS ?</label>
                                            <select name="penerima_kks" id="penerima_kks" class="col-md-2 form-control @error('penerima_kks') is-invalid @enderror" >
                                                <option value=1 @if(old('penerima_kks') == 1) selected @endif>Ya</option>
                                                <option value=0 @if(old('penerima_kks') == 0) selected @endif>Tidak</option>
                                            </select>
                                            @error('penerima_kks')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                            <input placeholder="Isikan jika menerima" type="number" name="no_kks" id="no_kks" class="form-control col-md-10 @error('no_kks') is-invalid @enderror" value="{{ old('no_kks') }}">
                                            @error('no_kks')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3 row">
                                            <label for="penerima_kps" class="col-12 form-label">Apakah penerima KPS ?</label>
                                            <select name="penerima_kps" id="penerima_kps" class="col-md-2 form-control @error('penerima_kps') is-invalid @enderror" >
                                                <option value=1 @if(old('penerima_kps') == 1) selected @endif>Ya</option>
                                                <option value=0 @if(old('penerima_kps') == 0) selected @endif>Tidak</option>
                                            </select>
                                            @error('penerima_kps')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                            <input placeholder="Isikan jika menerima" type="number" name="no_kps" id="no_kps" class="form-control col-md-10 @error('no_kps') is-invalid @enderror" value="{{ old('no_kps') }}">
                                            @error('no_kps')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3 row">
                                            <label for="penerima_kip" class="col-12 form-label">Apakah penerima KIP ?</label>
                                            <select name="penerima_kip" id="penerima_kip" class="col-md-2 form-control @error('penerima_kip') is-invalid @enderror" >
                                                <option value=1 @if(old('penerima_kip') == 1) selected @endif>Ya</option>
                                                <option value=0 @if(old('penerima_kip') == 0) selected @endif>Tidak</option>
                                            </select>
                                            @error('penerima_kip')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                            <input placeholder="Isikan jika menerima" type="number" name="no_kip" id="no_kip" class="form-control col-md-10 @error('no_kip') is-invalid @enderror" value="{{ old('no_kip') }}">
                                            @error('no_kip')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="ml-3" style="margin-top: 10px"><b><h4 class="mt-3 text-center"><hr>DATA PERIODIK SISWA<hr></h4></b>
                                        
                                        <div class="form-group ml-3">
                                            <label for="tinggi" class="form-label">Tinggi Badan</label>
                                            <div class="input-group-prepend  p-0">
                                                <input type="text" name="tinggi" id="tinggi" class="form-control @error('tinggi') is-invalid @enderror" value="{{ old('tinggi') }}"><div class="input-group-text">Cm</div>
                                            </div>
                                            @error('tinggi')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group ml-3">
                                            <label for="banyak_saudara_kandung" class="form-label">Jumlah Saudara Kandung</label>
                                            <div class="input-group-prepend  p-0">
                                                <input type="text" name="banyak_saudara_kandung" id="banyak_saudara_kandung" class="form-control @error('banyak_saudara_kandung') is-invalid @enderror" value="{{ old('banyak_saudara_kandung') }}"><div class="input-group-text">Orang</div>
                                            </div>
                                            @error('banyak_saudara_kandung')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="berat" class="form-label">Berat Badan</label>
                                            <div class="input-group-prepend  p-0">
                                                <input type="text" name="berat" id="berat" class="form-control @error('berat') is-invalid @enderror" value="{{ old('berat') }}"><div class="input-group-text">Kg</div>
                                            </div>
                                            @error('berat')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="jarak_kesekolah" class="form-label">Jarak Tempat Tinggal Ke Sekolah</label>
                                            <div class="input-group-prepend  p-0">
                                                <input type="text" name="jarak_kesekolah" id="jarak_kesekolah" class="form-control @error('jarak_kesekolah') is-invalid @enderror" value="{{ old('jarak_kesekolah') }}"><div class="input-group-text">Km</div>
                                            </div>
                                            @error('jarak_kesekolah')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="waktu_kesekolah" class="form-label">Waktu Tempuh Ke Sekolah</label>
                                            <div class="input-group-prepend  p-0">
                                                <input type="text" name="waktu_kesekolah" id="waktu_kesekolah" class="form-control @error('waktu_kesekolah') is-invalid @enderror" value="{{ old('waktu_kesekolah') }}"><div class="input-group-text">Km</div>
                                            </div>
                                            @error('waktu_kesekolah')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        
                                    </div>

                                </div>

                                <div class="col-md-6">
        
                                    <div class="ml-3" style="margin-top: 10px"><b><h4 class="mt-3 text-center"><hr>ORANGTUA<hr></h4></b>

                                        <div class="form-group ml-3">
                                            <label for="nama_ayah" class="form-label">Nama Ayah Kandung</label>
                                            <input type="text" name="nama_ayah" id="nama_ayah" class="form-control @error('nama_ayah') is-invalid @enderror" value="{{ old('nama_ayah') }}">
                                            @error('nama_ayah')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="tahun_lahir_ayah" class="form-label">Tahun lahir</label>
                                            <input type="year" name="tahun_lahir_ayah" id="tahun_lahir_ayah" class="form-control @error('tahun_lahir_ayah') is-invalid @enderror" value="{{ old('tahun_lahir_ayah') }}">
                                            @error('tahun_lahir_ayah')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="pendidikan_ayah" class="form-label">Pendidikan</label>
                                            <select name="pendidikan_ayah" id="pendidikan_ayah" class="form-control @error('pendidikan_ayah') is-invalid @enderror">
                                                <option selected disabled>Pilih salah satu</option>
                                                @for($i = 0; $i < 7; $i++)
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
                                            <label for="pekerjaan_ayah" class="form-label">Pekerjaan</label>
                                            <select name="pekerjaan_ayah" id="pekerjaan_ayah" class="form-control @error('pekerjaan_ayah') is-invalid @enderror">
                                                <option selected disabled>Pilih salah satu</option>
                                                @for($i = 0; $i < 7; $i++)
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
                                            <label for="penghasilan_ayah" class="form-label">Penghasilan Bulanan</label>
                                            <select name="penghasilan_ayah" id="penghasilan_ayah" class="form-control @error('penghasilan_ayah') is-invalid @enderror">
                                                <option selected disabled>Pilih salah satu</option>
                                                @for($i = 0; $i < 7; $i++)
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
                                            <label for="nama_ibu" class="form-label">Nama Ibu Kandung</label>
                                            <input type="text" name="nama_ibu" id="nama_ibu" class="form-control @error('nama_ibu') is-invalid @enderror" value="{{ old('nama_ibu') }}">
                                            @error('nama_ibu')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="tahun_lahir_ibu" class="form-label">Tahun lahir</label>
                                            <input type="year" name="tahun_lahir_ibu" id="tahun_lahir_ibu" class="form-control @error('tahun_lahir_ibu') is-invalid @enderror" value="{{ old('tahun_lahir_ibu') }}">
                                            @error('tahun_lahir_ibu')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="pendidikan_ibu" class="form-label">Pendidikan</label>
                                            <select name="pendidikan_ibu" id="pendidikan_ibu" class="form-control @error('pendidikan_ibu') is-invalid @enderror">
                                                <option selected disabled>Pilih salah satu</option>
                                                @for($i = 0; $i < 7; $i++)
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
                                            <label for="pekerjaan_ibu" class="form-label">Pekerjaan</label>
                                            <select name="pekerjaan_ibu" id="pekerjaan_ibu" class="form-control @error('pekerjaan_ibu') is-invalid @enderror">
                                                <option selected disabled>Pilih salah satu</option>
                                                @for($i = 0; $i < 7; $i++)
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
                                            <label for="penghasilan_ibu" class="form-label">Penghasilan Bulanan</label>
                                            <select name="penghasilan_ibu" id="penghasilan_ibu" class="form-control @error('penghasilan_ibu') is-invalid @enderror">
                                                <option selected disabled>Pilih salah satu</option>
                                                @for($i = 0; $i < 7; $i++)
                                                    <option value="{{ $penghasilan[$i] }}" @if(old('penghasilan_ibu') == $penghasilan[$i]) selected @endif>{{ $penghasilan[$i] }}</option>
                                                @endfor
                                            </select>
                                            @error('penghasilan_ibu')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="ml-3" style="margin-top: 10px"><b><h4 class="mt-3 text-center"><hr>APABILA TINGGAL BERSAMA WALII<hr></h4></b>
                                        <div class="form-group ml-3">
                                            <label for="nama_wali" class="form-label">Nama Wali</label>
                                            <input type="text" name="nama_wali" id="nama_wali" class="form-control @error('nama_wali') is-invalid @enderror" value="{{ old('nama_wali') }}">
                                            @error('nama_wali')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="tahun_lahir_wali" class="form-label">Tahun lahir</label>
                                            <input type="year" name="tahun_lahir_wali" id="tahun_lahir_wali" class="form-control @error('tahun_lahir_wali') is-invalid @enderror" value="{{ old('tahun_lahir_wali') }}">
                                            @error('tahun_lahir_wali')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="pendidikan_wali" class="form-label">Pendidikan</label>
                                            <select name="pendidikan_wali" id="pendidikan_wali" class="form-control @error('pendidikan_wali') is-invalid @enderror">
                                                <option selected disabled>Pilih salah satu</option>
                                                @for($i = 0; $i < 7; $i++)
                                                    <option value="{{ $pendidikan[$i] }}" @if(old('pendidikan_wali') == $pendidikan[$i]) selected @endif>{{ $pendidikan[$i] }}</option>
                                                @endfor
                                            </select>
                                            @error('pendidikan_wali')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="pekerjaan_wali" class="form-label">Pekerjaan</label>
                                            <select name="pekerjaan_wali" id="pekerjaan_wali" class="form-control @error('pekerjaan_wali') is-invalid @enderror">
                                                <option selected disabled>Pilih salah satu</option>
                                                @for($i = 0; $i < 7; $i++)
                                                    <option value="{{ $pekerjaan[$i] }}" @if(old('pekerjaan_wali') == $pekerjaan[$i]) selected @endif>{{ $pekerjaan[$i] }}</option>
                                                @endfor
                                            </select>
                                            @error('pekerjaan_wali')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="penghasilan_wali" class="form-label">Penghasilan Bulanan</label>
                                            <select name="penghasilan_wali" id="penghasilan_wali" class="form-control @error('penghasilan_wali') is-invalid @enderror">
                                                <option selected disabled>Pilih salah satu</option>
                                                @for($i = 0; $i < 7; $i++)
                                                    <option value="{{ $penghasilan[$i] }}" @if(old('penghasilan_wali') == $penghasilan[$i]) selected @endif>{{ $penghasilan[$i] }}</option>
                                                @endfor
                                            </select>
                                            @error('penghasilan_wali')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="ml-3" style="margin-top: 10px"><b><h4 class="mt-3 text-center"><hr>Dokumen<hr></h4></b>
                                        
                                        <div class="form-group row ml-3">
                                            <label for="foto_pd" class="col-12 form-label">Pas Foto 3 X 4</label>
                                            <input type="file" name="foto_pd" id="foto_pd" class="col-sm-8 @error('foto_pd') is-invalid @enderror">
                                            @error('foto_pd')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group row ml-3">
                                            <label for="scan_akta" class="col-12 form-label">Scan Akta Kelahiran</label>
                                            <input type="file" name="scan_akta" id="scan_akta" class="col-sm-8 @error('scan_akta') is-invalid @enderror">
                                            @error('scan_akta')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="form-group row ml-3">
                                            <label for="scan_kk" class="col-12 form-label">Scan Kartu Keluarga</label>
                                            <input type="file" name="scan_kk" id="scan_kk" class="col-sm-8 @error('scan_kk') is-invalid @enderror">
                                            @error('scan_kk')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="scan_ijazah" class="form-label">Scan Ijazah PAUD/TK (jika berasal dari PAUD/TK)</label>
                                            <input type="file" name="scan_ijazah" id="scan_ijazah" class="col-sm-8 @error('scan_ijazah') is-invalid @enderror">
                                            @error('scan_ijazah')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="form-group row ml-3">
                                            <label for="scan_kks" class="col-12 form-label">Scan KKS</label>
                                            <input type="file" name="scan_kks" id="scan_kks" class="col-sm-8 @error('scan_kks') is-invalid @enderror">
                                            @error('scan_kks')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="form-group row ml-3">
                                            <label for="scan_kps" class="col-12 form-label">Scan KPS</label>
                                            <input type="file" name="scan_kps" id="scan_kps" class="col-sm-8 @error('scan_kps') is-invalid @enderror">
                                            @error('scan_kps')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="form-group row ml-3">
                                            <label for="scan_kip" class="col-12 form-label">Scan KIP</label>
                                            <input type="file" name="scan_kip" id="scan_kip" class="col-sm-8 @error('scan_kip') is-invalid @enderror">
                                            @error('scan_kip')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

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
                        <form action="/calon/sd/update/{{ $user->id }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            
                            <div class="ml-3" style="margin-top: 10px"><b><h4 class="text-center"><hr>DATA REGISTRASI<hr></h4></b>
                                
                                <div class="row justify-content-between">

                                    <div class="form-group ml-3 col-md-5 row">
                                        <label for="no_registrasi" class="form-label col-4">No. Registrasi</label>
                                        <input type="text" class="form-control col-7" value="{{ $user->no_registrasi }}" disabled>
                                    </div>

                                    <div class="form-group ml-3 col-md-5 row">
                                        <label for="tahun_ajaran" class="form-label col-4">Tahun Ajaran</label>
                                        <input type="number" name="tahun_ajaran" id="tahun_ajaran" class="form-control col-7 @error('tahun_ajaran') is-invalid @enderror" value="{{ $user->csSd->tahun_ajaran }}">
                                        @error('tahun_ajaran')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group ml-3 col-md-5 row">
                                        <label for="sekolah_asal" class="form-label col-4">Asal Sekolah</label>
                                        <input type="text" name="sekolah_asal" id="sekolah_asal" class="form-control col-7  @error('sekolah_asal') is-invalid @enderror" value="{{ $user->csSd->sekolah_asal }}">
                                        @error('sekolah_asal')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    
                                    <div class="form-group ml-3 col-md-5 row">
                                        <label for="kecamatan_sekolah_asal" class="form-label col-4">Kecamatan Sekolah</label>
                                        <input type="text" name="kecamatan_sekolah_asal" id="kecamatan_sekolah_asal" class="form-control col-7 @error('kecamatan_sekolah_asal') is-invalid @enderror" value="{{ $user->csSd->kecamatan_sekolah_asal }}">
                                        @error('kecamatan_sekolah_asal')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                </div>
                            </div>

                            <div class="row">

                                <div class="col-md-6">

                                    <div class="ml-3" style="margin-top: 10px"><b><h4 class="mt-3 text-center"><hr>IDENTITAS SISWA<hr></h4></b>
                                
                                        <div class="form-group ml-3">
                                            <label for="nama_pd" class="form-label">Nama Lengkap</label>
                                            <input type="text" name="nama_pd" id="nama_pd" class="form-control @error('nama_pd') is-invalid @enderror" value="{{ $user->csSd->nama_pd }}" placeholder="sesuai Akta Kelahiran">
                                            
                                            @error('nama_pd')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group ml-3">
                                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control @error('jenis_kelamin') is-invalid @enderror">
                                                    <option selected disabled>Pilih salah satu</option>
                                                    <option @if($user->csSd->jenis_kelamin  == "Laki-laki") selected @endif value="Laki-laki">Laki-laki</option>
                                                    <option @if($user->csSd->jenis_kelamin  == "Laki-laki") selected @endif value="Perempuan">Perempuan</option>
                                            </select>

                                            @error('jenis_kelamin')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror                                        
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="nisn" class="form-label">NISN</label>
                                            <input placeholder="Sesuai Kartu Keluarga" type="number" name="nisn" id="nisn" class="form-control @error('nisn') is-invalid @enderror" value="{{ $user->csSd->nisn }}">
                                            
                                            @error('nisn')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group ml-3">
                                            <label for="nik" class="form-label">NIK (Sesuai KK)</label>
                                            <input placeholder="Sesuai Kartu Keluarga" type="number" name="nik" id="nik" class="form-control @error('nik') is-invalid @enderror" value="{{ $user->csSd->nik }}">
                                            
                                            @error('nik')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
        
                                        <div class="form-group ml-3">
                                            <label for="tempat_lahir">Tempat, Tanggal Lahir </label>
                                            <div class="row p-2">
                                                <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control col-md-7 @error('tempat_lahir') is-invalid @enderror" value="{{ $user->csSd->tempat_lahir }}">

                                                @error('tempat_lahir')
                                                    <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                @enderror

                                                <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control col-md-5 @error('tanggal_lahir') is-invalid @enderror" value="{{ $user->csSd->tanggal_lahir }}">

                                                @error('tanggal_lahir')
                                                    <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                @enderror
                                            </div>
                                        </div>
                                        
                                        <div class="form-group ml-3">
                                            <label for="no_akta" class="form-label">Nomor Registras Akta Lahir</label>
                                            <input placeholder="Sesuai Akta Kelahiran" type="number" name="no_akta" id="no_akta" class="form-control @error('no_akta') is-invalid @enderror" value="{{ $user->csSd->no_akta }}">
                                            @error('no_akta')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="anak_ke" class="form-label">Anak Ke</label>
                                            <input type="number" name="anak_ke" id="anak_ke" class="form-control @error('anak_ke') is-invalid @enderror" value="{{ $user->csSd->anak_ke }}">
                                            @error('anak_ke')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group ml-3">
                                            <label for="agama" class="form-label">Agama</label>
                                            <select name="agama" id="agama" class="form-control @error('agama') is-invalid @enderror">
                                                    <option selected disabled>Pilih salah satu</option>
                                                    @for($i = 0; $i < 6 ; $i++)
                                                    <option value="{{ $agama[$i] }}" @if($user->csSd->agama == $agama[$i]) selected @endif>{{ $agama[$i] }}</option>
                                                    @endfor
                                            </select>
                                            @error('agama')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="kewarganegaraan" class="form-label">Kewarganegaraan</label>
                                            <input placeholder="Sesuai Kartu Keluarga" type="number" name="kewarganegaraan" id="kewarganegaraan" class="form-control @error('kewarganegaraan') is-invalid @enderror" value="{{ $user->csSd->kewarganegaraan }}">
                                            @error('kewarganegaraan')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="kebutuhan_khusus" class="form-label">Berkebutuhan Khusus</label>
                                            <select name="kebutuhan_khusus" id="kebutuhan_khusus" class="form-control @error('kebutuhan_khusus') is-invalid @enderror">
                                                <option selected disabled>Pilih salah satu</option>
                                                @for($i = 0; $i < 17; $i++)
                                                    <option value="{{ $kebutuhan_khusus[$i] }}" @if($user->csSd->kebutuhan_khusus == $kebutuhan_khusus[$i]) selected @endif>{{ $kebutuhan_khusus[$i] }}</option>
                                                @endfor
                                            </select>
                                            @error('kebutuhan_khusus')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3 row">
                                            <label for="alamat_pd" class="form-label col-12">Alamat Tempat Tinggal</label>
                                            <input type="text" name="alamat_pd" id="alamat_pd" class="form-control col-md-8 @error('alamat_pd') is-invalid @enderror" value="{{ $user->csSd->alamat_pd }}" placeholder="Alamat">
                                            @error('alamat_pd')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            
                                            <input type="text" name="rt" id="rt" class="form-control col-md-2 @error('rt') is-invalid @enderror" value="{{ $user->csSd->rt }}" placeholder="RT">
                                            @error('rt')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <input type="text" name="rw" id="rw" class="form-control col-md-2 @error('rw') is-invalid @enderror" value="{{ $user->csSd->rw }}" placeholder="RW">
                                            @error('rw')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                            <input type="text" name="kelurahan" id="kelurahan" class="form-control col-md-6 @error('kelurahan') is-invalid @enderror" value="{{ $user->csSd->kelurahan }}" placeholder="Kelurahan/Desa">
                                            @error('kelurahan')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <input type="text" name="kecamatan" id="kecamatan" class="form-control col-md-6 @error('kecamatan') is-invalid @enderror>" value="{{ $user->csSd->kecamatan }}" placeholder="Kecamatan">
                                            @error('kecamatan')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                            <input type="text" name="kabupaten" id="kabupaten" class="form-control col-6 @error('kabupaten') is-invalid @enderror" value="{{ $user->csSd->kabupaten }}" placeholder="Kabupaten/Kota">
                                            @error('kabupaten')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <input type="number" name="kode_pos" id="kode_pos" class="form-control col-6 @error('kode_pos') is-invalid @enderror" value="{{ $user->csSd->kode_pos }}" placeholder="kode pos">
                                            @error('kode_pos')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                            <input type="text" name="lintang" id="lintang" class="form-control col-6 @error('lintang') is-invalid @enderror" value="{{ $user->csSd->lintang }}" placeholder="Lintang">
                                            @error('lintang')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <input type="text" name="bujur" id="bujur" class="form-control col-6 @error('bujur') is-invalid @enderror" value="{{ $user->csSd->bujur }}" placeholder="Bujur">
                                            @error('bujur')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="telp_rumah" class="form-label">Nomor Telepon Rumah</label>
                                            <input placeholder="Sesuai Akta Kelahiran" type="number" name="telp_rumah" id="telp_rumah" class="form-control @error('telp_rumah') is-invalid @enderror" value="{{ $user->csSd->telp_rumah }}">
                                            @error('telp_rumah')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group ml-3">
                                            <label for="telp_pd" class="form-label">Nomor Handphone</label>
                                            <input placeholder="Sesuai Akta Kelahiran" type="number" name="telp_pd" id="telp_pd" class="form-control @error('telp_pd') is-invalid @enderror" value="{{ $user->csSd->telp_pd }}">
                                            @error('telp_pd')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="moda_transportasi" class="form-label">Alat Transportasi Ke Sekolah</label>
                                            <select name="moda_transportasi" id="moda_transportasi" class="form-control @error('moda_transportasi') is-invalid @enderror">
                                                <option selected disabled>Pili salah satu</option>
                                                @for($i = 0; $i < 9; $i++)
                                                    <option value="{{ $moda_transportasi[$i] }}" @if($user->csSd->moda_transportasi == $moda_transportasi[$i]) selected @endif>{{ $moda_transportasi[$i] }}</option>
                                                @endfor
                                            </select>
                                            @error('moda_transportasi')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="jenis_tinggal" class="form-label">Jenis Tinggal</label>
                                            <select name="jenis_tinggal" id="jenis_tinggal" class="form-control @error('jenis_tinggal') is-invalid @enderror">
                                                <option selected disabled></option>
                                                @for($i = 0; $i < 5; $i++)
                                                    <option value="{{ $tempat_tinggal[$i] }}" @if($user->csSd->jenis_tinggal == $tempat_tinggal[$i]) selected @endif>{{ $tempat_tinggal[$i] }}</option>
                                                @endfor
                                            </select>
                                            @error('jenis_tinggal')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3 row">
                                            <label for="penerima_kks" class="col-12 form-label">Apakah penerima KKS ?</label>
                                            <select name="penerima_kks" id="penerima_kks" class="col-md-2 form-control @error('penerima_kks') is-invalid @enderror" >
                                                <option value=1 @if($user->csSd->penerima_kks == 1) selected @endif>Ya</option>
                                                <option value=0 @if($user->csSd->penerima_kks == 0) selected @endif>Tidak</option>
                                            </select>
                                            @error('penerima_kks')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                            <input placeholder="Isikan jika menerima" type="number" name="no_kks" id="no_kks" class="form-control col-md-10 @error('no_kks') is-invalid @enderror" value="{{ $user->csSd->no_kks }}">
                                            @error('no_kks')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3 row">
                                            <label for="penerima_kps" class="col-12 form-label">Apakah penerima KPS ?</label>
                                            <select name="penerima_kps" id="penerima_kps" class="col-md-2 form-control @error('penerima_kps') is-invalid @enderror" >
                                                <option value=1 @if($user->csSd->penerima_kps == 1) selected @endif>Ya</option>
                                                <option value=0 @if($user->csSd->penerima_kps == 0) selected @endif>Tidak</option>
                                            </select>
                                            @error('penerima_kps')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                            <input placeholder="Isikan jika menerima" type="number" name="no_kps" id="no_kps" class="form-control col-md-10 @error('no_kps') is-invalid @enderror" value="{{ $user->csSd->no_kps }}">
                                            @error('no_kps')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3 row">
                                            <label for="penerima_kip" class="col-12 form-label">Apakah penerima KIP ?</label>
                                            <select name="penerima_kip" id="penerima_kip" class="col-md-2 form-control @error('penerima_kip') is-invalid @enderror" >
                                                <option value=1 @if($user->csSd->penerima_kip == 1) selected @endif>Ya</option>
                                                <option value=0 @if($user->csSd->penerima_kip == 0) selected @endif>Tidak</option>
                                            </select>
                                            @error('penerima_kip')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                            <input placeholder="Isikan jika menerima" type="number" name="no_kip" id="no_kip" class="form-control col-md-10 @error('no_kip') is-invalid @enderror" value="{{ $user->csSd->no_kip }}">
                                            @error('no_kip')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="ml-3" style="margin-top: 10px"><b><h4 class="mt-3 text-center"><hr>DATA PERIODIK SISWA<hr></h4></b>
                                        
                                        <div class="form-group ml-3">
                                            <label for="tinggi" class="form-label">Tinggi Badan</label>
                                            <div class="input-group-prepend  p-0">
                                                <input type="text" name="tinggi" id="tinggi" class="form-control @error('tinggi') is-invalid @enderror" value="{{ $user->csSd->tinggi }}"><div class="input-group-text">Cm</div>
                                            </div>
                                            @error('tinggi')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group ml-3">
                                            <label for="banyak_saudara_kandung" class="form-label">Jumlah Saudara Kandung</label>
                                            <div class="input-group-prepend  p-0">
                                                <input type="text" name="banyak_saudara_kandung" id="banyak_saudara_kandung" class="form-control @error('banyak_saudara_kandung') is-invalid @enderror" value="{{ $user->csSd->banyak_saudara_kandung }}"><div class="input-group-text">Orang</div>
                                            </div>
                                            @error('banyak_saudara_kandung')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="berat" class="form-label">Berat Badan</label>
                                            <div class="input-group-prepend  p-0">
                                                <input type="text" name="berat" id="berat" class="form-control @error('berat') is-invalid @enderror" value="{{ $user->csSd->berat }}"><div class="input-group-text">Kg</div>
                                            </div>
                                            @error('berat')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="jarak_kesekolah" class="form-label">Jarak Tempat Tinggal Ke Sekolah</label>
                                            <div class="input-group-prepend  p-0">
                                                <input type="text" name="jarak_kesekolah" id="jarak_kesekolah" class="form-control @error('jarak_kesekolah') is-invalid @enderror" value="{{ $user->csSd->jarak_kesekolah }}"><div class="input-group-text">Km</div>
                                            </div>
                                            @error('jarak_kesekolah')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="waktu_kesekolah" class="form-label">Waktu Tempuh Ke Sekolah</label>
                                            <div class="input-group-prepend  p-0">
                                                <input type="text" name="waktu_kesekolah" id="waktu_kesekolah" class="form-control @error('waktu_kesekolah') is-invalid @enderror" value="{{ $user->csSd->waktu_kesekolah }}"><div class="input-group-text">Km</div>
                                            </div>
                                            @error('waktu_kesekolah')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        
                                    </div>

                                </div>

                                <div class="col-md-6">
        
                                    <div class="ml-3" style="margin-top: 10px"><b><h4 class="mt-3 text-center"><hr>ORANGTUA<hr></h4></b>

                                        <div class="form-group ml-3">
                                            <label for="nama_ayah" class="form-label">Nama Ayah Kandung</label>
                                            <input type="text" name="nama_ayah" id="nama_ayah" class="form-control @error('nama_ayah') is-invalid @enderror" value="{{ $user->csSd->nama_ayah }}">
                                            @error('nama_ayah')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="tahun_lahir_ayah" class="form-label">Tahun lahir</label>
                                            <input type="year" name="tahun_lahir_ayah" id="tahun_lahir_ayah" class="form-control @error('tahun_lahir_ayah') is-invalid @enderror" value="{{ $user->csSd->tahun_lahir_ayah }}">
                                            @error('tahun_lahir_ayah')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="pendidikan_ayah" class="form-label">Pendidikan</label>
                                            <select name="pendidikan_ayah" id="pendidikan_ayah" class="form-control @error('pendidikan_ayah') is-invalid @enderror">
                                                <option selected disabled>Pilih salah satu</option>
                                                @for($i = 0; $i < 7; $i++)
                                                    <option value="{{ $pendidikan[$i] }}" @if($user->csSd->pendidikan_ayah == $pendidikan[$i]) selected @endif>{{ $pendidikan[$i] }}</option>
                                                @endfor
                                            </select>
                                            @error('pendidikan_ayah')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="pekerjaan_ayah" class="form-label">Pekerjaan</label>
                                            <select name="pekerjaan_ayah" id="pekerjaan_ayah" class="form-control @error('pekerjaan_ayah') is-invalid @enderror">
                                                <option selected disabled>Pilih salah satu</option>
                                                @for($i = 0; $i < 7; $i++)
                                                    <option value="{{ $pekerjaan[$i] }}" @if($user->csSd->pekerjaan_ayah == $pekerjaan[$i]) selected @endif>{{ $pekerjaan[$i] }}</option>
                                                @endfor
                                            </select>
                                            @error('pekerjaan_ayah')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="penghasilan_ayah" class="form-label">Penghasilan Bulanan</label>
                                            <select name="penghasilan_ayah" id="penghasilan_ayah" class="form-control @error('penghasilan_ayah') is-invalid @enderror">
                                                <option selected disabled>Pilih salah satu</option>
                                                @for($i = 0; $i < 7; $i++)
                                                    <option value="{{ $penghasilan[$i] }}" @if($user->csSd->penghasilan_ayah == $penghasilan[$i]) selected @endif>{{ $penghasilan[$i] }}</option>
                                                @endfor
                                            </select>
                                            @error('penghasilan_ayah')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="nama_ibu" class="form-label">Nama Ibu Kandung</label>
                                            <input type="text" name="nama_ibu" id="nama_ibu" class="form-control @error('nama_ibu') is-invalid @enderror" value="{{ $user->csSd->nama_ibu }}">
                                            @error('nama_ibu')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="tahun_lahir_ibu" class="form-label">Tahun lahir</label>
                                            <input type="year" name="tahun_lahir_ibu" id="tahun_lahir_ibu" class="form-control @error('tahun_lahir_ibu') is-invalid @enderror" value="{{ $user->csSd->tahun_lahir_ibu }}">
                                            @error('tahun_lahir_ibu')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="pendidikan_ibu" class="form-label">Pendidikan</label>
                                            <select name="pendidikan_ibu" id="pendidikan_ibu" class="form-control @error('pendidikan_ibu') is-invalid @enderror">
                                                <option selected disabled>Pilih salah satu</option>
                                                @for($i = 0; $i < 7; $i++)
                                                    <option value="{{ $pendidikan[$i] }}" @if($user->csSd->pendidikan_ibu == $pendidikan[$i]) selected @endif>{{ $pendidikan[$i] }}</option>
                                                @endfor
                                            </select>
                                            @error('pendidikan_ibu')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="pekerjaan_ibu" class="form-label">Pekerjaan</label>
                                            <select name="pekerjaan_ibu" id="pekerjaan_ibu" class="form-control @error('pekerjaan_ibu') is-invalid @enderror">
                                                <option selected disabled>Pilih salah satu</option>
                                                @for($i = 0; $i < 7; $i++)
                                                    <option value="{{ $pekerjaan[$i] }}" @if($user->csSd->pekerjaan_ibu == $pekerjaan[$i]) selected @endif>{{ $pekerjaan[$i] }}</option>
                                                @endfor
                                            </select>
                                            @error('pekerjaan_ibu')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="penghasilan_ibu" class="form-label">Penghasilan Bulanan</label>
                                            <select name="penghasilan_ibu" id="penghasilan_ibu" class="form-control @error('penghasilan_ibu') is-invalid @enderror">
                                                <option selected disabled>Pilih salah satu</option>
                                                @for($i = 0; $i < 7; $i++)
                                                    <option value="{{ $penghasilan[$i] }}" @if($user->csSd->penghasilan_ibu == $penghasilan[$i]) selected @endif>{{ $penghasilan[$i] }}</option>
                                                @endfor
                                            </select>
                                            @error('penghasilan_ibu')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                    </div>

                                    <div class="ml-3" style="margin-top: 10px"><b><h4 class="mt-3 text-center"><hr>APABILA TINGGAL BERSAMA WALII<hr></h4></b>
                                        <div class="form-group ml-3">
                                            <label for="nama_wali" class="form-label">Nama Wali</label>
                                            <input type="text" name="nama_wali" id="nama_wali" class="form-control @error('nama_wali') is-invalid @enderror" value="{{ $user->csSd->nama_wali }}">
                                            @error('nama_wali')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="tahun_lahir_wali" class="form-label">Tahun lahir</label>
                                            <input type="year" name="tahun_lahir_wali" id="tahun_lahir_wali" class="form-control @error('tahun_lahir_wali') is-invalid @enderror" value="{{ $user->csSd->tahun_lahir_wali }}">
                                            @error('tahun_lahir_wali')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="pendidikan_wali" class="form-label">Pendidikan</label>
                                            <select name="pendidikan_wali" id="pendidikan_wali" class="form-control @error('pendidikan_wali') is-invalid @enderror">
                                                <option selected disabled>Pilih salah satu</option>
                                                @for($i = 0; $i < 7; $i++)
                                                    <option value="{{ $pendidikan[$i] }}" @if($user->csSd->pendidikan_wali == $pendidikan[$i]) selected @endif>{{ $pendidikan[$i] }}</option>
                                                @endfor
                                            </select>
                                            @error('pendidikan_wali')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="pekerjaan_wali" class="form-label">Pekerjaan</label>
                                            <select name="pekerjaan_wali" id="pekerjaan_wali" class="form-control @error('pekerjaan_wali') is-invalid @enderror">
                                                <option selected disabled>Pilih salah satu</option>
                                                @for($i = 0; $i < 7; $i++)
                                                    <option value="{{ $pekerjaan[$i] }}" @if($user->csSd->pekerjaan_wali == $pekerjaan[$i]) selected @endif>{{ $pekerjaan[$i] }}</option>
                                                @endfor
                                            </select>
                                            @error('pekerjaan_wali')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group ml-3">
                                            <label for="penghasilan_wali" class="form-label">Penghasilan Bulanan</label>
                                            <select name="penghasilan_wali" id="penghasilan_wali" class="form-control @error('penghasilan_wali') is-invalid @enderror">
                                                <option selected disabled>Pilih salah satu</option>
                                                @for($i = 0; $i < 7; $i++)
                                                    <option value="{{ $penghasilan[$i] }}" @if($user->csSd->penghasilan_wali == $penghasilan[$i]) selected @endif>{{ $penghasilan[$i] }}</option>
                                                @endfor
                                            </select>
                                            @error('penghasilan_wali')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="mb-3 ml-3" style="margin-top: 10px"><b><h4><hr>Dokumen<hr></h4></b>
                                        
                                <div class="form-group row ml-3">
                                    <label for="foto_pd" class="col-12 form-label">Pas Foto 3 X 4</label>
                                    <input type="file" name="foto_pd" id="foto_pd" class="col-sm-8 @error('foto_pd') is-invalid @enderror">
                                    @error('foto_pd')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                    @if($user->csSd->foto_pd)
                                        <img class="d-flex mx-auto mb-3" src="{{ asset("dokumen/sd/" . $user->csSd->foto_pd) }}" alt="{{ $user->csSd->foto_pd }}">
                                    @endif
                                </div>
                                
                                <div class="form-group row ml-3">
                                    <label for="scan_akta" class="col-12 form-label">Scan Akta Kelahiran</label>
                                    <input type="file" name="scan_akta" id="scan_akta" class="col-sm-8 @error('scan_akta') is-invalid @enderror">
                                    @error('scan_akta')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                    @if($user->csSd->scan_akta)
                                        <img class="d-flex mx-auto mb-3" src="{{ asset("dokumen/sd/" . $user->csSd->scan_akta) }}" alt="{{ $user->csSd->scan_akta }}">
                                    @endif
                                </div>

                                <div class="form-group row ml-3">
                                    <label for="scan_kk" class="col-12 form-label">Scan Kartu Keluarga</label>
                                    <input type="file" name="scan_kk" id="scan_kk" class="col-sm-8 @error('scan_kk') is-invalid @enderror">
                                    @error('scan_kk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                    @if($user->csSd->scan_kk)
                                        <img class="d-flex mx-auto mb-3" src="{{ asset("dokumen/sd/" . $user->csSd->scan_kk) }}" alt="{{ $user->csSd->scan_kk }}">
                                    @endif
                                </div>

                                <div class="form-group row ml-3">
                                    <label for="scan_ijazah" class="col-12 form-label">Scan Ijazah PAUD/TK (jika berasal dari PAUD/TK)</label>
                                    <input type="file" name="scan_ijazah" id="scan_ijazah" class="col-sm-8 @error('scan_ijazah') is-invalid @enderror">
                                    @error('scan_ijazah')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                    @if($user->csSd->scan_ijazah)
                                        <img class="d-flex mx-auto mb-3" src="{{ asset("dokumen/sd/" . $user->csSd->scan_ijazah) }}" alt="{{ $user->csSd->scan_ijazah }}">
                                    @endif
                                </div>

                                <div class="form-group row ml-3">
                                    <label for="scan_kks" class="col-12 form-label">Scan KKS</label>
                                    <input type="file" name="scan_kks" id="scan_kks" class="col-sm-8 @error('scan_kks') is-invalid @enderror">
                                    @error('scan_kks')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                    @if($user->csSd->scan_kks)
                                        <img class="d-flex mx-auto mb-3" src="{{ asset("dokumen/sd/" . $user->csSd->scan_kks) }}" alt="{{ $user->csSd->scan_kks }}">
                                    @endif
                                </div>

                                <div class="form-group row ml-3">
                                    <label for="scan_kps" class="col-12 form-label">Scan KPS</label>
                                    <input type="file" name="scan_kps" id="scan_kps" class="col-sm-8 @error('scan_kps') is-invalid @enderror">
                                    @error('scan_kps')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                    @if($user->csSd->scan_kps)
                                        <img class="d-flex mx-auto mb-3" src="{{ asset("dokumen/sd/" . $user->csSd->scan_kps) }}" alt="{{ $user->csSd->scan_kps }}">
                                    @endif
                                </div>

                                <div class="form-group row ml-3">
                                    <label for="scan_kip" class="col-12 form-label">Scan KIP</label>
                                    <input type="file" name="scan_kip" id="scan_kip" class="col-sm-8 @error('scan_kip') is-invalid @enderror">
                                    @error('scan_kip')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                    @if($user->csSd->scan_kip)
                                        <img class="d-flex mx-auto mb-3" src="{{ asset("dokumen/sd/" . $user->csSd->scan_kip) }}" alt="{{ $user->csSd->scan_kip }}">
                                    @endif
                                </div>

                            </div>
                            
                            <div class="d-flex justify-content-end">
                            <input type="hidden" name="is_data_verified" value=1>
                            @if(Auth::user()->is_data_verified == 3)
                                <button type="submit" class="btn btn-warning text-white float-right" style="width 100px">Ubah</button>
                            @endif    
                            </div>
                        </form>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection

{{-- D-}GW=Myz{k0/PY9P8za --}}