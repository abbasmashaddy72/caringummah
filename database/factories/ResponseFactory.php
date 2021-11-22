<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ResponseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'phone' => rand(7000000000, 9999999999),
            'email' => $this->faker->email,
            'message' => $this->faker->realText,
        ];
    }
}
