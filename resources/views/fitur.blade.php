
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>{{ $judul }}</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #eaf0f7;
            margin: 0;
        }

        .navbar {
            background: #17365d;
            color: white;
            padding: 20px;
        }

        .container {
            background: white;
            max-width: 650px;
            margin: 50px auto;
            padding: 30px;
            border-radius: 10px;
        }

        button {
            background: #b52b2b;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
        }

        a {
            color: #17365d;
        }
    </style>
</head>

<body>

<div class="navbar">
    <b>Telkom University - Aplikasi Akademik</b>
</div>

<div class="container">

    <h2>{{ $judul }}</h2>

    <p>{{ $keterangan }}</p>

    <p>
        Pengguna: {{ Auth::user()->name }}
    </p>

    <a href="{{ route(Auth::user()->role . '.dashboard') }}">
        Kembali ke Dashboard
    </a>

    <br><br>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Logout</button>
    </form>

</div>

</body>
</html>
