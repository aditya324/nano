<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class NephriticSyndromeConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Nephritic Syndrome')],
            [
                'name' => 'Nephritic Syndrome',
                'slug' => Str::slug('Nephritic Syndrome'),
                'h1' => 'Nephritic Syndrome',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Nephritic syndrome is a kidney condition involving inflammation of the glomeruli, resulting in blood in urine, high blood pressure, reduced kidney function, and fluid retention.',
                'about_more' => '',
                'overview' => 'Nephritic syndrome is a kidney condition involving inflammation of the glomeruli, resulting in blood in urine, high blood pressure, reduced kidney function, and fluid retention.',
                'symptoms' => [
            ['value' => 'Dark or bloody urine'],
            ['value' => 'Swelling of face and legs'],
            ['value' => 'Reduced urine output'],
            ['value' => 'High blood pressure'],
            ['value' => 'Fatigue and weakness'],
        ],
                'causes' => [
            ['value' => 'Post-infectious glomerulonephritis'],
            ['value' => 'Autoimmune kidney diseases'],
            ['value' => 'Lupus and vasculitis disorders'],
            ['value' => 'Viral or bacterial infections'],
            ['value' => 'Immune-mediated inflammation of kidneys'],
        ],
                'risks' => [
            ['value' => 'Acute kidney injury'],
            ['value' => 'Severe hypertension complications'],
            ['value' => 'Chronic kidney disease progression'],
            ['value' => 'Electrolyte imbalance'],
            ['value' => 'Fluid overload affecting lungs and heart'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Blood pressure and fluid control'],
            ['value' => 'Antibiotics for underlying infections'],
            ['value' => 'Corticosteroids or immunosuppressive therapy'],
            ['value' => 'Restricted salt and fluid intake'],
            ['value' => 'Dialysis support in severe kidney dysfunction'],
        ],
                'recovery' => 'Many patients improve with early treatment, especially when the underlying cause is controlled. Severe or untreated cases may lead to chronic kidney disease.',
                'sort_order' => 8,
                'is_active' => true,
                'meta_title' => 'Nephritic Syndrome',
                'meta_description' => 'Nephritic syndrome is a kidney condition involving inflammation of the glomeruli, resulting in blood in urine, high blood pressure, reduced kidney function, and',
                'meta_keywords' => '',
            ]
        );
    }
}
