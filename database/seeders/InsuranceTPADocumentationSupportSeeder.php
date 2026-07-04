<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class InsuranceTPADocumentationSupportSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Insurance & TPA Documentation Support')],
            [
                'title' => 'Insurance & TPA Documentation Support',
                'slug' => Str::slug('Insurance & TPA Documentation Support'),
                'introduction' => 'Insurance and TPA (Third Party Administrator) documentation support is a healthcare administrative service that assists patients with insurance processing, authorization, billing documentation, and claim coordination for ENT treatments and surgeries. The facility helps simplify financial and insurance-related procedures for patients and families. Efficient documentation improves treatment accessibility and administrative convenience.',
                'what_is' => 'The support system may provide: Insurance verification Cashless hospitalization coordination Surgical approval processing Medical report preparation Claim documentation assistance Billing clarification and coordination The service supports patients undergoing: ENT surgeries Hearing rehabilitation procedures Cancer treatments Emergency ENT care Long-term treatments requiring insurance support Dedicated administrative coordination reduces delays and confusion.',
                'symptoms' => [
            ['value' => 'Need for hospitalization or surgery'],
            ['value' => 'Requirement for insurance authorization'],
            ['value' => 'Long-term ENT treatment expenses'],
            ['value' => 'Confusion regarding claim procedures'],
            ['value' => 'Financial planning concerns related to treatment'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Delays in insurance approval'],
            ['value' => 'Documentation errors'],
            ['value' => 'Claim rejection due to incomplete records'],
            ['value' => 'Financial stress during treatment'],
            ['value' => 'Administrative processing delays'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Keep copies of all medical records safely'],
            ['value' => 'Submit insurance documents promptly'],
            ['value' => 'Attend billing and insurance follow-up discussions when needed'],
            ['value' => 'Clarify insurance coverage details carefully'],
            ['value' => 'Maintain communication with hospital administrative teams'],
        ],
                'surgery_risks' => [
            ['value' => 'Delays in insurance approval'],
            ['value' => 'Documentation errors'],
            ['value' => 'Claim rejection due to incomplete records'],
            ['value' => 'Financial stress during treatment'],
            ['value' => 'Administrative processing delays'],
        ],
                'long_term_outlook' => 'Insurance and TPA support services improve healthcare accessibility, reduce administrative stress, and help patients focus on recovery and long-term ENT care.',
                'conclusion' => '',
                'seo_title' => 'Insurance & TPA Documentation Support',
                'seo_description' => 'Insurance and TPA (Third Party Administrator) documentation support is a healthcare administrative service that assists patients with insurance processing, authorization, billing documentation, and claim coordination for ENT treatments and surgeries. The facility helps simplify financial and insurance-related procedures for patients and families. Efficient documentation improves treatment accessibility and administrative convenience.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
