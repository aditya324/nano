<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PatternHairLossAndrogeneticAlopeciaConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Pattern Hair Loss (Androgenetic Alopecia)')],
            [
                'name' => 'Pattern Hair Loss (Androgenetic Alopecia)',
                'slug' => Str::slug('Pattern Hair Loss (Androgenetic Alopecia)'),
                'h1' => 'Pattern Hair Loss (Androgenetic Alopecia)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Pattern hair loss, also known as androgenetic alopecia, is the most common type of hair loss affecting both men and women. The condition develops gradually due to genetic and hormonal factors, leading to thinning of hair and reduced hair density over time. In men, it commonly causes a receding hairline and thinning at the crown, while women often experience diffuse thinning over the scalp.',
                'about_more' => '',
                'overview' => 'Pattern hair loss, also known as androgenetic alopecia, is the most common type of hair loss affecting both men and women. The condition develops gradually due to genetic and hormonal factors, leading to thinning of hair and reduced hair density over time. In men, it commonly causes a receding hairline and thinning at the crown, while women often experience diffuse thinning over the scalp.',
                'symptoms' => [
            ['value' => 'Gradual thinning of scalp hair'],
            ['value' => 'Receding hairline in men'],
            ['value' => 'Widening of the hair part in women'],
            ['value' => 'Reduced hair density or volume'],
            ['value' => 'Excessive hair shedding during grooming or washing'],
        ],
                'causes' => [
            ['value' => 'Genetic and hereditary factors'],
            ['value' => 'Hormonal influence, especially dihydrotestosterone (DHT)'],
            ['value' => 'Increasing age'],
            ['value' => 'Hormonal changes or medical conditions'],
            ['value' => 'Stress, nutritional deficiencies, or lifestyle factors worsening hair loss'],
        ],
                'risks' => [
            ['value' => 'Progressive hair thinning or baldness'],
            ['value' => 'Emotional stress and reduced self-confidence'],
            ['value' => 'Increased scalp sensitivity or sun exposure'],
            ['value' => 'Psychological effects affecting social well-being'],
            ['value' => 'Reduced hair regrowth if treatment is delayed'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Topical hair growth medications such as minoxidil'],
            ['value' => 'Oral medications prescribed for hair loss management'],
            ['value' => 'Platelet-rich plasma (PRP) therapy'],
            ['value' => 'Hair transplantation or restoration procedures'],
            ['value' => 'Nutritional support and lifestyle modifications'],
        ],
                'recovery' => 'The long-term outlook for pattern hair loss varies depending on the stage of hair loss and response to treatment. Early diagnosis and continuous treatment can help slow progression, improve hair density, and maintain scalp health. Regular dermatologic care, healthy lifestyle habits, and adherence to treatment plans are important for achieving the best long-term results. __________________________ 10. Vitiligo Conditions Vitiligo',
                'sort_order' => 14,
                'is_active' => true,
                'meta_title' => 'Pattern Hair Loss (Androgenetic Alopecia)',
                'meta_description' => 'Pattern hair loss, also known as androgenetic alopecia, is the most common type of hair loss affecting both men and women. The condition develops gradually due ',
                'meta_keywords' => '',
            ]
        );
    }
}
