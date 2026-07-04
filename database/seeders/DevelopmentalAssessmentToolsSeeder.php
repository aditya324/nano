<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DevelopmentalAssessmentToolsSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Developmental Assessment Tools')],
            [
                'title' => 'Developmental Assessment Tools',
                'slug' => Str::slug('Developmental Assessment Tools'),
                'introduction' => 'Developmental assessment tools are specialized screening and evaluation systems used to monitor physical, cognitive, emotional, speech, behavioral, and social development in children.',
                'what_is' => 'These tools help identify developmental delays, autism spectrum disorders, learning disabilities, speech problems, and behavioral concerns at an early stage. Assessments may include milestone checklists, cognitive tests, speech evaluations, hearing screening, and behavioral observation performed by pediatricians and developmental specialists.',
                'symptoms' => [
            ['value' => 'Delayed speech or language development'],
            ['value' => 'Poor social interaction or communication skills'],
            ['value' => 'Difficulty with learning or concentration'],
            ['value' => 'Delayed motor skills such as walking or coordination'],
            ['value' => 'Behavioral concerns or emotional difficulties'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Delayed diagnosis of developmental disorders'],
            ['value' => 'Learning difficulties affecting education'],
            ['value' => 'Social and communication challenges'],
            ['value' => 'Emotional and behavioral complications'],
            ['value' => 'Reduced long-term developmental potential without early intervention'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Attend regular developmental follow-up sessions'],
            ['value' => 'Participate in speech, occupational, or behavioral therapy if advised'],
            ['value' => 'Encourage stimulating learning and play activities at home'],
            ['value' => 'Maintain proper nutrition and emotional support'],
            ['value' => 'Monitor developmental progress consistently'],
        ],
                'surgery_risks' => [
            ['value' => 'Delayed diagnosis of developmental disorders'],
            ['value' => 'Learning difficulties affecting education'],
            ['value' => 'Social and communication challenges'],
            ['value' => 'Emotional and behavioral complications'],
            ['value' => 'Reduced long-term developmental potential without early intervention'],
        ],
                'long_term_outlook' => 'Early developmental assessment and intervention improve learning ability, communication, emotional health, and overall developmental outcomes in children.',
                'conclusion' => '',
                'seo_title' => 'Developmental Assessment Tools',
                'seo_description' => 'Developmental assessment tools are specialized screening and evaluation systems used to monitor physical, cognitive, emotional, speech, behavioral, and social development in children.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
