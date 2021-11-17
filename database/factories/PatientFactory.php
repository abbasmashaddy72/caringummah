<?php

namespace Database\Factories;

use App\Models\Ummah;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $this->faker->addProvider(new \Bezhanov\Faker\ProviderCollectionHelper($this->faker));

        $family_members = ["father", "mother", "son", "daughter", "husband", "wife", "brother", "sister", "grandfather", "grandmother", "grandson", "granddaughter", "uncle", "aunt", "nephew", "niece", "cousin",];
        $gender = ['Male', 'Female', 'Trans'];

        return [
            'name' => $this->faker->name(),
            'phone' => rand(7000000000, 9999999999),
            'location' => $this->faker->demonym,
            'ummah_id' => Ummah::pluck('id')[$this->faker->numberBetween(1, Ummah::count() - 1)],
            'relation' => $family_members[array_rand($family_members)],
            'date_of_birth' => $this->faker->dateTimeBetween('1990-01-01', Carbon::now())->format('Y-m-d'),
            'gender' =>  $this->faker->randomElement($gender),
        ];
    }
}
