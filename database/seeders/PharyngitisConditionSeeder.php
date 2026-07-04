<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PharyngitisConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Pharyngitis')],
            [
                'name' => 'Pharyngitis',
                'slug' => Str::slug('Pharyngitis'),
                'h1' => 'Pharyngitis',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Pharyngitis is inflammation of the pharynx or throat, usually caused by infections. It commonly presents with throat pain, fever, and swallowing difficulty.',
                'about_more' => '',
                'overview' => 'Pharyngitis is inflammation of the pharynx or throat, usually caused by infections. It commonly presents with throat pain, fever, and swallowing difficulty.',
                'symptoms' => [
            ['value' => 'Throat pain and irritation'],
            ['value' => 'Fever and fatigue'],
            ['value' => 'Painful swallowing'],
            ['value' => 'Redness of the throat'],
            ['value' => 'Enlarged neck lymph nodes'],
        ],
                'causes' => [
            ['value' => 'Viral infections such as common cold'],
            ['value' => 'Streptococcal bacterial infection'],
            ['value' => 'Allergies and irritants'],
            ['value' => 'Smoking or pollution exposure'],
            ['value' => 'Weak immunity or crowded environments'],
        ],
                'risks' => [
            ['value' => 'Recurrent throat infections'],
            ['value' => 'Tonsillar abscess formation'],
            ['value' => 'Rheumatic fever in untreated streptococcal cases'],
            ['value' => 'Dehydration due to painful swallowing'],
            ['value' => 'Spread of infection to nearby structures'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Antibiotics for bacterial infections'],
            ['value' => 'Pain and fever management'],
            ['value' => 'Gargling and hydration'],
            ['value' => 'Rest and nutritional support'],
            ['value' => 'ENT evaluation for recurrent symptoms'],
        ],
                'recovery' => 'Most patients recover fully with appropriate treatment. Early care reduces the risk of complications.',
                'sort_order' => 29,
                'is_active' => true,
                'meta_title' => 'Pharyngitis',
                'meta_description' => 'Pharyngitis is inflammation of the pharynx or throat, usually caused by infections. It commonly presents with throat pain, fever, and swallowing difficulty.',
                'meta_keywords' => '',
            ]
        );
    }
}
