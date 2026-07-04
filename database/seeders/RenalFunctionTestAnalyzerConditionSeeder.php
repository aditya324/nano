<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RenalFunctionTestAnalyzerConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Renal Function Test Analyzer')],
            [
                'name' => 'Renal Function Test Analyzer',
                'slug' => Str::slug('Renal Function Test Analyzer'),
                'h1' => 'Renal Function Test Analyzer',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'A Renal Function Test Analyzer is a laboratory diagnostic system used to assess kidney performance and monitor renal health through blood and urine testing.',
                'about_more' => 'This analyzer helps detect kidney disease, monitor disease progression, evaluate dialysis patients, and guide nephrology treatment decisions accurately. Timely renal testing is essential for early diagnosis and prevention of serious kidney complications.',
                'overview' => 'The analyzer performs tests such as: Serum creatinine Blood urea nitrogen (BUN) Estimated glomerular filtration rate (eGFR) Electrolyte levels Urine protein analysis Acid-base balance testing Modern analyzers provide: Rapid automated testing Accurate laboratory results High processing efficiency Continuous patient monitoring support Doctors use the results to: Diagnose kidney disease Assess dialysis adequacy Monitor medication safety Detect acute kidney injury Evaluate long-term renal function Routine renal testing is important for both inpatient and outpatient nephrology care.',
                'symptoms' => [
            ['value' => 'Reduced kidney function'],
            ['value' => 'Swelling or edema'],
            ['value' => 'Fatigue and weakness'],
            ['value' => 'Electrolyte abnormalities'],
            ['value' => 'Suspected renal disease'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Delayed diagnosis if testing is missed'],
            ['value' => 'Progression of untreated kidney disease'],
            ['value' => 'Incorrect interpretation of abnormal values'],
            ['value' => 'Need for repeated testing'],
            ['value' => 'Laboratory-related technical errors'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Attend regular laboratory testing appointments'],
            ['value' => 'Maintain hydration as advised'],
            ['value' => 'Follow prescribed medications consistently'],
            ['value' => 'Discuss results with nephrologist'],
            ['value' => 'Continue routine kidney monitoring'],
        ],
                'recovery' => 'Advanced renal function analyzers improve early diagnosis, disease monitoring, and treatment planning in nephrology care. Accurate laboratory assessment supports better kidney preservation and long-term patient outcomes.',
                'sort_order' => 34,
                'is_active' => true,
                'meta_title' => 'Renal Function Test Analyzer',
                'meta_description' => 'A Renal Function Test Analyzer is a laboratory diagnostic system used to assess kidney performance and monitor renal health through blood and urine testing.',
                'meta_keywords' => '',
            ]
        );
    }
}
