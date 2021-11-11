<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

class UmmahFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $this->faker->addProvider(new \Bezhanov\Faker\ProviderCollectionHelper($this->faker));

        $connected_with = ["Masjid", "Madarsa", "School"];
        $family_members = ["father", "mother", "son", "daughter", "husband", "wife", "brother", "sister", "grandfather", "grandmother", "grandson", "granddaughter", "uncle", "aunt", "nephew", "niece", "cousin",];

        return [
            'name' => $this->faker->name(),
            'phone' => rand(7000000000, 9999999999),
            'connected_with' => $connected_with[array_rand($connected_with)],
            'qualification' => $this->faker->educationalAttainment,
            'occupation' => $this->faker->team,
            'member_count' => rand(0, 10),
            'family_members' => Arr::random($family_members, 2)
        ];
    }
}
