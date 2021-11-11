<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(50)->create();
        $this->call(DepartmentSeeder::class);
        \App\Models\Doctor::factory(500)->create();
        \App\Models\Ummah::factory(500)->create();
        \App\Models\Patient::factory(500)->create();
        \App\Models\Appointment::factory(500)->create();
    }
}
