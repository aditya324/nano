<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PediatricCancersLeukemiaNeuroblastomaWilmsTumorSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Pediatric Cancers (Leukemia, Neuroblastoma, Wilms Tumor)')],
            [
                'title' => 'Pediatric Cancers (Leukemia, Neuroblastoma, Wilms Tumor)',
                'slug' => Str::slug('Pediatric Cancers (Leukemia, Neuroblastoma, Wilms Tumor)'),
                'introduction' => '',
                'what_is' => 'Wilms tumor is a rare type of kidney cancer that primarily affects children, usually under the age of five years. It develops in one or both kidneys and represents the majority of kidney tumors seen in children. Early diagnosis and specialized pediatric oncology treatment can significantly improve recovery and long-term outcomes. Common Symptoms A lump or mass in the abdomen that can be felt Swelling or enlargement of the abdominal area Blood in the urine (hematuria) High blood pressure causing headaches, nosebleeds, or eye-related symptoms Abdominal pain or discomfort Causes & Triggers Genetic and inherited abnormalities Certain congenital or developmental syndromes Family history of Wilms tumor in rare cases Abnormal kidney development during early childhood Most cases occur without a clearly identifiable cause Risks & Complications Spread of cancer to the lungs or nearby tissues Kidney dysfunction or reduced kidney function High blood pressure and circulatory complications Growth and developmental concerns related to treatment Treatment-related complications affecting organs or immunity Treatment Options Surgical removal of the affected kidney or tumor Chemotherapy and radiation therapy Targeted therapy in selected cases Supportive pediatric oncology care and monitoring Long-term kidney function and cancer follow-up care Recovery & Outlook The long-term outlook for Wilms tumor is generally very positive, especially when diagnosed and treated early. Many children achieve successful recovery with modern pediatric cancer treatments. Continuous follow-up, kidney function monitoring, nutritional support, and long-term pediatric oncology care are important for maintaining overall health and detecting recurrence or treatment-related complications.',
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
                'seo_title' => 'Pediatric Cancers (Leukemia, Neuroblastoma, Wilms Tumor)',
                'seo_description' => '',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
