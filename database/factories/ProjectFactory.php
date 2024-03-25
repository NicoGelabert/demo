<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->text(),
            'description' => fake()->realText(2000),
            'location' => fake()->realText(100),
            'image' => fake()->imageUrl(),
            'service_id' => fake()->numberBetween(1, 3),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
