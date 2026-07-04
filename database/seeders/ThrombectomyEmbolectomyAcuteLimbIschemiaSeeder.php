<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ThrombectomyEmbolectomyAcuteLimbIschemiaSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Thrombectomy / Embolectomy (Acute Limb Ischemia)')],
            [
                'title' => 'Thrombectomy / Embolectomy (Acute Limb Ischemia)',
                'slug' => Str::slug('Thrombectomy / Embolectomy (Acute Limb Ischemia)'),
                'introduction' => 'Thrombectomy or embolectomy removes blood clots blocking arteries during acute limb ischemia.',
                'what_is' => 'This emergency vascular procedure restores circulation rapidly and prevents permanent tissue damage.',
                'symptoms' => [
            ['value' => 'Sudden severe limb pain'],
            ['value' => 'Pale limb'],
            ['value' => 'Cold extremity'],
            ['value' => 'Loss of pulses'],
            ['value' => 'Numbness or paralysis'],
        ],
                'causes' => [
            ['value' => 'Arterial embolism'],
            ['value' => 'Blood clot formation'],
            ['value' => 'Atrial fibrillation'],
            ['value' => 'Aneurysm complications'],
            ['value' => 'Severe atherosclerosis'],
        ],
                'condition_risks' => [
            ['value' => 'Recurrent clotting'],
            ['value' => 'Reperfusion injury'],
            ['value' => 'Limb loss'],
            ['value' => 'Kidney complications'],
            ['value' => 'Bleeding'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => 'Treatment involves catheter-based or open surgical clot removal, often combined with anticoagulation or vascular reconstruction procedures.',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Intensive circulation monitoring'],
            ['value' => 'Anticoagulation therapy'],
            ['value' => 'Pain management'],
            ['value' => 'Physiotherapy'],
            ['value' => 'Vascular follow-up'],
        ],
                'surgery_risks' => [
            ['value' => 'Recurrent clotting'],
            ['value' => 'Reperfusion injury'],
            ['value' => 'Limb loss'],
            ['value' => 'Kidney complications'],
            ['value' => 'Bleeding'],
        ],
                'long_term_outlook' => 'Rapid clot removal greatly improves limb salvage and functional recovery after acute ischemia.',
                'conclusion' => '',
                'seo_title' => 'Thrombectomy / Embolectomy (Acute Limb Ischemia)',
                'seo_description' => 'Thrombectomy or embolectomy removes blood clots blocking arteries during acute limb ischemia.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
