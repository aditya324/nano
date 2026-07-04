<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class LongTermNephrologyFollowUpandMonitoringConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Long-Term Nephrology Follow-Up and Monitoring')],
            [
                'name' => 'Long-Term Nephrology Follow-Up and Monitoring',
                'slug' => Str::slug('Long-Term Nephrology Follow-Up and Monitoring'),
                'h1' => 'Long-Term Nephrology Follow-Up and Monitoring',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Long-term nephrology follow-up and monitoring is a continuous medical care program designed to supervise kidney disease progression, treatment response, and overall patient health over time.',
                'about_more' => 'Chronic kidney disease often requires lifelong monitoring because kidney function may gradually change and complications can develop slowly. Regular nephrology care helps detect problems early and improve long-term renal outcomes.',
                'overview' => 'The follow-up program includes: Kidney function testing Blood pressure monitoring Electrolyte assessment Medication review Nutritional evaluation Dialysis or transplant monitoring Lifestyle counseling Doctors assess: Disease progression Cardiovascular risk Fluid balance Anemia Bone health Infection risk Patients receive ongoing education regarding kidney protection, medication safety, and healthy lifestyle practices. The frequency of follow-up depends on kidney disease severity and treatment needs.',
                'symptoms' => [
            ['value' => 'Chronic kidney disease'],
            ['value' => 'High blood pressure'],
            ['value' => 'Fatigue and weakness'],
            ['value' => 'Swelling or fluid retention'],
            ['value' => 'Progressive kidney dysfunction'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Kidney failure progression'],
            ['value' => 'Cardiovascular complications'],
            ['value' => 'Electrolyte imbalance'],
            ['value' => 'Dialysis dependency'],
            ['value' => 'Reduced quality of life'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Attend all scheduled nephrology appointments'],
            ['value' => 'Maintain medication compliance'],
            ['value' => 'Follow renal dietary recommendations'],
            ['value' => 'Monitor blood pressure and symptoms regularly'],
            ['value' => 'Complete laboratory testing as advised'],
        ],
                'recovery' => 'Consistent long-term nephrology follow-up greatly improves kidney preservation, symptom control, and treatment safety. Regular monitoring and early intervention help patients maintain better overall health and improved quality of life over many years.',
                'sort_order' => 50,
                'is_active' => true,
                'meta_title' => 'Long-Term Nephrology Follow-Up and Monitoring',
                'meta_description' => 'Long-term nephrology follow-up and monitoring is a continuous medical care program designed to supervise kidney disease progression, treatment response, and ove',
                'meta_keywords' => '',
            ]
        );
    }
}
