<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ChronicKidneyObstructionConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Chronic Kidney Obstruction')],
            [
                'name' => 'Chronic Kidney Obstruction',
                'slug' => Str::slug('Chronic Kidney Obstruction'),
                'h1' => 'Chronic Kidney Obstruction',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Chronic kidney obstruction is long-term blockage of urine flow that gradually damages kidney tissues and reduces kidney function. Obstruction may affect one or both kidneys and often develops slowly over time.',
                'about_more' => '',
                'overview' => 'Chronic kidney obstruction is long-term blockage of urine flow that gradually damages kidney tissues and reduces kidney function. Obstruction may affect one or both kidneys and often develops slowly over time.',
                'symptoms' => [
            ['value' => 'Flank or abdominal pain'],
            ['value' => 'Reduced urine flow or difficulty urinating'],
            ['value' => 'Recurrent urinary tract infections'],
            ['value' => 'Swelling and fluid retention'],
            ['value' => 'Blood in urine or kidney dysfunction'],
        ],
                'causes' => [
            ['value' => 'Kidney stones causing persistent blockage'],
            ['value' => 'Enlarged prostate in adults'],
            ['value' => 'Urinary tract strictures or scarring'],
            ['value' => 'Congenital urinary abnormalities'],
            ['value' => 'Tumors compressing urinary pathways'],
        ],
                'risks' => [
            ['value' => 'Progressive chronic kidney disease'],
            ['value' => 'Recurrent infections and kidney scarring'],
            ['value' => 'Hydronephrosis and kidney swelling'],
            ['value' => 'Permanent loss of kidney function'],
            ['value' => 'Need for dialysis in advanced obstruction'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Surgical removal or correction of obstruction'],
            ['value' => 'Stent placement or urinary drainage procedures'],
            ['value' => 'Antibiotic treatment for infections'],
            ['value' => 'Monitoring kidney function and imaging studies'],
            ['value' => 'Long-term urology and nephrology follow-up'],
        ],
                'recovery' => 'Kidney function often improves if obstruction is relieved early. Delayed treatment may result in irreversible kidney damage and long-term renal complications.',
                'sort_order' => 40,
                'is_active' => true,
                'meta_title' => 'Chronic Kidney Obstruction',
                'meta_description' => 'Chronic kidney obstruction is long-term blockage of urine flow that gradually damages kidney tissues and reduces kidney function. Obstruction may affect one or ',
                'meta_keywords' => '',
            ]
        );
    }
}
