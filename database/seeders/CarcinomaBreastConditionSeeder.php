<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CarcinomaBreastConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Carcinoma Breast')],
            [
                'name' => 'Carcinoma Breast',
                'slug' => Str::slug('Carcinoma Breast'),
                'h1' => 'Carcinoma Breast',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Breast carcinoma is a malignant tumor arising from breast tissue. It is one of the most common cancers in women and may spread to lymph nodes and other organs if untreated.',
                'about_more' => '',
                'overview' => 'Breast carcinoma is a malignant tumor arising from breast tissue. It is one of the most common cancers in women and may spread to lymph nodes and other organs if untreated.',
                'symptoms' => [
            ['value' => 'Breast lump or thickening'],
            ['value' => 'Nipple discharge or retraction'],
            ['value' => 'Skin dimpling or redness'],
            ['value' => 'Swelling in the armpit'],
            ['value' => 'Breast pain or change in breast size'],
        ],
                'causes' => [
            ['value' => 'Genetic and family history factors'],
            ['value' => 'Hormonal influences'],
            ['value' => 'Increasing age'],
            ['value' => 'Obesity and sedentary lifestyle'],
            ['value' => 'Smoking, alcohol, and radiation exposure'],
        ],
                'risks' => [
            ['value' => 'Spread to lymph nodes and organs'],
            ['value' => 'Bone, lung, or liver metastasis'],
            ['value' => 'Emotional and psychological distress'],
            ['value' => 'Recurrence after treatment'],
            ['value' => 'Life-threatening advanced cancer'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Mammography and biopsy evaluation'],
            ['value' => 'Breast-conserving surgery or mastectomy'],
            ['value' => 'Chemotherapy and radiation therapy'],
            ['value' => 'Hormonal and targeted therapies'],
            ['value' => 'Long-term oncology follow-up'],
        ],
                'recovery' => 'Early-stage breast cancer has a high survival rate with modern treatment. Regular screening improves early detection and outcomes.',
                'sort_order' => 17,
                'is_active' => true,
                'meta_title' => 'Carcinoma Breast',
                'meta_description' => 'Breast carcinoma is a malignant tumor arising from breast tissue. It is one of the most common cancers in women and may spread to lymph nodes and other organs i',
                'meta_keywords' => '',
            ]
        );
    }
}
