<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EndoscopicSurgicalManagementofGIBleedSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Endoscopic / Surgical Management of GI Bleed')],
            [
                'title' => 'Endoscopic / Surgical Management of GI Bleed',
                'slug' => Str::slug('Endoscopic / Surgical Management of GI Bleed'),
                'introduction' => 'Endoscopic and surgical management of gastrointestinal bleeding involves emergency procedures to identify and stop bleeding within the digestive tract. Prompt treatment is essential to prevent life-threatening blood loss.',
                'what_is' => 'Management options include: Endoscopic clipping Injection therapy Thermal coagulation Band ligation Surgical bleeding control when required Common causes treated include: Ulcers Varices Tumors Diverticular bleeding Vascular lesions Rapid diagnosis and stabilization are critical.',
                'symptoms' => [
            ['value' => 'Vomiting blood'],
            ['value' => 'Black tarry stools'],
            ['value' => 'Rectal bleeding'],
            ['value' => 'Severe weakness or dizziness'],
            ['value' => 'Low blood pressure or shock'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Recurrent bleeding'],
            ['value' => 'Need for blood transfusion'],
            ['value' => 'Infection or perforation'],
            ['value' => 'Sedation-related complications'],
            ['value' => 'Emergency surgical risks in severe cases'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Monitor blood pressure and hemoglobin levels'],
            ['value' => 'Avoid ulcer-causing medications if advised'],
            ['value' => 'Follow dietary recommendations carefully'],
            ['value' => 'Attend follow-up endoscopy appointments'],
            ['value' => 'Seek emergency care if bleeding recurs'],
        ],
                'surgery_risks' => [
            ['value' => 'Recurrent bleeding'],
            ['value' => 'Need for blood transfusion'],
            ['value' => 'Infection or perforation'],
            ['value' => 'Sedation-related complications'],
            ['value' => 'Emergency surgical risks in severe cases'],
        ],
                'long_term_outlook' => 'Early and effective management of GI bleeding improves survival, prevents complications, and supports long-term gastrointestinal health.',
                'conclusion' => '',
                'seo_title' => 'Endoscopic / Surgical Management of GI Bleed',
                'seo_description' => 'Endoscopic and surgical management of gastrointestinal bleeding involves emergency procedures to identify and stop bleeding within the digestive tract. Prompt treatment is essential to prevent life-threatening blood loss.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
