<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MouthUlcersConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Mouth Ulcers')],
            [
                'name' => 'Mouth Ulcers',
                'slug' => Str::slug('Mouth Ulcers'),
                'h1' => 'Mouth Ulcers',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Mouth ulcers are painful sores occurring on the inner lining of the mouth, tongue, lips, or gums. They may be temporary and harmless or associated with infections, nutritional deficiencies, or systemic diseases.',
                'about_more' => '',
                'overview' => 'Mouth ulcers are painful sores occurring on the inner lining of the mouth, tongue, lips, or gums. They may be temporary and harmless or associated with infections, nutritional deficiencies, or systemic diseases.',
                'symptoms' => [
            ['value' => 'Painful round or oval sores in the mouth'],
            ['value' => 'Burning sensation while eating spicy foods'],
            ['value' => 'Redness and irritation around ulcers'],
            ['value' => 'Difficulty eating or speaking'],
            ['value' => 'Recurrent ulcer episodes in some individuals'],
        ],
                'causes' => [
            ['value' => 'Stress and lack of sleep'],
            ['value' => 'Nutritional deficiencies such as vitamin B12 or iron'],
            ['value' => 'Viral or bacterial infections'],
            ['value' => 'Mouth injury or irritation'],
            ['value' => 'Autoimmune or gastrointestinal diseases'],
        ],
                'risks' => [
            ['value' => 'Painful eating and dehydration'],
            ['value' => 'Recurrent ulcers affecting nutrition'],
            ['value' => 'Secondary infections'],
            ['value' => 'Weight loss in severe cases'],
            ['value' => 'Underlying disease remaining undiagnosed'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Topical ulcer gels and mouth rinses'],
            ['value' => 'Vitamin and nutritional supplements'],
            ['value' => 'Pain relief medications'],
            ['value' => 'Treatment of infections or systemic disease'],
            ['value' => 'Avoidance of spicy or irritating foods'],
        ],
                'recovery' => 'Most simple ulcers heal within one to two weeks. Persistent or recurrent ulcers require detailed medical evaluation.',
                'sort_order' => 43,
                'is_active' => true,
                'meta_title' => 'Mouth Ulcers',
                'meta_description' => 'Mouth ulcers are painful sores occurring on the inner lining of the mouth, tongue, lips, or gums. They may be temporary and harmless or associated with infectio',
                'meta_keywords' => '',
            ]
        );
    }
}
