<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DentalImplantPlacementPreImplantSurgeryDentalImplantPlacementPreImplantSurgeryConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Dental Implant Placement & Pre-Implant Surgery  Dental Implant Placement & Pre-Implant Surgery')],
            [
                'name' => 'Dental Implant Placement & Pre-Implant Surgery  Dental Implant Placement & Pre-Implant Surgery',
                'slug' => Str::slug('Dental Implant Placement & Pre-Implant Surgery  Dental Implant Placement & Pre-Implant Surgery'),
                'h1' => 'Dental Implant Placement & Pre-Implant Surgery  Dental Implant Placement & Pre-Implant Surgery',
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
                'sort_order' => 16,
                'is_active' => true,
                'meta_title' => 'Dental Implant Placement & Pre-Implant Surgery  Dental Implant Placement & Pre-Implant Surgery',
                'meta_description' => '',
                'meta_keywords' => '',
            ]
        );
    }
}
