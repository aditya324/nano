<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AcuteMyocardialInfarctionSTEMINSTEMIConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Acute Myocardial Infarction (STEMI / NSTEMI)')],
            [
                'name' => 'Acute Myocardial Infarction (STEMI / NSTEMI)',
                'slug' => Str::slug('Acute Myocardial Infarction (STEMI / NSTEMI)'),
                'h1' => 'Acute Myocardial Infarction (STEMI / NSTEMI)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Acute Myocardial Infarction, commonly called a heart attack, occurs when blood flow to a portion of the heart muscle is suddenly blocked. STEMI and NSTEMI are major types of heart attacks differentiated by ECG findings and severity of artery blockage.',
                'about_more' => '',
                'overview' => 'Acute Myocardial Infarction, commonly called a heart attack, occurs when blood flow to a portion of the heart muscle is suddenly blocked. STEMI and NSTEMI are major types of heart attacks differentiated by ECG findings and severity of artery blockage.',
                'symptoms' => [
            ['value' => 'Severe chest pain or heaviness'],
            ['value' => 'Pain spreading to left arm, jaw, or back'],
            ['value' => 'Shortness of breath'],
            ['value' => 'Sweating, nausea, and vomiting'],
            ['value' => 'Sudden weakness or dizziness'],
        ],
                'causes' => [
            ['value' => 'Rupture of atherosclerotic plaque'],
            ['value' => 'Complete or partial coronary artery blockage'],
            ['value' => 'Smoking and uncontrolled hypertension'],
            ['value' => 'Diabetes and high cholesterol'],
            ['value' => 'Emotional stress or heavy physical exertion'],
        ],
                'risks' => [
            ['value' => 'Heart failure'],
            ['value' => 'Life-threatening arrhythmias'],
            ['value' => 'Cardiogenic shock'],
            ['value' => 'Sudden cardiac arrest'],
            ['value' => 'Permanent heart muscle damage'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Emergency ECG and cardiac enzyme testing'],
            ['value' => 'Clot-dissolving medications when indicated'],
            ['value' => 'Emergency angioplasty and stenting'],
            ['value' => 'Antiplatelet and anticoagulant therapy'],
            ['value' => 'Intensive cardiac monitoring and rehabilitation'],
        ],
                'recovery' => 'Rapid treatment significantly improves survival. Long-term medications, lifestyle changes, and cardiac rehabilitation reduce recurrence risk.',
                'sort_order' => 2,
                'is_active' => true,
                'meta_title' => 'Acute Myocardial Infarction (STEMI / NSTEMI)',
                'meta_description' => 'Acute Myocardial Infarction, commonly called a heart attack, occurs when blood flow to a portion of the heart muscle is suddenly blocked. STEMI and NSTEMI are m',
                'meta_keywords' => '',
            ]
        );
    }
}
