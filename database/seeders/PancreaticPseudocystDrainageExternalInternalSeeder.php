<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PancreaticPseudocystDrainageExternalInternalSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Pancreatic Pseudocyst Drainage (External / Internal)')],
            [
                'title' => 'Pancreatic Pseudocyst Drainage (External / Internal)',
                'slug' => Str::slug('Pancreatic Pseudocyst Drainage (External / Internal)'),
                'introduction' => 'Pancreatic pseudocyst drainage is a procedure performed to treat fluid-filled collections that develop after pancreatitis or pancreatic injury. Drainage helps relieve pain, infection, and pressure on nearby organs.',
                'what_is' => 'Pancreatic pseudocysts contain enzyme-rich fluid surrounded by inflammatory tissue. Treatment options include: External drainage Internal drainage into stomach or intestine Endoscopic drainage Surgical drainage Drainage is recommended when pseudocysts: Cause severe symptoms Become infected Continue enlarging Compress nearby structures The procedure may be performed surgically or endoscopically depending on the condition.',
                'symptoms' => [
            ['value' => 'Persistent abdominal pain'],
            ['value' => 'Abdominal swelling or fullness'],
            ['value' => 'Nausea and vomiting'],
            ['value' => 'Fever or infection symptoms'],
            ['value' => 'Difficulty eating or weight loss'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Bleeding complications'],
            ['value' => 'Infection or abscess formation'],
            ['value' => 'Recurrence of pseudocyst'],
            ['value' => 'Leakage of pancreatic fluid'],
            ['value' => 'Injury to surrounding organs'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Follow dietary advice carefully'],
            ['value' => 'Monitor for fever or abdominal pain'],
            ['value' => 'Attend imaging follow-up evaluations'],
            ['value' => 'Maintain adequate hydration and nutrition'],
            ['value' => 'Avoid alcohol and pancreatic irritants'],
        ],
                'surgery_risks' => [
            ['value' => 'Bleeding complications'],
            ['value' => 'Infection or abscess formation'],
            ['value' => 'Recurrence of pseudocyst'],
            ['value' => 'Leakage of pancreatic fluid'],
            ['value' => 'Injury to surrounding organs'],
        ],
                'long_term_outlook' => 'Successful drainage relieves symptoms, improves digestion, and reduces complications associated with chronic pancreatic fluid collections.',
                'conclusion' => '',
                'seo_title' => 'Pancreatic Pseudocyst Drainage (External / Internal)',
                'seo_description' => 'Pancreatic pseudocyst drainage is a procedure performed to treat fluid-filled collections that develop after pancreatitis or pancreatic injury. Drainage helps relieve pain, infection, and pressure on nearby organs.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
