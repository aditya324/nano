<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProstateCancerConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Prostate Cancer')],
            [
                'name' => 'Prostate Cancer',
                'slug' => Str::slug('Prostate Cancer'),
                'h1' => 'Prostate Cancer',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Prostate cancer is a type of cancer that develops in the prostate gland, a small walnut-shaped gland located below the bladder and in front of the rectum in males. The prostate helps produce seminal fluid that supports and transports sperm. Prostate cancer often grows slowly, but some forms can be aggressive and spread to other parts of the body if not treated early.',
                'about_more' => '',
                'overview' => 'Prostate cancer is a type of cancer that develops in the prostate gland, a small walnut-shaped gland located below the bladder and in front of the rectum in males. The prostate helps produce seminal fluid that supports and transports sperm. Prostate cancer often grows slowly, but some forms can be aggressive and spread to other parts of the body if not treated early.',
                'symptoms' => [
            ['value' => 'Blood in the urine or semen'],
            ['value' => 'Weak or interrupted urine flow'],
            ['value' => 'Difficulty starting urination'],
            ['value' => 'Loss of bladder or bowel control in advanced cases'],
            ['value' => 'Frequent urination, especially at night'],
        ],
                'causes' => [
            ['value' => 'Family history of prostate cancer'],
            ['value' => 'Genetic and inherited risk factors'],
            ['value' => 'Obesity and high body mass index (BMI)'],
            ['value' => 'Certain sexually transmitted infections (STIs)'],
            ['value' => 'Exposure to harmful chemicals such as Agent Orange'],
        ],
                'risks' => [
            ['value' => 'Spread of cancer to bones or other organs'],
            ['value' => 'Urinary incontinence and bladder problems'],
            ['value' => 'Erectile dysfunction and sexual health complications'],
            ['value' => 'Bone pain and reduced mobility in advanced disease'],
            ['value' => 'Treatment-related complications affecting urinary or reproductive function'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Active surveillance for slow-growing cancers'],
            ['value' => 'Surgical removal of the prostate gland'],
            ['value' => 'Radiation therapy and hormone therapy'],
            ['value' => 'Chemotherapy, targeted therapy, or immunotherapy'],
            ['value' => 'Supportive care and long-term cancer monitoring'],
        ],
                'recovery' => 'The long-term outlook for prostate cancer depends on the stage of disease, tumor aggressiveness, and response to treatment. Many individuals achieve good outcomes with early detection and appropriate therapy. Regular screening, follow-up monitoring, healthy lifestyle practices, and ongoing urology and oncology care are important for long-term recovery and quality of life. ___________________ 11. Cervical Cancer',
                'sort_order' => 10,
                'is_active' => true,
                'meta_title' => 'Prostate Cancer',
                'meta_description' => 'Prostate cancer is a type of cancer that develops in the prostate gland, a small walnut-shaped gland located below the bladder and in front of the rectum in mal',
                'meta_keywords' => '',
            ]
        );
    }
}
