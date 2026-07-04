<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MultiplePrimaryMalignanciesConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Multiple Primary Malignancies')],
            [
                'name' => 'Multiple Primary Malignancies',
                'slug' => Str::slug('Multiple Primary Malignancies'),
                'h1' => 'Multiple Primary Malignancies',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Multiple primary malignancies refer to the occurrence of two or more separate and distinct cancers in the same individual. These cancers may develop at the same time (synchronous) or at different times (metachronous) and are not caused by the spread of one cancer to another site. Management of multiple primary malignancies requires comprehensive evaluation, multidisciplinary cancer care, and individualized treatment planning.',
                'about_more' => '',
                'overview' => 'Multiple primary malignancies refer to the occurrence of two or more separate and distinct cancers in the same individual. These cancers may develop at the same time (synchronous) or at different times (metachronous) and are not caused by the spread of one cancer to another site. Management of multiple primary malignancies requires comprehensive evaluation, multidisciplinary cancer care, and individualized treatment planning.',
                'symptoms' => [
            ['value' => 'Persistent fatigue and unexplained weight loss'],
            ['value' => 'Symptoms related to different affected organs or body systems'],
            ['value' => 'Chronic pain or discomfort'],
            ['value' => 'Swelling, lumps, or abnormal bleeding'],
            ['value' => 'Reduced physical stamina and overall weakness'],
        ],
                'causes' => [
            ['value' => 'Genetic and inherited cancer syndromes'],
            ['value' => 'Previous exposure to chemotherapy or radiation therapy'],
            ['value' => 'Smoking, alcohol use, and unhealthy lifestyle habits'],
            ['value' => 'Long-term environmental or occupational carcinogen exposure'],
            ['value' => 'Increasing age and weakened immune function'],
        ],
                'risks' => [
            ['value' => 'Spread or progression of multiple cancers'],
            ['value' => 'Increased treatment complexity and organ-related complications'],
            ['value' => 'Reduced immunity and higher infection risk'],
            ['value' => 'Nutritional deficiency and physical weakness'],
            ['value' => 'Emotional stress and reduced quality of life'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Multidisciplinary oncology evaluation and treatment planning'],
            ['value' => 'Surgery, chemotherapy, or radiation therapy based on cancer type'],
            ['value' => 'Targeted therapy or immunotherapy when indicated'],
            ['value' => 'Supportive care, nutritional therapy, and symptom management'],
            ['value' => 'Long-term surveillance and genetic counseling when appropriate'],
        ],
                'recovery' => 'The long-term outlook for multiple primary malignancies depends on the types of cancers involved, stage of disease, overall health condition, and response to treatment. Early detection and coordinated multidisciplinary cancer care can improve treatment outcomes and quality of life. Continuous monitoring, preventive healthcare, rehabilitation, and supportive care are important for long-term recovery and management. _____________________ 25. Treatment-Related Complications (Neutropenia, Mucositis & Lymphedema)',
                'sort_order' => 26,
                'is_active' => true,
                'meta_title' => 'Multiple Primary Malignancies',
                'meta_description' => 'Multiple primary malignancies refer to the occurrence of two or more separate and distinct cancers in the same individual. These cancers may develop at the same',
                'meta_keywords' => '',
            ]
        );
    }
}
