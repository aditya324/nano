<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ManagementofChronicVenousUlcersDebridementSkinGraftsCompressionTherapySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Management of Chronic Venous Ulcers (Debridement, Skin Grafts, Compression Therapy)')],
            [
                'title' => 'Management of Chronic Venous Ulcers (Debridement, Skin Grafts, Compression Therapy)',
                'slug' => Str::slug('Management of Chronic Venous Ulcers (Debridement, Skin Grafts, Compression Therapy)'),
                'introduction' => 'Management of chronic venous ulcers focuses on healing long-standing wounds caused by poor venous circulation.',
                'what_is' => 'These ulcers commonly occur around the ankles and may persist for months without proper vascular and wound care.',
                'symptoms' => [
            ['value' => 'Non-healing leg ulcer'],
            ['value' => 'Swelling'],
            ['value' => 'Skin discoloration'],
            ['value' => 'Fluid discharge'],
            ['value' => 'Pain or heaviness'],
        ],
                'causes' => [
            ['value' => 'Chronic venous insufficiency'],
            ['value' => 'Varicose veins'],
            ['value' => 'Previous DVT'],
            ['value' => 'Obesity'],
            ['value' => 'Reduced mobility'],
            ['value' => 'Poor circulation'],
        ],
                'condition_risks' => [
            ['value' => 'Recurrent infection'],
            ['value' => 'Cellulitis'],
            ['value' => 'Chronic pain'],
            ['value' => 'Delayed healing'],
            ['value' => 'Reduced mobility'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => 'Treatment may include wound debridement, advanced dressings, compression therapy, antibiotics for infection, skin grafting, and correction of underlying venous disease.',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Compression therapy'],
            ['value' => 'Wound dressing changes'],
            ['value' => 'Leg elevation'],
            ['value' => 'Regular vascular assessment'],
            ['value' => 'Skin care maintenance'],
        ],
                'surgery_risks' => [
            ['value' => 'Recurrent infection'],
            ['value' => 'Cellulitis'],
            ['value' => 'Chronic pain'],
            ['value' => 'Delayed healing'],
            ['value' => 'Reduced mobility'],
        ],
                'long_term_outlook' => 'Proper wound and vascular management significantly improve healing and reduce ulcer recurrence.',
                'conclusion' => '',
                'seo_title' => 'Management of Chronic Venous Ulcers (Debridement, Skin Grafts, Compression Therapy)',
                'seo_description' => 'Management of chronic venous ulcers focuses on healing long-standing wounds caused by poor venous circulation.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
