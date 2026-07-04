<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MultiplePrimaryMalignanciesSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Multiple Primary Malignancies')],
            [
                'title' => 'Multiple Primary Malignancies',
                'slug' => Str::slug('Multiple Primary Malignancies'),
                'introduction' => '',
                'what_is' => 'Multiple primary malignancies refer to the occurrence of two or more separate and distinct cancers in the same individual. These cancers may develop at the same time (synchronous) or at different times (metachronous) and are not caused by the spread of one cancer to another site. Management of multiple primary malignancies requires comprehensive evaluation, multidisciplinary cancer care, and individualized treatment planning. Common Symptoms Persistent fatigue and unexplained weight loss Symptoms related to different affected organs or body systems Chronic pain or discomfort Swelling, lumps, or abnormal bleeding Reduced physical stamina and overall weakness Causes & Triggers Genetic and inherited cancer syndromes Previous exposure to chemotherapy or radiation therapy Smoking, alcohol use, and unhealthy lifestyle habits Long-term environmental or occupational carcinogen exposure Increasing age and weakened immune function Risks & Complications Spread or progression of multiple cancers Increased treatment complexity and organ-related complications Reduced immunity and higher infection risk Nutritional deficiency and physical weakness Emotional stress and reduced quality of life Treatment Options Multidisciplinary oncology evaluation and treatment planning Surgery, chemotherapy, or radiation therapy based on cancer type Targeted therapy or immunotherapy when indicated Supportive care, nutritional therapy, and symptom management Long-term surveillance and genetic counseling when appropriate Recovery & Outlook The long-term outlook for multiple primary malignancies depends on the types of cancers involved, stage of disease, overall health condition, and response to treatment. Early detection and coordinated multidisciplinary cancer care can improve treatment outcomes and quality of life. Continuous monitoring, preventive healthcare, rehabilitation, and supportive care are important for long-term recovery and management.',
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
                'seo_title' => 'Multiple Primary Malignancies',
                'seo_description' => '',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
