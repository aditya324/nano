<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class OsteoporosisOsteopeniaConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Osteoporosis / Osteopenia')],
            [
                'name' => 'Osteoporosis / Osteopenia',
                'slug' => Str::slug('Osteoporosis / Osteopenia'),
                'h1' => 'Osteoporosis / Osteopenia',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Osteoporosis and osteopenia are bone health conditions characterized by reduced bone density and weakened bone strength, increasing the risk of fractures and skeletal complications. Osteopenia is an early stage of bone loss where bone density is lower than normal but not severe enough to be classified as osteoporosis. Osteoporosis is a more advanced condition in which bones become fragile, porous, and highly susceptible to fractures, especially in the spine, hips, and wrists. Early diagnosis and proper management are essential to preserve bone health and prevent long-term complications.',
                'about_more' => '',
                'overview' => 'Osteoporosis and osteopenia are bone health conditions characterized by reduced bone density and weakened bone strength, increasing the risk of fractures and skeletal complications. Osteopenia is an early stage of bone loss where bone density is lower than normal but not severe enough to be classified as osteoporosis. Osteoporosis is a more advanced condition in which bones become fragile, porous, and highly susceptible to fractures, especially in the spine, hips, and wrists. Early diagnosis and proper management are essential to preserve bone health and prevent long-term complications.',
                'symptoms' => [
            ['value' => 'Bone pain or back pain'],
            ['value' => 'Loss of height or stooped posture'],
            ['value' => 'Fragility fractures after minor injury or falls'],
            ['value' => 'Weakness or reduced physical mobility'],
            ['value' => 'Often asymptomatic in early stages until fractures occur'],
        ],
                'causes' => [
            ['value' => 'Aging and natural bone density loss'],
            ['value' => 'Hormonal changes, especially after menopause'],
            ['value' => 'Calcium or vitamin D deficiency'],
            ['value' => 'Sedentary lifestyle or lack of weight-bearing exercise'],
            ['value' => 'Long-term steroid use, smoking, alcohol use, or chronic medical conditions affecting bone metabolism'],
        ],
                'risks' => [
            ['value' => 'Increased risk of fractures, especially hip and spine fractures'],
            ['value' => 'Chronic pain or reduced mobility following fractures'],
            ['value' => 'Spinal deformities or loss of height'],
            ['value' => 'Reduced physical independence and quality of life'],
            ['value' => 'Increased risk of disability or complications after falls in elderly individuals'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Treatment for osteoporosis and osteopenia focuses on improving bone strength, slowing bone loss, preventing fractures, and maintaining mobility and overall skeletal health. Management may include calcium and vitamin D supplementation, osteoporosis medications, hormone-related therapy when indicated, weight-bearing exercises, physiotherapy, fall prevention strategies, and nutritional counseling. Patients may also benefit from lifestyle modification, smoking cessation, reduced alcohol intake, regular bone density monitoring, and endocrinology or orthopedic follow-up to optimize long-term bone health and reduce fracture risk.'],
        ],
                'recovery' => 'The long-term outlook for osteoporosis and osteopenia is generally positive with early diagnosis and consistent bone health management. Regular exercise, healthy nutrition, medication adherence, fall prevention, calcium and vitamin D support, lifestyle modification, and continuous medical follow-up significantly help improve bone strength, reduce fracture risk, preserve mobility, maintain independence, and enhance overall quality of life. ________________ 13. Metabolic Syndrome Metabolic Syndrome',
                'sort_order' => 12,
                'is_active' => true,
                'meta_title' => 'Osteoporosis / Osteopenia',
                'meta_description' => 'Osteoporosis and osteopenia are bone health conditions characterized by reduced bone density and weakened bone strength, increasing the risk of fractures and sk',
                'meta_keywords' => '',
            ]
        );
    }
}
