<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class VaricoseVeinSurgeryHighLigationStrippingPhlebectomySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Varicose Vein Surgery (High Ligation, Stripping, Phlebectomy)')],
            [
                'title' => 'Varicose Vein Surgery (High Ligation, Stripping, Phlebectomy)',
                'slug' => Str::slug('Varicose Vein Surgery (High Ligation, Stripping, Phlebectomy)'),
                'introduction' => 'Varicose vein surgery removes or closes abnormal enlarged veins to improve circulation and reduce symptoms.',
                'what_is' => 'Surgical treatment is recommended when varicose veins cause pain, swelling, skin changes, ulcers, or cosmetic concerns.',
                'symptoms' => [
            ['value' => 'Enlarged twisted veins'],
            ['value' => 'Leg heaviness'],
            ['value' => 'Swelling'],
            ['value' => 'Pain or aching'],
            ['value' => 'Skin discoloration'],
            ['value' => 'Venous ulcers'],
        ],
                'causes' => [
            ['value' => 'Weak venous valves'],
            ['value' => 'Chronic venous insufficiency'],
            ['value' => 'Prolonged standing'],
            ['value' => 'Obesity'],
            ['value' => 'Pregnancy'],
            ['value' => 'Family history'],
        ],
                'condition_risks' => [
            ['value' => 'Bleeding'],
            ['value' => 'Infection'],
            ['value' => 'Recurrence of varicose veins'],
            ['value' => 'Bruising'],
            ['value' => 'Nerve irritation'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => 'Procedures may include high ligation of the affected vein, stripping of diseased veins, and phlebectomy for smaller varicosities. These procedures improve venous return and reduce symptoms.',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Compression stockings'],
            ['value' => 'Walking exercises'],
            ['value' => 'Leg elevation'],
            ['value' => 'Avoid prolonged standing'],
            ['value' => 'Follow-up vascular review'],
        ],
                'surgery_risks' => [
            ['value' => 'Bleeding'],
            ['value' => 'Infection'],
            ['value' => 'Recurrence of varicose veins'],
            ['value' => 'Bruising'],
            ['value' => 'Nerve irritation'],
        ],
                'long_term_outlook' => 'Most patients experience symptom relief, improved appearance, and better leg circulation after treatment.',
                'conclusion' => '',
                'seo_title' => 'Varicose Vein Surgery (High Ligation, Stripping, Phlebectomy)',
                'seo_description' => 'Varicose vein surgery removes or closes abnormal enlarged veins to improve circulation and reduce symptoms.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
