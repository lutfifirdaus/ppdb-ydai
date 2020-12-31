@extends('admin.layouts.app')

@section('header.content')
    <h2 class="text-center mt-3">Daftar Calon Peserta Didik SMA Dharma Karya</h2>
@endsection

@section('main.content')
    <div class="modal-body" style="font-size:1rem">
        <div class="row text-left">
            <div class="col-md-6">

                <div class="mb-3 ml-3"><b>
                        <h4>IDENTITAS ANAK</h4>
                    </b>

                    <div class="row">
                        <div class="col-md-4">Nama Lengkap</div>
                        <div> {{ $pesertadidik->nama_pd }} </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">Nama Panggilan</div>
                        <div> {{ $pesertadidik->nama }} </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">Jenis Kelamin</div>
                        <div>{{ $pesertadidik->jenis_kelamin }}</div>

                    </div>

                    <div class="row">
                        <div class="col-md-4">Tempat, Tanggal Lahir</div>
                        <div> {{ $pesertadidik->tempat_lahir }}, {{ $pesertadidik->tanggal_lahir }}</div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">Agama</div>
                        <div>{{ $pesertadidik->agama }}</div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">Kewarganegaraan</div>
                        <div> {{ $pesertadidik->kewarganegaraan }} </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">Anak Ke</div>
                        <div> {{ $pesertadidik->anak_ke }} </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">Banyak Saudara Kandung</div>
                        <div> {{ $pesertadidik->banyak_saudara_ibu }} </div>

                    </div>

                    <div class="row">
                        <div class="col-md-4">Banyak Saudara Tiri</div>
                        <div> {{ $pesertadidik->banyak_saudara_tiri }} </div>

                    </div>

                    <div class="row">
                        <div class="col-md-4">Banyak Saudara Angkat</div>
                        <div> {{ $pesertadidik->banyak_saudara_angkat }} </div>

                    </div>

                    <div class="row">
                        <div class="col-md-4">Bahasa sehari-hari</div>
                        <div> {{ $pesertadidik->bahasa }} </div>

                    </div>

                    <div class="row">
                        <div class="col-md-4">Berat Badan</div>
                        <div> {{ $pesertadidik->berat }} Kg</div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">Tinggi Badan</div>
                        <div> {{ $pesertadidik->tinggi }} Cm</div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">Golongan Darah</div>
                        <div>{{ $pesertadidik->golongan_darah }}</div>

                    </div>

                    <div class="row">
                        <div class="col-md-4">Penyakit yang Pernah Diderita</div>
                        <div> {{ $pesertadidik->penyakit }} </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">Alamat</div>
                        <div>{{ $pesertadidik->alamat_pd }}, {{ $pesertadidik->kecamatan_pd }},
                            {{ $pesertadidik->kabupaten_pd }}, {{ $pesertadidik->provinsi_pd }}</div>

                    </div>

                    <div class="row">
                        <div class="col-md-4">Nomor Telepon</div>
                        <div> {{ $pesertadidik->telp_pd }} </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">Bertempat Tinggal Pada</div>
                        <div>{{ $pesertadidik->tempat_tinggal }}</div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">Kegemaran/Hobi</div>
                        <div> {{ $pesertadidik->hobi }} </div>
                    </div>
                </div>


                <div class="mb-3 ml-3"><b>
                        <h4>LAIN-LAIN</h4>
                    </b>
                    <div class="row">
                        <div class="col-md-4">Penghasilan/Gaji Bapak dan Ibu Perbulan</div>
                        <div>{{ $pesertadidik->gaji_perbulan }}</div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">Menggunakan Jasa Antar Jemput</div>
                        <div>{{ $pesertadidik->jemputan }}</div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">Email yang dapat dihubungi</div>
                        <div> {{ $pesertadidik->email }} </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">

                <div class="mb-3 ml-3"><b>
                        <h4>DATA ORANG TUA/WALI</h4>
                    </b>

                    <div class="mt-3 ml-3"><b>
                            <h5>AYAH</h5>
                        </b></div>

                    <div class="row">
                        <div class="col-md-4">Nama Lengkap</div>
                        <div>{{ $pesertadidik->nama_ayah }}</div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">Tempat, Tanggal Lahir </div>
                        <div class="row p-2">
                            <div> {{ $pesertadidik->tempat_lahir_ayah }}, {{ $pesertadidik->tanggal_lahir_ayah }} </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-4">Agama</div>
                        <div>{{ $pesertadidik->agama }}</div>

                    </div>

                    <div class="row">
                        <div class="col-md-4">Kewarganegaraan</div>
                        <div> {{ $pesertadidik->kewarganegaraan_ayah }} </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">Pendidikan Tertinggi</div>
                        <div> {{ $pesertadidik->pendidikan_ayah }} </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">Pekerjaan</div>
                        <div>{{ $pesertadidik->pekerjaan_ayah }}</div>
                    </div>

                    <div class="mt-3 ml-3"><b>
                            <h5>IBU</h5>
                        </b></div>

                    <div class="row">
                        <div class="col-md-4">Nama Lengkap</div>
                        <div>{{ $pesertadidik->nama_ibu }}</div>

                    </div>

                    <div class="row">
                        <div class="col-md-4">Tempat, Tanggal Lahir </div>
                        <div class="row p-2">
                            <div> {{ $pesertadidik->tempat_lahir_ibu }}, {{ $pesertadidik->tanggal_lahir_ibu }} </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-4">Agama</div>
                        <div>{{ $pesertadidik->agama }}</div>

                    </div>

                    <div class="row">
                        <div class="col-md-4">Kewarganegaraan</div>
                        <div> {{ $pesertadidik->kewarganegaraan_ibu }} </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">Pendidikan Tertinggi</div>
                        <div> {{ $pesertadidik->pendidikan_ibu }} </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">Pekerjaan</div>
                        <div>{{ $pesertadidik->pekerjaan_ }}
                        </div>
                    </div>

                    <div class="mt-3 ml-3"><b>
                            <h5>WALI</h5>
                        </b></div>

                    <div class="row">
                        <div class="col-md-4">Nama Lengkap</div>
                        <div>{{ $pesertadidik->nama_wali }}</div>

                    </div>

                    <div class="row">
                        <div class="col-md-4">Tempat, Tanggal Lahir </div>
                        <div class="row p-2">
                            <div> {{ $pesertadidik->tempat_lahir_wali }}, {{ $pesertadidik->tanggal_lahir_wali }} </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-4">Agama</div>
                        <div>{{ $pesertadidik->agama }}</div>

                    </div>

                    <div class="row">
                        <div class="col-md-4">Kewarganegaraan</div>
                        <div> {{ $pesertadidik->kewarganegaraan_wali }} </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">Pendidikan Tertinggi</div>
                        <div> {{ $pesertadidik->pendidikan_wali }} </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">Pekerjaan</div>
                        <div>{{ $pesertadidik->pekerjaan_ }}
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="mb-3 ml-3 text-center"><b>
                <h4>DOKUMEN</h4>
            </b>

            <div class="text-left">Scan Akta Kelahiran</div>
            <img class="d-flex mx-auto mb-3" src="{{ asset('dokumen/tk/' . $pesertadidik->scan_akta) }}"
                alt="{{ $pesertadidik->scan_akta }}">

            <div class="text-left">Scan Kartu Keluarga</div>
            <img class="d-flex mx-auto mb-3" src="{{ asset('dokumen/tk/' . $pesertadidik->scan_kk) }}"
                alt="{{ $pesertadidik->scan_kk }}">

            <div class="text-left">Scan KTP Orangtua</div>
            <img class="d-flex mx-auto mb-3" src="{{ asset('dokumen/tk/' . $pesertadidik->scan_ktp_ortu) }}"
                alt="{{ $pesertadidik->scan_ktp_ortu }}">

        </div>
    </div>
    <div class="modal-footer">
        <form action="/admin/tk/verifikasi-data/{{ $pesertadidik->user->id }}" method="POST">
            @csrf
            @method('PUT')
            <select name="is_data_verified" id="is_data_verified">
                <option @if ($pesertadidik->user->is_data_verified == 1) selected
                    @endif value=1>Belum terverifikas</option>
                <option @if ($pesertadidik->user->is_data_verified == 2) selected
                    @endif value=2>Terverifikas</option>
                <option @if ($pesertadidik->user->is_data_verified == 3) selected
                    @endif value=3>Data salah</option>
            </select>
            <button type="button submit" class="btn btn-primary">Save changes</button>
        </form>
    </div>
@endsection
