<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PerioperativeCriticalCareSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Perioperative Critical Care')],
            [
                'title' => 'Perioperative Critical Care',
                'slug' => Str::slug('Perioperative Critical Care'),
                'introduction' => 'Perioperative critical care is specialized medical management provided before, during, and after major surgical procedures for patients who are critically ill or at high surgical risk. This care focuses on maintaining vital organ function, preventing complications, and improving surgical outcomes.',
                'what_is' => 'Perioperative critical care involves a multidisciplinary team including surgeons, anesthesiologists, intensivists, nurses, and rehabilitation specialists. Care may include: Intensive monitoring of heart, lungs, and kidney function Ventilator support Fluid and electrolyte management Blood transfusion support Infection prevention Pain management This approach is especially important in: Major abdominal surgery Trauma surgery Cancer surgery High-risk elderly patients Patients with multiple medical conditions Continuous monitoring in ICU or high-dependency units helps detect complications early and improves survival.',
                'symptoms' => [
            ['value' => 'Severe surgical illness or trauma'],
            ['value' => 'Organ dysfunction or unstable vital signs'],
            ['value' => 'Breathing difficulty requiring monitoring'],
            ['value' => 'Major blood loss or shock'],
            ['value' => 'High-risk medical conditions before surgery'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Infection or sepsis'],
            ['value' => 'Respiratory complications'],
            ['value' => 'Organ failure'],
            ['value' => 'Blood clot formation'],
            ['value' => 'Prolonged ICU stay'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Maintain intensive monitoring as advised'],
            ['value' => 'Follow ventilator and oxygen therapy recommendations'],
            ['value' => 'Perform breathing and physiotherapy exercises'],
            ['value' => 'Maintain adequate nutrition and hydration'],
            ['value' => 'Attend regular follow-up evaluations after discharge'],
        ],
                'surgery_risks' => [
            ['value' => 'Infection or sepsis'],
            ['value' => 'Respiratory complications'],
            ['value' => 'Organ failure'],
            ['value' => 'Blood clot formation'],
            ['value' => 'Prolonged ICU stay'],
        ],
                'long_term_outlook' => 'Comprehensive perioperative critical care improves surgical safety, reduces complications, shortens hospital stay, and enhances long-term recovery and survival.',
                'conclusion' => '',
                'seo_title' => 'Perioperative Critical Care',
                'seo_description' => 'Perioperative critical care is specialized medical management provided before, during, and after major surgical procedures for patients who are critically ill or at high surgical risk. This care focuses on maintaining vital organ function, preventing complications, and improving surgical outcomes.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
