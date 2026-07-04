<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PediatricNephrologyCareCoordinationConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Pediatric Nephrology Care (Coordination)')],
            [
                'name' => 'Pediatric Nephrology Care (Coordination)',
                'slug' => Str::slug('Pediatric Nephrology Care (Coordination)'),
                'h1' => 'Pediatric Nephrology Care (Coordination)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Pediatric nephrology care coordination is a specialized healthcare service focused on the diagnosis, treatment, and long-term management of kidney diseases in infants, children, and adolescents.',
                'about_more' => 'Children with kidney disorders require specialized monitoring because kidney disease can affect growth, development, blood pressure, and long-term health outcomes. Coordinated pediatric nephrology care helps ensure comprehensive treatment and developmental support.',
                'overview' => 'The service includes: Kidney function evaluation Blood pressure monitoring Growth assessment Congenital kidney disorder management Pediatric dialysis coordination Nutritional support Medication management Common pediatric renal conditions include: Nephrotic syndrome Congenital kidney abnormalities Urinary reflux disorders Pediatric hypertension Acute kidney injury Pediatric nephrologists coordinate with pediatricians, dietitians, surgeons, and dialysis teams to provide multidisciplinary care. Family education and long-term developmental monitoring are essential components of treatment.',
                'symptoms' => [
            ['value' => 'Swelling of body or face'],
            ['value' => 'Blood or protein in urine'],
            ['value' => 'Poor growth'],
            ['value' => 'High blood pressure'],
            ['value' => 'Recurrent urinary infections'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Growth and developmental delay'],
            ['value' => 'Chronic kidney disease'],
            ['value' => 'Electrolyte imbalance'],
            ['value' => 'Hypertension complications'],
            ['value' => 'Need for dialysis or transplant'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Attend regular pediatric nephrology follow-ups'],
            ['value' => 'Monitor growth and blood pressure'],
            ['value' => 'Follow medication and dietary plans'],
            ['value' => 'Maintain hydration as advised'],
            ['value' => 'Report urinary or swelling changes promptly'],
        ],
                'recovery' => 'Early pediatric nephrology care improves kidney preservation and developmental outcomes in children with renal disease. Continuous monitoring and family-centered care support healthier long-term growth and quality of life.',
                'sort_order' => 34,
                'is_active' => true,
                'meta_title' => 'Pediatric Nephrology Care (Coordination)',
                'meta_description' => 'Pediatric nephrology care coordination is a specialized healthcare service focused on the diagnosis, treatment, and long-term management of kidney diseases in i',
                'meta_keywords' => '',
            ]
        );
    }
}
