<?php

namespace Database\Factories;

use App\Models\Area;
use App\Models\TrainingCenter;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'course_number'=>$this->faker->numberBetween(1,100),
            'day'=>$this->faker->numberBetween(1,7),
            'area_id'=>Area::inRandomOrder()->first()?->id,
            'training_center_id'=>TrainingCenter::inRandomOrder()->first()?->id
        ];
    }
}
