<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class WoundDebridementDrainageSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Wound Debridement & Drainage')],
            [
                'title' => 'Wound Debridement & Drainage',
                'slug' => Str::slug('Wound Debridement & Drainage'),
                'introduction' => 'Wound debridement and drainage are surgical procedures used to remove dead, infected, or damaged tissue and drain accumulated pus or infected fluid from wounds.',
                'what_is' => 'These procedures are commonly performed for: Infected wounds Diabetic foot ulcers Abscesses Traumatic injuries Necrotic tissue infections Debridement improves: Blood circulation to healthy tissue Infection control Wound healing process Drainage helps reduce pressure, pain, and bacterial load within infected tissues.',
                'symptoms' => [
            ['value' => 'Painful infected wound'],
            ['value' => 'Swelling and redness'],
            ['value' => 'Pus discharge'],
            ['value' => 'Fever or signs of infection'],
            ['value' => 'Delayed wound healing'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Bleeding complications'],
            ['value' => 'Pain during dressing changes'],
            ['value' => 'Recurrent infection'],
            ['value' => 'Delayed healing in severe disease'],
            ['value' => 'Tissue loss in advanced infections'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Attend regular wound dressing sessions'],
            ['value' => 'Keep wounds clean and dry'],
            ['value' => 'Take antibiotics as prescribed'],
            ['value' => 'Maintain good nutrition and hydration'],
            ['value' => 'Monitor for worsening infection signs'],
        ],
                'surgery_risks' => [
            ['value' => 'Bleeding complications'],
            ['value' => 'Pain during dressing changes'],
            ['value' => 'Recurrent infection'],
            ['value' => 'Delayed healing in severe disease'],
            ['value' => 'Tissue loss in advanced infections'],
        ],
                'long_term_outlook' => 'Proper wound management promotes healing, controls infection, preserves healthy tissue, and improves overall recovery outcomes.',
                'conclusion' => '',
                'seo_title' => 'Wound Debridement & Drainage',
                'seo_description' => 'Wound debridement and drainage are surgical procedures used to remove dead, infected, or damaged tissue and drain accumulated pus or infected fluid from wounds.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
