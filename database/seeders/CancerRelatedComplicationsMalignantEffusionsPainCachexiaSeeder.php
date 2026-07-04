<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CancerRelatedComplicationsMalignantEffusionsPainCachexiaSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Cancer-Related Complications (Malignant Effusions, Pain & Cachexia)')],
            [
                'title' => 'Cancer-Related Complications (Malignant Effusions, Pain & Cachexia)',
                'slug' => Str::slug('Cancer-Related Complications (Malignant Effusions, Pain & Cachexia)'),
                'introduction' => '',
                'what_is' => 'Cancer-related complications are serious health problems that develop as a result of advanced cancer or its treatment. Conditions such as malignant effusions, chronic cancer pain, and cancer cachexia can significantly affect organ function, nutrition, mobility, and overall quality of life. Early recognition and supportive cancer care are essential for symptom control and improving patient comfort. Common Symptoms Persistent or severe pain Shortness of breath due to fluid accumulation around the lungs or heart Extreme weight loss and muscle wasting Fatigue, weakness, and reduced physical activity Loss of appetite and nutritional deficiency Causes & Triggers Advanced or metastatic cancer Spread of cancer to organs, lymph nodes, or body cavities Chronic inflammation and metabolic changes caused by cancer Side effects of chemotherapy, radiation, or other cancer treatments Reduced nutritional intake and cancer-related organ dysfunction Risks & Complications Respiratory distress from malignant pleural or pericardial effusions Severe malnutrition and cachexia-related weakness Reduced mobility and physical function Emotional distress, anxiety, and poor quality of life Increased hospitalization and advanced organ dysfunction Treatment Options Drainage procedures for malignant effusions Pain management and palliative care support Nutritional therapy and cachexia management Chemotherapy, radiation therapy, or targeted cancer treatment Multidisciplinary supportive oncology care and symptom management Recovery & Outlook The long-term outlook for cancer-related complications depends on the type and stage of cancer, overall health condition, and response to supportive treatment. Comprehensive symptom management, nutritional support, pain control, and palliative care can significantly improve comfort, quality of life, and functional well-being. Continuous oncology follow-up and individualized supportive care remain essential in advanced cancer management',
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
                'seo_title' => 'Cancer-Related Complications (Malignant Effusions, Pain & Cachexia)',
                'seo_description' => '',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
