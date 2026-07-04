<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UpperGIEndoscopyColonoscopyConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Upper GI Endoscopy / Colonoscopy')],
            [
                'name' => 'Upper GI Endoscopy / Colonoscopy',
                'slug' => Str::slug('Upper GI Endoscopy / Colonoscopy'),
                'h1' => 'Upper GI Endoscopy / Colonoscopy',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Upper GI endoscopy and colonoscopy are minimally invasive procedures used to examine the digestive tract using a flexible camera-equipped scope.',
                'about_more' => 'These procedures help diagnose and treat disorders affecting the esophagus, stomach, small intestine, colon, and rectum.',
                'overview' => 'Services and capabilities include: Diagnostic upper GI endoscopy Colonoscopy examination Biopsy collection Polyp detection and removal Therapeutic endoscopic procedures Common conditions evaluated include: Gastritis and ulcers Acid reflux disease Colon polyps Gastrointestinal bleeding Inflammatory bowel disease Careful bowel preparation and patient monitoring are essential for accurate examination. Symptoms Indicating Evaluation Abdominal pain Rectal bleeding Black stools Chronic acidity or vomiting Unexplained weight loss',
                'symptoms' => [],
                'causes' => [],
                'risks' => [
            ['value' => 'Bleeding after biopsy or polypectomy'],
            ['value' => 'Perforation of the digestive tract'],
            ['value' => 'Sedation-related complications'],
            ['value' => 'Infection risk'],
            ['value' => 'Temporary bloating or discomfort'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Rest until sedation effects wear off'],
            ['value' => 'Follow dietary instructions carefully'],
            ['value' => 'Report severe pain or bleeding immediately'],
            ['value' => 'Attend follow-up review for biopsy reports'],
            ['value' => 'Maintain regular screening schedules if advised'],
        ],
                'recovery' => 'Regular endoscopic evaluation helps detect digestive diseases early and supports timely treatment. Preventive screening significantly reduces complications from gastrointestinal cancers and chronic digestive disorders.',
                'sort_order' => 31,
                'is_active' => true,
                'meta_title' => 'Upper GI Endoscopy / Colonoscopy',
                'meta_description' => 'Upper GI endoscopy and colonoscopy are minimally invasive procedures used to examine the digestive tract using a flexible camera-equipped scope.',
                'meta_keywords' => '',
            ]
        );
    }
}
