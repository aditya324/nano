<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostoperativeRecoveryMonitoringAreaSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Postoperative Recovery & Monitoring Area')],
            [
                'title' => 'Postoperative Recovery & Monitoring Area',
                'slug' => Str::slug('Postoperative Recovery & Monitoring Area'),
                'introduction' => 'A postoperative recovery and monitoring area is a specialized facility where patients are observed after ENT surgery to ensure stable recovery from anesthesia and surgery. The area supports early detection and management of postoperative complications. Continuous monitoring improves patient safety and recovery outcomes.',
                'what_is' => 'The recovery area may include: Vital sign monitoring systems Oxygen support Airway management equipment Pain control facilities Trained nursing support Emergency response equipment Patients are monitored for: Breathing stability Bleeding Pain control Oxygen levels Consciousness recovery The duration of observation depends on the type of surgery and patient condition.',
                'symptoms' => [
            ['value' => 'Postoperative pain'],
            ['value' => 'Drowsiness after anesthesia'],
            ['value' => 'Mild throat or nasal discomfort'],
            ['value' => 'Temporary swallowing difficulty'],
            ['value' => 'Nausea or dizziness'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Breathing complications'],
            ['value' => 'Bleeding'],
            ['value' => 'Post-anesthesia nausea'],
            ['value' => 'Airway swelling'],
            ['value' => 'Delayed recovery in high-risk patients'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Follow discharge instructions carefully'],
            ['value' => 'Continue medications properly'],
            ['value' => 'Maintain hydration and nutrition'],
            ['value' => 'Avoid strenuous activity initially'],
            ['value' => 'Seek urgent care for breathing difficulty or severe bleeding'],
        ],
                'surgery_risks' => [
            ['value' => 'Breathing complications'],
            ['value' => 'Bleeding'],
            ['value' => 'Post-anesthesia nausea'],
            ['value' => 'Airway swelling'],
            ['value' => 'Delayed recovery in high-risk patients'],
        ],
                'long_term_outlook' => 'Proper postoperative monitoring improves surgical safety, reduces complications, and supports faster recovery after ENT procedures.',
                'conclusion' => '',
                'seo_title' => 'Postoperative Recovery & Monitoring Area',
                'seo_description' => 'A postoperative recovery and monitoring area is a specialized facility where patients are observed after ENT surgery to ensure stable recovery from anesthesia and surgery. The area supports early detection and management of postoperative complications. Continuous monitoring improves patient safety and recovery outcomes.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
