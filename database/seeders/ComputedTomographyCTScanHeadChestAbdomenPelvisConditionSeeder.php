<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ComputedTomographyCTScanHeadChestAbdomenPelvisConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Computed Tomography (CT) Scan (Head, Chest, Abdomen & Pelvis)')],
            [
                'name' => 'Computed Tomography (CT) Scan (Head, Chest, Abdomen & Pelvis)',
                'slug' => Str::slug('Computed Tomography (CT) Scan (Head, Chest, Abdomen & Pelvis)'),
                'h1' => 'Computed Tomography (CT) Scan (Head, Chest, Abdomen & Pelvis)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Computed Tomography (CT) scan is an advanced diagnostic imaging procedure that uses X-rays and computer technology to create detailed cross-sectional images of internal organs, bones, blood vessels, and soft tissues. CT scans help healthcare professionals diagnose injuries, infections, tumors, bleeding, and various medical conditions with high accuracy and speed.',
                'about_more' => '',
                'overview' => 'CT scans are commonly performed for the head, chest, abdomen, and pelvis to evaluate a wide range of medical conditions. Head CT scans help assess stroke, brain injury, bleeding, and neurological disorders. Chest CT scans evaluate lung diseases, infections, tumors, and vascular abnormalities. Abdominal and pelvic CT scans help detect organ disorders, kidney stones, bowel conditions, tumors, infections, and internal injuries. CT imaging provides rapid and highly detailed visualization, making it essential in emergency medicine, oncology, trauma care, and long-term disease monitoring.',
                'symptoms' => [
            ['value' => 'Severe headache or neurological symptoms'],
            ['value' => 'Chest pain, cough, or breathing difficulty'],
            ['value' => 'Abdominal pain, swelling, or digestive problems'],
            ['value' => 'Pelvic pain or unexplained bleeding'],
            ['value' => 'Trauma-related injuries or unexplained physical symptoms'],
        ],
                'causes' => [
            ['value' => 'Head injury, stroke, or neurological abnormalities'],
            ['value' => 'Lung infections, tumors, or respiratory disorders'],
            ['value' => 'Abdominal organ disease or internal bleeding'],
            ['value' => 'Pelvic masses, infections, or urinary tract disorders'],
            ['value' => 'Trauma, fractures, or vascular abnormalities requiring detailed evaluation'],
        ],
                'risks' => [
            ['value' => 'Exposure to ionizing radiation during imaging'],
            ['value' => 'Allergic reactions to contrast material in some individuals'],
            ['value' => 'Rare kidney-related complications from contrast use'],
            ['value' => 'Temporary discomfort during contrast injection'],
            ['value' => 'Need for additional imaging in complex medical conditions'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Diagnostic CT imaging for head, chest, abdomen, and pelvis evaluation'],
            ['value' => 'Emergency trauma and internal injury assessment'],
            ['value' => 'Cancer detection, staging, and treatment monitoring'],
            ['value' => 'Image-guided procedures and surgical planning support'],
            ['value' => 'Long-term follow-up imaging for chronic medical conditions'],
        ],
                'recovery' => 'The long-term outlook with CT imaging evaluation is highly positive because it supports rapid diagnosis, accurate treatment planning, and effective disease monitoring. Early detection, timely medical intervention, regular follow-up, and appropriate healthcare management can significantly improve patient outcomes and long-term health.',
                'sort_order' => 2,
                'is_active' => true,
                'meta_title' => 'Computed Tomography (CT) Scan (Head, Chest, Abdomen & Pelvis)',
                'meta_description' => 'Computed Tomography (CT) scan is an advanced diagnostic imaging procedure that uses X-rays and computer technology to create detailed cross-sectional images of ',
                'meta_keywords' => '',
            ]
        );
    }
}
