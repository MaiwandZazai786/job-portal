<?php

namespace Database\Factories;

use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\Factory;

class JobFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => fake()->jobTitle(),
            'employer_id' => fake()->numberBetween(1, 50),
            'salary' => fake()->numberBetween(25000, 100000)
        ];
    }
}
