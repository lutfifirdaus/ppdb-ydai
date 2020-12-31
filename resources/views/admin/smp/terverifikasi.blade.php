@extends('admin.layouts.app')

@section('header.content')
<h2 class="text-center mt-3">Daftar Calon Peserta Didik SMA Dharma Karya</h2>
@endsection

@section('main.content')
<div class="card">
    <div class="card-body">
            <div class="card-title">
                <div class="d-flex mt-5">
                    <div style="margin-right: 350px">
                        <form class="form-inline my-2 my-lg-0" action="{{ route('admin.page') }}" method="GET" role="search">
                        <input class="form-control mr-sm-2" type="search" name="search" placeholder="Cari Peserta Didik" aria-label="Search">
                        <button class="btn btn-outline-dark my-2 my-sm-0" type="submit"><i class="fas fa-search mr-1"></i>Cari</button>
                        </form>
                    </div>
                </div>
            </div>
            </div>
            <div class="card-body">
            <table class="table text-center">
                <thead>
                <tr>
                    <th scope="col">ID Registrasi</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">No Telp/HP</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Data Terverifikasi</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($calon_siswa_smps as $pesertadidik)
                @if($pesertadidik->user->is_data_verified == 2)
                <tr>
                    <td>{{ $pesertadidik->user->no_registrasi }}</td>
                    <td>{{ $pesertadidik->nama_pd }}</td>
                    <td>{{ $pesertadidik->no_hp }}</td>
                    <td>{{ $pesertadidik->alamat_pd }}</td>
                    <td>
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalLong">
                        Terverifikasi
                        </button>
                        <!-- Modal -->
                            <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                <div class="modal-dialog modal-xl" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">{{ $pesertadidik->nama_pd }}</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body" style="font-size:1rem">
                                        <div class="row text-left">
											
											<div class="col-md-6">
                                                
                                                <div class="mb-3 ml-3"><b><h4>DATA PRIBADI</h4></b>
                                            
                                                    <div class="row">
                                                        <div class="col-md-4">Nama Lengkap</div>
                                                        <div class="col-md-8">{{ $pesertadidik->nama_pd }} </div>
                                                    </div>
                    
                                                    <div class="row">
                                                        <div class="col-md-4">Jenis Kelamin</div>
														<div class="col-md-8">{{ $pesertadidik->jenis_kelamin }}
													</div>

                                                    <div class="row">
                                                        <div class="col-md-4">Tempat, Tanggal Lahir</div>
                                                        <div class="col-md-8">{{ $pesertadidik->tempat_lahir }},{{ $pesertadidik->tanggal_lahir }}</div>
                                                    </div>																																	</div>
																																																				
                                                    <div class="row">
                                                        <div class="col-md-4">Agama</div>
                                                        <div class="col-md-8">{{ $pesertadidik->agama }}</div>
                                                    </div>
                    
                                                    <div class="row">
                                                        <div class="col-md-4">Kewarganegaraan</div>
                                                        <div class="col-md-8">{{ $pesertadidik->kewarganegaraan }} </div>
													</div>
													
                                                    <div class="row">
                                                        <div class="col-md-4">Moda Transportasi</div>
                                                        <div class="col-md-8">{{ $pesertadidik->moda_transportasi }} </div>
                                                    </div>
                                                    
                                                    <div class="row">
                                                        <div class="col-md-4">Anak ke</div>
                                                        <div class="col-md-8">{{ $pesertadidik->anak_ke }} </div>
                                                    </div>
                                                    
                                                    <div class="row">
                                                        <div class="col-md-4">Apakah punya KIP</div>
                                                        <div class="col-md-8">{{ $pesertadidik->punya_kip }} </div>
                                                    </div>
                    
                                                    <div class="row">
                                                        <div class="col-md-4">Apakah peserta didik tersebut tetap akan menerima KIP</div>
                                                        <div class="col-md-8">{{ $pesertadidik->tetap_menerima_kip }} </div>
                                                    </div>
                    
                                                    <div class="row">
                                                        <div class="col-md-4">Alasan Menolak PIP</div>
                                                        <div class="col-md-8">{{ $pesertadidik->alasan_menolak_pip }} Kg</div>
                                                    </div>
                    
                                                    <div class="row">
                                                        <div class="col-md-4">Tinggi Badan</div>
                                                        <div class="col-md-8">{{ $pesertadidik->tinggi }} Cm</div>
                                                    </div>
                    
                                                    <div class="row">
                                                        <div class="col-md-4">Penyakit yang Pernah Diderita</div>
                                                        <div class="col-md-8">{{ $pesertadidik->penyakit }} </div>
                                                    </div>
                                                    
                                                    <div class="row">
                                                        <div class="col-md-4">Nomor Telepon</div>
                                                        <div class="col-md-8">{{ $pesertadidik->telp_pd }} </div>
                                                    </div>
                    
                                                    <div class="row">
                                                        <div class="col-md-4">Bertempat Tinggal Pada</div>
                                                        <div class="col-md-8">{{ $pesertadidik->tempat_tinggal }}</div>
                                                    </div>
                    
                                                    <div class="row">
                                                        <div class="col-md-4">Kegemaran/Hobi</div>
                                                        <div class="col-md-8">{{ $pesertadidik->hobi }} </div>
                                                    </div>
                                                </div>
			
												<div class="mb-3 ml-3"><b><h4>KONTAK</h4></b>
                                    
													<div class="row">
														<div class="col-md-4">Nomor Handphone</div>
														<div class="col-md-8">{{ $pesertadidik->no_hp }}</div>
													</div>
			
													<div class="row">
														<div class="col-md-4">Nomor Telepon Rumah</div>
														<div class="col-md-8">{{ $pesertadidik->no_telp_rumah }}</div>
													</div>
			
													<div class="row">
														<div class="col-md-4">Email</div>
														<div class="col-md-8">{{ $pesertadidik->email }}</div>
													</div>
			
												</div>
                                                
                                                <div class="mb-3 ml-3"><b><h4>DATA PERIODIK</h4></b>
                                        
													<div class="row">
														<div class="col-md-4">Berat Badan</div>
														<div class="col-md-8">{{ $pesertadidik->berat }}</div>
													</div>
			
													<div class="row">
														<div class="col-md-4">Tinggi Badan</div>
														<div class="col-md-8">{{ $pesertadidik->tinggi }}</div>
													</div>
			
													<div class="row">
														<div class="col-md-4">lingkar Kepala</div>
														<div class="col-md-8">{{ $pesertadidik->lingkar_kepala }}</div>
													</div>
			
													<div class="row">
														<div class="col-md-4" class="col-12">Jarak Ke Sekolah</div>
														<div class="col-md-8">{{ $pesertadidik->jarak_kesekolah . $pesertadidik->rincian_jarak }}</div>
																	
													</div>
			
													<div class="row">
														<div class="col-md-4">Waktu Tempuh Ke Sekolah</div>
														<div  class="col-md-8"{{ $pesertadidik->waktu_kesekolah }}></div>
													</div>
													
													<div class="row">
														<div class="col-md-4">Banyak Saudara Kandung</div>
														<div class="col-md-8">{{ $pesertadidik->banyak_saudara_kandung }}</div>
													</div>
												</div>

												<div class="mb-3 ml-3"><b><h4>KESEJAHTERAAN PESERTA DIDIK</h4></b>

													<div class="row">
														<div class="col-md-4">Jenis Kesejahteraan</div>
														
													</div>
			
													<div class="row">
														<div class="col-md-4">No. Kartu</div>
														<div class="col-md-8">{{ $pesertadidik->no_kartu }}</div>
													</div>
			
													<div class="row">
														<div class="col-md-4">Nama di Kartu</div>
														<div class="col-md-8">{{ $pesertadidik->nama_dikartu }}</div>
													</div>

												</div>

												<div class="mb-3 ml-3"><b><h4>PRESTASI</h4></b>
												@foreach($pesertadidik->user->prestasi)
													
													<div class="row">
														<div class="col-md-4">Jenis</div>
														<div class="com-md-8">{{ $pesertadidik->jenis }}</div>
													</div>
			
													<div class="row">
														<div class="col-md-4">Tingkat</div>
														<div class="com-md-8">{{ $pesertadidik->tingkat }}</div>
													</div>
			
													<div class="row">
														<div class="col-md-4">Nama Prestasi</div>
														<div class="col-md-8">{{ $pesertadidik->nama_prestasi }}</div>
													</div>
			
													<div class="row">
														<div class="col-md-4">Tahun</div>
														<div class="col-md-8">{{ $pesertadidik->tahun }}</div>
													</div>
			
													<div class="row">
														<div class="col-md-4">Penyelenggara</div>
														<div class="col-md-8">{{ $pesertadidik->penyelenggara }}</div>
													</div>
												@endforeach
												</div>

                                            </div>
                                        
                                            <div class="col-md-6">
            
                                                <div class="mb-3 ml-3"><b><h4>DATA AYAH KANDUNG</h4></b>
                                        
													<div class="row">
														<div class="col-md-4">Nama Lengkap</div>
														<div class="col-md-8">{{ $pesertadidik->nama_ayah }}</div>
													</div>
			
													<div class="row">
														<div class="col-md-4">NIK Ayah</div>
														<div class="col-md-8">{{ $pesertadidik->nik_ayah }}</div>
													</div>
													
													<div class="row">
														<div class="col-md-4">Tahun Lahir</div>
														<div class="col-md-8">{{ $pesertadidik->lahir_ayah }}</div>
													</div>
													
													<div class="row">
														<div class="col-md-4">Pendidikan</div>
														<div class="col-md-8">{{ $pesertadidik->pendidikan_ayah }}</div>
													</div>
													
													<div class="row">
														<div class="col-md-4">Pekerjaan</div>
														<div class="col-md-8">{{ $pesertadidik->pekerjaan_ayah }}</div>
													</div>
			
													<div class="row">
														<div forclass="col-md-4">Penghasilan Bulanan</div>
														<div class="col-md-8">{{ $pesertadidik->penghasilan_ayah }}</div>
													</div>
			
													<div class="row">
														<div forclass="col-md-4">Berkebutuhan Khusus</div>
														<div class="col-md-8">{{ $pesertadidik->kebutuhan_khusus_ayah }}</div>
													</div>
												</div>

												<div class="mb-3 ml-3"><b><h4>DATA IBU KANDUNG</h4></b>
                                        
													<div class="row">
														<div class="col-md-4">Nama Lengkap</div>
														<div class="col-md-8">{{ $pesertadidik->nama_ibu }}</div>
													</div>
			
													<div class="row">
														<div class="col-md-4">NIK Ibu</div>
														<div class="col-md-8">{{ $pesertadidik->nik_ibu }}</div>
													</div>
													
													<div class="row">
														<div class="col-md-4">Tahun Lahir</div>
														<div class="col-md-8">{{ $pesertadidik->lahir_ibu }}</div>
													</div>
													
													<div class="row">
														<div class="col-md-4">Pendidikan</div>
														<div class="col-md-8">{{ $pesertadidik->pendidikan_ibu }}</div>
													</div>
													
													<div class="row">
														<div class="col-md-4">Pekerjaan</div>
														<div class="col-md-8">{{ $pesertadidik->pekerjaan_ibu }}</div>
													</div>
			
													<div class="row">
														<div forclass="col-md-4">Penghasilan Bulanan</div>
														<div class="col-md-8">{{ $pesertadidik->penghasilan_ibu }}</div>
													</div>
			
													<div class="row">
														<div forclass="col-md-4">Berkebutuhan Khusus</div>
														<div class="col-md-8">{{ $pesertadidik->kebutuhan_khusus_ibu }}</div>
													</div>
												</div>

												<div class="mb-3 ml-3"><b><h4>DATA WALI</h4></b>
                                        
													<div class="row">
														<div class="col-md-4">Nama Lengkap</div>
														<div class="col-md-8">{{ $pesertadidik->nama_wali }}</div>
													</div>
			
													<div class="row">
														<div class="col-md-4">NIK Wali</div>
														<div class="col-md-8">{{ $pesertadidik->nik_wali }}</div>
													</div>
													
													<div class="row">
														<div class="col-md-4">Tahun Lahir</div>
														<div class="col-md-8">{{ $pesertadidik->lahir_wali }}</div>
													</div>
													
													<div class="row">
														<div class="col-md-4">Pendidikan</div>
														<div class="col-md-8">{{ $pesertadidik->pendidikan_wali }}</div>
													</div>
													
													<div class="row">
														<div class="col-md-4">Pekerjaan</div>
														<div class="col-md-8">{{ $pesertadidik->pekerjaan_wali }}</div>
													</div>
			
													<div class="row">
														<div forclass="col-md-4">Penghasilan Bulanan</div>
														<div class="col-md-8">{{ $pesertadidik->penghasilan_wali }}</div>
													</div>
		
												</div>
			
												<div class="mb-3 ml-3"><b><h4>REGISTRASI PD</h4></b>
                                        
													<div class="row">
														<div class="col-md-4">Kompetensi Keahilan</div>
														<div class="col-md-8">{{ $pesertadidik->kompetensi_keahlian }}</div>
													</div>
			
													<div class="row">
														<div class="col-md-4">Jenis Pendaftaran</div>
														<div class="col-md-4">{{ $pesertadidik->jenis_pendaftaran }}</div>
													</div>
			
													<div class="row">
														<div class="col-md-4">NIS/Nomor Induk PD</div>
														<div class="col-md-8">{{ $pesertadidik->nis }}</div>
													</div>
			
													<div class="row">
														<div class="col-md-4">Tanggal Masuk</div>
														<div class="col-md-8">{{ $pesertadidik->tgl_masuk }}</div>
													</div>
			
													<div class="row">
														<div class="col-md-4">Sekolah Asal</div>
														<div class="col-md-8">{{ $pesertadidik->asal_sekolah }}</div>
													</div>
			
													<div class="row">
														<div class="col-md-4">No. Peserta UN SMP/MTs</div>
														<div class="col-md-8">{{ $pesertadidik->no_un }}</div>
													</div>
			
													<div class="row">
														<div class="col-md-4">No. Seri Ijazah SMP/MTs</div>
														<div class="col-md-8">{{ $pesertadidik->no_ijazah }}</div>
													</div>
			
													<div class="row">
														<div class="col-md-4">No. Seri SKHUN SMP/MTs</div>
														<div class="col-md-8">{{ $pesertadidik->no_skhun }}</div>
													</div>
			
												</div>

												<div class="mb-3 ml-3"><b><h4>BEASISWA</h4></b>
												@foreach($pesertadidik->user->prestasi as $pesertadidik)
													
													<div class="row">
														<div class="col-md-4">Jenis</div>
														<div class="col-md-4">{{ $pesertadidik->jenis_beasiswa }}</div>
													</div>
			
													<div class="row">
														<div class="col-md-4">Keterangan</div>
														<div class="col-md-8">{{ $pesertadidik->keterangan }}</div>
														keterangan lain yang relevan</small>
													</div>
			
													<div class="row">
														<div class="col-md-4">Tahun Mulai</div>
														<div class="col-md-8">{{ $pesertadidik->tahun_mulai }}</div>
													</div>
			
													<div class="row">
														<div class="col-md-4">Tahun Selesai</div>
														<div class="col-md-8">{{ $pesertadidik->tahun_selesai }}</div>
													</div>
			
												</div>

                                            </div>
                                        </div>
                                        
                                        <div class="mb-3 ml-3 text-center"><b><h4>DOKUMEN</h4></b>
                                            
                                            <div class="text-left">Pas Foto 3 X 4</div>
                                            <img class="d-flex mx-auto mb-3" src="{{ asset('dokumen/smp/' . $pesertadidik->foto_pd) }}" alt="{{ $pesertadidik->foto_pd }}">
                                        
                                            <div class="text-left">Scan Ijazah SMP/MTs</div>
                                            <img class="d-flex mx-auto mb-3" src="{{ asset('dokumen/smp/' . $pesertadidik->scan_ijazah) }}" alt="{{ $pesertadidik->scan_ijazah }}">
                                        
                                            <div class="text-left">Scan SKHUN SMP/MTs</div>
                                            <img class="d-flex mx-auto mb-3" src="{{ asset('dokumen/smp/' . $pesertadidik->scan_skhun) }}" alt="{{ $pesertadidik->scan_skhun }}">
                                            
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <form action="/admin/smp/verifikasi-data/{{ $pesertadidik->user->id }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <select name="is_data_verified" id="is_data_verified">    
                                                <option @if($pesertadidik->user->is_data_verified == 2) selected @endif value=2>Terverifikas</option>
                                                <option @if($pesertadidik->user->is_data_verified == 3) selected @endif value=3>Data salah</option>
                                        </select>
                                        <button type="button submit" class="btn btn-primary">Save changes</button>
                                        </form>
                                    </div>
                                </div>
                                </div>
                            </div>
                    </td>
                    <td class="text-center">
                    </td>
                </tr>
                @endif
                @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
            {{ $calon_siswa_smps->links() }}
            </div>
        </div>
    </div>
</div>
@endsection