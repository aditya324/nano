<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class LungCancerSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Lung Cancer')],
            [
                'title' => 'Lung Cancer',
                'slug' => Str::slug('Lung Cancer'),
                'introduction' => '',
                'what_is' => 'Lung cancer is a disease in which abnormal cells in the lungs grow uncontrollably and form tumors. It commonly begins in the airways or lung tissues and can spread to nearby lymph nodes or other parts of the body if not treated early. Lung cancer is one of the leading causes of cancer-related deaths worldwide, but early diagnosis and advanced treatment options can significantly improve outcomes. Common Symptoms A persistent cough that does not go away Chest pain or chest discomfort Coughing up blood, even in small amounts Shortness of breath or wheezing Loss of appetite and unexplained weight loss Causes & Triggers Cigarette smoking and tobacco exposure Exposure to secondhand smoke Exposure to harmful substances such as radon, asbestos, silica, diesel exhaust, or air pollution Previous radiation therapy to the chest Family history and genetic risk factors Risks & Complications Spread of cancer to other organs (metastasis) Breathing difficulty and reduced lung function Recurrent lung infections or pleural effusion Severe weight loss and physical weakness Complications related to chemotherapy, radiation, or advanced disease Treatment Options Surgical removal of lung tumors when possible Chemotherapy and targeted therapy Radiation therapy and immunotherapy Supportive respiratory and palliative care Multidisciplinary cancer management and long-term follow-up Recovery & Outlook The long-term outlook for lung cancer depends on the type of cancer, stage at diagnosis, overall health condition, and response to treatment. Early detection and comprehensive cancer care can improve survival and quality of life. Regular follow-up, smoking cessation, rehabilitation, and supportive care are important components of long-term recovery and cancer management.',
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
                'seo_title' => 'Lung Cancer',
                'seo_description' => '',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
