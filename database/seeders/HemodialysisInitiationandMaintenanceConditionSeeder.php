<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class HemodialysisInitiationandMaintenanceConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Hemodialysis Initiation and Maintenance')],
            [
                'name' => 'Hemodialysis Initiation and Maintenance',
                'slug' => Str::slug('Hemodialysis Initiation and Maintenance'),
                'h1' => 'Hemodialysis Initiation and Maintenance',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Hemodialysis initiation and maintenance is a life-supporting nephrology treatment used when kidneys are unable to adequately remove waste products, toxins, and excess fluids from the body.',
                'about_more' => 'Hemodialysis uses a specialized machine and filter to clean the blood and maintain safe body chemistry in patients with severe kidney failure. This treatment is essential for sustaining life in advanced chronic kidney disease and certain acute kidney injuries.',
                'overview' => 'The process involves: Vascular access placement Blood filtration through a dialysis machine Fluid removal Electrolyte balance correction Continuous medical monitoring Dialysis sessions are typically performed multiple times each week under specialist supervision. The nephrology team monitors: Blood pressure Weight changes Electrolytes Hemoglobin Dialysis efficiency Patients also receive dietary counseling, anemia management, and infection prevention support during ongoing dialysis care.',
                'symptoms' => [
            ['value' => 'Severe kidney failure'],
            ['value' => 'Fluid overload'],
            ['value' => 'Difficulty breathing'],
            ['value' => 'Persistent nausea'],
            ['value' => 'Dangerous electrolyte abnormalities'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Low blood pressure during dialysis'],
            ['value' => 'Infection of dialysis access'],
            ['value' => 'Muscle cramps'],
            ['value' => 'Blood clot formation'],
            ['value' => 'Fatigue after sessions'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Attend all dialysis sessions regularly'],
            ['value' => 'Protect dialysis access sites carefully'],
            ['value' => 'Follow fluid and dietary restrictions'],
            ['value' => 'Monitor for fever or swelling'],
            ['value' => 'Maintain regular nephrology reviews'],
        ],
                'recovery' => 'Maintenance hemodialysis helps sustain life and improve symptom control in patients with kidney failure. With proper dialysis care, many patients achieve improved daily functioning and better long-term survival.',
                'sort_order' => 15,
                'is_active' => true,
                'meta_title' => 'Hemodialysis Initiation and Maintenance',
                'meta_description' => 'Hemodialysis initiation and maintenance is a life-supporting nephrology treatment used when kidneys are unable to adequately remove waste products, toxins, and ',
                'meta_keywords' => '',
            ]
        );
    }
}
