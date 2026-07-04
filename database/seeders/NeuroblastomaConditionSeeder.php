<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class NeuroblastomaConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Neuroblastoma')],
            [
                'name' => 'Neuroblastoma',
                'slug' => Str::slug('Neuroblastoma'),
                'h1' => 'Neuroblastoma',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Neuroblastoma is a type of childhood cancer that develops from immature nerve cells called neuroblasts. It commonly affects babies and young children and usually begins in the adrenal glands located above the kidneys, although it can also develop in the chest, abdomen, neck, or spine. Early diagnosis and specialized pediatric oncology care are important for improving treatment outcomes.',
                'about_more' => '',
                'overview' => 'Neuroblastoma is a type of childhood cancer that develops from immature nerve cells called neuroblasts. It commonly affects babies and young children and usually begins in the adrenal glands located above the kidneys, although it can also develop in the chest, abdomen, neck, or spine. Early diagnosis and specialized pediatric oncology care are important for improving treatment outcomes.',
                'symptoms' => [
            ['value' => 'Swelling or lumps in the abdomen, chest, neck, or face'],
            ['value' => 'Poor appetite or feeling full quickly'],
            ['value' => 'Difficulty urinating or passing stool'],
            ['value' => 'Persistent cough or breathing difficulty'],
            ['value' => 'Trouble swallowing or unexplained weight loss'],
        ],
                'causes' => [
            ['value' => 'Genetic and inherited risk factors'],
            ['value' => 'Abnormal development of immature nerve cells'],
            ['value' => 'Family history of neuroblastoma in rare cases'],
            ['value' => 'Certain genetic mutations affecting nerve tissue development'],
            ['value' => 'Most cases occur without a clearly identifiable cause'],
        ],
                'risks' => [
            ['value' => 'Spread of cancer to bones, bone marrow, liver, or lymph nodes'],
            ['value' => 'Severe pain, weakness, or mobility problems'],
            ['value' => 'Breathing or swallowing difficulties due to tumor pressure'],
            ['value' => 'Growth and developmental complications'],
            ['value' => 'Treatment-related side effects affecting organs or immunity'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Surgical removal of the tumor when possible'],
            ['value' => 'Chemotherapy and radiation therapy'],
            ['value' => 'Immunotherapy and targeted therapy'],
            ['value' => 'Stem cell or bone marrow transplantation in selected cases'],
            ['value' => 'Supportive pediatric oncology care and rehabilitation'],
        ],
                'recovery' => 'The long-term outlook for neuroblastoma depends on the child’s age, stage of cancer, tumor biology, and response to treatment. Some forms respond very well to therapy, especially when diagnosed early. Continuous pediatric oncology follow-up, rehabilitation, nutritional support, and emotional care are important for supporting long-term recovery and healthy development. _________________________ 19. Pediatric Cancers (Leukemia, Neuroblastoma, Wilms Tumor) Wilms Tumor',
                'sort_order' => 19,
                'is_active' => true,
                'meta_title' => 'Neuroblastoma',
                'meta_description' => 'Neuroblastoma is a type of childhood cancer that develops from immature nerve cells called neuroblasts. It commonly affects babies and young children and usuall',
                'meta_keywords' => '',
            ]
        );
    }
}
