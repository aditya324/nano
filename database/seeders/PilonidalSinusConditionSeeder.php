<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PilonidalSinusConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Pilonidal Sinus')],
            [
                'name' => 'Pilonidal Sinus',
                'slug' => Str::slug('Pilonidal Sinus'),
                'h1' => 'Pilonidal Sinus',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Pilonidal sinus is a chronic skin infection occurring near the tailbone area, often containing hair and debris. It commonly affects young adults and may cause repeated abscess formation.',
                'about_more' => '',
                'overview' => 'Pilonidal sinus is a chronic skin infection occurring near the tailbone area, often containing hair and debris. It commonly affects young adults and may cause repeated abscess formation.',
                'symptoms' => [
            ['value' => 'Pain and swelling near the buttock cleft'],
            ['value' => 'Pus or blood-stained discharge'],
            ['value' => 'Redness and tenderness over the area'],
            ['value' => 'Difficulty sitting comfortably'],
            ['value' => 'Fever in infected abscess cases'],
        ],
                'causes' => [
            ['value' => 'Ingrown hair and friction in the area'],
            ['value' => 'Poor hygiene and excessive sweating'],
            ['value' => 'Prolonged sitting or sedentary lifestyle'],
            ['value' => 'Obesity and deep skin folds'],
            ['value' => 'Repeated local trauma or irritation'],
        ],
                'risks' => [
            ['value' => 'Recurrent painful infections'],
            ['value' => 'Abscess formation'],
            ['value' => 'Chronic sinus tract development'],
            ['value' => 'Spread of infection to surrounding tissue'],
            ['value' => 'Delayed wound healing after infection'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Antibiotics for acute infection'],
            ['value' => 'Incision and drainage of abscesses'],
            ['value' => 'Surgical excision of sinus tract'],
            ['value' => 'Hair removal and hygiene measures'],
            ['value' => 'Regular wound care and follow-up'],
        ],
                'recovery' => 'Most patients recover well after proper surgical treatment. Maintaining hygiene and avoiding prolonged pressure reduce recurrence risk.',
                'sort_order' => 23,
                'is_active' => true,
                'meta_title' => 'Pilonidal Sinus',
                'meta_description' => 'Pilonidal sinus is a chronic skin infection occurring near the tailbone area, often containing hair and debris. It commonly affects young adults and may cause r',
                'meta_keywords' => '',
            ]
        );
    }
}
