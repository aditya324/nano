<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SnoringConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Snoring')],
            [
                'name' => 'Snoring',
                'slug' => Str::slug('Snoring'),
                'h1' => 'Snoring',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Snoring is noisy breathing during sleep caused by vibration of tissues in the throat due to partial airway obstruction. It may occur occasionally or be associated with sleep-related breathing disorders.',
                'about_more' => '',
                'overview' => 'Snoring is noisy breathing during sleep caused by vibration of tissues in the throat due to partial airway obstruction. It may occur occasionally or be associated with sleep-related breathing disorders.',
                'symptoms' => [
            ['value' => 'Loud breathing sounds during sleep'],
            ['value' => 'Mouth breathing at night'],
            ['value' => 'Daytime tiredness or fatigue'],
            ['value' => 'Dry mouth on waking'],
            ['value' => 'Disturbed sleep for the patient or partner'],
        ],
                'causes' => [
            ['value' => 'Obesity and excess throat tissue'],
            ['value' => 'Nasal blockage or sinus problems'],
            ['value' => 'Enlarged tonsils or adenoids'],
            ['value' => 'Alcohol consumption before sleep'],
            ['value' => 'Sleeping on the back'],
        ],
                'risks' => [
            ['value' => 'Poor sleep quality'],
            ['value' => 'Daytime sleepiness and fatigue'],
            ['value' => 'Relationship and social disturbance'],
            ['value' => 'Increased risk of obstructive sleep apnea'],
            ['value' => 'Reduced concentration and productivity'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Weight reduction and lifestyle changes'],
            ['value' => 'Nasal obstruction treatment'],
            ['value' => 'Sleep position modification'],
            ['value' => 'CPAP therapy in associated sleep apnea'],
            ['value' => 'ENT surgery for airway obstruction if needed'],
        ],
                'recovery' => 'Many patients improve with lifestyle modifications and treatment of airway obstruction. Persistent snoring should be medically evaluated.',
                'sort_order' => 33,
                'is_active' => true,
                'meta_title' => 'Snoring',
                'meta_description' => 'Snoring is noisy breathing during sleep caused by vibration of tissues in the throat due to partial airway obstruction. It may occur occasionally or be associat',
                'meta_keywords' => '',
            ]
        );
    }
}
