<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ArrhythmiasAtrialFibrillationAtrialFlutterConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Arrhythmias (Atrial Fibrillation, Atrial Flutter)')],
            [
                'name' => 'Arrhythmias (Atrial Fibrillation, Atrial Flutter)',
                'slug' => Str::slug('Arrhythmias (Atrial Fibrillation, Atrial Flutter)'),
                'h1' => 'Arrhythmias (Atrial Fibrillation, Atrial Flutter)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Arrhythmias are abnormal heart rhythms caused by disturbances in the heart’s electrical system. Atrial fibrillation and atrial flutter are common rhythm disorders that may increase stroke risk and reduce heart efficiency.',
                'about_more' => '',
                'overview' => 'Arrhythmias are abnormal heart rhythms caused by disturbances in the heart’s electrical system. Atrial fibrillation and atrial flutter are common rhythm disorders that may increase stroke risk and reduce heart efficiency.',
                'symptoms' => [
            ['value' => 'Palpitations or irregular heartbeat'],
            ['value' => 'Dizziness or fainting'],
            ['value' => 'Shortness of breath'],
            ['value' => 'Fatigue and weakness'],
            ['value' => 'Chest discomfort'],
        ],
                'causes' => [
            ['value' => 'Hypertension and heart disease'],
            ['value' => 'Thyroid disorders'],
            ['value' => 'Excess caffeine or alcohol'],
            ['value' => 'Electrolyte imbalance'],
            ['value' => 'Stress and aging-related heart changes'],
        ],
                'risks' => [
            ['value' => 'Stroke due to blood clots'],
            ['value' => 'Heart failure worsening'],
            ['value' => 'Reduced cardiac output'],
            ['value' => 'Sudden cardiac arrest in severe cases'],
            ['value' => 'Recurrent hospital admissions'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'ECG and rhythm monitoring'],
            ['value' => 'Rate and rhythm control medications'],
            ['value' => 'Blood thinners to prevent stroke'],
            ['value' => 'Electrical cardioversion'],
            ['value' => 'Catheter ablation procedures'],
        ],
                'recovery' => 'Many arrhythmias are manageable with medication and lifestyle changes. Early treatment reduces stroke and heart failure risk.',
                'sort_order' => 6,
                'is_active' => true,
                'meta_title' => 'Arrhythmias (Atrial Fibrillation, Atrial Flutter)',
                'meta_description' => 'Arrhythmias are abnormal heart rhythms caused by disturbances in the heart’s electrical system. Atrial fibrillation and atrial flutter are common rhythm disorde',
                'meta_keywords' => '',
            ]
        );
    }
}
