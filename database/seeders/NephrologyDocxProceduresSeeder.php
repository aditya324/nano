<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;

class nephrologyDocxProceduresSeeder extends Seeder
{
    public function run(): void
    {
        Procedure::withoutSyncingToSearch(function () {
            $this->call([
                HemodialysisUnitROBasedSeeder::class,
                DialysisMachinesChairsSeeder::class,
                PeritonealDialysisTrainingFacilitySeeder::class,
                RenalFunctionTestAnalyzerSeeder::class,
                UltrasoundforKidneyBladderSeeder::class,
                RenalBiopsyNeedlesImagingGuidanceSeeder::class,
                DialysisWaterTreatmentPlantSeeder::class,
                CentralVenousCatheterPlacementSetupSeeder::class,
                CRRTMachinesforICUSeeder::class,
                ElectrolyteABGAnalyzersSeeder::class,
                TransplantWorkupCoordinationFacilitySeeder::class,
                InfectionControlDedicatedDialysisAreaSeeder::class,
                PatientEducationDietCounselingUnitSeeder::class,
                EmergencyDialysisAccessSeeder::class,
                NABHCompliantDialysisDocumentationMonitoringSeeder::class,
            ]);
        });
    }
}
