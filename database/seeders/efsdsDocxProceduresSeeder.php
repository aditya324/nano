<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;

class efsdsDocxProceduresSeeder extends Seeder
{
    public function run(): void
    {
        Procedure::withoutSyncingToSearch(function () {
            $this->call([
                PhysiotherapyEquipmentTreadmillsWeightsExerciseBandsSeeder::class,
                ElectrotherapyDevicesTENSNMESUltrasoundSeeder::class,
                HydrotherapyAquaticTherapyPoolSeeder::class,
                ProstheticsOrthoticsSeeder::class,
                GaitTrainingDevicesSeeder::class,
                PulmonaryRehabilitationToolsSeeder::class,
                OccupationalTherapyAidsSeeder::class,
                BalanceVestibularTherapyEquipmentSeeder::class,
                PatientMonitoringFunctionalAssessmentToolsSeeder::class,
                TeleRehabilitationSetupSeeder::class,
            ]);
        });
    }
}
