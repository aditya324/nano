<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ManagementofSnoringandSleepApneaSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Management of Snoring and Sleep Apnea')],
            [
                'title' => 'Management of Snoring and Sleep Apnea',
                'slug' => Str::slug('Management of Snoring and Sleep Apnea'),
                'introduction' => 'Management of snoring and sleep apnea involves evaluation and treatment of airway obstruction occurring during sleep that leads to snoring, breathing pauses, and disturbed sleep. Sleep apnea can affect overall health, heart function, concentration, and daytime energy levels. Treatment improves breathing during sleep and enhances quality of life.',
                'what_is' => 'ENT specialists assess airway anatomy, sleep patterns, and associated risk factors through examination and sleep studies. Management options may include: Weight reduction guidance Nasal treatment CPAP therapy Oral appliances Surgical correction of airway obstruction Lifestyle modification Treatment depends on the severity and cause of airway blockage.',
                'symptoms' => [
            ['value' => 'Loud snoring'],
            ['value' => 'Interrupted breathing during sleep'],
            ['value' => 'Daytime sleepiness'],
            ['value' => 'Morning headaches'],
            ['value' => 'Poor concentration or fatigue'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'High blood pressure'],
            ['value' => 'Heart disease complications'],
            ['value' => 'Poor sleep quality'],
            ['value' => 'Increased accident risk due to drowsiness'],
            ['value' => 'Reduced oxygen levels during sleep'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Maintain healthy body weight'],
            ['value' => 'Use prescribed CPAP regularly if advised'],
            ['value' => 'Avoid alcohol and sedatives before sleep'],
            ['value' => 'Sleep in recommended positions'],
            ['value' => 'Attend follow-up sleep evaluations'],
        ],
                'surgery_risks' => [
            ['value' => 'High blood pressure'],
            ['value' => 'Heart disease complications'],
            ['value' => 'Poor sleep quality'],
            ['value' => 'Increased accident risk due to drowsiness'],
            ['value' => 'Reduced oxygen levels during sleep'],
        ],
                'long_term_outlook' => 'Proper treatment of sleep apnea improves sleep quality, energy levels, cardiovascular health, and overall well-being. Long-term management reduces serious health complications.',
                'conclusion' => '',
                'seo_title' => 'Management of Snoring and Sleep Apnea',
                'seo_description' => 'Management of snoring and sleep apnea involves evaluation and treatment of airway obstruction occurring during sleep that leads to snoring, breathing pauses, and disturbed sleep. Sleep apnea can affect overall health, heart function, concentration, and daytime energy levels. Treatment improves breathing during sleep and enhances quality of life.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
