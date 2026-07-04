<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DisordersofCalciumVitaminDMetabolismConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Disorders of Calcium & Vitamin D Metabolism')],
            [
                'name' => 'Disorders of Calcium & Vitamin D Metabolism',
                'slug' => Str::slug('Disorders of Calcium & Vitamin D Metabolism'),
                'h1' => 'Disorders of Calcium & Vitamin D Metabolism',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Disorders of calcium and vitamin D metabolism are medical conditions that affect the body’s ability to properly regulate calcium levels, bone strength, muscle function, and overall metabolic balance. Calcium and vitamin D play essential roles in maintaining healthy bones, teeth, nerves, and muscles. Imbalances may lead to weakened bones, muscle problems, hormonal disturbances, and metabolic complications. These disorders can occur due to nutritional deficiencies, hormonal abnormalities, kidney disease, gastrointestinal disorders, or impaired vitamin D absorption and metabolism.',
                'about_more' => '',
                'overview' => 'Disorders of calcium and vitamin D metabolism are medical conditions that affect the body’s ability to properly regulate calcium levels, bone strength, muscle function, and overall metabolic balance. Calcium and vitamin D play essential roles in maintaining healthy bones, teeth, nerves, and muscles. Imbalances may lead to weakened bones, muscle problems, hormonal disturbances, and metabolic complications. These disorders can occur due to nutritional deficiencies, hormonal abnormalities, kidney disease, gastrointestinal disorders, or impaired vitamin D absorption and metabolism.',
                'symptoms' => [
            ['value' => 'Bone pain or muscle weakness'],
            ['value' => 'Fatigue or reduced physical strength'],
            ['value' => 'Muscle cramps, tingling, or numbness'],
            ['value' => 'Frequent fractures or reduced bone density'],
            ['value' => 'Difficulty walking, joint discomfort, or skeletal deformities in severe cases'],
        ],
                'causes' => [
            ['value' => 'Vitamin D deficiency due to poor dietary intake or limited sunlight exposure'],
            ['value' => 'Calcium deficiency or impaired intestinal absorption'],
            ['value' => 'Kidney disease or liver disorders affecting vitamin D metabolism'],
            ['value' => 'Parathyroid hormone abnormalities affecting calcium regulation'],
            ['value' => 'Malnutrition, gastrointestinal disorders, or certain medications interfering with calcium balance'],
        ],
                'risks' => [
            ['value' => 'Osteoporosis or weakened bones increasing fracture risk'],
            ['value' => 'Rickets or osteomalacia causing bone deformities and soft bones'],
            ['value' => 'Muscle spasms, seizures, or nerve dysfunction due to severe calcium imbalance'],
            ['value' => 'Kidney stones or abnormal calcium deposits in tissues'],
            ['value' => 'Growth disturbances and long-term skeletal complications in children and adults'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Treatment for disorders of calcium and vitamin D metabolism focuses on restoring normal calcium and vitamin D levels, improving bone health, relieving symptoms, and preventing long-term complications. Management may include calcium and vitamin D supplementation, dietary modification, sunlight exposure guidance, treatment of underlying endocrine or kidney disorders, and medications to improve bone metabolism. Patients may also benefit from regular exercise, nutritional counseling, bone density monitoring, endocrinology follow-up, and lifestyle modification to optimize skeletal and metabolic health.'],
        ],
                'recovery' => 'The long-term outlook for disorders of calcium and vitamin D metabolism is generally positive with early diagnosis and proper medical management. Regular supplementation, healthy nutrition, physical activity, medication adherence, sunlight exposure, bone health monitoring, and continuous medical follow-up significantly help improve bone strength, maintain metabolic stability, reduce complications, preserve mobility, and enhance overall quality of life. ____________ 20. Rare Endocrine Tumors (Pheochromocytoma, Neuroendocrine Tumors) Rare Endocrine Tumors (Pheochromocytoma, Neuroendocrine Tumors)',
                'sort_order' => 20,
                'is_active' => true,
                'meta_title' => 'Disorders of Calcium & Vitamin D Metabolism',
                'meta_description' => 'Disorders of calcium and vitamin D metabolism are medical conditions that affect the body’s ability to properly regulate calcium levels, bone strength, muscle f',
                'meta_keywords' => '',
            ]
        );
    }
}
