@if (session()->has('success'))
    <div class="col my-3">
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">×</button> 
            {{ session()->get('success') }}
        </div>
    </div>
@endif
@if ($errors->has('file'))
    <div class="col my-3">
        <div class="invalid-feedback" role="alert">
            <button type="button" class="close" data-dismiss="alert">×</button> 
            {{ $errors->first('file') }}
        </div>
    </div>
@endif
@if ($sukses = Session::get('sukses'))
    <div class="col my-3">
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button> 
            {{ $sukses }}
        </div>
    </div>
@endif
@if (session()->has('deleted'))
    <div class="col my-3">
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">×</button> 
            {{ session()->get('deleted') }}
        </div>
    </div>
@endif
@if (session()->has('success-tagihan'))
    <div class="col my-3">
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">×</button> 
            {{ session()->get('success_tagihan') }}
        </div>
    </div>
@endif
@if (session()->has('deleted-tagihan'))
    <div class="col my-3">
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">×</button> 
            {{ session()->get('deleted-tagihan') }}
        </div>
    </div>
@endif
    <span class="invalid-feedback" role="alert">
        @if ($errors->has('file'))
        <strong>{{ $errors->first('file') }}</strong>
    </span>
@endif
    
{{-- notifikasi sukses --}}
@if ($sukses = Session::get('sukses'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button> 
        <strong>{{ $sukses }}</strong>
    </div>
@endif