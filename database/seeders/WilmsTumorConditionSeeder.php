<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class WilmsTumorConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Wilms Tumor')],
            [
                'name' => 'Wilms Tumor',
                'slug' => Str::slug('Wilms Tumor'),
                'h1' => 'Wilms Tumor',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Wilms tumor is a rare type of kidney cancer that primarily affects children, usually under the age of five years. It develops in one or both kidneys and represents the majority of kidney tumors seen in children. Early diagnosis and specialized pediatric oncology treatment can significantly improve recovery and long-term outcomes.',
                'about_more' => '',
                'overview' => 'Wilms tumor is a rare type of kidney cancer that primarily affects children, usually under the age of five years. It develops in one or both kidneys and represents the majority of kidney tumors seen in children. Early diagnosis and specialized pediatric oncology treatment can significantly improve recovery and long-term outcomes.',
                'symptoms' => [
            ['value' => 'A lump or mass in the abdomen that can be felt'],
            ['value' => 'Swelling or enlargement of the abdominal area'],
            ['value' => 'Blood in the urine (hematuria)'],
            ['value' => 'High blood pressure causing headaches, nosebleeds, or eye-related symptoms'],
            ['value' => 'Abdominal pain or discomfort'],
        ],
                'causes' => [
            ['value' => 'Genetic and inherited abnormalities'],
            ['value' => 'Certain congenital or developmental syndromes'],
            ['value' => 'Family history of Wilms tumor in rare cases'],
            ['value' => 'Abnormal kidney development during early childhood'],
            ['value' => 'Most cases occur without a clearly identifiable cause'],
        ],
                'risks' => [
            ['value' => 'Spread of cancer to the lungs or nearby tissues'],
            ['value' => 'Kidney dysfunction or reduced kidney function'],
            ['value' => 'High blood pressure and circulatory complications'],
            ['value' => 'Growth and developmental concerns related to treatment'],
            ['value' => 'Treatment-related complications affecting organs or immunity'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Surgical removal of the affected kidney or tumor'],
            ['value' => 'Chemotherapy and radiation therapy'],
            ['value' => 'Targeted therapy in selected cases'],
            ['value' => 'Supportive pediatric oncology care and monitoring'],
            ['value' => 'Long-term kidney function and cancer follow-up care'],
        ],
                'recovery' => 'The long-term outlook for Wilms tumor is generally very positive, especially when diagnosed and treated early. Many children achieve successful recovery with modern pediatric cancer treatments. Continuous follow-up, kidney function monitoring, nutritional support, and long-term pediatric oncology care are important for maintaining overall health and detecting recurrence or treatment-related complications. __________________________ 20. Metastatic / Advanced Stage Cancers',
                'sort_order' => 20,
                'is_active' => true,
                'meta_title' => 'Wilms Tumor',
                'meta_description' => 'Wilms tumor is a rare type of kidney cancer that primarily affects children, usually under the age of five years. It develops in one or both kidneys and represe',
                'meta_keywords' => '',
            ]
        );
    }
}
