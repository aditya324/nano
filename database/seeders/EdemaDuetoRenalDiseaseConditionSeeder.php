<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EdemaDuetoRenalDiseaseConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Edema Due to Renal Disease')],
            [
                'name' => 'Edema Due to Renal Disease',
                'slug' => Str::slug('Edema Due to Renal Disease'),
                'h1' => 'Edema Due to Renal Disease',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Edema due to renal disease refers to swelling caused by excess fluid accumulation in body tissues because diseased kidneys are unable to remove fluid effectively. Kidney-related edema commonly affects the legs, face, abdomen, and sometimes the lungs.',
                'about_more' => '',
                'overview' => 'Edema due to renal disease refers to swelling caused by excess fluid accumulation in body tissues because diseased kidneys are unable to remove fluid effectively. Kidney-related edema commonly affects the legs, face, abdomen, and sometimes the lungs.',
                'symptoms' => [
            ['value' => 'Swelling of feet, ankles, legs, or face'],
            ['value' => 'Puffiness around the eyes, especially in the morning'],
            ['value' => 'Rapid weight gain from fluid retention'],
            ['value' => 'Tightness or heaviness in swollen areas'],
            ['value' => 'Breathing difficulty if fluid accumulates in lungs'],
        ],
                'causes' => [
            ['value' => 'Nephrotic syndrome causing protein loss'],
            ['value' => 'Chronic kidney disease or kidney failure'],
            ['value' => 'Excess salt and water retention'],
            ['value' => 'Reduced kidney filtration function'],
            ['value' => 'Severe glomerular diseases affecting fluid balance'],
        ],
                'risks' => [
            ['value' => 'Fluid overload affecting lungs and heart'],
            ['value' => 'Reduced mobility and discomfort'],
            ['value' => 'Skin infections due to severe swelling'],
            ['value' => 'High blood pressure and heart strain'],
            ['value' => 'Worsening kidney dysfunction'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Diuretic medications to remove excess fluid'],
            ['value' => 'Salt and fluid restriction'],
            ['value' => 'Treatment of underlying kidney disease'],
            ['value' => 'Albumin therapy in selected severe cases'],
            ['value' => 'Dialysis for severe fluid overload'],
        ],
                'recovery' => 'Edema often improves when kidney disease is properly treated and fluid balance is controlled. Severe or persistent swelling may require long-term management and regular monitoring.',
                'sort_order' => 46,
                'is_active' => true,
                'meta_title' => 'Edema Due to Renal Disease',
                'meta_description' => 'Edema due to renal disease refers to swelling caused by excess fluid accumulation in body tissues because diseased kidneys are unable to remove fluid effectivel',
                'meta_keywords' => '',
            ]
        );
    }
}
