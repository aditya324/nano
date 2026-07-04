<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProtonPumpInhibitorsH2BlockersSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Proton Pump Inhibitors / H2 Blockers')],
            [
                'title' => 'Proton Pump Inhibitors / H2 Blockers',
                'slug' => Str::slug('Proton Pump Inhibitors / H2 Blockers'),
                'introduction' => 'Proton pump inhibitors (PPIs) and H2 blockers are medications used to reduce stomach acid production and treat acid-related gastrointestinal disorders. They are commonly prescribed for GERD, gastritis, peptic ulcer disease, and acid reflux symptoms.',
                'what_is' => 'PPIs work by strongly suppressing acid secretion, while H2 blockers reduce acid production through histamine receptor blockade. Commonly treated conditions include: Acid reflux disease Gastric ulcers Duodenal ulcers Esophagitis Gastritis These medications help heal irritated digestive lining and relieve symptoms effectively.',
                'symptoms' => [
            ['value' => 'Heartburn and chest burning'],
            ['value' => 'Acid regurgitation'],
            ['value' => 'Upper abdominal pain'],
            ['value' => 'Nausea and indigestion'],
            ['value' => 'Difficulty swallowing due to reflux'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Headache or dizziness'],
            ['value' => 'Vitamin B12 deficiency with prolonged use'],
            ['value' => 'Increased infection risk in long-term therapy'],
            ['value' => 'Diarrhea or constipation'],
            ['value' => 'Rare kidney-related side effects'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Take medications exactly as prescribed'],
            ['value' => 'Avoid late-night heavy meals'],
            ['value' => 'Reduce intake of spicy and acidic foods'],
            ['value' => 'Maintain upright posture after meals'],
            ['value' => 'Attend regular follow-up evaluations'],
        ],
                'surgery_risks' => [
            ['value' => 'Headache or dizziness'],
            ['value' => 'Vitamin B12 deficiency with prolonged use'],
            ['value' => 'Increased infection risk in long-term therapy'],
            ['value' => 'Diarrhea or constipation'],
            ['value' => 'Rare kidney-related side effects'],
        ],
                'long_term_outlook' => 'Acid-suppressing medications provide excellent symptom control, improve healing of ulcers and reflux disease, and reduce complications when appropriately monitored.',
                'conclusion' => '',
                'seo_title' => 'Proton Pump Inhibitors / H2 Blockers',
                'seo_description' => 'Proton pump inhibitors (PPIs) and H2 blockers are medications used to reduce stomach acid production and treat acid-related gastrointestinal disorders. They are commonly prescribed for GERD, gastritis, peptic ulcer disease, and acid reflux symptoms.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
