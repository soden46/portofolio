<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Portfolio | @yield('title')</title>

    <!--Favicon-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('assets/site.webmanifest')}}">

    @include('admin.components.css')

    {{-- @vite('resources/css/app.css') --}}

    @yield('css')
</head>

<body>
    <script src="{{ asset('assets/js/initTheme.js') }}"></script>
    <div id="app">

        @include('admin.components.sidebar')

        <div id="main" class="layout-navbar navbar-fixed">

            @include('admin.components.navbar')

            <div id="main-content">
                <div class="page-heading">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-12 col-md-12 order-md-2 order-first">
                                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="{{ route('home.index') }}">Dashboard</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">
                                            @yield('title')
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>

                    @yield('content')
                </div>

                @include('admin.components.footer')
            </div>
        </div>
    </div>

    @include('admin.components.js')

    {{-- @vite('resources/js/app.js') --}}

    @yield('js')
    <script>
        $('.logout').on('click', function() {
            $('#btntrigger').click();
        });
    </script>
</body>

</html>