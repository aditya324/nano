<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TesticularCancerSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Testicular Cancer')],
            [
                'title' => 'Testicular Cancer',
                'slug' => Str::slug('Testicular Cancer'),
                'introduction' => '',
                'what_is' => 'Testicular cancer is a type of cancer that develops in the testicles (testes), which are located inside the scrotum beneath the penis. The testicles are responsible for producing sperm and male hormones such as testosterone. Testicular cancer is relatively uncommon but is one of the most treatable cancers when detected early. Common Symptoms A lump or swelling in either testicle Pain or discomfort in the testicle or scrotum A feeling of heaviness in the scrotum Enlargement or tenderness of breast tissue Shrinking or change in the size of a testicle Causes & Triggers Undescended testicle (cryptorchidism) Family history of testicular cancer Personal history of testicular cancer in the opposite testicle Genetic and developmental factors Age, especially in younger and middle-aged males Risks & Complications Spread of cancer to lymph nodes or other organs Fertility and reproductive health complications Hormonal imbalance affecting testosterone levels Emotional stress and psychological impact Treatment-related complications from surgery or chemotherapy Treatment Options Surgical removal of the affected testicle (orchiectomy) Chemotherapy and radiation therapy Surveillance and regular cancer monitoring Fertility preservation and reproductive counseling Long-term oncology follow-up and supportive care Recovery & Outlook The long-term outlook for testicular cancer is highly favorable, especially when diagnosed and treated early. Most individuals respond well to treatment and achieve excellent survival outcomes. Regular follow-up care, self-examination, healthy lifestyle practices, and ongoing medical monitoring are important for detecting recurrence and maintaining long-term health and quality of life.',
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
                'seo_title' => 'Testicular Cancer',
                'seo_description' => '',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
