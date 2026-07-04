<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EpleyManeuverforBPPVSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Epley Maneuver for BPPV')],
            [
                'title' => 'Epley Maneuver for BPPV',
                'slug' => Str::slug('Epley Maneuver for BPPV'),
                'introduction' => 'The Epley maneuver is a specialized positional treatment used for Benign Paroxysmal Positional Vertigo (BPPV), a common inner ear disorder causing brief episodes of spinning dizziness. The maneuver helps reposition displaced calcium crystals within the inner ear balance canals to relieve vertigo symptoms. It is a simple and highly effective non-surgical treatment.',
                'what_is' => 'During the procedure, the ENT specialist or trained therapist guides the patient through a sequence of carefully controlled head and body movements designed to move displaced inner ear particles back into their proper position. The procedure is usually performed in the outpatient clinic and often provides rapid symptom relief. Some patients may require repeated sessions for complete improvement. The Epley maneuver is commonly recommended for: Positional vertigo Sudden spinning sensation with head movement Recurrent BPPV episodes Balance disturbances caused by inner ear crystal displacement',
                'symptoms' => [
            ['value' => 'Brief spinning dizziness'],
            ['value' => 'Vertigo triggered by head movement'],
            ['value' => 'Nausea'],
            ['value' => 'Balance problems'],
            ['value' => 'Sensation of movement while lying down or turning'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Temporary dizziness during the maneuver'],
            ['value' => 'Nausea or imbalance'],
            ['value' => 'Rare recurrence of symptoms'],
            ['value' => 'Neck discomfort in some patients'],
            ['value' => 'Incomplete symptom relief requiring repeat treatment'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Avoid sudden head movements temporarily'],
            ['value' => 'Sleep with slight head elevation if advised'],
            ['value' => 'Perform balance exercises if recommended'],
            ['value' => 'Attend follow-up visits if symptoms recur'],
            ['value' => 'Report persistent dizziness promptly'],
        ],
                'surgery_risks' => [
            ['value' => 'Temporary dizziness during the maneuver'],
            ['value' => 'Nausea or imbalance'],
            ['value' => 'Rare recurrence of symptoms'],
            ['value' => 'Neck discomfort in some patients'],
            ['value' => 'Incomplete symptom relief requiring repeat treatment'],
        ],
                'long_term_outlook' => 'The Epley maneuver provides excellent relief for most patients with BPPV. Many individuals experience long-term resolution of vertigo symptoms with proper treatment and follow-up care.',
                'conclusion' => '',
                'seo_title' => 'Epley Maneuver for BPPV',
                'seo_description' => 'The Epley maneuver is a specialized positional treatment used for Benign Paroxysmal Positional Vertigo (BPPV), a common inner ear disorder causing brief episodes of spinning dizziness. The maneuver helps reposition displaced calcium crystals within the inner ear balance canals to relieve vertigo symptoms. It is a simple and highly effective non-surgical treatment.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
