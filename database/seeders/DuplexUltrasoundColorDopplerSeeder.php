<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DuplexUltrasoundColorDopplerSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Duplex Ultrasound / Color Doppler')],
            [
                'title' => 'Duplex Ultrasound / Color Doppler',
                'slug' => Str::slug('Duplex Ultrasound / Color Doppler'),
                'introduction' => 'Duplex ultrasound and color Doppler are non-invasive imaging techniques used to evaluate blood flow in arteries and veins.',
                'what_is' => 'These tests combine traditional ultrasound imaging with Doppler technology to assess circulation, detect blockages, blood clots, aneurysms, and venous insufficiency.',
                'symptoms' => [],
                'causes' => [
            ['value' => 'Peripheral arterial disease assessment'],
            ['value' => 'Deep vein thrombosis detection'],
            ['value' => 'Varicose vein evaluation'],
            ['value' => 'Carotid artery screening'],
            ['value' => 'Graft surveillance after vascular surgery'],
            ['value' => 'Blood flow assessment in limbs'],
            ['value' => 'Treatments'],
            ['value' => 'These imaging techniques help vascular specialists diagnose circulation problems and guide treatments such as angioplasty, bypass surgery, anticoagulation therapy, compression therapy, and postoperative vascular monitoring.'],
            ['value' => 'Benefits'],
            ['value' => 'Non-invasive and painless'],
            ['value' => 'No radiation exposure'],
            ['value' => 'Real-time circulation assessment'],
            ['value' => 'Quick and safe procedure'],
            ['value' => 'Useful for postoperative follow-up'],
            ['value' => 'Risks / Limitations'],
            ['value' => 'Operator-dependent accuracy'],
            ['value' => 'Limited imaging in obese patients'],
            ['value' => 'Difficulty visualizing deep vessels'],
        ],
                'condition_risks' => [],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Usually no recovery time required'],
            ['value' => 'Continue medications as advised'],
            ['value' => 'Follow-up vascular consultation if abnormalities are detected'],
        ],
                'surgery_risks' => [],
                'long_term_outlook' => 'Regular Doppler surveillance helps detect vascular problems early and improves long-term vascular disease management.',
                'conclusion' => '',
                'seo_title' => 'Duplex Ultrasound / Color Doppler',
                'seo_description' => 'Duplex ultrasound and color Doppler are non-invasive imaging techniques used to evaluate blood flow in arteries and veins.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
