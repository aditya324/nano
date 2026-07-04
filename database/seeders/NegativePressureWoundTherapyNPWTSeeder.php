<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class NegativePressureWoundTherapyNPWTSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Negative Pressure Wound Therapy (NPWT)')],
            [
                'title' => 'Negative Pressure Wound Therapy (NPWT)',
                'slug' => Str::slug('Negative Pressure Wound Therapy (NPWT)'),
                'introduction' => 'Negative Pressure Wound Therapy (NPWT), also called vacuum-assisted wound therapy, is an advanced wound management technique that promotes healing using controlled suction. It is commonly used for complex, infected, or non-healing wounds.',
                'what_is' => 'The therapy involves: Special foam dressing placement Sealed wound covering Continuous or intermittent negative pressure suction NPWT helps: Remove excess fluid and infection Improve blood circulation Promote healthy tissue growth Accelerate wound healing It is widely used for: Diabetic wounds Surgical wounds Trauma injuries Pressure ulcers',
                'symptoms' => [
            ['value' => 'Chronic non-healing wounds'],
            ['value' => 'Large surgical wounds'],
            ['value' => 'Diabetic foot ulcers'],
            ['value' => 'Infected or draining wounds'],
            ['value' => 'Tissue loss after trauma'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Bleeding during dressing changes'],
            ['value' => 'Skin irritation around dressing'],
            ['value' => 'Pain or discomfort'],
            ['value' => 'Rare wound infection progression'],
            ['value' => 'Device-related technical issues'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Attend scheduled dressing changes regularly'],
            ['value' => 'Maintain proper nutrition for wound healing'],
            ['value' => 'Monitor device functioning carefully'],
            ['value' => 'Keep dressing seal intact'],
            ['value' => 'Report fever or worsening wound symptoms immediately'],
        ],
                'surgery_risks' => [
            ['value' => 'Bleeding during dressing changes'],
            ['value' => 'Skin irritation around dressing'],
            ['value' => 'Pain or discomfort'],
            ['value' => 'Rare wound infection progression'],
            ['value' => 'Device-related technical issues'],
        ],
                'long_term_outlook' => 'NPWT significantly improves healing rates, reduces infection risk, and helps preserve tissue integrity in difficult wound conditions.',
                'conclusion' => '',
                'seo_title' => 'Negative Pressure Wound Therapy (NPWT)',
                'seo_description' => 'Negative Pressure Wound Therapy (NPWT), also called vacuum-assisted wound therapy, is an advanced wound management technique that promotes healing using controlled suction. It is commonly used for complex, infected, or non-healing wounds.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
