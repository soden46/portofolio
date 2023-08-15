<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Dashboard | Award</title>
    <link rel="shortcut icon" href="{{ asset('assets/images/avatar.ico') }}" type="image/x-icon">

    @include('admin.components.css')
</head>

<body>
    <nav class="navbar navbar-light">
        <div class="container d-block">
            <a href="{{ route('award.index') }}"><i class="bi bi-chevron-left"></i></a>
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
                <form action="{{ route('award.store') }}" class="form form-vertical" method="POST">
                    @csrf
                    <div class="form-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="first-name-icon">Name</label>
                                    <div class="position-relative">
                                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter name of the award" id="first-name-icon" />
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        <div class="form-control-icon">
                                            <i class="fa-solid fa-award"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="email-id-icon">Description</label>
                                    <div class="position-relative">
                                        <textarea name="description" id="email-id-icon" cols="30" rows="5" class="form-control @error('description') is-invalid @enderror"></textarea>
                                        @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="first-name-icon">Url</label>
                                    <div class="position-relative">
                                        <input type="text" name="url" class="form-control @error('url') is-invalid @enderror" placeholder="Enter url of the award" id="first-name-icon" />
                                        @error('url')
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
                                    <label for="first-name-icon">Icon</label>
                                    <div class="position-relative">
                                        <input type="text" name="icon" class="form-control @error('icon') is-invalid @enderror" placeholder="Enter icon of the award" id="first-name-icon" />
                                        @error('icon')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        <div class="form-control-icon">
                                            <i class="fa-solid fa-icons"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
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

    @include('components.js')
</body>

</html>