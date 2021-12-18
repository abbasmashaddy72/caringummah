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
            ['option_name' => 'reference_1', 'option_value' => 'Quran (37:25)'],
            ['option_name' => 'contact_1', 'option_value' => '+91-74165-45740'],
            ['option_name' => 'image_1', 'option_value' => 'hero-1.png'],
            ['option_name' => 'ayath_2', 'option_value' => 'وَاعْبُدُوا اللَّهَ وَلَا تُشْرِكُوا بِهِ شَيْئًا ۖ وَبِالْوَالِدَيْنِ إِحْسَانًا وَبِذِي الْقُرْبَىٰ وَالْيَتَامَىٰ وَالْمَسَاكِينِ وَالْجَارِ ذِي الْقُرْبَىٰ وَالْجَارِ الْجُنُبِ وَالصَّاحِبِ بِالْجَنْبِ وَابْنِ السَّبِيلِ وَمَا مَلَكَتْ أَيْمَانُكُمْ ۗ إِنَّ اللَّهَ لَا يُحِبُّ مَنْ كَانَ مُخْتَالًا فَخُورًا'],
            ['option_name' => 'translation_2', 'option_value' => 'Worship Allah [alone] and associate none with Him. And be kind to parents, relatives, orphans, the poor, near and distant neighbors, close friends, [needy] travelers, and those [bondspeople] in your possession. Surely Allah does not like whoever is arrogant, boastful—'],
            ['option_name' => 'reference_2', 'option_value' => 'Quran (4:36)'],
            ['option_name' => 'contact_2', 'option_value' => '+91-74165-45740'],
            ['option_name' => 'image_2', 'option_value' => 'hero-2.png'],
        ]);
    }
}
