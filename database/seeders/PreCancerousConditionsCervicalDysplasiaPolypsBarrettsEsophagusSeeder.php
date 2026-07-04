<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PreCancerousConditionsCervicalDysplasiaPolypsBarrettsEsophagusSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Pre-Cancerous Conditions (Cervical Dysplasia, Polyps & Barrett’s Esophagus)')],
            [
                'title' => 'Pre-Cancerous Conditions (Cervical Dysplasia, Polyps & Barrett’s Esophagus)',
                'slug' => Str::slug('Pre-Cancerous Conditions (Cervical Dysplasia, Polyps & Barrett’s Esophagus)'),
                'introduction' => '',
                'what_is' => 'Pre-cancerous conditions are abnormal cellular or tissue changes that may increase the risk of developing cancer over time if left untreated. Conditions such as cervical dysplasia, certain polyps, and Barrett’s esophagus are considered precancerous because they can gradually progress into cancerous growths. Early diagnosis, monitoring, and timely treatment are important for preventing cancer development and maintaining long-term health. Common Symptoms Abnormal bleeding or discharge Persistent acid reflux or heartburn Difficulty swallowing or throat discomfort Changes in bowel habits or rectal bleeding related to polyps Many pre-cancerous conditions may not cause noticeable symptoms initially Causes & Triggers Human papillomavirus (HPV) infection Chronic inflammation or long-term irritation of tissues Gastroesophageal reflux disease (GERD) and acid reflux Smoking, alcohol use, and unhealthy lifestyle habits Family history and genetic predisposition Risks & Complications Progression to invasive cancer if untreated Chronic tissue damage and inflammation Increased need for repeated medical procedures or monitoring Nutritional or digestive complications in gastrointestinal conditions Emotional stress and anxiety related to cancer risk Treatment Options Regular screening and surveillance procedures Surgical or endoscopic removal of abnormal tissue or polyps Medications to control inflammation or acid reflux Lifestyle modifications including smoking cessation and healthy diet Long-term specialist follow-up and preventive care Recovery & Outlook The long-term outlook for pre-cancerous conditions is generally very positive when abnormalities are detected early and treated appropriately. Routine screening, preventive healthcare, healthy lifestyle practices, and continuous medical follow-up play a vital role in reducing cancer risk and maintaining long-term health and well-being.',
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
                'seo_title' => 'Pre-Cancerous Conditions (Cervical Dysplasia, Polyps & Barrett’s Esophagus)',
                'seo_description' => '',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
