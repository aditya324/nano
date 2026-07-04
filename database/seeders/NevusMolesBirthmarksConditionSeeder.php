<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class NevusMolesBirthmarksConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Nevus (Moles / Birthmarks)')],
            [
                'name' => 'Nevus (Moles / Birthmarks)',
                'slug' => Str::slug('Nevus (Moles / Birthmarks)'),
                'h1' => 'Nevus (Moles / Birthmarks)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'A nevus is a common skin growth commonly known as a mole or birthmark. Nevi develop due to clusters of pigment-producing cells called melanocytes and may appear at birth or develop over time. Most nevi are harmless, but some may change in appearance and require medical evaluation to rule out skin cancer.',
                'about_more' => '',
                'overview' => 'A nevus is a common skin growth commonly known as a mole or birthmark. Nevi develop due to clusters of pigment-producing cells called melanocytes and may appear at birth or develop over time. Most nevi are harmless, but some may change in appearance and require medical evaluation to rule out skin cancer.',
                'symptoms' => [
            ['value' => 'Brown, black, pink, or skin-colored spots or growths'],
            ['value' => 'Flat or raised skin lesions'],
            ['value' => 'Smooth or rough surface texture'],
            ['value' => 'Hair growth from some moles'],
            ['value' => 'Changes in size, shape, or color in atypical cases'],
        ],
                'causes' => [
            ['value' => 'Genetic or hereditary factors'],
            ['value' => 'Increased melanocyte activity in the skin'],
            ['value' => 'Sun exposure and ultraviolet (UV) radiation'],
            ['value' => 'Hormonal changes during puberty or pregnancy'],
            ['value' => 'Congenital skin changes present at birth'],
        ],
                'risks' => [
            ['value' => 'Cosmetic concerns or irritation from friction'],
            ['value' => 'Atypical moles increasing melanoma risk'],
            ['value' => 'Changes in color, border, or size requiring evaluation'],
            ['value' => 'Emotional stress related to appearance'],
            ['value' => 'Rare progression to skin cancer in abnormal lesions'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Regular skin examinations and mole monitoring'],
            ['value' => 'Surgical removal of suspicious or irritated nevi'],
            ['value' => 'Dermoscopic evaluation and biopsy when required'],
            ['value' => 'Laser treatment for cosmetic concerns in selected cases'],
            ['value' => 'Sun protection and preventive skin care measures'],
        ],
                'recovery' => 'The long-term outlook for nevi is generally very good, as most moles and birthmarks are harmless. Regular dermatologic examinations and monitoring of changing lesions are important for early detection of abnormal skin changes. Consistent sun protection and proper skin care help maintain long-term skin health and reduce skin cancer risk. ________________________________ 22. Wound Healing Complications / Chronic Ulcers Wound Healing Complications / Chronic Ulcers',
                'sort_order' => 31,
                'is_active' => true,
                'meta_title' => 'Nevus (Moles / Birthmarks)',
                'meta_description' => 'A nevus is a common skin growth commonly known as a mole or birthmark. Nevi develop due to clusters of pigment-producing cells called melanocytes and may appear',
                'meta_keywords' => '',
            ]
        );
    }
}
