<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AcneVulgarisConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Acne Vulgaris')],
            [
                'name' => 'Acne Vulgaris',
                'slug' => Str::slug('Acne Vulgaris'),
                'h1' => 'Acne Vulgaris',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Acne vulgaris is a common skin condition that occurs when hair follicles and sebaceous (oil) glands become blocked and inflamed. It can lead to the formation of blackheads, whiteheads, papules, pustules, nodules, or cysts on the face, chest, shoulders, and back. Acne commonly affects adolescents and young adults but may occur at any age.',
                'about_more' => '',
                'overview' => 'Acne vulgaris is a common skin condition that occurs when hair follicles and sebaceous (oil) glands become blocked and inflamed. It can lead to the formation of blackheads, whiteheads, papules, pustules, nodules, or cysts on the face, chest, shoulders, and back. Acne commonly affects adolescents and young adults but may occur at any age.',
                'symptoms' => [
            ['value' => 'Mild acne with blackheads and whiteheads'],
            ['value' => 'Moderate acne with inflamed papules and pustules'],
            ['value' => 'Severe acne with nodules or cysts'],
            ['value' => 'Oily skin and skin irritation'],
            ['value' => 'Acne scars or dark spots after healing'],
        ],
                'causes' => [
            ['value' => 'Hormonal changes during menstrual periods'],
            ['value' => 'Certain medications such as thyroid medications'],
            ['value' => 'Pregnancy-related hormonal fluctuations'],
            ['value' => 'Birth control pills or hormonal imbalance'],
            ['value' => 'Polycystic ovary syndrome (PCOS) and increased oil production'],
        ],
                'risks' => [
            ['value' => 'Permanent acne scarring or skin texture changes'],
            ['value' => 'Dark spots or post-inflammatory pigmentation'],
            ['value' => 'Skin infections or painful cyst formation'],
            ['value' => 'Emotional stress, anxiety, or reduced self-confidence'],
            ['value' => 'Recurrence of acne due to hormonal imbalance or triggers'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Topical medications and medicated skincare products'],
            ['value' => 'Oral antibiotics or hormonal therapy when required'],
            ['value' => 'Chemical peels, laser therapy, or acne scar treatments'],
            ['value' => 'Lifestyle modifications and skincare management'],
            ['value' => 'Dermatology follow-up and long-term skin monitoring'],
        ],
                'recovery' => 'The long-term outlook for acne vulgaris is generally positive with proper skincare, medical treatment, and trigger management. Early treatment can help reduce inflammation, prevent scarring, and improve skin appearance. Continuous dermatologic care, healthy lifestyle habits, and adherence to treatment plans are important for maintaining long-term skin health and preventing recurrence.” ____________________________ 2. Eczema / Atopic Dermatitis Atopic Dermatitis',
                'sort_order' => 1,
                'is_active' => true,
                'meta_title' => 'Acne Vulgaris',
                'meta_description' => 'Acne vulgaris is a common skin condition that occurs when hair follicles and sebaceous (oil) glands become blocked and inflamed. It can lead to the formation of',
                'meta_keywords' => '',
            ]
        );
    }
}
