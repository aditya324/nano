<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class HeartFailureManagementSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Heart Failure Management')],
            [
                'title' => 'Heart Failure Management',
                'slug' => Str::slug('Heart Failure Management'),
                'introduction' => 'Heart failure management involves specialized medical and supportive treatment procedures used to improve heart function, reduce symptoms, prevent complications, and enhance quality of life in patients with weakened or inefficient heart pumping ability. Comprehensive heart failure care includes medications, lifestyle modification, fluid management, cardiac rehabilitation, and advanced device-based therapies to support long-term cardiovascular stability and reduce hospitalization risk.',
                'what_is' => 'Heart failure treatment commonly includes medications such as ACE inhibitors (ACEi), Angiotensin Receptor Blockers (ARB), beta-blockers, and diuretics to improve blood circulation, reduce heart strain, control blood pressure, and decrease fluid accumulation. Advanced therapies may include implantable cardiac devices such as pacemakers, Implantable Cardioverter Defibrillators (ICD), or Cardiac Resynchronization Therapy (CRT) devices to improve heart rhythm and pumping efficiency. Severe cases may require intensive care monitoring, mechanical circulatory support, or advanced heart failure interventions. Heart failure management is commonly supervised by cardiologists, internal medicine specialists, rehabilitation teams, and multidisciplinary cardiac care programs.',
                'symptoms' => [
            ['value' => 'Shortness of breath during activity or at rest'],
            ['value' => 'Fatigue, weakness, or reduced exercise tolerance'],
            ['value' => 'Swelling of the legs, ankles, or abdomen due to fluid retention'],
            ['value' => 'Persistent cough or breathing difficulty while lying down'],
            ['value' => 'Rapid heartbeat, dizziness, or sudden weight gain from fluid overload'],
        ],
                'causes' => [
            ['value' => 'Coronary artery disease or previous heart attack'],
            ['value' => 'Long-standing high blood pressure (hypertension)'],
            ['value' => 'Diabetes and metabolic disorders'],
            ['value' => 'Heart valve diseases or congenital heart defects'],
            ['value' => 'Cardiomyopathy or weakened heart muscles'],
            ['value' => 'Abnormal heart rhythms (arrhythmias)'],
            ['value' => 'Chronic kidney disease or fluid overload conditions'],
            ['value' => 'Obesity, smoking, and unhealthy lifestyle habits'],
            ['value' => 'Excessive alcohol consumption or substance abuse'],
            ['value' => 'Severe lung disease or chronic respiratory disorders'],
        ],
                'condition_risks' => [
            ['value' => 'Progressive heart failure and reduced heart function'],
            ['value' => 'Fluid accumulation in the lungs causing respiratory distress'],
            ['value' => 'Kidney dysfunction or electrolyte imbalance due to medication effects'],
            ['value' => 'Heart rhythm abnormalities or sudden cardiac arrest'],
            ['value' => 'Increased risk of recurrent hospitalization and cardiovascular complications'],
            ['value' => 'Treatment Options'],
            ['value' => 'Heart failure management focuses on improving cardiac function, relieving symptoms, reducing fluid overload, preventing disease progression, and enhancing long-term cardiovascular health. Treatment may include ACE inhibitors, ARBs, beta-blockers, diuretics, aldosterone antagonists, device therapy, oxygen support, fluid and salt restriction, lifestyle modification, and cardiac rehabilitation. Patients may also benefit from nutritional counseling, weight monitoring, smoking cessation, diabetes and blood pressure management, physiotherapy, stress reduction, and long-term cardiology follow-up to optimize heart health and overall well-being.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular monitoring of heart function, blood pressure, and fluid status'],
            ['value' => 'Medication adjustment based on symptoms and cardiac response'],
            ['value' => 'Monitoring for device function, arrhythmias, or treatment-related complications'],
            ['value' => 'Nutritional counseling and supervised cardiac rehabilitation programs'],
            ['value' => 'Long-term cardiology follow-up and preventive cardiovascular care'],
        ],
                'surgery_risks' => [
            ['value' => 'Progressive heart failure and reduced heart function'],
            ['value' => 'Fluid accumulation in the lungs causing respiratory distress'],
            ['value' => 'Kidney dysfunction or electrolyte imbalance due to medication effects'],
            ['value' => 'Heart rhythm abnormalities or sudden cardiac arrest'],
            ['value' => 'Increased risk of recurrent hospitalization and cardiovascular complications'],
            ['value' => 'Treatment Options'],
            ['value' => 'Heart failure management focuses on improving cardiac function, relieving symptoms, reducing fluid overload, preventing disease progression, and enhancing long-term cardiovascular health. Treatment may include ACE inhibitors, ARBs, beta-blockers, diuretics, aldosterone antagonists, device therapy, oxygen support, fluid and salt restriction, lifestyle modification, and cardiac rehabilitation. Patients may also benefit from nutritional counseling, weight monitoring, smoking cessation, diabetes and blood pressure management, physiotherapy, stress reduction, and long-term cardiology follow-up to optimize heart health and overall well-being.'],
        ],
                'long_term_outlook' => 'The long-term outlook following heart failure management depends on the severity of heart dysfunction, treatment adherence, underlying medical conditions, and lifestyle management. Early diagnosis, medication compliance, healthy nutrition, regular physical activity, smoking cessation, fluid management, cardiac rehabilitation, routine medical monitoring, and continuous cardiology follow-up significantly help improve heart function, reduce complications, prevent hospitalization, preserve organ function, and enhance overall quality of life.',
                'conclusion' => '',
                'seo_title' => 'Heart Failure Management',
                'seo_description' => 'Heart failure management involves specialized medical and supportive treatment procedures used to improve heart function, reduce symptoms, prevent complications, and enhance quality of life in patients with weakened or inefficient heart pumping ability. Comprehensive heart failure care includes medications, lifestyle modification, fluid management, cardiac rehabilitation, and advanced device-based therapies to support long-term cardiovascular stability and reduce hospitalization risk.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
