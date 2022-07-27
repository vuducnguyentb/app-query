<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'path' => $this->faker->imageUrl(),
            'imageable_id' => $this->faker->numberBetween(1,3),
            'imageable_type' => $this->faker->randomElement(['App\User','App\City']),

        ];
    }
}
