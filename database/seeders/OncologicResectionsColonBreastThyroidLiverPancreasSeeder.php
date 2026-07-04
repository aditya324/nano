<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class OncologicResectionsColonBreastThyroidLiverPancreasSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Oncologic Resections (Colon, Breast, Thyroid, Liver, Pancreas)')],
            [
                'title' => 'Oncologic Resections (Colon, Breast, Thyroid, Liver, Pancreas)',
                'slug' => Str::slug('Oncologic Resections (Colon, Breast, Thyroid, Liver, Pancreas)'),
                'introduction' => 'Oncologic resections are major cancer surgeries performed to remove tumors along with surrounding tissues and lymph nodes to achieve complete disease control. These procedures play a major role in curative cancer treatment.',
                'what_is' => 'Common oncologic surgeries include: Colon cancer resection Breast cancer surgery Thyroid cancer surgery Liver tumor resection Pancreatic tumor surgery The goals of surgery include: Complete tumor removal Accurate cancer staging Prevention of spread Improvement of survival Treatment often involves multidisciplinary cancer care including chemotherapy and radiation therapy.',
                'symptoms' => [
            ['value' => 'Unexplained weight loss'],
            ['value' => 'Persistent pain or swelling'],
            ['value' => 'Abnormal bleeding'],
            ['value' => 'Digestive or bowel disturbances'],
            ['value' => 'Cancer-related systemic symptoms'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Major bleeding'],
            ['value' => 'Infection or sepsis'],
            ['value' => 'Organ dysfunction'],
            ['value' => 'Postoperative complications'],
            ['value' => 'Cancer recurrence'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Attend oncology follow-up regularly'],
            ['value' => 'Maintain adequate nutrition and hydration'],
            ['value' => 'Follow rehabilitation recommendations carefully'],
            ['value' => 'Monitor for recurrence symptoms'],
            ['value' => 'Continue additional cancer therapy if advised'],
        ],
                'surgery_risks' => [
            ['value' => 'Major bleeding'],
            ['value' => 'Infection or sepsis'],
            ['value' => 'Organ dysfunction'],
            ['value' => 'Postoperative complications'],
            ['value' => 'Cancer recurrence'],
        ],
                'long_term_outlook' => 'Successful cancer surgery combined with multidisciplinary care can improve survival, symptom control, and long-term quality of life.',
                'conclusion' => '',
                'seo_title' => 'Oncologic Resections (Colon, Breast, Thyroid, Liver, Pancreas)',
                'seo_description' => 'Oncologic resections are major cancer surgeries performed to remove tumors along with surrounding tissues and lymph nodes to achieve complete disease control. These procedures play a major role in curative cancer treatment.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
