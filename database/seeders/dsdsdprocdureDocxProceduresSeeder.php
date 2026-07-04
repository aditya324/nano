<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;

class dsdsdprocdureDocxProceduresSeeder extends Seeder
{
    public function run(): void
    {
        Procedure::withoutSyncingToSearch(function () {
            $this->call([
                GlucometersContinuousGlucoseMonitoringCGMSeeder::class,
                HbA1cAnalyzerSeeder::class,
                InsulinPumpsPensSeeder::class,
                ThyroidFunctionAnalyzerTSHT3T4Seeder::class,
                HormoneAssayInstrumentsCortisolACTHSexHormonesSeeder::class,
                DEXAScanforBoneDensitySeeder::class,
                AutomatedBiochemistryAnalyzerSeeder::class,
                TeleEndocrinologyRemoteMonitoringSeeder::class,
                MetabolicTestingEquipmentSeeder::class,
                PatientEducationToolsforLifestyleManagementSeeder::class,
            ]);
        });
    }
}
