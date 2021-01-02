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
                    <th scope="col">jenis Kelamin</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Data Terverifikasi</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($calon_siswa_sds as $pesertadidik)
                @if ($pesertadidik->user->is_data_verified == 1)
                    <tr>
                    <td>{{ $pesertadidik->user->no_registrasi }}</td>
                    <td>{{ $pesertadidik->nama_pd }}</td>
                    <td>{{ $pesertadidik->jenis_kelamin }}</td>
                    <td>{{ $pesertadidik->alamat_pd }}</td>
                    <td>
                        <a href="/admin/sd/verifikasi-data/show/{{ $pesertadidik->user->id }}">
                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModalLong">
                                Belum Terverifikasi
                            </button>
                        </a>
                    </td>
                    <td class="text-center">
                @endif
                @endforeach
                    </td>
                    </tr>
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
            {{ $calon_siswa_sds->links() }}
            </div>
        </div>
    </div>
</div>
@endsection