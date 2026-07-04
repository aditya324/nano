<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class WoundDebridementInstrumentsSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Wound Debridement Instruments')],
            [
                'title' => 'Wound Debridement Instruments',
                'slug' => Str::slug('Wound Debridement Instruments'),
                'introduction' => 'Wound debridement instruments are specialized tools used to remove dead, infected, or unhealthy tissue from diabetic foot wounds.',
                'what_is' => 'Debridement is essential for promoting healthy tissue growth and improving healing in chronic diabetic ulcers.',
                'symptoms' => [],
                'causes' => [
            ['value' => 'Diabetic foot ulcers'],
            ['value' => 'Necrotic wound tissue removal'],
            ['value' => 'Infected wound management'],
            ['value' => 'Gangrenous tissue care'],
            ['value' => 'Chronic non-healing wounds'],
            ['value' => 'Treatments'],
            ['value' => 'These instruments are used during sharp or surgical debridement procedures to clean wounds, reduce infection, and support healing.'],
            ['value' => 'Benefits'],
            ['value' => 'Faster wound healing'],
            ['value' => 'Reduced bacterial load'],
            ['value' => 'Improved effectiveness of dressings'],
            ['value' => 'Better tissue regeneration'],
            ['value' => 'Risks / Limitations'],
            ['value' => 'Bleeding'],
            ['value' => 'Pain during procedure'],
            ['value' => 'Risk of infection'],
            ['value' => 'Need for repeated debridement'],
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
            ['value' => 'Pressure offloading'],
            ['value' => 'Blood sugar control'],
        ],
                'surgery_risks' => [],
                'long_term_outlook' => 'Proper wound debridement improves healing outcomes and reduces the risk of severe diabetic foot complications.',
                'conclusion' => '',
                'seo_title' => 'Wound Debridement Instruments',
                'seo_description' => 'Wound debridement instruments are specialized tools used to remove dead, infected, or unhealthy tissue from diabetic foot wounds.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
