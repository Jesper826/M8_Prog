<?php

namespace Database\Factories;

use App\Models\Soort;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Soort>
 */
class SoortFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'naam' => $this->faker->word(),
            
        ];
    }
}
