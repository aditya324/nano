<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SnoringOSATreatmentEquipmentCPAPCoordinationSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Snoring & OSA Treatment Equipment (CPAP Coordination)')],
            [
                'title' => 'Snoring & OSA Treatment Equipment (CPAP Coordination)',
                'slug' => Str::slug('Snoring & OSA Treatment Equipment (CPAP Coordination)'),
                'introduction' => 'Snoring and obstructive sleep apnea (OSA) treatment equipment includes devices and support systems used to manage airway obstruction during sleep. Continuous Positive Airway Pressure (CPAP) therapy is the most common non-surgical treatment for sleep apnea. The equipment helps improve breathing, oxygenation, and sleep quality.',
                'what_is' => 'The treatment setup may include: CPAP machines BiPAP devices Humidifiers Sleep masks Airway pressure monitoring systems Patient education and fitting support The equipment is used for: Obstructive sleep apnea Severe snoring Sleep-related breathing disorders Airway collapse during sleep Proper mask fitting and patient counseling improve treatment compliance and effectiveness.',
                'symptoms' => [
            ['value' => 'Loud snoring'],
            ['value' => 'Interrupted breathing during sleep'],
            ['value' => 'Daytime tiredness'],
            ['value' => 'Morning headaches'],
            ['value' => 'Poor sleep quality'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Mask discomfort'],
            ['value' => 'Nasal dryness or congestion'],
            ['value' => 'Skin irritation from masks'],
            ['value' => 'Difficulty adapting to therapy initially'],
            ['value' => 'Poor compliance reducing treatment benefit'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Use CPAP equipment regularly as prescribed'],
            ['value' => 'Clean masks and tubing properly'],
            ['value' => 'Attend sleep clinic follow-up appointments'],
            ['value' => 'Maintain healthy sleep habits'],
            ['value' => 'Report persistent discomfort or breathing issues'],
        ],
                'surgery_risks' => [
            ['value' => 'Mask discomfort'],
            ['value' => 'Nasal dryness or congestion'],
            ['value' => 'Skin irritation from masks'],
            ['value' => 'Difficulty adapting to therapy initially'],
            ['value' => 'Poor compliance reducing treatment benefit'],
        ],
                'long_term_outlook' => 'CPAP and OSA treatment equipment significantly improve sleep quality, reduce cardiovascular risks, and enhance long-term overall health.',
                'conclusion' => '',
                'seo_title' => 'Snoring & OSA Treatment Equipment (CPAP Coordination)',
                'seo_description' => 'Snoring and obstructive sleep apnea (OSA) treatment equipment includes devices and support systems used to manage airway obstruction during sleep. Continuous Positive Airway Pressure (CPAP) therapy is the most common non-surgical treatment for sleep apnea. The equipment helps improve breathing, oxygenation, and sleep quality.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
