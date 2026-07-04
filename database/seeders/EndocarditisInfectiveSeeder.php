<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EndocarditisInfectiveSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Endocarditis (Infective)')],
            [
                'title' => 'Endocarditis (Infective)',
                'slug' => Str::slug('Endocarditis (Infective)'),
                'introduction' => 'Infective endocarditis is a serious infection of the inner lining of the heart and heart valves caused by bacteria or other microorganisms. The infection can damage heart valves and may spread to other organs if untreated. Prompt diagnosis and intensive treatment are critical to prevent life-threatening complications.',
                'what_is' => 'Infective endocarditis commonly affects: Damaged heart valves Artificial heart valves Congenital heart disease patients Intravenous drug users Diagnosis may include: Blood cultures Echocardiography ECG Laboratory tests Cardiac imaging Treatment usually involves prolonged intravenous antibiotics and sometimes cardiac surgery. Early recognition significantly improves outcomes.',
                'symptoms' => [
            ['value' => 'Fever and chills'],
            ['value' => 'Fatigue and weakness'],
            ['value' => 'Heart murmur'],
            ['value' => 'Shortness of breath'],
            ['value' => 'Weight loss or night sweats'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Heart valve destruction'],
            ['value' => 'Stroke from infected clots'],
            ['value' => 'Heart failure'],
            ['value' => 'Kidney complications'],
            ['value' => 'Life-threatening sepsis'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Complete the full antibiotic course strictly'],
            ['value' => 'Maintain excellent dental hygiene'],
            ['value' => 'Attend regular cardiology follow-up visits'],
            ['value' => 'Monitor for recurrent fever or weakness'],
            ['value' => 'Inform doctors before invasive procedures'],
        ],
                'surgery_risks' => [
            ['value' => 'Heart valve destruction'],
            ['value' => 'Stroke from infected clots'],
            ['value' => 'Heart failure'],
            ['value' => 'Kidney complications'],
            ['value' => 'Life-threatening sepsis'],
        ],
                'long_term_outlook' => 'With timely treatment, many patients recover successfully, although severe cases may require valve surgery and long-term cardiac monitoring.',
                'conclusion' => '',
                'seo_title' => 'Endocarditis (Infective)',
                'seo_description' => 'Infective endocarditis is a serious infection of the inner lining of the heart and heart valves caused by bacteria or other microorganisms. The infection can damage heart valves and may spread to other organs if untreated. Prompt diagnosis and intensive treatment are critical to prevent life-threatening complications.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
