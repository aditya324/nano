<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class NasopharyngealCancerConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Nasopharyngeal Cancer')],
            [
                'name' => 'Nasopharyngeal Cancer',
                'slug' => Str::slug('Nasopharyngeal Cancer'),
                'h1' => 'Nasopharyngeal Cancer',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Nasopharyngeal cancer develops in the upper part of the throat behind the nose. It is associated with viral infections, genetic factors, and environmental influences.',
                'about_more' => '',
                'overview' => 'Nasopharyngeal cancer develops in the upper part of the throat behind the nose. It is associated with viral infections, genetic factors, and environmental influences.',
                'symptoms' => [
            ['value' => 'Persistent nasal blockage'],
            ['value' => 'Nosebleeds and hearing problems'],
            ['value' => 'Neck swelling from enlarged lymph nodes'],
            ['value' => 'Headache or facial pain'],
            ['value' => 'Double vision or nerve-related symptoms'],
        ],
                'causes' => [
            ['value' => 'Epstein–Barr virus infection'],
            ['value' => 'Genetic predisposition'],
            ['value' => 'Consumption of preserved foods'],
            ['value' => 'Smoking and environmental pollutants'],
            ['value' => 'Chronic nasal inflammation'],
        ],
                'risks' => [
            ['value' => 'Spread to lymph nodes and distant organs'],
            ['value' => 'Hearing and breathing difficulties'],
            ['value' => 'Cranial nerve involvement'],
            ['value' => 'Difficulty swallowing and speaking'],
            ['value' => 'Advanced metastatic disease'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Nasal endoscopy and biopsy'],
            ['value' => 'CT or MRI imaging evaluation'],
            ['value' => 'Radiation therapy as primary treatment'],
            ['value' => 'Chemotherapy for advanced disease'],
            ['value' => 'Long-term oncological follow-up'],
        ],
                'recovery' => 'Early-stage disease responds well to treatment. Regular follow-up is important to monitor recurrence.',
                'sort_order' => 48,
                'is_active' => true,
                'meta_title' => 'Nasopharyngeal Cancer',
                'meta_description' => 'Nasopharyngeal cancer develops in the upper part of the throat behind the nose. It is associated with viral infections, genetic factors, and environmental influ',
                'meta_keywords' => '',
            ]
        );
    }
}
