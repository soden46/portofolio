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
            <a href="{{ route('message.show', $message->id) }}"><i class="bi bi-chevron-left"></i></a>
            <a class="navbar-brand ms-4" href="{{ route('home.index') }}">
                <img src="{{ asset('assets/images/logo-mctech.png') }}" />
            </a>
        </div>
    </nav>

    <div class="container">
        <form action="{{ route('message.postemail', $message->id) }}" method="GET">
            @csrf
            <div class="card mt-5">
                <div class="card-header">
                    <h4>Message</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <h6>From</h6>
                            <input name="from" class="form-control form-control-lg" type="text" value="manusiacoding29@gmail.com" readonly />
                        </div>
                        <div class="col-lg-6">
                            <h6>To</h6>
                            <input name="to" class="form-control form-control-lg" type="text" value="{{ $message->email }}" readonly />
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-lg-12">
                            <h6>Subject</h6>
                            <input name="subject" class="form-control form-control-lg" type="text" />
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-lg-12">
                            <h6>Message</h6>
                            <textarea name="message" class="form-control form-control-lg" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-end align-items-center">
                    <button type="submit" class="btn btn-outline-info mx-2">Post</button>
                </div>
            </div>
        </form>
    </div>

    @include('components.js')
</body>

</html>