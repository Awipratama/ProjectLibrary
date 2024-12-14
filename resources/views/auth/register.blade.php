<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Register Page</title>

    <link href="{{ asset('bootstrap-5.0.2-dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="register-container">
        <div class="left-section"></div>
        <div class="right-section">
            <h1>REGISTER HERE</h1>
            <div class="d-flex justify-content-between mb-3">
                <p>Wellcome Buddy, let's setting up your Account.</p>
            </div>
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <input id="name" type="text" name="name" class="form-control"
                        placeholder="Enter your full name" required>
                </div>
                <div class="mb-3">
                    <input id="email" type="email" name="email" class="form-control"
                        placeholder="Enter your email" required>
                </div>
                <div class="mb-3 position-relative">
                    <input id="password" type="password" name="password" class="form-control"
                        placeholder="Enter Password" required>
                </div>
                <div class="mb-4 d-flex flex-column">
                    <input id="password_confirmation" type="password" name="password_confirmation" class="form-control"
                        placeholder="Confirm Password" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Register</button>
            </form>
            @if ($errors->any())
                <div>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="text-center my-2">Or</div>
            <div class="d-flex justify-content-center social-buttons">
                <a href="" class="me-3">
                    <i class="bi bi-google text-secondary"></i>
                </a>
                <a href="">
                    <i class="bi bi-facebook text-secondary"></i>
                </a>
            </div>
        </div>
    </div>

    <script src="{{ asset('bootstrap-5.0.2-dist/js/bootstrap.min.js') }}"></script>
</body>

</html>
