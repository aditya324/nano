<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AmputationTraumaticDiabeticSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Amputation (Traumatic / Diabetic)')],
            [
                'title' => 'Amputation (Traumatic / Diabetic)',
                'slug' => Str::slug('Amputation (Traumatic / Diabetic)'),
                'introduction' => 'Amputation is a surgical procedure involving removal of a severely damaged, infected, or non-viable limb or body part. It may be required due to trauma, diabetic complications, severe infection, or poor blood circulation.',
                'what_is' => 'Amputation is considered when limb preservation is not possible or life-threatening infection exists. Types include: Minor amputation (toe or finger) Major amputation (below-knee or above-knee) The procedure focuses on: Removing diseased tissue Preventing infection spread Preserving maximum function Preparing for rehabilitation and prosthesis use Comprehensive rehabilitation is important after surgery.',
                'symptoms' => [
            ['value' => 'Severe limb infection'],
            ['value' => 'Gangrene or tissue death'],
            ['value' => 'Uncontrolled diabetic foot disease'],
            ['value' => 'Severe traumatic injury'],
            ['value' => 'Critical limb ischemia'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Bleeding or infection'],
            ['value' => 'Phantom limb pain'],
            ['value' => 'Delayed wound healing'],
            ['value' => 'Emotional and psychological distress'],
            ['value' => 'Mobility limitations'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Maintain stump hygiene and dressing care'],
            ['value' => 'Attend physiotherapy and rehabilitation sessions'],
            ['value' => 'Use assistive devices as recommended'],
            ['value' => 'Monitor for infection or swelling'],
            ['value' => 'Receive psychological and social support if needed'],
        ],
                'surgery_risks' => [
            ['value' => 'Bleeding or infection'],
            ['value' => 'Phantom limb pain'],
            ['value' => 'Delayed wound healing'],
            ['value' => 'Emotional and psychological distress'],
            ['value' => 'Mobility limitations'],
        ],
                'long_term_outlook' => 'With proper rehabilitation, prosthetic support, and medical care, many patients regain independence, mobility, and improved quality of life.',
                'conclusion' => '',
                'seo_title' => 'Amputation (Traumatic / Diabetic)',
                'seo_description' => 'Amputation is a surgical procedure involving removal of a severely damaged, infected, or non-viable limb or body part. It may be required due to trauma, diabetic complications, severe infection, or poor blood circulation.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
