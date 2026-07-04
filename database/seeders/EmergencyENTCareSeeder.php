<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EmergencyENTCareSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Emergency ENT Care')],
            [
                'title' => 'Emergency ENT Care',
                'slug' => Str::slug('Emergency ENT Care'),
                'introduction' => 'Emergency ENT care involves immediate diagnosis and treatment of urgent conditions affecting the ear, nose, throat, airway, or head and neck region. Rapid intervention is essential to prevent breathing compromise, severe bleeding, infection spread, or permanent damage. Emergency ENT services provide life-saving care for both adults and children.',
                'what_is' => 'Emergency ENT management may include: Airway stabilization Control of severe nosebleeds Foreign body removal Emergency tracheostomy Treatment of severe infections Management of facial or neck trauma The ENT team works closely with emergency physicians, anesthetists, and critical care specialists when necessary. Prompt treatment improves survival and reduces complications.',
                'symptoms' => [
            ['value' => 'Severe breathing difficulty'],
            ['value' => 'Heavy nose or throat bleeding'],
            ['value' => 'Sudden hearing loss'],
            ['value' => 'Severe facial swelling or infection'],
            ['value' => 'Foreign body causing airway obstruction'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Airway blockage'],
            ['value' => 'Severe blood loss'],
            ['value' => 'Spread of infection'],
            ['value' => 'Permanent hearing or voice damage'],
            ['value' => 'Life-threatening complications'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Attend emergency follow-up appointments'],
            ['value' => 'Continue medications properly'],
            ['value' => 'Monitor breathing and swallowing carefully'],
            ['value' => 'Avoid delaying medical attention for recurrent symptoms'],
            ['value' => 'Maintain hydration and nutrition during recovery'],
        ],
                'surgery_risks' => [
            ['value' => 'Airway blockage'],
            ['value' => 'Severe blood loss'],
            ['value' => 'Spread of infection'],
            ['value' => 'Permanent hearing or voice damage'],
            ['value' => 'Life-threatening complications'],
        ],
                'long_term_outlook' => 'Timely emergency ENT care improves survival, preserves organ function, and reduces long-term complications from critical ENT conditions.',
                'conclusion' => '',
                'seo_title' => 'Emergency ENT Care',
                'seo_description' => 'Emergency ENT care involves immediate diagnosis and treatment of urgent conditions affecting the ear, nose, throat, airway, or head and neck region. Rapid intervention is essential to prevent breathing compromise, severe bleeding, infection spread, or permanent damage. Emergency ENT services provide life-saving care for both adults and children.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
