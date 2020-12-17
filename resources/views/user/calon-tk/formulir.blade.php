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
                            <h6>Perhatian! Silahkan Anda isi formulir berikut sesuai dengan dengan data yang benar.</h6>
                        </div>
                        <br>
                        <form action="/calon/tk/store/{{ $user->id }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="number" name="is_data_verified" id="is_data_verified" hidden value=1>
                            <div class="mb-3 ml-3"><b><h4>IDENTITAS ANAK</h4></b>
                                <div class="form-group row ml-3">
                                    <label for="nama_pd" class="col-sm-3 col-form-label">Nama Lengkap</label>
                                        :<input type="text" name="nama_pd" id="nama_pd" class="form-control col-sm-8" value="{{ old('nama_pd') }}">
                                    @error('nama_pd')
                                        <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group row ml-3">
                                    <label for="nama" class="col-sm-3 col-form-label">Nama Panggilan</label>
                                        :<input type="text" name="nama" id="nama" class="form-control col-sm-8" value="{{ old('nama') }}">
                                    @error('nama')
                                        <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
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
                                        <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group row ml-3">
                                    <label for="ttl" class="col-sm-3 col-form-label">Tempat, Tanggal Lahir</label>
                                    :<input type="text" name="ttl" id="ttl" class="form-control col-sm-8" value="{{ old('ttl') }}">
                                    @error('ttl')
                                        <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
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
                                        <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group row ml-3">
                                    <label for="kewarganegaraan" class="col-sm-3 col-form-label">Kewarga-negaraan</label>
                                    :<input type="text" name="kewarganegaraan" id="kewarganegaraan" class="form-control col-sm-8" value="{{ old('kewarganegaraan') }}">
                                    @error('kewarganegaraan')
                                        <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group row ml-3">
                                    <label for="anak_ke" class="col-sm-3 col-form-label">Anak Ke</label>
                                    :<input type="number" name="anak_ke" id="anak_ke" class="form-control col-sm-8" value="{{ old('anak_ke') }}">
                                    @error('anak_ke')
                                        <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group row ml-3">
                                    <label for="banyak_saudara_ibu" class="col-sm-3 col-form-label">Banyak Saudara Kandung</label>
                                    :<input type="number" name="banyak_saudara_ibu" id="banyak_saudara_ibu" class="form-control col-sm-8" value="{{ old('banyak_saudara_ibu') }}">
                                    @error('banyak_saudara_ibu')
                                        <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group row ml-3">
                                    <label for="banyak_saudara_tiri" class="col-sm-3 col-form-label">Banyak Saudara Tiri</label>
                                    :<input type="number" name="banyak_saudara_tiri" id="banyak_saudara_tiri" class="form-control col-sm-8" value="{{ old('banyak_saudara_tiri') }}">
                                    @error('banyak_saudara_tiri')
                                        <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group row ml-3">
                                    <label for="banyak_saudara_angkat" class="col-sm-3 col-form-label">Banyak Saudara Angkat</label>
                                    :<input type="number" name="banyak_saudara_angkat" id="banyak_saudara_angkat" class="form-control col-sm-8" value="{{ old('banyak_saudara_angkat') }}">
                                    @error('banyak_saudara_angkat')
                                        <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group row ml-3">
                                    <label for="bahasa" class="col-sm-3 col-form-label">Bahasa sehari-hari</label>
                                    :<input type="text" name="bahasa" id="bahasa" class="form-control col-sm-8" value="{{ old('bahasa') }}">
                                    @error('bahasa')
                                        <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group row ml-3">
                                    <label for="berat" class="col-sm-3 col-form-label">Berat Badan</label>
                                    :
                                    <div class="input-group-prepend  col-sm-8 p-0">
                                        <input type="number" name="berat" id="berat" class="form-control" value="{{ old('berat') }}">  
                                        <div class="input-group-text">Kg</div> 
                                    </div>
                                    @error('berat')
                                        <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group row ml-3">
                                    <label for="tinggi" class="col-sm-3 col-form-label">Tinggi Badan</label>
                                    :<div class="input-group-prepend  col-sm-8 p-0">
                                        <input type="number" name="tinggi" id="tinggi" class="form-control" value="{{ old('tinggi') }}">  
                                        <div class="input-group-text">Cm</div> 
                                    </div>    
                                </div>
                                @error('tinggi')
                                    <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                @enderror
                                <div class="form-group row ml-3">
                                    <label for="golongan_darah" class="col-sm-3 col-form-label">Golongan Darah</label>
                                    :<select type="text" name="golongan_darah" id="golongan_darah" class="form-control col-sm-8">
                                        <option selected disabled>Pilih salah satu</option>
                                        <option value="A" @if(old('golonga_darah') == 'A') selected @endif>A</option>
                                        <option value="B" @if(old('golonga_darah') == 'B') selected @endif>B</option>
                                        <option value="O" @if(old('golonga_darah') == 'O') selected @endif>O</option>
                                        <option value="AB" @if(old('golonga_darah') == 'AB') selected @endif>AB</option>
                                    </select>
                                    @error('golongan_darah')
                                        <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group row ml-3">
                                    <label for="penyakit" class="col-sm-3 col-form-label">Penyakit yang Pernah Diderita</label>
                                    :<input type="text" name="penyakit" id="penyakit" class="form-control col-sm-8" value="{{ old('penyakit') }}" placeholder="Jika ada">
                                    @error('penyakit')
                                        <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group row ml-3">
                                    <label for="alamat_pd" class="col-sm-3 col-form-label">Alamat</label>
                                    :<textarea rows="3" name="alamat_pd" id="alamat_pd" class="form-control col-sm-8" value="{{ old('alamat_pd') }}"></textarea>
                                    @error('alamat_pd')
                                        <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group row ml-3">
                                    <label for="telp_pd" class="col-sm-3 col-form-label">Nomor Telepon</label>
                                    :<input type="number" name="telp_pd" id="telp_pd" class="form-control col-sm-8" value="{{ old('telp_pd') }}">
                                    @error('telp_pd')
                                        <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group row ml-3">
                                    <label for="tempat_tinggal" class="col-sm-3 col-form-label">Bertempat Tinggal Pada</label>
                                    :<select name="tempat_tinggal" id="tempat_tinggal" class="form-control col-sm-8" value="{{ old('tempat_tinggal') }}">
                                        <option selected disabled>Pilih Salah Satu</option>
                                        <option value="Orangtua" @if(old('tempat_tinggal')=="Orangtua")selected @endif>Orangtua</option>
                                        <option value="Menampung" @if(old('tempat_tinggal')=="Menampung")selected @endif>Menampung</option>
                                        <option value="Asrama" @if(old('tempat_tinggal')=="Asrama")selected @endif>Asrama</option>
                                    </select>
                                    @error('tempat_tinggal')
                                        <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group row ml-3">
                                    <label for="hobi" class="col-sm-3 col-form-label">Kegemaran/Hobi</label>
                                    :<input type="text" name="hobi" id="hobi" class="form-control col-sm-8" value="{{ old('hobi') }}">
                                    @error('hobi')
                                        <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                    @enderror
                            </div>
                        </div>

                        <div class="mb-3 ml-3"><b><h4>DATA ORANG TUA/WALI</h4></b>
                            <div class="mt-3 ml-3"><b><h5>AYAH</h5></b></div>
                            <div class="form-group row ml-3">
                                <label for="nama_ayah" class="col-sm-3 col-form-label">Nama Ayah</label>
                                :<input type="text" name="nama_ayah" id="nama_ayah" class="form-control col-sm-8" value="{{ old('nama_ayah') }}">
                                @error('nama_ayah')
                                    <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group row ml-3">
                                <label for="ttl_ayah" class="col-sm-3 col-form-label">Tempat Tanggal Lahir</label>
                                :<input type="text" name="ttl_ayah" id="ttl_ayah" class="form-control col-sm-8" value="{{ old('ttl_ayah') }}">
                                @error('ttl_ayah')
                                    <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group row ml-3">
                                <label for="agama_ayah" class="col-sm-3 col-form-label">Agama Ayah</label>
                                :<select name="agama_ayah" id="agama_ayah" class="form-control col-sm-8">
                                        <option selected disabled>Pilih salah satu</option>
                                        <option @if (old('agama_ayah') == 'Islam')  selected @endif value="Islam">Islam</option>
                                        <option @if (old('agama_ayah') == 'Kristen')  selected @endif value="Kristen">Kristen</option>
                                        <option @if (old('agama_ayah') == 'Katholik')  selected @endif value="Katholik">Katholik</option>
                                        <option @if (old('agama_ayah') == 'Hindu')  selected @endif value="Hindu">Hindu</option>
                                        <option @if (old('agama_ayah') == 'Buddha')  selected @endif value="Buddha">Buddha</option>
                                        <option @if (old('agama_ayah') == 'Konghucu')  selected @endif value="Konghucu">Konghucu</option>
                                </select>
                                @error('agama_ayah')
                                    <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group row ml-3">
                                <label for="kewarganegaraan_ayah" class="col-sm-3 col-form-label">Kewarga-negaraan</label>
                                :<input type="text" name="kewarganegaraan_ayah" id="kewarganegaraan_ayah" class="form-control col-sm-8" value="{{ old('kewarganegaraan_ayah') }}">
                                @error('kewarganegaraan_ayah')
                                    <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group row ml-3">
                                <label for="pendidikan_ayah" class="col-sm-3 col-form-label">Pendidikan Tertinggi</label>
                                :<input type="text" name="pendidikan_ayah" id="pendidikan_ayah" class="form-control col-sm-8" value="{{ old('pendidikan_ayah') }}">
                                @error('pendidikan_ayah')
                                    <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group row ml-3">
                                <label for="pekerjaan_ayah" class="col-sm-3 col-form-label">Pekerjaan</label>
                                :<input type="text" name="pekerjaan_ayah" id="pekerjaan_ayah" class="form-control col-sm-8" value="{{ old('pekerjaan_ayah') }}">
                                @error('pekerjaan_ayah')
                                    <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mt-3 ml-3"><b><h5>IBU</h5></b></div>
                            <div class="form-group row ml-3">
                                <label for="nama_ibu" class="col-sm-3 col-form-label">Nama Ibu</label>
                                :<input type="text" name="nama_ibu" id="nama_ibu" class="form-control col-sm-8" value="{{ old('nama_ibu') }}">
                                @error('nama_ibu')
                                    <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group row ml-3">
                                <label for="ttl_ibu" class="col-sm-3 col-form-label">Tempat Tanggal Lahir</label>
                                :<input type="text" name="ttl_ibu" id="ttl_ibu" class="form-control col-sm-8" value="{{ old('ttl_ibu') }}">
                                @error('ttl_ibu')
                                    <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group row ml-3">
                                <label for="agama_ibu" class="col-sm-3 col-form-label">Agama Ibu</label>
                                :<select name="agama_ibu" id="agama_ibu" class="form-control col-sm-8">
                                        <option selected disabled>Pilih salah satu</option>
                                        <option @if (old('agama_ibu') == 'Islam')  selected @endif value="Islam">Islam</option>
                                        <option @if (old('agama_ibu') == 'Kristen')  selected @endif value="Kristen">Kristen</option>
                                        <option @if (old('agama_ibu') == 'Katholik')  selected @endif value="Katholik">Katholik</option>
                                        <option @if (old('agama_ibu') == 'Hindu')  selected @endif value="Hindu">Hindu</option>
                                        <option @if (old('agama_ibu') == 'Buddha')  selected @endif value="Buddha">Buddha</option>
                                        <option @if (old('agama_ibu') == 'Konghucu')  selected @endif value="Konghucu">Konghucu</option>
                                </select>
                                @error('agama_ibu')
                                    <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group row ml-3">
                                <label for="kewarganegaraan_ibu" class="col-sm-3 col-form-label">Kewarga-negaraan</label>
                                :<input type="text" name="kewarganegaraan_ibu" id="kewarganegaraan_ibu" class="form-control col-sm-8" value="{{ old('kewarganegaraan_ibu') }}">
                                @error('kewarganegaraan_ibu')
                                    <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group row ml-3">
                                <label for="pendidikan_ibu" class="col-sm-3 col-form-label">Pendidikan Tertinggi</label>
                                :<input type="text" name="pendidikan_ibu" id="pendidikan_ibu" class="form-control col-sm-8" value="{{ old('pendidikan_ibu') }}">
                                @error('pendidikan_ibu')
                                    <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group row ml-3">
                                <label for="pekerjaan_ibu" class="col-sm-3 col-form-label">Pekerjaan</label>
                                :<input type="text" name="pekerjaan_ibu" id="pekerjaan_ibu" class="form-control col-sm-8" value="{{ old('pekerjaan_ibu') }}">
                                @error('pekerjaan_ibu')
                                    <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3 ml-3"><b><h5>WALI</h5></b></div>
                            <div class="form-group row ml-3">
                                <label for="nama_wali" class="col-sm-3 col-form-label">Nama Wali</label>
                                :<input type="text" name="nama_wali" id="nama_wali" class="form-control col-sm-8" value="{{ old('nama_wali') }}">
                                @error('nama_wali')
                                    <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group row ml-3">
                                <label for="ttl_wali" class="col-sm-3 col-form-label">Tempat Tanggal Lahir</label>
                                :<input type="text" name="ttl_wali" id="ttl_wali" class="form-control col-sm-8" value="{{ old('ttl_wali') }}">
                                @error('ttl_wali')
                                    <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group row ml-3">
                                <label for="agama_wali" class="col-sm-3 col-form-label">Agama Wali</label>
                                :<select name="agama_wali" id="agama_wali" class="form-control col-sm-8">
                                        <option selected disabled>Pilih salah satu</option>
                                        <option @if (old('agama_wali') == 'Islam')  selected @endif value="Islam">Islam</option>
                                        <option @if (old('agama_wali') == 'Kristen')  selected @endif value="Kristen">Kristen</option>
                                        <option @if (old('agama_wali') == 'Katholik')  selected @endif value="Katholik">Katholik</option>
                                        <option @if (old('agama_wali') == 'Hindu')  selected @endif value="Hindu">Hindu</option>
                                        <option @if (old('agama_wali') == 'Buddha')  selected @endif value="Buddha">Buddha</option>
                                        <option @if (old('agama_wali') == 'Konghucu')  selected @endif value="Konghucu">Konghucu</option>
                                </select>
                                @error('agama_wali')
                                    <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group row ml-3">
                                <label for="kewarganegaraan_wali" class="col-sm-3 col-form-label">Kewarga-negaraan</label>
                                :<input type="text" name="kewarganegaraan_wali" id="kewarganegaraan_wali" class="form-control col-sm-8" value="{{ old('kewarganegaraan_wali') }}">
                                @error('kewarganegaraan_wali')
                                    <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group row ml-3">
                                <label for="pendidikan_wali" class="col-sm-3 col-form-label">Pendidikan Tertinggi</label>
                                :<input type="text" name="pendidikan_wali" id="pendidikan_wali" class="form-control col-sm-8" value="{{ old('pendidikan_wali') }}">
                                @error('pendidikan_wali')
                                    <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group row ml-3">
                                <label for="pekerjaan_wali" class="col-sm-3 col-form-label">Pekerjaan</label>
                                :<input type="text" name="pekerjaan_wali" id="pekerjaan_wali" class="form-control col-sm-8" value="{{ old('pekerjaan_wali') }}">
                                @error('pekerjaan_wali')
                                    <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 ml-3"><b><h4>LAIN-LAIN</h4></b>
                            <div class="form-group row ml-3">
                                <label for="gaji_perbulan" class="col-sm-3 col-form-label">Penghasilan/Gaji Bapak dan Ibu Perbulan</label>
                                :<select name="gaji_perbulan" id="gaji_perbulan" class="form-control col-sm-8">
                                    <option selected disabled>Pilih salah satu</option>
                                    <option value="1 s/d 5 Juta" @if(old('gaji_perbulan') =="1 s/d 5 Juta") selected @endif>1 s/d 5 Juta</option>
                                    <option value="1 s/d 5 Juta" @if(old('gaji_perbulan') == "1 s/d 5 Juta") selected @endif>1 s/d 5 Juta</option>
                                    <option value="10 Juta lebih" @if(old('gaji_perbulan') == "10 Juta lebih") selected @endif>10 Juta lebih</option>
                                </select>
                                @error('gaji_perbulan')
                                    <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group row ml-3">
                                <label for="jemputan" class="col-sm-3 col-form-label">Menggunakan Jasa Antar Jemput</label>
                                :<select name="jemputan" id="jemputan" class="form-control col-sm-8">
                                    <option selected disabled>Pilih salah satu</option>
                                    <option @if(old('jemputan') == "mendaftar") selected @endif value="mendaftar">Kami mendaftarkan anak Kami untuk menggunakan jasa Antar Jemput Sekolah</option>
                                    <option @if(old('jemputan') == "tidak mendaftar") selected @endif value="tidak mendaftar">Kami tidak mendaftar anak Kami untuk menggunakan jasa Antar Jemput Sekolah</option>
                                </select>
                                @error('jemputan')
                                    <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group row ml-3">
                                <label for="email" class="col-sm-3 col-form-label">Email yang dapat dihubungi</label>
                                :<input type="email" name="email" id="email" class="col-sm-8" value="{{ old('email') }}">
                                @error('email')
                                    <div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 ml-3"><b><h4>DOKUMEN</h4></b>
                            <div class="form-group row ml-3">
                                <label for="scan_akta" class="col-sm-3 col-form-label">Scan Akta Kelahiran</label>
                                :<input type="file" name="scan_akta" id="scan_akta" class="col-sm-8">
                                @error('scan_akta')
                                    <div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group row ml-3">
                                <label for="scan_kk" class="col-sm-3 col-form-label">Scan Kartu Keluarga</label>
                                :<input type="file" name="scan_kk" id="scan_kk" class="col-sm-8">
                                @error('scan_kk')
                                    <div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group row ml-3">
                                <label for="scan_ktp_ortu" class="col-sm-3 col-form-label">Scan KTP Orangtua</label>
                                :<input type="file" name="scan_ktp_ortu" id="scan_ktp_ortu" class="col-sm-8">
                                @error('scan_ktp_ortu')
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
                        <br>
                        <form action="/calon/tk/update/{{ $user->id }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            @foreach ($calon_siswa_tks as $pesertadidik)
                            <div class="mb-3 ml-3"><b><h4>IDENTITAS ANAK</h4></b>
                                <div class="form-group row ml-3">
                                    <label for="nama_pd" class="col-sm-3 col-form-label">Nama Lengkap</label>
                                        :<input type="text" name="nama_pd" id="nama_pd" class="form-control col-sm-8" value="{{ $pesertadidik->nama_pd }}">
                                    @error('nama_pd')
                                        <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group row ml-3">
                                    <label for="nama" class="col-sm-3 col-form-label">Nama Panggilan</label>
                                        :<input type="text" name="nama" id="nama" class="form-control col-sm-8" value="{{ $pesertadidik->nama }}">
                                    @error('nama')
                                        <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group row ml-3">
                                    <label for="jenis_kelamin" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                    :<select name="jenis_kelamin" id="jenis_kelamin" class="form-control col-sm-8">
                                            <option selected disabled>Pilih salah satu</option>
                                            <option @if ($pesertadidik->jenis_kelamin  == "Laki-laki") selected @endif value="Laki-laki">Laki-laki</option>
                                            <option @if ($pesertadidik->jenis_kelamin  == "Perempuan") selected @endif value="Perempuan">Perempuan</option>
                                    </select>
                                    @error('jenis_kelamin')
                                        <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group row ml-3">
                                    <label for="ttl" class="col-sm-3 col-form-label">Tempat, Tanggal Lahir</label>
                                    :<input type="text" name="ttl" id="ttl" class="form-control col-sm-8" value="{{ $pesertadidik->ttl }}">
                                    @error('ttl')
                                        <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group row ml-3">
                                    <label for="agama" class="col-sm-3 col-form-label">Agama</label>
                                    :<select name="agama" id="agama" class="form-control col-sm-8">
                                            <option selected disabled>Pilih salah satu</option>
                                            <option @if ($pesertadidik->agama == 'Islam')  selected @endif value="Islam">Islam</option>
                                            <option @if ($pesertadidik->agama == 'Kristen')  selected @endif value="Kristen">Kristen</option>
                                            <option @if ($pesertadidik->agama == 'Katholik')  selected @endif value="Katholik">Katholik</option>
                                            <option @if ($pesertadidik->agama == 'Hindu')  selected @endif value="Hindu">Hindu</option>
                                            <option @if ($pesertadidik->agama == 'Buddha')  selected @endif value="Buddha">Buddha</option>
                                            <option @if ($pesertadidik->agama == 'Konghucu')  selected @endif value="Konghucu">Konghucu</option>
                                    </select>
                                    @error('agama')
                                        <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group row ml-3">
                                    <label for="kewarganegaraan" class="col-sm-3 col-form-label">Kewarga-negaraan</label>
                                    :<input type="text" name="kewarganegaraan" id="kewarganegaraan" class="form-control col-sm-8" value="{{ $pesertadidik->kewarganegaraan }}">
                                    @error('kewarganegaraan')
                                        <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group row ml-3">
                                    <label for="anak_ke" class="col-sm-3 col-form-label">Anak Ke</label>
                                    :<input type="number" name="anak_ke" id="anak_ke" class="form-control col-sm-8" value="{{ $pesertadidik->anak_ke }}">
                                    @error('anak_ke')
                                        <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group row ml-3">
                                    <label for="banyak_saudara_ibu" class="col-sm-3 col-form-label">Banyak Saudara Kandung</label>
                                    :<input type="number" name="banyak_saudara_ibu" id="banyak_saudara_ibu" class="form-control col-sm-8" value="{{ $pesertadidik->banyak_saudara_ibu }}">
                                    @error('banyak_saudara_ibu')
                                        <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group row ml-3">
                                    <label for="banyak_saudara_tiri" class="col-sm-3 col-form-label">Banyak Saudara Tiri</label>
                                    :<input type="number" name="banyak_saudara_tiri" id="banyak_saudara_tiri" class="form-control col-sm-8" value="{{ $pesertadidik->banyak_saudara_tiri }}">
                                    @error('banyak_saudara_tiri')
                                        <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group row ml-3">
                                    <label for="banyak_saudara_angkat" class="col-sm-3 col-form-label">Banyak Saudara Angkat</label>
                                    :<input type="number" name="banyak_saudara_angkat" id="banyak_saudara_angkat" class="form-control col-sm-8" value="{{ $pesertadidik->banyak_saudara_angkat }}">
                                    @error('banyak_saudara_angkat')
                                        <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group row ml-3">
                                    <label for="bahasa" class="col-sm-3 col-form-label">Bahasa sehari-hari</label>
                                    :<input type="text" name="bahasa" id="bahasa" class="form-control col-sm-8" value="{{ $pesertadidik->bahasa }}">
                                    @error('bahasa')
                                        <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group row ml-3">
                                    <label for="berat" class="col-sm-3 col-form-label">Berat Badan</label>
                                    :
                                    <div class="input-group-prepend col-sm-8 p-0">
                                        <input type="number" name="berat" id="berat" class="form-control" value="{{ $pesertadidik->berat }}">  
                                        <div class="input-group-text">Kg</div>
                                    </div>    
                                    @error('berat')
                                        <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group row ml-3">
                                    <label for="tinggi" class="col-sm-3 col-form-label">Tinggi Badan</label>
                                    :
                                    <div class="input-group-prepend col-sm-8 p-0">
                                        <input type="number" name="tinggi" id="tinggi" class="form-control" value="{{ $pesertadidik->tinggi }}">  
                                        <div class="input-group-text">Cm</div>
                                    </div>
                                    @error('tinggi')
                                        <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group row ml-3">
                                    <label for="golongan_darah" class="col-sm-3 col-form-label">Golongan Darah</label>
                                    :<select type="text" name="golongan_darah" id="golongan_darah" class="form-control col-sm-8">
                                        <option selected disabled>Pilih salah satu</option>
                                        <option value="A" @if($pesertadidik->golongan_darah == 'A') selected @endif>A</option>
                                        <option value="B" @if($pesertadidik->golongan_darah == 'B') selected @endif>B</option>
                                        <option value="O" @if($pesertadidik->golongan_darah == 'O') selected @endif>O</option>
                                        <option value="AB" @if($pesertadidik->golongan_darah == 'AB') selected @endif>AB</option>
                                    </select>
                                    @error('golongan_darah')
                                        <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group row ml-3">
                                    <label for="penyakit" class="col-sm-3 col-form-label">Penyakit yang Pernah Diderita</label>
                                    :<input type="text" name="penyakit" id="penyakit" class="form-control col-sm-8" value="{{ $pesertadidik->penyakit }}">
                                    @error('penyakit')
                                        <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group row ml-3">
                                    <label for="alamat_pd" class="col-sm-3 col-form-label">Alamat</label>
                                    :<textarea rows="3" name="alamat_pd" id="alamat_pd" class="form-control col-sm-8">{{ $pesertadidik->alamat_pd }}</textarea>
                                    @error('alamat_pd')
                                        <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group row ml-3">
                                    <label for="telp_pd" class="col-sm-3 col-form-label">Nomor Telepon</label>
                                    :<input type="text" name="telp_pd" id="telp_pd" class="form-control col-sm-8" value="{{ $pesertadidik->telp_pd }}">
                                    @error('telp_pd')
                                        <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group row ml-3">
                                    <label for="tempat_tinggal" class="col-sm-3 col-form-label">Bertempat Tinggal Pada</label>
                                    :<select name="tempat_tinggal" id="tempat_tinggal" class="form-control col-sm-8" value="{{ $pesertadidik->tempat_tinggal }}">
                                        <option selected disabled>Pilih Salah Satu</option>
                                        <option value="Orangtua" @if($pesertadidik->tempat_tinggal=="Orangtua")selected @endif>Orangtua</option>
                                        <option value="Menampung" @if($pesertadidik->tempat_tinggal=="Menampung")selected @endif>Menampung</option>
                                        <option value="Asrama" @if($pesertadidik->tempat_tinggal=="Asrama")selected @endif>Asrama</option>
                                    </select>
                                    @error('tempat_tinggal')
                                        <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group row ml-3">
                                    <label for="hobi" class="col-sm-3 col-form-label">Kegemaran/Hobi</label>
                                    :<input type="text" name="hobi" id="hobi" class="form-control col-sm-8" value="{{ $pesertadidik->hobi }}">
                                    @error('hobi')
                                        <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 ml-3"><b><h4>DATA ORANG TUA/WALI</h4></b>
                                
                                <div class="mt-3 ml-3"><b><h5>AYAH</h5></b></div>

                                <div class="form-group row ml-3">
                                    <label for="nama_ayah" class="col-sm-3 col-form-label">Nama Ayah</label>
                                    :<input type="text" name="nama_ayah" id="nama_ayah" class="form-control col-sm-8" value="{{ $pesertadidik->nama_ayah }}">
                                    @error('nama_ayah')
                                        <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group row ml-3">
                                    <label for="ttl_ayah" class="col-sm-3 col-form-label">Tempat Tanggal Lahir</label>
                                    :<input type="text" name="ttl_ayah" id="ttl_ayah" class="form-control col-sm-8" value="{{ $pesertadidik->ttl_ayah }}">
                                    @error('ttl_ayah')
                                        <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group row ml-3">
                                    <label for="agama_ayah" class="col-sm-3 col-form-label">Agama_ayah</label>
                                    :<select name="agama_ayah" id="agama_ayah" class="form-control col-sm-8">
                                            <option selected disabled>Pilih salah satu</option>
                                            <option @if ($pesertadidik->agama_ayah == 'Islam')  selected @endif value="Islam">Islam</option>
                                            <option @if ($pesertadidik->agama_ayah == 'Kristen')  selected @endif value="Kristen">Kristen</option>
                                            <option @if ($pesertadidik->agama_ayah == 'Katholik')  selected @endif value="Katholik">Katholik</option>
                                            <option @if ($pesertadidik->agama_ayah == 'Hindu')  selected @endif value="Hindu">Hindu</option>
                                            <option @if ($pesertadidik->agama_ayah == 'Buddha')  selected @endif value="Buddha">Buddha</option>
                                            <option @if ($pesertadidik->agama_ayah == 'Konghucu')  selected @endif value="Konghucu">Konghucu</option>
                                    </select>
                                    @error('agama_ayah')
                                        <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                <div class="form-group row ml-3">
                                    <label for="kewarganegaraan_ayah" class="col-sm-3 col-form-label">Kewarga-negaraan</label>
                                    :<input type="text" name="kewarganegaraan_ayah" id="kewarganegaraan_ayah" class="form-control col-sm-8" value="{{ $pesertadidik->kewarganegaraan_ayah }}">
                                    @error('kewarganegaraan_ayah')
                                        <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                <div class="form-group row ml-3">
                                    <label for="pendidikan_ayah" class="col-sm-3 col-form-label">Pendidikan Tertinggi</label>
                                    :<input type="text" name="pendidikan_ayah" id="pendidikan_ayah" class="form-control col-sm-8" value="{{ $pesertadidik->pendidikan_ayah }}">
                                    @error('pendidikan_ayah')
                                        <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                <div class="form-group row ml-3">
                                    <label for="pekerjaan_ayah" class="col-sm-3 col-form-label">Pekerjaan</label>
                                    :<input type="text" name="pekerjaan_ayah" id="pekerjaan_ayah" class="form-control col-sm-8" value="{{ $pesertadidik->pekerjaan_ayah }}">
                                    @error('pekerjaan_ayah')
                                        <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                <div class="mt-3 ml-3"><b><h5>IBU</h5></b></div>

                                <div class="form-group row ml-3">
                                    <label for="nama_ibu" class="col-sm-3 col-form-label">Nama Ibu</label>
                                    :<input type="text" name="nama_ibu" id="nama_ibu" class="form-control col-sm-8" value="{{ $pesertadidik->nama_ibu }}">
                                    @error('nama_ibu')
                                        <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                <div class="form-group row ml-3">
                                    <label for="ttl_ibu" class="col-sm-3 col-form-label">Tempat Tanggal Lahir</label>
                                    :<input type="text" name="ttl_ibu" id="ttl_ibu" class="form-control col-sm-8" value="{{ $pesertadidik->ttl_ibu }}">
                                    @error('ttl_ibu')
                                        <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                <div class="form-group row ml-3">
                                    <label for="agama_ibu" class="col-sm-3 col-form-label">Agama Ibu</label>
                                    :<select name="agama_ibu" id="agama_ibu" class="form-control col-sm-8">
                                            <option selected disabled>Pilih salah satu</option>
                                            <option @if ($pesertadidik->agama_ibu == 'Islam')  selected @endif value="Islam">Islam</option>
                                            <option @if ($pesertadidik->agama_ibu == 'Kristen')  selected @endif value="Kristen">Kristen</option>
                                            <option @if ($pesertadidik->agama_ibu == 'Katholik')  selected @endif value="Katholik">Katholik</option>
                                            <option @if ($pesertadidik->agama_ibu == 'Hindu')  selected @endif value="Hindu">Hindu</option>
                                            <option @if ($pesertadidik->agama_ibu == 'Buddha')  selected @endif value="Buddha">Buddha</option>
                                            <option @if ($pesertadidik->agama_ibu == 'Konghucu')  selected @endif value="Konghucu">Konghucu</option>
                                    </select>
                                    @error('agama_ibu')
                                        <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                    @enderror
                                
                                </div>
                                <div class="form-group row ml-3">
                                    <label for="kewarganegaraan_ibu" class="col-sm-3 col-form-label">Kewarga-negaraan</label>
                                    :<input type="text" name="kewarganegaraan_ibu" id="kewarganegaraan_ibu" class="form-control col-sm-8" value="{{ $pesertadidik->kewarganegaraan_ibu }}">
                                    @error('kewarganegaraan_ibu')
                                        <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                <div class="form-group row ml-3">
                                    <label for="pendidikan_ibu" class="col-sm-3 col-form-label">Pendidikan Tertinggi</label>
                                    :<input type="text" name="pendidikan_ibu" id="pendidikan_ibu" class="form-control col-sm-8" value="{{ $pesertadidik->pendidikan_ibu }}">
                                    @error('pendidikan_ibu')
                                        <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                <div class="form-group row ml-3">
                                    <label for="pekerjaan_ibu" class="col-sm-3 col-form-label">Pekerjaan</label>
                                    :<input type="text" name="pekerjaan_ibu" id="pekerjaan_ibu" class="form-control col-sm-8" value="{{ $pesertadidik->pekerjaan_ibu }}">
                                    @error('pekerjaan_ibu')
                                        <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mt-3 ml-3"><b><h5>WALI</h5></b></div>
                                
                                <div class="form-group row ml-3">
                                    <label for="nama_wali" class="col-sm-3 col-form-label">Nama Wali</label>
                                    :<input type="text" name="nama_wali" id="nama_wali" class="form-control col-sm-8" value="{{ $pesertadidik->nama_wali }}">
                                    @error('nama_wali')
                                        <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                <div class="form-group row ml-3">
                                    <label for="ttl_wali" class="col-sm-3 col-form-label">Tempat Tanggal Lahir</label>
                                    :<input type="text" name="ttl_wali" id="ttl_wali" class="form-control col-sm-8" value="{{ $pesertadidik->ttl_wali }}">
                                    @error('ttl_wali')
                                        <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                <div class="form-group row ml-3">
                                    <label for="agama_wali" class="col-sm-3 col-form-label">Agama Wali</label>
                                    :<select name="agama_wali" id="agama_wali" class="form-control col-sm-8">
                                            <option selected disabled>Pilih salah satu</option>
                                            <option @if ($pesertadidik->agama_wali == 'Islam')  selected @endif value="Islam">Islam</option>
                                            <option @if ($pesertadidik->agama_wali == 'Kristen')  selected @endif value="Kristen">Kristen</option>
                                            <option @if ($pesertadidik->agama_wali == 'Katholik')  selected @endif value="Katholik">Katholik</option>
                                            <option @if ($pesertadidik->agama_wali == 'Hindu')  selected @endif value="Hindu">Hindu</option>
                                            <option @if ($pesertadidik->agama_wali == 'Buddha')  selected @endif value="Buddha">Buddha</option>
                                            <option @if ($pesertadidik->agama_wali == 'Konghucu')  selected @endif value="Konghucu">Konghucu</option>
                                    </select>
                                    @error('agama_wali')
                                        <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                <div class="form-group row ml-3">
                                    <label for="kewarganegaraan_wali" class="col-sm-3 col-form-label">Kewarga-negaraan</label>
                                    :<input type="text" name="kewarganegaraan_wali" id="kewarganegaraan_wali" class="form-control col-sm-8" value="{{ $pesertadidik->kewarganegaraan_wali }}">
                                    @error('kewarganegaraan_wali')
                                        <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                <div class="form-group row ml-3">
                                    <label for="pendidikan_wali" class="col-sm-3 col-form-label">Pendidikan Tertinggi</label>
                                    :<input type="text" name="pendidikan_wali" id="pendidikan_wali" class="form-control col-sm-8" value="{{ $pesertadidik->pendidikan_wali }}">
                                    @error('pendidikan_wali')
                                        <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                <div class="form-group row ml-3">
                                    <label for="pekerjaan_wali" class="col-sm-3 col-form-label">Pekerjaan</label>
                                    :<input type="text" name="pekerjaan_wali" id="pekerjaan_wali" class="form-control col-sm-8" value="{{ $pesertadidik->pekerjaan_wali }}">
                                    @error('pekerjaan_wali')
                                        <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            </div>
                            <div class="mb-3 ml-3"><b><h4>LAIN-LAIN</h4></b>
                                <div class="form-group row ml-3">
                                    <label for="gaji_perbulan" class="col-sm-3 col-form-label">Penghasilan/Gaji Bapak dan Ibu Perbulan</label>
                                    :<select name="gaji_perbulan" id="gaji_perbulan" class="form-control col-sm-8">
                                        <option selected disabled>Pilih salah satu</option>
                                        <option value="1 s/d 5 Juta"@if($pesertadidik->gaji_perbulan="1 s/d 5 Juta") selected @endif>1 s/d 5 Juta</option>
                                        <option value="1 s/d 5 Juta"@if($pesertadidik->gaji_perbulan="1 s/d 5 Juta") selected @endif>1 s/d 5 Juta</option>
                                        <option value="10 Juta lebih"@if($pesertadidik->gaji_perbulan="10 Juta lebih") selected @endif>10 Juta lebih</option>
                                    </select>
                                    @error('gaji_perbulan')
                                        <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group row ml-3">
                                    <label for="jemputan" class="col-sm-3 col-form-label">Menggunakan Jasa Antar Jemput</label>
                                    :<select name="jemputan" id="jemputan" class="form-control col-sm-8" value="{{ $pesertadidik->jemputan }}">
                                        <option selected disabled>Pilih salah satu</option>
                                        <option  @if($pesertadidik->jemputan == "mendaftar") selected @endif value="mendaftar">Kami mendaftarkan anak Kami untuk menggunakan jasa Antar Jemput Sekolah</option>
                                        <option  @if($pesertadidik->jemputan == "tidak mendaftar") selected @endif value="tidak mendaftar">Kami tidak mendaftar anak Kami untuk menggunakan jasa Antar Jemput Sekolah</option>
                                    </select>
                                    @error('jemputan')
                                        <div class="text-danger mt-2 col-sm-3">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group row ml-3">
                                    <label for="email" class="col-sm-3 col-form-label">Email yang dapat dihubungi</label>
                                    :<input type="email" name="email" id="email" class="col-sm-8" value="{{ $pesertadidik->email }}">
                                    @error('email')
                                        <div class="text-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 ml-3"><b><h4>DOKUMEN</h4></b>
                                <div class="form-group row ml-3">
                                    <label for="scan_akta" class="col-sm-3 col-form-label">Scan Akta Kelahiran</label>
                                    :<input type="file" name="scan_akta" id="scan_akta" class="col-sm-8">
                                    @error('scan_akta')
                                        <div class="text-danger mt-2">{{ $message }}</div>
                                    @enderror
                                    @if ($pesertadidik->scan_akta)
                                        <img class="d-flex mx-auto mb-3" src="{{ asset("dokumen/tk/" . $pesertadidik->scan_akta) }}" alt="{{ $pesertadidik->scan_akta }}">
                                    @endif
                                </div>
                                <div class="form-group row ml-3">
                                    <label for="scan_kk" class="col-sm-3 col-form-label">Scan Kartu Keluarga</label>
                                    :<input type="file" name="scan_kk" id="scan_kk" class="col-sm-8">
                                    @error('scan_kk')
                                        <div class="text-danger mt-2">{{ $message }}</div>
                                    @enderror
                                    @if ($pesertadidik->scan_kk)
                                        <img class="d-flex mx-auto mb-3" src="{{ asset("dokumen/tk/" . $pesertadidik->scan_kk) }}" alt="{{ $pesertadidik->scan_kk }}">
                                    @endif
                                </div>
                                <div class="form-group row ml-3">
                                    <label for="scan_ktp_ortu" class="col-sm-3 col-form-label">Scan KTP Orangtua</label>
                                    :<input type="file" name="scan_ktp_ortu" id="scan_ktp_ortu" class="col-sm-8">
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
</div>
@endsection

{{-- D-}GW=Myz{k:0/PY9P8za --}}