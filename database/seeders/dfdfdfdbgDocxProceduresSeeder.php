<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;

class dfdfdfdbgDocxProceduresSeeder extends Seeder
{
    public function run(): void
    {
        Procedure::withoutSyncingToSearch(function () {
            $this->call([
                DentalSurgicalChairswithImagingSeeder::class,
                IntraoralPanoramicXrayCBCTSeeder::class,
                SurgicalInstrumentsforJawToothExtractionSeeder::class,
                BiopsySoftTissueSurgeryToolsSeeder::class,
                MicrosurgeryFixationDevicesSeeder::class,
                TMJArthroscopyInstrumentsSeeder::class,
                JawFacialReconstructionMaterialsSeeder::class,
                SterilizationInfectionControlSetupSeeder::class,
                PostoperativePhysiotherapyEquipmentSeeder::class,
                TeleconsultationVirtualPlanningSystemsSeeder::class,
            ]);
        });
    }
}
