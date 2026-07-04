<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MonitoringManagementofChronicOxygenDependencySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Monitoring & Management of Chronic Oxygen Dependency')],
            [
                'title' => 'Monitoring & Management of Chronic Oxygen Dependency',
                'slug' => Str::slug('Monitoring & Management of Chronic Oxygen Dependency'),
                'introduction' => 'Monitoring and management of chronic oxygen dependency are specialized respiratory care procedures designed to support patients who require long-term oxygen therapy due to chronic lung or heart conditions causing persistently low oxygen levels. These procedures help maintain adequate oxygen delivery to the body, improve breathing comfort, reduce complications related to chronic hypoxemia, and enhance overall quality of life and physical functioning.',
                'what_is' => 'Chronic oxygen dependency commonly occurs in conditions such as chronic obstructive pulmonary disease (COPD), interstitial lung disease, pulmonary fibrosis, pulmonary hypertension, chronic respiratory failure, advanced heart disease, and post-COVID lung complications. Long-term oxygen therapy may be delivered through nasal cannula, oxygen concentrators, portable oxygen systems, or oxygen cylinders depending on the patient’s medical condition and lifestyle needs. Regular monitoring of oxygen saturation, lung function, respiratory symptoms, and overall health status is essential to ensure effective oxygen therapy and prevent complications associated with prolonged oxygen use.',
                'symptoms' => [
            ['value' => 'Persistent shortness of breath or breathing difficulty'],
            ['value' => 'Low oxygen saturation or chronic hypoxemia'],
            ['value' => 'Fatigue, weakness, or reduced exercise tolerance'],
            ['value' => 'Bluish discoloration of lips or fingertips due to low oxygen levels'],
            ['value' => 'Difficulty performing daily activities without oxygen support'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Worsening respiratory failure if oxygen therapy is inadequate'],
            ['value' => 'Dryness or irritation of the nose and airways from prolonged oxygen use'],
            ['value' => 'Reduced mobility or dependence on oxygen equipment'],
            ['value' => 'Oxygen-related fire hazards if safety precautions are not followed'],
            ['value' => 'Carbon dioxide retention in selected chronic lung disease patients'],
            ['value' => 'Treatment Options'],
            ['value' => 'Monitoring and management of chronic oxygen dependency focus on maintaining stable oxygen levels, improving respiratory function, enhancing mobility, and preventing complications of chronic lung disease. Treatment may include long-term oxygen therapy, oxygen saturation monitoring, pulmonary rehabilitation, breathing exercises, bronchodilator medications, inhaler therapy, nutritional support, smoking cessation, and respiratory physiotherapy. Patients may also benefit from portable oxygen systems, sleep-related breathing support, vaccination, lifestyle modification, and regular pulmonology follow-up to optimize long-term respiratory care and overall health outcomes.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular monitoring of oxygen saturation and respiratory status'],
            ['value' => 'Adjustment of oxygen flow rates based on activity and medical condition'],
            ['value' => 'Maintenance and safe handling of oxygen equipment'],
            ['value' => 'Pulmonary rehabilitation and supervised breathing exercises'],
            ['value' => 'Long-term pulmonology follow-up and chronic respiratory care support'],
        ],
                'surgery_risks' => [
            ['value' => 'Worsening respiratory failure if oxygen therapy is inadequate'],
            ['value' => 'Dryness or irritation of the nose and airways from prolonged oxygen use'],
            ['value' => 'Reduced mobility or dependence on oxygen equipment'],
            ['value' => 'Oxygen-related fire hazards if safety precautions are not followed'],
            ['value' => 'Carbon dioxide retention in selected chronic lung disease patients'],
            ['value' => 'Treatment Options'],
            ['value' => 'Monitoring and management of chronic oxygen dependency focus on maintaining stable oxygen levels, improving respiratory function, enhancing mobility, and preventing complications of chronic lung disease. Treatment may include long-term oxygen therapy, oxygen saturation monitoring, pulmonary rehabilitation, breathing exercises, bronchodilator medications, inhaler therapy, nutritional support, smoking cessation, and respiratory physiotherapy. Patients may also benefit from portable oxygen systems, sleep-related breathing support, vaccination, lifestyle modification, and regular pulmonology follow-up to optimize long-term respiratory care and overall health outcomes.'],
        ],
                'long_term_outlook' => 'The long-term outlook following management of chronic oxygen dependency depends on the underlying respiratory or cardiovascular disease, severity of oxygen deficiency, treatment adherence, and overall patient health. Early respiratory support, proper oxygen therapy management, pulmonary rehabilitation, medication adherence, smoking cessation, healthy lifestyle habits, and continuous medical follow-up significantly help improve breathing comfort, physical endurance, reduce complications, preserve organ function, and enhance overall quality of life.',
                'conclusion' => '',
                'seo_title' => 'Monitoring & Management of Chronic Oxygen Dependency',
                'seo_description' => 'Monitoring and management of chronic oxygen dependency are specialized respiratory care procedures designed to support patients who require long-term oxygen therapy due to chronic lung or heart conditions causing persistently low oxygen levels. These procedures help maintain adequate oxygen delivery to the body, improve breathing comfort, reduce complications related to chronic hypoxemia, and enhance overall quality of life and physical functioning.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
