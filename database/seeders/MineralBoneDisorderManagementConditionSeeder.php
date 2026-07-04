<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MineralBoneDisorderManagementConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Mineral Bone Disorder Management')],
            [
                'name' => 'Mineral Bone Disorder Management',
                'slug' => Str::slug('Mineral Bone Disorder Management'),
                'h1' => 'Mineral Bone Disorder Management',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Mineral bone disorder management is a specialized nephrology treatment program focused on correcting calcium, phosphorus, vitamin D, and parathyroid hormone abnormalities caused by chronic kidney disease.',
                'about_more' => 'When kidneys fail to maintain normal mineral balance, patients may develop weak bones, fractures, vascular calcification, and hormonal disturbances. Early management helps preserve bone strength and reduces complications affecting the skeleton and cardiovascular system.',
                'overview' => 'The treatment program includes: Calcium and phosphorus monitoring Vitamin D therapy Phosphate binder medications Dietary phosphorus restriction Hormonal evaluation Bone health monitoring Patients undergo regular: Blood investigations Bone mineral assessments Kidney function monitoring Doctors may prescribe: Vitamin D supplements Calcium medications Calcimimetic therapy Dietary modifications The treatment aims to maintain healthy mineral balance while reducing bone pain and fracture risk.',
                'symptoms' => [
            ['value' => 'Bone pain'],
            ['value' => 'Muscle weakness'],
            ['value' => 'Joint discomfort'],
            ['value' => 'Fractures'],
            ['value' => 'Abnormal blood calcium or phosphorus levels'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Bone fractures'],
            ['value' => 'Bone deformities'],
            ['value' => 'Vascular calcification'],
            ['value' => 'Severe hormonal imbalance'],
            ['value' => 'Reduced mobility'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Follow prescribed renal diet restrictions'],
            ['value' => 'Take medications consistently'],
            ['value' => 'Attend regular blood testing'],
            ['value' => 'Maintain nephrology follow-up visits'],
            ['value' => 'Monitor for bone pain or weakness'],
        ],
                'recovery' => 'Proper mineral bone disorder management improves bone health and reduces long-term skeletal complications in CKD patients. Early intervention and continuous monitoring help maintain mobility, comfort, and cardiovascular safety.',
                'sort_order' => 12,
                'is_active' => true,
                'meta_title' => 'Mineral Bone Disorder Management',
                'meta_description' => 'Mineral bone disorder management is a specialized nephrology treatment program focused on correcting calcium, phosphorus, vitamin D, and parathyroid hormone abn',
                'meta_keywords' => '',
            ]
        );
    }
}
