<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PhototherapyUnitsUVBPUVASeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Phototherapy Units (UVB & PUVA)')],
            [
                'title' => 'Phototherapy Units (UVB & PUVA)',
                'slug' => Str::slug('Phototherapy Units (UVB & PUVA)'),
                'introduction' => 'Phototherapy units are specialized dermatology devices that use controlled ultraviolet (UV) light exposure to treat various chronic skin disorders. These systems help reduce inflammation, slow abnormal skin cell growth, and improve skin healing in patients with inflammatory, autoimmune, and pigmentary skin conditions.',
                'what_is' => 'UVB phototherapy units use narrowband or broadband ultraviolet B light to treat conditions such as psoriasis, eczema, vitiligo, and chronic itching disorders. PUVA therapy combines ultraviolet A (UVA) light with a photosensitizing medication called psoralen for the treatment of more severe or resistant skin diseases. Phototherapy units are commonly used in dermatology clinics and hospitals under specialist supervision to ensure safe and effective treatment.',
                'symptoms' => [
            ['value' => 'Chronic itching or skin irritation'],
            ['value' => 'Thick, scaly skin plaques'],
            ['value' => 'Persistent inflammatory skin rashes'],
            ['value' => 'Pigmentation disorders such as vitiligo'],
            ['value' => 'Skin conditions not responding to topical therapy'],
        ],
                'causes' => [
            ['value' => 'Autoimmune skin disorders'],
            ['value' => 'Chronic inflammatory skin diseases'],
            ['value' => 'Immune system dysfunction affecting the skin'],
            ['value' => 'Pigmentary abnormalities'],
            ['value' => 'Long-standing dermatologic conditions requiring advanced therapy'],
        ],
                'condition_risks' => [
            ['value' => 'Temporary redness, dryness, or skin irritation'],
            ['value' => 'Increased sensitivity to sunlight'],
            ['value' => 'Tanning or pigmentation changes'],
            ['value' => 'Premature skin aging with prolonged UV exposure'],
            ['value' => 'Increased long-term risk of skin cancer with excessive UV exposure'],
            ['value' => 'Treatment Options'],
            ['value' => 'Phototherapy units are used in medically supervised treatment programs for chronic and treatment-resistant skin conditions. Depending on the patient’s diagnosis and severity of disease, dermatologists may recommend UVB therapy, PUVA therapy, or combination therapy with topical or systemic medications. Treatment sessions are carefully monitored to maximize effectiveness while minimizing side effects and complications.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular moisturization and gentle skin care'],
            ['value' => 'Use of sunscreen and sun protection measures'],
            ['value' => 'Monitoring for redness, burns, or irritation after sessions'],
            ['value' => 'Adherence to scheduled treatment and follow-up visits'],
            ['value' => 'Long-term dermatologic monitoring for skin safety and treatment response'],
        ],
                'surgery_risks' => [
            ['value' => 'Temporary redness, dryness, or skin irritation'],
            ['value' => 'Increased sensitivity to sunlight'],
            ['value' => 'Tanning or pigmentation changes'],
            ['value' => 'Premature skin aging with prolonged UV exposure'],
            ['value' => 'Increased long-term risk of skin cancer with excessive UV exposure'],
            ['value' => 'Treatment Options'],
            ['value' => 'Phototherapy units are used in medically supervised treatment programs for chronic and treatment-resistant skin conditions. Depending on the patient’s diagnosis and severity of disease, dermatologists may recommend UVB therapy, PUVA therapy, or combination therapy with topical or systemic medications. Treatment sessions are carefully monitored to maximize effectiveness while minimizing side effects and complications.'],
        ],
                'long_term_outlook' => 'The long-term outlook with phototherapy treatment is generally very positive for many chronic skin conditions when therapy is properly supervised. Phototherapy can significantly improve skin symptoms, reduce inflammation, and enhance quality of life. Ongoing dermatologic care, controlled UV exposure, and preventive skin monitoring are important for maintaining long-term treatment success and skin health.',
                'conclusion' => '',
                'seo_title' => 'Phototherapy Units (UVB & PUVA)',
                'seo_description' => 'Phototherapy units are specialized dermatology devices that use controlled ultraviolet (UV) light exposure to treat various chronic skin disorders. These systems help reduce inflammation, slow abnormal skin cell growth, and improve skin healing in patients with inflammatory, autoimmune, and pigmentary skin conditions.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
