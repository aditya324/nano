<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RheumatologicDisordersGoutOsteoarthritisOsteoporosisConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Rheumatologic Disorders (Gout, Osteoarthritis, Osteoporosis)')],
            [
                'name' => 'Rheumatologic Disorders (Gout, Osteoarthritis, Osteoporosis)',
                'slug' => Str::slug('Rheumatologic Disorders (Gout, Osteoarthritis, Osteoporosis)'),
                'h1' => 'Rheumatologic Disorders (Gout, Osteoarthritis, Osteoporosis)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Rheumatologic disorders are medical conditions affecting the joints, bones, muscles, and connective tissues, leading to pain, inflammation, stiffness, and reduced mobility. Conditions such as gout, osteoarthritis, and osteoporosis commonly affect physical function and quality of life, especially with aging or chronic metabolic and inflammatory changes. Gout results from uric acid crystal buildup in joints, osteoarthritis involves gradual wear and tear of joint cartilage, and osteoporosis causes weakening of bones with increased fracture risk. Early diagnosis and long-term musculoskeletal care are essential to reduce pain, preserve mobility, and prevent complications.',
                'about_more' => '',
                'overview' => 'Rheumatologic disorders are medical conditions affecting the joints, bones, muscles, and connective tissues, leading to pain, inflammation, stiffness, and reduced mobility. Conditions such as gout, osteoarthritis, and osteoporosis commonly affect physical function and quality of life, especially with aging or chronic metabolic and inflammatory changes. Gout results from uric acid crystal buildup in joints, osteoarthritis involves gradual wear and tear of joint cartilage, and osteoporosis causes weakening of bones with increased fracture risk. Early diagnosis and long-term musculoskeletal care are essential to reduce pain, preserve mobility, and prevent complications.',
                'symptoms' => [
            ['value' => 'Joint pain, stiffness, or swelling'],
            ['value' => 'Reduced mobility or difficulty performing daily activities'],
            ['value' => 'Bone weakness or increased fracture risk'],
            ['value' => 'Redness, warmth, or sudden severe joint pain in gout attacks'],
            ['value' => 'Back pain, joint deformity, or reduced physical endurance'],
        ],
                'causes' => [
            ['value' => 'Age-related degeneration of joints and bones'],
            ['value' => 'Elevated uric acid levels causing gout'],
            ['value' => 'Calcium or vitamin D deficiency affecting bone strength'],
            ['value' => 'Obesity, sedentary lifestyle, or repetitive joint stress'],
            ['value' => 'Genetic predisposition, hormonal imbalance, or chronic inflammatory conditions affecting musculoskeletal health'],
        ],
                'risks' => [
            ['value' => 'Chronic joint pain and reduced mobility'],
            ['value' => 'Joint deformities or disability due to severe arthritis'],
            ['value' => 'Bone fractures and loss of independence in osteoporosis'],
            ['value' => 'Recurrent gout attacks or kidney stone formation'],
            ['value' => 'Reduced quality of life and long-term musculoskeletal complications if untreated'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Treatment for rheumatologic disorders focuses on relieving pain, reducing inflammation, preserving joint and bone function, preventing complications, and improving overall mobility. Management may include pain-relieving medications, anti-inflammatory therapy, uric acid-lowering treatment, calcium and vitamin D supplementation, osteoporosis medications, physiotherapy, weight management, and lifestyle modification. Patients may also benefit from exercise programs, nutritional counseling, fall prevention strategies, rehabilitation therapy, rheumatology follow-up, and long-term bone and joint monitoring to optimize musculoskeletal health and daily functioning.'],
        ],
                'recovery' => 'The long-term outlook for rheumatologic disorders depends on the specific condition, severity of joint or bone involvement, treatment adherence, and lifestyle management. Early diagnosis, medication compliance, healthy nutrition, regular exercise, weight control, physiotherapy, fall prevention, routine medical monitoring, and continuous specialist follow-up significantly help reduce pain, prevent complications, preserve mobility and bone strength, improve physical functioning, and enhance overall quality of life. _________________ 19. Obesity / Metabolic Syndrome Obesity / Metabolic Syndrome',
                'sort_order' => 21,
                'is_active' => true,
                'meta_title' => 'Rheumatologic Disorders (Gout, Osteoarthritis, Osteoporosis)',
                'meta_description' => 'Rheumatologic disorders are medical conditions affecting the joints, bones, muscles, and connective tissues, leading to pain, inflammation, stiffness, and reduc',
                'meta_keywords' => '',
            ]
        );
    }
}
