
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Akademik</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #eaf0f7;
            margin: 0;
            padding: 0;
        }

        .login-box {
            width: 350px;
            background: white;
            margin: 100px auto;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px #ccc;
        }

        h2 {
            text-align: center;
            color: #17365d;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 8px 0 15px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 10px;
            background: #17365d;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        a {
            color: #17365d;
        }
    </style>
</head>

<body>

<div class="login-box">

    <h2>Login Akademik</h2>
    <p style="text-align:center;">Silakan masuk ke akun Anda</p>

    @if(session('success'))
        <p style="color:green;">{{ session('success') }}</p>
    @endif

    @if($errors->any())
        <p style="color:red;">{{ $errors->first() }}</p>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <label>Email</label>
        <input type="email" name="email" required>

        <label>Password</label>
        <input type="password" name="password" required>

        <button type="submit">Login</button>
    </form>

    <p style="text-align:center;">
        Belum punya akun?
        <a href="{{ route('register') }}">Daftar di sini</a>
    </p>

</div>

</body>
</html>
