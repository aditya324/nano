<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RecurrentTonsillitisConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Recurrent Tonsillitis')],
            [
                'name' => 'Recurrent Tonsillitis',
                'slug' => Str::slug('Recurrent Tonsillitis'),
                'h1' => 'Recurrent Tonsillitis',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Recurrent tonsillitis refers to repeated episodes of tonsil infection occurring several times a year. It can significantly affect school attendance, work productivity, sleep, and overall health.',
                'about_more' => '',
                'overview' => 'Recurrent tonsillitis refers to repeated episodes of tonsil infection occurring several times a year. It can significantly affect school attendance, work productivity, sleep, and overall health.',
                'symptoms' => [
            ['value' => 'Repeated sore throat episodes'],
            ['value' => 'Fever and difficulty swallowing'],
            ['value' => 'Enlarged or chronically inflamed tonsils'],
            ['value' => 'Bad breath and throat discomfort'],
            ['value' => 'Frequent antibiotic use and fatigue'],
        ],
                'causes' => [
            ['value' => 'Repeated bacterial or viral infections'],
            ['value' => 'Poor immune resistance'],
            ['value' => 'Chronic tonsillar infection reservoirs'],
            ['value' => 'Exposure to crowded environments'],
            ['value' => 'Untreated previous infections'],
        ],
                'risks' => [
            ['value' => 'Chronic throat discomfort'],
            ['value' => 'Tonsillar abscess formation'],
            ['value' => 'Sleep apnea and snoring'],
            ['value' => 'Frequent school or work absence'],
            ['value' => 'Spread of infection to nearby tissues'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Repeated infection management'],
            ['value' => 'Antibiotics and supportive care'],
            ['value' => 'ENT throat evaluation'],
            ['value' => 'Tonsillectomy surgery for severe recurrence'],
            ['value' => 'Immune and lifestyle support measures'],
        ],
                'recovery' => 'Tonsillectomy provides long-term relief for many patients with recurrent infections and improves quality of life.',
                'sort_order' => 27,
                'is_active' => true,
                'meta_title' => 'Recurrent Tonsillitis',
                'meta_description' => 'Recurrent tonsillitis refers to repeated episodes of tonsil infection occurring several times a year. It can significantly affect school attendance, work produc',
                'meta_keywords' => '',
            ]
        );
    }
}
