<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class InfectionManagementinDialysisPatientsConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Infection Management in Dialysis Patients')],
            [
                'name' => 'Infection Management in Dialysis Patients',
                'slug' => Str::slug('Infection Management in Dialysis Patients'),
                'h1' => 'Infection Management in Dialysis Patients',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Infection management in dialysis patients is a specialized nephrology service focused on preventing, diagnosing, and treating infections that commonly occur in individuals receiving dialysis treatment.',
                'about_more' => 'Dialysis patients are more vulnerable to infections because of weakened immunity, frequent vascular access use, and repeated healthcare exposure. Prompt infection management is essential to prevent severe complications and hospitalization.',
                'overview' => 'The management program includes: Infection screening Blood culture testing Antibiotic therapy Dialysis access care Vaccination support Hygiene education Common infections include: Dialysis catheter infections Bloodstream infections Pneumonia Urinary tract infections Skin infections Doctors carefully monitor: Fever Access site condition Blood counts Inflammatory markers Dialysis function Early treatment and preventive measures help reduce serious complications.',
                'symptoms' => [
            ['value' => 'Fever or chills'],
            ['value' => 'Redness around dialysis access'],
            ['value' => 'Weakness or fatigue'],
            ['value' => 'Pus or discharge at access site'],
            ['value' => 'Low blood pressure during infection'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Bloodstream infection'],
            ['value' => 'Sepsis'],
            ['value' => 'Access failure'],
            ['value' => 'Hospitalization'],
            ['value' => 'Increased mortality risk'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Maintain excellent access hygiene'],
            ['value' => 'Attend dialysis sessions regularly'],
            ['value' => 'Report fever immediately'],
            ['value' => 'Follow antibiotic treatment completely'],
            ['value' => 'Continue routine infection screening'],
        ],
                'recovery' => 'Strong infection prevention and early treatment significantly improve dialysis safety and patient survival. Modern dialysis infection-control protocols continue to reduce complications and improve quality of care.',
                'sort_order' => 38,
                'is_active' => true,
                'meta_title' => 'Infection Management in Dialysis Patients',
                'meta_description' => 'Infection management in dialysis patients is a specialized nephrology service focused on preventing, diagnosing, and treating infections that commonly occur in ',
                'meta_keywords' => '',
            ]
        );
    }
}
