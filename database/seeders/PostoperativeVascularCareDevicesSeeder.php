<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostoperativeVascularCareDevicesSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Postoperative Vascular Care Devices')],
            [
                'title' => 'Postoperative Vascular Care Devices',
                'slug' => Str::slug('Postoperative Vascular Care Devices'),
                'introduction' => 'Postoperative vascular care devices support patient recovery after vascular surgery and endovascular procedures.',
                'what_is' => 'These devices help monitor circulation, prevent complications, and improve wound healing during recovery.',
                'symptoms' => [],
                'causes' => [
            ['value' => 'Recovery after bypass surgery'],
            ['value' => 'Post-angioplasty monitoring'],
            ['value' => 'DVT prevention'],
            ['value' => 'Wound healing support'],
            ['value' => 'ICU vascular monitoring'],
            ['value' => 'Treatments'],
            ['value' => 'These devices assist in postoperative monitoring, circulation support, compression therapy, wound management, rehabilitation, and prevention of vascular complications after surgery.'],
            ['value' => 'Benefits'],
            ['value' => 'Improved postoperative safety'],
            ['value' => 'Better circulation monitoring'],
            ['value' => 'Reduced complication risk'],
            ['value' => 'Enhanced wound healing'],
            ['value' => 'Risks / Limitations'],
            ['value' => 'Device malfunction'],
            ['value' => 'Skin irritation'],
            ['value' => 'Need for trained supervision'],
        ],
                'condition_risks' => [],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular monitoring'],
            ['value' => 'Proper device maintenance'],
            ['value' => 'Infection prevention'],
            ['value' => 'Rehabilitation support'],
        ],
                'surgery_risks' => [],
                'long_term_outlook' => 'Comprehensive postoperative vascular care improves healing, functional recovery, and long-term vascular health outcomes.',
                'conclusion' => '',
                'seo_title' => 'Postoperative Vascular Care Devices',
                'seo_description' => 'Postoperative vascular care devices support patient recovery after vascular surgery and endovascular procedures.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
