<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PediatricLeukemiaConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Pediatric Leukemia')],
            [
                'name' => 'Pediatric Leukemia',
                'slug' => Str::slug('Pediatric Leukemia'),
                'h1' => 'Pediatric Leukemia',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Pediatric leukemia is a type of blood cancer that occurs when abnormal white blood cells grow rapidly and uncontrollably in the bone marrow and bloodstream. These abnormal cells interfere with the body’s ability to fight infections, carry oxygen, and control bleeding. Leukemia is one of the most common cancers affecting children, and early diagnosis with specialized pediatric oncology care can greatly improve treatment outcomes.',
                'about_more' => '',
                'overview' => 'Pediatric leukemia is a type of blood cancer that occurs when abnormal white blood cells grow rapidly and uncontrollably in the bone marrow and bloodstream. These abnormal cells interfere with the body’s ability to fight infections, carry oxygen, and control bleeding. Leukemia is one of the most common cancers affecting children, and early diagnosis with specialized pediatric oncology care can greatly improve treatment outcomes.',
                'symptoms' => [
            ['value' => 'Fatigue and tiring easily'],
            ['value' => 'Frequent infections or fever'],
            ['value' => 'Bone or joint pain and tenderness'],
            ['value' => 'Tiny red spots on the skin (petechiae)'],
            ['value' => 'Unexplained weight loss or poor appetite'],
        ],
                'causes' => [
            ['value' => 'Certain inherited or genetic disorders'],
            ['value' => 'Exposure to industrial chemicals or radiation'],
            ['value' => 'Previous cancer treatment with chemotherapy or radiation'],
            ['value' => 'Smoking-related environmental exposure'],
            ['value' => 'Family history of leukemia or blood disorders'],
        ],
                'risks' => [
            ['value' => 'Severe infections due to weakened immunity'],
            ['value' => 'Anemia and reduced oxygen delivery'],
            ['value' => 'Easy bruising or excessive bleeding'],
            ['value' => 'Spread of abnormal cells to organs or the nervous system'],
            ['value' => 'Treatment-related complications affecting growth and development'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Chemotherapy and targeted therapy'],
            ['value' => 'Immunotherapy and biological therapy'],
            ['value' => 'Radiation therapy in selected cases'],
            ['value' => 'Bone marrow or stem cell transplantation'],
            ['value' => 'Supportive pediatric oncology care and infection management'],
        ],
                'recovery' => 'The long-term outlook for pediatric leukemia has improved significantly with advances in modern pediatric cancer treatment. Many children achieve remission and long-term recovery with early diagnosis and comprehensive medical care. Ongoing pediatric oncology follow-up, rehabilitation, nutritional support, and emotional care are important for supporting recovery, healthy development, and long-term quality of life. _______________________ 19. Pediatric Cancers (Leukemia, Neuroblastoma, Wilms Tumor) Neuroblastoma',
                'sort_order' => 18,
                'is_active' => true,
                'meta_title' => 'Pediatric Leukemia',
                'meta_description' => 'Pediatric leukemia is a type of blood cancer that occurs when abnormal white blood cells grow rapidly and uncontrollably in the bone marrow and bloodstream. The',
                'meta_keywords' => '',
            ]
        );
    }
}
