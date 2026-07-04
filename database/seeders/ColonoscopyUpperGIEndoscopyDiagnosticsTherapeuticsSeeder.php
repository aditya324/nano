<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ColonoscopyUpperGIEndoscopyDiagnosticsTherapeuticsSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Colonoscopy / Upper GI Endoscopy Diagnostics & Therapeutics')],
            [
                'title' => 'Colonoscopy / Upper GI Endoscopy Diagnostics & Therapeutics',
                'slug' => Str::slug('Colonoscopy / Upper GI Endoscopy Diagnostics & Therapeutics'),
                'introduction' => 'Colonoscopy and upper GI endoscopy are advanced procedures used to examine the digestive tract for diagnosis and treatment of gastrointestinal diseases. These procedures help identify abnormalities early and provide minimally invasive treatment options.',
                'what_is' => 'Upper GI endoscopy evaluates: Esophagus Stomach Duodenum Colonoscopy evaluates: Colon Rectum These procedures help perform: Biopsy collection Polyp removal Bleeding control Stricture treatment Cancer screening They are essential tools in modern gastroenterology care.',
                'symptoms' => [
            ['value' => 'Abdominal pain or bloating'],
            ['value' => 'Difficulty swallowing'],
            ['value' => 'Blood in stool or vomiting blood'],
            ['value' => 'Chronic diarrhea or constipation'],
            ['value' => 'Unexplained weight loss or anemia'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Bleeding or infection'],
            ['value' => 'Perforation of gastrointestinal tract'],
            ['value' => 'Sedation-related complications'],
            ['value' => 'Temporary bloating or discomfort'],
            ['value' => 'Rare allergic reactions to medications'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Rest after sedation procedures'],
            ['value' => 'Maintain hydration properly'],
            ['value' => 'Follow dietary instructions carefully'],
            ['value' => 'Monitor for bleeding or severe pain'],
            ['value' => 'Attend follow-up consultations for biopsy results'],
        ],
                'surgery_risks' => [
            ['value' => 'Bleeding or infection'],
            ['value' => 'Perforation of gastrointestinal tract'],
            ['value' => 'Sedation-related complications'],
            ['value' => 'Temporary bloating or discomfort'],
            ['value' => 'Rare allergic reactions to medications'],
        ],
                'long_term_outlook' => 'Endoscopic procedures support early diagnosis, minimally invasive treatment, and effective long-term management of digestive disorders.',
                'conclusion' => '',
                'seo_title' => 'Colonoscopy / Upper GI Endoscopy Diagnostics & Therapeutics',
                'seo_description' => 'Colonoscopy and upper GI endoscopy are advanced procedures used to examine the digestive tract for diagnosis and treatment of gastrointestinal diseases. These procedures help identify abnormalities early and provide minimally invasive treatment options.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
