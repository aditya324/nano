<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AdvancedCardiacLifeSupportACLSProtocolsSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Advanced Cardiac Life Support (ACLS) Protocols')],
            [
                'title' => 'Advanced Cardiac Life Support (ACLS) Protocols',
                'slug' => Str::slug('Advanced Cardiac Life Support (ACLS) Protocols'),
                'introduction' => 'Advanced Cardiac Life Support (ACLS) protocols are specialized emergency medical procedures used to manage life-threatening cardiac and respiratory emergencies such as cardiac arrest, severe arrhythmias, stroke, respiratory failure, and circulatory collapse. ACLS combines advanced airway management, cardiac monitoring, emergency medications, defibrillation, and coordinated resuscitation techniques to stabilize critically ill patients and improve survival outcomes.',
                'what_is' => 'ACLS procedures are performed by trained healthcare professionals in emergency departments, intensive care units, ambulances, operating rooms, and critical care settings. The protocol follows a systematic approach to evaluate airway, breathing, circulation, neurological status, and cardiac rhythm. ACLS interventions may include cardiopulmonary resuscitation (CPR), electrical defibrillation, synchronized cardioversion, advanced airway placement, intravenous medication administration, and continuous cardiac monitoring to restore effective heart function and circulation.',
                'symptoms' => [
            ['value' => 'Sudden cardiac arrest or loss of consciousness'],
            ['value' => 'Severe chest pain, palpitations, or abnormal heart rhythms'],
            ['value' => 'Respiratory failure or severe breathing difficulty'],
            ['value' => 'Low blood pressure, shock, or circulatory collapse'],
            ['value' => 'Stroke symptoms, confusion, or sudden neurological deterioration'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Rib fractures or chest injury during CPR'],
            ['value' => 'Airway complications during emergency intubation'],
            ['value' => 'Cardiac rhythm disturbances during resuscitation procedures'],
            ['value' => 'Brain injury due to prolonged oxygen deprivation'],
            ['value' => 'Multi-organ dysfunction in prolonged critical illness situations'],
            ['value' => 'Treatment Options'],
            ['value' => 'ACLS protocols focus on rapid emergency intervention to restore circulation, stabilize heart rhythm, improve oxygen delivery, and support vital organ function. Procedures may include high-quality CPR, defibrillation for shockable arrhythmias, synchronized cardioversion, administration of emergency medications, advanced airway management, oxygen therapy, ventilator support, intravenous fluid resuscitation, and intensive care monitoring. ACLS may also involve treatment of underlying medical causes such as myocardial infarction, electrolyte imbalance, sepsis, respiratory failure, or drug overdose. Multidisciplinary critical care support and post-resuscitation management are essential components of comprehensive ACLS care.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Continuous cardiac and neurological monitoring after resuscitation'],
            ['value' => 'Intensive care observation and organ support management'],
            ['value' => 'Follow-up evaluation for underlying cardiac or medical conditions'],
            ['value' => 'Rehabilitation, physiotherapy, or neurological recovery support when required'],
            ['value' => 'Long-term cardiology and critical care follow-up programs'],
        ],
                'surgery_risks' => [
            ['value' => 'Rib fractures or chest injury during CPR'],
            ['value' => 'Airway complications during emergency intubation'],
            ['value' => 'Cardiac rhythm disturbances during resuscitation procedures'],
            ['value' => 'Brain injury due to prolonged oxygen deprivation'],
            ['value' => 'Multi-organ dysfunction in prolonged critical illness situations'],
            ['value' => 'Treatment Options'],
            ['value' => 'ACLS protocols focus on rapid emergency intervention to restore circulation, stabilize heart rhythm, improve oxygen delivery, and support vital organ function. Procedures may include high-quality CPR, defibrillation for shockable arrhythmias, synchronized cardioversion, administration of emergency medications, advanced airway management, oxygen therapy, ventilator support, intravenous fluid resuscitation, and intensive care monitoring. ACLS may also involve treatment of underlying medical causes such as myocardial infarction, electrolyte imbalance, sepsis, respiratory failure, or drug overdose. Multidisciplinary critical care support and post-resuscitation management are essential components of comprehensive ACLS care.'],
        ],
                'long_term_outlook' => 'The long-term outlook following ACLS intervention depends on the underlying medical emergency, speed of resuscitation, duration of cardiac or respiratory arrest, and overall patient health condition. Early emergency response, effective critical care management, rehabilitation support, medication adherence, lifestyle modification, and regular medical follow-up significantly help improve survival, neurological recovery, cardiovascular stability, and overall quality of life.',
                'conclusion' => '',
                'seo_title' => 'Advanced Cardiac Life Support (ACLS) Protocols',
                'seo_description' => 'Advanced Cardiac Life Support (ACLS) protocols are specialized emergency medical procedures used to manage life-threatening cardiac and respiratory emergencies such as cardiac arrest, severe arrhythmias, stroke, respiratory failure, and circulatory collapse. ACLS combines advanced airway management, cardiac monitoring, emergency medications, defibrillation, and coordinated resuscitation techniques to stabilize critically ill patients and improve survival outcomes.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
