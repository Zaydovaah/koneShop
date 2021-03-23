<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Nunito', sans-serif;
        }

        html {
            height: 100vh
        }

        .login-btn {
            color: #fff;
            background-color: #815a14;
            outline: none;
        }

        .register-btn {
            color:#815a14;
            background-color: #fff;
            outline: none;
        }

        .logo {
            width: 50%;
        }

    </style>
</head>

<body class="antialiased">
    <div class="row">
        <div class="col-md-6 d-flex justify-content-center align-items-center vh-100">
            <img class="logo" src="/media/logo/logo.jpg" alt="logo">
        </div>

        <div class="col-md-6 d-flex flex-column justify-content-center align-items-center vh-100 bg-dark">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="login-btn btn btn-lg">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="register-btn btn btn-lg">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <div class="text-white my-auto" style="padding: 0 10%;">
                <h1 style="font-size: 70px;">lorem Ipsum</h1>
                <p style="font-size: 20px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quam accusantium consectetur
                    perferendis
                    quis quaerat soluta quasi perspiciatis sunt sint.</p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
</body>

</html>
