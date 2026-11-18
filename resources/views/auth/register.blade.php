
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Register Akademik</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #eaf0f7;
        }

        .register-box {
            width: 350px;
            background: white;
            margin: 80px auto;
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
        }
    </style>
</head>

<body>

<div class="register-box">

    <h2>Daftar Akun</h2>

    @if($errors->any())
        <p style="color:red;">{{ $errors->first() }}</p>
    @endif

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <label>Nama Lengkap</label>
        <input type="text" name="name" required>

        <label>Email</label>
        <input type="email" name="email" required>

        <label>Password</label>
        <input type="password" name="password" required>

        <button type="submit">Daftar</button>
    </form>

    <p style="text-align:center;">
        Sudah punya akun?
        <a href="{{ route('login') }}">Login di sini</a>
    </p>

</div>

</body>
</html>
