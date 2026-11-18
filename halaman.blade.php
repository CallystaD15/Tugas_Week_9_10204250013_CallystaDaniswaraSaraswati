<!DOCTYPE html>
<html lang="id">
<head><meta charset="UTF-8"><title>{{ $judul }}</title></head>
<body style="font-family: sans-serif; max-width: 600px; margin: 40px auto;">
    <h2>{{ $judul }}</h2>
    <p>Anda login sebagai <b>{{ auth()->user()->role }}</b>. Akses diizinkan.</p>
    <a href="{{ route('dashboard') }}">&larr; Kembali</a>
</body>
</html>
