<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class NeckLumpEvaluationandBiopsySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Neck Lump Evaluation and Biopsy')],
            [
                'title' => 'Neck Lump Evaluation and Biopsy',
                'slug' => Str::slug('Neck Lump Evaluation and Biopsy'),
                'introduction' => 'Neck lump evaluation and biopsy involve specialized assessment of swellings or masses in the neck to determine their cause and guide treatment. Neck lumps may arise from infections, lymph nodes, thyroid disease, cysts, or tumors. Early evaluation is important for accurate diagnosis and timely management.',
                'what_is' => 'The evaluation includes: Physical examination Imaging studies Ultrasound assessment Blood investigations Biopsy procedures Biopsy methods may include: Needle biopsy Core biopsy Surgical biopsy The goal is to identify whether the swelling is inflammatory, infectious, benign, or malignant.',
                'symptoms' => [
            ['value' => 'Swelling in the neck'],
            ['value' => 'Pain or tenderness'],
            ['value' => 'Difficulty swallowing'],
            ['value' => 'Persistent enlarged lymph nodes'],
            ['value' => 'Voice or breathing changes'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Bleeding after biopsy'],
            ['value' => 'Infection'],
            ['value' => 'Temporary discomfort'],
            ['value' => 'Scar formation'],
            ['value' => 'Delayed diagnosis if untreated'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Keep the biopsy area clean'],
            ['value' => 'Monitor for swelling or bleeding'],
            ['value' => 'Attend follow-up review appointments'],
            ['value' => 'Continue prescribed medications'],
            ['value' => 'Review biopsy results promptly'],
        ],
                'surgery_risks' => [
            ['value' => 'Bleeding after biopsy'],
            ['value' => 'Infection'],
            ['value' => 'Temporary discomfort'],
            ['value' => 'Scar formation'],
            ['value' => 'Delayed diagnosis if untreated'],
        ],
                'long_term_outlook' => 'Early neck lump evaluation improves diagnostic accuracy and treatment success. Long-term outcomes depend on the underlying cause and timely management.',
                'conclusion' => '',
                'seo_title' => 'Neck Lump Evaluation and Biopsy',
                'seo_description' => 'Neck lump evaluation and biopsy involve specialized assessment of swellings or masses in the neck to determine their cause and guide treatment. Neck lumps may arise from infections, lymph nodes, thyroid disease, cysts, or tumors. Early evaluation is important for accurate diagnosis and timely management.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
