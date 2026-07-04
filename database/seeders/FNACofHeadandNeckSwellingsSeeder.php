<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class FNACofHeadandNeckSwellingsSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('FNAC of Head and Neck Swellings')],
            [
                'title' => 'FNAC of Head and Neck Swellings',
                'slug' => Str::slug('FNAC of Head and Neck Swellings'),
                'introduction' => 'Fine Needle Aspiration Cytology (FNAC) is a minimally invasive diagnostic procedure used to evaluate swellings or lumps in the head and neck region. The procedure involves collecting cells using a thin needle for microscopic examination. FNAC helps diagnose infections, cysts, inflammatory conditions, and tumors.',
                'what_is' => 'The procedure is usually performed in the outpatient clinic under sterile conditions. A thin needle is inserted into the swelling to obtain a sample of cells for laboratory analysis. FNAC is commonly performed for: Thyroid nodules Enlarged lymph nodes Salivary gland swellings Neck masses Suspicious head and neck lesions The test is quick, minimally painful, and highly useful for early diagnosis.',
                'symptoms' => [
            ['value' => 'Neck swelling'],
            ['value' => 'Enlarged lymph nodes'],
            ['value' => 'Thyroid lump'],
            ['value' => 'Salivary gland swelling'],
            ['value' => 'Persistent head or neck mass'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Mild pain at the needle site'],
            ['value' => 'Minor bleeding or bruising'],
            ['value' => 'Infection risk is very low'],
            ['value' => 'Temporary swelling'],
            ['value' => 'Rare inadequate sample collection'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Keep the area clean'],
            ['value' => 'Avoid touching the biopsy site excessively'],
            ['value' => 'Monitor for swelling or bleeding'],
            ['value' => 'Attend follow-up for results'],
            ['value' => 'Seek care if severe pain develops'],
        ],
                'surgery_risks' => [
            ['value' => 'Mild pain at the needle site'],
            ['value' => 'Minor bleeding or bruising'],
            ['value' => 'Infection risk is very low'],
            ['value' => 'Temporary swelling'],
            ['value' => 'Rare inadequate sample collection'],
        ],
                'long_term_outlook' => 'FNAC provides rapid and accurate diagnosis for many head and neck conditions. Early diagnosis allows timely treatment and improved long-term outcomes.',
                'conclusion' => '',
                'seo_title' => 'FNAC of Head and Neck Swellings',
                'seo_description' => 'Fine Needle Aspiration Cytology (FNAC) is a minimally invasive diagnostic procedure used to evaluate swellings or lumps in the head and neck region. The procedure involves collecting cells using a thin needle for microscopic examination. FNAC helps diagnose infections, cysts, inflammatory conditions, and tumors.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
