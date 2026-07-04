<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class HeadandNeckInfectionsConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Head and Neck Infections')],
            [
                'name' => 'Head and Neck Infections',
                'slug' => Str::slug('Head and Neck Infections'),
                'h1' => 'Head and Neck Infections',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Head and neck infections involve bacterial, viral, or fungal infections affecting tissues of the throat, neck, salivary glands, sinuses, or deep neck spaces. Severe infections can spread rapidly and become life-threatening.',
                'about_more' => '',
                'overview' => 'Head and neck infections involve bacterial, viral, or fungal infections affecting tissues of the throat, neck, salivary glands, sinuses, or deep neck spaces. Severe infections can spread rapidly and become life-threatening.',
                'symptoms' => [
            ['value' => 'Fever and severe throat pain'],
            ['value' => 'Neck swelling or redness'],
            ['value' => 'Difficulty swallowing or breathing'],
            ['value' => 'Pus discharge or abscess formation'],
            ['value' => 'Fatigue and body aches'],
        ],
                'causes' => [
            ['value' => 'Bacterial throat or dental infections'],
            ['value' => 'Viral upper respiratory infections'],
            ['value' => 'Poor oral hygiene'],
            ['value' => 'Weak immune system'],
            ['value' => 'Untreated sinus or salivary gland infections'],
        ],
                'risks' => [
            ['value' => 'Deep neck abscess formation'],
            ['value' => 'Airway obstruction and breathing difficulty'],
            ['value' => 'Spread of infection to chest or bloodstream'],
            ['value' => 'Sepsis and systemic illness'],
            ['value' => 'Long-term tissue damage'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'ENT examination and imaging'],
            ['value' => 'Antibiotics and antifungal medications'],
            ['value' => 'Drainage of abscesses if present'],
            ['value' => 'Airway management in severe cases'],
            ['value' => 'Hospitalization for advanced infections'],
        ],
                'recovery' => 'Most infections improve with early treatment. Delayed management may lead to serious complications requiring emergency care.',
                'sort_order' => 44,
                'is_active' => true,
                'meta_title' => 'Head and Neck Infections',
                'meta_description' => 'Head and neck infections involve bacterial, viral, or fungal infections affecting tissues of the throat, neck, salivary glands, sinuses, or deep neck spaces. Se',
                'meta_keywords' => '',
            ]
        );
    }
}
