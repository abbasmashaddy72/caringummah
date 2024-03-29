<?php

namespace Database\Factories;

use App\Models\Ummah;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

class UmmahFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ummah::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $this->faker->addProvider(new \Bezhanov\Faker\Provider\Demographic($this->faker));
        $this->faker->addProvider(new \Bezhanov\Faker\Provider\Team($this->faker));
        $family_members = ['father', 'mother', 'son', 'daughter', 'husband', 'wife', 'brother', 'sister', 'grandfather', 'grandmother', 'grandson', 'granddaughter', 'uncle', 'aunt', 'nephew', 'niece', 'cousin'];

        return [
            'name' => $this->faker->name(),
            'phone' => rand(7000000000, 9999999999),
            'connection_id' => rand(10, 50),
            'qualification' => $this->faker->educationalAttainment,
            'occupation' => $this->faker->team,
            'member_count' => rand(0, 10),
            'family_members' => Arr::random($family_members, 2),
            'date_of_birth' => $this->faker->dateTimeBetween('1990-01-01', Carbon::now())->format('Y-m-d'),
            'locality_id' => rand(70, 9999),
        ];
    }
}
