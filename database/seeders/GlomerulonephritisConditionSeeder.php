<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class GlomerulonephritisConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Glomerulonephritis')],
            [
                'name' => 'Glomerulonephritis',
                'slug' => Str::slug('Glomerulonephritis'),
                'h1' => 'Glomerulonephritis',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Glomerulonephritis is inflammation of the glomeruli, the tiny filtering units inside the kidneys. This condition can occur suddenly or develop gradually and may result from infections, autoimmune diseases, or immune system disorders.',
                'about_more' => '',
                'overview' => 'Glomerulonephritis is inflammation of the glomeruli, the tiny filtering units inside the kidneys. This condition can occur suddenly or develop gradually and may result from infections, autoimmune diseases, or immune system disorders.',
                'symptoms' => [
            ['value' => 'Blood in urine causing reddish or cola-colored urine'],
            ['value' => 'Swelling of face, hands, or legs'],
            ['value' => 'High blood pressure'],
            ['value' => 'Reduced urine output'],
            ['value' => 'Fatigue and weakness'],
        ],
                'causes' => [
            ['value' => 'Streptococcal throat or skin infections'],
            ['value' => 'Autoimmune diseases such as lupus'],
            ['value' => 'Immune system abnormalities'],
            ['value' => 'Viral infections including hepatitis'],
            ['value' => 'Genetic or hereditary kidney conditions'],
        ],
                'risks' => [
            ['value' => 'Chronic kidney disease progression'],
            ['value' => 'Severe hypertension'],
            ['value' => 'Nephrotic syndrome development'],
            ['value' => 'Acute kidney injury'],
            ['value' => 'Permanent kidney damage in severe cases'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Treatment of underlying infections or autoimmune disorders'],
            ['value' => 'Blood pressure control medications'],
            ['value' => 'Steroids or immune-suppressing drugs'],
            ['value' => 'Salt and fluid restriction'],
            ['value' => 'Dialysis support if kidney function worsens severely'],
        ],
                'recovery' => 'Some cases recover completely with treatment, while others may progress slowly to chronic kidney disease. Early diagnosis and regular nephrology care improve outcomes significantly.',
                'sort_order' => 6,
                'is_active' => true,
                'meta_title' => 'Glomerulonephritis',
                'meta_description' => 'Glomerulonephritis is inflammation of the glomeruli, the tiny filtering units inside the kidneys. This condition can occur suddenly or develop gradually and may',
                'meta_keywords' => '',
            ]
        );
    }
}
