<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AntacidsMucosalProtectantsSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Antacids / Mucosal Protectants')],
            [
                'title' => 'Antacids / Mucosal Protectants',
                'slug' => Str::slug('Antacids / Mucosal Protectants'),
                'introduction' => 'Antacids and mucosal protectants are medications used to neutralize stomach acid and protect the digestive lining from irritation and ulcer formation. They provide rapid relief from acidity and gastric discomfort.',
                'what_is' => 'Antacids quickly neutralize stomach acid, while mucosal protectants coat the stomach lining and promote healing. These therapies are commonly used for: Gastritis Acid reflux Peptic ulcer disease Indigestion Gastric irritation from medications They are often used along with lifestyle modification and acid-suppressing therapy.',
                'symptoms' => [
            ['value' => 'Burning sensation in chest or stomach'],
            ['value' => 'Acid indigestion'],
            ['value' => 'Nausea after meals'],
            ['value' => 'Gastric discomfort'],
            ['value' => 'Mild ulcer-related pain'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Constipation or diarrhea'],
            ['value' => 'Electrolyte imbalance with overuse'],
            ['value' => 'Drug interaction with other medications'],
            ['value' => 'Temporary symptom masking'],
            ['value' => 'Rare kidney-related complications'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Avoid overeating and spicy foods'],
            ['value' => 'Use medications only as prescribed'],
            ['value' => 'Maintain adequate hydration'],
            ['value' => 'Avoid smoking and alcohol intake'],
            ['value' => 'Seek medical review if symptoms persist'],
        ],
                'surgery_risks' => [
            ['value' => 'Constipation or diarrhea'],
            ['value' => 'Electrolyte imbalance with overuse'],
            ['value' => 'Drug interaction with other medications'],
            ['value' => 'Temporary symptom masking'],
            ['value' => 'Rare kidney-related complications'],
        ],
                'long_term_outlook' => 'These medications effectively relieve gastric discomfort, support ulcer healing, and improve digestive comfort when used appropriately.',
                'conclusion' => '',
                'seo_title' => 'Antacids / Mucosal Protectants',
                'seo_description' => 'Antacids and mucosal protectants are medications used to neutralize stomach acid and protect the digestive lining from irritation and ulcer formation. They provide rapid relief from acidity and gastric discomfort.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
