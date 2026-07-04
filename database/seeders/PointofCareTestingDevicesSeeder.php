<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PointofCareTestingDevicesSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Point-of-Care Testing Devices')],
            [
                'title' => 'Point-of-Care Testing Devices',
                'slug' => Str::slug('Point-of-Care Testing Devices'),
                'introduction' => 'Point-of-care testing devices are advanced medical diagnostic tools used to perform rapid laboratory and clinical tests near the patient’s bedside or point of care. These devices provide immediate test results, allowing healthcare providers to make faster clinical decisions, begin timely treatment, and improve patient management in emergency, outpatient, inpatient, and critical care settings. Point-of-care testing plays a vital role in enhancing patient safety, treatment efficiency, and early medical intervention.',
                'what_is' => 'Point-of-care testing devices are commonly used to measure blood glucose, electrolytes, blood gases, cardiac markers, hemoglobin levels, infection markers, coagulation profiles, and other important diagnostic parameters. These portable and rapid testing systems are widely used in emergency departments, intensive care units (ICUs), ambulances, outpatient clinics, operation theaters, dialysis units, and hospital wards to support immediate diagnosis and continuous patient monitoring. Faster access to laboratory results helps reduce delays in treatment, improve workflow efficiency, and support better patient outcomes across various healthcare settings.',
                'symptoms' => [
            ['value' => 'Sudden illness requiring rapid medical assessment'],
            ['value' => 'High or fluctuating blood sugar levels'],
            ['value' => 'Chest pain or suspected cardiac emergency'],
            ['value' => 'Fever or signs of infection'],
            ['value' => 'Critical illness requiring immediate laboratory evaluation'],
        ],
                'causes' => [
            ['value' => 'Diabetes and metabolic disorders requiring rapid glucose monitoring'],
            ['value' => 'Cardiac emergencies such as heart attack or arrhythmias'],
            ['value' => 'Severe infections, sepsis, or inflammatory conditions'],
            ['value' => 'Respiratory failure or acid-base imbalance needing blood gas analysis'],
            ['value' => 'Critical illness, trauma, or post-operative complications requiring continuous monitoring'],
        ],
                'condition_risks' => [
            ['value' => 'Delayed diagnosis and treatment initiation'],
            ['value' => 'Missed detection of life-threatening medical conditions'],
            ['value' => 'Increased complications in emergency or critical care situations'],
            ['value' => 'Reduced monitoring efficiency in unstable patients'],
            ['value' => 'Prolonged hospitalization due to delayed clinical decisions'],
            ['value' => 'Treatment Options'],
            ['value' => 'Point-of-care testing devices support rapid diagnosis, continuous monitoring, treatment planning, and emergency medical management. Test results help guide glucose control, electrolyte correction, infection management, cardiac care, respiratory support, fluid therapy, and medication adjustment. Patients may also benefit from ICU monitoring, chronic disease management, telehealth support, preventive healthcare screening, specialist consultations, rehabilitation programs, and long-term follow-up care to optimize treatment outcomes and overall health stability.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Continuous monitoring using rapid diagnostic testing'],
            ['value' => 'Repeat bedside testing and result evaluation when required'],
            ['value' => 'Early detection of complications or treatment response'],
            ['value' => 'Adjustment of medications and supportive care based on test results'],
            ['value' => 'Ongoing patient monitoring and specialist follow-up care'],
        ],
                'surgery_risks' => [
            ['value' => 'Delayed diagnosis and treatment initiation'],
            ['value' => 'Missed detection of life-threatening medical conditions'],
            ['value' => 'Increased complications in emergency or critical care situations'],
            ['value' => 'Reduced monitoring efficiency in unstable patients'],
            ['value' => 'Prolonged hospitalization due to delayed clinical decisions'],
            ['value' => 'Treatment Options'],
            ['value' => 'Point-of-care testing devices support rapid diagnosis, continuous monitoring, treatment planning, and emergency medical management. Test results help guide glucose control, electrolyte correction, infection management, cardiac care, respiratory support, fluid therapy, and medication adjustment. Patients may also benefit from ICU monitoring, chronic disease management, telehealth support, preventive healthcare screening, specialist consultations, rehabilitation programs, and long-term follow-up care to optimize treatment outcomes and overall health stability.'],
        ],
                'long_term_outlook' => 'Point-of-care testing devices play a vital role in improving diagnostic speed, treatment accuracy, patient safety, and emergency response across multiple healthcare settings. Rapid access to laboratory results, timely medical intervention, continuous monitoring, preventive healthcare, and ongoing medical follow-up significantly help reduce complications, improve recovery outcomes, support critical care management, and enhance overall healthcare quality and patient well-being.',
                'conclusion' => '',
                'seo_title' => 'Point-of-Care Testing Devices',
                'seo_description' => 'Point-of-care testing devices are advanced medical diagnostic tools used to perform rapid laboratory and clinical tests near the patient’s bedside or point of care. These devices provide immediate test results, allowing healthcare providers to make faster clinical decisions, begin timely treatment, and improve patient management in emergency, outpatient, inpatient, and critical care settings. Point-of-care testing plays a vital role in enhancing patient safety, treatment efficiency, and early medical intervention.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
