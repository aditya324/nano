<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SteroidTherapyforNephroticSyndromeConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Steroid Therapy for Nephrotic Syndrome')],
            [
                'name' => 'Steroid Therapy for Nephrotic Syndrome',
                'slug' => Str::slug('Steroid Therapy for Nephrotic Syndrome'),
                'h1' => 'Steroid Therapy for Nephrotic Syndrome',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Steroid therapy is a primary treatment for nephrotic syndrome, a kidney disorder characterized by excessive protein loss in urine, swelling, and low blood protein levels.',
                'about_more' => 'Steroids help reduce inflammation in the kidney filters and control abnormal immune responses causing protein leakage. This treatment is especially effective in many pediatric and autoimmune nephrotic conditions.',
                'overview' => 'The therapy usually involves: Oral corticosteroid medications Proteinuria monitoring Kidney function testing Blood pressure management Dietary support Doctors carefully monitor: Response to treatment Weight changes Blood sugar levels Infection risk Medication side effects The dosage is gradually adjusted depending on remission and relapse patterns. Additional medications may be required in resistant or recurrent disease.',
                'symptoms' => [
            ['value' => 'Generalized swelling'],
            ['value' => 'Foamy urine'],
            ['value' => 'Weight gain from fluid retention'],
            ['value' => 'Fatigue'],
            ['value' => 'Protein loss in urine'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Increased infection risk'],
            ['value' => 'Weight gain'],
            ['value' => 'High blood pressure'],
            ['value' => 'Elevated blood sugar'],
            ['value' => 'Bone weakness with prolonged use'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Take steroid medications regularly'],
            ['value' => 'Follow salt-restricted diet recommendations'],
            ['value' => 'Monitor swelling and urine changes'],
            ['value' => 'Attend routine nephrology check-ups'],
            ['value' => 'Report fever or unusual symptoms promptly'],
        ],
                'recovery' => 'Many patients achieve remission with appropriate steroid therapy and regular monitoring. Early treatment and careful follow-up improve kidney preservation and reduce long-term complications.',
                'sort_order' => 28,
                'is_active' => true,
                'meta_title' => 'Steroid Therapy for Nephrotic Syndrome',
                'meta_description' => 'Steroid therapy is a primary treatment for nephrotic syndrome, a kidney disorder characterized by excessive protein loss in urine, swelling, and low blood prote',
                'meta_keywords' => '',
            ]
        );
    }
}
