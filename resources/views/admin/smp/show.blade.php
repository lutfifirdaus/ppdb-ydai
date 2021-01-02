@extends('admin.layouts.app')

@section('header.content')
    <h2 class="text-center mt-3">Data {{ $pesertadidik->csSmp->nama_pd }}</h2>
@endsection

@section('main.content')
<div class="card">
    <div class="card-body" style="font-size:1rem">
        <div class="row text-left p-3">
											
            <div class="col-md-6">
                
                <div class="mb-3 ml-3"><b><h4>DATA PRIBADI</h4></b>
            
                    <div class="row">
                        <div class="col-md-5 border">Nama Lengkap</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csSmp->nama_pd }} </div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 border">Jenis Kelamin</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csSmp->jenis_kelamin }}
                    </div>

                    <div class="row">
                        <div class="col-md-5 border">Tempat, Tanggal Lahir</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csSmp->tempat_lahir }},{{ $pesertadidik->csSmp->tanggal_lahir }}</div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 border">Agama</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csSmp->agama }}</div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 border">Kewarganegaraan</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csSmp->kewarganegaraan }} </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-5 border">Moda Transportasi</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csSmp->moda_transportasi }} </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-5 border">Anak ke</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csSmp->anak_ke }} </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-5 border">Apakah punya KIP</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csSmp->punya_kip }} </div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 border">Apakah peserta didik tersebut tetap akan menerima KIP</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csSmp->tetap_menerima_kip }} </div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 border">Alasan Menolak PIP</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csSmp->alasan_menolak_pip }} Kg</div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 border">Tinggi Badan</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csSmp->tinggi }} Cm</div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 border">Penyakit yang Pernah Diderita</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csSmp->penyakit }} </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-5 border">Nomor Telepon</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csSmp->telp_pd }} </div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 border">Bertempat Tinggal Pada</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csSmp->tempat_tinggal }}</div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 border">Kegemaran/Hobi</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csSmp->hobi }} </div>
                    </div>
                </div>

                <div class="mb-3 ml-3"><b><h4>KONTAK</h4></b>
    
                    <div class="row">
                        <div class="col-md-5 border">Nomor Handphone</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csSmp->no_hp }}</div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 border">Nomor Telepon Rumah</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csSmp->no_telp_rumah }}</div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 border">Email</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csSmp->email }}</div>
                    </div>

                </div>
                
                <div class="mb-3 ml-3"><b><h4>DATA PERIODIK</h4></b>
        
                    <div class="row">
                        <div class="col-md-5 border">Berat Badan</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csSmp->berat }}</div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 border">Tinggi Badan</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csSmp->tinggi }}</div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 border">lingkar Kepala</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csSmp->lingkar_kepala }}</div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 border" class="col-12">Jarak Ke Sekolah</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csSmp->jarak_kesekolah . $pesertadidik->csSmp->rincian_jarak }}</div>
                                    
                    </div>

                    <div class="row">
                        <div class="col-md-5 border">Waktu Tempuh Ke Sekolah</div>
                        <div  class="col-md-7 border"{{ $pesertadidik->csSmp->waktu_kesekolah }}></div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-5 border">Banyak Saudara Kandung</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csSmp->banyak_saudara_kandung }}</div>
                    </div>
                </div>

                <div class="mb-3 ml-3"><b><h4>KESEJAHTERAAN PESERTA DIDIK</h4></b>

                    <div class="row">
                        <div class="col-md-5 border">Jenis Kesejahteraan</div>
                        
                    </div>

                    <div class="row">
                        <div class="col-md-5 border">No. Kartu</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csSmp->no_kartu }}</div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 border">Nama di Kartu</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csSmp->nama_dikartu }}</div>
                    </div>

                </div>

                <div class="mb-3 ml-3"><b><h4>PRESTASI</h4></b>
                    
                    <div class="row">
                        <div class="col-md-5 border">Jenis</div>
                        <div class="com-md-8">{{ $pesertadidik->prestasi->jenis }}</div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 border">Tingkat</div>
                        <div class="com-md-8">{{ $pesertadidik->prestasi->tingkat }}</div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 border">Nama Prestasi</div>
                        <div class="col-md-7 border">{{ $pesertadidik->prestasi->nama_prestasi }}</div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 border">Tahun</div>
                        <div class="col-md-7 border">{{ $pesertadidik->prestasi->tahun }}</div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 border">Penyelenggara</div>
                        <div class="col-md-7 border">{{ $pesertadidik->prestasi->penyelenggara }}</div>
                    </div>
                </div>

            </div>
        
            <div class="col-md-6">

                <div class="mb-3 ml-3"><b><h4>DATA AYAH KANDUNG</h4></b>
        
                    <div class="row">
                        <div class="col-md-5 border">Nama Lengkap</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csSmp->nama_ayah }}</div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 border">NIK Ayah</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csSmp->nik_ayah }}</div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-5 border">Tahun Lahir</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csSmp->lahir_ayah }}</div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-5 border">Pendidikan</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csSmp->pendidikan_ayah }}</div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-5 border">Pekerjaan</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csSmp->pekerjaan_ayah }}</div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 border">Penghasilan Bulanan</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csSmp->penghasilan_ayah }}</div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 border">Berkebutuhan Khusus</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csSmp->kebutuhan_khusus_ayah }}</div>
                    </div>
                </div>

                <div class="mb-3 ml-3"><b><h4>DATA IBU KANDUNG</h4></b>
        
                    <div class="row">
                        <div class="col-md-5 border">Nama Lengkap</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csSmp->nama_ibu }}</div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 border">NIK Ibu</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csSmp->nik_ibu }}</div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-5 border">Tahun Lahir</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csSmp->lahir_ibu }}</div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-5 border">Pendidikan</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csSmp->pendidikan_ibu }}</div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-5 border">Pekerjaan</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csSmp->pekerjaan_ibu }}</div>
                    </div>

                    <div class="row">
                        <div forclass="col-md-5 border">Penghasilan Bulanan</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csSmp->penghasilan_ibu }}</div>
                    </div>

                    <div class="row">
                        <div forclass="col-md-5 border">Berkebutuhan Khusus</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csSmp->kebutuhan_khusus_ibu }}</div>
                    </div>
                </div>

                <div class="mb-3 ml-3"><b><h4>DATA WALI</h4></b>
        
                    <div class="row">
                        <div class="col-md-5 border">Nama Lengkap</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csSmp->nama_wali }}</div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 border">NIK Wali</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csSmp->nik_wali }}</div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-5 border">Tahun Lahir</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csSmp->lahir_wali }}</div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-5 border">Pendidikan</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csSmp->pendidikan_wali }}</div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-5 border">Pekerjaan</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csSmp->pekerjaan_wali }}</div>
                    </div>

                    <div class="row">
                        <div forclass="col-md-5 border">Penghasilan Bulanan</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csSmp->penghasilan_wali }}</div>
                    </div>

                </div>

                <div class="mb-3 ml-3"><b><h4>REGISTRASI PD</h4></b>
        
                    <div class="row">
                        <div class="col-md-5 border">Kompetensi Keahilan</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csSmp->kompetensi_keahlian }}</div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 border">Jenis Pendaftaran</div>
                        <div class="col-md-5 border">{{ $pesertadidik->csSmp->jenis_pendaftaran }}</div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 border">NIS/Nomor Induk PD</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csSmp->nis }}</div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 border">Tanggal Masuk</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csSmp->tgl_masuk }}</div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 border">Sekolah Asal</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csSmp->asal_sekolah }}</div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 border">No. Peserta UN SMP/MTs</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csSmp->no_un }}</div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 border">No. Seri Ijazah SMP/MTs</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csSmp->no_ijazah }}</div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 border">No. Seri SKHUN SMP/MTs</div>
                        <div class="col-md-7 border">{{ $pesertadidik->csSmp->no_skhun }}</div>
                    </div>

                </div>

                <div class="mb-3 ml-3"><b><h4>BEASISWA</h4></b>
                    
                    <div class="row">
                        <div class="col-md-5 border">Jenis</div>
                        <div class="col-md-5 border">{{ $pesertadidik->prestasi->jenis_beasiswa }}</div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 border">Keterangan</div>
                        <div class="col-md-7 border">{{ $pesertadidik->prestasi->keterangan }}</div>
                        keterangan lain yang relevan</small>
                    </div>

                    <div class="row">
                        <div class="col-md-5 border">Tahun Mulai</div>
                        <div class="col-md-7 border">{{ $pesertadidik->prestasi->tahun_mulai }}</div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 border">Tahun Selesai</div>
                        <div class="col-md-7 border">{{ $pesertadidik->prestasi->tahun_selesai }}</div>
                    </div>

                </div>

            </div>
        </div>
        
        <div class="mb-3 ml-3 text-center"><b><h4>DOKUMEN</h4></b>
                                            
            <div class="text-left">Pas Foto 3 X 4</div>
            <img class="d-flex mx-auto mb-3" src="{{ asset('dokumen/smp/' . $pesertadidik->csSmp->foto_pd) }}" alt="{{ $pesertadidik->csSmp->foto_pd }}">
        
            <div class="text-left">Scan Ijazah SMP/MTs</div>
            <img class="d-flex mx-auto mb-3" src="{{ asset('dokumen/smp/' . $pesertadidik->csSmp->scan_ijazah) }}" alt="{{ $pesertadidik->csSmp->scan_ijazah }}">
        
            <div class="text-left">Scan SKHUN SMP/MTs</div>
            <img class="d-flex mx-auto mb-3" src="{{ asset('dokumen/smp/' . $pesertadidik->csSmp->scan_skhun) }}" alt="{{ $pesertadidik->csSmp->scan_skhun }}">
            
        </div>
    </div>
    <div class="card-footer">
        <form action="/admin/smp/verifikasi-data/{{ $pesertadidik->id }}" method="POST">
        @csrf
        @method('PUT')
            <div class="d-flex justify-content-around">
                <div class="form-group">
                    {{-- <label for="is_data_verified" class="form-label">Jika data telah valid maka pilih 'Terverifikas'. Jika ada yang salah maka pilih 'Data salah' dan berikan pesan kepada calon.</label> --}}
                    <div class="row">
                        <select name="is_data_verified" id="is_data_verified" class="form-control col-4">    
                            <option @if($pesertadidik->is_data_verified == 1) selected @endif disabled value=1>Belum terverifikas</option>
                            <option @if($pesertadidik->is_data_verified == 2) selected @endif value=2>Terverifikas</option>
                            <option @if($pesertadidik->is_data_verified == 3) selected @endif value=3>Data salah</option>
                        </select>
                        {{-- <textarea rows="1" placeholder="Batas 300 huruf" name="isi" id="isi" class="form-control col-8"></textarea>
                        <input value="{{ $user->id }}" id="from" name="from" hidden> --}}
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