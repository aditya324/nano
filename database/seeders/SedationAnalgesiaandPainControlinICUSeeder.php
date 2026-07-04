<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SedationAnalgesiaandPainControlinICUSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Sedation, Analgesia, and Pain Control in ICU')],
            [
                'title' => 'Sedation, Analgesia, and Pain Control in ICU',
                'slug' => Str::slug('Sedation, Analgesia, and Pain Control in ICU'),
                'introduction' => 'Sedation, analgesia, and pain control in the Intensive Care Unit (ICU) are specialized critical care procedures used to provide comfort, reduce pain, relieve anxiety, and support safe medical management in critically ill patients. These interventions help patients tolerate mechanical ventilation, invasive procedures, trauma care, surgery recovery, and prolonged intensive care treatment while minimizing physical and psychological stress.',
                'what_is' => 'ICU sedation and pain management involve the controlled administration of sedatives, analgesics, and supportive medications under continuous monitoring by critical care specialists. Sedation helps reduce anxiety, agitation, and discomfort, while analgesia focuses on controlling pain caused by illness, trauma, surgery, or invasive procedures. These treatments are commonly used in mechanically ventilated patients, trauma patients, postoperative critical care cases, severe respiratory distress, neurological emergencies, and patients requiring prolonged ICU support. Continuous assessment of consciousness level, breathing, circulation, and pain response is essential during these procedures.',
                'symptoms' => [
            ['value' => 'Severe pain or discomfort during critical illness'],
            ['value' => 'Anxiety, agitation, or restlessness in ICU patients'],
            ['value' => 'Difficulty tolerating mechanical ventilation or invasive procedures'],
            ['value' => 'Sleep disturbances or emotional distress during intensive care'],
            ['value' => 'Trauma, postoperative pain, or severe respiratory discomfort'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Respiratory depression or reduced breathing effort'],
            ['value' => 'Low blood pressure or cardiovascular instability'],
            ['value' => 'Delirium, confusion, or prolonged sedation effects'],
            ['value' => 'Dependence or withdrawal symptoms with prolonged medication use'],
            ['value' => 'Increased risk of infection or prolonged ICU stay in critically ill patients'],
            ['value' => 'Treatment Options'],
            ['value' => 'Sedation, analgesia, and pain control procedures focus on maintaining patient comfort, reducing stress, improving treatment tolerance, and supporting safe intensive care management. Treatment may include intravenous sedatives, opioid and non-opioid analgesics, anxiolytic medications, ventilator synchronization support, neurological monitoring, oxygen therapy, and individualized pain assessment protocols. Patients may also receive physiotherapy, sleep management, psychological support, rehabilitation care, and gradual sedation reduction strategies to improve recovery and reduce complications during prolonged ICU treatment.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Continuous monitoring of consciousness, breathing, and cardiovascular status'],
            ['value' => 'Regular pain assessment and adjustment of medications'],
            ['value' => 'Gradual reduction of sedation when clinically appropriate'],
            ['value' => 'Monitoring for medication side effects, delirium, or withdrawal symptoms'],
            ['value' => 'Rehabilitation support and long-term recovery planning when required'],
        ],
                'surgery_risks' => [
            ['value' => 'Respiratory depression or reduced breathing effort'],
            ['value' => 'Low blood pressure or cardiovascular instability'],
            ['value' => 'Delirium, confusion, or prolonged sedation effects'],
            ['value' => 'Dependence or withdrawal symptoms with prolonged medication use'],
            ['value' => 'Increased risk of infection or prolonged ICU stay in critically ill patients'],
            ['value' => 'Treatment Options'],
            ['value' => 'Sedation, analgesia, and pain control procedures focus on maintaining patient comfort, reducing stress, improving treatment tolerance, and supporting safe intensive care management. Treatment may include intravenous sedatives, opioid and non-opioid analgesics, anxiolytic medications, ventilator synchronization support, neurological monitoring, oxygen therapy, and individualized pain assessment protocols. Patients may also receive physiotherapy, sleep management, psychological support, rehabilitation care, and gradual sedation reduction strategies to improve recovery and reduce complications during prolonged ICU treatment.'],
        ],
                'long_term_outlook' => 'The long-term outlook following ICU sedation and pain management depends on the underlying critical illness, duration of intensive care treatment, response to therapy, and overall patient health. Early critical care intervention, careful medication monitoring, rehabilitation support, physiotherapy, psychological care, and multidisciplinary follow-up significantly help improve recovery, reduce complications, restore physical function, and enhance overall quality of life.',
                'conclusion' => '',
                'seo_title' => 'Sedation, Analgesia, and Pain Control in ICU',
                'seo_description' => 'Sedation, analgesia, and pain control in the Intensive Care Unit (ICU) are specialized critical care procedures used to provide comfort, reduce pain, relieve anxiety, and support safe medical management in critically ill patients. These interventions help patients tolerate mechanical ventilation, invasive procedures, trauma care, surgery recovery, and prolonged intensive care treatment while minimizing physical and psychological stress.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
