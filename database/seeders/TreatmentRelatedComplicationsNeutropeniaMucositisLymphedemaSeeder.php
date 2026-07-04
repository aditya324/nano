<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TreatmentRelatedComplicationsNeutropeniaMucositisLymphedemaSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Treatment-Related Complications (Neutropenia, Mucositis & Lymphedema)')],
            [
                'title' => 'Treatment-Related Complications (Neutropenia, Mucositis & Lymphedema)',
                'slug' => Str::slug('Treatment-Related Complications (Neutropenia, Mucositis & Lymphedema)'),
                'introduction' => '',
                'what_is' => 'Treatment-related complications are medical conditions that may occur as side effects of cancer therapies such as chemotherapy, radiation therapy, surgery, immunotherapy, or targeted treatments. Complications such as neutropenia, mucositis, and lymphedema can affect immunity, nutrition, mobility, and overall quality of life. Early recognition and supportive care are important for reducing complications and improving recovery outcomes. Common Symptoms Fever or frequent infections due to low immunity Painful mouth sores or difficulty eating and swallowing Swelling of the arms, legs, or affected body areas Fatigue, weakness, or reduced physical function Skin irritation, discomfort, or delayed healing after treatment Causes & Triggers Chemotherapy affecting healthy blood cells and tissues Radiation therapy causing tissue inflammation or damage Surgical removal of lymph nodes or cancer-related procedures Immunotherapy or targeted therapy side effects Reduced immune function and treatment-related tissue injury Risks & Complications Severe infections and sepsis due to neutropenia Nutritional deficiency and dehydration from mucositis Chronic swelling and reduced mobility from lymphedema Delayed cancer treatment due to treatment-related complications Reduced quality of life and prolonged recovery Treatment Options Infection prevention and immune-supportive therapy Pain management and oral care for mucositis Compression therapy and rehabilitation for lymphedema Nutritional support and hydration management Multidisciplinary supportive oncology care and monitoring Recovery & Outlook The long-term outlook for treatment-related complications depends on the severity of symptoms, type of cancer therapy, and response to supportive care. Early management and continuous monitoring can significantly reduce complications, improve comfort, and support recovery during cancer treatment. Ongoing rehabilitation, preventive care, and specialist follow-up are important for maintaining long-term health and quality of life.',
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
                'seo_title' => 'Treatment-Related Complications (Neutropenia, Mucositis & Lymphedema)',
                'seo_description' => '',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
