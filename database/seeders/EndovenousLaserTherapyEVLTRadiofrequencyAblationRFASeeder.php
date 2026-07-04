<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EndovenousLaserTherapyEVLTRadiofrequencyAblationRFASeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Endovenous Laser Therapy (EVLT) / Radiofrequency Ablation (RFA)')],
            [
                'title' => 'Endovenous Laser Therapy (EVLT) / Radiofrequency Ablation (RFA)',
                'slug' => Str::slug('Endovenous Laser Therapy (EVLT) / Radiofrequency Ablation (RFA)'),
                'introduction' => 'EVLT and RFA are minimally invasive procedures used to treat varicose veins by closing abnormal veins using heat energy.',
                'what_is' => 'These procedures are commonly preferred over open surgery due to smaller incisions, less pain, and quicker recovery.',
                'symptoms' => [
            ['value' => 'Leg pain'],
            ['value' => 'Swollen veins'],
            ['value' => 'Heaviness in legs'],
            ['value' => 'Night cramps'],
            ['value' => 'Skin discoloration'],
        ],
                'causes' => [
            ['value' => 'Chronic venous insufficiency'],
            ['value' => 'Varicose veins'],
            ['value' => 'Venous valve failure'],
            ['value' => 'Prolonged standing'],
            ['value' => 'Obesity'],
        ],
                'condition_risks' => [
            ['value' => 'Minor burns'],
            ['value' => 'Bruising'],
            ['value' => 'Temporary nerve irritation'],
            ['value' => 'Blood clots'],
            ['value' => 'Vein recurrence'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => 'A catheter is inserted into the diseased vein under ultrasound guidance. Laser or radiofrequency energy heats and seals the vein, redirecting blood flow through healthy veins.',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Compression stockings'],
            ['value' => 'Early walking'],
            ['value' => 'Hydration'],
            ['value' => 'Avoid prolonged inactivity'],
            ['value' => 'Follow-up Doppler scan'],
        ],
                'surgery_risks' => [
            ['value' => 'Minor burns'],
            ['value' => 'Bruising'],
            ['value' => 'Temporary nerve irritation'],
            ['value' => 'Blood clots'],
            ['value' => 'Vein recurrence'],
        ],
                'long_term_outlook' => 'EVLT and RFA provide excellent long-term symptom control with faster recovery and minimal scarring.',
                'conclusion' => '',
                'seo_title' => 'Endovenous Laser Therapy (EVLT) / Radiofrequency Ablation (RFA)',
                'seo_description' => 'EVLT and RFA are minimally invasive procedures used to treat varicose veins by closing abnormal veins using heat energy.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
