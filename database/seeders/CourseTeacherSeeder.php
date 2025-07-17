<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Teacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseTeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses = Course::all();
        $teachers = Teacher::all();

        foreach ($courses as $course) {
            // Asignar 1 a 3 profesores aleatorios por curso
            $course->teachers()->attach(
                $teachers->random(rand(1, 3))->pluck('id')->toArray()
            );
        }
    }
}
