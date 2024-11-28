<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlternativeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('alternatives')->insert([
            [
                'id' => 1,
                'project_id' => 1,
                'name' => 'Toyota Avanza 1.5 G CVT',
                'created_at' => '2024-11-27 07:16:12',
                'updated_at' => '2024-11-27 07:16:12',
            ],
            [
                'id' => 2,
                'project_id' => 1,
                'name' => 'Mitsubishi Xpander Ultimate CVT',
                'created_at' => '2024-11-27 07:17:14',
                'updated_at' => '2024-11-27 07:17:14',
            ],
            [
                'id' => 3,
                'project_id' => 1,
                'name' => 'Honda BR-V Prestige CVT',
                'created_at' => '2024-11-27 07:17:22',
                'updated_at' => '2024-11-27 07:17:22',
            ],
            [
                'id' => 4,
                'project_id' => 1,
                'name' => 'Suzuki Ertiga Hybrid',
                'created_at' => '2024-11-27 07:17:57',
                'updated_at' => '2024-11-27 07:17:57',
            ],
            [
                'id' => 5,
                'project_id' => 1,
                'name' => 'Daihatsu Xenia',
                'created_at' => '2024-11-27 07:18:07',
                'updated_at' => '2024-11-27 07:18:07',
            ],
            [
                'id' => 6,
                'project_id' => 1,
                'name' => 'Wuling Almaz Hybrid',
                'created_at' => '2024-11-27 07:18:16',
                'updated_at' => '2024-11-27 07:18:16',
            ],
            [
                'id' => 7,
                'project_id' => 1,
                'name' => 'Hyundai Stargazer',
                'created_at' => '2024-11-27 07:18:27',
                'updated_at' => '2024-11-27 07:18:27',
            ],
            [
                'id' => 8,
                'project_id' => 1,
                'name' => 'Kia Carens',
                'created_at' => '2024-11-27 07:18:35',
                'updated_at' => '2024-11-27 07:18:35',
            ],
        ]);
    }
}
