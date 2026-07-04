<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AlopeciaConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Alopecia')],
            [
                'name' => 'Alopecia',
                'slug' => Str::slug('Alopecia'),
                'h1' => 'Alopecia',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Alopecia is a condition that causes partial or complete hair loss on the scalp or other parts of the body. Hair loss may occur gradually or suddenly depending on the underlying cause. Alopecia can affect individuals of any age and may result from autoimmune conditions, genetic factors, hormonal changes, stress, nutritional deficiencies, or medical disorders.',
                'about_more' => '',
                'overview' => 'Alopecia is a condition that causes partial or complete hair loss on the scalp or other parts of the body. Hair loss may occur gradually or suddenly depending on the underlying cause. Alopecia can affect individuals of any age and may result from autoimmune conditions, genetic factors, hormonal changes, stress, nutritional deficiencies, or medical disorders.',
                'symptoms' => [
            ['value' => 'Patchy or widespread hair loss'],
            ['value' => 'Thinning of scalp hair or receding hairline'],
            ['value' => 'Excessive hair shedding during washing or brushing'],
            ['value' => 'Bald patches on the scalp, beard, or body'],
            ['value' => 'Changes in hair texture or reduced hair density'],
        ],
                'causes' => [
            ['value' => 'Autoimmune conditions affecting hair follicles'],
            ['value' => 'Genetic or hereditary factors'],
            ['value' => 'Hormonal imbalance or thyroid disorders'],
            ['value' => 'Emotional stress or physical illness'],
            ['value' => 'Nutritional deficiencies or certain medications'],
        ],
                'risks' => [
            ['value' => 'Progressive hair thinning or permanent hair loss'],
            ['value' => 'Emotional stress and reduced self-confidence'],
            ['value' => 'Increased scalp sensitivity or sun exposure'],
            ['value' => 'Psychological effects affecting quality of life'],
            ['value' => 'Nail abnormalities in some autoimmune alopecia cases'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Topical hair growth medications'],
            ['value' => 'Oral medications or hormonal therapy when required'],
            ['value' => 'Corticosteroid treatments for autoimmune alopecia'],
            ['value' => 'Platelet-rich plasma (PRP) therapy or hair restoration procedures'],
            ['value' => 'Nutritional support and regular dermatologic follow-up'],
        ],
                'recovery' => 'The long-term outlook for alopecia depends on the underlying cause and response to treatment. Many individuals experience improvement with early diagnosis and appropriate therapy, although some forms of alopecia may be chronic or progressive. Consistent treatment, healthy lifestyle practices, and regular dermatologic care can help improve hair growth, scalp health, and overall confidence. ______________________ 25. Pediatric Skin Disorders (Infantile Hemangioma, Atopic Dermatitis) Infantile Hemangioma Infantile Hemangioma',
                'sort_order' => 36,
                'is_active' => true,
                'meta_title' => 'Alopecia',
                'meta_description' => 'Alopecia is a condition that causes partial or complete hair loss on the scalp or other parts of the body. Hair loss may occur gradually or suddenly depending o',
                'meta_keywords' => '',
            ]
        );
    }
}
