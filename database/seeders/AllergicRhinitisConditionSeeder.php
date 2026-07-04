<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AllergicRhinitisConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Allergic Rhinitis')],
            [
                'name' => 'Allergic Rhinitis',
                'slug' => Str::slug('Allergic Rhinitis'),
                'h1' => 'Allergic Rhinitis',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Allergic rhinitis is an allergic inflammation of the nasal passages triggered by allergens such as dust, pollen, mold, or pet dander. It commonly causes sneezing, nasal congestion, and watery discharge.',
                'about_more' => '',
                'overview' => 'Allergic rhinitis is an allergic inflammation of the nasal passages triggered by allergens such as dust, pollen, mold, or pet dander. It commonly causes sneezing, nasal congestion, and watery discharge.',
                'symptoms' => [
            ['value' => 'Frequent sneezing attacks'],
            ['value' => 'Runny or blocked nose'],
            ['value' => 'Itchy nose, eyes, or throat'],
            ['value' => 'Watery eyes and nasal irritation'],
            ['value' => 'Reduced smell sensation and fatigue'],
        ],
                'causes' => [
            ['value' => 'Dust mites and house dust'],
            ['value' => 'Pollen and seasonal allergens'],
            ['value' => 'Pet hair and animal dander'],
            ['value' => 'Mold spores and pollution'],
            ['value' => 'Family history of allergies'],
        ],
                'risks' => [
            ['value' => 'Chronic sinus infections'],
            ['value' => 'Sleep disturbance and fatigue'],
            ['value' => 'Asthma aggravation'],
            ['value' => 'Ear pressure and Eustachian tube problems'],
            ['value' => 'Reduced daily productivity and concentration'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Allergy testing and ENT evaluation'],
            ['value' => 'Antihistamines and nasal steroid sprays'],
            ['value' => 'Avoidance of known allergens'],
            ['value' => 'Steam inhalation and saline nasal washes'],
            ['value' => 'Immunotherapy for severe allergies'],
        ],
                'recovery' => 'Most patients achieve good symptom control with allergy management and regular treatment. Avoiding triggers helps prevent recurrent attacks.',
                'sort_order' => 20,
                'is_active' => true,
                'meta_title' => 'Allergic Rhinitis',
                'meta_description' => 'Allergic rhinitis is an allergic inflammation of the nasal passages triggered by allergens such as dust, pollen, mold, or pet dander. It commonly causes sneezin',
                'meta_keywords' => '',
            ]
        );
    }
}
