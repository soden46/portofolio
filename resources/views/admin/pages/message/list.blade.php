<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Dashboard | Message</title>
    <link rel="shortcut icon" href="{{ asset('assets/images/avatar.ico') }}" type="image/x-icon">

    @include('admin.components.css')

    <style>
        .card-content {
            max-height: 400px;
            overflow-y: scroll;
            -webkit-overflow-scrolling: touch;
        }

        .recent-message:hover {
            cursor: pointer;
            background-color: #2e2e41;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-light">
        <div class="container d-block">
            <a href="{{ route('home.index') }}"><i class="bi bi-chevron-left"></i></a>
            <a class="navbar-brand ms-4" href="{{ route('home.index') }}">
                <img src="{{ asset('assets/images/logo-mctech.png') }}" />
            </a>
        </div>
    </nav>

    <div class="container">
        @if ($alert = Session::get('success'))
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

        <script>
            Toastify({
                avatar: "{{ asset('assets/images/avatar.ico') }}",
                text: {
                    !!json_encode($alert) !!
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
        <div class="card mt-5">
            <div class="card-header">
                <h4>Message</h4>
            </div>
            <div class="card-content pb-0">
                @foreach ($message as $key => $item)
                <a href="{{ route('message.show', $item->id) }}">
                    <div class="recent-message d-flex px-4 mb-0">
                        <div class="avatar avatar-md">
                            <img src="{{ asset('assets/images/faces/'. mt_rand(1, 7) .'.jpg') }}" />
                        </div>
                        <div class="name ms-4">
                            <h5 class="mb-1">{{ $item->subject }}</h5>
                            <p class="mb-1">{{ $item->email }}</p>
                            <p class="text-muted mb-0">Date : {{ date('Y-m-d H:i:s', strtotime($item->updated_at)) }}</p>
                        </div>
                    </div>
                </a>
                <hr />
                @endforeach
            </div>
        </div>
    </div>

    @include('components.js')
</body>

</html>