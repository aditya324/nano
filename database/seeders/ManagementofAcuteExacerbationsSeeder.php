<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ManagementofAcuteExacerbationsSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Management of Acute Exacerbations')],
            [
                'title' => 'Management of Acute Exacerbations',
                'slug' => Str::slug('Management of Acute Exacerbations'),
                'introduction' => 'Management of acute exacerbations involves the rapid diagnosis, treatment, and stabilization of sudden worsening episodes in chronic medical conditions such as Chronic Obstructive Pulmonary Disease (COPD), asthma, and heart failure. Early medical intervention helps relieve symptoms, improve organ function, prevent complications, and reduce the need for intensive care or hospitalization.',
                'what_is' => 'Acute exacerbations can cause severe breathing difficulty, reduced oxygen levels, fluid overload, chest discomfort, and worsening cardiovascular or respiratory function. Management may include oxygen therapy, bronchodilators, corticosteroids, diuretics, ventilatory support, intravenous medications, and continuous monitoring depending on the severity of the condition. Prompt treatment and ongoing disease management are essential for improving recovery and preventing recurrent flare-ups.',
                'symptoms' => [
            ['value' => 'Sudden worsening shortness of breath'],
            ['value' => 'Persistent cough or wheezing'],
            ['value' => 'Chest tightness or chest discomfort'],
            ['value' => 'Fatigue, weakness, or reduced physical tolerance'],
            ['value' => 'Swelling of the legs or fluid retention in heart failure'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Respiratory failure and reduced oxygen levels'],
            ['value' => 'Severe asthma attacks or COPD complications'],
            ['value' => 'Pulmonary edema and worsening heart failure'],
            ['value' => 'Increased hospitalization or ICU admission'],
            ['value' => 'Life-threatening cardiovascular or respiratory complications'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Continuous monitoring of breathing and oxygen levels'],
            ['value' => 'Medication management and inhaler therapy guidance'],
            ['value' => 'Fluid balance and cardiovascular monitoring'],
            ['value' => 'Pulmonary rehabilitation and lifestyle counseling'],
            ['value' => 'Long-term follow-up and chronic disease management planning'],
        ],
                'surgery_risks' => [
            ['value' => 'Respiratory failure and reduced oxygen levels'],
            ['value' => 'Severe asthma attacks or COPD complications'],
            ['value' => 'Pulmonary edema and worsening heart failure'],
            ['value' => 'Increased hospitalization or ICU admission'],
            ['value' => 'Life-threatening cardiovascular or respiratory complications'],
        ],
                'long_term_outlook' => 'The long-term outlook for acute exacerbation management depends on the severity of the underlying disease, response to treatment, and adherence to long-term care plans. Early intervention, preventive care, medication adherence, and lifestyle modifications can significantly reduce future flare-ups, improve quality of life, and support long-term respiratory and cardiovascular health.',
                'conclusion' => '',
                'seo_title' => 'Management of Acute Exacerbations',
                'seo_description' => 'Management of acute exacerbations involves the rapid diagnosis, treatment, and stabilization of sudden worsening episodes in chronic medical conditions such as Chronic Obstructive Pulmonary Disease (COPD), asthma, and heart failure. Early medical intervention helps relieve symptoms, improve organ function, prevent complications, and reduce the need for intensive care or hospitalization.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
