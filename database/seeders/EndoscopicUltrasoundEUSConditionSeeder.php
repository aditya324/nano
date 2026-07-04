<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EndoscopicUltrasoundEUSConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Endoscopic Ultrasound (EUS)')],
            [
                'name' => 'Endoscopic Ultrasound (EUS)',
                'slug' => Str::slug('Endoscopic Ultrasound (EUS)'),
                'h1' => 'Endoscopic Ultrasound (EUS)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Endoscopic ultrasound combines endoscopy and ultrasound imaging to evaluate structures within and around the digestive tract.',
                'about_more' => 'It provides highly detailed images of the pancreas, bile ducts, stomach, lymph nodes, and surrounding tissues.',
                'overview' => 'Services and capabilities include: Pancreatic lesion evaluation Fine needle aspiration (FNA) biopsy Cancer staging Biliary and pancreatic assessment Cyst and tumor evaluation EUS is commonly used for both diagnostic and therapeutic gastrointestinal procedures. Symptoms Indicating Evaluation Unexplained abdominal pain Jaundice Pancreatic cysts or masses Difficulty swallowing Suspected gastrointestinal tumors',
                'symptoms' => [],
                'causes' => [],
                'risks' => [
            ['value' => 'Bleeding after biopsy'],
            ['value' => 'Infection risk'],
            ['value' => 'Pancreatitis in some procedures'],
            ['value' => 'Sedation-related complications'],
            ['value' => 'Rare perforation'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Avoid eating until advised after sedation'],
            ['value' => 'Monitor for fever or abdominal pain'],
            ['value' => 'Follow biopsy report appointments'],
            ['value' => 'Take medications as prescribed'],
            ['value' => 'Seek urgent care for persistent vomiting or bleeding'],
        ],
                'recovery' => 'EUS improves early detection and staging of gastrointestinal diseases, allowing more accurate treatment planning and better long-term patient outcomes.',
                'sort_order' => 34,
                'is_active' => true,
                'meta_title' => 'Endoscopic Ultrasound (EUS)',
                'meta_description' => 'Endoscopic ultrasound combines endoscopy and ultrasound imaging to evaluate structures within and around the digestive tract.',
                'meta_keywords' => '',
            ]
        );
    }
}
