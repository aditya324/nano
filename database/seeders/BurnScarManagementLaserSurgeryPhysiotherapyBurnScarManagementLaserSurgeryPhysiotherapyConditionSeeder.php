<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BurnScarManagementLaserSurgeryPhysiotherapyBurnScarManagementLaserSurgeryPhysiotherapyConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Burn Scar Management (Laser, Surgery, Physiotherapy)  Burn Scar Management (Laser, Surgery & Physiotherapy)')],
            [
                'name' => 'Burn Scar Management (Laser, Surgery, Physiotherapy)  Burn Scar Management (Laser, Surgery & Physiotherapy)',
                'slug' => Str::slug('Burn Scar Management (Laser, Surgery, Physiotherapy)  Burn Scar Management (Laser, Surgery & Physiotherapy)'),
                'h1' => 'Burn Scar Management (Laser, Surgery, Physiotherapy)  Burn Scar Management (Laser, Surgery & Physiotherapy)',
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
                'sort_order' => 18,
                'is_active' => true,
                'meta_title' => 'Burn Scar Management (Laser, Surgery, Physiotherapy)  Burn Scar Management (Laser, Surgery & Physiotherapy)',
                'meta_description' => '',
                'meta_keywords' => '',
            ]
        );
    }
}
