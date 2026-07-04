<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;

class abcdDocxProceduresSeeder extends Seeder
{
    public function run(): void
    {
        Procedure::withoutSyncingToSearch(function () {
            $this->call([
                OTBurnCareSetupSeeder::class,
                MicrosurgeryInstrumentsSeeder::class,
                SkinGraftingFlapSurgeryInstrumentsSeeder::class,
                LaserEquipmentCO2FractionalIPLSeeder::class,
                NegativePressureWoundTherapyVACSeeder::class,
                ScarManagementLaserDevicesSeeder::class,
                CosmeticSurgeryToolsSeeder::class,
                DressingSterilizationEquipmentSeeder::class,
                PostoperativePhysiotherapyRehabilitationSetupSeeder::class,
                TeleconsultationFollowUpFacilitySeeder::class,
            ]);
        });
    }
}
