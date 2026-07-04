<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BetaBlockersSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Beta-Blockers')],
            [
                'title' => 'Beta-Blockers',
                'slug' => Str::slug('Beta-Blockers'),
                'introduction' => 'Beta-blockers are cardiovascular medications that reduce heart rate, lower blood pressure, and decrease the workload on the heart. They are widely used in the treatment of hypertension, heart failure, arrhythmias, and coronary artery disease. These medications improve cardiac efficiency and reduce stress on the cardiovascular system.',
                'what_is' => 'Common beta-blockers include: Metoprolol Bisoprolol Atenolol Carvedilol Propranolol They are used for: High blood pressure Heart failure Angina Arrhythmias Post-heart attack management Beta-blockers help reduce oxygen demand by slowing heart activity. They may also help control symptoms such as palpitations and anxiety-related tachycardia.',
                'symptoms' => [
            ['value' => 'High blood pressure'],
            ['value' => 'Fast heartbeat or palpitations'],
            ['value' => 'Chest pain'],
            ['value' => 'Heart failure symptoms'],
            ['value' => 'Irregular heart rhythm'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Slow heart rate'],
            ['value' => 'Fatigue or dizziness'],
            ['value' => 'Low blood pressure'],
            ['value' => 'Worsening asthma symptoms in some patients'],
            ['value' => 'Sudden withdrawal complications if stopped abruptly'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Take medications regularly without missing doses'],
            ['value' => 'Monitor pulse and blood pressure routinely'],
            ['value' => 'Avoid sudden discontinuation of medication'],
            ['value' => 'Report severe dizziness or breathing problems'],
            ['value' => 'Attend cardiology follow-up visits consistently'],
        ],
                'surgery_risks' => [
            ['value' => 'Slow heart rate'],
            ['value' => 'Fatigue or dizziness'],
            ['value' => 'Low blood pressure'],
            ['value' => 'Worsening asthma symptoms in some patients'],
            ['value' => 'Sudden withdrawal complications if stopped abruptly'],
        ],
                'long_term_outlook' => 'Beta-blocker therapy improves heart function, reduces cardiovascular complications, and enhances survival in many cardiac conditions.',
                'conclusion' => '',
                'seo_title' => 'Beta-Blockers',
                'seo_description' => 'Beta-blockers are cardiovascular medications that reduce heart rate, lower blood pressure, and decrease the workload on the heart. They are widely used in the treatment of hypertension, heart failure, arrhythmias, and coronary artery disease. These medications improve cardiac efficiency and reduce stress on the cardiovascular system.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
