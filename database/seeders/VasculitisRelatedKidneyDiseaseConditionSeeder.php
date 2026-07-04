<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class VasculitisRelatedKidneyDiseaseConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Vasculitis-Related Kidney Disease')],
            [
                'name' => 'Vasculitis-Related Kidney Disease',
                'slug' => Str::slug('Vasculitis-Related Kidney Disease'),
                'h1' => 'Vasculitis-Related Kidney Disease',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Vasculitis-related kidney disease occurs when inflammation of blood vessels damages the kidneys. Reduced blood supply and immune-mediated injury can impair kidney function and lead to serious complications.',
                'about_more' => '',
                'overview' => 'Vasculitis-related kidney disease occurs when inflammation of blood vessels damages the kidneys. Reduced blood supply and immune-mediated injury can impair kidney function and lead to serious complications.',
                'symptoms' => [
            ['value' => 'Blood in urine'],
            ['value' => 'Swelling and fluid retention'],
            ['value' => 'Fever, fatigue, and weight loss'],
            ['value' => 'High blood pressure'],
            ['value' => 'Reduced urine output or kidney dysfunction'],
        ],
                'causes' => [
            ['value' => 'Autoimmune vasculitis disorders'],
            ['value' => 'Immune system overactivity'],
            ['value' => 'Certain infections or medications'],
            ['value' => 'Genetic predisposition'],
            ['value' => 'Systemic inflammatory diseases'],
        ],
                'risks' => [
            ['value' => 'Acute or chronic kidney failure'],
            ['value' => 'Severe hypertension'],
            ['value' => 'Damage to lungs, skin, or nerves'],
            ['value' => 'Life-threatening systemic inflammation'],
            ['value' => 'Need for dialysis in severe cases'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Immunosuppressive medications and corticosteroids'],
            ['value' => 'Blood pressure and kidney function management'],
            ['value' => 'Plasma exchange therapy in severe disease'],
            ['value' => 'Monitoring through blood and urine testing'],
            ['value' => 'Dialysis support if kidney failure develops'],
        ],
                'recovery' => 'Early diagnosis and aggressive treatment improve kidney preservation and long-term survival. Some patients may experience relapses requiring lifelong monitoring.',
                'sort_order' => 18,
                'is_active' => true,
                'meta_title' => 'Vasculitis-Related Kidney Disease',
                'meta_description' => 'Vasculitis-related kidney disease occurs when inflammation of blood vessels damages the kidneys. Reduced blood supply and immune-mediated injury can impair kidn',
                'meta_keywords' => '',
            ]
        );
    }
}
