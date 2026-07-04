<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DiabeticFootCareRevascularizationSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Diabetic Foot Care & Revascularization')],
            [
                'title' => 'Diabetic Foot Care & Revascularization',
                'slug' => Str::slug('Diabetic Foot Care & Revascularization'),
                'introduction' => 'Diabetic foot care and revascularization involve comprehensive management of diabetic foot ulcers, infections, and poor blood circulation to prevent amputation and improve healing.',
                'what_is' => 'Treatment includes: Wound care and debridement Infection control Blood sugar management Pressure offloading Vascular procedures to improve circulation Revascularization may involve: Angioplasty Stenting Bypass surgery Early multidisciplinary treatment is essential to preserve limb function and prevent severe complications.',
                'symptoms' => [
            ['value' => 'Foot ulcers or wounds'],
            ['value' => 'Poor wound healing'],
            ['value' => 'Foot swelling or redness'],
            ['value' => 'Reduced blood circulation'],
            ['value' => 'Numbness or burning sensation'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Severe infection or gangrene'],
            ['value' => 'Bone infection (osteomyelitis)'],
            ['value' => 'Limb amputation'],
            ['value' => 'Recurrence of ulcers'],
            ['value' => 'Vascular complications'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Maintain strict blood sugar control'],
            ['value' => 'Inspect feet daily for injuries'],
            ['value' => 'Wear protective diabetic footwear'],
            ['value' => 'Attend regular wound care appointments'],
            ['value' => 'Stop smoking completely'],
        ],
                'surgery_risks' => [
            ['value' => 'Severe infection or gangrene'],
            ['value' => 'Bone infection (osteomyelitis)'],
            ['value' => 'Limb amputation'],
            ['value' => 'Recurrence of ulcers'],
            ['value' => 'Vascular complications'],
        ],
                'long_term_outlook' => 'Comprehensive diabetic foot care and vascular treatment improve healing, reduce amputation risk, and preserve long-term mobility and quality of life.',
                'conclusion' => '',
                'seo_title' => 'Diabetic Foot Care & Revascularization',
                'seo_description' => 'Diabetic foot care and revascularization involve comprehensive management of diabetic foot ulcers, infections, and poor blood circulation to prevent amputation and improve healing.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
