<?php
namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@akademik.test'],
            [
                'name' => 'Admin Akademik',
                'password' => 'password123',
                'role' => 'admin'
            ]
        );

        User::updateOrCreate(
            ['email' => 'dosen@akademik.test'],
            [
                'name' => 'Dosen Akademik',
                'password' => 'password123',
                'role' => 'dosen'
            ]
        );

        User::updateOrCreate(
            ['email' => 'mahasiswa@akademik.test'],
            [
                'name' => 'Mahasiswa Akademik',
                'password' => 'password123',
                'role' => 'mahasiswa'
            ]
        );
    }
}
