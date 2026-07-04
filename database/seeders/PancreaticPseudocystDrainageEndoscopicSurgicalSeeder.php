<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PancreaticPseudocystDrainageEndoscopicSurgicalSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Pancreatic Pseudocyst Drainage (Endoscopic / Surgical)')],
            [
                'title' => 'Pancreatic Pseudocyst Drainage (Endoscopic / Surgical)',
                'slug' => Str::slug('Pancreatic Pseudocyst Drainage (Endoscopic / Surgical)'),
                'introduction' => '',
                'what_is' => 'Management options include: Endoscopic ultrasound-guided drainage Internal cyst drainage procedures Percutaneous catheter drainage Surgical cystogastrostomy or cystojejunostomy Antibiotic therapy and supportive care Common conditions treated include: Acute pancreatitis complications Chronic pancreatitis Infected pancreatic pseudocysts Pancreatic duct leakage Symptomatic fluid collections Imaging evaluation and careful monitoring are essential before treatment planning.',
                'symptoms' => [
            ['value' => 'Upper abdominal pain'],
            ['value' => 'Nausea or vomiting'],
            ['value' => 'Fever or infection'],
            ['value' => 'Abdominal swelling'],
            ['value' => 'Difficulty eating or weight loss'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Infection or abscess formation'],
            ['value' => 'Bleeding during drainage'],
            ['value' => 'Recurrence of pseudocyst'],
            ['value' => 'Pancreatic fistula formation'],
            ['value' => 'Injury to nearby organs'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Monitor abdominal symptoms and fever'],
            ['value' => 'Follow dietary recommendations carefully'],
            ['value' => 'Attend scheduled imaging follow-up'],
            ['value' => 'Take prescribed medications regularly'],
            ['value' => 'Seek medical attention for severe pain or vomiting'],
        ],
                'surgery_risks' => [
            ['value' => 'Infection or abscess formation'],
            ['value' => 'Bleeding during drainage'],
            ['value' => 'Recurrence of pseudocyst'],
            ['value' => 'Pancreatic fistula formation'],
            ['value' => 'Injury to nearby organs'],
        ],
                'long_term_outlook' => 'Successful drainage usually relieves symptoms and prevents serious complications. Long-term management of pancreatitis, alcohol avoidance, dietary control, and follow-up imaging help reduce recurrence and improve pancreatic health.',
                'conclusion' => '',
                'seo_title' => 'Pancreatic Pseudocyst Drainage (Endoscopic / Surgical)',
                'seo_description' => '',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
