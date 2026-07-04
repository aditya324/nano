<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class LifestyleModificationCounselingConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Lifestyle Modification Counseling')],
            [
                'name' => 'Lifestyle Modification Counseling',
                'slug' => Str::slug('Lifestyle Modification Counseling'),
                'h1' => 'Lifestyle Modification Counseling',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Lifestyle modification counseling is a nephrology support service focused on helping kidney disease patients adopt healthier daily habits that protect kidney function and improve overall health.',
                'about_more' => 'Lifestyle changes play a major role in slowing kidney disease progression and reducing cardiovascular complications. This counseling service encourages sustainable health practices tailored to the patient’s medical condition and lifestyle.',
                'overview' => 'The counseling program includes guidance regarding: Healthy diet habits Salt restriction Weight management Physical activity Smoking cessation Alcohol moderation Stress management Sleep improvement Healthcare professionals help patients: Set realistic health goals Understand kidney-friendly lifestyle practices Improve treatment adherence Reduce risk factors for kidney damage Counseling is individualized according to age, kidney disease stage, diabetes status, and cardiovascular health. Continuous support and motivation are important for long-term lifestyle success.',
                'symptoms' => [
            ['value' => 'High blood pressure'],
            ['value' => 'Obesity or poor nutrition'],
            ['value' => 'Diabetes-related kidney disease'],
            ['value' => 'Fatigue and reduced activity'],
            ['value' => 'Progressive kidney dysfunction'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Poor lifestyle compliance'],
            ['value' => 'Worsening kidney disease'],
            ['value' => 'Cardiovascular complications'],
            ['value' => 'Weight-related health issues'],
            ['value' => 'Reduced physical functioning'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Follow healthy dietary recommendations'],
            ['value' => 'Maintain regular physical activity'],
            ['value' => 'Monitor blood pressure and weight'],
            ['value' => 'Avoid smoking and excessive alcohol'],
            ['value' => 'Attend follow-up counseling sessions'],
        ],
                'recovery' => 'Healthy lifestyle changes significantly improve kidney protection and overall wellness. Long-term counseling and patient motivation support better disease control, improved energy levels, and enhanced quality of life.',
                'sort_order' => 44,
                'is_active' => true,
                'meta_title' => 'Lifestyle Modification Counseling',
                'meta_description' => 'Lifestyle modification counseling is a nephrology support service focused on helping kidney disease patients adopt healthier daily habits that protect kidney fu',
                'meta_keywords' => '',
            ]
        );
    }
}
