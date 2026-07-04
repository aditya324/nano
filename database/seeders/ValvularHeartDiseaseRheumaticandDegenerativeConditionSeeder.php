<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ValvularHeartDiseaseRheumaticandDegenerativeConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Valvular Heart Disease (Rheumatic and Degenerative)')],
            [
                'name' => 'Valvular Heart Disease (Rheumatic and Degenerative)',
                'slug' => Str::slug('Valvular Heart Disease (Rheumatic and Degenerative)'),
                'h1' => 'Valvular Heart Disease (Rheumatic and Degenerative)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Valvular heart disease occurs when one or more heart valves become narrowed (stenosis) or leaky (regurgitation), affecting normal blood flow through the heart. Rheumatic fever and age-related degeneration are common causes.',
                'about_more' => '',
                'overview' => 'Valvular heart disease occurs when one or more heart valves become narrowed (stenosis) or leaky (regurgitation), affecting normal blood flow through the heart. Rheumatic fever and age-related degeneration are common causes.',
                'symptoms' => [
            ['value' => 'Shortness of breath'],
            ['value' => 'Chest pain or palpitations'],
            ['value' => 'Fatigue and reduced exercise tolerance'],
            ['value' => 'Swelling of legs or abdomen'],
            ['value' => 'Dizziness or fainting episodes'],
        ],
                'causes' => [
            ['value' => 'Rheumatic heart disease'],
            ['value' => 'Age-related valve degeneration'],
            ['value' => 'Congenital valve abnormalities'],
            ['value' => 'Infections affecting heart valves'],
            ['value' => 'Calcification and hypertension'],
        ],
                'risks' => [
            ['value' => 'Heart failure'],
            ['value' => 'Arrhythmias such as atrial fibrillation'],
            ['value' => 'Stroke from blood clot formation'],
            ['value' => 'Pulmonary hypertension'],
            ['value' => 'Sudden worsening of cardiac function'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Echocardiography and cardiac evaluation'],
            ['value' => 'Medications for symptom control'],
            ['value' => 'Anticoagulation when indicated'],
            ['value' => 'Valve repair procedures'],
            ['value' => 'Surgical or transcatheter valve replacement'],
        ],
                'recovery' => 'Early diagnosis and proper treatment help maintain heart function and reduce long-term complications.',
                'sort_order' => 10,
                'is_active' => true,
                'meta_title' => 'Valvular Heart Disease (Rheumatic and Degenerative)',
                'meta_description' => 'Valvular heart disease occurs when one or more heart valves become narrowed (stenosis) or leaky (regurgitation), affecting normal blood flow through the heart. ',
                'meta_keywords' => '',
            ]
        );
    }
}
