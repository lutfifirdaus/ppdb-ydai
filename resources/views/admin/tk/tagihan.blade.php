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
                        <form class="form-inline my-2 my-lg-0" action="{{ route('admin.page') }}" method="GET"
                            role="search">
                            <input class="form-control mr-sm-2" type="search" name="search" placeholder="Cari Peserta Didik"
                                aria-label="Search">
                            <button class="btn btn-outline-dark my-2 my-sm-0" type="submit"><i
                                    class="fas fa-search mr-1"></i>Cari</button>
                        </form>
                    </div>
                    {{-- <div class="d-flex justify-content-center">
                        <div>
                            <button type="button" class="btn btn-outline-danger mr-3" data-toggle="modal"
                                data-target="#importExcel"><i class="fas fa-file-import mr-1"></i>
                                Import Data Siswa
                            </button>

                            <!-- Import Excel -->
                            <div class="modal fade" id="importExcel" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <form method="post" action="/peserta-didik/import/" enctype="multipart/form-data">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
                                            </div>
                                            <div class="modal-body">

                                                {{ csrf_field() }}

                                                <label>Pilih file excel</label>
                                                <div class="form-group">
                                                    <input type="file" name="file" required="required">
                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-dismiss="modal">Tutup</button>
                                                <button type="submit" class="btn btn-outline-primary">Import</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div>
                            <a href="peserta-didik/export/" class="btn btn-outline-success mr-3"><i
                                    class="fas fa-file-import mr-1 fa-flip-horizontal"></i>Export Data</a>
                        </div>
                        <div>
                            <a href="/peserta-didik/create" class="btn btn-outline-primary"><i
                                    class="fas fa-plus-circle mr-1"></i>Tambah Data</a>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table text-center">
                <thead>
                    <tr>
                        <th scope="col">ID Registrasi</th>
                        <th scope="col">Nama Lengkap</th>
                        <th scope="col">No Billing</th>
                        <th scope="col">Status Pembayaran</th>
                        <th scope="col">Tanggal Pembayaran</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($calon_siswa_tks as $pesertadidik)
                        <tr>
                            <td>{{ $pesertadidik->user->no_registrasi }}</td>
                            <td>{{ $pesertadidik->nama_pd }}</td>
                            <td>{{ $pesertadidik->user->billing->no_billing }}</td>
                            <td>{{ $pesertadidik->user->billing->status_bayar }} @if($pesertadidik->user->billing->jenis_pembayaran != null) . {{ $pesertadidik->user->billing->jenis_pembayaran }}@endif</td>
                            <td>{{ $pesertadidik->user->billing->tanggal_bayar }}</td>
                            <td>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {{ $calon_siswa_tks->links() }}
            </div>
        </div>
    </div>
    </div>
@endsection
