<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class NeuroEndoscopyEquipmentSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Neuro Endoscopy Equipment')],
            [
                'title' => 'Neuro Endoscopy Equipment',
                'slug' => Str::slug('Neuro Endoscopy Equipment'),
                'introduction' => 'Neuro endoscopy equipment consists of specialized camera-guided surgical instruments used for minimally invasive neurosurgical procedures within the brain and spinal system. The equipment allows surgeons to access deep neurological structures through smaller openings with improved visualization. It reduces tissue damage and supports faster recovery.',
                'what_is' => 'The system includes: High-definition endoscopic cameras Fiberoptic lighting systems Specialized neurosurgical instruments Irrigation and suction systems Video monitoring displays Neuro endoscopy is commonly used for: Hydrocephalus treatment Ventricular surgery Pituitary surgery Skull base procedures Cyst and tumor management Minimally invasive approaches improve patient comfort and reduce hospital stay.',
                'symptoms' => [
            ['value' => 'Hydrocephalus'],
            ['value' => 'Pituitary tumors'],
            ['value' => 'Brain cysts'],
            ['value' => 'CSF flow obstruction'],
            ['value' => 'Skull base abnormalities'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Bleeding complications'],
            ['value' => 'Infection'],
            ['value' => 'CSF leakage'],
            ['value' => 'Neurological injury'],
            ['value' => 'Need for additional procedures'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Attend neurological follow-up appointments'],
            ['value' => 'Monitor for headaches or vomiting'],
            ['value' => 'Continue medications as prescribed'],
            ['value' => 'Avoid heavy activity temporarily'],
            ['value' => 'Attend imaging follow-up studies'],
        ],
                'surgery_risks' => [
            ['value' => 'Bleeding complications'],
            ['value' => 'Infection'],
            ['value' => 'CSF leakage'],
            ['value' => 'Neurological injury'],
            ['value' => 'Need for additional procedures'],
        ],
                'long_term_outlook' => 'Neuro endoscopy improves surgical precision with reduced tissue trauma. Many patients experience faster recovery and better postoperative comfort.',
                'conclusion' => '',
                'seo_title' => 'Neuro Endoscopy Equipment',
                'seo_description' => 'Neuro endoscopy equipment consists of specialized camera-guided surgical instruments used for minimally invasive neurosurgical procedures within the brain and spinal system. The equipment allows surgeons to access deep neurological structures through smaller openings with improved visualization. It reduces tissue damage and supports faster recovery.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
