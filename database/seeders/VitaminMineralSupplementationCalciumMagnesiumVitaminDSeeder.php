<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class VitaminMineralSupplementationCalciumMagnesiumVitaminDSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Vitamin & Mineral Supplementation (Calcium, Magnesium, Vitamin D)')],
            [
                'title' => 'Vitamin & Mineral Supplementation (Calcium, Magnesium, Vitamin D)',
                'slug' => Str::slug('Vitamin & Mineral Supplementation (Calcium, Magnesium, Vitamin D)'),
                'introduction' => 'Vitamin and mineral supplementation is a supportive medical and nutritional treatment procedure used to restore essential nutrient balance, improve metabolic function, strengthen bones and muscles, and prevent complications related to nutritional deficiencies. Supplements such as calcium, magnesium, and vitamin D play important roles in maintaining bone health, nerve function, muscle activity, immune support, and overall endocrine and metabolic stability.',
                'what_is' => 'Vitamin and mineral supplementation is commonly recommended for individuals with nutritional deficiencies, osteoporosis, endocrine disorders, chronic illnesses, malabsorption conditions, kidney disease, or increased metabolic requirements. Calcium supports bone and dental strength, magnesium is essential for nerve and muscle function, and vitamin D improves calcium absorption and immune health. Supplementation may be provided through oral tablets, capsules, powders, injections, or intravenous therapy depending on the severity of deficiency and patient needs. Treatment is commonly supervised by endocrinologists, physicians, nutritionists, and metabolic care specialists in hospitals, clinics, and wellness programs.',
                'symptoms' => [
            ['value' => 'Fatigue, weakness, or muscle cramps'],
            ['value' => 'Bone pain or reduced bone density'],
            ['value' => 'Tingling, numbness, or muscle spasms'],
            ['value' => 'Frequent fractures or poor bone health'],
            ['value' => 'Nutritional deficiencies causing metabolic or endocrine imbalance'],
        ],
                'causes' => [
            ['value' => 'Nutritional deficiencies or poor dietary intake'],
            ['value' => 'Osteoporosis or reduced bone density'],
            ['value' => 'Vitamin D deficiency due to limited sunlight exposure'],
            ['value' => 'Chronic kidney disease or malabsorption disorders'],
            ['value' => 'Hormonal or metabolic conditions affecting nutrient balance'],
        ],
                'condition_risks' => [
            ['value' => 'Excessive supplementation causing toxicity or metabolic imbalance'],
            ['value' => 'Kidney stones or calcium-related complications with overuse'],
            ['value' => 'Digestive discomfort such as nausea or constipation'],
            ['value' => 'Medication interactions affecting nutrient absorption'],
            ['value' => 'Persistent deficiency if underlying medical conditions remain untreated'],
            ['value' => 'Treatment Options'],
            ['value' => 'Vitamin and mineral supplementation focuses on restoring nutritional balance, improving bone and muscle health, supporting metabolic stability, and preventing deficiency-related complications. Treatment may include calcium supplementation, magnesium replacement therapy, vitamin D therapy, dietary counseling, hydration support, lifestyle modification, and regular laboratory monitoring. Patients may also benefit from weight-bearing exercises, sunlight exposure guidance, endocrinology follow-up, nutritional rehabilitation, and long-term metabolic monitoring to optimize overall health and recovery.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular monitoring of vitamin and mineral levels'],
            ['value' => 'Observation for side effects or signs of over-supplementation'],
            ['value' => 'Nutritional counseling and healthy diet planning'],
            ['value' => 'Bone density and metabolic health assessment when required'],
            ['value' => 'Long-term medical follow-up and supplementation adjustment as needed'],
        ],
                'surgery_risks' => [
            ['value' => 'Excessive supplementation causing toxicity or metabolic imbalance'],
            ['value' => 'Kidney stones or calcium-related complications with overuse'],
            ['value' => 'Digestive discomfort such as nausea or constipation'],
            ['value' => 'Medication interactions affecting nutrient absorption'],
            ['value' => 'Persistent deficiency if underlying medical conditions remain untreated'],
            ['value' => 'Treatment Options'],
            ['value' => 'Vitamin and mineral supplementation focuses on restoring nutritional balance, improving bone and muscle health, supporting metabolic stability, and preventing deficiency-related complications. Treatment may include calcium supplementation, magnesium replacement therapy, vitamin D therapy, dietary counseling, hydration support, lifestyle modification, and regular laboratory monitoring. Patients may also benefit from weight-bearing exercises, sunlight exposure guidance, endocrinology follow-up, nutritional rehabilitation, and long-term metabolic monitoring to optimize overall health and recovery.'],
        ],
                'long_term_outlook' => 'The long-term outlook following vitamin and mineral supplementation is generally very positive with proper nutritional management and regular medical monitoring. Balanced nutrition, supplementation adherence, physical activity, healthy lifestyle habits, hydration, routine laboratory evaluation, and continuous medical follow-up significantly help maintain metabolic stability, strengthen bones and muscles, prevent complications, improve overall health, and enhance quality of life.',
                'conclusion' => '',
                'seo_title' => 'Vitamin & Mineral Supplementation (Calcium, Magnesium, Vitamin D)',
                'seo_description' => 'Vitamin and mineral supplementation is a supportive medical and nutritional treatment procedure used to restore essential nutrient balance, improve metabolic function, strengthen bones and muscles, and prevent complications related to nutritional deficiencies. Supplements such as calcium, magnesium, and vitamin D play important roles in maintaining bone health, nerve function, muscle activity, immune support, and overall endocrine and metabolic stability.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
