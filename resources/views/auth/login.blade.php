<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="{{ asset('assets/images/avatar.ico') }}" type="image/x-icon">
    <title>
        My Portfolio | Login
    </title>

    <style>
        @import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300);
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-weight: 300;
        }
        body {
            font-family: 'Source Sans Pro', sans-serif;
            color: white;
            font-weight: 300;
        }
        body ::-webkit-input-placeholder {
            /* WebKit browsers */
            font-family: 'Source Sans Pro', sans-serif;
            color: white;
            font-weight: 300;
        }
        body :-moz-placeholder {
            /* Mozilla Firefox 4 to 18 */
            font-family: 'Source Sans Pro', sans-serif;
            color: white;
            opacity: 1;
            font-weight: 300;
        }
        body ::-moz-placeholder {
            /* Mozilla Firefox 19+ */
            font-family: 'Source Sans Pro', sans-serif;
            color: white;
            opacity: 1;
            font-weight: 300;
        }
        body :-ms-input-placeholder {
            /* Internet Explorer 10+ */
            font-family: 'Source Sans Pro', sans-serif;
            color: rgb(182, 118, 118);
            font-weight: 300;
        }
        .wrapper {
            background: #151521;
            background: linear-gradient(top left, #151521 0%, #212130 100%);
            background: linear-gradient(to bottom right, #151521 0%, #212130 100%);
            position: absolute;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }
        .wrapper.form-success .container h1 {
            transform: translateY(85px);
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 80px 0;
            height: 400px;
            text-align: center;
        }
        .container h1 {
            font-size: 40px;
            transition-duration: 1s;
            transition-timing-function: ease-in-     put;
            font-weight: 200;
        }
        form {
            padding: 20px 0;
            position: relative;
            z-index: 2;
        }
        form input {
            appearance: none;
            outline: 0;
            border: 1px solid rgba(255, 255, 255, 0.4);
            background-color: rgba(255, 255, 255, 0.2);
            width: 250px;
            border-radius: 3px;
            padding: 10px 15px;
            margin: 0 auto 10px auto;
            display: block;
            text-align: left;
            font-size: 18px;
            color: #151521;
            -webkit-transition-duration: 0.25s;
                    transition-duration: 0.25s;
            font-weight: 300;
        }
        form input:hover {
            background-color: rgba(255, 255, 255, 0.4);
        }
        form input:focus {
            background-color: white;
            width: 300px;
            color: #151521;
        }
        form button {
            appearance: none;
            outline: 0;
            background-color: white;
            border: 0;
            padding: 10px 15px;
            color: #151521;
            border-radius: 3px;
            width: 250px;
            cursor: pointer;
            font-size: 18px;
            transition-duration: 0.25s;
        }
        form button:hover {
            background-color: #f5f7f9;
        }
        .bg-bubbles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
        }
        .bg-bubbles li {
            position: absolute;
            list-style: none;
            display: block;
            width: 40px;
            height: 40px;
            background-color: rgba(255, 255, 255, 0.15);
            bottom: -160px;
            animation: square 25s infinite;
            transition-timing-function: linear;
        }
        .bg-bubbles li:nth-child(1) {
            left: 10%;
        }
        .bg-bubbles li:nth-child(2) {
            left: 20%;
            width: 80px;
            height: 80px;
            animation-delay: 2s;
            animation-duration: 17s;
        }
        .bg-bubbles li:nth-child(3) {
            left: 25%;
            animation-delay: 4s;

        }
        .bg-bubbles li:nth-child(4) {
            left: 40%;
            width: 60px;
            height: 60px;
            animation-duration: 22s;
            background-color: rgba(255, 255, 255, 0.25);
        }
        .bg-bubbles li:nth-child(5) {
            left: 70%;
        }
        .bg-bubbles li:nth-child(6) {
            left: 80%;
            width: 120px;
            height: 120px;
            animation-delay: 3s;
            background-color: rgba(255, 255, 255, 0.2);
        }
        .bg-bubbles li:nth-child(7) {
            left: 32%;
            width: 160px;
            height: 160px;
            animation-delay: 7s;
        }
        .bg-bubbles li:nth-child(8) {
            left: 55%;
            width: 20px;
            height: 20px;
            animation-delay: 15s;
            animation-duration: 40s;
        }
        .bg-bubbles li:nth-child(9) {
            left: 25%;
            width: 10px;
            height: 10px;
            animation-delay: 2s;
            animation-duration: 40s;
            background-color: rgba(255, 255, 255, 0.3);
        }
        .bg-bubbles li:nth-child(10) {
            left: 90%;
            width: 160px;
            height: 160px;
            animation-delay: 11s;
        }
        @keyframes square {
            0% {
                transform: translateY(0);
            }
            100% {
                transform: translateY(-700px) rotate(600deg);
            }
        }
        @keyframes square {
            0% {
                transform: translateY(0);
            }
            100% {
                transform: translateY(-700px) rotate(600deg);
            }
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="container">
            <h1 id="welcome-text">Sign In</h1>
            <form class="form" method="POST" action="{{ route('login') }}">
                @csrf
                <input name="email" class="@error('email') is-invalid @enderror" id="emailval" type="text" placeholder="Enter your email" autocomplete="off" required />
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <input name="password" class="@error('password') is-invalid @enderror" type="password" placeholder="Enter your password" required />
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <button type="submit" id="login-button">Login</button>
            </form>
        </div>

        <ul class="bg-bubbles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
         $("#login-button").on('click', function(){
            $('form').fadeOut(500);
            $('.wrapper').addClass('form-success');

            var email = $('#emailval').val();
            $('#welcome-text').html('Welcome <br />' + email);
        });
    </script>
</body>

</html>
