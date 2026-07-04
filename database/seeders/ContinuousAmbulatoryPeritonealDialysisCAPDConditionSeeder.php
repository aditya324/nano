<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ContinuousAmbulatoryPeritonealDialysisCAPDConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Continuous Ambulatory Peritoneal Dialysis (CAPD)')],
            [
                'name' => 'Continuous Ambulatory Peritoneal Dialysis (CAPD)',
                'slug' => Str::slug('Continuous Ambulatory Peritoneal Dialysis (CAPD)'),
                'h1' => 'Continuous Ambulatory Peritoneal Dialysis (CAPD)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Continuous ambulatory peritoneal dialysis (CAPD) is a home-based dialysis treatment that uses the abdominal lining to continuously remove waste products and excess fluids from the body.',
                'about_more' => 'Unlike machine-based dialysis, CAPD allows patients to perform dialysis manually several times daily while continuing many normal activities. This therapy provides an alternative to hemodialysis for selected patients with kidney failure.',
                'overview' => 'CAPD involves: Placement of a peritoneal dialysis catheter Instillation of dialysis fluid into the abdomen Waste filtration through the peritoneal membrane Regular fluid exchanges throughout the day The treatment offers: Greater independence Flexible scheduling Home-based care Gentle continuous filtration Patients and caregivers receive detailed training regarding sterile procedures, infection prevention, fluid exchange techniques, and complication monitoring. Regular nephrology follow-up is essential for maintaining treatment effectiveness.',
                'symptoms' => [
            ['value' => 'End-stage kidney disease'],
            ['value' => 'Need for long-term dialysis'],
            ['value' => 'Fluid overload'],
            ['value' => 'Fatigue and weakness'],
            ['value' => 'Elevated waste products in blood'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Peritonitis infection'],
            ['value' => 'Catheter blockage'],
            ['value' => 'Hernia formation'],
            ['value' => 'Fluid leakage'],
            ['value' => 'Inadequate dialysis clearance'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Perform exchanges using sterile technique'],
            ['value' => 'Monitor catheter site daily'],
            ['value' => 'Attend regular dialysis assessments'],
            ['value' => 'Follow fluid and diet recommendations'],
            ['value' => 'Report abdominal pain or cloudy fluid immediately'],
        ],
                'recovery' => 'CAPD offers effective long-term kidney replacement therapy with increased flexibility and independence. With proper training and monitoring, many patients maintain stable health and improved daily functioning.',
                'sort_order' => 19,
                'is_active' => true,
                'meta_title' => 'Continuous Ambulatory Peritoneal Dialysis (CAPD)',
                'meta_description' => 'Continuous ambulatory peritoneal dialysis (CAPD) is a home-based dialysis treatment that uses the abdominal lining to continuously remove waste products and exc',
                'meta_keywords' => '',
            ]
        );
    }
}
