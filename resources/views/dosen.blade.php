<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Dosen - Telkom University</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white min-h-screen">


    <nav class="bg-gray-800 border-b border-gray-700 px-6 py-4 flex justify-between items-center">
        <div class="flex items-center space-x-3">
            <div class="bg-teal-400 w-8 h-8 rounded flex items-center justify-center font-bold text-gray-900">U</div>
            <span class="font-bold text-lg">Telkom University</span>
        </div>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="bg-red-600 hover:bg-red-700 px-4 py-2 rounded text-sm font-semibold transition">
                Logout
            </button>
        </form>
    </nav>


    <main class="max-w-4xl mx-auto p-6 mt-6">
        <div class="bg-gray-800 border border-gray-700 p-6 rounded-lg shadow-lg">
            <h1 class="text-2xl font-bold flex items-center gap-2">
                📚 Dashboard Dosen
            </h1>
            <p class="text-gray-300 mt-1 italic">Halo, Dosen! Anda masuk sebagai Dosen.</p>

            <div class="mt-6 bg-gray-900 border border-gray-700 p-5 rounded-md">
                <h2 class="font-semibold text-lg text-teal-400">Manajemen Materi & Penilaian</h2>
                <p class="text-sm text-gray-400 mt-1">Gunakan halaman ini untuk mengelola materi kuliah, tugas, dan penilaian mahasiswa.</p>
                
                <div class="mt-4 space-y-3">
                    <a href="/dosen/kelola-materi" class="flex justify-between items-center p-3 bg-gray-800 hover:bg-gray-700 border border-gray-700 rounded transition">
                        <span>📖 Kelola Materi</span>
                        <span class="text-gray-400">&rarr;</span>
                    </a>
                    <a href="/dosen/kelola-nilai" class="flex justify-between items-center p-3 bg-gray-800 hover:bg-gray-700 border border-gray-700 rounded transition">
                        <span>📝 Kelola Nilai</span>
                        <span class="text-gray-400">&rarr;</span>
                    </a>
                </div>
            </div>
        </div>
    </main>

</body>
</html>