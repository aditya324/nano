<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SentinelLymphNodeBiopsySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Sentinel Lymph Node Biopsy')],
            [
                'title' => 'Sentinel Lymph Node Biopsy',
                'slug' => Str::slug('Sentinel Lymph Node Biopsy'),
                'introduction' => 'Sentinel lymph node biopsy is a specialized surgical procedure used to determine whether cancer has spread to nearby lymph nodes, especially in breast cancer and melanoma. The sentinel node is the first lymph node that receives drainage from the tumor area.',
                'what_is' => 'During the procedure: Special dye or radioactive tracer is injected near the tumor The first draining lymph node is identified The node is surgically removed and examined for cancer cells This procedure helps: Stage cancer accurately Reduce unnecessary extensive lymph node removal Lower risk of lymphedema Sentinel node biopsy is minimally invasive compared to complete lymph node dissection.',
                'symptoms' => [
            ['value' => 'Breast lump or diagnosed cancer'],
            ['value' => 'Suspicious skin lesions or melanoma'],
            ['value' => 'Enlarged lymph nodes'],
            ['value' => 'Abnormal imaging findings'],
            ['value' => 'Early-stage cancer requiring staging'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Bleeding or infection'],
            ['value' => 'Temporary arm swelling'],
            ['value' => 'Allergic reaction to dye'],
            ['value' => 'Numbness near surgical site'],
            ['value' => 'Rare lymphedema'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Keep the surgical site clean and dry'],
            ['value' => 'Perform arm exercises if advised'],
            ['value' => 'Avoid heavy lifting temporarily'],
            ['value' => 'Attend pathology review appointments'],
            ['value' => 'Monitor for swelling or redness'],
        ],
                'surgery_risks' => [
            ['value' => 'Bleeding or infection'],
            ['value' => 'Temporary arm swelling'],
            ['value' => 'Allergic reaction to dye'],
            ['value' => 'Numbness near surgical site'],
            ['value' => 'Rare lymphedema'],
        ],
                'long_term_outlook' => 'Sentinel lymph node biopsy provides accurate cancer staging with fewer complications and helps guide appropriate long-term cancer treatment planning.',
                'conclusion' => '',
                'seo_title' => 'Sentinel Lymph Node Biopsy',
                'seo_description' => 'Sentinel lymph node biopsy is a specialized surgical procedure used to determine whether cancer has spread to nearby lymph nodes, especially in breast cancer and melanoma. The sentinel node is the first lymph node that receives drainage from the tumor area.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
