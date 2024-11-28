<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('projects')->insert([
            [
                'id' => 1,
                'name' => 'Pemilihan Mobil MPV untuk Keluarga',
                'description' => 'pemilihan mobil mpv terbaik untuk keluarga',
                'created_at' => '2024-11-27 06:59:56',
                'updated_at' => '2024-11-27 06:59:56',
            ],
        ]);
    }
}
