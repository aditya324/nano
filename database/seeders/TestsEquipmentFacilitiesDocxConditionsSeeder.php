<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;

class TestsEquipmentFacilitiesDocxConditionsSeeder extends Seeder
{
    public function run(): void
    {
        Condition::withoutSyncingToSearch(function () {
            $this->call([
                DentalSurgicalChairswithImagingConditionSeeder::class,
                IntraoralPanoramicXrayCBCTConditionSeeder::class,
                SurgicalInstrumentsforJawToothExtractionConditionSeeder::class,
                BiopsySoftTissueSurgeryToolsConditionSeeder::class,
                MicrosurgeryFixationDevicesConditionSeeder::class,
                TMJArthroscopyInstrumentsConditionSeeder::class,
                JawFacialReconstructionMaterialsJawFacialReconstructionMaterialsConditionSeeder::class,
                JawFacialReconstructionMaterialsConditionSeeder::class,
                SterilizationInfectionControlSetupConditionSeeder::class,
                PostoperativePhysiotherapyEquipmentConditionSeeder::class,
                TeleconsultationVirtualPlanningSystemsConditionSeeder::class,
            ]);
        });
    }
}
