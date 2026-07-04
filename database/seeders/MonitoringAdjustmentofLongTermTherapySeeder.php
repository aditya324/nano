<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MonitoringAdjustmentofLongTermTherapySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Monitoring & Adjustment of Long-Term Therapy')],
            [
                'title' => 'Monitoring & Adjustment of Long-Term Therapy',
                'slug' => Str::slug('Monitoring & Adjustment of Long-Term Therapy'),
                'introduction' => 'Monitoring and adjustment of long-term therapy is an essential healthcare management procedure focused on regularly evaluating treatment effectiveness, medication response, hormonal balance, metabolic stability, and overall patient health during prolonged medical care. This process helps ensure that ongoing therapies remain safe, effective, and appropriately tailored to the patient’s evolving medical condition while minimizing complications and treatment-related side effects.',
                'what_is' => 'Long-term therapy monitoring involves periodic clinical assessments, laboratory investigations, imaging studies, medication reviews, and individualized treatment modifications based on disease progression and patient response. These procedures are commonly used in chronic endocrine, metabolic, cardiovascular, respiratory, neurological, and autoimmune disorders requiring continuous medical treatment. Healthcare specialists monitor symptoms, treatment outcomes, organ function, nutritional status, and lifestyle factors to optimize patient care and maintain long-term disease stability. Monitoring programs are commonly supervised in hospitals, specialty clinics, rehabilitation centers, and chronic disease management units.',
                'symptoms' => [
            ['value' => 'Persistent or worsening symptoms despite ongoing treatment'],
            ['value' => 'Medication-related side effects or intolerance'],
            ['value' => 'Hormonal or metabolic imbalance requiring therapy modification'],
            ['value' => 'Fatigue, weakness, or fluctuating disease control'],
            ['value' => 'Abnormal laboratory results or organ function changes during treatment'],
        ],
                'causes' => [
            ['value' => 'Chronic endocrine or metabolic disorders requiring ongoing treatment'],
            ['value' => 'Long-term medication use needing dose adjustment'],
            ['value' => 'Hormonal imbalance or fluctuating disease control'],
            ['value' => 'Chronic cardiovascular, respiratory, or autoimmune conditions'],
            ['value' => 'Need for continuous monitoring to prevent complications'],
        ],
                'condition_risks' => [
            ['value' => 'Long-term medication side effects or toxicity'],
            ['value' => 'Disease progression due to inadequate treatment adjustment'],
            ['value' => 'Organ damage caused by poorly controlled chronic illness'],
            ['value' => 'Hormonal or metabolic instability from incorrect dosing'],
            ['value' => 'Reduced treatment effectiveness due to poor adherence or monitoring gaps'],
            ['value' => 'Treatment Options'],
            ['value' => 'Monitoring and adjustment of long-term therapy focus on optimizing disease control, improving treatment safety, preventing complications, and enhancing overall quality of life. Management may include regular laboratory testing, medication titration, hormonal assessment, imaging studies, nutritional counseling, lifestyle modification, rehabilitation support, and multidisciplinary specialist follow-up. Patients may also benefit from chronic disease education, preventive healthcare screening, stress management, medication adherence counseling, and individualized care planning to ensure safe and effective long-term treatment outcomes.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular follow-up consultations and clinical evaluation'],
            ['value' => 'Routine laboratory investigations and medication review'],
            ['value' => 'Monitoring for therapy-related complications or side effects'],
            ['value' => 'Lifestyle counseling and adherence support programs'],
            ['value' => 'Long-term specialist follow-up and individualized treatment adjustment'],
        ],
                'surgery_risks' => [
            ['value' => 'Long-term medication side effects or toxicity'],
            ['value' => 'Disease progression due to inadequate treatment adjustment'],
            ['value' => 'Organ damage caused by poorly controlled chronic illness'],
            ['value' => 'Hormonal or metabolic instability from incorrect dosing'],
            ['value' => 'Reduced treatment effectiveness due to poor adherence or monitoring gaps'],
            ['value' => 'Treatment Options'],
            ['value' => 'Monitoring and adjustment of long-term therapy focus on optimizing disease control, improving treatment safety, preventing complications, and enhancing overall quality of life. Management may include regular laboratory testing, medication titration, hormonal assessment, imaging studies, nutritional counseling, lifestyle modification, rehabilitation support, and multidisciplinary specialist follow-up. Patients may also benefit from chronic disease education, preventive healthcare screening, stress management, medication adherence counseling, and individualized care planning to ensure safe and effective long-term treatment outcomes.'],
        ],
                'long_term_outlook' => 'The long-term outlook following proper monitoring and adjustment of long-term therapy is generally highly positive with continuous medical supervision and patient adherence. Regular follow-up care, timely medication adjustments, healthy lifestyle habits, nutritional support, laboratory monitoring, stress management, and ongoing specialist evaluation significantly help maintain disease stability, prevent complications, improve treatment effectiveness, preserve organ function, and enhance overall quality of life.',
                'conclusion' => '',
                'seo_title' => 'Monitoring & Adjustment of Long-Term Therapy',
                'seo_description' => 'Monitoring and adjustment of long-term therapy is an essential healthcare management procedure focused on regularly evaluating treatment effectiveness, medication response, hormonal balance, metabolic stability, and overall patient health during prolonged medical care. This process helps ensure that ongoing therapies remain safe, effective, and appropriately tailored to the patient’s evolving medical condition while minimizing complications and treatment-related side effects.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
