<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class OvarianCancerSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Ovarian Cancer')],
            [
                'title' => 'Ovarian Cancer',
                'slug' => Str::slug('Ovarian Cancer'),
                'introduction' => '',
                'what_is' => 'Ovarian cancer is a type of cancer that begins in the ovaries, the reproductive glands responsible for producing eggs and female hormones. The disease occurs when abnormal ovarian cells grow uncontrollably and form tumors that can spread to nearby tissues or other parts of the body. Early symptoms are often subtle, making regular medical evaluation important for timely diagnosis and treatment. Common Symptoms Pelvic or abdominal pain, discomfort, or bloating Feeling full quickly while eating Loss of appetite or changes in eating habits Persistent pelvic pressure or discomfort Changes in bowel habits such as constipation Causes & Triggers Increasing age, especially above 60 years Family history of ovarian cancer or inherited BRCA1/BRCA2 gene mutations Lynch syndrome and other genetic conditions Endometriosis Obesity and certain hormonal or reproductive factors Risks & Complications Spread of cancer to nearby organs or abdominal tissues Fluid buildup in the abdomen (ascites) Severe abdominal pain and digestive complications Weight loss, malnutrition, and fatigue Treatment-related complications affecting fertility or overall health Treatment Options Surgical removal of ovarian tumors and affected tissues Chemotherapy and targeted therapy Hormone therapy in selected cases Immunotherapy when indicated Supportive care and long-term oncology follow-up Recovery & Outlook The long-term outlook for ovarian cancer depends on the stage of disease, overall health condition, and response to treatment. Early diagnosis and comprehensive cancer care can significantly improve survival and quality of life. Continuous follow-up, genetic counseling when appropriate, healthy lifestyle practices, and supportive care are important for long-term recovery and monitoring for recurrence.',
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
                'seo_title' => 'Ovarian Cancer',
                'seo_description' => '',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
