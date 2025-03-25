<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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

        .container {
            position: relative;
            z-index: 1;
            background: rgba(255, 255, 255, 0.2);
            padding: 30px;
            border-radius: 12px;
            backdrop-filter: blur(10px);
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 350px;
        }

        h2 {
            margin-bottom: 20px;
            color: #fff;
        }

        .alert {
            background: rgba(255, 0, 0, 0.8);
            color: white;
            padding: 10px;
            border-radius: 8px;
            margin-bottom: 10px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 8px;
            outline: none;
            font-size: 16px;
        }

        button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 8px;
            background: #ff4081;
            color: white;
            font-size: 18px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: #e91e63;
        }

        a {
            display: block;
            margin-top: 15px;
            color: #fff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
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
            from {
                background-position-x: 0;
            }
            to {
                background-position-x: 1000px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login</h2>

        @if(session('success'))
            <p class="alert">{{ session('success') }}</p>
        @endif

        @if(session('error'))
            <p class="alert">{{ session('error') }}</p>
        @endif

        @if ($errors->any())
            <div class="alert">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form action="{{ route('login') }}" method="POST">
            @csrf
            <input type="email" name="email" required placeholder="Email">
            <input type="password" name="password" required placeholder="Password">
            <button type="submit">Login</button>
        </form>
        <a href="{{ route('register') }}">Register</a>
    </div>

    <div class="wave"></div>
</body>
</html>
