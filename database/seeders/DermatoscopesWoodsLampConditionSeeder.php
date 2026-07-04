<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DermatoscopesWoodsLampConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Dermatoscopes / Wood’s Lamp')],
            [
                'name' => 'Dermatoscopes / Wood’s Lamp',
                'slug' => Str::slug('Dermatoscopes / Wood’s Lamp'),
                'h1' => 'Dermatoscopes / Wood’s Lamp',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Dermatoscopes and Wood’s lamps are specialized dermatologic diagnostic tools used to examine skin, hair, nails, and pigment-related conditions in greater detail. These devices help dermatologists evaluate skin lesions, detect infections, assess pigmentation disorders, and support early diagnosis of various dermatologic conditions.',
                'about_more' => '',
                'overview' => 'A dermatoscope is a handheld imaging device that magnifies and illuminates the skin, allowing detailed visualization of moles, skin cancers, inflammatory conditions, and hair or nail disorders. A Wood’s lamp uses ultraviolet (UV) light to detect fungal infections, pigmentary disorders, bacterial infections, and changes in skin pigmentation that may not be visible under normal lighting. These tools are commonly used in dermatology clinics for noninvasive examination and diagnostic evaluation.',
                'symptoms' => [
            ['value' => 'Suspicious moles or changing skin lesions'],
            ['value' => 'Pigmentation disorders or uneven skin tone'],
            ['value' => 'Hair and scalp abnormalities'],
            ['value' => 'Fungal or bacterial skin infections'],
            ['value' => 'Persistent skin rashes or unexplained skin changes'],
            ['value' => 'Common Causes'],
            ['value' => 'Excessive sun exposure and skin damage'],
            ['value' => 'Fungal or bacterial skin infections'],
            ['value' => 'Autoimmune and inflammatory skin disorders'],
            ['value' => 'Pigmentation abnormalities and melanocyte disorders'],
            ['value' => 'Genetic or chronic dermatologic conditions'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Minimal discomfort during examination'],
            ['value' => 'Temporary sensitivity to bright light in some individuals'],
            ['value' => 'Rare skin irritation in highly sensitive skin'],
            ['value' => 'Need for additional testing or biopsy if abnormalities are detected'],
            ['value' => 'False-positive or inconclusive findings requiring further evaluation'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Treatment depends on the findings identified during dermatoscopic or Wood’s lamp examination. Management may include topical or oral medications, antifungal therapy, biopsy procedures, laser treatments, skin cancer management, or long-term dermatologic monitoring. Early diagnosis through these diagnostic tools helps guide accurate treatment planning and improves overall skin health outcomes.'],
            ['value' => 'Follow-up dermatologic evaluation if abnormalities are detected'],
            ['value' => 'Additional skin testing or biopsy when required'],
            ['value' => 'Monitoring of suspicious lesions or pigment changes'],
            ['value' => 'Proper skin care and sun protection measures'],
            ['value' => 'Regular skin examinations for long-term monitoring'],
        ],
                'recovery' => 'The long-term outlook with dermatoscopic and Wood’s lamp evaluation is highly positive because these diagnostic tools support early detection and accurate assessment of many skin conditions. Early diagnosis and regular dermatologic monitoring can significantly improve treatment outcomes, support preventive care, and maintain long-term skin health. ____________________________ 122. Cryotherapy Equipment Cryotherapy Equipment Equipment',
                'sort_order' => 1,
                'is_active' => true,
                'meta_title' => 'Dermatoscopes / Wood’s Lamp',
                'meta_description' => 'Dermatoscopes and Wood’s lamps are specialized dermatologic diagnostic tools used to examine skin, hair, nails, and pigment-related conditions in greater detail',
                'meta_keywords' => '',
            ]
        );
    }
}
