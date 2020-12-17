@extends('layouts.app')


@section('content')
<div class="container">
    <div class="my-auto">
        <div class="card border-width-2">
            <div class="card-header text-center">
                <h3>Silahkan Pilih Sekolah Tujuan Anda !</h3>
            </div>
            <div class="row">

                {{-- TK --}}
                <div class="col-6 text-center border-right">
                    <div class="card">
                        <img class="card-img-top" height="366" src="{{ asset('/picture/siswa2-tk.jpg') }}" alt="foto TK Ananda UT" style=" object-fit:cover; object-position: center">
                        <div class="card-body">
                            <div class="card-text">
                                <h5>TK Ananda UT</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error perferendis sit, aspernatur quae vitae illum quaerat ea? Mollitia, quibusdam? Sint velit enim voluptatum fugiat! Molestias, accusantium! Adipisci ipsum reiciendis voluptate quos vitae inventore doloremque? Minus harum deleniti, rem maxime voluptas laudantium, quas veritatis ullam molestias, placeat excepturi laborum sint dicta!</p>
                                <div class="text-center">
                                    <form action="/calon/siswa/update/{{ $user->id }}" method="post">
                                        @csrf
                                        @method('PATCH')
                                        <input type="hidden" name="status" value=1>
                                        <button type="submit" class="btn btn-success border-white" style="width: 50%">Daftar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- SD --}}
                <div class="col-6 text-center">
                    <div class="card border-danger">
                        <img class="card-img-top" src="{{ asset('/picture/siswa2-sd.jpg') }}" alt="foto TK Ananda UT">
                        <div class="card-body">
                            <div class="card-text">
                                <h5>SD Dharma Karya</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error perferendis sit, aspernatur quae vitae illum quaerat ea? Mollitia, quibusdam? Sint velit enim voluptatum fugiat! Molestias, accusantium! Adipisci ipsum reiciendis voluptate quos vitae inventore doloremque? Minus harum deleniti, rem maxime voluptas laudantium, quas veritatis ullam molestias, placeat excepturi laborum sint dicta!</p>
                                <div class="text-center">
                                    <form action="/calon/siswa/update/{{ $user->id }}" method="post">
                                        @csrf
                                        @method('PATCH')
                                        <input type="hidden" name="status" value=2>
                                        <button type="submit" class="btn btn-danger border-white" style="width: 50%">Daftar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- SMP --}}
                <div class="col-6 text-center border-right mb-3">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('/picture/siswa2-smp.jpg') }}" alt="foto SMP Dharma Karya">
                        <div class="card-body">
                            <div class="card-text">
                                <h5>SMP Dharma Karya</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error perferendis sit, aspernatur quae vitae illum quaerat ea? Mollitia, quibusdam? Sint velit enim voluptatum fugiat! Molestias, accusantium! Adipisci ipsum reiciendis voluptate quos vitae inventore doloremque? Minus harum deleniti, rem maxime voluptas laudantium, quas veritatis ullam molestias, placeat excepturi laborum sint dicta!</p>
                                <div class="text-center">
                                    <form action="/calon/siswa/update/{{ $user->id }}" method="post">
                                        @csrf
                                        @method('PATCH')
                                        <input type="hidden" name="status" value=3>
                                        <button type="submit" class="btn text-white border-light bg-blue" style="width: 50%;">Daftar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                {{-- SMA --}}
                <div class="col-6 text-center mb-3">
                    <div class="card border-danger">
                        <img class="card-img-top" src="{{ asset('/picture/siswa2-sma.jpg') }}" alt="foto SMA Ananda UT">
                        <div class="card-body">
                            <div class="card-text">
                                <h5>SMA Dharma Karya</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error perferendis sit, aspernatur quae vitae illum quaerat ea? Mollitia, quibusdam? Sint velit enim voluptatum fugiat! Molestias, accusantium! Adipisci ipsum reiciendis voluptate quos vitae inventore doloremque? Minus harum deleniti, rem maxime voluptas laudantium, quas veritatis ullam molestias, placeat excepturi laborum sint dicta!</p>
                                <div class="text-center">
                                    <form action="/calon/siswa/update/{{ $user->id }}" method="post">
                                        @csrf
                                        @method('PATCH')
                                        <input type="hidden" name="status" value=4>
                                        <button type="submit" class="btn btn-secondary border-light" style="width: 50%">Daftar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection