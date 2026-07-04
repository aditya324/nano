<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BreastLumpFibroadenomaConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Breast Lump / Fibroadenoma')],
            [
                'name' => 'Breast Lump / Fibroadenoma',
                'slug' => Str::slug('Breast Lump / Fibroadenoma'),
                'h1' => 'Breast Lump / Fibroadenoma',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'A breast lump is an abnormal swelling or mass in the breast tissue. Fibroadenoma is a common benign breast tumor usually seen in younger women and is generally noncancerous.',
                'about_more' => '',
                'overview' => 'A breast lump is an abnormal swelling or mass in the breast tissue. Fibroadenoma is a common benign breast tumor usually seen in younger women and is generally noncancerous.',
                'symptoms' => [
            ['value' => 'Painless movable breast lump'],
            ['value' => 'Mild breast discomfort'],
            ['value' => 'Change in breast shape or texture'],
            ['value' => 'Lump increasing in size gradually'],
            ['value' => 'Anxiety related to breast swelling'],
        ],
                'causes' => [
            ['value' => 'Hormonal changes'],
            ['value' => 'Benign breast tissue overgrowth'],
            ['value' => 'Fibrocystic breast changes'],
            ['value' => 'Family history of breast conditions'],
            ['value' => 'Rarely underlying malignancy'],
        ],
                'risks' => [
            ['value' => 'Persistent enlargement of the lump'],
            ['value' => 'Cosmetic concerns and anxiety'],
            ['value' => 'Rare difficulty distinguishing from cancer'],
            ['value' => 'Breast discomfort or tenderness'],
            ['value' => 'Need for repeated monitoring'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Clinical breast examination'],
            ['value' => 'Ultrasound or mammography'],
            ['value' => 'Fine needle aspiration or biopsy'],
            ['value' => 'Surgical removal if symptomatic'],
            ['value' => 'Regular follow-up monitoring'],
        ],
                'recovery' => 'Most fibroadenomas are harmless and manageable. Proper evaluation helps rule out malignancy and provides reassurance.',
                'sort_order' => 16,
                'is_active' => true,
                'meta_title' => 'Breast Lump / Fibroadenoma',
                'meta_description' => 'A breast lump is an abnormal swelling or mass in the breast tissue. Fibroadenoma is a common benign breast tumor usually seen in younger women and is generally ',
                'meta_keywords' => '',
            ]
        );
    }
}
