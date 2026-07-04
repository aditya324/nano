<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PhototherapyUnitsConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Phototherapy Units')],
            [
                'name' => 'Phototherapy Units',
                'slug' => Str::slug('Phototherapy Units'),
                'h1' => 'Phototherapy Units',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Phototherapy units are specialized dermatology devices that use controlled ultraviolet (UV) light exposure to treat various chronic skin disorders. These systems help reduce inflammation, slow abnormal skin cell growth, and improve skin healing in patients with inflammatory, autoimmune, and pigmentary skin conditions.',
                'about_more' => '',
                'overview' => 'UVB phototherapy units use narrowband or broadband ultraviolet B light to treat conditions such as psoriasis, eczema, vitiligo, and chronic itching disorders. PUVA therapy combines ultraviolet A (UVA) light with a photosensitizing medication called psoralen for the treatment of more severe or resistant skin diseases. Phototherapy units are commonly used in dermatology clinics and hospitals under specialist supervision to ensure safe and effective treatment.',
                'symptoms' => [
            ['value' => 'Chronic itching or skin irritation'],
            ['value' => 'Thick, scaly skin plaques'],
            ['value' => 'Persistent inflammatory skin rashes'],
            ['value' => 'Pigmentation disorders such as vitiligo'],
            ['value' => 'Skin conditions not responding to topical therapy'],
            ['value' => 'Common Causes'],
            ['value' => 'Autoimmune skin disorders'],
            ['value' => 'Chronic inflammatory skin diseases'],
            ['value' => 'Immune system dysfunction affecting the skin'],
            ['value' => 'Pigmentary abnormalities'],
            ['value' => 'Long-standing dermatologic conditions requiring advanced therapy'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Temporary redness, dryness, or skin irritation'],
            ['value' => 'Increased sensitivity to sunlight'],
            ['value' => 'Tanning or pigmentation changes'],
            ['value' => 'Premature skin aging with prolonged UV exposure'],
            ['value' => 'Increased long-term risk of skin cancer with excessive UV exposure'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Phototherapy units are used in medically supervised treatment programs for chronic and treatment-resistant skin conditions. Depending on the patient’s diagnosis and severity of disease, dermatologists may recommend UVB therapy, PUVA therapy, or combination therapy with topical or systemic medications. Treatment sessions are carefully monitored to maximize effectiveness while minimizing side effects and complications.'],
            ['value' => 'Regular moisturization and gentle skin care'],
            ['value' => 'Use of sunscreen and sun protection measures'],
            ['value' => 'Monitoring for redness, burns, or irritation after sessions'],
            ['value' => 'Adherence to scheduled treatment and follow-up visits'],
            ['value' => 'Long-term dermatologic monitoring for skin safety and treatment response'],
        ],
                'recovery' => 'The long-term outlook with phototherapy treatment is generally very positive for many chronic skin conditions when therapy is properly supervised. Phototherapy can significantly improve skin symptoms, reduce inflammation, and enhance quality of life. Ongoing dermatologic care, controlled UV exposure, and preventive skin monitoring are important for maintaining long-term treatment success and skin health. _________________________ 125. Skin Biopsy Instruments Skin Biopsy Instruments Equipment',
                'sort_order' => 4,
                'is_active' => true,
                'meta_title' => 'Phototherapy Units',
                'meta_description' => 'Phototherapy units are specialized dermatology devices that use controlled ultraviolet (UV) light exposure to treat various chronic skin disorders. These system',
                'meta_keywords' => '',
            ]
        );
    }
}
