<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AnemiaManagementinCKDConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Anemia Management in CKD')],
            [
                'name' => 'Anemia Management in CKD',
                'slug' => Str::slug('Anemia Management in CKD'),
                'h1' => 'Anemia Management in CKD',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Anemia management in chronic kidney disease (CKD) is a specialized nephrology treatment aimed at correcting low hemoglobin levels caused by reduced kidney function.',
                'about_more' => 'Healthy kidneys produce erythropoietin, a hormone that stimulates red blood cell production. In CKD, decreased erythropoietin production commonly leads to anemia. Treating anemia improves energy levels, oxygen delivery, heart health, and overall quality of life.',
                'overview' => 'The management plan includes: Hemoglobin monitoring Iron studies Nutritional assessment Erythropoietin therapy Iron supplementation Treatment of underlying deficiencies Patients may receive: Oral iron IV iron therapy Erythropoietin injections Blood transfusion in severe cases Doctors monitor blood counts regularly to avoid complications from both untreated anemia and excessive correction. The treatment approach is individualized based on kidney function and anemia severity.',
                'symptoms' => [
            ['value' => 'Fatigue and weakness'],
            ['value' => 'Shortness of breath'],
            ['value' => 'Pale skin'],
            ['value' => 'Dizziness'],
            ['value' => 'Reduced exercise tolerance'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Heart strain and enlargement'],
            ['value' => 'Severe fatigue'],
            ['value' => 'Reduced oxygen delivery'],
            ['value' => 'Poor quality of life'],
            ['value' => 'Increased hospitalization risk'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Attend regular blood testing appointments'],
            ['value' => 'Follow iron and medication schedules carefully'],
            ['value' => 'Maintain kidney-friendly nutrition'],
            ['value' => 'Report worsening fatigue or breathlessness'],
            ['value' => 'Continue nephrology follow-up consistently'],
        ],
                'recovery' => 'Proper anemia management significantly improves energy, cardiovascular health, and daily functioning in CKD patients. Modern therapies and close monitoring continue to improve long-term survival and quality of life.',
                'sort_order' => 9,
                'is_active' => true,
                'meta_title' => 'Anemia Management in CKD',
                'meta_description' => 'Anemia management in chronic kidney disease (CKD) is a specialized nephrology treatment aimed at correcting low hemoglobin levels caused by reduced kidney funct',
                'meta_keywords' => '',
            ]
        );
    }
}
