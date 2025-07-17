<?php

namespace Database\Factories;

use App\Models\Area;
use App\Models\TrainingCenter;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
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
            'email'=>$this->faker->unique()->email(),
            'area_id'=>Area::inRandomOrder()->first()?->id,
            'Training_center_id'=>TrainingCenter::inRandomOrder()->first()?->id
        ];
    }
}
