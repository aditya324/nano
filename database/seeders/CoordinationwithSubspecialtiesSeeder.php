<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CoordinationwithSubspecialtiesSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Coordination with Subspecialties')],
            [
                'title' => 'Coordination with Subspecialties',
                'slug' => Str::slug('Coordination with Subspecialties'),
                'introduction' => 'Coordination with subspecialties involves collaborative healthcare management between internal medicine specialists and super-specialty departments such as cardiology, nephrology, endocrinology, pulmonology, and other medical specialties. This multidisciplinary approach ensures comprehensive diagnosis, treatment planning, monitoring, and long-term management of complex medical conditions.',
                'what_is' => 'Patients with chronic or multi-system illnesses often require care from multiple specialists to achieve the best treatment outcomes. Subspecialty coordination helps manage conditions such as heart disease, kidney disorders, diabetes, thyroid disorders, respiratory illnesses, metabolic syndrome, and critical care conditions. The collaborative approach improves communication between healthcare teams, supports timely interventions, and enhances patient-centered care through integrated treatment planning and continuous follow-up.',
                'symptoms' => [
            ['value' => 'Complex or multi-organ medical conditions'],
            ['value' => 'Persistent symptoms despite ongoing treatment'],
            ['value' => 'Chronic diseases requiring specialist evaluation'],
            ['value' => 'Frequent hospital admissions or disease flare-ups'],
            ['value' => 'Complications affecting multiple organ systems'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Delayed diagnosis or treatment coordination'],
            ['value' => 'Disease progression due to fragmented care'],
            ['value' => 'Increased complications from unmanaged chronic illness'],
            ['value' => 'Medication-related interactions or treatment overlap'],
            ['value' => 'Reduced quality of life and prolonged hospitalization'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular multidisciplinary consultations and follow-up care'],
            ['value' => 'Coordinated treatment planning and medication review'],
            ['value' => 'Continuous monitoring of organ function and disease progression'],
            ['value' => 'Lifestyle counseling and rehabilitation support'],
            ['value' => 'Long-term preventive care and chronic disease management'],
        ],
                'surgery_risks' => [
            ['value' => 'Delayed diagnosis or treatment coordination'],
            ['value' => 'Disease progression due to fragmented care'],
            ['value' => 'Increased complications from unmanaged chronic illness'],
            ['value' => 'Medication-related interactions or treatment overlap'],
            ['value' => 'Reduced quality of life and prolonged hospitalization'],
        ],
                'long_term_outlook' => 'The long-term outlook with coordinated subspecialty care is highly beneficial for individuals with chronic or complex medical conditions. Integrated medical management improves diagnostic accuracy, treatment effectiveness, patient safety, and overall quality of life. Continuous collaboration between specialists and healthcare providers supports better long-term health outcomes and comprehensive patient care.',
                'conclusion' => '',
                'seo_title' => 'Coordination with Subspecialties',
                'seo_description' => 'Coordination with subspecialties involves collaborative healthcare management between internal medicine specialists and super-specialty departments such as cardiology, nephrology, endocrinology, pulmonology, and other medical specialties. This multidisciplinary approach ensures comprehensive diagnosis, treatment planning, monitoring, and long-term management of complex medical conditions.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
