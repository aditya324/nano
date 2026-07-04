<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BoneDensitometryDEXAScanConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Bone Densitometry (DEXA Scan)')],
            [
                'name' => 'Bone Densitometry (DEXA Scan)',
                'slug' => Str::slug('Bone Densitometry (DEXA Scan)'),
                'h1' => 'Bone Densitometry (DEXA Scan)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Bone densitometry, commonly known as a DEXA (Dual-Energy X-ray Absorptiometry) scan, is a specialized imaging procedure used to measure bone mineral density and evaluate bone strength. It helps diagnose osteoporosis, assess fracture risk, and monitor bone health over time.',
                'about_more' => '',
                'overview' => 'A DEXA scan uses low-dose X-rays to measure bone density, most commonly in the spine, hip, and sometimes the forearm. This procedure is quick, painless, and noninvasive. Bone densitometry is widely recommended for individuals at risk of osteoporosis, age-related bone loss, hormonal disorders, long-term steroid use, or fractures related to weak bones. It also helps monitor the effectiveness of osteoporosis treatment and long-term bone health management.',
                'symptoms' => [
            ['value' => 'Bone pain or weakness'],
            ['value' => 'Frequent fractures or fractures after minor injury'],
            ['value' => 'Loss of height or stooped posture'],
            ['value' => 'Back pain related to spinal bone loss'],
            ['value' => 'Increased risk factors for osteoporosis or reduced bone strength'],
        ],
                'causes' => [
            ['value' => 'Diagnosis of osteoporosis and osteopenia'],
            ['value' => 'Assessment of fracture risk and bone strength'],
            ['value' => 'Monitoring age-related bone loss'],
            ['value' => 'Evaluation of bone health in postmenopausal individuals'],
            ['value' => 'Follow-up assessment during osteoporosis treatment'],
        ],
                'risks' => [
            ['value' => 'Minimal exposure to low-dose radiation'],
            ['value' => 'Rare need for repeat testing if images are unclear'],
            ['value' => 'Temporary discomfort from positioning during the scan'],
            ['value' => 'Limited evaluation in severe spinal deformities or metal implants'],
            ['value' => 'Special precautions required during pregnancy'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Bone densitometry supports early diagnosis of bone loss, treatment planning, and long-term monitoring of skeletal health. It helps healthcare professionals recommend medications, calcium and vitamin supplementation, lifestyle modification, exercise programs, and fracture prevention strategies to maintain bone strength and reduce future complications.'],
            ['value' => 'Most individuals can resume normal activities immediately'],
            ['value' => 'Maintaining adequate calcium and vitamin D intake may be advised'],
            ['value' => 'Follow-up scans may be recommended for ongoing monitoring'],
            ['value' => 'Patients should discuss results and fracture risk with their healthcare provider'],
            ['value' => 'Regular exercise and healthy lifestyle habits are important for bone health'],
        ],
                'recovery' => 'The long-term outlook with regular bone densitometry screening is highly positive because early detection of bone loss allows timely intervention and fracture prevention. Ongoing monitoring, healthy nutrition, weight-bearing exercise, and appropriate medical management can significantly improve long-term bone strength and overall skeletal health. _________________________',
                'sort_order' => 11,
                'is_active' => true,
                'meta_title' => 'Bone Densitometry (DEXA Scan)',
                'meta_description' => 'Bone densitometry, commonly known as a DEXA (Dual-Energy X-ray Absorptiometry) scan, is a specialized imaging procedure used to measure bone mineral density and',
                'meta_keywords' => '',
            ]
        );
    }
}
