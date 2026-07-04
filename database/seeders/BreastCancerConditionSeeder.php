<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BreastCancerConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Breast Cancer')],
            [
                'name' => 'Breast Cancer',
                'slug' => Str::slug('Breast Cancer'),
                'h1' => 'Breast Cancer',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Breast cancer occurs when abnormal cells in the breast grow uncontrollably and form tumors. It is one of the most common cancers affecting women, although it can also occur in men. Breast cancer commonly affects women over the age of 50, but younger individuals may also develop the condition. Early detection and timely treatment significantly improve treatment outcomes and survival rates.',
                'about_more' => '',
                'overview' => 'Breast cancer occurs when abnormal cells in the breast grow uncontrollably and form tumors. It is one of the most common cancers affecting women, although it can also occur in men. Breast cancer commonly affects women over the age of 50, but younger individuals may also develop the condition. Early detection and timely treatment significantly improve treatment outcomes and survival rates.',
                'symptoms' => [
            ['value' => 'A change in the size, shape, or appearance of the breast'],
            ['value' => 'A lump or thickening in the breast or underarm area'],
            ['value' => 'Persistent breast swelling or hardened area under the skin'],
            ['value' => 'Nipple discharge, including blood-stained or clear fluid'],
            ['value' => 'Changes in the skin of the breast or nipple, such as dimpling or redness'],
        ],
                'causes' => [
            ['value' => 'Alcohol consumption'],
            ['value' => 'Hormone replacement therapy and hormonal imbalance'],
            ['value' => 'Female gender and increasing age'],
            ['value' => 'Tobacco use and unhealthy lifestyle habits'],
            ['value' => 'Genetic mutations and family history of breast cancer'],
        ],
                'risks' => [
            ['value' => 'Spread of cancer to nearby lymph nodes or other organs'],
            ['value' => 'Chronic pain and physical discomfort'],
            ['value' => 'Emotional stress, anxiety, and depression'],
            ['value' => 'Treatment-related complications affecting heart, skin, or immunity'],
            ['value' => 'Increased risk of cancer recurrence or secondary cancers'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Chemotherapy'],
            ['value' => 'Radiation therapy, including intraoperative radiation therapy (IORT)'],
            ['value' => 'Hormone therapy, including selective estrogen receptor modulator (SERM) therapy'],
            ['value' => 'Surgical treatment such as lumpectomy or mastectomy'],
            ['value' => 'Targeted therapy and immunotherapy when indicated'],
        ],
                'recovery' => 'The long-term outlook for breast cancer depends on the stage of cancer, tumor type, early diagnosis, and response to treatment. Advances in cancer care have significantly improved survival rates and quality of life for many individuals. Regular screening, early detection, multidisciplinary treatment, and long-term follow-up care are essential for improving recovery outcomes and reducing the risk of recurrence. __________________________ 2. Lung Cancer',
                'sort_order' => 1,
                'is_active' => true,
                'meta_title' => 'Breast Cancer',
                'meta_description' => 'Breast cancer occurs when abnormal cells in the breast grow uncontrollably and form tumors. It is one of the most common cancers affecting women, although it ca',
                'meta_keywords' => '',
            ]
        );
    }
}
