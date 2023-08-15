<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Dashboard | Portfolio</title>
    <link rel="stylesheet" href="{{ asset('assets/css/main/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/main/app-dark.css') }}" />
    <link rel="shortcut icon" href="{{ asset('assets/images/avatar.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <nav class="navbar navbar-light">
        <div class="container d-block">
            <a href="{{ route('portfolio.index') }}"><i class="bi bi-chevron-left"></i></a>
            <a class="navbar-brand ms-4" href="{{ route('home.index') }}">
                <img src="{{ asset('assets/images/logo-mctech.png') }}" />
            </a>
        </div>
    </nav>

    <div class="container">
        <div class="card mt-5">
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
                <form action="{{ route('portfolio.update', $portfolio->id) }}" class="form form-vertical" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="first-name-icon">Nama Proyek</label>
                                    <div class="position-relative">
                                        <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="Masukan Nama Proyek" id="first-name-icon" value="{{ $portfolio->nama }}" />
                                        @error('nama')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        <div class="form-control-icon">
                                            <i class="fa-solid fa-globe"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="email-id-icon">Jenis Proyek</label>
                                    <div class="position-relative">
                                        <input type="text" name="jenis" class="form-control @error('jenis') is-invalid @enderror" placeholder="Masukan Jenis Proyek" id="email-id-icon" value="{{ $portfolio->jenis }}" />
                                        @error('jenis')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        <div class="form-control-icon">
                                            <i class="fa-solid fa-building"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="email-id-icon">URL Proyek</label>
                                    <div class="position-relative">
                                        <input type="text" name="web" class="form-control @error('web') is-invalid @enderror" placeholder="Masukan URL Proyek" id="email-id-icon" value="{{ $portfolio->web }}" />
                                        @error('web')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        <div class="form-control-icon">
                                            <i class="fa-solid fa-link"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="email-id-icon">URL Github</label>
                                    <div class="position-relative">
                                        <input type="text" name="github" class="form-control @error('github') is-invalid @enderror" placeholder="Masukan URL Github" id="email-id-icon" value="{{ $portfolio->github }}" />
                                        @error('github')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        <div class="form-control-icon">
                                            <i class="fa-solid fa-link"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="email-id-icon">Deskripsi Proyek</label>
                                    <div class="position-relative">
                                        <textarea name="deskripsi" id="email-id-icon" cols="30" rows="10" class="form-control @error('deskripsi') is-invalid @enderror">{{ $portfolio->deskripsi }}</textarea>
                                        @error('deskripsi')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="email-id-icon">Foto Proyek</label>
                                    <div class="position-relative">
                                        <img src="{{ asset('assets/foto'.$portfolio->foto) }}" alt="image" class="img-thumbnail w-25 my-3">
                                        <input name="foto" class="form-control @error('foto') is-invalid @enderror" type="file" id="formFile" accept="image/*" />
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

    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js" integrity="sha512-rpLlll167T5LJHwp0waJCh3ZRf7pO6IT1+LZOhAyP6phAirwchClbTZV3iqL3BMrVxIYRbzGTpli4rfxsCK6Vw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>