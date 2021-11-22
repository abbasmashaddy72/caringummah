<?php

namespace Database\Factories;

use App\Models\Connection;
use Illuminate\Database\Eloquent\Factories\Factory;

class ConnectionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Connection::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $this->faker->addProvider(new \Bezhanov\Faker\Provider\Educator($this->faker));

        $type = ['Masjid', 'Madarsa', 'School'];

        return [
            'name' => $this->faker->university,
            'type' => $type[array_rand($type)],
            'locality_id' => rand(90, 100),
        ];
    }
}
