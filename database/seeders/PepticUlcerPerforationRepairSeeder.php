<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PepticUlcerPerforationRepairSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Peptic Ulcer Perforation Repair')],
            [
                'title' => 'Peptic Ulcer Perforation Repair',
                'slug' => Str::slug('Peptic Ulcer Perforation Repair'),
                'introduction' => 'Peptic ulcer perforation repair is emergency surgery performed to close a hole in the stomach or duodenum caused by severe ulcer disease.',
                'what_is' => 'Perforation occurs when an untreated ulcer erodes completely through the stomach or intestinal wall, leading to leakage of stomach contents into the abdominal cavity. The surgery involves: Closing the perforation Cleaning contaminated abdominal fluid Controlling infection Treating underlying ulcer disease Both laparoscopic and open surgical methods may be used depending on patient condition.',
                'symptoms' => [
            ['value' => 'Sudden severe abdominal pain'],
            ['value' => 'Rigid abdomen'],
            ['value' => 'Fever and vomiting'],
            ['value' => 'Abdominal tenderness'],
            ['value' => 'Signs of shock in severe cases'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Severe abdominal infection'],
            ['value' => 'Sepsis'],
            ['value' => 'Leakage from repair site'],
            ['value' => 'Respiratory complications'],
            ['value' => 'Delayed wound healing'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Take ulcer medications regularly'],
            ['value' => 'Avoid smoking and alcohol completely'],
            ['value' => 'Follow dietary advice carefully'],
            ['value' => 'Monitor for recurrent abdominal pain'],
            ['value' => 'Attend regular surgical follow-up visits'],
        ],
                'surgery_risks' => [
            ['value' => 'Severe abdominal infection'],
            ['value' => 'Sepsis'],
            ['value' => 'Leakage from repair site'],
            ['value' => 'Respiratory complications'],
            ['value' => 'Delayed wound healing'],
        ],
                'long_term_outlook' => 'Most patients recover well with timely surgery and proper ulcer treatment. Long-term management of ulcer disease helps prevent recurrence and complications.',
                'conclusion' => '',
                'seo_title' => 'Peptic Ulcer Perforation Repair',
                'seo_description' => 'Peptic ulcer perforation repair is emergency surgery performed to close a hole in the stomach or duodenum caused by severe ulcer disease.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
