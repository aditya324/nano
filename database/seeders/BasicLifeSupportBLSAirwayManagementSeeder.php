<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BasicLifeSupportBLSAirwayManagementSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Basic Life Support (BLS) & Airway Management')],
            [
                'title' => 'Basic Life Support (BLS) & Airway Management',
                'slug' => Str::slug('Basic Life Support (BLS) & Airway Management'),
                'introduction' => 'Basic Life Support (BLS) and airway management are essential emergency medical procedures used to maintain breathing, circulation, and oxygen delivery in patients experiencing cardiac arrest, respiratory failure, choking, unconsciousness, or other life-threatening emergencies. These procedures focus on immediate stabilization and preservation of vital organ function until advanced medical care becomes available.',
                'what_is' => 'BLS procedures include cardiopulmonary resuscitation (CPR), chest compressions, rescue breathing, automated external defibrillator (AED) use, and emergency response activation. Airway management involves techniques and devices used to maintain an open airway and support breathing in critically ill or unconscious patients. These procedures are commonly performed in emergency departments, ambulances, intensive care units, operating rooms, trauma centers, and prehospital emergency settings by trained healthcare professionals and emergency responders.',
                'symptoms' => [
            ['value' => 'Sudden collapse or loss of consciousness'],
            ['value' => 'Absence of breathing or abnormal breathing patterns'],
            ['value' => 'Choking or airway obstruction'],
            ['value' => 'Severe respiratory distress or low oxygen levels'],
            ['value' => 'Cardiac arrest, cyanosis, or unresponsiveness'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Rib fractures or chest injury during CPR'],
            ['value' => 'Airway trauma or aspiration complications'],
            ['value' => 'Inadequate oxygen delivery if airway support is delayed'],
            ['value' => 'Gastric inflation or vomiting during rescue breathing'],
            ['value' => 'Brain injury due to prolonged oxygen deprivation or delayed resuscitation'],
            ['value' => 'Treatment Options'],
            ['value' => 'BLS and airway management procedures focus on restoring effective breathing, circulation, and oxygenation during medical emergencies. Treatment may include chest compressions, rescue breathing, AED-assisted defibrillation, oxygen therapy, suctioning, airway positioning, bag-mask ventilation, insertion of airway devices, endotracheal intubation, and ventilator support when required. These procedures are often followed by advanced emergency care, intensive monitoring, treatment of underlying medical conditions, and post-resuscitation critical care management to improve patient survival and recovery outcomes.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Continuous monitoring of breathing, circulation, and neurological status'],
            ['value' => 'Oxygen support and airway monitoring after stabilization'],
            ['value' => 'Intensive care observation when required'],
            ['value' => 'Evaluation and treatment of underlying medical emergencies'],
            ['value' => 'Rehabilitation and long-term medical follow-up depending on patient recovery'],
        ],
                'surgery_risks' => [
            ['value' => 'Rib fractures or chest injury during CPR'],
            ['value' => 'Airway trauma or aspiration complications'],
            ['value' => 'Inadequate oxygen delivery if airway support is delayed'],
            ['value' => 'Gastric inflation or vomiting during rescue breathing'],
            ['value' => 'Brain injury due to prolonged oxygen deprivation or delayed resuscitation'],
            ['value' => 'Treatment Options'],
            ['value' => 'BLS and airway management procedures focus on restoring effective breathing, circulation, and oxygenation during medical emergencies. Treatment may include chest compressions, rescue breathing, AED-assisted defibrillation, oxygen therapy, suctioning, airway positioning, bag-mask ventilation, insertion of airway devices, endotracheal intubation, and ventilator support when required. These procedures are often followed by advanced emergency care, intensive monitoring, treatment of underlying medical conditions, and post-resuscitation critical care management to improve patient survival and recovery outcomes.'],
        ],
                'long_term_outlook' => 'The long-term outlook following BLS and airway management procedures depends on the underlying medical emergency, speed of intervention, duration of oxygen deprivation, and overall patient health. Early emergency response, effective resuscitation, proper airway support, rehabilitation care, and ongoing medical follow-up significantly help improve survival, neurological recovery, organ function, and overall quality of life.',
                'conclusion' => '',
                'seo_title' => 'Basic Life Support (BLS) & Airway Management',
                'seo_description' => 'Basic Life Support (BLS) and airway management are essential emergency medical procedures used to maintain breathing, circulation, and oxygen delivery in patients experiencing cardiac arrest, respiratory failure, choking, unconsciousness, or other life-threatening emergencies. These procedures focus on immediate stabilization and preservation of vital organ function until advanced medical care becomes available.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
