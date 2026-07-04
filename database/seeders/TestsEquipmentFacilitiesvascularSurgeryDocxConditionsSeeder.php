<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;

class TestsequipmentfacilitiesvascularSurgeryDocxConditionsSeeder extends Seeder
{
    public function run(): void
    {
        Condition::withoutSyncingToSearch(function () {
            $this->call([
                UpperGIEndoscopyColonoscopyConditionSeeder::class,
                ERCPSuiteAccessoriesConditionSeeder::class,
                CapsuleEndoscopyConditionSeeder::class,
                EndoscopicUltrasoundEUSConditionSeeder::class,
                LiverFibroscanElastographyConditionSeeder::class,
                GIMotilityTestingEquipmentConditionSeeder::class,
                pHImpedanceMonitoringConditionSeeder::class,
                PolypectomyHemostasisToolsConditionSeeder::class,
                BiopsyForcepsSnareClipDevicesConditionSeeder::class,
                SedationMonitoringSystemsConditionSeeder::class,
            ]);
        });
    }
}
