<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CathLabDiagnosticInterventionalSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Cath Lab (Diagnostic & Interventional)')],
            [
                'title' => 'Cath Lab (Diagnostic & Interventional)',
                'slug' => Str::slug('Cath Lab (Diagnostic & Interventional)'),
                'introduction' => 'A Cath Lab is a highly specialized cardiac procedure suite used for diagnostic and interventional cardiovascular procedures. It is equipped with advanced imaging systems that guide minimally invasive cardiac treatments. Cath Labs are essential for emergency and elective cardiac interventions.',
                'what_is' => 'Common procedures performed in a Cath Lab include: Coronary angiography Angioplasty and stenting Pacemaker implantation Valve interventions Electrophysiology procedures The facility contains: Fluoroscopy imaging systems Hemodynamic monitoring Sterile interventional equipment Emergency cardiac support systems Cath Lab procedures allow faster recovery compared to open surgical procedures.',
                'symptoms' => [
            ['value' => 'Heart attack symptoms'],
            ['value' => 'Severe chest pain'],
            ['value' => 'Coronary artery disease'],
            ['value' => 'Arrhythmias'],
            ['value' => 'Structural heart disease'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Bleeding complications'],
            ['value' => 'Contrast dye reactions'],
            ['value' => 'Infection risk'],
            ['value' => 'Radiation exposure'],
            ['value' => 'Rare vascular or cardiac injury'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Follow bed rest instructions if advised'],
            ['value' => 'Monitor insertion site for swelling or bleeding'],
            ['value' => 'Stay hydrated after contrast use'],
            ['value' => 'Attend regular cardiology follow-up appointments'],
            ['value' => 'Continue prescribed medications consistently'],
        ],
                'surgery_risks' => [
            ['value' => 'Bleeding complications'],
            ['value' => 'Contrast dye reactions'],
            ['value' => 'Infection risk'],
            ['value' => 'Radiation exposure'],
            ['value' => 'Rare vascular or cardiac injury'],
        ],
                'long_term_outlook' => 'Modern Cath Lab interventions improve survival, reduce complications, support minimally invasive cardiac care, and enhance long-term cardiovascular outcomes.',
                'conclusion' => '',
                'seo_title' => 'Cath Lab (Diagnostic & Interventional)',
                'seo_description' => 'A Cath Lab is a highly specialized cardiac procedure suite used for diagnostic and interventional cardiovascular procedures. It is equipped with advanced imaging systems that guide minimally invasive cardiac treatments. Cath Labs are essential for emergency and elective cardiac interventions.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
