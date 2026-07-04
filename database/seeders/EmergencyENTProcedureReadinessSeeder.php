<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EmergencyENTProcedureReadinessSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Emergency ENT Procedure Readiness')],
            [
                'title' => 'Emergency ENT Procedure Readiness',
                'slug' => Str::slug('Emergency ENT Procedure Readiness'),
                'introduction' => 'Emergency ENT procedure readiness refers to the availability of trained staff, emergency equipment, and rapid-response systems for managing urgent ENT conditions and airway emergencies. The setup ensures immediate treatment for life-threatening ENT situations. Rapid intervention can prevent serious complications and save lives.',
                'what_is' => 'The emergency readiness setup may include: Airway management equipment Emergency tracheostomy kits Bleeding control instruments Suction and oxygen systems Emergency medications Endoscopic emergency tools The system supports management of: Airway obstruction Severe epistaxis Foreign body aspiration Neck trauma Sudden airway swelling Acute infections Well-prepared emergency ENT systems improve patient survival and treatment efficiency.',
                'symptoms' => [
            ['value' => 'Severe breathing difficulty'],
            ['value' => 'Sudden airway obstruction'],
            ['value' => 'Heavy nose or throat bleeding'],
            ['value' => 'Choking episodes'],
            ['value' => 'Rapidly worsening neck swelling'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Airway compromise'],
            ['value' => 'Severe blood loss'],
            ['value' => 'Delayed emergency treatment'],
            ['value' => 'Respiratory failure'],
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
            ['value' => 'Maintain adequate hydration and nutrition'],
        ],
                'surgery_risks' => [
            ['value' => 'Airway compromise'],
            ['value' => 'Severe blood loss'],
            ['value' => 'Delayed emergency treatment'],
            ['value' => 'Respiratory failure'],
            ['value' => 'Life-threatening complications'],
        ],
                'long_term_outlook' => 'Emergency ENT preparedness improves survival, reduces complications, and supports rapid recovery in critical ENT conditions.',
                'conclusion' => '',
                'seo_title' => 'Emergency ENT Procedure Readiness',
                'seo_description' => 'Emergency ENT procedure readiness refers to the availability of trained staff, emergency equipment, and rapid-response systems for managing urgent ENT conditions and airway emergencies. The setup ensures immediate treatment for life-threatening ENT situations. Rapid intervention can prevent serious complications and save lives.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
