<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(45deg, #4facfe, #00f2fe);
            overflow: hidden;
        }

        .wave {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100px;
            background: url('https://i.imgur.com/3R5vTx4.png') repeat-x;
            animation: wave-animation 4s infinite linear;
        }

        @keyframes wave-animation {
            from { background-position-x: 0; }
            to { background-position-x: 1000px; }
        }
    </style>
</head>
<body>
    <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
            <div class="col-md-8 col-lg-6 col-xxl-3 auth-card">
                <div class="card mb-0">
                    <div class="card-body text-center">
                        <a href="#" class="text-nowrap logo-img d-block py-3 w-100">
                            <img src="../assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                            <span>
                                <img src="../assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                            </span>
                        </a>
                        <p class="fw-bold font-14">Your Social Campaigns</p>
                        
                        @if(session('success'))
                            <p class="alert alert-success">{{ session('success') }}</p>
                        @endif
                        @if(session('error'))
                            <p class="alert alert-danger">{{ session('error') }}</p>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <p>{{ $error }}</p>
                                @endforeach
                            </div>
                        @endif
                        
                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="mb-3 text-start">
                                <label class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                            <div class="mb-4 text-start">
                                <label class="form-label">Email Address</label>
                                <input type="email" name="email" class="form-control" autocomplete="off" value="" required>
                            </div>
                            <div class="mb-4 text-start">
                                <label class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" autocomplete="new-password" value="" required>
                            </div>
                            <div class="mb-4 text-start">
                                <label class="form-label">Confirm Password</label>
                                <input type="password" name="password_confirmation" class="form-control" required>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="rememberMe">
                                    <label class="form-check-label" for="rememberMe">Remember this Device</label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-info w-100 py-2 mb-4">Sign Up</button>
                            <div class="d-flex align-items-center justify-content-center">
                                <p class="mb-0">Already Have an Account</p>
                                <a href="{{ route('login') }}" class="text-info ms-2">Login</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wave"></div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>