<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PatientEducationFootHygieneDailyInspectionSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Patient Education (Foot Hygiene, Daily Inspection)')],
            [
                'title' => 'Patient Education (Foot Hygiene, Daily Inspection)',
                'slug' => Str::slug('Patient Education (Foot Hygiene, Daily Inspection)'),
                'introduction' => 'Patient education is an important part of diabetic foot prevention and long-term foot care management.',
                'what_is' => 'Teaching proper foot care practices helps reduce the risk of ulcers, infections, and amputations in diabetic patients.',
                'symptoms' => [],
                'causes' => [
            ['value' => 'Diabetic foot prevention'],
            ['value' => 'Early ulcer detection'],
            ['value' => 'Infection prevention'],
            ['value' => 'Long-term diabetic care'],
            ['value' => 'Post-treatment foot monitoring'],
            ['value' => 'Treatments'],
            ['value' => 'Education programs include foot hygiene guidance, daily inspection techniques, nail care, footwear advice, wound awareness, and blood sugar control counseling.'],
            ['value' => 'Benefits'],
            ['value' => 'Early problem detection'],
            ['value' => 'Reduced ulcer risk'],
            ['value' => 'Better self-care practices'],
            ['value' => 'Lower hospitalization rates'],
            ['value' => 'Risks / Limitations'],
            ['value' => 'Poor patient compliance'],
            ['value' => 'Delayed reporting of symptoms'],
            ['value' => 'Difficulty performing self-inspection in some patients'],
        ],
                'condition_risks' => [],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Daily foot examination'],
            ['value' => 'Keep feet clean and dry'],
            ['value' => 'Avoid barefoot walking'],
            ['value' => 'Attend regular diabetic foot check-ups'],
        ],
                'surgery_risks' => [],
                'long_term_outlook' => 'Consistent foot care education significantly reduces diabetic foot complications and improves long-term limb preservation.',
                'conclusion' => '',
                'seo_title' => 'Patient Education (Foot Hygiene, Daily Inspection)',
                'seo_description' => 'Patient education is an important part of diabetic foot prevention and long-term foot care management.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
