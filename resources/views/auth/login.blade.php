<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>

    <link rel="stylesheet" href="{{ asset('bootstrap-5.0.2-dist/css/bootstrap.min.css') }}">
    <script src="{{ asset('bootstrap-5.0.2-dist/js/bootstrap.min.js') }}"></script>

    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body>
    <section class="h-100 gradient-form">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body">

                                    <div class="card-body2 p-md-4 mx-md-4">
                                        <div class="text-center mb-3">
                                            <img src="{{ asset('Image/Logo Skensa.png') }}"
                                                style="width: 185px;" alt="logo">
                                        </div>
                                        <form>
                                            <p class="fs-5">Please login to your account</p>
                                            <div data-mdb-input-init class="form-outline mb-3">
                                                <label class="form-label" for="form2Example11">Username</label>
                                                <input type="email" id="form2Example11" class="form-control"
                                                    placeholder="Phone number or email address" />
                                            </div>
                                            <div data-mdb-input-init class="form-outline mb-4">
                                                <label class="form-label" for="form2Example22">Password</label>
                                                <input type="password" id="form2Example22" class="form-control" />
                                            </div>
                                            <div class="text-center pt-1 mb-2 pb-1 d-flex flex-column">
                                                <button data-mdb-button-init data-mdb-ripple-init
                                                    class="btn btn-outline-danger btn-block fa-lg mb-3"
                                                    type="button">Log
                                                    in</button>
                                                <a class="text-muted" href="#!">Forgot password?</a>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-center pb-4">
                                                <p class="mb-0 me-2">Don't have an account?</p>
                                                <button type="button" data-mdb-button-init data-mdb-ripple-init
                                                    class="btn btn-outline-danger">Create new</button>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    <h4 class="mb-4">We are more than just a company</h4>
                                    <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                        do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud
                                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
