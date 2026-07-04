<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RadiologySafetyRadiationDoseMonitoringRadiologySafetyRadiationDoseMonitoringConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Radiology Safety & Radiation Dose Monitoring  Radiology Safety & Radiation Dose Monitoring')],
            [
                'name' => 'Radiology Safety & Radiation Dose Monitoring  Radiology Safety & Radiation Dose Monitoring',
                'slug' => Str::slug('Radiology Safety & Radiation Dose Monitoring  Radiology Safety & Radiation Dose Monitoring'),
                'h1' => 'Radiology Safety & Radiation Dose Monitoring  Radiology Safety & Radiation Dose Monitoring',
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
                'sort_order' => 23,
                'is_active' => true,
                'meta_title' => 'Radiology Safety & Radiation Dose Monitoring  Radiology Safety & Radiation Dose Monitoring',
                'meta_description' => '',
                'meta_keywords' => '',
            ]
        );
    }
}
