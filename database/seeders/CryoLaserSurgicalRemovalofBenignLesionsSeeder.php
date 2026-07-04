<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CryoLaserSurgicalRemovalofBenignLesionsSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Cryo / Laser / Surgical Removal of Benign Lesions')],
            [
                'title' => 'Cryo / Laser / Surgical Removal of Benign Lesions',
                'slug' => Str::slug('Cryo / Laser / Surgical Removal of Benign Lesions'),
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
                'seo_title' => 'Cryo / Laser / Surgical Removal of Benign Lesions',
                'seo_description' => '',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
