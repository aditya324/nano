<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class NutritionalSupportDieteticPlanningSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Nutritional Support & Dietetic Planning')],
            [
                'title' => 'Nutritional Support & Dietetic Planning',
                'slug' => Str::slug('Nutritional Support & Dietetic Planning'),
                'introduction' => 'Nutritional support and dietetic planning are healthcare services focused on providing balanced nutrition and individualized dietary guidance to support overall health, recovery, and disease management. Proper nutrition plays a vital role in maintaining energy, strengthening immunity, improving organ function, and promoting healing in individuals with acute or chronic medical conditions.',
                'what_is' => 'Dietetic planning is tailored according to a patient’s age, medical condition, nutritional status, lifestyle, and treatment goals. Nutritional support may include therapeutic diets, oral nutritional supplements, enteral feeding, or specialized nutrition programs for conditions such as diabetes, kidney disease, liver disorders, obesity, malnutrition, cancer, and critical illness. These services help improve treatment outcomes, prevent nutritional deficiencies, and support long-term health.',
                'symptoms' => [
            ['value' => 'Poor appetite or unintended weight loss'],
            ['value' => 'Fatigue and weakness related to poor nutrition'],
            ['value' => 'Difficulty maintaining healthy body weight'],
            ['value' => 'Digestive or absorption-related nutritional problems'],
            ['value' => 'Nutritional imbalance associated with chronic diseases'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Malnutrition and weakened immune function'],
            ['value' => 'Delayed healing and prolonged recovery'],
            ['value' => 'Muscle loss and reduced physical strength'],
            ['value' => 'Poor metabolic and chronic disease control'],
            ['value' => 'Increased complications during illness or hospitalization'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular nutritional assessment and dietary monitoring'],
            ['value' => 'Personalized meal planning and calorie management'],
            ['value' => 'Nutritional supplementation when required'],
            ['value' => 'Monitoring body weight, hydration, and nutrient levels'],
            ['value' => 'Ongoing follow-up with dietitians and healthcare professionals'],
        ],
                'surgery_risks' => [
            ['value' => 'Malnutrition and weakened immune function'],
            ['value' => 'Delayed healing and prolonged recovery'],
            ['value' => 'Muscle loss and reduced physical strength'],
            ['value' => 'Poor metabolic and chronic disease control'],
            ['value' => 'Increased complications during illness or hospitalization'],
        ],
                'long_term_outlook' => 'The long-term outlook with proper nutritional support and dietetic planning is highly beneficial for overall health and disease management. Balanced nutrition and individualized dietary care can improve energy levels, immunity, recovery, metabolic control, and quality of life. Continuous dietary guidance and healthy eating habits are important for maintaining long-term wellness and preventing nutrition-related complications.',
                'conclusion' => '',
                'seo_title' => 'Nutritional Support & Dietetic Planning',
                'seo_description' => 'Nutritional support and dietetic planning are healthcare services focused on providing balanced nutrition and individualized dietary guidance to support overall health, recovery, and disease management. Proper nutrition plays a vital role in maintaining energy, strengthening immunity, improving organ function, and promoting healing in individuals with acute or chronic medical conditions.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
