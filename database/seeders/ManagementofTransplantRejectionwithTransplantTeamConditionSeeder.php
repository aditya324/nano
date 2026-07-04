<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ManagementofTransplantRejectionwithTransplantTeamConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Management of Transplant Rejection (with Transplant Team)')],
            [
                'name' => 'Management of Transplant Rejection (with Transplant Team)',
                'slug' => Str::slug('Management of Transplant Rejection (with Transplant Team)'),
                'h1' => 'Management of Transplant Rejection (with Transplant Team)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Management of transplant rejection is a specialized nephrology and transplant care service focused on treating immune system attacks against a transplanted kidney.',
                'about_more' => 'Rejection can occur when the body recognizes the transplanted kidney as foreign and attempts to damage it. Early diagnosis and aggressive treatment are critical to preserve transplant function and prevent organ loss.',
                'overview' => 'Management includes: Kidney function monitoring Renal biopsy evaluation Immunosuppressive therapy adjustment Steroid pulse therapy Antibody treatment when required Doctors monitor: Creatinine levels Urine abnormalities Drug levels Immune markers Symptoms of rejection The transplant team coordinates care between nephrologists, transplant surgeons, pathologists, and immunology specialists. Close monitoring helps detect rejection early and improve treatment success.',
                'symptoms' => [
            ['value' => 'Reduced urine output'],
            ['value' => 'Swelling or weight gain'],
            ['value' => 'Fever'],
            ['value' => 'Elevated creatinine levels'],
            ['value' => 'Tenderness over transplant area'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Permanent transplant damage'],
            ['value' => 'Kidney failure recurrence'],
            ['value' => 'Severe infection from stronger immunosuppression'],
            ['value' => 'Hospitalization'],
            ['value' => 'Need for repeat transplantation'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Take all transplant medications consistently'],
            ['value' => 'Attend urgent follow-up visits when advised'],
            ['value' => 'Monitor urine output carefully'],
            ['value' => 'Report fever or swelling immediately'],
            ['value' => 'Maintain strict infection precautions'],
        ],
                'recovery' => 'Early treatment of transplant rejection can successfully preserve kidney function in many patients. Advances in transplant immunology and individualized therapy continue to improve long-term transplant survival.',
                'sort_order' => 37,
                'is_active' => true,
                'meta_title' => 'Management of Transplant Rejection (with Transplant Team)',
                'meta_description' => 'Management of transplant rejection is a specialized nephrology and transplant care service focused on treating immune system attacks against a transplanted kidn',
                'meta_keywords' => '',
            ]
        );
    }
}
