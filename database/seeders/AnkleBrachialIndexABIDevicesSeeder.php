<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AnkleBrachialIndexABIDevicesSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Ankle-Brachial Index (ABI) Devices')],
            [
                'title' => 'Ankle-Brachial Index (ABI) Devices',
                'slug' => Str::slug('Ankle-Brachial Index (ABI) Devices'),
                'introduction' => 'ABI devices measure blood pressure differences between the arms and ankles to assess peripheral arterial circulation.',
                'what_is' => 'The ankle-brachial index is a simple and non-invasive test commonly used for screening peripheral arterial disease.',
                'symptoms' => [],
                'causes' => [
            ['value' => 'Peripheral arterial disease screening'],
            ['value' => 'Monitoring blood circulation'],
            ['value' => 'Diabetic vascular assessment'],
            ['value' => 'Post-treatment vascular follow-up'],
            ['value' => 'Treatments'],
            ['value' => 'ABI testing helps guide treatments including lifestyle modification, smoking cessation, angioplasty, vascular bypass surgery, exercise therapy, and medication management for peripheral arterial disease.'],
            ['value' => 'Benefits'],
            ['value' => 'Quick and painless test'],
            ['value' => 'Early vascular disease detection'],
            ['value' => 'Non-invasive assessment'],
            ['value' => 'Useful for long-term monitoring'],
            ['value' => 'Risks / Limitations'],
            ['value' => 'Reduced accuracy in calcified arteries'],
            ['value' => 'Additional imaging may sometimes be needed'],
        ],
                'condition_risks' => [],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Usually no special care required'],
            ['value' => 'Continue vascular risk management'],
        ],
                'surgery_risks' => [],
                'long_term_outlook' => 'Routine ABI testing helps identify circulation problems early and supports timely vascular intervention.',
                'conclusion' => '',
                'seo_title' => 'Ankle-Brachial Index (ABI) Devices',
                'seo_description' => 'ABI devices measure blood pressure differences between the arms and ankles to assess peripheral arterial circulation.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
