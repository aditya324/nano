<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AutomatedBiochemistryAnalyzerSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Automated Biochemistry Analyzer')],
            [
                'title' => 'Automated Biochemistry Analyzer',
                'slug' => Str::slug('Automated Biochemistry Analyzer'),
                'introduction' => 'An Automated Biochemistry Analyzer is an advanced laboratory diagnostic system used to perform fast, accurate, and automated testing of blood, urine, and other body fluids. It helps doctors evaluate organ function, metabolic health, electrolyte balance, hormonal conditions, and overall patient wellness. These analyzers improve laboratory efficiency, reduce manual errors, and support early diagnosis and effective treatment planning across multiple medical specialties.',
                'what_is' => 'Automated biochemistry analyzers use advanced photometric and spectrophotometric technologies along with automated sample handling to measure a wide range of biochemical parameters. Common tests include blood glucose, liver function tests, kidney function tests, lipid profile, electrolytes, enzymes, proteins, and metabolic markers. These systems are widely used in hospitals, diagnostic laboratories, ICUs, endocrinology clinics, preventive health centers, and research laboratories. Modern analyzers provide high-speed processing, automated calibration, quality control systems, and accurate digital reporting to support reliable clinical decision-making and comprehensive patient care.',
                'symptoms' => [],
                'causes' => [
            ['value' => 'Blood glucose testing'],
            ['value' => 'Liver and kidney function assessment'],
            ['value' => 'Lipid profile and cholesterol evaluation'],
            ['value' => 'Electrolyte and metabolic analysis'],
            ['value' => 'Hormonal and endocrine investigations'],
            ['value' => 'Routine preventive health screening'],
            ['value' => 'Chronic disease monitoring'],
            ['value' => 'Benefits'],
            ['value' => 'Rapid and accurate test results'],
            ['value' => 'Reduced manual handling and human error'],
            ['value' => 'High-volume sample processing capability'],
            ['value' => 'Automated calibration and quality control'],
            ['value' => 'Improved laboratory workflow efficiency'],
            ['value' => 'Supports early diagnosis and timely treatment'],
            ['value' => 'Risks & Limitations'],
            ['value' => 'Inaccurate results due to improper sample collection or handling'],
            ['value' => 'Calibration or technical errors affecting test accuracy'],
            ['value' => 'Sample contamination during processing'],
            ['value' => 'Equipment malfunction causing workflow delays'],
            ['value' => 'Misinterpretation of laboratory values without clinical evaluation'],
            ['value' => 'Laboratory Care & Maintenance'],
            ['value' => 'Regular calibration and quality assurance checks'],
            ['value' => 'Proper sample collection and storage protocols'],
            ['value' => 'Routine maintenance and technical servicing'],
            ['value' => 'Continuous monitoring of analyzer performance'],
            ['value' => 'Strict laboratory supervision and quality assessment'],
        ],
                'condition_risks' => [],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [],
                'surgery_risks' => [],
                'long_term_outlook' => 'Automated biochemistry analyzers play a vital role in modern healthcare by enabling accurate laboratory diagnostics, early disease detection, treatment monitoring, and preventive health screening. With proper maintenance and quality control, these systems significantly improve clinical outcomes, support effective disease management, reduce complications, and enhance overall patient care and quality of life.',
                'conclusion' => '',
                'seo_title' => 'Automated Biochemistry Analyzer',
                'seo_description' => 'An Automated Biochemistry Analyzer is an advanced laboratory diagnostic system used to perform fast, accurate, and automated testing of blood, urine, and other body fluids. It helps doctors evaluate organ function, metabolic health, electrolyte balance, hormonal conditions, and overall patient wellness. These analyzers improve laboratory efficiency, reduce manual errors, and support early diagnosis and effective treatment planning across multiple medical specialties.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
