<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ManagementofPulmonaryHypertensionMedicationsInterventionsSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Management of Pulmonary Hypertension (Medications / Interventions)')],
            [
                'title' => 'Management of Pulmonary Hypertension (Medications / Interventions)',
                'slug' => Str::slug('Management of Pulmonary Hypertension (Medications / Interventions)'),
                'introduction' => 'Management of pulmonary hypertension involves specialized medical and interventional procedures used to reduce high blood pressure within the pulmonary arteries, improve heart and lung function, relieve symptoms, and slow disease progression. Pulmonary hypertension is a serious condition that places increased strain on the right side of the heart and can lead to respiratory and cardiovascular complications if not properly treated. Early diagnosis and comprehensive long-term management are essential to improve patient outcomes and quality of life.',
                'what_is' => 'Pulmonary hypertension management includes medications, oxygen support, lifestyle modification, and advanced interventional therapies depending on the severity and underlying cause of the disease. Treatment focuses on improving blood flow through the lungs, reducing pressure in the pulmonary arteries, preventing blood clots, and supporting heart function. Specialized therapies may include pulmonary vasodilators, anticoagulants, diuretics, oxygen therapy, and advanced interventions such as atrial septostomy or lung transplantation in selected cases. Patients are commonly managed by multidisciplinary teams including pulmonologists, cardiologists, critical care specialists, and rehabilitation professionals.',
                'symptoms' => [
            ['value' => 'Shortness of breath, especially during physical activity'],
            ['value' => 'Fatigue, weakness, or reduced exercise tolerance'],
            ['value' => 'Chest pain, palpitations, or dizziness'],
            ['value' => 'Swelling in the legs, ankles, or abdomen'],
            ['value' => 'Fainting episodes or signs of right-sided heart strain in advanced disease'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Progressive right-sided heart failure'],
            ['value' => 'Severe respiratory distress or low oxygen levels'],
            ['value' => 'Blood clot formation or worsening pulmonary circulation problems'],
            ['value' => 'Irregular heart rhythms or cardiovascular instability'],
            ['value' => 'Reduced physical capacity and life-threatening complications in advanced pulmonary hypertension'],
            ['value' => 'Treatment Options'],
            ['value' => 'Management of pulmonary hypertension focuses on reducing pulmonary artery pressure, improving circulation, relieving symptoms, and preventing long-term complications. Treatment may include pulmonary vasodilator medications, endothelin receptor antagonists, phosphodiesterase inhibitors, prostacyclin therapy, anticoagulants, diuretics, oxygen therapy, and supportive respiratory care. Patients may also benefit from pulmonary rehabilitation, breathing exercises, lifestyle modification, smoking cessation, nutritional support, supervised physical activity, and treatment of underlying heart or lung diseases. In severe or refractory cases, interventional procedures or lung transplantation may be considered to improve survival and long-term respiratory function.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular monitoring of heart and lung function'],
            ['value' => 'Oxygen therapy and medication adjustment based on clinical response'],
            ['value' => 'Monitoring for medication side effects or disease progression'],
            ['value' => 'Pulmonary rehabilitation and supervised exercise programs'],
            ['value' => 'Long-term pulmonology and cardiology follow-up care'],
        ],
                'surgery_risks' => [
            ['value' => 'Progressive right-sided heart failure'],
            ['value' => 'Severe respiratory distress or low oxygen levels'],
            ['value' => 'Blood clot formation or worsening pulmonary circulation problems'],
            ['value' => 'Irregular heart rhythms or cardiovascular instability'],
            ['value' => 'Reduced physical capacity and life-threatening complications in advanced pulmonary hypertension'],
            ['value' => 'Treatment Options'],
            ['value' => 'Management of pulmonary hypertension focuses on reducing pulmonary artery pressure, improving circulation, relieving symptoms, and preventing long-term complications. Treatment may include pulmonary vasodilator medications, endothelin receptor antagonists, phosphodiesterase inhibitors, prostacyclin therapy, anticoagulants, diuretics, oxygen therapy, and supportive respiratory care. Patients may also benefit from pulmonary rehabilitation, breathing exercises, lifestyle modification, smoking cessation, nutritional support, supervised physical activity, and treatment of underlying heart or lung diseases. In severe or refractory cases, interventional procedures or lung transplantation may be considered to improve survival and long-term respiratory function.'],
        ],
                'long_term_outlook' => 'The long-term outlook following pulmonary hypertension management depends on the underlying cause, severity of disease, response to therapy, and overall cardiopulmonary health. Early treatment, medication adherence, pulmonary rehabilitation, healthy lifestyle habits, oxygen support, smoking cessation, and continuous specialist follow-up significantly help improve symptom control, slow disease progression, reduce complications, preserve heart and lung function, and enhance overall quality of life.',
                'conclusion' => '',
                'seo_title' => 'Management of Pulmonary Hypertension (Medications / Interventions)',
                'seo_description' => 'Management of pulmonary hypertension involves specialized medical and interventional procedures used to reduce high blood pressure within the pulmonary arteries, improve heart and lung function, relieve symptoms, and slow disease progression. Pulmonary hypertension is a serious condition that places increased strain on the right side of the heart and can lead to respiratory and cardiovascular complications if not properly treated. Early diagnosis and comprehensive long-term management are essential to improve patient outcomes and quality of life.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
