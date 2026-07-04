<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PancreaticCancerSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Pancreatic Cancer')],
            [
                'title' => 'Pancreatic Cancer',
                'slug' => Str::slug('Pancreatic Cancer'),
                'introduction' => '',
                'what_is' => 'Pancreatic cancer is a type of cancer that develops in the tissues of the pancreas, an organ located behind the stomach that helps with digestion and blood sugar regulation. The disease often progresses silently in its early stages and may spread to nearby organs or distant parts of the body if not detected early. Early diagnosis and specialized cancer care are important for improving treatment outcomes. Common Symptoms Abdominal pain that may spread to the back or sides Nausea, vomiting, or digestive discomfort Yellowing of the skin and eyes (jaundice) Dark urine and pale-colored stools Fatigue, weakness, or unexplained weight loss Causes & Triggers Smoking and tobacco use Obesity, especially excess abdominal fat Type 2 diabetes and metabolic disorders Exposure to certain industrial chemicals or pesticides Family history and genetic predisposition Risks & Complications Spread of cancer to nearby organs or distant body parts Severe weight loss and malnutrition Digestive problems and poor nutrient absorption Liver complications and bile duct obstruction Complications related to chemotherapy, surgery, or advanced cancer progression Treatment Options Surgical removal of the tumor when possible Chemotherapy and targeted therapy Radiation therapy in selected cases Pain management and nutritional support Multidisciplinary cancer care and palliative support Recovery & Outlook The long-term outlook for pancreatic cancer depends on the stage of disease, overall health condition, and response to treatment. Early diagnosis and advanced cancer management can improve survival and quality of life. Continuous follow-up, supportive care, nutritional management, and multidisciplinary treatment planning are important for long-term care and symptom control.',
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
                'seo_title' => 'Pancreatic Cancer',
                'seo_description' => '',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
