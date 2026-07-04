<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class HeadlightLEDExaminationLightSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Headlight / LED Examination Light')],
            [
                'title' => 'Headlight / LED Examination Light',
                'slug' => Str::slug('Headlight / LED Examination Light'),
                'introduction' => 'A Headlight or LED Examination Light is an essential ENT diagnostic tool that provides focused illumination for examining deep structures of the ear, nose, throat, and oral cavity. It allows ENT specialists to visualize small anatomical areas clearly during clinical examinations and procedures. Bright and precise lighting improves diagnostic accuracy and procedural safety.',
                'what_is' => 'The device may be worn on the head or mounted near the examination chair. Advanced LED systems provide adjustable brightness and shadow-free illumination. The equipment is commonly used for: Ear examination Nasal evaluation Throat assessment Minor ENT procedures Foreign body removal Modern LED lights are energy-efficient, lightweight, and provide excellent visualization during outpatient and surgical ENT procedures.',
                'symptoms' => [
            ['value' => 'Ear infections or discharge'],
            ['value' => 'Nasal blockage or bleeding'],
            ['value' => 'Throat pain or ulcers'],
            ['value' => 'Voice changes'],
            ['value' => 'Foreign body suspicion in ENT regions'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Temporary light sensitivity'],
            ['value' => 'Mild discomfort during prolonged examination'],
            ['value' => 'Eye strain in sensitive patients'],
            ['value' => 'Heat discomfort with older light systems'],
            ['value' => 'Rare technical malfunction during procedures'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Follow ENT treatment recommendations carefully'],
            ['value' => 'Maintain proper follow-up visits'],
            ['value' => 'Avoid inserting objects into the ear or nose'],
            ['value' => 'Use medications as prescribed'],
            ['value' => 'Seek medical review if symptoms persist'],
        ],
                'surgery_risks' => [
            ['value' => 'Temporary light sensitivity'],
            ['value' => 'Mild discomfort during prolonged examination'],
            ['value' => 'Eye strain in sensitive patients'],
            ['value' => 'Heat discomfort with older light systems'],
            ['value' => 'Rare technical malfunction during procedures'],
        ],
                'long_term_outlook' => 'High-quality examination lighting supports early diagnosis and safe ENT care. Improved visualization contributes to better long-term treatment outcomes.',
                'conclusion' => '',
                'seo_title' => 'Headlight / LED Examination Light',
                'seo_description' => 'A Headlight or LED Examination Light is an essential ENT diagnostic tool that provides focused illumination for examining deep structures of the ear, nose, throat, and oral cavity. It allows ENT specialists to visualize small anatomical areas clearly during clinical examinations and procedures. Bright and precise lighting improves diagnostic accuracy and procedural safety.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
