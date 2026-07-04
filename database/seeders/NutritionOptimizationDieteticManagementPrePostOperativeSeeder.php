<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class NutritionOptimizationDieteticManagementPrePostOperativeSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Nutrition Optimization & Dietetic Management Pre/Post-Operative')],
            [
                'title' => 'Nutrition Optimization & Dietetic Management Pre/Post-Operative',
                'slug' => Str::slug('Nutrition Optimization & Dietetic Management Pre/Post-Operative'),
                'introduction' => 'Nutrition optimization and dietetic management involve specialized nutritional assessment and support before and after surgery to improve healing, reduce complications, and promote faster recovery. Proper nutrition plays a major role in surgical outcomes, immune function, and tissue repair.',
                'what_is' => 'Patients undergoing surgery may experience nutritional deficiencies due to illness, reduced appetite, cancer, infection, or digestive disorders. Dietetic management includes: Preoperative nutritional assessment High-protein and calorie support Vitamin and mineral supplementation Enteral or parenteral nutrition when required Postoperative dietary progression Specialized nutrition plans are designed according to: Surgical procedure Age and body condition Diabetes or kidney disease Cancer-related nutritional needs Adequate nutrition improves wound healing, muscle strength, and resistance to infection.',
                'symptoms' => [
            ['value' => 'Weight loss or malnutrition'],
            ['value' => 'Poor appetite or weakness'],
            ['value' => 'Delayed wound healing'],
            ['value' => 'Low protein or vitamin levels'],
            ['value' => 'Digestive difficulties after surgery'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Malnutrition-related delayed recovery'],
            ['value' => 'Increased infection risk'],
            ['value' => 'Muscle weakness and fatigue'],
            ['value' => 'Electrolyte imbalances'],
            ['value' => 'Feeding intolerance in severe illness'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Follow dietary plans provided by dietitians'],
            ['value' => 'Maintain adequate protein and fluid intake'],
            ['value' => 'Monitor weight and nutritional status regularly'],
            ['value' => 'Avoid foods restricted by surgeons or dietitians'],
            ['value' => 'Attend nutritional follow-up assessments'],
        ],
                'surgery_risks' => [
            ['value' => 'Malnutrition-related delayed recovery'],
            ['value' => 'Increased infection risk'],
            ['value' => 'Muscle weakness and fatigue'],
            ['value' => 'Electrolyte imbalances'],
            ['value' => 'Feeding intolerance in severe illness'],
        ],
                'long_term_outlook' => 'Proper nutritional support significantly improves recovery, reduces postoperative complications, enhances immunity, and supports long-term health and rehabilitation.',
                'conclusion' => '',
                'seo_title' => 'Nutrition Optimization & Dietetic Management Pre/Post-Operative',
                'seo_description' => 'Nutrition optimization and dietetic management involve specialized nutritional assessment and support before and after surgery to improve healing, reduce complications, and promote faster recovery. Proper nutrition plays a major role in surgical outcomes, immune function, and tissue repair.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
