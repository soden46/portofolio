<!DOCTYPE html>
<html lang="en">

<head>
    <title>Syarif Syarifuddin - Portofolio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{config('midtrans.client_key')}}"></script>
    <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->
    @include('components.css')
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <!-- Navbar -->
    @include('components.navbar')

    <!-- Content -->
    @yield('content')
    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>
    <!-- Footer -->
    @include('components.footer')
    <!-- Javascript -->
    @include('components.js')
</body>

</html>