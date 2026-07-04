<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ParotidectomySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Parotidectomy')],
            [
                'title' => 'Parotidectomy',
                'slug' => Str::slug('Parotidectomy'),
                'introduction' => 'Parotidectomy is a surgical procedure performed to remove part or all of the parotid gland, the largest salivary gland located near the ear and jaw. The surgery is commonly performed for tumors, chronic infections, or cysts affecting the parotid gland. Careful surgical technique is required to protect the facial nerve passing through the gland.',
                'what_is' => 'The procedure is performed under general anesthesia. The surgeon removes diseased gland tissue while preserving facial nerve function whenever possible. Parotidectomy may be: Superficial parotidectomy Total parotidectomy Tumor-specific gland excision The surgery is commonly recommended for: Parotid gland tumors Chronic gland infections Benign cysts Suspicious gland swelling',
                'symptoms' => [
            ['value' => 'Swelling near the ear or jaw'],
            ['value' => 'Pain while eating'],
            ['value' => 'Facial swelling'],
            ['value' => 'Lump in the parotid region'],
            ['value' => 'Facial weakness in severe cases'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Facial nerve weakness'],
            ['value' => 'Bleeding or infection'],
            ['value' => 'Salivary leakage'],
            ['value' => 'Numbness near the ear'],
            ['value' => 'Scar formation'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Maintain surgical wound hygiene'],
            ['value' => 'Attend regular follow-up appointments'],
            ['value' => 'Monitor facial movements carefully'],
            ['value' => 'Take medications as prescribed'],
            ['value' => 'Avoid strain on the surgical area initially'],
        ],
                'surgery_risks' => [
            ['value' => 'Facial nerve weakness'],
            ['value' => 'Bleeding or infection'],
            ['value' => 'Salivary leakage'],
            ['value' => 'Numbness near the ear'],
            ['value' => 'Scar formation'],
        ],
                'long_term_outlook' => 'Parotidectomy effectively treats gland disease and tumors. Most patients recover well with preserved facial function and long-term symptom relief.',
                'conclusion' => '',
                'seo_title' => 'Parotidectomy',
                'seo_description' => 'Parotidectomy is a surgical procedure performed to remove part or all of the parotid gland, the largest salivary gland located near the ear and jaw. The surgery is commonly performed for tumors, chronic infections, or cysts affecting the parotid gland. Careful surgical technique is required to protect the facial nerve passing through the gland.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
