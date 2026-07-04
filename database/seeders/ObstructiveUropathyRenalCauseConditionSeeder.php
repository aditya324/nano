<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ObstructiveUropathyRenalCauseConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Obstructive Uropathy (Renal Cause)')],
            [
                'name' => 'Obstructive Uropathy (Renal Cause)',
                'slug' => Str::slug('Obstructive Uropathy (Renal Cause)'),
                'h1' => 'Obstructive Uropathy (Renal Cause)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Obstructive uropathy occurs when urine flow is blocked at any point in the urinary tract, causing pressure buildup and kidney damage. The obstruction may be partial or complete and can affect one or both kidneys.',
                'about_more' => '',
                'overview' => 'Obstructive uropathy occurs when urine flow is blocked at any point in the urinary tract, causing pressure buildup and kidney damage. The obstruction may be partial or complete and can affect one or both kidneys.',
                'symptoms' => [
            ['value' => 'Reduced urine output or urinary difficulty'],
            ['value' => 'Flank or abdominal pain'],
            ['value' => 'Swelling and fluid retention'],
            ['value' => 'Blood in urine'],
            ['value' => 'Recurrent urinary infections or fever'],
        ],
                'causes' => [
            ['value' => 'Kidney stones causing blockage'],
            ['value' => 'Enlarged prostate in adults'],
            ['value' => 'Tumors compressing urinary pathways'],
            ['value' => 'Congenital urinary tract abnormalities'],
            ['value' => 'Scar tissue or strictures in urinary tract'],
        ],
                'risks' => [
            ['value' => 'Permanent kidney damage'],
            ['value' => 'Recurrent urinary tract infections'],
            ['value' => 'Acute kidney injury'],
            ['value' => 'Severe pain and urinary retention'],
            ['value' => 'Chronic kidney disease if untreated'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Removal of urinary obstruction'],
            ['value' => 'Catheterization or stent placement'],
            ['value' => 'Surgical correction when required'],
            ['value' => 'Antibiotics for associated infections'],
            ['value' => 'Kidney function monitoring and supportive care'],
        ],
                'recovery' => 'Early relief of obstruction usually results in significant recovery of kidney function. Delayed treatment increases the risk of permanent kidney injury and recurrent complications.',
                'sort_order' => 15,
                'is_active' => true,
                'meta_title' => 'Obstructive Uropathy (Renal Cause)',
                'meta_description' => 'Obstructive uropathy occurs when urine flow is blocked at any point in the urinary tract, causing pressure buildup and kidney damage. The obstruction may be par',
                'meta_keywords' => '',
            ]
        );
    }
}
