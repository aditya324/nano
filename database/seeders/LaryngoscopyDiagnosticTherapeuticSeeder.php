<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class LaryngoscopyDiagnosticTherapeuticSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Laryngoscopy (Diagnostic / Therapeutic)')],
            [
                'title' => 'Laryngoscopy (Diagnostic / Therapeutic)',
                'slug' => Str::slug('Laryngoscopy (Diagnostic / Therapeutic)'),
                'introduction' => 'Laryngoscopy is an ENT procedure used to examine the larynx, vocal cords, and throat structures for diagnosis or treatment of voice and airway disorders. The procedure helps identify infections, tumors, vocal cord abnormalities, airway obstruction, and swallowing problems. It may be performed for both diagnostic and therapeutic purposes.',
                'what_is' => 'Laryngoscopy may be performed using flexible or rigid instruments depending on the clinical requirement. Diagnostic laryngoscopy is used to: Evaluate hoarseness Examine vocal cords Assess swallowing problems Detect tumors or lesions Therapeutic laryngoscopy may involve: Removal of lesions Biopsy procedures Airway treatment Foreign body removal The procedure can be performed in the clinic or operating theatre depending on complexity.',
                'symptoms' => [
            ['value' => 'Persistent hoarseness'],
            ['value' => 'Difficulty swallowing'],
            ['value' => 'Chronic throat pain'],
            ['value' => 'Voice changes'],
            ['value' => 'Breathing difficulty'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Mild throat discomfort'],
            ['value' => 'Temporary gagging sensation'],
            ['value' => 'Minor bleeding'],
            ['value' => 'Hoarseness after the procedure'],
            ['value' => 'Rare airway irritation'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Avoid excessive voice use temporarily'],
            ['value' => 'Maintain hydration'],
            ['value' => 'Follow prescribed medications carefully'],
            ['value' => 'Avoid smoking and alcohol'],
            ['value' => 'Attend follow-up evaluations regularly'],
        ],
                'surgery_risks' => [
            ['value' => 'Mild throat discomfort'],
            ['value' => 'Temporary gagging sensation'],
            ['value' => 'Minor bleeding'],
            ['value' => 'Hoarseness after the procedure'],
            ['value' => 'Rare airway irritation'],
        ],
                'long_term_outlook' => 'Laryngoscopy supports accurate diagnosis and timely treatment of throat and vocal disorders. Early intervention improves long-term voice and airway outcomes.',
                'conclusion' => '',
                'seo_title' => 'Laryngoscopy (Diagnostic / Therapeutic)',
                'seo_description' => 'Laryngoscopy is an ENT procedure used to examine the larynx, vocal cords, and throat structures for diagnosis or treatment of voice and airway disorders. The procedure helps identify infections, tumors, vocal cord abnormalities, airway obstruction, and swallowing problems. It may be performed for both diagnostic and therapeutic purposes.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
