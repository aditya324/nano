<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PulmonaryHypertensionConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Pulmonary Hypertension')],
            [
                'name' => 'Pulmonary Hypertension',
                'slug' => Str::slug('Pulmonary Hypertension'),
                'h1' => 'Pulmonary Hypertension',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Pulmonary hypertension is high blood pressure within the arteries of the lungs, causing strain on the right side of the heart and reducing oxygen circulation.',
                'about_more' => '',
                'overview' => 'Pulmonary hypertension is high blood pressure within the arteries of the lungs, causing strain on the right side of the heart and reducing oxygen circulation.',
                'symptoms' => [
            ['value' => 'Shortness of breath during activity'],
            ['value' => 'Fatigue and weakness'],
            ['value' => 'Chest pain or pressure'],
            ['value' => 'Swelling of legs and ankles'],
            ['value' => 'Fainting episodes in advanced disease'],
        ],
                'causes' => [
            ['value' => 'Chronic lung diseases'],
            ['value' => 'Congenital heart disease'],
            ['value' => 'Left-sided heart failure'],
            ['value' => 'Blood clots in lung vessels'],
            ['value' => 'Autoimmune and connective tissue disorders'],
        ],
                'risks' => [
            ['value' => 'Right-sided heart failure'],
            ['value' => 'Severe oxygen deficiency'],
            ['value' => 'Reduced physical activity tolerance'],
            ['value' => 'Arrhythmias and sudden cardiac events'],
            ['value' => 'Progressive respiratory failure'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Echocardiography and pulmonary pressure assessment'],
            ['value' => 'Oxygen therapy and pulmonary medications'],
            ['value' => 'Diuretics and heart-supportive treatment'],
            ['value' => 'Anticoagulation when indicated'],
            ['value' => 'Advanced pulmonary vascular therapies'],
        ],
                'recovery' => 'Although pulmonary hypertension is often chronic, early treatment can improve symptoms, exercise tolerance, and long-term survival.',
                'sort_order' => 17,
                'is_active' => true,
                'meta_title' => 'Pulmonary Hypertension',
                'meta_description' => 'Pulmonary hypertension is high blood pressure within the arteries of the lungs, causing strain on the right side of the heart and reducing oxygen circulation.',
                'meta_keywords' => '',
            ]
        );
    }
}
