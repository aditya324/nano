<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class VaricoseVeinProceduresEVLTSclerotherapyStrippingSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Varicose Vein Procedures (EVLT, Sclerotherapy, Stripping)')],
            [
                'title' => 'Varicose Vein Procedures (EVLT, Sclerotherapy, Stripping)',
                'slug' => Str::slug('Varicose Vein Procedures (EVLT, Sclerotherapy, Stripping)'),
                'introduction' => 'Varicose vein procedures are treatments performed to manage enlarged, twisted, and painful leg veins caused by valve dysfunction and poor blood circulation. Modern minimally invasive treatments improve both symptoms and cosmetic appearance.',
                'what_is' => 'Treatment options include: Endovenous Laser Therapy (EVLT) Sclerotherapy Vein stripping surgery These procedures help: Improve blood flow Reduce swelling and pain Prevent ulcers and skin changes Improve cosmetic appearance Minimally invasive techniques usually allow faster recovery with less discomfort.',
                'symptoms' => [
            ['value' => 'Swollen visible leg veins'],
            ['value' => 'Leg heaviness or aching'],
            ['value' => 'Swelling around ankles'],
            ['value' => 'Skin discoloration or ulcers'],
            ['value' => 'Night cramps or burning sensation'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Bruising or bleeding'],
            ['value' => 'Temporary swelling or discomfort'],
            ['value' => 'Skin discoloration'],
            ['value' => 'Blood clot formation'],
            ['value' => 'Recurrence of varicose veins'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Wear compression stockings regularly'],
            ['value' => 'Walk daily to improve circulation'],
            ['value' => 'Avoid prolonged standing initially'],
            ['value' => 'Maintain healthy body weight'],
            ['value' => 'Attend follow-up vascular evaluations'],
        ],
                'surgery_risks' => [
            ['value' => 'Bruising or bleeding'],
            ['value' => 'Temporary swelling or discomfort'],
            ['value' => 'Skin discoloration'],
            ['value' => 'Blood clot formation'],
            ['value' => 'Recurrence of varicose veins'],
        ],
                'long_term_outlook' => 'Most patients experience significant relief from pain and swelling, improved circulation, and better cosmetic appearance after treatment.',
                'conclusion' => '',
                'seo_title' => 'Varicose Vein Procedures (EVLT, Sclerotherapy, Stripping)',
                'seo_description' => 'Varicose vein procedures are treatments performed to manage enlarged, twisted, and painful leg veins caused by valve dysfunction and poor blood circulation. Modern minimally invasive treatments improve both symptoms and cosmetic appearance.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
