<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ParacentesisAsciticFluidManagementSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Paracentesis / Ascitic Fluid Management')],
            [
                'title' => 'Paracentesis / Ascitic Fluid Management',
                'slug' => Str::slug('Paracentesis / Ascitic Fluid Management'),
                'introduction' => 'Paracentesis is a procedure used to remove excess fluid (ascites) from the abdomen, commonly seen in liver disease and certain cancers. It relieves discomfort and helps diagnose the cause of fluid accumulation.',
                'what_is' => 'A sterile needle or catheter is inserted into the abdominal cavity to drain fluid safely. Paracentesis is used for: Symptom relief Infection detection Fluid analysis Management of severe abdominal distension Large-volume paracentesis may require albumin replacement therapy.',
                'symptoms' => [
            ['value' => 'Abdominal swelling and tightness'],
            ['value' => 'Difficulty breathing due to fluid pressure'],
            ['value' => 'Abdominal discomfort or pain'],
            ['value' => 'Poor appetite and early fullness'],
            ['value' => 'Fever or suspected abdominal infection'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Bleeding or infection'],
            ['value' => 'Low blood pressure after drainage'],
            ['value' => 'Fluid leakage from puncture site'],
            ['value' => 'Kidney dysfunction in severe liver disease'],
            ['value' => 'Rare bowel injury'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Monitor blood pressure and hydration'],
            ['value' => 'Follow salt-restricted diet if advised'],
            ['value' => 'Observe puncture site for leakage'],
            ['value' => 'Attend regular liver disease follow-up visits'],
            ['value' => 'Report fever or worsening abdominal pain immediately'],
        ],
                'surgery_risks' => [
            ['value' => 'Bleeding or infection'],
            ['value' => 'Low blood pressure after drainage'],
            ['value' => 'Fluid leakage from puncture site'],
            ['value' => 'Kidney dysfunction in severe liver disease'],
            ['value' => 'Rare bowel injury'],
        ],
                'long_term_outlook' => 'Paracentesis improves comfort, breathing, and mobility while supporting ongoing management of chronic liver disease and ascites.',
                'conclusion' => '',
                'seo_title' => 'Paracentesis / Ascitic Fluid Management',
                'seo_description' => 'Paracentesis is a procedure used to remove excess fluid (ascites) from the abdomen, commonly seen in liver disease and certain cancers. It relieves discomfort and helps diagnose the cause of fluid accumulation.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
