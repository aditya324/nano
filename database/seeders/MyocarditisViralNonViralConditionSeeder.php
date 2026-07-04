<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MyocarditisViralNonViralConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Myocarditis (Viral / Non-Viral)')],
            [
                'name' => 'Myocarditis (Viral / Non-Viral)',
                'slug' => Str::slug('Myocarditis (Viral / Non-Viral)'),
                'h1' => 'Myocarditis (Viral / Non-Viral)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Myocarditis is inflammation of the heart muscle caused by viral infections, autoimmune diseases, toxins, or immune reactions. Inflammation can weaken the heart and disrupt its electrical activity.',
                'about_more' => '',
                'overview' => 'Myocarditis is inflammation of the heart muscle caused by viral infections, autoimmune diseases, toxins, or immune reactions. Inflammation can weaken the heart and disrupt its electrical activity.',
                'symptoms' => [
            ['value' => 'Chest pain or discomfort'],
            ['value' => 'Shortness of breath'],
            ['value' => 'Fatigue and weakness'],
            ['value' => 'Palpitations or irregular heartbeat'],
            ['value' => 'Fever or flu-like symptoms before cardiac complaints'],
        ],
                'causes' => [
            ['value' => 'Viral infections such as influenza or COVID-19'],
            ['value' => 'Autoimmune disorders'],
            ['value' => 'Bacterial or fungal infections'],
            ['value' => 'Drug or toxin exposure'],
            ['value' => 'Immune-mediated inflammatory reactions'],
        ],
                'risks' => [
            ['value' => 'Heart failure and cardiomyopathy'],
            ['value' => 'Dangerous arrhythmias'],
            ['value' => 'Sudden cardiac death'],
            ['value' => 'Cardiogenic shock in severe cases'],
            ['value' => 'Chronic weakening of the heart muscle'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'ECG and cardiac imaging evaluation'],
            ['value' => 'Anti-inflammatory and supportive therapy'],
            ['value' => 'Medications for heart failure management'],
            ['value' => 'Treatment of infections when identified'],
            ['value' => 'Activity restriction and cardiac monitoring'],
        ],
                'recovery' => 'Many patients recover completely with treatment and rest. Severe myocarditis may lead to long-term heart damage requiring ongoing care.',
                'sort_order' => 23,
                'is_active' => true,
                'meta_title' => 'Myocarditis (Viral / Non-Viral)',
                'meta_description' => 'Myocarditis is inflammation of the heart muscle caused by viral infections, autoimmune diseases, toxins, or immune reactions. Inflammation can weaken the heart ',
                'meta_keywords' => '',
            ]
        );
    }
}
