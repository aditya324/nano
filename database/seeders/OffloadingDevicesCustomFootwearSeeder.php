<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class OffloadingDevicesCustomFootwearSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Offloading Devices / Custom Footwear')],
            [
                'title' => 'Offloading Devices / Custom Footwear',
                'slug' => Str::slug('Offloading Devices / Custom Footwear'),
                'introduction' => 'Offloading devices and custom footwear reduce pressure on diabetic feet and help prevent ulcer formation.',
                'what_is' => 'Pressure redistribution is important for healing diabetic foot ulcers and preventing recurrence.',
                'symptoms' => [],
                'causes' => [
            ['value' => 'Diabetic foot ulcers'],
            ['value' => 'Charcot foot'],
            ['value' => 'Neuropathy-related pressure injuries'],
            ['value' => 'Foot deformities'],
            ['value' => 'Post-surgical foot protection'],
            ['value' => 'Treatments'],
            ['value' => 'Treatment may include diabetic shoes, custom insoles, total contact casts, braces, walkers, and pressure-relieving footwear.'],
            ['value' => 'Benefits'],
            ['value' => 'Reduced pressure on wounds'],
            ['value' => 'Faster ulcer healing'],
            ['value' => 'Prevention of recurrent ulcers'],
            ['value' => 'Improved walking comfort'],
            ['value' => 'Risks / Limitations'],
            ['value' => 'Improper fitting discomfort'],
            ['value' => 'Reduced mobility in some patients'],
            ['value' => 'Need for regular replacement'],
        ],
                'condition_risks' => [],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Inspect footwear daily'],
            ['value' => 'Maintain foot hygiene'],
            ['value' => 'Avoid barefoot walking'],
            ['value' => 'Regular podiatry follow-up'],
        ],
                'surgery_risks' => [],
                'long_term_outlook' => 'Proper offloading significantly improves ulcer healing and long-term diabetic foot protection.',
                'conclusion' => '',
                'seo_title' => 'Offloading Devices / Custom Footwear',
                'seo_description' => 'Offloading devices and custom footwear reduce pressure on diabetic feet and help prevent ulcer formation.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
