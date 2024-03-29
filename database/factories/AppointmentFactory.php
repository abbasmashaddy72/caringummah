<?php

namespace Database\Factories;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Database\Eloquent\Factories\Factory;

class AppointmentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Appointment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'doctor_id' => Doctor::pluck('id')[$this->faker->numberBetween(1, Doctor::count() - 1)],
            'patient_id' => Patient::pluck('id')[$this->faker->numberBetween(1, Patient::count() - 1)],
            'symptoms' => $this->faker->realText(500, 5),
            'appointment_date' => $this->faker->dateTimeBetween('-30 days', '+10 days')->format('Y-m-d h:m:s'),
        ];
    }
}
