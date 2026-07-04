<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CongenitalRenalAnomaliesConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Congenital Renal Anomalies')],
            [
                'name' => 'Congenital Renal Anomalies',
                'slug' => Str::slug('Congenital Renal Anomalies'),
                'h1' => 'Congenital Renal Anomalies',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Congenital renal anomalies are structural abnormalities of the kidneys or urinary tract present at birth. These abnormalities may affect kidney size, position, drainage, or function and can range from mild defects to severe life-threatening conditions.',
                'about_more' => '',
                'overview' => 'Congenital renal anomalies are structural abnormalities of the kidneys or urinary tract present at birth. These abnormalities may affect kidney size, position, drainage, or function and can range from mild defects to severe life-threatening conditions.',
                'symptoms' => [
            ['value' => 'Recurrent urinary tract infections'],
            ['value' => 'Poor urine flow or urinary obstruction'],
            ['value' => 'Swelling or abdominal mass in infants'],
            ['value' => 'High blood pressure'],
            ['value' => 'Poor growth or kidney dysfunction'],
        ],
                'causes' => [
            ['value' => 'Abnormal fetal kidney development'],
            ['value' => 'Genetic or chromosomal abnormalities'],
            ['value' => 'Family history of congenital kidney disease'],
            ['value' => 'Urinary tract developmental defects'],
            ['value' => 'Unknown prenatal developmental disturbances'],
        ],
                'risks' => [
            ['value' => 'Recurrent urinary infections'],
            ['value' => 'Kidney scarring and chronic kidney disease'],
            ['value' => 'High blood pressure'],
            ['value' => 'Reduced kidney function over time'],
            ['value' => 'Kidney failure in severe anomalies'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Prenatal and postnatal imaging evaluation'],
            ['value' => 'Surgical correction of urinary obstruction'],
            ['value' => 'Antibiotic prevention for recurrent infections'],
            ['value' => 'Long-term kidney function monitoring'],
            ['value' => 'Specialized pediatric nephrology care'],
        ],
                'recovery' => 'Many congenital renal anomalies can be managed successfully with early diagnosis and treatment. Regular follow-up helps preserve kidney function and reduce long-term complications.',
                'sort_order' => 25,
                'is_active' => true,
                'meta_title' => 'Congenital Renal Anomalies',
                'meta_description' => 'Congenital renal anomalies are structural abnormalities of the kidneys or urinary tract present at birth. These abnormalities may affect kidney size, position, ',
                'meta_keywords' => '',
            ]
        );
    }
}
