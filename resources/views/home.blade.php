@extends('layouts.app')

@section('content')
    <div class="justify-content-center">
            <div class="card">
                <h4 class="card-header text-center">Selamat Datang Calon Peserta Didik Baru</h4>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
    </div>
@endsection
