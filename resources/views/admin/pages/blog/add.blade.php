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
    <form method="post" action="{{route('blog.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Judul</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{old('title')}}">
            @error('title')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="slug">Slug</label>
            <input type="text" class="form-control " id="slug" name="slug">
        </div>
        <div class="form-group">
            <label for="foto">Foto</label>
            <input type="file" class="form-control " id="foto" name="foto">
        </div>
        <div class="form-group">
            <input id="body" type="hidden" name="body">
            @error('body')
            <p class="text-danger">{{$message}}</p>
            @enderror
            <trix-editor input="body"></trix-editor>
        </div>
        <button type="submit" class="btn btn-primary">Posting Artikel</button>
    </form>
</div>

<script>
    const judul_artikel = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    judul_artikel.addEventListener('change', function() {
        fetch('admin.blog.CheckSlug?title=' + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    });
</script>
@endsection