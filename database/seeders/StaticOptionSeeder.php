<?php

namespace Database\Seeders;

use App\Models\StaticOption;
use Illuminate\Database\Seeder;

class StaticOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StaticOption::insert([
            ['option_name' => 'ayath_1', 'option_value' => 'مَا لَكُمْ لَا تَنَاصَرُونَ'],
            ['option_name' => 'translation_1', 'option_value' => 'What is the matter with you? Why do you not help one another?'],
            ['option_name' => 'reference_1', 'option_value' => 'QURAN (37:25)'],
            ['option_name' => 'contact_1', 'option_value' => '+91-74165-45740'],
            ['option_name' => 'image_1', 'option_value' => 'hero.png'],
        ]);
    }
}
