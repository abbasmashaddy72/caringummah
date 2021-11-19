<?php

namespace Database\Seeders;

use App\Models\Ummah;
use Illuminate\Database\Seeder;

class UmmahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ummah::factory()->count(rand(200, 500))->create();
    }
}
