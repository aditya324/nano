<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class NutritionalSupportEnteralParenteralSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Nutritional Support (Enteral / Parenteral)')],
            [
                'title' => 'Nutritional Support (Enteral / Parenteral)',
                'slug' => Str::slug('Nutritional Support (Enteral / Parenteral)'),
                'introduction' => 'Nutritional support helps patients who are unable to maintain adequate nutrition because of gastrointestinal disease, surgery, cancer, severe malnutrition, or intestinal dysfunction. Nutrition may be provided through the digestive tract or intravenously depending on patient needs.',
                'what_is' => 'Management options include: Oral nutritional supplementation Tube feeding (enteral nutrition) Total parenteral nutrition (TPN) Electrolyte and vitamin replacement Dietitian-guided nutritional planning Common conditions treated include: Severe malnutrition Intestinal obstruction Pancreatitis Cancer-related nutritional deficiency Postoperative recovery support Nutritional assessment and monitoring are essential throughout treatment.',
                'symptoms' => [
            ['value' => 'Significant weight loss'],
            ['value' => 'Weakness or fatigue'],
            ['value' => 'Poor appetite'],
            ['value' => 'Difficulty swallowing or eating'],
            ['value' => 'Muscle wasting'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Infection related to feeding lines'],
            ['value' => 'Electrolyte imbalance'],
            ['value' => 'Aspiration during feeding'],
            ['value' => 'Liver complications with long-term TPN'],
            ['value' => 'Catheter-related complications'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Monitor nutritional intake regularly'],
            ['value' => 'Maintain feeding tube hygiene properly'],
            ['value' => 'Follow prescribed diet schedules'],
            ['value' => 'Attend regular laboratory monitoring'],
            ['value' => 'Report fever or feeding intolerance promptly'],
        ],
                'surgery_risks' => [
            ['value' => 'Infection related to feeding lines'],
            ['value' => 'Electrolyte imbalance'],
            ['value' => 'Aspiration during feeding'],
            ['value' => 'Liver complications with long-term TPN'],
            ['value' => 'Catheter-related complications'],
        ],
                'long_term_outlook' => 'Appropriate nutritional support improves healing, immunity, energy levels, and overall recovery. Long-term dietary counseling and monitoring help maintain nutritional balance and improve quality of life.',
                'conclusion' => '',
                'seo_title' => 'Nutritional Support (Enteral / Parenteral)',
                'seo_description' => 'Nutritional support helps patients who are unable to maintain adequate nutrition because of gastrointestinal disease, surgery, cancer, severe malnutrition, or intestinal dysfunction. Nutrition may be provided through the digestive tract or intravenously depending on patient needs.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
