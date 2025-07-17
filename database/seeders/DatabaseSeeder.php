<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AreaSeeder::class,              // No depende de nadie
            TrainingCenterSeeder::class,    // No depende de nadie
            CourseSeeder::class,            // Depende de area_id y training_center_id
            TeacherSeeder::class,           // Depende de area_id y training_center_id
            ComputerSeeder::class,          // No depende de nadie
            ApprenticeSeeder::class,        // Depende de course_id y computer_id
            CourseTeacherSeeder::class,     // Depende de course_id y teacher_id
        ]);
    }
}
