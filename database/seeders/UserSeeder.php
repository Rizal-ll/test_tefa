<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        $user = User::first(); // Mengambil pengguna pertama sebagai contoh
        $token = $user->createToken('Personal Access Token')->accessToken;

        // Simpan token di tempat yang sesuai atau gunakan sesuai kebutuhan
    }
}
