<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class WoundDebridementSharpSurgicalAutolyticEnzymaticSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Wound Debridement (Sharp / Surgical / Autolytic / Enzymatic)')],
            [
                'title' => 'Wound Debridement (Sharp / Surgical / Autolytic / Enzymatic)',
                'slug' => Str::slug('Wound Debridement (Sharp / Surgical / Autolytic / Enzymatic)'),
                'introduction' => 'Wound debridement is the removal of dead, infected, or unhealthy tissue from diabetic foot wounds.',
                'what_is' => 'Debridement promotes healing by reducing bacterial load and improving healthy tissue growth within chronic diabetic ulcers.',
                'symptoms' => [],
                'causes' => [
            ['value' => 'Diabetic foot ulcers'],
            ['value' => 'Infected wounds'],
            ['value' => 'Necrotic tissue removal'],
            ['value' => 'Chronic non-healing ulcers'],
            ['value' => 'Gangrenous tissue management'],
            ['value' => 'Treatments'],
            ['value' => 'Treatment methods include sharp surgical debridement, enzymatic agents, autolytic dressings, and mechanical cleaning depending on wound severity and tissue condition.'],
            ['value' => 'Benefits'],
            ['value' => 'Improved wound healing'],
            ['value' => 'Reduced infection risk'],
            ['value' => 'Removal of dead tissue'],
            ['value' => 'Better effectiveness of dressings'],
            ['value' => 'Risks / Limitations'],
            ['value' => 'Bleeding'],
            ['value' => 'Pain or discomfort'],
            ['value' => 'Infection risk'],
            ['value' => 'Need for repeated procedures'],
        ],
                'condition_risks' => [],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular dressing changes'],
            ['value' => 'Infection monitoring'],
            ['value' => 'Blood sugar control'],
            ['value' => 'Pressure offloading'],
        ],
                'surgery_risks' => [],
                'long_term_outlook' => 'Proper debridement supports healthy wound healing and reduces the risk of severe diabetic foot complications.',
                'conclusion' => '',
                'seo_title' => 'Wound Debridement (Sharp / Surgical / Autolytic / Enzymatic)',
                'seo_description' => 'Wound debridement is the removal of dead, infected, or unhealthy tissue from diabetic foot wounds.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
