<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UltrasoundforKidneyBladderConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Ultrasound for Kidney & Bladder')],
            [
                'name' => 'Ultrasound for Kidney & Bladder',
                'slug' => Str::slug('Ultrasound for Kidney & Bladder'),
                'h1' => 'Ultrasound for Kidney & Bladder',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Ultrasound for kidney and bladder evaluation is a non-invasive imaging facility used to examine the kidneys, urinary bladder, and urinary tract structures safely and effectively.',
                'about_more' => 'This imaging technique uses sound waves to generate real-time images without radiation exposure, making it a safe diagnostic tool for patients of all ages. Kidney and bladder ultrasound helps identify structural abnormalities, urinary obstruction, kidney stones, cysts, tumors, and fluid retention.',
                'overview' => 'The ultrasound examination helps evaluate: Kidney size and shape Urinary obstruction Kidney stones Hydronephrosis Bladder volume Residual urine after urination Kidney cysts or masses The procedure is painless and usually completed within a short duration. Doctors commonly use ultrasound for: Kidney disease diagnosis Monitoring chronic kidney disease Evaluating urinary retention Guiding renal biopsies Assessing dialysis patients Real-time imaging helps nephrologists make faster and more accurate clinical decisions.',
                'symptoms' => [
            ['value' => 'Flank pain'],
            ['value' => 'Blood in urine'],
            ['value' => 'Difficulty urinating'],
            ['value' => 'Swelling due to kidney disease'],
            ['value' => 'Recurrent urinary infections'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Minimal procedural risk'],
            ['value' => 'Occasional incomplete visualization'],
            ['value' => 'Need for further imaging in complex cases'],
            ['value' => 'Mild temporary discomfort'],
            ['value' => 'Rare technical limitations'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Follow hydration instructions if advised'],
            ['value' => 'Attend scheduled follow-up imaging'],
            ['value' => 'Continue prescribed treatment plans'],
            ['value' => 'Discuss ultrasound findings with nephrologist'],
            ['value' => 'Monitor urinary symptoms regularly'],
        ],
                'recovery' => 'Kidney and bladder ultrasound provides safe and effective long-term monitoring for renal and urinary disorders. Early imaging diagnosis supports timely treatment and improved long-term renal health outcomes.',
                'sort_order' => 35,
                'is_active' => true,
                'meta_title' => 'Ultrasound for Kidney & Bladder',
                'meta_description' => 'Ultrasound for kidney and bladder evaluation is a non-invasive imaging facility used to examine the kidneys, urinary bladder, and urinary tract structures safel',
                'meta_keywords' => '',
            ]
        );
    }
}
