<?php

namespace Database\Seeders;

use App\Models\TrainingCenter;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainingCenterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TrainingCenter::factory()->count(100)->create();
    }
}
