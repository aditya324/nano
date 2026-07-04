<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SpeechAudiometrySetupSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Speech Audiometry Setup')],
            [
                'title' => 'Speech Audiometry Setup',
                'slug' => Str::slug('Speech Audiometry Setup'),
                'introduction' => 'A speech audiometry setup is a specialized hearing assessment system used to evaluate a patient’s ability to hear, recognize, and understand spoken words. The test helps assess communication ability and functional hearing performance. It is commonly used in hearing aid evaluation and speech rehabilitation planning.',
                'what_is' => 'During speech audiometry, patients listen to spoken words or sentences at different sound levels and repeat what they hear. The test evaluates: Speech recognition ability Word understanding Hearing clarity Communication performance Benefit from hearing aids Speech audiometry is often combined with pure tone audiometry for comprehensive hearing assessment.',
                'symptoms' => [
            ['value' => 'Difficulty understanding speech'],
            ['value' => 'Hearing conversations unclearly'],
            ['value' => 'Communication problems'],
            ['value' => 'Hearing difficulty in noisy environments'],
            ['value' => 'Suspected hearing impairment'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'No major medical risks'],
            ['value' => 'Temporary concentration fatigue'],
            ['value' => 'Anxiety in pediatric patients'],
            ['value' => 'Inaccurate results due to poor cooperation'],
            ['value' => 'Mild frustration during difficult testing'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Continue hearing rehabilitation programs if advised'],
            ['value' => 'Use hearing aids consistently if prescribed'],
            ['value' => 'Attend periodic hearing assessments'],
            ['value' => 'Practice speech and listening exercises regularly'],
            ['value' => 'Avoid excessive noise exposure'],
        ],
                'surgery_risks' => [
            ['value' => 'No major medical risks'],
            ['value' => 'Temporary concentration fatigue'],
            ['value' => 'Anxiety in pediatric patients'],
            ['value' => 'Inaccurate results due to poor cooperation'],
            ['value' => 'Mild frustration during difficult testing'],
        ],
                'long_term_outlook' => 'Speech audiometry improves diagnosis of communication-related hearing disorders and supports better long-term hearing rehabilitation outcomes.',
                'conclusion' => '',
                'seo_title' => 'Speech Audiometry Setup',
                'seo_description' => 'A speech audiometry setup is a specialized hearing assessment system used to evaluate a patient’s ability to hear, recognize, and understand spoken words. The test helps assess communication ability and functional hearing performance. It is commonly used in hearing aid evaluation and speech rehabilitation planning.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
