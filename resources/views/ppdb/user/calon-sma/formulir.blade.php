@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center mb-3">
    <h3>Formulir Pendaftaran Calon Peserta Didik</h3>
</div>
<div class="d-flex flex-column mt-3">
    <div class="col-md-auto">
        <div class="card mb-3">
            @if (Auth::user()->is_data_verified == 0)
                <div class="card-body mt-3">
                    <div class="text-danger">
                        <h6>Perhatian! Silahkan Anda isi formulir berikut sesuai dengan dengan data yang ada</h6>
                    </div>
                    <br>
                    <form action="/calon/sma/store/{{ $user->id }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="number" name="is_data_verified" id="is_data_verified" hidden value=1>
                        <div class="mb-3 ml-3"><b><h4>Biodata</h4></b>
                            <div class="form-group row ml-3">
                                <label for="nisn" class="col-sm-3 col-form-label">NISN</label>
                                :<input type="number" name="nisn" id="nisn" class="form-control col-sm-8" value="{{ old('nisn') }}">
                                @error('nisn')
                                    <div class="text-danger mt-2 col-sm-3">{{ 'NISN belum terisi' }}</div>
                                @enderror
                            </div>
                            <div class="form-group row ml-3">
                                <label for="nama_pd" class="col-sm-3 col-form-label">Nama Lengkap</label>
                                    :<input type="text" name="nama_pd" id="nama_pd" class="form-control col-sm-8" value="{{ old('nama_pd') }}">
                                @error('nama_pd')
                                    <div class="text-danger mt-2 col-sm-3">{{ 'Nama lengkap belum terisi' }}</div>
                                @enderror
                            </div>
                            <div class="form-group row ml-3">
                                <label for="ttl" class="col-sm-3 col-form-label">Tempat, Tanggal Lahir</label>
                                :<input type="text" name="ttl" id="ttl" class="form-control col-sm-8" value="{{ old('ttl') }}">
                                @error('ttl')
                                    <div class="text-danger mt-2 col-sm-3">{{ 'Tempat, tanggal lahir belum terisi' }}</div>
                                @enderror
                            </div>
                            <div class="form-group row ml-3">
                                <label for="jenis_kelamin" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                :<select name="jenis_kelamin" id="jenis_kelamin" class="form-control col-sm-8">
                                        <option selected disabled>Pilih salah satu</option>
                                        <option @if (old('jenis_kelamin')  == "Laki-laki") selected @endif value="Laki-laki">Laki-laki</option>
                                        <option @if (old('jenis_kelamin')  == "Laki-laki") selected @endif value="Perempuan">Perempuan</option>
                                </select>
                                @error('jenis_kelamin')
                                    <div class="text-danger mt-2 col-sm-3">{{ 'Anda belum memilih jenis kelamin' }}</div>
                                @enderror
                            </div>
                            <div class="form-group row ml-3">
                                <label for="agama" class="col-sm-3 col-form-label">Agama</label>
                                :<select name="agama" id="agama" class="form-control col-sm-8">
                                        <option selected disabled>Pilih salah satu</option>
                                        <option @if (old('agama') == 'Islam')  selected @endif value="Islam">Islam</option>
                                        <option @if (old('agama') == 'Kristen')  selected @endif value="Kristen">Kristen</option>
                                        <option @if (old('agama') == 'Katholik')  selected @endif value="Katholik">Katholik</option>
                                        <option @if (old('agama') == 'Hindu')  selected @endif value="Hindu">Hindu</option>
                                        <option @if (old('agama') == 'Buddha')  selected @endif value="Buddha">Buddha</option>
                                        <option @if (old('agama') == 'Konghucu')  selected @endif value="Konghucu">Konghucu</option>
                                </select>
                                @error('agama')
                                    <div class="text-danger mt-2 col-sm-3">{{ 'Anda tidak beragama?' }}</div>
                                @enderror
                            </div>
                            <div class="form-group row ml-3">
                                <label for="anak_ke" class="col-sm-3 col-form-label">Anak Ke</label>
                                :<input type="number" name="anak_ke" id="anak_ke" class="form-control col-sm-8" value="{{ old('anak_ke') }}">
                                @error('anak_ke')
                                    <div class="text-danger mt-2 col-sm-3">{{ 'Anda anak ke berapa?' }}</div>
                                @enderror
                            </div>
                            <div class="form-group row ml-3">
                                <label for="status_dalam_keluarga" class="col-sm-3 col-form-label">Status dalam Keluarga</label>
                                :<input type="text" name="status_dalam_keluarga" id="status_dalam_keluarga" class="form-control col-sm-8" value="{{ old('status_dalam_keluarga') }}">
                                @error('status_dalam_keluarga')
                                    <div class="text-danger mt-2 col-sm-3">{{ 'Status keluarga belum terisi' }}</div>
                                @enderror
                            </div>
                            <div class="form-group row ml-3">
                                <label for="alamat_pd" class="col-sm-3 col-form-label">Alamat</label>
                                :<input type="text" name="alamat_pd" id="alamat_pd" class="form-control col-sm-8" value="{{ old('alamat_pd') }}">
                                @error('alamat_pd')
                                    <div class="text-danger mt-2 col-sm-3">{{ 'Alamat belum terisi' }}</div>
                                @enderror
                            </div>
                            <div class="form-group row ml-3">
                                <label for="telp_pd" class="col-sm-3 col-form-label">Telp/HP</label>
                                :<input type="number" name="telp_pd" id="telp_pd" class="form-control col-sm-8" value="{{ old('telp_pd') }}">
                                @error('telp_pd')
                                    <div class="text-danger mt-2 col-sm-3">{{ 'No Telp/HP belum terisi' }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 ml-3"><b><h4>Sekolah Asal</h4></b>
                            <div class="form-group row ml-3">
                                <label for="nama_asal_sekolah" class="col-sm-3 col-form-label">Nama Sekolah</label>
                                :<input type="text" name="nama_asal_sekolah" id="nama_asal_sekolah" class="form-control col-sm-8" value="{{ old('nama_asal_sekolah') }}">
                                @error('nama_asal_sekolah')
                                    <div class="text-danger mt-2 col-sm-3">{{ 'Nama sekolah belum terisi' }}</div>
                                @enderror
                            </div>
                            <div class="form-group row ml-3">
                                <label for="alamat_asal_sekolah" class="col-sm-3 col-form-label">Alamat Sekolah</label>
                                :<input type="text" name="alamat_asal_sekolah" id="alamat_asal_sekolah" class="form-control col-sm-8" value="{{ old('alamat_asal_sekolah') }}">
                                @error('alamat_asal_sekolah')
                                    <div class="text-danger mt-2 col-sm-3">{{ 'Alamat sekolah belum terisi' }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 ml-3"><b><h4>Ijazah SMP/MTs/Paket B</h4></b>
                            <div class="form-group row ml-3">
                                <label for="tahun_ijazah" class="col-sm-3 col-form-label">Tahun</label>
                                :<input type="number" name="tahun_ijazah" id="tahun_ijazah" class="form-control col-sm-8" value="{{ old('tahun_ijazah') }}">
                                @error('tahun_ijazah')
                                    <div class="text-danger mt-2 col-sm-3">{{ 'Tahun ijazah belum terisi' }}</div>
                                @enderror
                            </div>
                            <div class="form-group row ml-3">
                                <label for="nomor_ijazah" class="col-sm-3 col-form-label">Nomor Ijazah</label>
                                :<input type="text" name="nomor_ijazah" id="nomor_ijazah" class="form-control col-sm-8" value="{{ old('nomor_ijazah') }}">
                                @error('nomor_ijazah')
                                    <div class="text-danger mt-2 col-sm-3">{{ 'Nomor Iiazah belum terisi' }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 ml-3"><b><h4>SKHUN SMP/MTs/Paket B</h4></b>
                            <div class="form-group row ml-3">
                                <label for="tahun_skhun" class="col-sm-3 col-form-label">Tahun</label>
                                :<input type="number" name="tahun_skhun" id="tahun_skhun" class="form-control col-sm-8" value="{{ old('nomor_ijazah') }}">
                                @error('tahun_skhun')
                                    <div class="text-danger mt-2 col-sm-3">{{ 'Tahun SKHUN belum terisi' }}</div>
                                @enderror
                            </div>
                            <div class="form-group row ml-3">
                                <label for="nomor_skhun" class="col-sm-3 col-form-label">Nomor SKHUN</label>
                                :<input type="text" name="nomor_skhun" id="nomor_skhun" class="form-control col-sm-8" value="{{ old('nomor_ijazah') }}">
                                @error('nomor_skhun')
                                    <div class="text-danger mt-2 col-sm-3">{{ 'Nomor SKHUN belum terisi' }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 ml-3"><b><h4>UN SMP/MTs/Paket B</h4></b>
                            <div class="form-group row ml-3">
                                <label for="nomor_peserta_un" class="col-sm-3 col-form-label">Nomor Peserta</label>
                                :<input type="text" name="nomor_peserta_un" id="nomor_peserta_un" class="form-control col-sm-8" value="{{ old('nomor_ijazah') }}">
                                @error('nomor_peserta_un')
                                    <div class="text-danger mt-2 col-sm-3">{{ 'Nomor Peserta UN belum terisi' }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 ml-3"><b><h4>Orangtua</h4></b>
                            <div class="form-group row ml-3">
                                <label for="nama_ayah" class="col-sm-3 col-form-label">Nama Ayah</label>
                                :<input type="text" name="nama_ayah" id="nama_ayah" class="form-control col-sm-8" value="{{ old('nama_ayah') }}">
                                @error('nama_ayah')
                                    <div class="text-danger mt-2 col-sm-3">{{ 'Nama ayah belum terisi' }}</div>
                                @enderror
                            </div>
                            <div class="form-group row ml-3">
                                <label for="nama_ibu" class="col-sm-3 col-form-label">Nama Ibu</label>
                                :<input type="text" name="nama_ibu" id="nama_ibu" class="form-control col-sm-8" value="{{ old('nama_ibu') }}">
                                @error('nama_ibu')
                                    <div class="text-danger mt-2">{{ 'Nama ibu belum terisi' }}</div>
                                @enderror
                            </div>
                            <div class="form-group row ml-3">
                                <label for="alamat_ortu" class="col-sm-3 col-form-label">Alamat</label>
                                :<input type="text" name="alamat_ortu" id="alamat_ortu" class="form-control col-sm-8" value="{{ old('alamat_ortu') }}">
                                @error('alamat_ortu')
                                    <div class="text-danger mt-2 col-sm-3">{{ 'Alamat orangtua belum terisi' }}</div>
                                @enderror
                            </div>
                            <div class="form-group row ml-3">
                                <label for="telp_ortu" class="col-sm-3 col-form-label">Telp/HP</label>
                                :<input type="number" name="telp_ortu" id="telp_ortu" class="form-control col-sm-8" value="{{ old('telp_ortu') }}">
                                @error('telp_ortu')
                                    <div class="text-danger mt-2">{{ 'No. Telp/HP belum terisi' }}</div>
                                @enderror
                            </div>
                            <div class="form-group row ml-3">
                                <label for="pekerjaan_ayah" class="col-sm-3 col-form-label">Pekerjaan Ayah</label>
                                :<input type="text" name="pekerjaan_ayah" id="pekerjaan_ayah" class="form-control col-sm-8" value="{{ old('pekerjaan_ayah') }}">
                                @error('pekerjaan_ayah')
                                    <div class="text-danger mt-2 col-sm-3">{{ 'Pekerjaan ayah belum terisi' }}</div>
                                @enderror
                            </div>
                            <div class="form-group row ml-3">
                                <label for="pekerjaan_ibu" class="col-sm-3 col-form-label">Pekerjaan Ibu</label>
                                :<input type="text" name="pekerjaan_ibu" id="pekerjaan_ibu" class="form-control col-sm-8" value="{{ old('pekerjaan_ibu') }}">
                                @error('pekerjaan_ibu')
                                    <div class="text-danger mt-2 col-sm-3">{{ 'Pekerjaan ibu belum terisi' }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 ml-3"><b><h4>Wali</h4></b>
                            <div class="form-group row ml-3">
                                <label for="nama_wali" class="col-sm-3 col-form-label">Nama Wali</label>
                                :<input type="text" name="nama_wali" id="nama_wali" class="form-control col-sm-8"value="{{ old('nama_wali') }}">
                                @error('nama_wali')
                                    <div class="text-danger mt-2 col-sm-3">{{ 'Nama wali belum terisi' }}</div>
                                @enderror
                            </div>
                            <div class="form-group row ml-3">
                                <label for="alamat_wali" class="col-sm-3 col-form-label">Alamat</label>
                                :<input type="text" name="alamat_wali" id="alamat_wali" class="form-control col-sm-8"value="{{ old('alamat_wali') }}">
                                @error('alamat_wali')
                                    <div class="text-danger mt-2 col-sm-3">{{ 'Alamat wali belum terisi' }}</div>
                                @enderror
                            </div>
                            <div class="form-group row ml-3">
                                <label for="pekerjaan_wali" class="col-sm-3 col-form-label">Pekerjaan</label>
                                :<input type="text" name="pekerjaan_wali" id="pekerjaan_wali" class="form-control col-sm-8"value="{{ old('pekerjaan_wali') }}">
                                @error('pekerjaan_wali')
                                    <div class="text-danger mt-2 col-sm-3">{{ 'Pekerjaan wali belum terisi' }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 ml-3"><b><h4>Dokumen</h4></b>
                            <div class="form-group row ml-3">
                                <label for="foto_pd" class="col-sm-3 col-form-label">Pas Foto 3 X 4</label>
                                :<input type="file" name="foto_pd" id="foto_pd" class="col-sm-8">
                                @error('foto_pd')
                                    <div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group row ml-3">
                                <label for="scan_ijazah" class="col-sm-3 col-form-label">Scan Ijazah</label>
                                :<input type="file" name="scan_ijazah" id="scan_ijazah" class="col-sm-8">
                                @error('scan_ijazah')
                                    <div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group row ml-3">
                                <label for="scan_skhun" class="col-sm-3 col-form-label">Scan SKHUN</label>
                                :<input type="file" name="scan_skhun" id="scan_skhun" class="col-sm-8">
                                @error('scan_skhun')
                                    <div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary float-right" style="width: 100px">Kirim</button>
                        </div>
                    </form>
                </div>
            @else
                <div class="card-body mt-3">
                    <div class="text-danger">
                        {{-- <h6>Perhatian! Silahkan Anda isi formulir berikut sesuai dengan dengan data yang ada</h6> --}}
                    </div>
                    <br>
                    <form action="/calon/sma/update/{{ $user->id }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        @foreach ($calon_siswa_smas as $calon_siswa_sma)
                        <div class="mb-3 ml-3"><b><h4>Biodata</h4></b>
                            <div class="form-group row ml-3">
                                <label for="nisn" class="col-sm-3 col-form-label">NISN</label>
                                :<input type="number" name="nisn" id="nisn" class="form-control col-sm-8" value="{{ $calon_siswa_sma->nisn }}">
                                @error('nisn')
                                    <div class="text-danger mt-2 col-sm-3">{{ 'NISN belum terisi' }}</div>
                                @enderror
                            </div>
                            <div class="form-group row ml-3">
                                <label for="nama_pd" class="col-sm-3 col-form-label">Nama Lengkap</label>
                                    :<input type="text" name="nama_pd" id="nama_pd" class="form-control col-sm-8" value="{{ $calon_siswa_sma->nama_pd }}">
                                @error('nama_pd')
                                    <div class="text-danger mt-2 col-sm-3">{{ 'Nama lengkap belum terisi' }}</div>
                                @enderror
                            </div>
                            <div class="form-group row ml-3">
                                <label for="ttl" class="col-sm-3 col-form-label">Tempat, Tanggal Lahir</label>
                                :<input type="text" name="ttl" id="ttl" class="form-control col-sm-8" value="{{ $calon_siswa_sma->ttl }}">
                                @error('ttl')
                                    <div class="text-danger mt-2 col-sm-3">{{ 'Tempat, tanggal lahir belum terisi' }}</div>
                                @enderror
                            </div>
                            <div class="form-group row ml-3">
                                <label for="jenis_kelamin" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                :<select name="jenis_kelamin" id="jenis_kelamin" class="form-control col-sm-8">
                                        <option selected disabled>Pilih salah satu</option>
                                        <option value="Laki-laki" @if ($calon_siswa_sma->jenis_kelamin  == "Laki-laki")selected @endif>Laki-laki</option>
                                        <option value="Perempuan" @if ($calon_siswa_sma->jenis_kelamin  == "Perempuan")selected @endif>Perempuan</option>
                                </select>
                                @error('jenis_kelamin')
                                    <div class="text-danger mt-2 col-sm-3">{{ 'Anda belum memilih jenis kelamin' }}</div>
                                @enderror
                            </div>
                            <div class="form-group row ml-3">
                                <label for="agama" class="col-sm-3 col-form-label">Agama</label>
                                :<select name="agama" id="agama" class="form-control col-sm-8">
                                        <option selected disabled>Pilih salah satu</option>
                                        <option value="Islam" @if ($calon_siswa_sma->agama == 'Islam') selected @endif>Islam</option>
                                        <option value="Kristen" @if ($calon_siswa_sma->agama == 'Kristen') selected @endif>Kristen</option>
                                        <option value="Katholik" @if ($calon_siswa_sma->agama == 'Katholik') selected @endif>Katholik</option>
                                        <option value="Hindu" @if ($calon_siswa_sma->agama == 'Hindu') selected @endif>Hindu</option>
                                        <option value="Buddha" @if ($calon_siswa_sma->agama == 'Buddha') selected @endif>Buddha</option>
                                        <option value="Konghucu" @if ($calon_siswa_sma->agama == 'Konghucu') selected @endif>Konghucu</option>
                                </select>
                                @error('agama')
                                    <div class="text-danger mt-2 col-sm-3">{{ 'Anda tidak beragama?' }}</div>
                                @enderror
                            </div>
                            <div class="form-group row ml-3">
                                <label for="anak_ke" class="col-sm-3 col-form-label">Anak Ke</label>
                                :<input type="number" name="anak_ke" id="anak_ke" class="form-control col-sm-8" value="{{ $calon_siswa_sma->anak_ke }}">
                                @error('anak_ke')
                                    <div class="text-danger mt-2 col-sm-3">{{ 'Anda anak ke berapa?' }}</div>
                                @enderror
                            </div>
                            <div class="form-group row ml-3">
                                <label for="status_dalam_keluarga" class="col-sm-3 col-form-label">Status dalam Keluarga</label>
                                :<input type="text" name="status_dalam_keluarga" id="status_dalam_keluarga" class="form-control col-sm-8" value="{{ $calon_siswa_sma->status_dalam_keluarga }}">
                                @error('status_dalam_keluarga')
                                    <div class="text-danger mt-2 col-sm-3">{{ 'Status keluarga belum terisi' }}</div>
                                @enderror
                            </div>
                            <div class="form-group row ml-3">
                                <label for="alamat_pd" class="col-sm-3 col-form-label">Alamat</label>
                                :<input type="text" name="alamat_pd" id="alamat_pd" class="form-control col-sm-8" value="{{ $calon_siswa_sma->alamat_pd }}">
                                @error('alamat_pd')
                                    <div class="text-danger mt-2 col-sm-3">{{ 'Alamat belum terisi' }}</div>
                                @enderror
                            </div>
                            <div class="form-group row ml-3">
                                <label for="telp_pd" class="col-sm-3 col-form-label">Telp/HP</label>
                                :<input type="number" name="telp_pd" id="telp_pd" class="form-control col-sm-8" value="{{ $calon_siswa_sma->telp_pd }}">
                                @error('telp_pd')
                                    <div class="text-danger mt-2 col-sm-3">{{ 'No Telp/HP belum terisi' }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 ml-3"><b><h4>Sekolah Asal</h4></b>
                            <div class="form-group row ml-3">
                                <label for="nama_asal_sekolah" class="col-sm-3 col-form-label">Nama Sekolah</label>
                                :<input type="text" name="nama_asal_sekolah" id="nama_asal_sekolah" class="form-control col-sm-8" value="{{ $calon_siswa_sma->nama_asal_sekolah }}">
                                @error('nama_asal_sekolah')
                                    <div class="text-danger mt-2 col-sm-3">{{ 'Nama sekolah belum terisi' }}</div>
                                @enderror
                            </div>
                            <div class="form-group row ml-3">
                                <label for="alamat_asal_sekolah" class="col-sm-3 col-form-label">Alamat Sekolah</label>
                                :<input type="text" name="alamat_asal_sekolah" id="alamat_asal_sekolah" class="form-control col-sm-8" value="{{ $calon_siswa_sma->alamat_asal_sekolah }}">
                                @error('alamat_asal_sekolah')
                                    <div class="text-danger mt-2 col-sm-3">{{ 'Alamat sekolah belum terisi' }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 ml-3"><b><h4>Ijazah SMP/MTs/Paket B</h4></b>
                            <div class="form-group row ml-3">
                                <label for="tahun_ijazah" class="col-sm-3 col-form-label">Tahun</label>
                                :<input type="number" name="tahun_ijazah" id="tahun_ijazah" class="form-control col-sm-8" value="{{ $calon_siswa_sma->tahun_ijazah }}">
                                @error('tahun_ijazah')
                                    <div class="text-danger mt-2 col-sm-3">{{ 'Tahun ijazah belum terisi' }}</div>
                                @enderror
                            </div>
                            <div class="form-group row ml-3">
                                <label for="nomor_ijazah" class="col-sm-3 col-form-label">Nomor Ijazah</label>
                                :<input type="text" name="nomor_ijazah" id="nomor_ijazah" class="form-control col-sm-8" value="{{ $calon_siswa_sma->nomor_ijazah }}">
                                @error('nomor_ijazah')
                                    <div class="text-danger mt-2 col-sm-3">{{ 'Nomor Iiazah belum terisi' }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 ml-3"><b><h4>SKHUN SMP/MTs/Paket B</h4></b>
                            <div class="form-group row ml-3">
                                <label for="tahun_skhun" class="col-sm-3 col-form-label">Tahun</label>
                                :<input type="number" name="tahun_skhun" id="tahun_skhun" class="form-control col-sm-8" value="{{ $calon_siswa_sma->tahun_skhun }}">
                                @error('tahun_skhun')
                                    <div class="text-danger mt-2 col-sm-3">{{ 'Tahun SKHUN belum terisi' }}</div>
                                @enderror
                            </div>
                            <div class="form-group row ml-3">
                                <label for="nomor_skhun" class="col-sm-3 col-form-label">Nomor SKHUN</label>
                                :<input type="text" name="nomor_skhun" id="nomor_skhun" class="form-control col-sm-8" value="{{ $calon_siswa_sma->nomor_ijazah }}">
                                @error('nomor_skhun')
                                    <div class="text-danger mt-2 col-sm-3">{{ 'Nomor SKHUN belum terisi' }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 ml-3"><b><h4>UN SMP/MTs/Paket B</h4></b>
                            <div class="form-group row ml-3">
                                <label for="nomor_peserta_un" class="col-sm-3 col-form-label">Nomor Peserta</label>
                                :<input type="text" name="nomor_peserta_un" id="nomor_peserta_un" class="form-control col-sm-8" value="{{ $calon_siswa_sma->nomor_ijazah }}">
                                @error('nomor_peserta_un')
                                    <div class="text-danger mt-2 col-sm-3">{{ 'Nomor Peserta UN belum terisi' }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 ml-3"><b><h4>Orangtua</h4></b>
                            <div class="form-group row ml-3">
                                <label for="nama_ayah" class="col-sm-3 col-form-label">Nama Ayah</label>
                                :<input type="text" name="nama_ayah" id="nama_ayah" class="form-control col-sm-8" value="{{ $calon_siswa_sma->nama_ayah }}">
                                @error('nama_ayah')
                                    <div class="text-danger mt-2 col-sm-3">{{ 'Nama ayah belum terisi' }}</div>
                                @enderror
                            </div>
                            <div class="form-group row ml-3">
                                <label for="nama_ibu" class="col-sm-3 col-form-label">Nama Ibu</label>
                                :<input type="text" name="nama_ibu" id="nama_ibu" class="form-control col-sm-8" value="{{ $calon_siswa_sma->nama_ibu }}">
                                @error('nama_ibu')
                                    <div class="text-danger mt-2">{{ 'Nama ibu belum terisi' }}</div>
                                @enderror
                            </div>
                            <div class="form-group row ml-3">
                                <label for="alamat_ortu" class="col-sm-3 col-form-label">Alamat</label>
                                :<input type="text" name="alamat_ortu" id="alamat_ortu" class="form-control col-sm-8" value="{{ $calon_siswa_sma->alamat_ortu }}">
                                @error('alamat_ortu')
                                    <div class="text-danger mt-2 col-sm-3">{{ 'Alamat orangtua belum terisi' }}</div>
                                @enderror
                            </div>
                            <div class="form-group row ml-3">
                                <label for="telp_ortu" class="col-sm-3 col-form-label">Telp/HP</label>
                                :<input type="number" name="telp_ortu" id="telp_ortu" class="form-control col-sm-8" value="{{ $calon_siswa_sma->telp_ortu }}">
                                @error('telp_ortu')
                                    <div class="text-danger mt-2">{{ 'No. Telp/HP belum terisi' }}</div>
                                @enderror
                            </div>
                            <div class="form-group row ml-3">
                                <label for="pekerjaan_ayah" class="col-sm-3 col-form-label">Pekerjaan Ayah</label>
                                :<input type="text" name="pekerjaan_ayah" id="pekerjaan_ayah" class="form-control col-sm-8" value="{{ $calon_siswa_sma->pekerjaan_ayah }}">
                                @error('pekerjaan_ayah')
                                    <div class="text-danger mt-2 col-sm-3">{{ 'Pekerjaan ayah belum terisi' }}</div>
                                @enderror
                            </div>
                            <div class="form-group row ml-3">
                                <label for="pekerjaan_ibu" class="col-sm-3 col-form-label">Pekerjaan Ibu</label>
                                :<input type="text" name="pekerjaan_ibu" id="pekerjaan_ibu" class="form-control col-sm-8" value="{{ $calon_siswa_sma->pekerjaan_ibu }}">
                                @error('pekerjaan_ibu')
                                    <div class="text-danger mt-2 col-sm-3">{{ 'Pekerjaan ibu belum terisi' }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 ml-3"><b><h4>Wali</h4></b>
                            <div class="form-group row ml-3">
                                <label for="nama_wali" class="col-sm-3 col-form-label">Nama Wali</label>
                                :<input type="text" name="nama_wali" id="nama_wali" class="form-control col-sm-8"value="{{ $calon_siswa_sma->nama_wali }}">
                                @error('nama_wali')
                                    <div class="text-danger mt-2 col-sm-3">{{ 'Nama wali belum terisi' }}</div>
                                @enderror
                            </div>
                            <div class="form-group row ml-3">
                                <label for="alamat_wali" class="col-sm-3 col-form-label">Alamat</label>
                                :<input type="text" name="alamat_wali" id="alamat_wali" class="form-control col-sm-8"value="{{ $calon_siswa_sma->alamat_wali }}">
                                @error('alamat_wali')
                                    <div class="text-danger mt-2 col-sm-3">{{ 'Alamat wali belum terisi' }}</div>
                                @enderror
                            </div>
                            <div class="form-group row ml-3">
                                <label for="pekerjaan_wali" class="col-sm-3 col-form-label">Pekerjaan</label>
                                :<input type="text" name="pekerjaan_wali" id="pekerjaan_wali" class="form-control col-sm-8"value="{{ $calon_siswa_sma->pekerjaan_wali }}">
                                @error('pekerjaan_wali')
                                    <div class="text-danger mt-2 col-sm-3">{{ 'Pekerjaan wali belum terisi' }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 ml-3"><b><h4>Dokumen</h4></b>
                            <div class="form-group row ml-3">
                                <label for="foto_pd" class="col-sm-3 col-form-label">Pas Foto 3 X 4</label>
                                :<input type="file" name="foto_pd" id="foto_pd" class="col-sm-3">
                                @error('foto_pd')
                                <div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            @if ($calon_siswa_sma->foto_pd)
                                <img class="d-flex mx-auto mb-3" src="{{ asset("dokumen/sma/" . $calon_siswa_sma->foto_pd) }}" alt="{{ $calon_siswa_sma->foto_pd }}">
                            @endif
                            <div class="form-group row ml-3">
                                <label for="scan_ijazah" class="col-sm-3 col-form-label">Scan Ijazah</label>
                                :<input type="file" name="scan_ijazah" id="scan_ijazah" class="col-sm-8">
                                @error('scan_ijazah')
                                    <div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            @if ($calon_siswa_sma->scan_ijazah)
                                <img class="d-flex mx-auto mb-3" src="{{ asset("dokumen/sma/" . $calon_siswa_sma->scan_ijazah) }}" alt="{{ $calon_siswa_sma->scan_ijazah }}">
                            @endif
                            <div class="form-group row ml-3">
                                <label for="scan_skhun" class="col-sm-3 col-form-label">Scan SKHUN</label>
                                :<input type="file" name="scan_skhun" id="scan_skhun" class="col-sm-8">
                                @error('scan_skhun')
                                    <div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            @if ($calon_siswa_sma->scan_skhun)
                                <img class="d-flex mx-auto mb-3" src="{{ asset("dokumen/sma/" . $calon_siswa_sma->scan_skhun) }}" alt="{{ $calon_siswa_sma->scan_skhun }}">
                            @endif
                        </div>
                        <input type="hidden" name="is_data_verified" value=1>
                        <div class="d-flex justify-content-end">
                        @if (Auth::user()->is_data_verified == 3)
                            <button type="submit" class="btn btn-warning text-white float-right" style="width: 100px">Ubah</button>
                        @endif    
                        </div>
                        @endforeach
                    </form>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection

{{-- D-}GW=Myz{k:0/PY9P8za --}}