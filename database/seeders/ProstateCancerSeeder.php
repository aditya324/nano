<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProstateCancerSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Prostate Cancer')],
            [
                'title' => 'Prostate Cancer',
                'slug' => Str::slug('Prostate Cancer'),
                'introduction' => '',
                'what_is' => 'Prostate cancer is a type of cancer that develops in the prostate gland, a small walnut-shaped gland located below the bladder and in front of the rectum in males. The prostate helps produce seminal fluid that supports and transports sperm. Prostate cancer often grows slowly, but some forms can be aggressive and spread to other parts of the body if not treated early. Common Symptoms Blood in the urine or semen Weak or interrupted urine flow Difficulty starting urination Loss of bladder or bowel control in advanced cases Frequent urination, especially at night Causes & Triggers Family history of prostate cancer Genetic and inherited risk factors Obesity and high body mass index (BMI) Certain sexually transmitted infections (STIs) Exposure to harmful chemicals such as Agent Orange Risks & Complications Spread of cancer to bones or other organs Urinary incontinence and bladder problems Erectile dysfunction and sexual health complications Bone pain and reduced mobility in advanced disease Treatment-related complications affecting urinary or reproductive function Treatment Options Active surveillance for slow-growing cancers Surgical removal of the prostate gland Radiation therapy and hormone therapy Chemotherapy, targeted therapy, or immunotherapy Supportive care and long-term cancer monitoring Recovery & Outlook The long-term outlook for prostate cancer depends on the stage of disease, tumor aggressiveness, and response to treatment. Many individuals achieve good outcomes with early detection and appropriate therapy. Regular screening, follow-up monitoring, healthy lifestyle practices, and ongoing urology and oncology care are important for long-term recovery and quality of life.',
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
                'seo_title' => 'Prostate Cancer',
                'seo_description' => '',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
