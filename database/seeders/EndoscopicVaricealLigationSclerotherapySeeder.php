<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EndoscopicVaricealLigationSclerotherapySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Endoscopic Variceal Ligation / Sclerotherapy')],
            [
                'title' => 'Endoscopic Variceal Ligation / Sclerotherapy',
                'slug' => Str::slug('Endoscopic Variceal Ligation / Sclerotherapy'),
                'introduction' => 'Endoscopic variceal ligation and sclerotherapy are procedures used to treat bleeding varices in the esophagus or stomach caused by portal hypertension. These are life-saving interventions in liver disease patients.',
                'what_is' => 'During endoscopy: Variceal ligation uses rubber bands to stop bleeding veins Sclerotherapy injects medication into bleeding vessels These procedures help prevent severe gastrointestinal bleeding and reduce mortality in cirrhosis-related portal hypertension.',
                'symptoms' => [
            ['value' => 'Vomiting blood'],
            ['value' => 'Black-colored stools'],
            ['value' => 'Severe weakness or dizziness'],
            ['value' => 'Signs of liver cirrhosis'],
            ['value' => 'Anemia from gastrointestinal bleeding'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Re-bleeding episodes'],
            ['value' => 'Ulcer formation after treatment'],
            ['value' => 'Infection risk'],
            ['value' => 'Difficulty swallowing temporarily'],
            ['value' => 'Rare perforation or aspiration'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Follow dietary restrictions after procedure'],
            ['value' => 'Avoid alcohol completely'],
            ['value' => 'Take prescribed medications regularly'],
            ['value' => 'Attend repeated surveillance endoscopies'],
            ['value' => 'Monitor for recurrent bleeding symptoms'],
        ],
                'surgery_risks' => [
            ['value' => 'Re-bleeding episodes'],
            ['value' => 'Ulcer formation after treatment'],
            ['value' => 'Infection risk'],
            ['value' => 'Difficulty swallowing temporarily'],
            ['value' => 'Rare perforation or aspiration'],
        ],
                'long_term_outlook' => 'Endoscopic therapy effectively controls variceal bleeding, reduces complications of portal hypertension, and improves survival in chronic liver disease patients.',
                'conclusion' => '',
                'seo_title' => 'Endoscopic Variceal Ligation / Sclerotherapy',
                'seo_description' => 'Endoscopic variceal ligation and sclerotherapy are procedures used to treat bleeding varices in the esophagus or stomach caused by portal hypertension. These are life-saving interventions in liver disease patients.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
