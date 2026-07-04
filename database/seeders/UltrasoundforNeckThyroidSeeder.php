<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UltrasoundforNeckThyroidSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Ultrasound for Neck & Thyroid')],
            [
                'title' => 'Ultrasound for Neck & Thyroid',
                'slug' => Str::slug('Ultrasound for Neck & Thyroid'),
                'introduction' => 'Ultrasound for neck and thyroid evaluation is a non-invasive imaging technique used to assess thyroid disorders, neck swellings, lymph nodes, and salivary gland abnormalities. The procedure provides real-time imaging without radiation exposure. It is widely used in ENT and endocrine evaluations.',
                'what_is' => 'The ultrasound examination helps evaluate: Thyroid nodules Neck cysts Enlarged lymph nodes Salivary gland disorders Soft tissue swellings Thyroid enlargement Ultrasound guidance may also assist in biopsies and fluid aspiration procedures. The test is painless, quick, and safe for all age groups.',
                'symptoms' => [
            ['value' => 'Neck swelling'],
            ['value' => 'Thyroid enlargement'],
            ['value' => 'Difficulty swallowing'],
            ['value' => 'Neck pain or lumps'],
            ['value' => 'Salivary gland swelling'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'No major medical risks'],
            ['value' => 'Mild discomfort from probe pressure occasionally'],
            ['value' => 'Anxiety regarding abnormal findings'],
            ['value' => 'Need for additional tests in some cases'],
            ['value' => 'Rare inconvenience from prolonged examination'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Attend follow-up consultations regularly'],
            ['value' => 'Continue prescribed thyroid or ENT treatment'],
            ['value' => 'Monitor swelling or symptoms carefully'],
            ['value' => 'Follow biopsy recommendations if advised'],
            ['value' => 'Seek medical attention for rapid swelling changes'],
        ],
                'surgery_risks' => [
            ['value' => 'No major medical risks'],
            ['value' => 'Mild discomfort from probe pressure occasionally'],
            ['value' => 'Anxiety regarding abnormal findings'],
            ['value' => 'Need for additional tests in some cases'],
            ['value' => 'Rare inconvenience from prolonged examination'],
        ],
                'long_term_outlook' => 'Ultrasound imaging supports early detection and monitoring of neck and thyroid disorders, improving long-term treatment outcomes and disease management.',
                'conclusion' => '',
                'seo_title' => 'Ultrasound for Neck & Thyroid',
                'seo_description' => 'Ultrasound for neck and thyroid evaluation is a non-invasive imaging technique used to assess thyroid disorders, neck swellings, lymph nodes, and salivary gland abnormalities. The procedure provides real-time imaging without radiation exposure. It is widely used in ENT and endocrine evaluations.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
