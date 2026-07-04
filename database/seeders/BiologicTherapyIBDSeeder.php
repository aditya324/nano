<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BiologicTherapyIBDSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Biologic Therapy (IBD)')],
            [
                'title' => 'Biologic Therapy (IBD)',
                'slug' => Str::slug('Biologic Therapy (IBD)'),
                'introduction' => 'Biologic therapy involves advanced targeted medications used to treat moderate to severe inflammatory bowel disease (IBD). These medications specifically block inflammatory pathways responsible for intestinal damage.',
                'what_is' => 'Biologic agents are commonly used for: Crohn’s disease Ulcerative colitis Severe immune-mediated intestinal inflammation They may be given through injections or intravenous infusions. Biologics help reduce hospitalizations, improve quality of life, and prevent long-term bowel complications.',
                'symptoms' => [
            ['value' => 'Severe abdominal pain'],
            ['value' => 'Chronic diarrhea'],
            ['value' => 'Blood in stool'],
            ['value' => 'Weight loss and malnutrition'],
            ['value' => 'Frequent disease flare-ups'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Increased infection susceptibility'],
            ['value' => 'Injection or infusion reactions'],
            ['value' => 'Liver-related side effects'],
            ['value' => 'Rare allergic complications'],
            ['value' => 'High treatment cost and monitoring needs'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Attend scheduled infusion or injection appointments'],
            ['value' => 'Monitor for fever or infections'],
            ['value' => 'Maintain healthy nutrition and hydration'],
            ['value' => 'Follow specialist monitoring protocols'],
            ['value' => 'Continue regular gastrointestinal evaluations'],
        ],
                'surgery_risks' => [
            ['value' => 'Increased infection susceptibility'],
            ['value' => 'Injection or infusion reactions'],
            ['value' => 'Liver-related side effects'],
            ['value' => 'Rare allergic complications'],
            ['value' => 'High treatment cost and monitoring needs'],
        ],
                'long_term_outlook' => 'Biologic therapy provides effective long-term disease control, improves bowel healing, and enhances quality of life in severe IBD patients.',
                'conclusion' => '',
                'seo_title' => 'Biologic Therapy (IBD)',
                'seo_description' => 'Biologic therapy involves advanced targeted medications used to treat moderate to severe inflammatory bowel disease (IBD). These medications specifically block inflammatory pathways responsible for intestinal damage.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
