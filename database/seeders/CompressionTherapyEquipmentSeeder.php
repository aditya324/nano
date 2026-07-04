<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CompressionTherapyEquipmentSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Compression Therapy Equipment')],
            [
                'title' => 'Compression Therapy Equipment',
                'slug' => Str::slug('Compression Therapy Equipment'),
                'introduction' => 'Compression therapy equipment helps improve venous and lymphatic circulation in the limbs.',
                'what_is' => 'Compression devices are widely used in venous insufficiency, varicose veins, lymphedema, and postoperative vascular care.',
                'symptoms' => [],
                'causes' => [
            ['value' => 'Chronic venous insufficiency'],
            ['value' => 'Venous ulcers'],
            ['value' => 'Lymphedema'],
            ['value' => 'DVT prevention'],
            ['value' => 'Swelling management'],
            ['value' => 'Treatments'],
            ['value' => 'Compression therapy supports treatment of venous ulcers, leg swelling, varicose veins, lymphatic disorders, postoperative edema, and prevention of blood clots.'],
            ['value' => 'Benefits'],
            ['value' => 'Reduces swelling'],
            ['value' => 'Improves venous return'],
            ['value' => 'Supports ulcer healing'],
            ['value' => 'Helps prevent clot formation'],
            ['value' => 'Risks / Limitations'],
            ['value' => 'Skin irritation'],
            ['value' => 'Discomfort if improperly fitted'],
            ['value' => 'Not suitable for severe arterial disease'],
        ],
                'condition_risks' => [],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Proper fitting and patient education'],
            ['value' => 'Skin monitoring'],
            ['value' => 'Regular replacement of compression garments'],
        ],
                'surgery_risks' => [],
                'long_term_outlook' => 'Consistent compression therapy improves circulation and reduces recurrence of venous complications.',
                'conclusion' => '',
                'seo_title' => 'Compression Therapy Equipment',
                'seo_description' => 'Compression therapy equipment helps improve venous and lymphatic circulation in the limbs.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
