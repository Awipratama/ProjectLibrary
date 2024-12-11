<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>

    <link rel="stylesheet" href="{{ asset('bootstrap-5.0.2-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>

<body>
    {{-- Navbar --}}
    <nav class="navbar position-absolute z-1">
        <div class="container-fluid justify-content-end">
            <a href="" class="profile-anchor mx-2">Sign in</a>
            <a href="" class="profile-anchor mx-2">Register</a>
            <a class="navbar-brand mx-3" href="#">
                <img src="{{ asset('Image/profile.png') }}" alt="" width="45" height="41"
                    class="rounded-circle">
            </a>
        </div>
    </nav>
    {{-- SideBar --}}
    <div class="col-auto col-md-3 col-xl-3 px-sm-2 px-0 bg-dark z-2 position-absolute" id="sideBar">
        <div class="d-flex flex-column align-items-center px-3 pt-3 text-white min-vh-100 gap-3">
            <h2 class="d-flex align-items-center fs-3 d-none d-sm-inline">PERPUSTAKAAN</h2>
            <div class="d-flex flex-column gap-4 anchor-navigate">
                <img src="{{ asset('Image/Logo Skensa.png') }}" class="logoSkensa mb-4">
                <a href="/Dashboard" class="first fs-4 px-1">Dashboard</a>
                <a href="/Dashboard" class="second fs-4 px-1">About Us</a>
                <a href="/Dashboard" class="third fs-4 px-1">Borrowing</a>
                <a href="/Dashboard" class="fourth fs-4 px-1">Return</a>
            </div>
            <div class="footer">
                <p>Copyright by Awipratama</p>
            </div>
        </div>
    </div>
    {{-- Main Background --}}
    <div class="main-bg">
        <img src="{{ asset('Image/backgroundSkensa.jpg') }}" alt="" class="mainbg z-0">
    </div>
</body>

</html>
