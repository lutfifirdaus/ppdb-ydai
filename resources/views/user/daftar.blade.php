@extends('layouts.app')


@section('content')
    <div class="my-auto">
        <div class="card">
            <div class="card-header text-center text-white bg-primary">
                <h3>Silahkan Pilih Sekolah Tujuan Anda !</h3>
            </div>
            <div class="card-columns d-flex d-inline-block m-3">
                <div class="card bg-success">
                    <img class="card-img-top" src="{{ asset('picture/logo-dk.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title text-center">TK Ananda UT</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="text-center">
                            <form action="/calon/siswa/update/{{ $user->id }}" method="post">
                                @csrf
                                @method('PATCH')
                                <input type="hidden" name="status" value=1>
                                <button type="submit" class="btn btn-success border-white" style="width: 50%">Daftar</button>
                            </form>
                        </div>
                        {{-- <p class="card-text"><small class="text-muted"> {{ $user->count() }}</small></p> --}}
                    </div>
                </div>
                <div class="card bg-danger">
                    <img class="card-img-top" src="{{ asset('picture/logo-dk.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title text-center">SD Dharma Karya</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="text-center">
                            <form action="/calon/siswa/update/{{ $user->id }}" method="post">
                                @csrf
                                @method('PATCH')
                                <input type="hidden" name="status" value=2>
                                <button type="submit" class="btn btn-danger border-white" style="width: 50%">Daftar</button>
                            </form>
                        </div>
                        {{-- <p class="card-text"><small class="text-muted"> {{ $user->count() }}</small></p> --}}
                    </div>
                </div>
                <div class="card text-white" style="background-color: darkblue">
                    <img class="card-img-top" src="{{ asset('picture/logo-dk.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title text-center">SMP Dharma Karya</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="text-center">
                            <form action="/calon/siswa/update/{{ $user->id }}" method="post">
                                @csrf
                                @method('PATCH')
                                <input type="hidden" name="status" value=3>
                                <button type="submit" class="btn btn-secondary border-light" style="width: 50%">Daftar</button>
                            </form>
                        </div>
                        {{-- <p class="card-text"><small class="text-muted"> {{ $user->count() }}</small></p> --}}
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ asset('picture/logo-dk.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title text-center">SMA Dharma Karya</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="text-center">
                            <form action="/calon/siswa/update/{{ $user->id }}" method="post">
                                @csrf
                                @method('PATCH')
                                <input type="hidden" name="status" value=4>
                                <button type="submit" class="btn btn-primary" style="width: 50%">Daftar</button>
                            </form>
                        </div>
                        {{-- <p class="card-text"><small class="text-muted"> {{ $user->count() }}</small></p> --}}
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection