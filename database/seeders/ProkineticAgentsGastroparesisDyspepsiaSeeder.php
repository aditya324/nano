<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProkineticAgentsGastroparesisDyspepsiaSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Prokinetic Agents (Gastroparesis, Dyspepsia)')],
            [
                'title' => 'Prokinetic Agents (Gastroparesis, Dyspepsia)',
                'slug' => Str::slug('Prokinetic Agents (Gastroparesis, Dyspepsia)'),
                'introduction' => 'Prokinetic agents are medications that improve movement of the stomach and intestines, helping food pass more effectively through the digestive tract. They are commonly used for gastroparesis and functional dyspepsia.',
                'what_is' => 'These medications enhance gastrointestinal motility and reduce symptoms related to delayed stomach emptying. Common indications include: Gastroparesis Functional dyspepsia Nausea and bloating Early satiety Reflux associated with delayed emptying Prokinetic therapy is often combined with dietary modifications.',
                'symptoms' => [
            ['value' => 'Bloating after meals'],
            ['value' => 'Early fullness while eating'],
            ['value' => 'Nausea or vomiting'],
            ['value' => 'Abdominal discomfort'],
            ['value' => 'Poor appetite and indigestion'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Drowsiness or fatigue'],
            ['value' => 'Diarrhea or abdominal cramps'],
            ['value' => 'Rare movement-related side effects'],
            ['value' => 'Drug interactions'],
            ['value' => 'Reduced effectiveness with prolonged use'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Eat small frequent meals'],
            ['value' => 'Avoid heavy fatty foods'],
            ['value' => 'Follow medication schedules carefully'],
            ['value' => 'Maintain hydration and nutrition'],
            ['value' => 'Attend follow-up gastrointestinal assessments'],
        ],
                'surgery_risks' => [
            ['value' => 'Drowsiness or fatigue'],
            ['value' => 'Diarrhea or abdominal cramps'],
            ['value' => 'Rare movement-related side effects'],
            ['value' => 'Drug interactions'],
            ['value' => 'Reduced effectiveness with prolonged use'],
        ],
                'long_term_outlook' => 'Prokinetic therapy improves digestive motility, reduces bloating and nausea, and enhances nutritional intake and patient comfort.',
                'conclusion' => '',
                'seo_title' => 'Prokinetic Agents (Gastroparesis, Dyspepsia)',
                'seo_description' => 'Prokinetic agents are medications that improve movement of the stomach and intestines, helping food pass more effectively through the digestive tract. They are commonly used for gastroparesis and functional dyspepsia.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
