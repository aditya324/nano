<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EmergencyThrombolysisasperSTEMIprotocolsSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Emergency Thrombolysis (as per STEMI protocols)')],
            [
                'title' => 'Emergency Thrombolysis (as per STEMI protocols)',
                'slug' => Str::slug('Emergency Thrombolysis (as per STEMI protocols)'),
                'introduction' => 'Emergency thrombolysis is a life-saving treatment used to dissolve blood clots causing acute heart attacks, particularly ST-Elevation Myocardial Infarction (STEMI). The therapy restores blood flow to the heart muscle and reduces permanent heart damage. Rapid treatment significantly improves survival outcomes.',
                'what_is' => 'Thrombolytic medications are administered urgently in eligible patients when immediate angioplasty is not available. Common thrombolytic agents include: Streptokinase Tenecteplase Alteplase The treatment is used for: Acute STEMI heart attack Selected clot-related emergencies Early administration is critical and is often performed in emergency cardiac care settings under strict protocols. Continuous monitoring is required during and after treatment.',
                'symptoms' => [
            ['value' => 'Severe chest pain'],
            ['value' => 'Sweating and breathlessness'],
            ['value' => 'Pain radiating to arm or jaw'],
            ['value' => 'Sudden weakness or collapse'],
            ['value' => 'ECG evidence of STEMI'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Serious bleeding complications'],
            ['value' => 'Stroke due to bleeding'],
            ['value' => 'Allergic reactions'],
            ['value' => 'Low blood pressure'],
            ['value' => 'Incomplete clot dissolution'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Continue intensive cardiac monitoring'],
            ['value' => 'Take prescribed cardiac medications consistently'],
            ['value' => 'Avoid smoking and unhealthy diet'],
            ['value' => 'Attend cardiac rehabilitation and follow-up visits'],
            ['value' => 'Seek immediate care for recurrent chest pain'],
        ],
                'surgery_risks' => [
            ['value' => 'Serious bleeding complications'],
            ['value' => 'Stroke due to bleeding'],
            ['value' => 'Allergic reactions'],
            ['value' => 'Low blood pressure'],
            ['value' => 'Incomplete clot dissolution'],
        ],
                'long_term_outlook' => 'Successful emergency thrombolysis reduces heart muscle damage, improves survival, and supports better long-term heart function after acute heart attack treatment.',
                'conclusion' => '',
                'seo_title' => 'Emergency Thrombolysis (as per STEMI protocols)',
                'seo_description' => 'Emergency thrombolysis is a life-saving treatment used to dissolve blood clots causing acute heart attacks, particularly ST-Elevation Myocardial Infarction (STEMI). The therapy restores blood flow to the heart muscle and reduces permanent heart damage. Rapid treatment significantly improves survival outcomes.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
