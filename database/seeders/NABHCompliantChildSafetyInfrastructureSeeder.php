<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class NABHCompliantChildSafetyInfrastructureSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('NABH-Compliant Child Safety Infrastructure')],
            [
                'title' => 'NABH-Compliant Child Safety Infrastructure',
                'slug' => Str::slug('NABH-Compliant Child Safety Infrastructure'),
                'introduction' => 'NABH-compliant child safety infrastructure refers to healthcare facilities and safety systems designed according to National Accreditation Board for Hospitals (NABH) standards to ensure safe, child-friendly pediatric care.',
                'what_is' => 'This infrastructure includes infection control systems, child-safe furniture, secure pediatric wards, emergency preparedness, fire safety measures, medication safety protocols, safe oxygen systems, pediatric-friendly interiors, and continuous monitoring systems. NABH standards focus on patient safety, hygiene, quality assurance, and risk prevention in pediatric and neonatal healthcare environments.',
                'symptoms' => [
            ['value' => 'Need for safe pediatric hospitalization and treatment'],
            ['value' => 'Requirement for infection-controlled child care environment'],
            ['value' => 'Pediatric emergency and critical care safety needs'],
            ['value' => 'Increased risk of accidents in children without safety systems'],
            ['value' => 'Need for standardized quality healthcare facilities'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Hospital-acquired infections without proper safety measures'],
            ['value' => 'Medication or procedural errors in pediatric care'],
            ['value' => 'Falls, injuries, or accidental hazards in hospitals'],
            ['value' => 'Fire or emergency evacuation risks'],
            ['value' => 'Reduced quality of healthcare without accreditation standards'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Maintain strict infection control and hygiene protocols'],
            ['value' => 'Regularly inspect safety and emergency equipment'],
            ['value' => 'Train staff in pediatric safety and emergency response'],
            ['value' => 'Ensure proper medication labeling and monitoring'],
            ['value' => 'Conduct continuous quality audits and compliance checks'],
        ],
                'surgery_risks' => [
            ['value' => 'Hospital-acquired infections without proper safety measures'],
            ['value' => 'Medication or procedural errors in pediatric care'],
            ['value' => 'Falls, injuries, or accidental hazards in hospitals'],
            ['value' => 'Fire or emergency evacuation risks'],
            ['value' => 'Reduced quality of healthcare without accreditation standards'],
        ],
                'long_term_outlook' => 'NABH-compliant pediatric infrastructure improves healthcare quality, patient safety, infection control, and overall trust in child healthcare services while ensuring safer treatment environments for children and newborns.',
                'conclusion' => '',
                'seo_title' => 'NABH-Compliant Child Safety Infrastructure',
                'seo_description' => 'NABH-compliant child safety infrastructure refers to healthcare facilities and safety systems designed according to National Accreditation Board for Hospitals (NABH) standards to ensure safe, child-friendly pediatric care.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
