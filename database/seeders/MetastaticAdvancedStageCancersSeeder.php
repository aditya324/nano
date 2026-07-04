<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MetastaticAdvancedStageCancersSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Metastatic / Advanced Stage Cancers')],
            [
                'title' => 'Metastatic / Advanced Stage Cancers',
                'slug' => Str::slug('Metastatic / Advanced Stage Cancers'),
                'introduction' => '',
                'what_is' => 'Metastatic or advanced stage cancers are cancers that have spread from their original site to other parts of the body such as the lungs, liver, bones, brain, or lymph nodes. Advanced cancers may affect multiple organs and often require comprehensive, multidisciplinary cancer care focused on controlling disease progression, relieving symptoms, and improving quality of life. Common Symptoms Persistent fatigue and weakness Unexplained weight loss and reduced appetite Chronic pain affecting bones or organs Breathing difficulty, swelling, or neurological symptoms depending on the area affected Persistent fever, nausea, or worsening general health Causes & Triggers Delayed diagnosis or progression of untreated cancer Aggressive cancer cell growth and spread Genetic and molecular abnormalities in cancer cells Resistance to previous cancer treatments Spread of cancer through blood vessels or lymphatic system Risks & Complications Multi-organ involvement and organ dysfunction Severe pain and reduced physical functioning Nutritional deficiency and extreme weight loss Increased risk of infections and treatment complications Emotional distress and reduced quality of life Treatment Options Chemotherapy, targeted therapy, or immunotherapy Radiation therapy for symptom control and tumor reduction Surgical intervention in selected cases Pain management and palliative care support Multidisciplinary oncology care and supportive rehabilitation Recovery & Outlook The long-term outlook for metastatic and advanced stage cancers depends on the type of cancer, extent of spread, response to treatment, and overall health condition. While advanced cancers may not always be curable, modern cancer therapies and supportive care can help control disease progression, reduce symptoms, improve comfort, and enhance quality of life. Continuous oncology follow-up and compassionate supportive care remain essential throughout treatment and recovery.',
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
                'seo_title' => 'Metastatic / Advanced Stage Cancers',
                'seo_description' => '',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
