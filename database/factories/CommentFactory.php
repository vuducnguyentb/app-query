<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'content' => $this->faker->text(500),
            'rating' => $this->faker->numberBetween(1,5),
            'commentable_type' => $this->faker->randomElement(['App\Models\Room','App\Models\Image']),
            'commentable_id' => $this->faker->numberBetween(1,10),
            'user_id' => $this->faker->numberBetween(1,3),
        ];
    }
}
