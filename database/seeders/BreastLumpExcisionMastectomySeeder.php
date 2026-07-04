<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BreastLumpExcisionMastectomySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Breast Lump Excision / Mastectomy')],
            [
                'title' => 'Breast Lump Excision / Mastectomy',
                'slug' => Str::slug('Breast Lump Excision / Mastectomy'),
                'introduction' => 'Breast lump excision and mastectomy are surgical procedures performed to remove abnormal breast tissue, benign tumors, suspicious lumps, or breast cancer. These procedures are important in the diagnosis, treatment, and prevention of progression of breast diseases. Breast lump excision removes only the abnormal tissue, while mastectomy involves removal of part or the entire breast depending on disease severity.',
                'what_is' => 'Breast surgery may be recommended for: Benign breast lumps Fibroadenoma Breast cysts Breast cancer Recurrent breast infections Types of procedures include: Lumpectomy or breast lump excision Partial mastectomy Simple mastectomy Modified radical mastectomy Additional procedures such as lymph node evaluation or reconstruction may also be performed. Modern surgical techniques aim to provide effective disease control while preserving cosmetic appearance whenever possible.',
                'symptoms' => [
            ['value' => 'Breast lump or swelling'],
            ['value' => 'Breast pain or tenderness'],
            ['value' => 'Nipple discharge or bleeding'],
            ['value' => 'Skin changes over the breast'],
            ['value' => 'Enlarged lymph nodes in the armpit'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Bleeding or infection'],
            ['value' => 'Fluid collection (seroma)'],
            ['value' => 'Scarring or cosmetic changes'],
            ['value' => 'Numbness around the surgical area'],
            ['value' => 'Emotional or psychological distress after breast removal'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Maintain wound hygiene carefully'],
            ['value' => 'Wear supportive garments if advised'],
            ['value' => 'Perform arm exercises as instructed'],
            ['value' => 'Attend follow-up pathology reviews regularly'],
            ['value' => 'Monitor for swelling, fever, or wound discharge'],
        ],
                'surgery_risks' => [
            ['value' => 'Bleeding or infection'],
            ['value' => 'Fluid collection (seroma)'],
            ['value' => 'Scarring or cosmetic changes'],
            ['value' => 'Numbness around the surgical area'],
            ['value' => 'Emotional or psychological distress after breast removal'],
        ],
                'long_term_outlook' => 'Most patients recover well after breast surgery. Early diagnosis and appropriate treatment significantly improve cancer outcomes, quality of life, and long-term survival.',
                'conclusion' => '',
                'seo_title' => 'Breast Lump Excision / Mastectomy',
                'seo_description' => 'Breast lump excision and mastectomy are surgical procedures performed to remove abnormal breast tissue, benign tumors, suspicious lumps, or breast cancer. These procedures are important in the diagnosis, treatment, and prevention of progression of breast diseases. Breast lump excision removes only the abnormal tissue, while mastectomy involves removal of part or the entire breast depending on disease severity.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
