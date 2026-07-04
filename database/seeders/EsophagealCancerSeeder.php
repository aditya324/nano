<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EsophagealCancerSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Esophageal Cancer')],
            [
                'title' => 'Esophageal Cancer',
                'slug' => Str::slug('Esophageal Cancer'),
                'introduction' => '',
                'what_is' => 'Esophageal cancer is a type of cancer that develops in the esophagus, the long muscular tube that carries food and liquids from the throat to the stomach. The disease commonly affects older adults and may gradually interfere with swallowing and digestion as the tumor grows. Early diagnosis and timely treatment are important for improving treatment outcomes and quality of life. Common Symptoms Difficulty swallowing (dysphagia) Persistent heartburn or worsening acid reflux Unintentional weight loss Coughing, hoarseness, or throat discomfort Vomiting or coughing up blood in advanced cases Causes & Triggers Increasing age, especially above 60 years Male gender Chronic acid reflux or gastroesophageal reflux disease (GERD) Smoking and excessive alcohol consumption Obesity, poor dietary habits, or Barrett’s esophagus Risks & Complications Spread of cancer to nearby organs or lymph nodes Severe difficulty swallowing and malnutrition Bleeding and anemia Breathing problems due to tumor spread Complications related to surgery, chemotherapy, or radiation therapy Treatment Options Surgical removal of the tumor or affected esophagus Chemotherapy and targeted therapy Radiation therapy and combined chemoradiation Nutritional support and swallowing management Palliative care and symptom control in advanced disease Recovery & Outlook The long-term outlook for esophageal cancer depends on the stage of disease, overall health condition, and response to treatment. Early detection and multidisciplinary cancer care can improve survival rates and quality of life. Continuous follow-up, nutritional care, lifestyle modifications, and supportive treatment are important for long-term recovery and prevention of complications.',
                'symptoms' => [],
                'causes' => [],
                'condition_risks' => [],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [],
                'surgery_risks' => [],
                'long_term_outlook' => '',
                'conclusion' => '',
                'seo_title' => 'Esophageal Cancer',
                'seo_description' => '',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
