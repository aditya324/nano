<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BreastCancerSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Breast Cancer')],
            [
                'title' => 'Breast Cancer',
                'slug' => Str::slug('Breast Cancer'),
                'introduction' => '',
                'what_is' => 'Breast cancer occurs when abnormal cells in the breast grow uncontrollably and form tumors. It is one of the most common cancers affecting women, although it can also occur in men. Breast cancer commonly affects women over the age of 50, but younger individuals may also develop the condition. Early detection and timely treatment significantly improve treatment outcomes and survival rates. Common Symptoms A change in the size, shape, or appearance of the breast A lump or thickening in the breast or underarm area Persistent breast swelling or hardened area under the skin Nipple discharge, including blood-stained or clear fluid Changes in the skin of the breast or nipple, such as dimpling or redness Causes & Triggers Alcohol consumption Hormone replacement therapy and hormonal imbalance Female gender and increasing age Tobacco use and unhealthy lifestyle habits Genetic mutations and family history of breast cancer Risks & Complications Spread of cancer to nearby lymph nodes or other organs Chronic pain and physical discomfort Emotional stress, anxiety, and depression Treatment-related complications affecting heart, skin, or immunity Increased risk of cancer recurrence or secondary cancers Treatment Options Chemotherapy Radiation therapy, including intraoperative radiation therapy (IORT) Hormone therapy, including selective estrogen receptor modulator (SERM) therapy Surgical treatment such as lumpectomy or mastectomy Targeted therapy and immunotherapy when indicated Recovery & Outlook The long-term outlook for breast cancer depends on the stage of cancer, tumor type, early diagnosis, and response to treatment. Advances in cancer care have significantly improved survival rates and quality of life for many individuals. Regular screening, early detection, multidisciplinary treatment, and long-term follow-up care are essential for improving recovery outcomes and reducing the risk of recurrence.',
                'symptoms' => [],
                'causes' => [],
                'condition_risks' => [],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [],
                'surgery_risks' => [],
                'long_term_outlook' => '',
                'conclusion' => '',
                'seo_title' => 'Breast Cancer',
                'seo_description' => '',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
