<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CTAngiographyMRAngiographyVascularImagingCTAngiographyMRAngiographyVascularImagingConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('CT Angiography / MR Angiography (Vascular Imaging)  CT Angiography / MR Angiography (Vascular Imaging)')],
            [
                'name' => 'CT Angiography / MR Angiography (Vascular Imaging)  CT Angiography / MR Angiography (Vascular Imaging)',
                'slug' => Str::slug('CT Angiography / MR Angiography (Vascular Imaging)  CT Angiography / MR Angiography (Vascular Imaging)'),
                'h1' => 'CT Angiography / MR Angiography (Vascular Imaging)  CT Angiography / MR Angiography (Vascular Imaging)',
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
                'sort_order' => 8,
                'is_active' => true,
                'meta_title' => 'CT Angiography / MR Angiography (Vascular Imaging)  CT Angiography / MR Angiography (Vascular Imaging)',
                'meta_description' => '',
                'meta_keywords' => '',
            ]
        );
    }
}
