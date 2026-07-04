<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SalivaryGlandSurgerySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Salivary Gland Surgery')],
            [
                'title' => 'Salivary Gland Surgery',
                'slug' => Str::slug('Salivary Gland Surgery'),
                'introduction' => 'Salivary gland surgery involves surgical treatment of disorders affecting the glands that produce saliva, including infections, stones, cysts, and tumors. The surgery aims to remove diseased tissue while preserving gland function whenever possible. It is commonly performed for chronic gland swelling or masses.',
                'what_is' => 'The procedure may involve: Removal of salivary gland stones Drainage of abscesses Removal of cysts Tumor excision Gland preservation procedures Salivary gland surgery commonly involves: Parotid glands Submandibular glands Minor salivary glands The surgery is planned carefully because important nerves pass near these glands.',
                'symptoms' => [
            ['value' => 'Swelling near the jaw or cheek'],
            ['value' => 'Pain during eating'],
            ['value' => 'Dry mouth'],
            ['value' => 'Recurrent gland infection'],
            ['value' => 'Salivary gland lump'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Facial nerve injury'],
            ['value' => 'Infection'],
            ['value' => 'Bleeding'],
            ['value' => 'Salivary leakage'],
            ['value' => 'Scar formation'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Maintain good oral hygiene'],
            ['value' => 'Stay hydrated adequately'],
            ['value' => 'Follow wound care instructions carefully'],
            ['value' => 'Attend follow-up appointments regularly'],
            ['value' => 'Report swelling or fever immediately'],
        ],
                'surgery_risks' => [
            ['value' => 'Facial nerve injury'],
            ['value' => 'Infection'],
            ['value' => 'Bleeding'],
            ['value' => 'Salivary leakage'],
            ['value' => 'Scar formation'],
        ],
                'long_term_outlook' => 'Most patients recover well after salivary gland surgery with relief of pain, swelling, and recurrent infections. Early treatment improves long-term outcomes.',
                'conclusion' => '',
                'seo_title' => 'Salivary Gland Surgery',
                'seo_description' => 'Salivary gland surgery involves surgical treatment of disorders affecting the glands that produce saliva, including infections, stones, cysts, and tumors. The surgery aims to remove diseased tissue while preserving gland function whenever possible. It is commonly performed for chronic gland swelling or masses.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
