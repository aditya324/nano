<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PeritonealDialysisTrainingFacilitySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Peritoneal Dialysis Training Facility')],
            [
                'title' => 'Peritoneal Dialysis Training Facility',
                'slug' => Str::slug('Peritoneal Dialysis Training Facility'),
                'introduction' => 'A Peritoneal Dialysis Training Facility is a specialized nephrology education center designed to train patients and caregivers in safely performing peritoneal dialysis at home. Peritoneal dialysis is a home-based renal replacement therapy that uses the lining of the abdomen (peritoneum) as a natural filter to remove toxins and excess fluid from the body. Proper training is essential to ensure safe dialysis practice, prevent infection, and improve patient independence.',
                'what_is' => 'The facility provides: Hands-on dialysis training Sterile technique education Catheter care instruction Dialysis fluid exchange demonstrations Infection prevention guidance Emergency troubleshooting education Patients and caregivers learn: Proper hand hygiene Safe dialysis fluid handling Catheter maintenance Home dialysis setup Recognition of warning signs such as infection or fluid imbalance Specialized nephrology nurses supervise the training process and ensure patients become confident in performing dialysis safely at home. Regular follow-up support is also provided to monitor treatment effectiveness and patient well-being.',
                'symptoms' => [
            ['value' => 'Chronic kidney failure'],
            ['value' => 'Need for home dialysis therapy'],
            ['value' => 'Dialysis dependency'],
            ['value' => 'Fluid overload'],
            ['value' => 'Progressive kidney disease'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Peritonitis infection'],
            ['value' => 'Catheter blockage'],
            ['value' => 'Fluid imbalance'],
            ['value' => 'Dialysis inadequacy'],
            ['value' => 'Technique-related complications'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Maintain strict sterile technique during exchanges'],
            ['value' => 'Follow dialysis schedules carefully'],
            ['value' => 'Monitor catheter site daily'],
            ['value' => 'Attend regular nephrology reviews'],
            ['value' => 'Report abdominal pain or fever immediately'],
        ],
                'surgery_risks' => [
            ['value' => 'Peritonitis infection'],
            ['value' => 'Catheter blockage'],
            ['value' => 'Fluid imbalance'],
            ['value' => 'Dialysis inadequacy'],
            ['value' => 'Technique-related complications'],
        ],
                'long_term_outlook' => 'Comprehensive peritoneal dialysis training improves patient confidence, independence, and treatment safety. Proper home dialysis education helps patients maintain flexible lifestyles while achieving effective long-term renal replacement therapy.',
                'conclusion' => '',
                'seo_title' => 'Peritoneal Dialysis Training Facility',
                'seo_description' => 'A Peritoneal Dialysis Training Facility is a specialized nephrology education center designed to train patients and caregivers in safely performing peritoneal dialysis at home. Peritoneal dialysis is a home-based renal replacement therapy that uses the lining of the abdomen (peritoneum) as a natural filter to remove toxins and excess fluid from the body. Proper training is essential to ensure safe dialysis practice, prevent infection, and improve patient independence.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
