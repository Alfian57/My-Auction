<?php

namespace Database\Seeders;

use App\Models\Petugas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PetugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Petugas::create([
            'nama_15458' => 'Admin 1',
            'username_15458' => 'admin1',
            'password_15458' => Hash::make("password"),
            'id_level_15458' => 1,
        ]);

        Petugas::create([
            'nama_15458' => 'Petugas 1',
            'username_15458' => 'petugas1',
            'password_15458' => Hash::make("password"),
            'id_level_15458' => 2,
        ]);
    }
}
