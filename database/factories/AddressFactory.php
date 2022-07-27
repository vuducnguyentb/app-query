<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
//    $i = 1;
        return [
            'number' => $this->faker->numberBetween(1,10),
            'street' => $this->faker->streetName,
            'user_id' => $this->faker->unique()->numberBetween(1,3)
//            'user_id' => $i++
        ];
    }
}
