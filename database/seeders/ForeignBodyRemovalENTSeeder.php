<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ForeignBodyRemovalENTSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Foreign Body Removal (ENT)')],
            [
                'title' => 'Foreign Body Removal (ENT)',
                'slug' => Str::slug('Foreign Body Removal (ENT)'),
                'introduction' => 'Foreign body removal in ENT refers to specialized procedures used to safely remove objects lodged in the ear, nose, or throat. Foreign bodies are common in children but may also occur in adults accidentally. Prompt removal is important to prevent infection, airway obstruction, or tissue injury.',
                'what_is' => 'The ENT specialist evaluates the location, size, and type of foreign body using appropriate examination tools and imaging if necessary. Removal techniques may involve: Suction devices Forceps Endoscopic guidance Specialized retrieval instruments Emergency airway procedures if required Common foreign bodies include: Food particles Beads or toys Cotton fragments Batteries Insects Emergency treatment is essential when breathing is affected.',
                'symptoms' => [
            ['value' => 'Ear or nasal blockage'],
            ['value' => 'Pain or irritation'],
            ['value' => 'Difficulty swallowing'],
            ['value' => 'Breathing difficulty'],
            ['value' => 'Foul-smelling nasal discharge'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Bleeding'],
            ['value' => 'Infection'],
            ['value' => 'Tissue injury during removal'],
            ['value' => 'Airway obstruction'],
            ['value' => 'Swelling or inflammation'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Avoid inserting objects into ears or nose'],
            ['value' => 'Use medications if prescribed'],
            ['value' => 'Monitor for infection signs'],
            ['value' => 'Attend follow-up evaluation if needed'],
            ['value' => 'Seek immediate care for breathing difficulty'],
        ],
                'surgery_risks' => [
            ['value' => 'Bleeding'],
            ['value' => 'Infection'],
            ['value' => 'Tissue injury during removal'],
            ['value' => 'Airway obstruction'],
            ['value' => 'Swelling or inflammation'],
        ],
                'long_term_outlook' => 'Most patients recover completely after timely foreign body removal. Early intervention prevents long-term complications and tissue damage.',
                'conclusion' => '',
                'seo_title' => 'Foreign Body Removal (ENT)',
                'seo_description' => 'Foreign body removal in ENT refers to specialized procedures used to safely remove objects lodged in the ear, nose, or throat. Foreign bodies are common in children but may also occur in adults accidentally. Prompt removal is important to prevent infection, airway obstruction, or tissue injury.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
