<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Login - Rainbow Colors</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 30px;
            background: #292345;
            font-family: Arial, sans-serif;
        }

        .admin-login {
            width: 100%;
            max-width: 430px;
            padding: 42px;
            background: #fff;
            border-radius: 22px;
            box-shadow: 0 25px 70px rgba(0, 0, 0, .25);
        }

        .admin-logo {
            text-align: center;
            margin-bottom: 30px;
        }

        .admin-logo img {
            max-width: 190px;
            height: auto;
        }

        .admin-login h1 {
            margin: 0 0 8px;
            color: #292345;
            font-size: 28px;
            text-align: center;
        }

        .admin-login > p {
            margin: 0 0 28px;
            color: #777;
            text-align: center;
            font-size: 14px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #292345;
            font-size: 14px;
            font-weight: 700;
        }

        .form-group input {
            width: 100%;
            height: 50px;
            padding: 0 15px;
            border: 1px solid #ddd;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }

        .form-group input:focus {
            border-color: #FDD200;
        }

        .remember {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 22px;
            color: #666;
            font-size: 14px;
        }

        .remember input {
            accent-color: #292345;
        }

        .login-button {
            width: 100%;
            height: 52px;
            border: 0;
            border-radius: 10px;
            background: #FDD200;
            color: #292345;
            font-size: 15px;
            font-weight: 800;
            cursor: pointer;
        }

        .login-button:hover {
            background: #292345;
            color: #fff;
        }

        .error {
            margin-bottom: 20px;
            padding: 12px 15px;
            border-radius: 8px;
            background: #fff0f0;
            color: #d33;
            font-size: 13px;
        }
    </style>
</head>

<body>

<div class="admin-login">

    <div class="admin-logo">
        <img
            src="{{ asset('assets/front/images/rainbow/logo.png') }}"
            alt="Rainbow Colors"
        >
    </div>

    <h1>Admin Login</h1>

    <p>Rainbow Colors Management Panel</p>

    @if ($errors->any())
        <div class="error">
            {{ $errors->first() }}
        </div>
    @endif

    <form method="POST" action="{{ route('admin.login.submit') }}">
        @csrf

        <div class="form-group">
            <label for="email">Email Address</label>

            <input
                type="email"
                id="email"
                name="email"
                value="{{ old('email') }}"
                placeholder="admin@example.com"
                required
                autofocus
            >
        </div>

        <div class="form-group">
            <label for="password">Password</label>

            <input
                type="password"
                id="password"
                name="password"
                placeholder="Enter your password"
                required
            >
        </div>

        <label class="remember">
            <input type="checkbox" name="remember" value="1">
            Remember me
        </label>

        <button type="submit" class="login-button">
            Login to Admin
        </button>
    </form>

</div>

</body>
</html>