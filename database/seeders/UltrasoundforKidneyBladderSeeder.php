<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UltrasoundforKidneyBladderSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Ultrasound for Kidney & Bladder')],
            [
                'title' => 'Ultrasound for Kidney & Bladder',
                'slug' => Str::slug('Ultrasound for Kidney & Bladder'),
                'introduction' => 'Ultrasound for kidney and bladder evaluation is a non-invasive imaging facility used to examine the kidneys, urinary bladder, and urinary tract structures safely and effectively. This imaging technique uses sound waves to generate real-time images without radiation exposure, making it a safe diagnostic tool for patients of all ages. Kidney and bladder ultrasound helps identify structural abnormalities, urinary obstruction, kidney stones, cysts, tumors, and fluid retention.',
                'what_is' => 'The ultrasound examination helps evaluate: Kidney size and shape Urinary obstruction Kidney stones Hydronephrosis Bladder volume Residual urine after urination Kidney cysts or masses The procedure is painless and usually completed within a short duration. Doctors commonly use ultrasound for: Kidney disease diagnosis Monitoring chronic kidney disease Evaluating urinary retention Guiding renal biopsies Assessing dialysis patients Real-time imaging helps nephrologists make faster and more accurate clinical decisions.',
                'symptoms' => [
            ['value' => 'Flank pain'],
            ['value' => 'Blood in urine'],
            ['value' => 'Difficulty urinating'],
            ['value' => 'Swelling due to kidney disease'],
            ['value' => 'Recurrent urinary infections'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Minimal procedural risk'],
            ['value' => 'Occasional incomplete visualization'],
            ['value' => 'Need for further imaging in complex cases'],
            ['value' => 'Mild temporary discomfort'],
            ['value' => 'Rare technical limitations'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Follow hydration instructions if advised'],
            ['value' => 'Attend scheduled follow-up imaging'],
            ['value' => 'Continue prescribed treatment plans'],
            ['value' => 'Discuss ultrasound findings with nephrologist'],
            ['value' => 'Monitor urinary symptoms regularly'],
        ],
                'surgery_risks' => [
            ['value' => 'Minimal procedural risk'],
            ['value' => 'Occasional incomplete visualization'],
            ['value' => 'Need for further imaging in complex cases'],
            ['value' => 'Mild temporary discomfort'],
            ['value' => 'Rare technical limitations'],
        ],
                'long_term_outlook' => 'Kidney and bladder ultrasound provides safe and effective long-term monitoring for renal and urinary disorders. Early imaging diagnosis supports timely treatment and improved long-term renal health outcomes.',
                'conclusion' => '',
                'seo_title' => 'Ultrasound for Kidney & Bladder',
                'seo_description' => 'Ultrasound for kidney and bladder evaluation is a non-invasive imaging facility used to examine the kidneys, urinary bladder, and urinary tract structures safely and effectively. This imaging technique uses sound waves to generate real-time images without radiation exposure, making it a safe diagnostic tool for patients of all ages. Kidney and bladder ultrasound helps identify structural abnormalities, urinary obstruction, kidney stones, cysts, tumors, and fluid retention.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
