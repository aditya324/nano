<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TraumaRelatedOrthopedicSurgicalCareCollaborationSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Trauma-Related Orthopedic Surgical Care Collaboration')],
            [
                'title' => 'Trauma-Related Orthopedic Surgical Care Collaboration',
                'slug' => Str::slug('Trauma-Related Orthopedic Surgical Care Collaboration'),
                'introduction' => 'Trauma-related orthopedic surgical collaboration involves coordinated management between general surgeons, orthopedic surgeons, and trauma specialists for patients with multiple injuries affecting bones, joints, and internal organs.',
                'what_is' => 'This collaborative approach is commonly required in: Road traffic accidents Crush injuries Falls from height Polytrauma cases Management may involve: Fracture stabilization Soft tissue repair Internal organ surgery Blood loss management Rehabilitation planning Close coordination improves survival, reduces complications, and supports functional recovery.',
                'symptoms' => [
            ['value' => 'Severe traumatic injuries'],
            ['value' => 'Bone fractures or deformities'],
            ['value' => 'Internal bleeding symptoms'],
            ['value' => 'Difficulty moving limbs'],
            ['value' => 'Shock or unstable vital signs'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Infection or sepsis'],
            ['value' => 'Blood loss complications'],
            ['value' => 'Permanent disability'],
            ['value' => 'Delayed fracture healing'],
            ['value' => 'Multiple organ complications'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Attend physiotherapy and rehabilitation sessions'],
            ['value' => 'Maintain nutritional support for healing'],
            ['value' => 'Follow weight-bearing restrictions carefully'],
            ['value' => 'Monitor surgical wounds and fractures regularly'],
            ['value' => 'Attend multidisciplinary follow-up appointments'],
        ],
                'surgery_risks' => [
            ['value' => 'Infection or sepsis'],
            ['value' => 'Blood loss complications'],
            ['value' => 'Permanent disability'],
            ['value' => 'Delayed fracture healing'],
            ['value' => 'Multiple organ complications'],
        ],
                'long_term_outlook' => 'Comprehensive trauma collaboration improves recovery, mobility, functional independence, and long-term quality of life after major injuries.',
                'conclusion' => '',
                'seo_title' => 'Trauma-Related Orthopedic Surgical Care Collaboration',
                'seo_description' => 'Trauma-related orthopedic surgical collaboration involves coordinated management between general surgeons, orthopedic surgeons, and trauma specialists for patients with multiple injuries affecting bones, joints, and internal organs.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
