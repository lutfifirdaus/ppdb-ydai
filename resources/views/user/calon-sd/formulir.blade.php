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
                                            <input type="text" name="nama_pd" id="nama_pd" class="form-control col-12" value="{{ old('nama_pd') }}" placeholder="sesuai Akta Kelahiran">
                                            @error('nama_pd')
                                                <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group row ml-3">
                                            <label for="jenis_kelamin" class="col-12 form-label">Jenis Kelamin</label>
                                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control col-12">
                                                    <option selected disabled>Pilih salah satu</option>
                                                    <option @if (old('jenis_kelamin')  == "Laki-laki") selected @endif value="Laki-laki">Laki-laki</option>
                                                    <option @if (old('jenis_kelamin')  == "Laki-laki") selected @endif value="Perempuan">Perempuan</option>
                                            </select>
                                            @error('jenis_kelamin')
                                                <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group row ml-3">
                                            <label for="nik" class="col-12 form-label">NIK / Nomor Induk Kependudukan</label>
                                            <input placeholder="Sesuai Kartu Keluarga" type="number" name="nik" id="nik" class="form-control col-12" value="{{ old('nik') }}">
                                            @error('nik')
                                                <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                            @enderror
                                        </div>
        
                                        <div class="form-group row ml-3">
                                            <label for="ttl" class="col-12 form-label">Tempat, Tanggal Lahir</label>
                                            <input type="text" name="t" id="t" class="form-control col-8" value="{{ old('t') }}"><input type="date" name="tl" id="tl" class="form-control col-4" value="{{ old('tl') }}">
                                            @error('ttl')
                                                <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group row ml-3">
                                            <label for="no_akta" class="col-12 form-label">Nomor Registras Akta Lahir</label>
                                            <input placeholder="Sesuai Akta Kelahiran" type="number" name="no_akta" id="no_akta" class="form-control col-12" value="{{ old('no_akta') }}">
                                            @error('no_akta')
                                                <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group row ml-3">
                                            <label for="anak_ke" class="col-12 form-label">Anak Ke</label>
                                            <input type="number" name="anak_ke" id="anak_ke" class="form-control col-12" value="{{ old('anak_ke') }}">
                                            @error('anak_ke')
                                                <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group row ml-3">
                                            <label for="agama" class="col-12 form-label">Agama</label>
                                            <select name="agama" id="agama" class="form-control col-12">
                                                    <option selected disabled>Pilih salah satu</option>
                                                    <option @if (old('agama') == 'Islam')  selected @endif value="Islam">Islam</option>
                                                    <option @if (old('agama') == 'Kristen')  selected @endif value="Kristen">Kristen</option>
                                                    <option @if (old('agama') == 'Katholik')  selected @endif value="Katholik">Katholik</option>
                                                    <option @if (old('agama') == 'Hindu')  selected @endif value="Hindu">Hindu</option>
                                                    <option @if (old('agama') == 'Buddha')  selected @endif value="Buddha">Buddha</option>
                                                    <option @if (old('agama') == 'Konghucu')  selected @endif value="Konghucu">Konghucu</option>
                                            </select>
                                            @error('agama')
                                                <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group row ml-3">
                                            <label for="kewarganegaraan" class="col-12 form-label">Kewarganegaraan</label>
                                            <input placeholder="Sesuai Kartu Keluarga" type="number" name="kewarganegaraan" id="kewarganegaraan" class="form-control col-12" value="{{ old('kewarganegaraan') }}">
                                            @error('kewarganegaraan')
                                                <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group row ml-3">
                                            <label for="kebutuhan_khusus" class="col-12 form-label">Berkebutuhan Khusus</label>
                                            <select name="kebutuhan_khusus" id="kebutuhan_khusus" class="form-control col-12">
                                                <option selected disabled>Pilih jika ada</option>
                                                <option @if(old('kebutuhan_khusus') == 'Netra') selected @endif value="Netra">Netra</option>
                                                <option @if(old('kebutuhan_khusus') == 'Rungu') selected @endif value="Rungu">Rungu</option>
                                                <option @if(old('kebutuhan_khusus') == 'Grahita Sedang') selected @endif value="Grahita Sedang">Grahita Sedang</option>
                                                <option @if(old('kebutuhan_khusus') == 'Grahita Ringan') selected @endif value="Grahita Ringan">Grahita Ringan</option>
                                                <option @if(old('kebutuhan_khusus') == 'Daksa Sedang') selected @endif value="Daksa Sedang">Daksa Sedang</option>
                                                <option @if(old('kebutuhan_khusus') == 'Daksa Ringan') selected @endif value="Daksa Ringan">Daksa Ringan</option>
                                                <option @if(old('kebutuhan_khusus') == 'Laras') selected @endif value="Laras">Laras</option>
                                                <option @if(old('kebutuhan_khusus') == 'Wicara') selected @endif value="Wicara">Wicara</option>
                                                <option @if(old('kebutuhan_khusus') == 'Hyperaktif') selected @endif value="Hyperaktif">Hyperaktif</option>
                                                <option @if(old('kebutuhan_khusus') == 'Cerdas Istimewa') selected @endif value="Cerdas Istimewa">Cerdas Istimewa</option>
                                                <option @if(old('kebutuhan_khusus') == 'Kesulitan Belajar') selected @endif value="Kesulitan Belajar">Kesulitan Belajar</option>
                                                <option @if(old('kebutuhan_khusus') == 'Narkoba') selected @endif value="Narkoba">Narkoba</option>
                                                <option @if(old('kebutuhan_khusus') == 'Indigo') selected @endif value="Indigo">Indigo</option>
                                                <option @if(old('kebutuhan_khusus') == 'Down Syndrome') selected @endif value="Down Syndrome">Down Syndrome</option>
                                                <option @if(old('kebutuhan_khusus') == 'Autis') selected @endif value="Autis">Autis</option>
                                            </select>
                                            @error('kebutuhan_khusus')
                                                <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group row ml-3">
                                            <label for="alamat_pd" class="col-12 form-label">Alamat Tempat Tinggal</label>
                                            <input type="text" name="jalan_alamat" id="jalan_alamat" class="form-control col-8" value="{{ old('jalan_alamat') }}" placeholder="Jalan">
                                            <input type="text" name="rukun_alamat" id="rukun_alamat" class="form-control col-4" value="{{ old('rukun_alamat') }}" placeholder="RT/RW">

                                            <input type="text" name="desa" id="desa" class="form-control col-8" value="{{ old('desa') }}" placeholder="Kelurahan/Desa">
                                            <input type="text" name="kodepos_alamat" id="kodepos_alamat" class="form-control col-4" value="{{ old('kodepos_alamat') }}" placeholder="kode Pos">

                                            <input type="text" name="kecamatan" id="kecamatan" class="form-control col-6" value="{{ old('kecamatan') }}" placeholder="Kecamatan">
                                            <input type="text" name="kota" id="kota" class="form-control col-6" value="{{ old('kota') }}" placeholder="Kota/Kabupaten">

                                            <input type="text" name="lintang" id="lintang" class="form-control col-6" value="{{ old('lintang') }}" placeholder="Lintang">
                                            <input type="text" name="bujur" id="bujur" class="form-control col-6" value="{{ old('bujur') }}" placeholder="Bujur">
                                            @error('alamat_pd')
                                                <div class="text-danger mt-2 col-3">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group row ml-3">
                                            <label for="telp_rumah" class="col-12 form-label">Nomor Telepon Rumah</label>
                                            <input placeholder="Sesuai Akta Kelahiran" type="number" name="telp_rumah" id="telp_rumah" class="form-control col-12" value="{{ old('telp_rumah') }}">
                                            @error('telp_rumah')
                                                <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group row ml-3">
                                            <label for="telp_pd" class="col-12 form-label">Nomor HP</label>
                                            <input placeholder="Sesuai Akta Kelahiran" type="number" name="telp_pd" id="telp_pd" class="form-control col-12" value="{{ old('telp_pd') }}">
                                            @error('telp_pd')
                                                <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group row ml-3">
                                            <label for="no_kks" class="col-12 form-label">Nomor Kartu Keluarga Sejahtera/KKS</label>
                                            <input placeholder="Isikan jika menerima" type="number" name="no_kks" id="no_kks" class="form-control col-12" value="{{ old('no_kks') }}">
                                            @error('no_kks')
                                                <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group row ml-3">
                                            <label for="no_kps" class="col-12 form-label">Nomor Kartu Perlindungan Sosial</label>
                                            <input placeholder="Isikan jika menerima" type="number" name="no_kps" id="no_kps" class="form-control col-12" value="{{ old('no_kps') }}">
                                            @error('no_kps')
                                                <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group row ml-3">
                                            <label for="no_kis" class="col-12 form-label">Nomor Kartu Indonesia Pintar/KIS</label>
                                            <input placeholder="Isikan jika menerima" type="number" name="no_kis" id="no_kis" class="form-control col-12" value="{{ old('no_kis') }}">
                                            @error('no_kis')
                                                <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="ml-3" style="margin-top: 10px"><b><h4 class="mt-3 text-center"><hr>DATA PERIODIK SISWA<hr></h4></b>
                                        
                                        <div class="form-group row ml-3">
                                            <label for="tinggi" class="col-12 form-label">Tinggi Badan</label>
                                            <div class="input-group-prepend  col-12 p-0">
                                                <input type="text" name="tinggi" id="tinggi" class="form-control" value="{{ old('tinggi') }}"><div class="input-group-text">Cm</div>
                                            </div>
                                            @error('tinggi')
                                                <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group row ml-3">
                                            <label for="banyak_saudara_kandung" class="col-12 form-label">Jumlah Saudara Kandung</label>
                                            <div class="input-group-prepend  col-12 p-0">
                                                <input type="text" name="banyak_saudara_kandung" id="banyak_saudara_kandung" class="form-control" value="{{ old('banyak_saudara_kandung') }}"><div class="input-group-text">Orang</div>
                                            </div>
                                            @error('banyak_saudara_kandung')
                                                <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group row ml-3">
                                            <label for="berat" class="col-12 form-label">Berat Badan</label>
                                            <div class="input-group-prepend  col-12 p-0">
                                                <input type="text" name="berat" id="berat" class="form-control" value="{{ old('berat') }}"><div class="input-group-text">Kg</div>
                                            </div>
                                            @error('berat')
                                                <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group row ml-3">
                                            <label for="jarak_kesekolah" class="col-12 form-label">Jarak Tempat Tinggal Ke Sekolah</label>
                                            <div class="input-group-prepend  col-12 p-0">
                                                <input type="text" name="jarak_kesekolah" id="jarak_kesekolah" class="form-control" value="{{ old('jarak_kesekolah') }}"><div class="input-group-text">Km</div>
                                            </div>
                                            @error('jarak_kesekolah')
                                                <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group row ml-3">
                                            <label for="waktu_kesekolah" class="col-12 form-label">Waktu Tempuh Ke Sekolah</label>
                                            <div class="input-group-prepend  col-12 p-0">
                                                <input type="text" name="waktu_kesekolah" id="waktu_kesekolah" class="form-control" value="{{ old('waktu_kesekolah') }}"><div class="input-group-text">Km</div>
                                            </div>
                                            @error('waktu_kesekolah')
                                                <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        
                                    </div>

                                </div>

                                <div class="col-lg-6 col-12">
                                    
                                    <div class="ml-3" style="margin-top: 10px"><b><h4 class="mt-3 text-center"><hr>SEKOLAH ASAL<hr></h4></b>

                                        <div class="form-group row ml-3">
                                            <label for="nama_asal_sekolah" class="col-12 form-label">Nama Sekolah</label>
                                            <input type="text" name="nama_asal_sekolah" id="nama_asal_sekolah" class="form-control col-12" value="{{ old('nama_asal_sekolah') }}">
                                            @error('nama_asal_sekolah')
                                                <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group row ml-3">
                                            <label for="alamat_asal_sekolah" class="col-12 form-label">Kecamatan Sekolah</label>
                                            <input type="text" name="alamat_asal_sekolah" id="alamat_asal_sekolah" class="form-control col-12" value="{{ old('alamat_asal_sekolah') }}">
                                            @error('alamat_asal_sekolah')
                                                <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    
                                    </div>
        
                                    <div class="ml-3" style="margin-top: 10px"><b><h4 class="mt-3 text-center"><hr>IJAZAH PAUD/TK<hr></h4></b>
                                        
                                        <div class="form-group row ml-3">
                                            <label for="tahun_ijazah" class="col-12 form-label">Tahun</label>
                                            <input type="number" name="tahun_ijazah" id="tahun_ijazah" class="form-control col-12" value="{{ old('tahun_ijazah') }}">
                                            @error('tahun_ijazah')
                                                <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group row ml-3">
                                            <label for="nomor_ijazah" class="col-12 form-label">Nomor Ijazah</label>
                                            <input type="text" name="nomor_ijazah" id="nomor_ijazah" class="form-control col-12" value="{{ old('nomor_ijazah') }}">
                                            @error('nomor_ijazah')
                                                <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        
                                    </div>
                                    
                                    <div class="ml-3" style="margin-top: 10px"><b><h4 class="mt-3 text-center"><hr>ORANGTUA<hr></h4></b>

                                        <div class="form-group row ml-3">
                                            <label for="nama_ayah" class="col-12 form-label">Nama Ayah Kandung</label>
                                            <input type="text" name="nama_ayah" id="nama_ayah" class="form-control col-12" value="{{ old('nama_ayah') }}">
                                            @error('nama_ayah')
                                                <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group row ml-3">
                                            <label for="tahun_lahir_ayah" class="col-12 form-label">Nama Ayah Kandung</label>
                                            <input type="year" name="tahun_lahir_ayah" id="tahun_lahir_ayah" class="form-control col-12" value="{{ old('tahun_lahir_ayah') }}">
                                            @error('tahun_lahir_ayah')
                                                <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group row ml-3">
                                            <label for="tahun_lahir_ayah" class="col-12 form-label">Nama Ayah Kandung</label>
                                            <input type="text" name="tahun_lahir_ayah" id="tahun_lahir_ayah" class="form-control col-12" value="{{ old('tahun_lahir_ayah') }}">
                                            @error('tahun_lahir_ayah')
                                                <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group row ml-3">
                                            <label for="nama_ibu" class="col-12 form-label">Nama Ibu</label>
                                            <input type="text" name="nama_ibu" id="nama_ibu" class="form-control col-12" value="{{ old('nama_ibu') }}">
                                            @error('nama_ibu')
                                                <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group row ml-3">
                                            <label for="telp_ortu" class="col-12 form-label">Telp/HP</label>
                                            <input type="number" name="telp_ortu" id="telp_ortu" class="form-control col-12" value="{{ old('telp_ortu') }}">
                                            @error('telp_ortu')
                                                <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group row ml-3">
                                            <label for="pekerjaan_ayah" class="col-12 form-label">Pekerjaan Ayah</label>
                                            <input type="text" name="pekerjaan_ayah" id="pekerjaan_ayah" class="form-control col-12" value="{{ old('pekerjaan_ayah') }}">
                                            @error('pekerjaan_ayah')
                                                <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group row ml-3">
                                            <label for="pekerjaan_ibu" class="col-12 form-label">Pekerjaan Ibu</label>
                                            <input type="text" name="pekerjaan_ibu" id="pekerjaan_ibu" class="form-control col-12" value="{{ old('pekerjaan_ibu') }}">
                                            @error('pekerjaan_ibu')
                                                <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="ml-3" style="margin-top: 10px"><b><h4 class="mt-3 text-center"><hr>Wali<hr></h4></b>
                                        <div class="form-group row ml-3">
                                            <label for="nama_wali" class="col-12 form-label">Nama Wali</label>
                                            <input type="text" name="nama_wali" id="nama_wali" class="form-control col-12"value="{{ old('nama_wali') }}">
                                            @error('nama_wali')
                                                <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group row ml-3">
                                            <label for="alamat_wali" class="col-12 form-label">Alamat</label>
                                            <textarea rows="3" placeholder="Jalan, Kelurahan, Kecamatan, Kota/Kabupaten" name="alamat_wali" id="alamat_wali" class="form-control col-12"value="{{ old('alamat_wali') }}"></textarea>
                                            @error('alamat_wali')
                                                <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group row ml-3">
                                            <label for="pekerjaan_wali" class="col-12 form-label">Pekerjaan</label>
                                            <input type="text" name="pekerjaan_wali" id="pekerjaan_wali" class="form-control col-12"value="{{ old('pekerjaan_wali') }}">
                                            @error('pekerjaan_wali')
                                                <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="ml-3" style="margin-top: 10px"><b><h4 class="mt-3 text-center"><hr>Dokumen<hr></h4></b>
                                        <div class="form-group row ml-3">
                                            <label for="foto_pd" class="col-12 form-label">Pas Foto 3 X 4</label>
                                            <input type="file" name="foto_pd" id="foto_pd" class="col-sm-8">
                                            @error('foto_pd')
                                                <div class="text-danger mt-2">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group row ml-3">
                                            <label for="scan_akta" class="col-12 form-label">Scan Akta Kelahiran</label>
                                            <input type="file" name="scan_akta" id="scan_akta" class="col-sm-8">
                                            @error('scan_akta')
                                                <div class="text-danger mt-2">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group row ml-3">
                                            <label for="scan_kk" class="col-12 form-label">Scan Kartu Keluarga</label>
                                            <input type="file" name="scan_kk" id="scan_kk" class="col-sm-8">
                                            @error('scan_kk')
                                                <div class="text-danger mt-2">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group row ml-3">
                                            <label for="scan_ijazah" class="col-12 form-label">Scan Ijazah PAUD/TK (jika ada)</label>
                                            <input type="file" name="scan_ijazah" id="scan_ijazah" class="col-sm-8">
                                            @error('scan_ijazah')
                                                <div class="text-danger mt-2">{{ $message }}</div>
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
                                        <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group row ml-3">
                                    <label for="nama_pd" class="col-sm-3 form-label">Nama Lengkap</label>
                                        <input type="text" name="nama_pd" id="nama_pd" class="form-control col-12" value="{{ $pesertadidik->nama_pd }}">
                                    @error('nama_pd')
                                        <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group row ml-3">
                                    <label for="ttl" class="col-sm-3 form-label">Tempat, Tanggal Lahir</label>
                                    <input type="text" name="ttl" id="ttl" class="form-control col-12" value="{{ $pesertadidik->ttl }}">
                                    @error('ttl')
                                        <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
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
                                        <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
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
                                        <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group row ml-3">
                                    <label for="anak_ke" class="col-sm-3 form-label">Anak Ke</label>
                                    <input type="number" name="anak_ke" id="anak_ke" class="form-control col-12" value="{{ $pesertadidik->anak_ke }}">
                                    @error('anak_ke')
                                        <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group row ml-3">
                                    <label for="status_dalam_keluarga" class="col-sm-3 form-label">Status dalam Keluarga</label>
                                    <input type="text" name="status_dalam_keluarga" id="status_dalam_keluarga" class="form-control col-12" value="{{ $pesertadidik->status_dalam_keluarga }}">
                                    @error('status_dalam_keluarga')
                                        <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group row ml-3">
                                    <label for="alamat_pd" class="col-sm-3 form-label">Alamat</label>
                                    <textarea rows="3" placeholder="Jalan, Kelurahan, Kecamatan, Kota/Kabupaten" name="alamat_pd" id="alamat_pd" class="form-control col-12">{{ $pesertadidik->alamat_pd }}</textarea>
                                    @error('alamat_pd')
                                        <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 ml-3"><b><h4>Sekolah Asal</h4></b>
                                <div class="form-group row ml-3">
                                    <label for="nama_asal_sekolah" class="col-sm-3 form-label">Nama Sekolah</label>
                                    <input type="text" name="nama_asal_sekolah" id="nama_asal_sekolah" class="form-control col-12" value="{{ $pesertadidik->nama_asal_sekolah }}">
                                    @error('nama_asal_sekolah')
                                        <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group row ml-3">
                                    <label for="alamat_asal_sekolah" class="col-sm-3 form-label">Alamat Sekolah</label>
                                    <textarea rows="3" placeholder="Jalan, Kelurahan, Kecamatan, Kota/Kabupaten" name="alamat_asal_sekolah" id="alamat_asal_sekolah" class="form-control col-12" >{{ $pesertadidik->alamat_asal_sekolah }}</textarea>
                                    @error('alamat_asal_sekolah')
                                        <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 ml-3"><b><h4>Ijazah PAUD/TK</h4></b>
                                <div class="form-group row ml-3">
                                    <label for="tahun_ijazah" class="col-sm-3 form-label">Tahun</label>
                                    <input type="number" name="tahun_ijazah" id="tahun_ijazah" class="form-control col-12" value="{{ $pesertadidik->tahun_ijazah }}">
                                    @error('tahun_ijazah')
                                        <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group row ml-3">
                                    <label for="nomor_ijazah" class="col-sm-3 form-label">Nomor Ijazah</label>
                                    <input type="text" name="nomor_ijazah" id="nomor_ijazah" class="form-control col-12" value="{{ $pesertadidik->nomor_ijazah }}">
                                    @error('nomor_ijazah')
                                        <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 ml-3"><b><h4>Orangtua</h4></b>
                                <div class="form-group row ml-3">
                                    <label for="nama_ayah" class="col-sm-3 form-label">Nama Ayah</label>
                                    <input type="text" name="nama_ayah" id="nama_ayah" class="form-control col-12" value="{{ $pesertadidik->nama_ayah }}">
                                    @error('nama_ayah')
                                        <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group row ml-3">
                                    <label for="nama_ibu" class="col-sm-3 form-label">Nama Ibu</label>
                                    <input type="text" name="nama_ibu" id="nama_ibu" class="form-control col-12" value="{{ $pesertadidik->nama_ibu }}">
                                    @error('nama_ibu')
                                        <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group row ml-3">
                                    <label for="alamat_ortu" class="col-sm-3 form-label">Alamat</label>
                                    <textarea rows="3" placeholder="Jalan, Kelurahan, Kecamatan, Kota/Kabupaten" name="alamat_ortu" id="alamat_ortu" class="form-control col-12" >{{ $pesertadidik->alamat_ortu }}</textarea>
                                    @error('alamat_ortu')
                                        <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group row ml-3">
                                    <label for="telp_ortu" class="col-sm-3 form-label">Telp/HP</label>
                                    <input type="number" name="telp_ortu" id="telp_ortu" class="form-control col-12" value="{{ $pesertadidik->telp_ortu }}">
                                    @error('telp_ortu')
                                        <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group row ml-3">
                                    <label for="pekerjaan_ayah" class="col-sm-3 form-label">Pekerjaan Ayah</label>
                                    <input type="text" name="pekerjaan_ayah" id="pekerjaan_ayah" class="form-control col-12" value="{{ $pesertadidik->pekerjaan_ayah }}">
                                    @error('pekerjaan_ayah')
                                        <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group row ml-3">
                                    <label for="pekerjaan_ibu" class="col-sm-3 form-label">Pekerjaan Ibu</label>
                                    <input type="text" name="pekerjaan_ibu" id="pekerjaan_ibu" class="form-control col-12" value="{{ $pesertadidik->pekerjaan_ibu }}">
                                    @error('pekerjaan_ibu')
                                        <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 ml-3"><b><h4>Wali</h4></b>
                                <div class="form-group row ml-3">
                                    <label for="nama_wali" class="col-sm-3 form-label">Nama Wali</label>
                                    <input type="text" name="nama_wali" id="nama_wali" class="form-control col-12"value="{{ $pesertadidik->nama_wali }}">
                                    @error('nama_wali')
                                        <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group row ml-3">
                                    <label for="alamat_wali" class="col-sm-3 form-label">Alamat</label>
                                    <textarea rows="3" placeholder="Jalan, Kelurahan, Kecamatan, Kota/Kabupaten" name="alamat_wali" id="alamat_wali" class="form-control col-12">{{ $pesertadidik->alamat_wali }}</textarea>
                                    @error('alamat_wali')
                                        <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group row ml-3">
                                    <label for="pekerjaan_wali" class="col-sm-3 form-label">Pekerjaan</label>
                                    <input type="text" name="pekerjaan_wali" id="pekerjaan_wali" class="form-control col-12"value="{{ $pesertadidik->pekerjaan_wali }}">
                                    @error('pekerjaan_wali')
                                        <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
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