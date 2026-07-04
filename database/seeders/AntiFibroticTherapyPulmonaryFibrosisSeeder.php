<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AntiFibroticTherapyPulmonaryFibrosisSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Anti-Fibrotic Therapy (Pulmonary Fibrosis)')],
            [
                'title' => 'Anti-Fibrotic Therapy (Pulmonary Fibrosis)',
                'slug' => Str::slug('Anti-Fibrotic Therapy (Pulmonary Fibrosis)'),
                'introduction' => 'Anti-fibrotic therapy is a specialized respiratory treatment procedure used to slow the progression of pulmonary fibrosis and other chronic fibrotic lung diseases. Pulmonary fibrosis causes scarring and thickening of lung tissue, reducing lung elasticity and impairing oxygen exchange. Anti-fibrotic medications help reduce ongoing lung scarring, preserve lung function, improve symptom control, and support long-term respiratory health in patients with progressive fibrotic lung disease.',
                'what_is' => 'Anti-fibrotic therapy is commonly used in conditions such as idiopathic pulmonary fibrosis (IPF), progressive interstitial lung disease (ILD), and selected chronic fibrotic lung disorders. These medications work by targeting biological pathways involved in inflammation and abnormal scar tissue formation within the lungs. Treatment is typically managed by pulmonologists and respiratory specialists with regular monitoring of lung function, imaging, and medication response. Anti-fibrotic therapy is often combined with pulmonary rehabilitation, oxygen therapy, lifestyle modification, and supportive respiratory care to improve long-term disease management.',
                'symptoms' => [
            ['value' => 'Persistent shortness of breath or breathing difficulty'],
            ['value' => 'Chronic dry cough'],
            ['value' => 'Fatigue or reduced physical endurance'],
            ['value' => 'Chest discomfort or reduced exercise tolerance'],
            ['value' => 'Progressive decline in lung function and oxygen levels'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Medication-related side effects such as nausea, diarrhea, or appetite loss'],
            ['value' => 'Liver function abnormalities requiring regular monitoring'],
            ['value' => 'Photosensitivity or skin reactions with certain medications'],
            ['value' => 'Progressive lung scarring despite treatment in advanced disease'],
            ['value' => 'Reduced effectiveness if treatment is delayed or poorly tolerated'],
            ['value' => 'Treatment Options'],
            ['value' => 'Anti-fibrotic therapy focuses on slowing lung scarring, preserving respiratory function, reducing disease progression, and improving quality of life. Treatment may include anti-fibrotic medications, oxygen therapy, pulmonary rehabilitation, breathing exercises, vaccination, nutritional support, smoking cessation, and supportive respiratory care. Patients may also require management of associated interstitial lung disease, autoimmune conditions, or respiratory complications. Regular pulmonary function testing, imaging studies, and multidisciplinary pulmonology follow-up are important to monitor disease stability and optimize long-term treatment outcomes.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular monitoring of lung function and oxygen levels'],
            ['value' => 'Routine laboratory testing to assess medication tolerance and liver function'],
            ['value' => 'Pulmonary rehabilitation and supervised breathing exercises'],
            ['value' => 'Monitoring for medication side effects or disease progression'],
            ['value' => 'Long-term pulmonology follow-up and supportive respiratory care'],
        ],
                'surgery_risks' => [
            ['value' => 'Medication-related side effects such as nausea, diarrhea, or appetite loss'],
            ['value' => 'Liver function abnormalities requiring regular monitoring'],
            ['value' => 'Photosensitivity or skin reactions with certain medications'],
            ['value' => 'Progressive lung scarring despite treatment in advanced disease'],
            ['value' => 'Reduced effectiveness if treatment is delayed or poorly tolerated'],
            ['value' => 'Treatment Options'],
            ['value' => 'Anti-fibrotic therapy focuses on slowing lung scarring, preserving respiratory function, reducing disease progression, and improving quality of life. Treatment may include anti-fibrotic medications, oxygen therapy, pulmonary rehabilitation, breathing exercises, vaccination, nutritional support, smoking cessation, and supportive respiratory care. Patients may also require management of associated interstitial lung disease, autoimmune conditions, or respiratory complications. Regular pulmonary function testing, imaging studies, and multidisciplinary pulmonology follow-up are important to monitor disease stability and optimize long-term treatment outcomes.'],
        ],
                'long_term_outlook' => 'The long-term outlook following anti-fibrotic therapy depends on the severity of pulmonary fibrosis, speed of disease progression, response to treatment, and overall respiratory health. Early diagnosis, consistent medication use, pulmonary rehabilitation, healthy lifestyle habits, smoking cessation, oxygen support when required, and regular specialist follow-up significantly help slow disease progression, preserve lung function, reduce complications, improve physical endurance, and enhance overall quality of life.',
                'conclusion' => '',
                'seo_title' => 'Anti-Fibrotic Therapy (Pulmonary Fibrosis)',
                'seo_description' => 'Anti-fibrotic therapy is a specialized respiratory treatment procedure used to slow the progression of pulmonary fibrosis and other chronic fibrotic lung diseases. Pulmonary fibrosis causes scarring and thickening of lung tissue, reducing lung elasticity and impairing oxygen exchange. Anti-fibrotic medications help reduce ongoing lung scarring, preserve lung function, improve symptom control, and support long-term respiratory health in patients with progressive fibrotic lung disease.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
