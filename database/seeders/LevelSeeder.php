<?php

namespace Database\Seeders;

use App\Models\Level;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Level::create([
            'nama_15458' => 'administrator'
        ]);

        Level::create([
            'nama_15458' => 'petugas'
        ]);
    }
}