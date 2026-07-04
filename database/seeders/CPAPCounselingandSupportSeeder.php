<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CPAPCounselingandSupportSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('CPAP Counseling and Support')],
            [
                'title' => 'CPAP Counseling and Support',
                'slug' => Str::slug('CPAP Counseling and Support'),
                'introduction' => 'CPAP counseling and support is a specialized service provided for patients using Continuous Positive Airway Pressure (CPAP) therapy to manage obstructive sleep apnea. The counseling helps patients understand device usage, mask fitting, maintenance, and long-term treatment adherence. Proper support improves comfort and treatment success.',
                'what_is' => 'The counseling process includes: Education about sleep apnea CPAP machine demonstration Mask fitting and adjustment Troubleshooting device problems Guidance for long-term compliance Patients receive support for: Device comfort issues Air leakage problems Dryness or irritation Sleep adjustment challenges Regular follow-up improves successful long-term CPAP use.',
                'symptoms' => [
            ['value' => 'Loud snoring'],
            ['value' => 'Daytime fatigue'],
            ['value' => 'Interrupted sleep'],
            ['value' => 'Breathing pauses during sleep'],
            ['value' => 'Morning headaches'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Discomfort with mask use'],
            ['value' => 'Nasal dryness or congestion'],
            ['value' => 'Poor treatment compliance'],
            ['value' => 'Sleep disturbance during adjustment period'],
            ['value' => 'Persistent symptoms if therapy is not used properly'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Use CPAP consistently every night'],
            ['value' => 'Clean masks and tubing regularly'],
            ['value' => 'Attend follow-up sleep clinic visits'],
            ['value' => 'Report mask discomfort promptly'],
            ['value' => 'Maintain healthy sleep habits'],
        ],
                'surgery_risks' => [
            ['value' => 'Discomfort with mask use'],
            ['value' => 'Nasal dryness or congestion'],
            ['value' => 'Poor treatment compliance'],
            ['value' => 'Sleep disturbance during adjustment period'],
            ['value' => 'Persistent symptoms if therapy is not used properly'],
        ],
                'long_term_outlook' => 'Consistent CPAP therapy significantly improves sleep apnea symptoms and reduces long-term cardiovascular and respiratory complications.',
                'conclusion' => '',
                'seo_title' => 'CPAP Counseling and Support',
                'seo_description' => 'CPAP counseling and support is a specialized service provided for patients using Continuous Positive Airway Pressure (CPAP) therapy to manage obstructive sleep apnea. The counseling helps patients understand device usage, mask fitting, maintenance, and long-term treatment adherence. Proper support improves comfort and treatment success.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
