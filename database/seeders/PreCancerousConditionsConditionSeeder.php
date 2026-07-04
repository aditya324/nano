<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PreCancerousConditionsConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Pre-Cancerous Conditions')],
            [
                'name' => 'Pre-Cancerous Conditions',
                'slug' => Str::slug('Pre-Cancerous Conditions'),
                'h1' => 'Pre-Cancerous Conditions',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Pre-cancerous conditions are abnormal cellular or tissue changes that may increase the risk of developing cancer over time if left untreated. Conditions such as cervical dysplasia, certain polyps, and Barrett’s esophagus are considered precancerous because they can gradually progress into cancerous growths. Early diagnosis, monitoring, and timely treatment are important for preventing cancer development and maintaining long-term health.',
                'about_more' => '',
                'overview' => 'Pre-cancerous conditions are abnormal cellular or tissue changes that may increase the risk of developing cancer over time if left untreated. Conditions such as cervical dysplasia, certain polyps, and Barrett’s esophagus are considered precancerous because they can gradually progress into cancerous growths. Early diagnosis, monitoring, and timely treatment are important for preventing cancer development and maintaining long-term health.',
                'symptoms' => [
            ['value' => 'Abnormal bleeding or discharge'],
            ['value' => 'Persistent acid reflux or heartburn'],
            ['value' => 'Difficulty swallowing or throat discomfort'],
            ['value' => 'Changes in bowel habits or rectal bleeding related to polyps'],
            ['value' => 'Many pre-cancerous conditions may not cause noticeable symptoms initially'],
        ],
                'causes' => [
            ['value' => 'Human papillomavirus (HPV) infection'],
            ['value' => 'Chronic inflammation or long-term irritation of tissues'],
            ['value' => 'Gastroesophageal reflux disease (GERD) and acid reflux'],
            ['value' => 'Smoking, alcohol use, and unhealthy lifestyle habits'],
            ['value' => 'Family history and genetic predisposition'],
        ],
                'risks' => [
            ['value' => 'Progression to invasive cancer if untreated'],
            ['value' => 'Chronic tissue damage and inflammation'],
            ['value' => 'Increased need for repeated medical procedures or monitoring'],
            ['value' => 'Nutritional or digestive complications in gastrointestinal conditions'],
            ['value' => 'Emotional stress and anxiety related to cancer risk'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Regular screening and surveillance procedures'],
            ['value' => 'Surgical or endoscopic removal of abnormal tissue or polyps'],
            ['value' => 'Medications to control inflammation or acid reflux'],
            ['value' => 'Lifestyle modifications including smoking cessation and healthy diet'],
            ['value' => 'Long-term specialist follow-up and preventive care'],
        ],
                'recovery' => 'The long-term outlook for pre-cancerous conditions is generally very positive when abnormalities are detected early and treated appropriately. Routine screening, preventive healthcare, healthy lifestyle practices, and continuous medical follow-up play a vital role in reducing cancer risk and maintaining long-term health and well-being. ________________________ 24. Multiple Primary Malignancies',
                'sort_order' => 25,
                'is_active' => true,
                'meta_title' => 'Pre-Cancerous Conditions',
                'meta_description' => 'Pre-cancerous conditions are abnormal cellular or tissue changes that may increase the risk of developing cancer over time if left untreated. Conditions such as',
                'meta_keywords' => '',
            ]
        );
    }
}
