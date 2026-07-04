<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ManagementofInfectiousDiseasesAntibioticsAntiviralsAntimalarialsSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Management of Infectious Diseases (Antibiotics, Antivirals & Antimalarials)')],
            [
                'title' => 'Management of Infectious Diseases (Antibiotics, Antivirals & Antimalarials)',
                'slug' => Str::slug('Management of Infectious Diseases (Antibiotics, Antivirals & Antimalarials)'),
                'introduction' => '',
                'what_is' => '',
                'symptoms' => [],
                'causes' => [],
                'condition_risks' => [],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [],
                'surgery_risks' => [],
                'long_term_outlook' => '',
                'conclusion' => '',
                'seo_title' => 'Management of Infectious Diseases (Antibiotics, Antivirals & Antimalarials)',
                'seo_description' => '',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
