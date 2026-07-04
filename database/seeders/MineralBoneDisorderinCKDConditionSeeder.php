<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MineralBoneDisorderinCKDConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Mineral Bone Disorder in CKD')],
            [
                'name' => 'Mineral Bone Disorder in CKD',
                'slug' => Str::slug('Mineral Bone Disorder in CKD'),
                'h1' => 'Mineral Bone Disorder in CKD',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Mineral bone disorder in chronic kidney disease is a condition in which damaged kidneys fail to properly regulate calcium, phosphorus, vitamin D, and parathyroid hormone levels. This leads to bone weakness, vascular calcification, and metabolic complications.',
                'about_more' => '',
                'overview' => 'Mineral bone disorder in chronic kidney disease is a condition in which damaged kidneys fail to properly regulate calcium, phosphorus, vitamin D, and parathyroid hormone levels. This leads to bone weakness, vascular calcification, and metabolic complications.',
                'symptoms' => [
            ['value' => 'Bone pain or joint discomfort'],
            ['value' => 'Muscle weakness or cramps'],
            ['value' => 'Fragile bones and fractures'],
            ['value' => 'Itching and fatigue'],
            ['value' => 'Abnormal calcium or phosphorus blood levels'],
        ],
                'causes' => [
            ['value' => 'Chronic kidney disease reducing mineral balance'],
            ['value' => 'Vitamin D deficiency'],
            ['value' => 'High phosphorus levels in blood'],
            ['value' => 'Secondary hyperparathyroidism'],
            ['value' => 'Long-standing dialysis dependence'],
        ],
                'risks' => [
            ['value' => 'Bone fractures and skeletal deformities'],
            ['value' => 'Calcium deposits in blood vessels and organs'],
            ['value' => 'Heart disease and vascular stiffness'],
            ['value' => 'Muscle weakness and reduced mobility'],
            ['value' => 'Poor growth in children with CKD'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Phosphate-binding medications'],
            ['value' => 'Vitamin D supplementation therapy'],
            ['value' => 'Dietary phosphorus restriction'],
            ['value' => 'Regular calcium and parathyroid hormone monitoring'],
            ['value' => 'Dialysis optimization and nephrology follow-up'],
        ],
                'recovery' => 'Proper management of mineral balance significantly reduces bone complications and cardiovascular risk. Lifelong monitoring is often required in advanced kidney disease.',
                'sort_order' => 33,
                'is_active' => true,
                'meta_title' => 'Mineral Bone Disorder in CKD',
                'meta_description' => 'Mineral bone disorder in chronic kidney disease is a condition in which damaged kidneys fail to properly regulate calcium, phosphorus, vitamin D, and parathyroi',
                'meta_keywords' => '',
            ]
        );
    }
}
