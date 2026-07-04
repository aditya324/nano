<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TreatmentofLupusNephritisConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Treatment of Lupus Nephritis')],
            [
                'name' => 'Treatment of Lupus Nephritis',
                'slug' => Str::slug('Treatment of Lupus Nephritis'),
                'h1' => 'Treatment of Lupus Nephritis',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Treatment of lupus nephritis is a specialized nephrology and autoimmune disease management program designed to control kidney inflammation caused by systemic lupus erythematosus (SLE).',
                'about_more' => 'Lupus nephritis occurs when the immune system attacks kidney tissues, leading to inflammation, protein leakage, and progressive kidney damage. Early diagnosis and aggressive treatment are important to prevent kidney failure.',
                'overview' => 'Treatment commonly includes: Immunosuppressive medications Steroid therapy Blood pressure control Kidney function monitoring Proteinuria management Lifestyle and dietary counseling Patients undergo regular: Blood tests Urine examinations Autoimmune marker monitoring Kidney imaging Doctors tailor treatment based on disease severity, biopsy findings, and response to therapy. Long-term monitoring is essential because lupus nephritis may relapse.',
                'symptoms' => [
            ['value' => 'Swelling of face or legs'],
            ['value' => 'Protein or blood in urine'],
            ['value' => 'High blood pressure'],
            ['value' => 'Fatigue'],
            ['value' => 'Reduced kidney function'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Chronic kidney disease'],
            ['value' => 'Kidney failure'],
            ['value' => 'Severe autoimmune flare-ups'],
            ['value' => 'Infection from immunosuppressive therapy'],
            ['value' => 'Cardiovascular complications'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Continue medications regularly'],
            ['value' => 'Attend frequent follow-up visits'],
            ['value' => 'Monitor blood pressure carefully'],
            ['value' => 'Maintain healthy diet and hydration'],
            ['value' => 'Report worsening swelling or fever immediately'],
        ],
                'recovery' => 'Modern lupus nephritis treatment significantly improves kidney preservation and patient survival. Long-term nephrology and rheumatology care help reduce relapses and maintain stable kidney function.',
                'sort_order' => 29,
                'is_active' => true,
                'meta_title' => 'Treatment of Lupus Nephritis',
                'meta_description' => 'Treatment of lupus nephritis is a specialized nephrology and autoimmune disease management program designed to control kidney inflammation caused by systemic lu',
                'meta_keywords' => '',
            ]
        );
    }
}
