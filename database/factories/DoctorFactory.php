<?php

namespace Database\Factories;

use App\Models\Department;
use Illuminate\Database\Eloquent\Factories\Factory;

class DoctorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        \Bezhanov\Faker\ProviderCollectionHelper::addAllProvidersTo($this->faker);

        return [
            'name' => $this->faker->name(),
            'department_id' => Department::pluck('id')[$this->faker->numberBetween(1, Department::count() - 1)],
            'qualification' => $this->faker->educationalAttainment,
            'phone' => rand(7000000000, 9999999999),
            'clinic_hospital_name' => $this->faker->name(),
            'clinic_hospital_address' => $this->faker->address(),
            'clinic_hospital_phone' => rand(7000000000, 9999999999),
            'monthly_slots' => rand(10, 30),
            'extra_services' => null,
            'suggestions' => null,
        ];
    }
}
