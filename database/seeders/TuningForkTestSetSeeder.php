<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TuningForkTestSetSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Tuning Fork Test Set')],
            [
                'title' => 'Tuning Fork Test Set',
                'slug' => Str::slug('Tuning Fork Test Set'),
                'introduction' => 'A tuning fork test set is a basic ENT diagnostic tool used to assess hearing function and differentiate between conductive and sensorineural hearing loss. The tests are simple, quick, and highly useful during clinical ENT examinations. Tuning forks remain an important part of bedside hearing assessment.',
                'what_is' => 'Common tuning fork tests include: Rinne test Weber test Schwabach test The tuning forks produce sound vibrations of specific frequencies that help evaluate sound conduction through air and bone pathways. The test helps detect: Ear infections Wax blockage Nerve-related hearing loss Middle ear disorders The equipment is portable and widely used in outpatient clinics and emergency ENT evaluations.',
                'symptoms' => [
            ['value' => 'Hearing difficulty'],
            ['value' => 'Ear blockage sensation'],
            ['value' => 'Sudden hearing loss'],
            ['value' => 'Ear infections'],
            ['value' => 'Ringing in the ears'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'No major medical risks'],
            ['value' => 'Mild temporary discomfort from vibration near the ear'],
            ['value' => 'Anxiety in young children'],
            ['value' => 'Inaccurate results if patient cooperation is poor'],
            ['value' => 'Temporary confusion in interpreting sound direction'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Continue ENT evaluation if hearing loss persists'],
            ['value' => 'Follow hearing treatment recommendations'],
            ['value' => 'Attend audiology testing when advised'],
            ['value' => 'Avoid excessive noise exposure'],
            ['value' => 'Maintain proper ear hygiene'],
        ],
                'surgery_risks' => [
            ['value' => 'No major medical risks'],
            ['value' => 'Mild temporary discomfort from vibration near the ear'],
            ['value' => 'Anxiety in young children'],
            ['value' => 'Inaccurate results if patient cooperation is poor'],
            ['value' => 'Temporary confusion in interpreting sound direction'],
        ],
                'long_term_outlook' => 'Tuning fork testing supports early identification of hearing problems and guides further diagnostic and treatment planning for long-term hearing care.',
                'conclusion' => '',
                'seo_title' => 'Tuning Fork Test Set',
                'seo_description' => 'A tuning fork test set is a basic ENT diagnostic tool used to assess hearing function and differentiate between conductive and sensorineural hearing loss. The tests are simple, quick, and highly useful during clinical ENT examinations. Tuning forks remain an important part of bedside hearing assessment.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
