<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RehabilitationPhysiotherapyforFootFunctionSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Rehabilitation & Physiotherapy for Foot Function')],
            [
                'title' => 'Rehabilitation & Physiotherapy for Foot Function',
                'slug' => Str::slug('Rehabilitation & Physiotherapy for Foot Function'),
                'introduction' => 'Rehabilitation and physiotherapy help restore mobility, strength, and foot function after diabetic foot complications or surgery.',
                'what_is' => 'Physical therapy improves walking ability, balance, circulation, and recovery after wounds, deformities, or amputations.',
                'symptoms' => [],
                'causes' => [
            ['value' => 'Post-amputation rehabilitation'],
            ['value' => 'Foot weakness'],
            ['value' => 'Gait abnormalities'],
            ['value' => 'Reduced mobility'],
            ['value' => 'Post-surgical recovery'],
            ['value' => 'Treatments'],
            ['value' => 'Treatment may include strengthening exercises, gait training, mobility therapy, balance exercises, prosthetic rehabilitation, and circulation improvement programs.'],
            ['value' => 'Benefits'],
            ['value' => 'Improved mobility'],
            ['value' => 'Better balance and walking ability'],
            ['value' => 'Faster recovery'],
            ['value' => 'Reduced disability'],
            ['value' => 'Enhanced quality of life'],
            ['value' => 'Risks / Limitations'],
            ['value' => 'Slow recovery in severe disease'],
            ['value' => 'Need for prolonged therapy'],
            ['value' => 'Physical limitations in advanced neuropathy'],
        ],
                'condition_risks' => [],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Continue prescribed exercises'],
            ['value' => 'Use supportive footwear'],
            ['value' => 'Attend physiotherapy sessions regularly'],
            ['value' => 'Monitor for new wounds or pressure areas'],
        ],
                'surgery_risks' => [],
                'long_term_outlook' => 'Consistent rehabilitation improves functional independence and long-term recovery in diabetic foot patients.',
                'conclusion' => '',
                'seo_title' => 'Rehabilitation & Physiotherapy for Foot Function',
                'seo_description' => 'Rehabilitation and physiotherapy help restore mobility, strength, and foot function after diabetic foot complications or surgery.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
