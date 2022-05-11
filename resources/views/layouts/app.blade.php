<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous" />
    <link rel="icon" href="{{ asset('/img/icon.png') }}" />
    <title>@yield('title', 'Online Store')</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body class="d-flex flex-column min-vh-100" style="background-color: #F6F3F5;">
    <!-- header -->
    <nav class="navbar navbar-expand-lg navbar-dark py-4 formula1" style="background-color: #272932">
        <div class="container">
            <a class="navbar-logo" href="/">
                <img src="{{ asset('/img/f1-logo.png') }}" alt="logo" style="height: auto;
                width: 90px;
                margin-right: 15px;" />
                <a class="navbar-brand" href="{{ route('home.index') }}">Store</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ms-auto">
                        <a class="nav-link active" href="{{ route('home.index') }}">Home</a>
                        <a class="nav-link active" href="{{ route('product.index') }}">Products</a>
                        <a class="nav-link active" href="{{ route('cart.index') }}">Cart</a>
                        <a class="nav-link active" href="{{ route('home.about') }}">About</a>
                        <div class="vr bg-white mx-2 d-none d-lg-block"></div>
                        @guest
                            <a class="nav-link active" href="{{ route('login') }}">Login</a>
                            <a class="nav-link active" href="{{ route('register') }}">Register</a>
                        @else
                            <a class="nav-link active" href="{{ route('stripe') }}">Add F1Credits</a>
                            <a class="nav-link active" href="{{ route('myaccount.orders') }}">My Orders | Balance</a>
                            <form id="logout" action="{{ route('logout') }}" method="POST">
                                <a role="button" class="nav-link active"
                                    onclick="document.getElementById('logout').submit();">Logout</a>
                                @csrf
                            </form>
                        @endguest
                    </div>
                </div>
        </div>
    </nav>

    <header class="masthead text-white text-center py-4 formula1" style="background-color:@yield('color', '#D5C7BC');">
        <div class="container d-flex align-items-center flex-column">
            <h2>@yield('subtitle', 'Viewing Product')</h2>
        </div>
    </header>
    <!-- header -->

    <div class="container my-4">
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <!-- Footer -->
    <footer class=" mt-auto text-center text-white" style="background-color:#272932;">

        <div class="container p-4">
            <section class="mb-4">
                <p>
                    This site is for educational purposes only! Copyright Disclaimer under section 107 of the Copyright
                    Act 1976, allowance is made for “fair use” for purposes such as criticism, comment, news reporting,
                    teaching, scholarship, education and research.
                </p>
            </section>
        </div>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">

        </div>
    </footer>
</body>

</html>
