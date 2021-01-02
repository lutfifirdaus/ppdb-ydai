@extends('admin.layouts.app')

@section('header.content')
    <h2 class="text-center mt-3">Data {{ $pesertadidik->csTk->nama_pd }}</h2>
@endsection

@section('main.content')
<div class="card">
    <div class="card-body" style="font-size:1rem">
        <div class="row text-left p-3">

            <div class="ml-3" style="margin-top: 10px"><b><h4 class="mt-3 text-center row"><hr>DATA REGISTRASI PD<hr></h4></b>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-5 border">No. Registrasi</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csSds->no_registrasi }}</div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-5 border">Tahun Ajaran</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csSd->tahun_ajaran }}</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-5 border">Asal Sekolah</div>
                    <div class="col-md-7 border">{{ $pesertadidik->csSd->sekolah_asal }}</div>
                </div>
                
                <div class="row">
                    <div class="col-md-5 border">Kecamatan Sekolah</div>
                    <div class="col-md-7 border">{{ $pesertadidik->csSd->kecamatan_sekolah_asal }}</div>
                </div>
                @endforeach
            </div>

            <div class="col-md-6">

                <div class="ml-3" style="margin-top: 10px"><b><h4 class="mt-3 text-center"><hr>IDENTITAS SISWA<hr></h4></b>
            
                    <div class="row">
                        <div class="col-md-5 border">Nama Lengkap</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csSd->nama_pd }}</div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-5 border">Jenis Kelamin</div>
                        <div class="col-md-7 border"{{ $pesertadidik->csSd->jenis_kelamin }}></div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 border">NISN</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csSd->nisn }}</div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-5 border">NIK (Sesuai KK)</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csSd->nik }}</div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 border">Tempat, Tanggal Lahir</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csSd->tempat_lahir }}, {{ $pesertadidik->csSd->tanggal_lahir }}</div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-5 border">Nomor Registras Akta Lahir</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csSd->no_akta }}</div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 border">Anak Ke</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csSd->anak_ke }}</div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-5 border">Agama</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csSd->agama }}</div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 border">Kewarganegaraan</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csSd->kewarganegaraan }}</div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 border">Berkebutuhan Khusus</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csSd->kebutuhan_khusus }}</div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 border">Alamat Tempat Tinggal</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csSd->alamat_pd }}, RT{{ $pesertadidik->csSd->rt }}/RW{{ $pesertadidik->csSd->rw }}, Kel. {{ $pesertadidik->csSd->kelurahan }}, Kec. {{ $pesertadidik->csSd->kecamatan }}, {{ $pesertadidik->csSd->kabupaten }}, {{ $pesertadidik->csSd->kode_pos }}, lintang : {{ $pesertadidik->csSd->lintang }}, bujur : {{ $pesertadidik->csSd->bujur }}</div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 border">Nomor Telepon Rumah</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csSd->telp_rumah }}</div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-5 border">Nomor Handphone</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csSd->telp_pd }}</div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 border">Alat Transportasi Ke Sekolah</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csSd->moda_transportasi }}</div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 border">Jenis Tinggal</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csSd->jenis_tinggal }}</div>
                    </div>

                    <div class="row">
                        <div for="penerima_kks" class="col-md-3 form-label">Apakah penerima KKS ?</div>
                        <div class="col-md-3 border">@if($pesertadidik->csSd->penerima_kks == 1) Ya, dengan No KKS{{ $pesertadidik->csSd->no_kks }} @else Tidak @endif</div>
                    </div>

                    <div class="row">
                        <div for="penerima_kps" class="col-md-3 form-label">Apakah penerima KPS ?</div>
                        <div class="col-md-3 border">@if($pesertadidik->csSd->penerima_kps == 1) Ya, dengan No KPS{{ $pesertadidik->csSd->no_kps }} @else Tidak @endif</div>
                    </div>

                    <div class="row">
                        <div for="penerima_kip" class="col-md-3 form-label">Apakah penerima KIP ?</div>
                        <div class="col-md-3 border">@if($pesertadidik->csSd->penerima_kip == 1) Ya, dengan No KIP{{ $pesertadidik->csSd->no_kip }} @else Tidak @endif</div>
                    </div>

                <div class="ml-3" style="margin-top: 10px"><b><h4 class="mt-3 text-center"><hr>DATA PERIODIK SISWA<hr></h4></b>
                    
                    <div class="row">
                        <div class="col-md-5 border">Tinggi Badan</div>
                        <div  class="col-md-7 border">{{ $pesertadidik->csSd->tinggi }} Cm</div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-5 border">Jumlah Saudara Kandung</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csSd->banyak_saudara_kandung }} Orang</div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 border">Berat Badan</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csSd->berat }} Kg</div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 border">Jarak Tempat Tinggal Ke Sekolah</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csSd->jarak_kesekolah }} Km</div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 border">Waktu Tempuh Ke Sekolah</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csSd->waktu_kesekolah }}</div>
                    </div>
                    
                </div>

            </div>

            <div class="col-md-6">

                <div class="ml-3" style="margin-top: 10px"><b><h4 class="mt-3 text-center"><hr>ORANGTUA<hr></h4></b>

                    <div class="row">
                        <div class="col-md-5 border">Nama Ayah Kandung</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csSd->nama_ayah }}</div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 border">Tahun lahir</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csSd->tahun_lahir_ayah }}</div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 border">Pendidikan</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csSd->pendidikan_ayah }}</div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 border">Pekerjaan</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csSd->pekerjaan_ayah }}</div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 border">Penghasilan Bulanan</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csSd->penghasilan_ayah }}</div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 border">Nama Ibu Kandung</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csSd->nama_ibu }}</div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 border">Tahun lahir</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csSd->tahun_lahir_ibu }}</div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 border">Pendidikan</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csSd->pendidikan_ibu }}</div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 border">Pekerjaan</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csSd->pekerjaan_ibu }}</div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 border">Penghasilan Bulanan</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csSd->penghasilan_ibu }}</div>
                    </div>

                </div>
                <div class="ml-3" style="margin-top: 10px"><b><h4 class="mt-3 text-center"><hr>APABILA TINGGAL BERSAMA WALI<hr></h4></b>
                    
                    <div class="row">
                        <div class="col-md-5 border">Nama Wali</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csSd->nama_wali }}</div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 border">Tahun lahir</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csSd->tahun_lahir_wali }}</div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 border">Pendidikan</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csSd->pendidikan_wali }}</div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 border">Pekerjaan</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csSd->pekerjaan_wali }}</div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 border">Penghasilan Bulanan</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csSd->penghasilan_wali }}</div>
                    </div>

                </div>
            </div>
        </div>

        <div class="mb-3 ml-3" style="margin-top: 10px"><b><h4><hr>Dokumen<hr></h4></b>
                    
            <div class="row">
                <div class="col-md-5 border">Pas Foto 3 X 4</div>
                <div id="foto_pd" class="col-sm-8 @error('foto_pd') is-invalid </div>@enderror">

                @if ($pesertadidik->csSd->foto_pd)
                    <img class="d-flex mx-auto mb-3" src="{{ asset("dokumen/sd/" . $pesertadidik->csSd->foto_pd) }}" alt="{{ $pesertadidik->csSd->foto_pd }}">
                @endif
            </div>
            
            <div class="row">
                <div class="col-md-5 border">Scan Akta Kelahiran</div>
                <div id="scan_akta" class="col-sm-8 @error('scan_akta') </div>is-invalid @enderror">

                @if ($pesertadidik->csSd->scan_akta)
                    <img class="d-flex mx-auto mb-3" src="{{ asset("dokumen/sd/" . $pesertadidik->csSd->scan_akta) }}" alt="{{ $pesertadidik->csSd->scan_akta }}">
                @endif
            </div>

            <div class="row">
                <div class="col-md-5 border">Scan Kartu Keluarga</div>
                <div id="scan_kk" class="col-sm-8 @error('scan_kk') is-invalid </div>@enderror">

                @if ($pesertadidik->csSd->scan_kk)
                    <img class="d-flex mx-auto mb-3" src="{{ asset("dokumen/sd/" . $pesertadidik->csSd->scan_kk) }}" alt="{{ $pesertadidik->csSd->scan_kk }}">
                @endif
            </div>

            <div class="row">
                <div class="col-md-5 border">Scan Ijazah PAUD/TK (jika berasal dari PAUD/TK)</div>
                <div id="scan_ijazah" class="col-sm-8 @error('scan_ijazah') </div>is-invalid @enderror">

                @if ($pesertadidik->csSd->scan_ijazah)
                    <img class="d-flex mx-auto mb-3" src="{{ asset("dokumen/sd/" . $pesertadidik->csSd->scan_ijazah) }}" alt="{{ $pesertadidik->csSd->scan_ijazah }}">
                @endif
            </div>

            <div class="row">
                <div class="col-md-5 border">Scan KKS</div>
                <div id="scan_kks" class="col-sm-8 @error('scan_kks') is-invalid </div>@enderror">

                @if ($pesertadidik->csSd->scan_kks)
                    <img class="d-flex mx-auto mb-3" src="{{ asset("dokumen/sd/" . $pesertadidik->csSd->scan_kks) }}" alt="{{ $pesertadidik->csSd->scan_kks }}">
                @endif
            </div>

            <div class="row">
                <div class="col-md-5 border">Scan KPS</div>
                <div id="scan_kps" class="col-sm-8 @error('scan_kps') is-invalid </div>@enderror">

                @if ($pesertadidik->csSd->scan_kps)
                    <img class="d-flex mx-auto mb-3" src="{{ asset("dokumen/sd/" . $pesertadidik->csSd->scan_kps) }}" alt="{{ $pesertadidik->csSd->scan_kps }}">
                @endif
            </div>

            <div class="row">
                <div class="col-md-5 border">Scan KIP</div>
                <div id="scan_kip" class="col-sm-8 @error('scan_kip') is-invalid </div>@enderror">

                @if ($pesertadidik->csSd->scan_kip)
                    <img class="d-flex mx-auto mb-3" src="{{ asset("dokumen/sd/" . $pesertadidik->csSd->scan_kip) }}" alt="{{ $pesertadidik->csSd->scan_kip }}">
                @endif
            </div>

        </div>
    </div>
    <div class="card-footer">
        <form action="/admin/sd/verifikasi-data/{{ $pesertadidik->id }}" method="POST">
        @csrf
        @method('PUT')
            <div class="d-flex justify-content-around">
                <label for="is_data_verified" class="form-label">Jika data telah valid maka pilih 'Terverifikas'. Jika ada yang salah maka pilih 'Data salah' dan berikan pesan kepada calon.</label>
                    <div class="row">
                        <select name="is_data_verified" id="is_data_verified" class="form-control col-4">    
                            <option @if($pesertadidik->is_data_verified == 1) selected @endif disabled value=1>Belum terverifikas</option>
                            <option @if($pesertadidik->is_data_verified == 2) selected @endif value=2>Terverifikas</option>
                            <option @if($pesertadidik->is_data_verified == 3) selected @endif value=3>Data salah</option>
                        </select>
                        {{-- <textarea rows="1" placeholder="Batas 300 huruf" name="isi" id="isi" class="form-control col-8"></textarea>
                        <div value="{{ $user->id }}" id="from" name="from" hidden></label> --}}
                    </div>
                </div>
                <div>
                    <button class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection