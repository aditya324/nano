<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SubmandibularGlandExcisionSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Submandibular Gland Excision')],
            [
                'title' => 'Submandibular Gland Excision',
                'slug' => Str::slug('Submandibular Gland Excision'),
                'introduction' => 'Submandibular gland excision is a surgical procedure performed to remove the submandibular salivary gland located beneath the jaw. The surgery is commonly required for chronic infection, salivary stones, cysts, or gland tumors. Removal helps relieve pain, swelling, and recurrent gland problems.',
                'what_is' => 'The surgery is performed under general anesthesia through an incision below the jawline. The procedure may be recommended for: Salivary gland stones Chronic gland infection Tumors or cysts Recurrent gland swelling Special care is taken to protect nearby nerves controlling tongue movement and sensation.',
                'symptoms' => [
            ['value' => 'Swelling under the jaw'],
            ['value' => 'Pain during meals'],
            ['value' => 'Recurrent gland infection'],
            ['value' => 'Difficulty swallowing'],
            ['value' => 'Tender lump beneath the jaw'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Bleeding'],
            ['value' => 'Infection'],
            ['value' => 'Nerve injury affecting tongue movement'],
            ['value' => 'Scar formation'],
            ['value' => 'Salivary leakage'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Keep the wound clean and dry'],
            ['value' => 'Maintain proper oral hygiene'],
            ['value' => 'Attend follow-up wound checks'],
            ['value' => 'Use medications regularly'],
            ['value' => 'Report swelling or fever immediately'],
        ],
                'surgery_risks' => [
            ['value' => 'Bleeding'],
            ['value' => 'Infection'],
            ['value' => 'Nerve injury affecting tongue movement'],
            ['value' => 'Scar formation'],
            ['value' => 'Salivary leakage'],
        ],
                'long_term_outlook' => 'Submandibular gland excision provides long-term relief from chronic gland disease and recurrent infections. Most patients recover well with minimal long-term complications.',
                'conclusion' => '',
                'seo_title' => 'Submandibular Gland Excision',
                'seo_description' => 'Submandibular gland excision is a surgical procedure performed to remove the submandibular salivary gland located beneath the jaw. The surgery is commonly required for chronic infection, salivary stones, cysts, or gland tumors. Removal helps relieve pain, swelling, and recurrent gland problems.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
