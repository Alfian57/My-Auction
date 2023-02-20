<?php

namespace Database\Seeders;

use App\Models\Masyarakat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class MasyarakatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Masyarakat::create([
            'nama_15458' => 'Alfian Gading Saputra',
            'username_15458' => 'Alfian57',
            'password_15458' => Hash::make('password'),
            'telp_15458' => '0895363116378',
        ]);
    }
}