<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class IschemicNephropathyConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Ischemic Nephropathy')],
            [
                'name' => 'Ischemic Nephropathy',
                'slug' => Str::slug('Ischemic Nephropathy'),
                'h1' => 'Ischemic Nephropathy',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Ischemic nephropathy is kidney damage caused by reduced blood supply to the kidneys, usually due to narrowing or blockage of renal arteries. Long-term reduced circulation gradually impairs kidney function and may lead to chronic kidney disease.',
                'about_more' => '',
                'overview' => 'Ischemic nephropathy is kidney damage caused by reduced blood supply to the kidneys, usually due to narrowing or blockage of renal arteries. Long-term reduced circulation gradually impairs kidney function and may lead to chronic kidney disease.',
                'symptoms' => [
            ['value' => 'Progressive kidney dysfunction'],
            ['value' => 'High blood pressure'],
            ['value' => 'Fatigue and weakness'],
            ['value' => 'Swelling due to fluid retention'],
            ['value' => 'Reduced urine output in advanced disease'],
        ],
                'causes' => [
            ['value' => 'Severe renal artery stenosis'],
            ['value' => 'Atherosclerotic vascular disease'],
            ['value' => 'Diabetes and hypertension'],
            ['value' => 'Smoking and cardiovascular disease'],
            ['value' => 'Reduced blood circulation to kidneys'],
        ],
                'risks' => [
            ['value' => 'Chronic kidney disease progression'],
            ['value' => 'Severe hypertension complications'],
            ['value' => 'Heart attack and stroke risk'],
            ['value' => 'Kidney failure requiring dialysis'],
            ['value' => 'Reduced overall organ perfusion'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Control of blood pressure and cholesterol'],
            ['value' => 'Medications improving blood circulation'],
            ['value' => 'Angioplasty or vascular surgery if indicated'],
            ['value' => 'Lifestyle and dietary modifications'],
            ['value' => 'Dialysis support in severe kidney failure'],
        ],
                'recovery' => 'Early treatment may stabilize kidney function and reduce cardiovascular risk. Advanced disease may progress gradually despite treatment, requiring long-term nephrology care.',
                'sort_order' => 28,
                'is_active' => true,
                'meta_title' => 'Ischemic Nephropathy',
                'meta_description' => 'Ischemic nephropathy is kidney damage caused by reduced blood supply to the kidneys, usually due to narrowing or blockage of renal arteries. Long-term reduced c',
                'meta_keywords' => '',
            ]
        );
    }
}
