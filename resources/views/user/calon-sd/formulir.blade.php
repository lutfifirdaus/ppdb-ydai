@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-center mb-3">
        <h3>FORMULIR PENDAFTARANAN SISWA BARU SD DHARMA KARYA UT</h3>
    </div>
    <div class="d-flex flex-column mt-3">
        <div class="col-md-auto">
            <div class="card mb-3">
                @if (Auth::user()->is_data_verified == 0)
                    <div class="card-body mt-3">
                        <div class="text-danger">
                            <h6>Perhatikan! Silahkan Anda isi formulir berikut sesuai data yang valid</h6>
                        </div>
                        <br>
                        <form action="/calon/sd/store/{{ $user->id }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <input type="number" name="is_data_verified" id="is_data_verified" hidden value=1>
                            
                            <div class="row">
                                <div class="col-lg-6 col-12">

                                    <div class="ml-3" style="margin-top: 10px"><b><h4 class="mt-3 text-center"><hr>IDENTITAS SISWA<hr></h4></b>
                                
                                        <div class="form-group row ml-3">
                                            <label for="nama_pd" class="col-12 form-label">Nama Lengkap</label>
                                            <input type="text" name="nama_pd" id="nama_pd" class="form-control col-12 @error('nama_pd') is-invalid @enderror" value="{{ old('nama_pd') }}" placeholder="sesuai Akta Kelahiran">
                                            
                                            @error('nama_pd')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group row ml-3">
                                            <label for="jenis_kelamin" class="col-12 form-label">Jenis Kelamin</label>
                                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control col-12 @error('nama_pd') is-invalid @enderror">
                                                    <option selected disabled>Pilih salah satu</option>
                                                    <option @if (old('jenis_kelamin')  == "Laki-laki") selected @endif value="Laki-laki">Laki-laki</option>
                                                    <option @if (old('jenis_kelamin')  == "Laki-laki") selected @endif value="Perempuan">Perempuan</option>
                                            </select>

                                            @error('jenis_kelamin')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror                                        
                                        </div>

                                        <div class="form-group row ml-3">
                                            <label for="nisn" class="col-12 form-label @error('nisn') is-invalid @enderror">NISN</label>
                                            <input placeholder="Sesuai Kartu Keluarga" type="number" name="nisn" id="nisn" class="form-control col-12" value="{{ old('nisn') }}">
                                            
                                            @error('nisn')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group row ml-3">
                                            <label for="nik" class="col-12 form-label @error('nik') is-invalid @enderror">NIK (Sesuai KK)</label>
                                            <input placeholder="Sesuai Kartu Keluarga" type="number" name="nik" id="nik" class="form-control col-12" value="{{ old('nik') }}">
                                            
                                            @error('nik')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
        
                                        <div class="form-group row ml-3">
                                            <label for="tempat_lahir" class="col-12 form-label">Tempat, Tanggal Lahir</label>
                                            <input type="text" name="tempat_lahir" id="tanggal_lahir" class="form-control col-8 @error('tempat_lahir') is-invalid @enderror" value="{{ old('tempat_lahir') }}" >
                                            
                                            @error('tempat_lahir')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                            <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control col-4 @error('tanggal_lahir') is-invalid @enderror" value="{{ old('tanggal_lahir') }}">

                                            @error('tanggal_lahir')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group row ml-3">
                                            <label for="no_akta" class="col-12 form-label">Nomor Registras Akta Lahir</label>
                                            <input placeholder="Sesuai Akta Kelahiran" type="number" name="no_akta" id="no_akta" class="form-control col-12" value="{{ old('no_akta') }}">
                                            @error('no_akta')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group row ml-3">
                                            <label for="anak_ke" class="col-12 form-label">Anak Ke</label>
                                            <input type="number" name="anak_ke" id="anak_ke" class="form-control col-12" value="{{ old('anak_ke') }}">
                                            @error('anak_ke')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group row ml-3">
                                            <label for="agama" class="col-12 form-label">Agama</label>
                                            <select name="agama" id="agama" class="form-control col-12">
                                                    <option selected disabled>Pilih salah satu</option>
                                                    @for(i = 0; i < 7 ; i++)
                                                    <option value="{{ $agama[$i] }}" @if(old('agama') == $agama[$i]) selected @endif>{{ $agama[$i] }}</option>
                                                    @endfor
                                            </select>
                                            @error('agama')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group row ml-3">
                                            <label for="kewarganegaraan" class="col-12 form-label">Kewarganegaraan</label>
                                            <input placeholder="Sesuai Kartu Keluarga" type="number" name="kewarganegaraan" id="kewarganegaraan" class="form-control col-12" value="{{ old('kewarganegaraan') }}">
                                            @error('kewarganegaraan')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group row ml-3">
                                            <label for="kebutuhan_khusus" class="col-12 form-label">Berkebutuhan Khusus</label>
                                            <select name="kebutuhan_khusus" id="kebutuhan_khusus" class="form-control col-12">
                                                <option selected disabled>Pilih salah satu</option>
                                                @for(i = 0; i < 14; i++)
                                                    <option value="{{ $kebutuhan_khusus[$i] }}" @if(old('kebutuhan_khusus') == $kebutuhan_khusus[$i]) selected @endif>{{ $kebutuhan_khusus[$i] }}</option>
                                                @endfor
                                            </select>
                                            @error('kebutuhan_khusus')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group row ml-3">
                                            <label for="alamat_pd" class="col-12 form-label">Alamat Tempat Tinggal</label>
                                            <input type="text" name="alamat_pd" id="alamat_pd" class="form-control col-md-8" value="{{ old('alamat_pd') }}" placeholder="Alamat">
                                            @error('alamat_pd')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            
                                            <input type="text" name="rt" id="rt" class="form-control col-md-2" value="{{ old('rt') }}" placeholder="RT">
                                            @error('rt')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <input type="text" name="rw" id="rw" class="form-control col-md-2" value="{{ old('rw') }}" placeholder="RW">
                                            @error('rw')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                            <input type="text" name="kelurahan" id="kelurahan" class="form-control col-md-6" value="{{ old('kelurahan') }}" placeholder="Kelurahan/Desa">
                                            @error('kelurahan')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <input type="text" name="kecamatan" id="kecamatan" class="form-control col-md-6" value="{{ old('kecamatan') }}" placeholder="Kecamatan">
                                            @error('kecamatan')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                            <input type="text" name="kabupaten" id="kabupaten" class="form-control col-6" value="{{ old('kabupaten') }}" placeholder="Kabupaten/Kota">
                                            @error('kabupaten')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <input type="number" name="kode_pos" id="kode_pos" class="form-control col-6" value="{{ old('kode_pos') }}" placeholder="kode pos">
                                            @error('kode_pos')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                            <input type="text" name="lintang" id="lintang" class="form-control col-6" value="{{ old('lintang') }}" placeholder="Lintang">
                                            @error('lintang')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <input type="text" name="bujur" id="bujur" class="form-control col-6" value="{{ old('bujur') }}" placeholder="Bujur">
                                            @error('bujur')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group row ml-3">
                                            <label for="telp_rumah" class="col-12 form-label">Nomor Telepon Rumah</label>
                                            <input placeholder="Sesuai Akta Kelahiran" type="number" name="telp_rumah" id="telp_rumah" class="form-control col-12" value="{{ old('telp_rumah') }}">
                                            @error('telp_rumah')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group row ml-3">
                                            <label for="telp_pd" class="col-12 form-label">Nomor Handphone</label>
                                            <input placeholder="Sesuai Akta Kelahiran" type="number" name="telp_pd" id="telp_pd" class="form-control col-12" value="{{ old('telp_pd') }}">
                                            @error('telp_pd')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group row ml-3">
                                            <label for="moda_transportasi" class="col-12 form-label">Alat Transportasi Ke Sekolah</label>
                                            <select name="moda_transportasi" id="moda_transportasi">
                                                <option selected disabled></option>
                                                @for(i = 0; i < 14; i++)
                                                    <option value="{{ $moda_transportasi[$i] }}" @if(old('moda_transportasi') == $moda_transportasi[$i]) selected @endif>$moda_transportasi[$i]</option>
                                                @endfor
                                            </select>
                                            @error('moda_transportasi')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group row ml-3">
                                            <label for="jenis_tinggal" class="col-12 form-label">Jenis Tinggal</label>
                                            <select name="jenis_tinggal" id="jenis_tinggal">
                                                <option selected disabled></option>
                                                @for(i = 0; i < 14; i++)
                                                    <option value="{{ $tempat_tinggal[$i] }}" @if(old('jenis_tinggal') == $tempat_tinggal[$i]) selected @endif>$tempat_tinggal[$i]</option>
                                                @endfor
                                            </select>
                                            @error('jenis_tinggal')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group row ml-3">
                                            <label for="penerima_kks" class="col-md-3 form-label">Apakah penerima KKS ?</label>
                                            <select name="penerima_kks" id="penerima_kks" class="col-md-3">
                                                <option value=1 @if(old('penerima_kks') == 1) selected @endif>Ya</option>
                                                <option value=0 @if(old('penerima_kks') == 0) selected @endif>Tidak</option>
                                            </select>
                                            @error('penerima_kks')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                            <label for="no_kks" class="col-md-3 form-label">Nomor KKS</label>
                                            <input placeholder="Isikan jika menerima" type="number" name="no_kks" id="no_kks" class="form-control col-md-3" value="{{ old('no_kks') }}">
                                            @error('no_kks')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group row ml-3">
                                            <label for="penerima_kps" class="col-md-3 form-label">Apakah penerima KPS ?</label>
                                            <select name="penerima_kps" id="penerima_kps" class="col-md-3">
                                                <option value=1 @if(old('penerima_kps') == 1) selected @endif>Ya</option>
                                                <option value=0 @if(old('penerima_kps') == 0) selected @endif>Tidak</option>
                                            </select>
                                            @error('penerima_kps')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                            <label for="no_kps" class="col-md-3 form-label">Nomor KPS</label>
                                            <input placeholder="Isikan jika menerima" type="number" name="no_kps" id="no_kps" class="form-control col-md-3" value="{{ old('no_kps') }}">
                                            @error('no_kps')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group row ml-3">
                                            <label for="penerima_kip" class="col-md-3 form-label">Apakah penerima KIP ?</label>
                                            <select name="penerima_kip" id="penerima_kip" class="col-md-3">
                                                <option value=1 @if(old('penerima_kip') == 1) selected @endif>Ya</option>
                                                <option value=0 @if(old('penerima_kip') == 0) selected @endif>Tidak</option>
                                            </select>
                                            @error('penerima_kip')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                            <label for="no_kip" class="col-md-3 form-label">Nomor KIP</label>
                                            <input placeholder="Isikan jika menerima" type="number" name="no_kip" id="no_kip" class="form-control col-md-3" value="{{ old('no_kip') }}">
                                            @error('no_kip')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                    <div class="ml-3" style="margin-top: 10px"><b><h4 class="mt-3 text-center"><hr>DATA PERIODIK SISWA<hr></h4></b>
                                        
                                        <div class="form-group row ml-3">
                                            <label for="tinggi" class="col-12 form-label">Tinggi Badan</label>
                                            <div class="input-group-prepend  col-12 p-0">
                                                <input type="text" name="tinggi" id="tinggi" class="form-control" value="{{ old('tinggi') }}"><div class="input-group-text">Cm</div>
                                            </div>
                                            @error('tinggi')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group row ml-3">
                                            <label for="banyak_saudara_kandung" class="col-12 form-label">Jumlah Saudara Kandung</label>
                                            <div class="input-group-prepend  col-12 p-0">
                                                <input type="text" name="banyak_saudara_kandung" id="banyak_saudara_kandung" class="form-control" value="{{ old('banyak_saudara_kandung') }}"><div class="input-group-text">Orang</div>
                                            </div>
                                            @error('banyak_saudara_kandung')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group row ml-3">
                                            <label for="berat" class="col-12 form-label">Berat Badan</label>
                                            <div class="input-group-prepend  col-12 p-0">
                                                <input type="text" name="berat" id="berat" class="form-control" value="{{ old('berat') }}"><div class="input-group-text">Kg</div>
                                            </div>
                                            @error('berat')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group row ml-3">
                                            <label for="jarak_kesekolah" class="col-12 form-label">Jarak Tempat Tinggal Ke Sekolah</label>
                                            <div class="input-group-prepend  col-12 p-0">
                                                <input type="text" name="jarak_kesekolah" id="jarak_kesekolah" class="form-control" value="{{ old('jarak_kesekolah') }}"><div class="input-group-text">Km</div>
                                            </div>
                                            @error('jarak_kesekolah')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group row ml-3">
                                            <label for="waktu_kesekolah" class="col-12 form-label">Waktu Tempuh Ke Sekolah</label>
                                            <div class="input-group-prepend  col-12 p-0">
                                                <input type="text" name="waktu_kesekolah" id="waktu_kesekolah" class="form-control" value="{{ old('waktu_kesekolah') }}"><div class="input-group-text">Km</div>
                                            </div>
                                            @error('waktu_kesekolah')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        
                                    </div>

                                </div>

                                <div class="col-lg-6 col-12">
                                    
                                    <div class="ml-3" style="margin-top: 10px"><b><h4 class="mt-3 text-center"><hr>SEKOLAH ASAL<hr></h4></b>

                                        <div class="form-group row ml-3">
                                            <label for="sekolah_asal" class="col-12 form-label">Asal Sekolah</label>
                                            <input type="text" name="sekolah_asal" id="sekolah_asal" class="form-control col-12" value="{{ old('sekolah_asal') }}">
                                            @error('sekolah_asal')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group row ml-3">
                                            <label for="kecamatan_sekolah_asal" class="col-12 form-label">Kecamatan Sekolah</label>
                                            <input type="text" name="kecamatan_sekolah_asal" id="kecamatan_sekolah_asal" class="form-control col-12" value="{{ old('kecamatan_sekolah_asal') }}">
                                            @error('kecamatan_sekolah_asal')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    
                                    </div>
        
                                    <div class="ml-3" style="margin-top: 10px"><b><h4 class="mt-3 text-center"><hr>ORANGTUA<hr></h4></b>

                                        <div class="form-group row ml-3">
                                            <label for="nama_ayah" class="col-12 form-label">Nama Ayah Kandung</label>
                                            <input type="text" name="nama_ayah" id="nama_ayah" class="form-control col-12" value="{{ old('nama_ayah') }}">
                                            @error('nama_ayah')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group row ml-3">
                                            <label for="tahun_lahir_ayah" class="col-12 form-label">Tahun lahir</label>
                                            <input type="year" name="tahun_lahir_ayah" id="tahun_lahir_ayah" class="form-control col-12" value="{{ old('tahun_lahir_ayah') }}">
                                            @error('tahun_lahir_ayah')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group row ml-3">
                                            <label for="pendidikan_ayah" class="col-12 form-label">Pendidikan</label>
                                            <select name="pendidikan_ayah" id="pendidikan_ayah">
                                                <option selected disabled>Pilih salah satu</option>
                                                @for(i = 0; i < 17; i++)
                                                    <option value="{{ $pendidikan[$i] }}" @if(old('pendidikan_ayah') == $pendidikan[$i]) selected @endif>{{ $pendidikan[$i] }}</option>
                                                @endfor
                                            </select>
                                            @error('pendidikan_ayah')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group row ml-3">
                                            <label for="pekerjaan_ayah" class="col-12 form-label">Pekerjaan</label>
                                            <select name="pekerjaan_ayah" id="pekerjaan_ayah">
                                                <option selected disabled>Pilih salah satu</option>
                                                @for(i = 0; i < 17; i++)
                                                    <option value="{{ $pekerjaan[$i] }}" @if(old('pekerjaan_ayah') == $pekerjaan[$i]) selected @endif>{{ $pekerjaan[$i] }}</option>
                                                @endfor
                                            </select>
                                            @error('pekerjaan_ayah')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group row ml-3">
                                            <label for="penghasilan_ayah" class="col-12 form-label">Penghasilan Bulanan</label>
                                            <select name="penghasilan_ayah" id="penghasilan_ayah">
                                                <option selected disabled>Pilih salah satu</option>
                                                @for(i = 0; i < 17; i++)
                                                    <option value="{{ $penghasilan[$i] }}" @if(old('penghasilan_ayah') == $penghasilan[$i]) selected @endif>{{ $penghasilan[$i] }}</option>
                                                @endfor
                                            </select>
                                            @error('penghasilan_ayah')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group row ml-3">
                                            <label for="nama_ibu" class="col-12 form-label">Nama Ibu Kandung</label>
                                            <input type="text" name="nama_ibu" id="nama_ibu" class="form-control col-12" value="{{ old('nama_ibu') }}">
                                            @error('nama_ibu')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group row ml-3">
                                            <label for="tahun_lahir_ibu" class="col-12 form-label">Tahun lahir</label>
                                            <input type="year" name="tahun_lahir_ibu" id="tahun_lahir_ibu" class="form-control col-12" value="{{ old('tahun_lahir_ibu') }}">
                                            @error('tahun_lahir_ibu')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group row ml-3">
                                            <label for="pendidikan_ibu" class="col-12 form-label">Pendidikan</label>
                                            <select name="pendidikan_ibu" id="pendidikan_ibu">
                                                <option selected disabled>Pilih salah satu</option>
                                                @for(i = 0; i < 17; i++)
                                                    <option value="{{ $pendidikan[$i] }}" @if(old('pendidikan_ibu') == $pendidikan[$i]) selected @endif>{{ $pendidikan[$i] }}</option>
                                                @endfor
                                            </select>
                                            @error('pendidikan_ibu')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group row ml-3">
                                            <label for="pekerjaan_ibu" class="col-12 form-label">Pekerjaan</label>
                                            <select name="pekerjaan_ibu" id="pekerjaan_ibu">
                                                <option selected disabled>Pilih salah satu</option>
                                                @for(i = 0; i < 17; i++)
                                                    <option value="{{ $pekerjaan[$i] }}" @if(old('pekerjaan_ibu') == $pekerjaan[$i]) selected @endif>{{ $pekerjaan[$i] }}</option>
                                                @endfor
                                            </select>
                                            @error('pekerjaan_ibu')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group row ml-3">
                                            <label for="penghasilan_ibu" class="col-12 form-label">Penghasilan Bulanan</label>
                                            <select name="penghasilan_ibu" id="penghasilan_ibu">
                                                <option selected disabled>Pilih salah satu</option>
                                                @for(i = 0; i < 17; i++)
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

                                    <div class="ml-3" style="margin-top: 10px"><b><h4 class="mt-3 text-center"><hr>APABILA TINGGAL BERSAMA WALI ISI DATA BERIKUT<hr></h4></b>
                                        <div class="form-group row ml-3">
                                            <label for="nama_wali" class="col-12 form-label">Nama Wali</label>
                                            <input type="text" name="nama_wali" id="nama_wali" class="form-control col-12" value="{{ old('nama_wali') }}">
                                            @error('nama_wali')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group row ml-3">
                                            <label for="tahun_lahir_wali" class="col-12 form-label">Tahun lahir</label>
                                            <input type="year" name="tahun_lahir_wali" id="tahun_lahir_wali" class="form-control col-12" value="{{ old('tahun_lahir_wali') }}">
                                            @error('tahun_lahir_wali')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group row ml-3">
                                            <label for="pendidikan_wali" class="col-12 form-label">Pendidikan</label>
                                            <select name="pendidikan_wali" id="pendidikan_wali">
                                                <option selected disabled>Pilih salah satu</option>
                                                @for(i = 0; i < 17; i++)
                                                    <option value="{{ $pendidikan[$i] }}" @if(old('pendidikan_wali') == $pendidikan[$i]) selected @endif>{{ $pendidikan[$i] }}</option>
                                                @endfor
                                            </select>
                                            @error('pendidikan_wali')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group row ml-3">
                                            <label for="pekerjaan_wali" class="col-12 form-label">Pekerjaan</label>
                                            <select name="pekerjaan_wali" id="pekerjaan_wali">
                                                <option selected disabled>Pilih salah satu</option>
                                                @for(i = 0; i < 17; i++)
                                                    <option value="{{ $pekerjaan[$i] }}" @if(old('pekerjaan_wali') == $pekerjaan[$i]) selected @endif>{{ $pekerjaan[$i] }}</option>
                                                @endfor
                                            </select>
                                            @error('pekerjaan_wali')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group row ml-3">
                                            <label for="penghasilan_wali" class="col-12 form-label">Penghasilan Bulanan</label>
                                            <select name="penghasilan_wali" id="penghasilan_wali">
                                                <option selected disabled>Pilih salah satu</option>
                                                @for(i = 0; i < 17; i++)
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
                                            <input type="file" name="foto_pd" id="foto_pd" class="col-sm-8">
                                            @error('foto_pd')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group row ml-3">
                                            <label for="scan_akta" class="col-12 form-label">Scan Akta Kelahiran</label>
                                            <input type="file" name="scan_akta" id="scan_akta" class="col-sm-8">
                                            @error('scan_akta')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="form-group row ml-3">
                                            <label for="scan_kk" class="col-12 form-label">Scan Kartu Keluarga</label>
                                            <input type="file" name="scan_kk" id="scan_kk" class="col-sm-8">
                                            @error('scan_kk')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="form-group row ml-3">
                                            <label for="scan_ijazah" class="col-12 form-label">Scan Ijazah PAUD/TK (jika berasal dari PAUD/TK)</label>
                                            <input type="file" name="scan_ijazah" id="scan_ijazah" class="col-sm-8">
                                            @error('scan_ijazah')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="form-group row ml-3">
                                            <label for="scan_kks" class="col-12 form-label">Scan KKS</label>
                                            <input type="file" name="scan_kks" id="scan_kks" class="col-sm-8">
                                            @error('scan_kks')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="form-group row ml-3">
                                            <label for="scan_kks" class="col-12 form-label">Scan KKS</label>
                                            <input type="file" name="scan_kks" id="scan_kks" class="col-sm-8">
                                            @error('scan_kks')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="form-group row ml-3">
                                            <label for="scan_kps" class="col-12 form-label">Scan KPS</label>
                                            <input type="file" name="scan_kps" id="scan_kps" class="col-sm-8">
                                            @error('scan_kps')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="form-group row ml-3">
                                            <label for="scan_kip" class="col-12 form-label">Scan KIP</label>
                                            <input type="file" name="scan_kip" id="scan_kip" class="col-sm-8">
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
                            @foreach ($calon_siswa_sds as $pesertadidik)
                            <div class="ml-3" style="margin-top: 10px"><b><h4 class="mt-3 text-center"><hr>Biodata<hr></h4></b>
                                <div class="form-group row ml-3">
                                    <label for="nik" class="col-sm-3 form-label">NIK / Nomor Induk Kependudukan</label>
                                    <input type="number" name="nik" id="nik" class="form-control col-12" value="{{ $pesertadidik->nik }}">
                                    @error('nik')
                                        <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                    @enderror
                                </div>
                                <div class="form-group row ml-3">
                                    <label for="nama_pd" class="col-sm-3 form-label">Nama Lengkap</label>
                                        <input type="text" name="nama_pd" id="nama_pd" class="form-control col-12" value="{{ $pesertadidik->nama_pd }}">
                                    @error('nama_pd')
                                        <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                    @enderror
                                </div>
                                <div class="form-group row ml-3">
                                    <label for="ttl" class="col-sm-3 form-label">Tempat, Tanggal Lahir</label>
                                    <input type="text" name="ttl" id="ttl" class="form-control col-12" value="{{ $pesertadidik->ttl }}">
                                    @error('ttl')
                                        <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                    @enderror
                                </div>
                                <div class="form-group row ml-3">
                                    <label for="jenis_kelamin" class="col-sm-3 form-label">Jenis Kelamin</label>
                                    <select name="jenis_kelamin" id="jenis_kelamin" class="form-control col-12">
                                            <option selected disabled>Pilih salah satu</option>
                                            <option value="Laki-laki" @if ($pesertadidik->jenis_kelamin  == "Laki-laki")selected @endif>Laki-laki</option>
                                            <option value="Perempuan" @if ($pesertadidik->jenis_kelamin  == "Perempuan")selected @endif>Perempuan</option>
                                    </select>
                                    @error('jenis_kelamin')
                                        <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                    @enderror
                                </div>
                                <div class="form-group row ml-3">
                                    <label for="agama" class="col-sm-3 form-label">Agama</label>
                                    <select name="agama" id="agama" class="form-control col-12">
                                            <option selected disabled>Pilih salah satu</option>
                                            <option value="Islam" @if ($pesertadidik->agama == 'Islam') selected @endif>Islam</option>
                                            <option value="Kristen" @if ($pesertadidik->agama == 'Kristen') selected @endif>Kristen</option>
                                            <option value="Katholik" @if ($pesertadidik->agama == 'Katholik') selected @endif>Katholik</option>
                                            <option value="Hindu" @if ($pesertadidik->agama == 'Hindu') selected @endif>Hindu</option>
                                            <option value="Buddha" @if ($pesertadidik->agama == 'Buddha') selected @endif>Buddha</option>
                                            <option value="Konghucu" @if ($pesertadidik->agama == 'Konghucu') selected @endif>Konghucu</option>
                                    </select>
                                    @error('agama')
                                        <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                    @enderror
                                </div>
                                <div class="form-group row ml-3">
                                    <label for="anak_ke" class="col-sm-3 form-label">Anak Ke</label>
                                    <input type="number" name="anak_ke" id="anak_ke" class="form-control col-12" value="{{ $pesertadidik->anak_ke }}">
                                    @error('anak_ke')
                                        <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                    @enderror
                                </div>
                                <div class="form-group row ml-3">
                                    <label for="status_dalam_keluarga" class="col-sm-3 form-label">Status dalam Keluarga</label>
                                    <input type="text" name="status_dalam_keluarga" id="status_dalam_keluarga" class="form-control col-12" value="{{ $pesertadidik->status_dalam_keluarga }}">
                                    @error('status_dalam_keluarga')
                                        <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                    @enderror
                                </div>
                                <div class="form-group row ml-3">
                                    <label for="alamat_pd" class="col-sm-3 form-label">Alamat</label>
                                    <textarea rows="3" placeholder="Jalan, Kelurahan, Kecamatan, Kota/Kabupaten" name="alamat_pd" id="alamat_pd" class="form-control col-12">{{ $pesertadidik->alamat_pd }}</textarea>
                                    @error('alamat_pd')
                                        <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 ml-3"><b><h4>Sekolah Asal</h4></b>
                                <div class="form-group row ml-3">
                                    <label for="nama_asal_sekolah" class="col-sm-3 form-label">Nama Sekolah</label>
                                    <input type="text" name="nama_asal_sekolah" id="nama_asal_sekolah" class="form-control col-12" value="{{ $pesertadidik->nama_asal_sekolah }}">
                                    @error('nama_asal_sekolah')
                                        <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                    @enderror
                                </div>
                                <div class="form-group row ml-3">
                                    <label for="alamat_asal_sekolah" class="col-sm-3 form-label">Alamat Sekolah</label>
                                    <textarea rows="3" placeholder="Jalan, Kelurahan, Kecamatan, Kota/Kabupaten" name="alamat_asal_sekolah" id="alamat_asal_sekolah" class="form-control col-12" >{{ $pesertadidik->alamat_asal_sekolah }}</textarea>
                                    @error('alamat_asal_sekolah')
                                        <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 ml-3"><b><h4>Ijazah PAUD/TK</h4></b>
                                <div class="form-group row ml-3">
                                    <label for="tahun_ijazah" class="col-sm-3 form-label">Tahun</label>
                                    <input type="number" name="tahun_ijazah" id="tahun_ijazah" class="form-control col-12" value="{{ $pesertadidik->tahun_ijazah }}">
                                    @error('tahun_ijazah')
                                        <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                    @enderror
                                </div>
                                <div class="form-group row ml-3">
                                    <label for="nomor_ijazah" class="col-sm-3 form-label">Nomor Ijazah</label>
                                    <input type="text" name="nomor_ijazah" id="nomor_ijazah" class="form-control col-12" value="{{ $pesertadidik->nomor_ijazah }}">
                                    @error('nomor_ijazah')
                                        <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 ml-3"><b><h4>Orangtua</h4></b>
                                <div class="form-group row ml-3">
                                    <label for="nama_ayah" class="col-sm-3 form-label">Nama Ayah</label>
                                    <input type="text" name="nama_ayah" id="nama_ayah" class="form-control col-12" value="{{ $pesertadidik->nama_ayah }}">
                                    @error('nama_ayah')
                                        <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                    @enderror
                                </div>
                                <div class="form-group row ml-3">
                                    <label for="nama_ibu" class="col-sm-3 form-label">Nama Ibu</label>
                                    <input type="text" name="nama_ibu" id="nama_ibu" class="form-control col-12" value="{{ $pesertadidik->nama_ibu }}">
                                    @error('nama_ibu')
                                        <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                    @enderror
                                </div>
                                <div class="form-group row ml-3">
                                    <label for="alamat_ortu" class="col-sm-3 form-label">Alamat</label>
                                    <textarea rows="3" placeholder="Jalan, Kelurahan, Kecamatan, Kota/Kabupaten" name="alamat_ortu" id="alamat_ortu" class="form-control col-12" >{{ $pesertadidik->alamat_ortu }}</textarea>
                                    @error('alamat_ortu')
                                        <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                    @enderror
                                </div>
                                <div class="form-group row ml-3">
                                    <label for="telp_ortu" class="col-sm-3 form-label">Telp/HP</label>
                                    <input type="number" name="telp_ortu" id="telp_ortu" class="form-control col-12" value="{{ $pesertadidik->telp_ortu }}">
                                    @error('telp_ortu')
                                        <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                    @enderror
                                </div>
                                <div class="form-group row ml-3">
                                    <label for="pekerjaan_ayah" class="col-sm-3 form-label">Pekerjaan Ayah</label>
                                    <input type="text" name="pekerjaan_ayah" id="pekerjaan_ayah" class="form-control col-12" value="{{ $pesertadidik->pekerjaan_ayah }}">
                                    @error('pekerjaan_ayah')
                                        <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                    @enderror
                                </div>
                                <div class="form-group row ml-3">
                                    <label for="pekerjaan_ibu" class="col-sm-3 form-label">Pekerjaan Ibu</label>
                                    <input type="text" name="pekerjaan_ibu" id="pekerjaan_ibu" class="form-control col-12" value="{{ $pesertadidik->pekerjaan_ibu }}">
                                    @error('pekerjaan_ibu')
                                        <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 ml-3"><b><h4>Wali</h4></b>
                                <div class="form-group row ml-3">
                                    <label for="nama_wali" class="col-sm-3 form-label">Nama Wali</label>
                                    <input type="text" name="nama_wali" id="nama_wali" class="form-control col-12"value="{{ $pesertadidik->nama_wali }}">
                                    @error('nama_wali')
                                        <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                    @enderror
                                </div>
                                <div class="form-group row ml-3">
                                    <label for="alamat_wali" class="col-sm-3 form-label">Alamat</label>
                                    <textarea rows="3" placeholder="Jalan, Kelurahan, Kecamatan, Kota/Kabupaten" name="alamat_wali" id="alamat_wali" class="form-control col-12">{{ $pesertadidik->alamat_wali }}</textarea>
                                    @error('alamat_wali')
                                        <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                    @enderror
                                </div>
                                <div class="form-group row ml-3">
                                    <label for="pekerjaan_wali" class="col-sm-3 form-label">Pekerjaan</label>
                                    <input type="text" name="pekerjaan_wali" id="pekerjaan_wali" class="form-control col-12"value="{{ $pesertadidik->pekerjaan_wali }}">
                                    @error('pekerjaan_wali')
                                        <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 ml-3"><b><h4>Dokumen</h4></b>
                                <div class="form-group row ml-3">
                                    <label for="foto_pd" class="col-sm-3 form-label">Pas Foto 3 X 4</label>
                                    <input type="file" name="foto_pd" id="foto_pd" class="col-sm-3">
                                    @error('foto_pd')
                                    <div class="text-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                                @if ($pesertadidik->foto_pd)
                                    <img class="d-flex mx-auto mb-3" src="{{ asset("dokumen/sd/" . $pesertadidik->foto_pd) }}" alt="{{ $pesertadidik->foto_pd }}">
                                @endif
                                <div class="form-group row ml-3">
                                    <label for="scan_ijazah" class="col-sm-3 form-label">Scan Ijazah PAUD/TK</label>
                                    <input type="file" name="scan_ijazah" id="scan_ijazah" class="col-sm-8">
                                    @error('scan_ijazah')
                                        <div class="text-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                                @if ($pesertadidik->scan_ijazah)
                                    <img class="d-flex mx-auto mb-3" src="{{ asset("dokumen/sd/" . $pesertadidik->scan_ijazah) }}" alt="{{ $pesertadidik->scan_ijazah }}">
                                @endif
                                <div class="form-group row ml-3">
                                    <label for="scan_akta" class="col-sm-3 form-label">Scan akta</label>
                                    <input type="file" name="scan_akta" id="scan_akta" class="col-sm-8">
                                    @error('scan_akta')
                                        <div class="text-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                                @if ($pesertadidik->scan_akta)
                                    <img class="d-flex mx-auto mb-3" src="{{ asset("dokumen/sd/" . $pesertadidik->scan_akta) }}" alt="{{ $pesertadidik->scan_akta }}">
                                @endif
                                <div class="form-group row ml-3">
                                    <label for="scan_kk" class="col-sm-3 form-label">Scan kk</label>
                                    <input type="file" name="scan_kk" id="scan_kk" class="col-sm-8">
                                    @error('scan_kk')
                                        <div class="text-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                                @if ($pesertadidik->scan_kk)
                                    <img class="d-flex mx-auto mb-3" src="{{ asset("dokumen/sd/" . $pesertadidik->scan_kk) }}" alt="{{ $pesertadidik->scan_kk }}">
                                @endif
                            </div>
                            <input type="hidden" name="is_data_verified" value=1>
                            <div class="d-flex justify-content-end">
                            @if (Authuser()->is_data_verified == 3)
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