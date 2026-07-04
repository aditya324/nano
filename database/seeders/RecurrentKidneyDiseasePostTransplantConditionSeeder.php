<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RecurrentKidneyDiseasePostTransplantConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Recurrent Kidney Disease Post-Transplant')],
            [
                'name' => 'Recurrent Kidney Disease Post-Transplant',
                'slug' => Str::slug('Recurrent Kidney Disease Post-Transplant'),
                'h1' => 'Recurrent Kidney Disease Post-Transplant',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Recurrent kidney disease post-transplant occurs when the original kidney disease returns and affects the transplanted kidney. Some kidney disorders have a higher tendency to recur even after successful transplantation.',
                'about_more' => '',
                'overview' => 'Recurrent kidney disease post-transplant occurs when the original kidney disease returns and affects the transplanted kidney. Some kidney disorders have a higher tendency to recur even after successful transplantation.',
                'symptoms' => [
            ['value' => 'Protein or blood in urine'],
            ['value' => 'Swelling and fluid retention'],
            ['value' => 'Gradual decline in kidney function'],
            ['value' => 'High blood pressure'],
            ['value' => 'Fatigue and weakness'],
        ],
                'causes' => [
            ['value' => 'Recurrence of original glomerular disease'],
            ['value' => 'Autoimmune kidney disorders'],
            ['value' => 'Inadequate immune suppression'],
            ['value' => 'Genetic predisposition'],
            ['value' => 'Chronic immune-related injury to transplant kidney'],
        ],
                'risks' => [
            ['value' => 'Progressive transplant kidney damage'],
            ['value' => 'Chronic kidney dysfunction'],
            ['value' => 'Need for intensified immunosuppressive therapy'],
            ['value' => 'Loss of transplanted kidney'],
            ['value' => 'Return to dialysis in severe cases'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Kidney biopsy and detailed evaluation'],
            ['value' => 'Adjustment of immunosuppressive medications'],
            ['value' => 'Blood pressure and proteinuria control'],
            ['value' => 'Plasma exchange or immune therapy when needed'],
            ['value' => 'Long-term transplant nephrology monitoring'],
        ],
                'recovery' => 'Some recurrent diseases can be controlled successfully with early treatment, while others may gradually impair transplant function. Close follow-up improves long-term transplant survival.',
                'sort_order' => 39,
                'is_active' => true,
                'meta_title' => 'Recurrent Kidney Disease Post-Transplant',
                'meta_description' => 'Recurrent kidney disease post-transplant occurs when the original kidney disease returns and affects the transplanted kidney. Some kidney disorders have a highe',
                'meta_keywords' => '',
            ]
        );
    }
}
