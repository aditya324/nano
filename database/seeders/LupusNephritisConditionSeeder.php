<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class LupusNephritisConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Lupus Nephritis')],
            [
                'name' => 'Lupus Nephritis',
                'slug' => Str::slug('Lupus Nephritis'),
                'h1' => 'Lupus Nephritis',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Lupus nephritis is inflammation and damage of the kidneys caused by systemic lupus erythematosus (SLE), an autoimmune disease in which the immune system attacks healthy tissues. Kidney involvement is one of the most serious complications of lupus.',
                'about_more' => '',
                'overview' => 'Lupus nephritis is inflammation and damage of the kidneys caused by systemic lupus erythematosus (SLE), an autoimmune disease in which the immune system attacks healthy tissues. Kidney involvement is one of the most serious complications of lupus.',
                'symptoms' => [
            ['value' => 'Swelling of legs, face, or hands'],
            ['value' => 'Protein or blood in urine'],
            ['value' => 'High blood pressure'],
            ['value' => 'Fatigue and weakness'],
            ['value' => 'Reduced kidney function in severe disease'],
        ],
                'causes' => [
            ['value' => 'Autoimmune attack on kidney tissues'],
            ['value' => 'Systemic lupus erythematosus activity'],
            ['value' => 'Genetic and hormonal influences'],
            ['value' => 'Immune system abnormalities'],
            ['value' => 'Environmental triggers such as infections or stress'],
        ],
                'risks' => [
            ['value' => 'Chronic kidney disease progression'],
            ['value' => 'Kidney failure requiring dialysis'],
            ['value' => 'Severe hypertension'],
            ['value' => 'Increased infection risk due to immune suppression'],
            ['value' => 'Cardiovascular complications'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Corticosteroids and immunosuppressive medications'],
            ['value' => 'Blood pressure and proteinuria control'],
            ['value' => 'Regular kidney biopsy and laboratory monitoring'],
            ['value' => 'Dietary salt and fluid management'],
            ['value' => 'Dialysis or transplant in advanced kidney failure'],
        ],
                'recovery' => 'Many patients achieve disease control with early treatment and long-term monitoring. Proper lupus management greatly reduces kidney damage and improves survival.',
                'sort_order' => 17,
                'is_active' => true,
                'meta_title' => 'Lupus Nephritis',
                'meta_description' => 'Lupus nephritis is inflammation and damage of the kidneys caused by systemic lupus erythematosus (SLE), an autoimmune disease in which the immune system attacks',
                'meta_keywords' => '',
            ]
        );
    }
}
