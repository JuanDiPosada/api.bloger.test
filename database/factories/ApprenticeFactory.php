<?php

namespace Database\Factories;

use App\Models\Computer;
use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Apprentice>
 */
class ApprenticeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>$this->faker->name(),
            'email'=>$this->faker->email(),
            'cell_number'=>$this->faker->phoneNumber(),
            'course_id'=>Course::inRandomOrder()->first()?->id,
            'computer_id'=>Computer::inRandomOrder()->first()?->id,
        ];
    }
}
