<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->jobTitle(),
            'employer_id' => \App\Models\Employer::factory(),
            'location' => $this->faker->city() . ', ' . $this->faker->state(),
            'description' => $this->faker->paragraph(),
            'compensation' => sprintf(
                '%s - %s',
                '$' . number_format($this->faker->numberBetween(100000, 150000)),
                '$' . number_format($this->faker->numberBetween(150000, 200000))
            )
        ];
    }
}
