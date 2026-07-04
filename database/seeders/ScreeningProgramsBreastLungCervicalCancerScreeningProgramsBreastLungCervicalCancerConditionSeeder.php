<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ScreeningProgramsBreastLungCervicalCancerScreeningProgramsBreastLungCervicalCancerConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Screening Programs (Breast, Lung, Cervical Cancer)  Screening Programs (Breast, Lung & Cervical Cancer)')],
            [
                'name' => 'Screening Programs (Breast, Lung, Cervical Cancer)  Screening Programs (Breast, Lung & Cervical Cancer)',
                'slug' => Str::slug('Screening Programs (Breast, Lung, Cervical Cancer)  Screening Programs (Breast, Lung & Cervical Cancer)'),
                'h1' => 'Screening Programs (Breast, Lung, Cervical Cancer)  Screening Programs (Breast, Lung & Cervical Cancer)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => '',
                'about_more' => '',
                'overview' => '',
                'symptoms' => [],
                'causes' => [],
                'risks' => [],
                'diagnosis' => [],
                'treatment' => [],
                'recovery' => '',
                'sort_order' => 19,
                'is_active' => true,
                'meta_title' => 'Screening Programs (Breast, Lung, Cervical Cancer)  Screening Programs (Breast, Lung & Cervical Cancer)',
                'meta_description' => '',
                'meta_keywords' => '',
            ]
        );
    }
}
