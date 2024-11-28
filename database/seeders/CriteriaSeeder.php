<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('criterias')->insert([
            [
                'id' => 1,
                'project_id' => 1,
                'name' => 'Harga',
                'type' => 'cost',
                'weight' => 0.4,
                'created_at' => '2024-11-27 07:05:00',
                'updated_at' => '2024-11-27 07:05:00',
            ],
            [
                'id' => 2,
                'project_id' => 1,
                'name' => 'Konsumsi BBM',
                'type' => 'benefit',
                'weight' => 0.3,
                'created_at' => '2024-11-27 07:06:08',
                'updated_at' => '2024-11-27 07:06:08',
            ],
            [
                'id' => 3,
                'project_id' => 1,
                'name' => 'Kapasitas Penumpang',
                'type' => 'benefit',
                'weight' => 0.2,
                'created_at' => '2024-11-27 07:06:47',
                'updated_at' => '2024-11-27 07:06:47',
            ],
            [
                'id' => 4,
                'project_id' => 1,
                'name' => 'fitur keamanan',
                'type' => 'benefit',
                'weight' => 0.1,
                'created_at' => '2024-11-27 07:07:02',
                'updated_at' => '2024-11-27 07:07:02',
            ],
        ]);
    }
}
