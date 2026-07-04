<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class FollowUpandLongTermENTCareSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Follow-Up and Long-Term ENT Care')],
            [
                'title' => 'Follow-Up and Long-Term ENT Care',
                'slug' => Str::slug('Follow-Up and Long-Term ENT Care'),
                'introduction' => 'Follow-up and long-term ENT care involve continuous monitoring and management of chronic or previously treated ear, nose, throat, and head and neck conditions. Regular follow-up helps prevent recurrence, monitor recovery, and maintain long-term ENT health. It is essential for both medical and surgical patients.',
                'what_is' => 'Long-term ENT care may include: Hearing evaluations Nasal and throat examinations Post-surgical monitoring Cancer surveillance Allergy management Voice and swallowing assessment Patients with chronic ENT disorders often require periodic review to adjust treatment plans and identify complications early. Preventive guidance and lifestyle counseling are also important parts of care.',
                'symptoms' => [
            ['value' => 'Recurrent ENT infections'],
            ['value' => 'Persistent hearing or voice problems'],
            ['value' => 'Chronic sinus symptoms'],
            ['value' => 'Post-surgical concerns'],
            ['value' => 'Ongoing allergy or breathing issues'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Disease recurrence'],
            ['value' => 'Delayed recognition of complications'],
            ['value' => 'Progressive hearing loss'],
            ['value' => 'Chronic infection'],
            ['value' => 'Reduced quality of life if untreated'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Attend regular ENT follow-up visits'],
            ['value' => 'Continue medications consistently'],
            ['value' => 'Maintain ear, nose, and throat hygiene'],
            ['value' => 'Avoid smoking and environmental irritants'],
            ['value' => 'Report new or worsening symptoms early'],
        ],
                'surgery_risks' => [
            ['value' => 'Disease recurrence'],
            ['value' => 'Delayed recognition of complications'],
            ['value' => 'Progressive hearing loss'],
            ['value' => 'Chronic infection'],
            ['value' => 'Reduced quality of life if untreated'],
        ],
                'long_term_outlook' => 'Consistent follow-up care improves long-term disease control, preserves function, and enhances quality of life for patients with ENT conditions.',
                'conclusion' => '',
                'seo_title' => 'Follow-Up and Long-Term ENT Care',
                'seo_description' => 'Follow-up and long-term ENT care involve continuous monitoring and management of chronic or previously treated ear, nose, throat, and head and neck conditions. Regular follow-up helps prevent recurrence, monitor recovery, and maintain long-term ENT health. It is essential for both medical and surgical patients.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
