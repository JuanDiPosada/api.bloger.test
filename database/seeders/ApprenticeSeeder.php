<?php

namespace Database\Seeders;

use App\Models\Apprentice;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ApprenticeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Apprentice::factory()->count(100)->create();
    }
}
