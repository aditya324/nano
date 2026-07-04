<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class InfectionControlTopicalSystemicAntibioticsSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Infection Control (Topical & Systemic Antibiotics)')],
            [
                'title' => 'Infection Control (Topical & Systemic Antibiotics)',
                'slug' => Str::slug('Infection Control (Topical & Systemic Antibiotics)'),
                'introduction' => 'Infection control is a critical component of diabetic foot management aimed at preventing spread of infection and tissue damage.',
                'what_is' => 'Diabetic foot infections may rapidly progress due to poor circulation and reduced immunity, making early treatment essential.',
                'symptoms' => [],
                'causes' => [
            ['value' => 'Infected diabetic ulcers'],
            ['value' => 'Cellulitis'],
            ['value' => 'Soft tissue infections'],
            ['value' => 'Postoperative wound infections'],
            ['value' => 'Prevention of sepsis'],
            ['value' => 'Treatments'],
            ['value' => 'Treatment includes topical antibiotics, oral or intravenous antibiotics, wound cleaning, dressing changes, and surgical drainage when necessary.'],
            ['value' => 'Benefits'],
            ['value' => 'Infection control'],
            ['value' => 'Reduced tissue destruction'],
            ['value' => 'Faster healing'],
            ['value' => 'Prevention of hospitalization'],
            ['value' => 'Risks / Limitations'],
            ['value' => 'Antibiotic resistance'],
            ['value' => 'Allergic reactions'],
            ['value' => 'Recurrent infections'],
            ['value' => 'Need for prolonged therapy'],
        ],
                'condition_risks' => [],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Complete antibiotic course'],
            ['value' => 'Daily wound care'],
            ['value' => 'Monitor for fever or swelling'],
            ['value' => 'Regular medical follow-up'],
        ],
                'surgery_risks' => [],
                'long_term_outlook' => 'Early infection management improves healing outcomes and lowers the risk of major diabetic foot complications.',
                'conclusion' => '',
                'seo_title' => 'Infection Control (Topical & Systemic Antibiotics)',
                'seo_description' => 'Infection control is a critical component of diabetic foot management aimed at preventing spread of infection and tissue damage.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
