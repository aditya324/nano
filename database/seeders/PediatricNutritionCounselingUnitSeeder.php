<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PediatricNutritionCounselingUnitSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Pediatric Nutrition & Counseling Unit')],
            [
                'title' => 'Pediatric Nutrition & Counseling Unit',
                'slug' => Str::slug('Pediatric Nutrition & Counseling Unit'),
                'introduction' => 'A Pediatric Nutrition and Counseling Unit is a specialized facility focused on assessing, improving, and monitoring the nutritional health and dietary needs of infants, children, and adolescents.',
                'what_is' => 'The unit provides nutritional assessment, growth monitoring, diet planning, feeding counseling, obesity management, malnutrition treatment, and support for children with chronic illnesses or special dietary needs. Pediatric dietitians and healthcare professionals guide parents regarding balanced nutrition, breastfeeding, complementary feeding, and healthy eating habits.',
                'symptoms' => [
            ['value' => 'Poor weight gain or growth failure'],
            ['value' => 'Malnutrition or vitamin deficiencies'],
            ['value' => 'Obesity or unhealthy eating habits'],
            ['value' => 'Feeding difficulties or poor appetite'],
            ['value' => 'Chronic illnesses affecting nutrition and growth'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Stunted growth and developmental delay'],
            ['value' => 'Weak immunity and frequent infections'],
            ['value' => 'Childhood obesity and metabolic diseases'],
            ['value' => 'Poor academic and physical performance'],
            ['value' => 'Long-term nutritional and health complications'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Follow individualized dietary and feeding plans'],
            ['value' => 'Monitor child growth and nutritional progress regularly'],
            ['value' => 'Encourage healthy eating habits and physical activity'],
            ['value' => 'Attend scheduled nutritional counseling sessions'],
            ['value' => 'Maintain proper hydration and balanced meal routines'],
        ],
                'surgery_risks' => [
            ['value' => 'Stunted growth and developmental delay'],
            ['value' => 'Weak immunity and frequent infections'],
            ['value' => 'Childhood obesity and metabolic diseases'],
            ['value' => 'Poor academic and physical performance'],
            ['value' => 'Long-term nutritional and health complications'],
        ],
                'long_term_outlook' => 'Early nutritional intervention and counseling improve physical growth, immunity, cognitive development, and long-term health in children.',
                'conclusion' => '',
                'seo_title' => 'Pediatric Nutrition & Counseling Unit',
                'seo_description' => 'A Pediatric Nutrition and Counseling Unit is a specialized facility focused on assessing, improving, and monitoring the nutritional health and dietary needs of infants, children, and adolescents.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
