<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class OffloadingandCustomTherapeuticFootwearSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Offloading and Custom Therapeutic Footwear')],
            [
                'title' => 'Offloading and Custom Therapeutic Footwear',
                'slug' => Str::slug('Offloading and Custom Therapeutic Footwear'),
                'introduction' => 'Offloading and custom therapeutic footwear help protect diabetic feet from excessive pressure and injury.',
                'what_is' => 'Specialized footwear reduces pressure points and supports healing of ulcers while preventing new wounds.',
                'symptoms' => [],
                'causes' => [
            ['value' => 'Diabetic foot ulcers'],
            ['value' => 'Charcot foot'],
            ['value' => 'Neuropathy-related foot problems'],
            ['value' => 'Pressure sore prevention'],
            ['value' => 'Post-surgical foot protection'],
            ['value' => 'Treatments'],
            ['value' => 'Treatment includes custom diabetic shoes, orthotic insoles, protective boots, braces, and pressure-relieving devices tailored to the patient’s foot condition.'],
            ['value' => 'Benefits'],
            ['value' => 'Reduced pressure on wounds'],
            ['value' => 'Improved walking comfort'],
            ['value' => 'Prevention of recurrent ulcers'],
            ['value' => 'Better foot stability'],
            ['value' => 'Risks / Limitations'],
            ['value' => 'Poor fit causing discomfort'],
            ['value' => 'Need for regular footwear replacement'],
            ['value' => 'Patient non-compliance'],
        ],
                'condition_risks' => [],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular footwear inspection'],
            ['value' => 'Maintain foot hygiene'],
            ['value' => 'Avoid barefoot walking'],
            ['value' => 'Periodic podiatry follow-up'],
        ],
                'surgery_risks' => [],
                'long_term_outlook' => 'Appropriate footwear significantly reduces ulcer recurrence and supports long-term foot health.',
                'conclusion' => '',
                'seo_title' => 'Offloading and Custom Therapeutic Footwear',
                'seo_description' => 'Offloading and custom therapeutic footwear help protect diabetic feet from excessive pressure and injury.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
