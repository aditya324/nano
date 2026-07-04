<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CorticosteroidsImmunomodulatorsIBDAutoimmuneHepatitisSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Corticosteroids / Immunomodulators (IBD, Autoimmune Hepatitis)')],
            [
                'title' => 'Corticosteroids / Immunomodulators (IBD, Autoimmune Hepatitis)',
                'slug' => Str::slug('Corticosteroids / Immunomodulators (IBD, Autoimmune Hepatitis)'),
                'introduction' => 'Corticosteroids and immunomodulators are medications used to reduce inflammation and suppress abnormal immune responses in gastrointestinal autoimmune disorders. They are commonly used in inflammatory bowel disease (IBD) and autoimmune hepatitis.',
                'what_is' => 'These medications help control inflammation and prevent disease flare-ups. Conditions treated include: Crohn’s disease Ulcerative colitis Autoimmune hepatitis Severe intestinal inflammation Long-term management often requires careful monitoring to reduce medication-related complications.',
                'symptoms' => [
            ['value' => 'Chronic abdominal pain'],
            ['value' => 'Bloody diarrhea'],
            ['value' => 'Weight loss and fatigue'],
            ['value' => 'Liver-related symptoms'],
            ['value' => 'Persistent intestinal inflammation'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Increased infection risk'],
            ['value' => 'Weight gain and fluid retention'],
            ['value' => 'Bone thinning with long-term steroid use'],
            ['value' => 'Elevated blood sugar levels'],
            ['value' => 'Liver or blood count abnormalities'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Take medications exactly as prescribed'],
            ['value' => 'Attend regular blood investigations'],
            ['value' => 'Monitor for signs of infection'],
            ['value' => 'Maintain balanced nutrition and calcium intake'],
            ['value' => 'Follow long-term specialist care plans'],
        ],
                'surgery_risks' => [
            ['value' => 'Increased infection risk'],
            ['value' => 'Weight gain and fluid retention'],
            ['value' => 'Bone thinning with long-term steroid use'],
            ['value' => 'Elevated blood sugar levels'],
            ['value' => 'Liver or blood count abnormalities'],
        ],
                'long_term_outlook' => 'These therapies significantly reduce inflammation, improve symptom control, and help maintain long-term remission in autoimmune gastrointestinal disorders.',
                'conclusion' => '',
                'seo_title' => 'Corticosteroids / Immunomodulators (IBD, Autoimmune Hepatitis)',
                'seo_description' => 'Corticosteroids and immunomodulators are medications used to reduce inflammation and suppress abnormal immune responses in gastrointestinal autoimmune disorders. They are commonly used in inflammatory bowel disease (IBD) and autoimmune hepatitis.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
