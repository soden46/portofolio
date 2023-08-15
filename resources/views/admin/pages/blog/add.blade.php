@extends('admin.layouts.app')
@section('title', 'Blog')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                @if ($message = Session::get('success'))
                <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
                <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

                <script>
                    Toastify({
                        avatar: "{{ asset('assets/images/avatar.ico') }}",
                        text: {
                            !!json_encode($message) !!
                        },
                        duration: 5000,
                        destination: "https://github.com/apvarun/toastify-js",
                        newWindow: true,
                        close: true,
                        gravity: "bottom", // `top` or `bottom`
                        position: "right", // `left`, `center` or `right`
                        stopOnFocus: true, // Prevents dismissing of toast on hover
                        style: {
                            background: "#49b462",
                            color: '#fff',
                        },
                        onClick: function() {} // Callback after click
                    }).showToast();
                </script>
                @endif
                <form class="forms-sample" method="POST" action="{{ route('blog.store') }}" enctype="multipart/form-data">
                    @csrf
                    @method('post')
                    <div class="form-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="first-name-icon">Judul</label>
                                    <div class="position-relative">
                                        <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" placeholder="Masukan judul" id="first-name-icon" value="{{ old('judul') }}" />
                                        @error('judul')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="email-id-icon">Isi</label>
                                    <div class="position-relative">
                                        <textarea type="text" name="isi" class="form-control @error('isi') is-invalid @enderror" placeholder="Masukan isi" id="email-id-icon" value="{{ old('isi') }}"></textarea>
                                        @error('isi')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="email-id-icon">Foto</label>
                                    <div class="position-relative">
                                        <input name="foto" class="form-control @error('foto') is-invalid @enderror" type="file" id="formFile" accept="foto/*" />
                                        @error('foto')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="col-12 mt-2 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-outline-primary me-2 mb-1">
                                        Submit
                                    </button>
                                    <button type="reset" class="btn btn-outline-secondary me-2 mb-1">
                                        Reset
                                    </button>
                                </div>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function() {
        var readURL = function(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#image').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#formFile").on('change', function() {
            readURL(this);
            // var filename = $('.file-upload-default').val().replace(/.*(\/|\\)/, '');

            // $('.file-upload-info').val(filename);
        });


    });
</script>
@endsection