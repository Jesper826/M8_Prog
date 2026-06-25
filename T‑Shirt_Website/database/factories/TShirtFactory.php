<?php

namespace Database\Factories;

use App\Models\Tshirt;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Tshirt>
 */
class TShirtFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'text_line_1' => $this->faker->sentence(),
            'text_line_2' => $this->faker->sentence(),
            'image_path' => $this->faker->imageUrl(600, 400),
            'colour_id' => \App\Models\Colour::factory(),
            'soort_id' => \App\Models\Soort::factory(),
        ];
    }
}
