@extends('admin.layouts.app',[
'title' => 'Buat Postingan Baru',
'pageTitle' => 'Buat Postingan Baru'
])
@section('content')
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
<div class="col-lg-8">
    <form method="post" action="{{route('admin.jasa.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul" value="{{old('judul')}}">
            @error('judul')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="foto">Foto</label>
            <input type="file" class="form-control " id="foto" name="foto">
        </div>
        <div class="form-group">
            <input id="deskripsi" type="hidden" name="deskripsi">
            @error('deskripsi')
            <p class="text-danger">{{$message}}</p>
            @enderror
            <trix-editor input="deskripsi"></trix-editor>
        </div>
        <button type="submit" class="btn btn-primary">Posting Jasa</button>
    </form>
</div>
@endsection