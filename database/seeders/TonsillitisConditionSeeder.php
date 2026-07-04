<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TonsillitisConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Tonsillitis')],
            [
                'name' => 'Tonsillitis',
                'slug' => Str::slug('Tonsillitis'),
                'h1' => 'Tonsillitis',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Tonsillitis is inflammation or infection of the tonsils, commonly caused by viral or bacterial infections. It often results in sore throat, fever, and difficulty swallowing.',
                'about_more' => '',
                'overview' => 'Tonsillitis is inflammation or infection of the tonsils, commonly caused by viral or bacterial infections. It often results in sore throat, fever, and difficulty swallowing.',
                'symptoms' => [
            ['value' => 'Severe sore throat'],
            ['value' => 'Fever and body aches'],
            ['value' => 'Difficulty swallowing'],
            ['value' => 'Swollen red tonsils with pus spots'],
            ['value' => 'Enlarged neck lymph nodes'],
        ],
                'causes' => [
            ['value' => 'Viral throat infections'],
            ['value' => 'Streptococcal bacterial infection'],
            ['value' => 'Poor immunity or recurrent infections'],
            ['value' => 'Exposure to infected individuals'],
            ['value' => 'Environmental irritants and pollution'],
        ],
                'risks' => [
            ['value' => 'Recurrent throat infections'],
            ['value' => 'Tonsillar abscess formation'],
            ['value' => 'Difficulty eating and dehydration'],
            ['value' => 'Sleep disturbances due to enlarged tonsils'],
            ['value' => 'Spread of infection to nearby tissues'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Antibiotics for bacterial tonsillitis'],
            ['value' => 'Pain relief and fever medications'],
            ['value' => 'Warm salt water gargling'],
            ['value' => 'Hydration and rest'],
            ['value' => 'Tonsillectomy for recurrent severe cases'],
        ],
                'recovery' => 'Most patients recover within days with proper treatment. Recurrent cases may require surgical removal of tonsils.',
                'sort_order' => 26,
                'is_active' => true,
                'meta_title' => 'Tonsillitis',
                'meta_description' => 'Tonsillitis is inflammation or infection of the tonsils, commonly caused by viral or bacterial infections. It often results in sore throat, fever, and difficult',
                'meta_keywords' => '',
            ]
        );
    }
}
