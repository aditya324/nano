<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TraumaResuscitationSurgicalControlDamageControlSurgerySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Trauma Resuscitation & Surgical Control (Damage Control Surgery)')],
            [
                'title' => 'Trauma Resuscitation & Surgical Control (Damage Control Surgery)',
                'slug' => Str::slug('Trauma Resuscitation & Surgical Control (Damage Control Surgery)'),
                'introduction' => 'Trauma resuscitation and damage control surgery are emergency surgical approaches used to stabilize severely injured patients with life-threatening bleeding or organ damage. The goal is rapid control of bleeding and contamination while preserving survival.',
                'what_is' => 'Damage control surgery is commonly used in: Major road traffic accidents Penetrating injuries Severe abdominal trauma Multiple organ injuries The approach involves: Rapid bleeding control Temporary stabilization Intensive care resuscitation Planned definitive surgery later This staged approach improves survival in critically injured patients.',
                'symptoms' => [
            ['value' => 'Severe traumatic injuries'],
            ['value' => 'Heavy bleeding'],
            ['value' => 'Shock or low blood pressure'],
            ['value' => 'Abdominal or chest trauma'],
            ['value' => 'Loss of consciousness or unstable vital signs'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Massive blood loss'],
            ['value' => 'Organ failure'],
            ['value' => 'Severe infection or sepsis'],
            ['value' => 'Prolonged ICU stay'],
            ['value' => 'Multiple surgical procedures required'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Intensive monitoring in ICU'],
            ['value' => 'Maintain adequate nutrition and hydration'],
            ['value' => 'Attend physiotherapy and rehabilitation sessions'],
            ['value' => 'Monitor wounds and drains carefully'],
            ['value' => 'Follow long-term trauma recovery plans'],
        ],
                'surgery_risks' => [
            ['value' => 'Massive blood loss'],
            ['value' => 'Organ failure'],
            ['value' => 'Severe infection or sepsis'],
            ['value' => 'Prolonged ICU stay'],
            ['value' => 'Multiple surgical procedures required'],
        ],
                'long_term_outlook' => 'Early trauma resuscitation and damage control surgery significantly improve survival in critically injured patients, although long-term recovery may require extensive rehabilitation and multidisciplinary care.',
                'conclusion' => '',
                'seo_title' => 'Trauma Resuscitation & Surgical Control (Damage Control Surgery)',
                'seo_description' => 'Trauma resuscitation and damage control surgery are emergency surgical approaches used to stabilize severely injured patients with life-threatening bleeding or organ damage. The goal is rapid control of bleeding and contamination while preserving survival.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
