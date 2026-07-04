<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class OvarianCancerConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Ovarian Cancer')],
            [
                'name' => 'Ovarian Cancer',
                'slug' => Str::slug('Ovarian Cancer'),
                'h1' => 'Ovarian Cancer',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Ovarian cancer is a type of cancer that begins in the ovaries, the reproductive glands responsible for producing eggs and female hormones. The disease occurs when abnormal ovarian cells grow uncontrollably and form tumors that can spread to nearby tissues or other parts of the body. Early symptoms are often subtle, making regular medical evaluation important for timely diagnosis and treatment.',
                'about_more' => '',
                'overview' => 'Ovarian cancer is a type of cancer that begins in the ovaries, the reproductive glands responsible for producing eggs and female hormones. The disease occurs when abnormal ovarian cells grow uncontrollably and form tumors that can spread to nearby tissues or other parts of the body. Early symptoms are often subtle, making regular medical evaluation important for timely diagnosis and treatment.',
                'symptoms' => [
            ['value' => 'Pelvic or abdominal pain, discomfort, or bloating'],
            ['value' => 'Feeling full quickly while eating'],
            ['value' => 'Loss of appetite or changes in eating habits'],
            ['value' => 'Persistent pelvic pressure or discomfort'],
            ['value' => 'Changes in bowel habits such as constipation'],
        ],
                'causes' => [
            ['value' => 'Increasing age, especially above 60 years'],
            ['value' => 'Family history of ovarian cancer or inherited BRCA1/BRCA2 gene mutations'],
            ['value' => 'Lynch syndrome and other genetic conditions'],
            ['value' => 'Endometriosis'],
            ['value' => 'Obesity and certain hormonal or reproductive factors'],
        ],
                'risks' => [
            ['value' => 'Spread of cancer to nearby organs or abdominal tissues'],
            ['value' => 'Fluid buildup in the abdomen (ascites)'],
            ['value' => 'Severe abdominal pain and digestive complications'],
            ['value' => 'Weight loss, malnutrition, and fatigue'],
            ['value' => 'Treatment-related complications affecting fertility or overall health'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Surgical removal of ovarian tumors and affected tissues'],
            ['value' => 'Chemotherapy and targeted therapy'],
            ['value' => 'Hormone therapy in selected cases'],
            ['value' => 'Immunotherapy when indicated'],
            ['value' => 'Supportive care and long-term oncology follow-up'],
        ],
                'recovery' => 'The long-term outlook for ovarian cancer depends on the stage of disease, overall health condition, and response to treatment. Early diagnosis and comprehensive cancer care can significantly improve survival and quality of life. Continuous follow-up, genetic counseling when appropriate, healthy lifestyle practices, and supportive care are important for long-term recovery and monitoring for recurrence. _____________________ 13. Endometrial / Uterine Cancer Endometrial / Uterine Cancer',
                'sort_order' => 12,
                'is_active' => true,
                'meta_title' => 'Ovarian Cancer',
                'meta_description' => 'Ovarian cancer is a type of cancer that begins in the ovaries, the reproductive glands responsible for producing eggs and female hormones. The disease occurs wh',
                'meta_keywords' => '',
            ]
        );
    }
}
