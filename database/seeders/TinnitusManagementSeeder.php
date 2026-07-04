<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TinnitusManagementSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Tinnitus Management')],
            [
                'title' => 'Tinnitus Management',
                'slug' => Str::slug('Tinnitus Management'),
                'introduction' => 'Tinnitus management is a specialized ENT treatment approach used to evaluate and reduce the impact of ringing, buzzing, or abnormal sounds heard in the ears without an external source. The condition may be temporary or chronic and can significantly affect sleep, concentration, and emotional well-being. Management focuses on symptom control and improving quality of life.',
                'what_is' => 'The evaluation includes hearing tests, ear examination, and identification of possible causes such as hearing loss, infections, noise exposure, stress, or neurological conditions. Treatment options may include: Hearing therapy Sound therapy Counseling Stress management Hearing aids Medication support in selected cases Patients may also receive lifestyle guidance to reduce tinnitus triggers and improve coping mechanisms.',
                'symptoms' => [
            ['value' => 'Ringing sound in the ears'],
            ['value' => 'Buzzing or humming sensation'],
            ['value' => 'Sleep disturbances'],
            ['value' => 'Difficulty concentrating'],
            ['value' => 'Anxiety related to persistent sound perception'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Chronic sleep problems'],
            ['value' => 'Emotional stress or anxiety'],
            ['value' => 'Reduced concentration'],
            ['value' => 'Hearing-related communication issues'],
            ['value' => 'Reduced quality of life'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Avoid exposure to loud noise'],
            ['value' => 'Use hearing protection when necessary'],
            ['value' => 'Follow sound therapy recommendations'],
            ['value' => 'Attend hearing follow-up appointments'],
            ['value' => 'Practice stress reduction techniques'],
        ],
                'surgery_risks' => [
            ['value' => 'Chronic sleep problems'],
            ['value' => 'Emotional stress or anxiety'],
            ['value' => 'Reduced concentration'],
            ['value' => 'Hearing-related communication issues'],
            ['value' => 'Reduced quality of life'],
        ],
                'long_term_outlook' => 'Although tinnitus may not always completely disappear, proper management significantly reduces symptom severity and improves daily functioning and emotional well-being.',
                'conclusion' => '',
                'seo_title' => 'Tinnitus Management',
                'seo_description' => 'Tinnitus management is a specialized ENT treatment approach used to evaluate and reduce the impact of ringing, buzzing, or abnormal sounds heard in the ears without an external source. The condition may be temporary or chronic and can significantly affect sleep, concentration, and emotional well-being. Management focuses on symptom control and improving quality of life.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
