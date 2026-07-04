<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MedicalManagementofEarInfectionsSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Medical Management of Ear Infections')],
            [
                'title' => 'Medical Management of Ear Infections',
                'slug' => Str::slug('Medical Management of Ear Infections'),
                'introduction' => 'Medical management of ear infections involves the diagnosis and treatment of bacterial, viral, or fungal infections affecting the outer, middle, or inner ear. The treatment focuses on controlling infection, reducing inflammation, relieving pain, and preventing hearing complications. Timely treatment is important to avoid chronic ear disease and long-term hearing damage.',
                'what_is' => 'Management includes detailed ear examination, evaluation of symptoms, and identification of the type and severity of infection. Treatment may involve antibiotics, antifungal medications, anti-inflammatory drugs, ear drops, pain relievers, and supportive care. The approach varies depending on: Outer ear infection (otitis externa) Middle ear infection (otitis media) Chronic ear disease Fungal ear infections Ear infections associated with sinus or throat illness In severe or recurrent cases, additional procedures or hearing evaluation may be necessary.',
                'symptoms' => [
            ['value' => 'Ear pain'],
            ['value' => 'Ear discharge'],
            ['value' => 'Fever'],
            ['value' => 'Hearing difficulty'],
            ['value' => 'Ear fullness or pressure'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Hearing loss'],
            ['value' => 'Chronic infection'],
            ['value' => 'Eardrum perforation'],
            ['value' => 'Spread of infection'],
            ['value' => 'Balance disturbances'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Complete the full course of medications'],
            ['value' => 'Keep the affected ear dry'],
            ['value' => 'Avoid self-cleaning of the ear canal'],
            ['value' => 'Attend follow-up examinations regularly'],
            ['value' => 'Report persistent pain or fever immediately'],
        ],
                'surgery_risks' => [
            ['value' => 'Hearing loss'],
            ['value' => 'Chronic infection'],
            ['value' => 'Eardrum perforation'],
            ['value' => 'Spread of infection'],
            ['value' => 'Balance disturbances'],
        ],
                'long_term_outlook' => 'Most ear infections improve completely with proper treatment. Early medical care reduces complications and helps preserve hearing and ear function.',
                'conclusion' => '',
                'seo_title' => 'Medical Management of Ear Infections',
                'seo_description' => 'Medical management of ear infections involves the diagnosis and treatment of bacterial, viral, or fungal infections affecting the outer, middle, or inner ear. The treatment focuses on controlling infection, reducing inflammation, relieving pain, and preventing hearing complications. Timely treatment is important to avoid chronic ear disease and long-term hearing damage.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
