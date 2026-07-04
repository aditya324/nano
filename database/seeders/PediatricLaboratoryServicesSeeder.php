<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PediatricLaboratoryServicesSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Pediatric Laboratory Services')],
            [
                'title' => 'Pediatric Laboratory Services',
                'slug' => Str::slug('Pediatric Laboratory Services'),
                'introduction' => 'Pediatric laboratory services provide specialized diagnostic testing for infants, children, and adolescents using child-friendly techniques and pediatric reference standards.',
                'what_is' => 'Laboratory services include blood tests, urine analysis, cultures, hormonal testing, infection screening, newborn screening, and metabolic investigations. Pediatric laboratories use specially designed equipment and smaller sample volumes suitable for children.',
                'symptoms' => [
            ['value' => 'Fever or suspected infections'],
            ['value' => 'Anemia, weakness, or nutritional deficiencies'],
            ['value' => 'Hormonal or metabolic abnormalities'],
            ['value' => 'Persistent illness requiring investigation'],
            ['value' => 'Developmental or genetic concerns'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Delayed diagnosis if testing is unavailable'],
            ['value' => 'Anxiety or fear during blood sample collection'],
            ['value' => 'Temporary discomfort or bruising after sampling'],
            ['value' => 'Need for repeat testing in some cases'],
            ['value' => 'Misinterpretation without pediatric expertise'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Follow preparation instructions before tests'],
            ['value' => 'Encourage hydration after blood collection'],
            ['value' => 'Monitor children for dizziness or discomfort'],
            ['value' => 'Collect samples using hygienic procedures'],
            ['value' => 'Review laboratory reports with pediatric specialists'],
        ],
                'surgery_risks' => [
            ['value' => 'Delayed diagnosis if testing is unavailable'],
            ['value' => 'Anxiety or fear during blood sample collection'],
            ['value' => 'Temporary discomfort or bruising after sampling'],
            ['value' => 'Need for repeat testing in some cases'],
            ['value' => 'Misinterpretation without pediatric expertise'],
        ],
                'long_term_outlook' => 'Accurate pediatric laboratory services support early diagnosis, effective treatment planning, and improved long-term child health outcomes.',
                'conclusion' => '',
                'seo_title' => 'Pediatric Laboratory Services',
                'seo_description' => 'Pediatric laboratory services provide specialized diagnostic testing for infants, children, and adolescents using child-friendly techniques and pediatric reference standards.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
