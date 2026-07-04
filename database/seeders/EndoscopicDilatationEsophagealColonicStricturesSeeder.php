<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EndoscopicDilatationEsophagealColonicStricturesSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Endoscopic Dilatation (Esophageal / Colonic Strictures)')],
            [
                'title' => 'Endoscopic Dilatation (Esophageal / Colonic Strictures)',
                'slug' => Str::slug('Endoscopic Dilatation (Esophageal / Colonic Strictures)'),
                'introduction' => 'Endoscopic dilatation is a minimally invasive procedure used to widen narrowed areas (strictures) in the esophagus or colon. It helps restore normal passage of food or stool.',
                'what_is' => 'The procedure uses balloons or dilators passed through an endoscope to gently stretch narrowed segments. Common indications include: Esophageal strictures Colonic narrowing Post-surgical narrowing Inflammatory bowel disease strictures Radiation-related narrowing Multiple sessions may sometimes be required.',
                'symptoms' => [
            ['value' => 'Difficulty swallowing'],
            ['value' => 'Food getting stuck in throat'],
            ['value' => 'Abdominal bloating or constipation'],
            ['value' => 'Pain while eating'],
            ['value' => 'Weight loss due to poor intake'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Bleeding during procedure'],
            ['value' => 'Perforation of bowel or esophagus'],
            ['value' => 'Recurrence of narrowing'],
            ['value' => 'Infection risk'],
            ['value' => 'Temporary discomfort after dilatation'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Follow soft diet instructions initially'],
            ['value' => 'Avoid very hot or hard foods temporarily'],
            ['value' => 'Take prescribed medications regularly'],
            ['value' => 'Monitor for chest or abdominal pain'],
            ['value' => 'Attend repeat endoscopy follow-up if advised'],
        ],
                'surgery_risks' => [
            ['value' => 'Bleeding during procedure'],
            ['value' => 'Perforation of bowel or esophagus'],
            ['value' => 'Recurrence of narrowing'],
            ['value' => 'Infection risk'],
            ['value' => 'Temporary discomfort after dilatation'],
        ],
                'long_term_outlook' => 'Endoscopic dilatation significantly improves swallowing and bowel function, reduces obstruction symptoms, and enhances quality of life in patients with gastrointestinal strictures.',
                'conclusion' => '',
                'seo_title' => 'Endoscopic Dilatation (Esophageal / Colonic Strictures)',
                'seo_description' => 'Endoscopic dilatation is a minimally invasive procedure used to widen narrowed areas (strictures) in the esophagus or colon. It helps restore normal passage of food or stool.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
