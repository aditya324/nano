<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ObstructiveSleepApneaConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Obstructive Sleep Apnea')],
            [
                'name' => 'Obstructive Sleep Apnea',
                'slug' => Str::slug('Obstructive Sleep Apnea'),
                'h1' => 'Obstructive Sleep Apnea',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Obstructive sleep apnea (OSA) is a sleep disorder in which repeated airway blockage during sleep causes interrupted breathing and reduced oxygen levels. It can significantly affect heart health and overall well-being.',
                'about_more' => '',
                'overview' => 'Obstructive sleep apnea (OSA) is a sleep disorder in which repeated airway blockage during sleep causes interrupted breathing and reduced oxygen levels. It can significantly affect heart health and overall well-being.',
                'symptoms' => [
            ['value' => 'Loud habitual snoring'],
            ['value' => 'Pauses in breathing during sleep'],
            ['value' => 'Excessive daytime sleepiness'],
            ['value' => 'Morning headaches and fatigue'],
            ['value' => 'Poor concentration and memory'],
        ],
                'causes' => [
            ['value' => 'Obesity and excess neck tissue'],
            ['value' => 'Enlarged tonsils or adenoids'],
            ['value' => 'Nasal blockage or deviated septum'],
            ['value' => 'Relaxation of throat muscles during sleep'],
            ['value' => 'Genetic and anatomical factors'],
        ],
                'risks' => [
            ['value' => 'High blood pressure and heart disease'],
            ['value' => 'Stroke and metabolic disorders'],
            ['value' => 'Daytime fatigue and accidents'],
            ['value' => 'Poor work or academic performance'],
            ['value' => 'Mood changes and depression'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Sleep study evaluation'],
            ['value' => 'CPAP (continuous positive airway pressure) therapy'],
            ['value' => 'Weight loss and exercise'],
            ['value' => 'Oral appliances for airway support'],
            ['value' => 'Surgical correction of airway obstruction'],
        ],
                'recovery' => 'Most patients improve significantly with proper treatment. Long-term management helps reduce cardiovascular and sleep-related complications.',
                'sort_order' => 34,
                'is_active' => true,
                'meta_title' => 'Obstructive Sleep Apnea',
                'meta_description' => 'Obstructive sleep apnea (OSA) is a sleep disorder in which repeated airway blockage during sleep causes interrupted breathing and reduced oxygen levels. It can ',
                'meta_keywords' => '',
            ]
        );
    }
}
