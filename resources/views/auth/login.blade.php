<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f3f6fb;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background-color: white;
            width: 100%;
            max-width: 400px;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .login-container .logo {
            text-align: center;
            margin-bottom: 20px;
        }

        .login-container .logo img {
            width: 150px;
        }

        .login-container h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #013b9e;
            font-size: 24px;
            font-weight: bold;
        }

        .login-container form {
            display: flex;
            flex-direction: column;
        }

        .login-container input {
            padding: 15px;
            font-size: 16px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            transition: border-color 0.2s;
        }

        .login-container input:focus {
            border-color: #013b9e;
            outline: none;
        }

        .login-container button {
            padding: 15px;
            font-size: 16px;
            background-color: #013b9e;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .login-container button:hover {
            background-color: #005bb5;
        }

        .login-container a {
            text-align: center;
            color: #007bff;
            text-decoration: none;
            margin-top: 10px;
            display: block;
            font-size: 14px;
        }

        .login-container .social-login {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .login-container .social-login button {
            width: 40px;
            height: 40px;
            margin: 0 10px;
            background-color: #f1f1f1;
            border-radius: 50%;
            border: none;
            cursor: pointer;
        }

        .login-container .keep-logged-in {
            display: flex;
            align-items: center;
            margin-top: 10px;
        }

        .login-container .keep-logged-in input {
            margin-right: 10px;
        }

        @media (max-width: 768px) {
            .login-container {
                padding: 20px;
            }

            .login-container h2 {
                font-size: 20px;
            }

            .login-container button {
                font-size: 14px;
            }
        }

        @media (max-width: 480px) {
            .login-container {
                padding: 10px;
            }

            .login-container input,
            .login-container button {
                padding: 10px;
                font-size: 14px;
            }

            .login-container h2 {
                font-size: 18px;
            }
        }
    </style>
</head>

<body>

    <div class="login-container">
        <div class="logo">
            <a href="/">   <img src="logo.png" alt="Plus500 Logo"> </a>
        </div>
        <h2>Log in</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <input type="email" name="email" placeholder="Email" required>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <input type="password" name="password" placeholder="Password" required>
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <div class="keep-logged-in">
                <input type="checkbox" name="remember" id="keep-logged-in">
                <label for="keep-logged-in">Keep me logged in</label>
            </div>

            <button type="submit">Log in</button>

            <a href="{{ route('password.request') }}">Forgot password?</a>
            <a href="{{ route('register') }}">Create an account</a>
        </form>

        <div class="social-login">
            <button><i class="fab fa-google"></i></button>
            <button><i class="fab fa-facebook-f"></i></button>
            <button><i class="fab fa-apple"></i></button>
        </div>
    </div>

</body>

</html>