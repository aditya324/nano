<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class NasalPolypsConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Nasal Polyps')],
            [
                'name' => 'Nasal Polyps',
                'slug' => Str::slug('Nasal Polyps'),
                'h1' => 'Nasal Polyps',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Nasal polyps are soft, noncancerous growths arising from the lining of the nose or sinuses due to chronic inflammation. They may block nasal airflow and contribute to recurrent sinus infections.',
                'about_more' => '',
                'overview' => 'Nasal polyps are soft, noncancerous growths arising from the lining of the nose or sinuses due to chronic inflammation. They may block nasal airflow and contribute to recurrent sinus infections.',
                'symptoms' => [
            ['value' => 'Persistent nasal blockage'],
            ['value' => 'Reduced sense of smell and taste'],
            ['value' => 'Mouth breathing and snoring'],
            ['value' => 'Postnasal drip and sinus pressure'],
            ['value' => 'Recurrent sinus infections'],
        ],
                'causes' => [
            ['value' => 'Chronic sinus inflammation'],
            ['value' => 'Allergic rhinitis or asthma'],
            ['value' => 'Recurrent sinus infections'],
            ['value' => 'Aspirin sensitivity in some patients'],
            ['value' => 'Genetic predisposition to inflammation'],
        ],
                'risks' => [
            ['value' => 'Chronic breathing difficulty'],
            ['value' => 'Frequent sinus infections'],
            ['value' => 'Sleep disturbances and snoring'],
            ['value' => 'Loss of smell sensation'],
            ['value' => 'Recurrence after treatment'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Nasal steroid sprays'],
            ['value' => 'Antiallergy medications'],
            ['value' => 'Saline nasal irrigation'],
            ['value' => 'Endoscopic sinus surgery for large polyps'],
            ['value' => 'Long-term allergy and inflammation control'],
        ],
                'recovery' => 'Most patients improve with treatment, though recurrence can occur. Regular ENT care helps maintain symptom control.',
                'sort_order' => 23,
                'is_active' => true,
                'meta_title' => 'Nasal Polyps',
                'meta_description' => 'Nasal polyps are soft, noncancerous growths arising from the lining of the nose or sinuses due to chronic inflammation. They may block nasal airflow and contrib',
                'meta_keywords' => '',
            ]
        );
    }
}
