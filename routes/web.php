
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])
    ->name('login');

Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showRegister'])
    ->name('register');

Route::post('/register', [AuthController::class, 'register']);

Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');


Route::middleware(['auth', 'role:admin'])->group(function () {

    Route::get('/admin/dashboard', function () {
        return view('admin');
    })->name('admin.dashboard');

    Route::get('/admin/manajemen-pengguna', function () {
        return view('fitur', [
            'judul' => 'Manajemen Pengguna',
            'keterangan' => 'Admin dapat mengelola data pengguna.'
        ]);
    });

    Route::get('/admin/pengaturan-sistem', function () {
        return view('fitur', [
            'judul' => 'Pengaturan Sistem',
            'keterangan' => 'Halaman pengaturan sistem akademik.'
        ]);
    });

    Route::get('/admin/kelola-materi', function () {
        return view('fitur', [
            'judul' => 'Kelola Materi',
            'keterangan' => 'Admin dapat mengelola materi kuliah.'
        ]);
    });

    Route::get('/admin/kelola-nilai', function () {
        return view('fitur', [
            'judul' => 'Kelola Nilai',
            'keterangan' => 'Admin dapat mengelola nilai mahasiswa.'
        ]);
    });
});


Route::middleware(['auth', 'role:dosen'])->group(function () {

    Route::get('/dosen/dashboard', function () {
        return view('dosen');
    })->name('dosen.dashboard');

    Route::get('/dosen/kelola-materi', function () {
        return view('fitur', [
            'judul' => 'Kelola Materi',
            'keterangan' => 'Dosen dapat mengelola materi perkuliahan.'
        ]);
    });

    Route::get('/dosen/kelola-nilai', function () {
        return view('fitur', [
            'judul' => 'Kelola Nilai',
            'keterangan' => 'Dosen dapat mengelola nilai mahasiswa.'
        ]);
    });
});


Route::middleware(['auth', 'role:mahasiswa'])->group(function () {

    Route::get('/mahasiswa/dashboard', function () {
        return view('mahasiswa');
    })->name('mahasiswa.dashboard');

    Route::get('/mahasiswa/lihat-materi', function () {
        return view('fitur', [
            'judul' => 'Materi Kuliah',
            'keterangan' => 'Mahasiswa dapat melihat materi perkuliahan.'
        ]);
    });

    Route::get('/mahasiswa/lihat-nilai', function () {
        return view('fitur', [
            'judul' => 'Nilai Pribadi',
            'keterangan' => 'Mahasiswa dapat melihat nilai pribadinya.'
        ]);
    });
});
