<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PeripheralNeuropathyTestingMonofilamentBiothesiometerSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Peripheral Neuropathy Testing (Monofilament, Biothesiometer)')],
            [
                'title' => 'Peripheral Neuropathy Testing (Monofilament, Biothesiometer)',
                'slug' => Str::slug('Peripheral Neuropathy Testing (Monofilament, Biothesiometer)'),
                'introduction' => 'Peripheral neuropathy testing evaluates nerve damage and loss of sensation in diabetic feet.',
                'what_is' => 'Neuropathy reduces the ability to feel pain or pressure, increasing the risk of unnoticed injuries and ulcers.',
                'symptoms' => [],
                'causes' => [
            ['value' => 'Diabetic neuropathy screening'],
            ['value' => 'Foot ulcer risk assessment'],
            ['value' => 'Sensory loss evaluation'],
            ['value' => 'Long-term diabetic monitoring'],
            ['value' => 'Preventive diabetic foot care'],
            ['value' => 'Treatments'],
            ['value' => 'Testing helps guide preventive care, pressure offloading, footwear modification, neuropathic pain management, and patient education.'],
            ['value' => 'Benefits'],
            ['value' => 'Early neuropathy detection'],
            ['value' => 'Prevention of ulcers'],
            ['value' => 'Better risk assessment'],
            ['value' => 'Improved foot protection planning'],
            ['value' => 'Risks / Limitations'],
            ['value' => 'Reduced accuracy in severe deformities'],
            ['value' => 'Requires regular follow-up testing'],
        ],
                'condition_risks' => [],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Daily foot inspection'],
            ['value' => 'Protective footwear use'],
            ['value' => 'Avoid walking barefoot'],
            ['value' => 'Regular diabetic foot reviews'],
        ],
                'surgery_risks' => [],
                'long_term_outlook' => 'Routine neuropathy testing helps prevent serious diabetic foot injuries and amputations.',
                'conclusion' => '',
                'seo_title' => 'Peripheral Neuropathy Testing (Monofilament, Biothesiometer)',
                'seo_description' => 'Peripheral neuropathy testing evaluates nerve damage and loss of sensation in diabetic feet.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
