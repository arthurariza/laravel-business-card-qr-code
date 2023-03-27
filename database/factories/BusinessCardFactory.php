<?php

namespace Database\Factories;

use App\Models\BusinessCard;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<BusinessCard>
 */
class BusinessCardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name,
            'linkedin_url' => fake()->url,
            'github_url' => fake()->url,
        ];
    }
}
