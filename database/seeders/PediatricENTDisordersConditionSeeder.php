<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PediatricENTDisordersConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Pediatric ENT Disorders')],
            [
                'name' => 'Pediatric ENT Disorders',
                'slug' => Str::slug('Pediatric ENT Disorders'),
                'h1' => 'Pediatric ENT Disorders',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Pediatric ENT disorders include diseases affecting the ears, nose, throat, airway, and neck in children. Common conditions include ear infections, enlarged adenoids, tonsillitis, allergies, and hearing problems.',
                'about_more' => '',
                'overview' => 'Pediatric ENT disorders include diseases affecting the ears, nose, throat, airway, and neck in children. Common conditions include ear infections, enlarged adenoids, tonsillitis, allergies, and hearing problems.',
                'symptoms' => [
            ['value' => 'Recurrent ear or throat infections'],
            ['value' => 'Nasal blockage and mouth breathing'],
            ['value' => 'Snoring or sleep disturbances'],
            ['value' => 'Hearing difficulty or delayed speech'],
            ['value' => 'Feeding or swallowing problems'],
        ],
                'causes' => [
            ['value' => 'Viral and bacterial infections'],
            ['value' => 'Enlarged tonsils or adenoids'],
            ['value' => 'Allergies and environmental exposure'],
            ['value' => 'Congenital abnormalities'],
            ['value' => 'Weak immunity during childhood'],
        ],
                'risks' => [
            ['value' => 'Hearing and speech delay'],
            ['value' => 'Poor sleep and concentration'],
            ['value' => 'Recurrent infections affecting growth'],
            ['value' => 'Breathing difficulties during sleep'],
            ['value' => 'Academic and developmental problems'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Pediatric ENT evaluation'],
            ['value' => 'Antibiotics and allergy management'],
            ['value' => 'Hearing tests and speech assessment'],
            ['value' => 'Tonsillectomy or adenoidectomy if needed'],
            ['value' => 'Long-term follow-up for chronic conditions'],
        ],
                'recovery' => 'Most pediatric ENT conditions respond well to early treatment. Proper care improves growth, hearing, and overall development.',
                'sort_order' => 49,
                'is_active' => true,
                'meta_title' => 'Pediatric ENT Disorders',
                'meta_description' => 'Pediatric ENT disorders include diseases affecting the ears, nose, throat, airway, and neck in children. Common conditions include ear infections, enlarged aden',
                'meta_keywords' => '',
            ]
        );
    }
}
