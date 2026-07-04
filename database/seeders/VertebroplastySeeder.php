<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class VertebroplastySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Vertebroplasty')],
            [
                'title' => 'Vertebroplasty',
                'slug' => Str::slug('Vertebroplasty'),
                'introduction' => 'Vertebroplasty is a minimally invasive spinal procedure in which medical bone cement is injected into a weakened or fractured vertebra to stabilize the spine and reduce pain. The procedure is commonly used for osteoporotic compression fractures and certain spinal tumors. It provides rapid pain relief and improves mobility.',
                'what_is' => 'The procedure involves: Imaging-guided needle placement Injection of bone cement into the vertebra Stabilization of fractured spinal bone Pain reduction and structural support Vertebroplasty is commonly performed for: Osteoporotic spinal fractures Vertebral compression fractures Painful spinal lesions Certain metastatic spinal tumors The procedure is usually performed under local or general anesthesia with fluoroscopic guidance.',
                'symptoms' => [
            ['value' => 'Severe back pain'],
            ['value' => 'Pain worsening with movement'],
            ['value' => 'Reduced mobility'],
            ['value' => 'Spinal tenderness'],
            ['value' => 'Difficulty standing or walking'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Cement leakage'],
            ['value' => 'Infection'],
            ['value' => 'Bleeding'],
            ['value' => 'Nerve irritation'],
            ['value' => 'Adjacent vertebral fractures'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Avoid strenuous activity temporarily'],
            ['value' => 'Attend follow-up spine evaluations'],
            ['value' => 'Continue osteoporosis treatment if prescribed'],
            ['value' => 'Maintain safe posture practices'],
            ['value' => 'Report worsening pain immediately'],
        ],
                'surgery_risks' => [
            ['value' => 'Cement leakage'],
            ['value' => 'Infection'],
            ['value' => 'Bleeding'],
            ['value' => 'Nerve irritation'],
            ['value' => 'Adjacent vertebral fractures'],
        ],
                'long_term_outlook' => 'Vertebroplasty effectively improves spinal stability and pain relief in many patients. Long-term spinal health improves with osteoporosis management and rehabilitation.',
                'conclusion' => '',
                'seo_title' => 'Vertebroplasty',
                'seo_description' => 'Vertebroplasty is a minimally invasive spinal procedure in which medical bone cement is injected into a weakened or fractured vertebra to stabilize the spine and reduce pain. The procedure is commonly used for osteoporotic compression fractures and certain spinal tumors. It provides rapid pain relief and improves mobility.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
