<!DOCTYPE html>
<html lang="id">
<head><meta charset="UTF-8"><title>403</title></head>
<body style="font-family: sans-serif; max-width: 600px; margin: 80px auto; text-align: center;">
    <h1>403 - Akses Ditolak</h1>
    <p>{{ $exception->getMessage() ?: 'Anda tidak memiliki akses.' }}</p>
    <a href="{{ url('/dashboard') }}">Kembali ke Dashboard</a>
</body>
</html>
