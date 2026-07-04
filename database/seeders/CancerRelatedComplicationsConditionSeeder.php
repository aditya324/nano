<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CancerRelatedComplicationsConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Cancer-Related Complications')],
            [
                'name' => 'Cancer-Related Complications',
                'slug' => Str::slug('Cancer-Related Complications'),
                'h1' => 'Cancer-Related Complications',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Cancer-related complications are serious health problems that develop as a result of advanced cancer or its treatment. Conditions such as malignant effusions, chronic cancer pain, and cancer cachexia can significantly affect organ function, nutrition, mobility, and overall quality of life. Early recognition and supportive cancer care are essential for symptom control and improving patient comfort.',
                'about_more' => '',
                'overview' => 'Cancer-related complications are serious health problems that develop as a result of advanced cancer or its treatment. Conditions such as malignant effusions, chronic cancer pain, and cancer cachexia can significantly affect organ function, nutrition, mobility, and overall quality of life. Early recognition and supportive cancer care are essential for symptom control and improving patient comfort.',
                'symptoms' => [
            ['value' => 'Persistent or severe pain'],
            ['value' => 'Shortness of breath due to fluid accumulation around the lungs or heart'],
            ['value' => 'Extreme weight loss and muscle wasting'],
            ['value' => 'Fatigue, weakness, and reduced physical activity'],
            ['value' => 'Loss of appetite and nutritional deficiency'],
        ],
                'causes' => [
            ['value' => 'Advanced or metastatic cancer'],
            ['value' => 'Spread of cancer to organs, lymph nodes, or body cavities'],
            ['value' => 'Chronic inflammation and metabolic changes caused by cancer'],
            ['value' => 'Side effects of chemotherapy, radiation, or other cancer treatments'],
            ['value' => 'Reduced nutritional intake and cancer-related organ dysfunction'],
        ],
                'risks' => [
            ['value' => 'Respiratory distress from malignant pleural or pericardial effusions'],
            ['value' => 'Severe malnutrition and cachexia-related weakness'],
            ['value' => 'Reduced mobility and physical function'],
            ['value' => 'Emotional distress, anxiety, and poor quality of life'],
            ['value' => 'Increased hospitalization and advanced organ dysfunction'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Drainage procedures for malignant effusions'],
            ['value' => 'Pain management and palliative care support'],
            ['value' => 'Nutritional therapy and cachexia management'],
            ['value' => 'Chemotherapy, radiation therapy, or targeted cancer treatment'],
            ['value' => 'Multidisciplinary supportive oncology care and symptom management'],
        ],
                'recovery' => 'The long-term outlook for cancer-related complications depends on the type and stage of cancer, overall health condition, and response to supportive treatment. Comprehensive symptom management, nutritional support, pain control, and palliative care can significantly improve comfort, quality of life, and functional well-being. Continuous oncology follow-up and individualized supportive care remain essential in advanced cancer management __________________ 23. Pre-Cancerous Conditions (Cervical Dysplasia, Polyps & Barrett’s Esophagus)',
                'sort_order' => 24,
                'is_active' => true,
                'meta_title' => 'Cancer-Related Complications',
                'meta_description' => 'Cancer-related complications are serious health problems that develop as a result of advanced cancer or its treatment. Conditions such as malignant effusions, c',
                'meta_keywords' => '',
            ]
        );
    }
}
