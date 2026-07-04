<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;

class TestsEquipmentFacilitiesNephrologyDocxConditionsSeeder extends Seeder
{
    public function run(): void
    {
        Condition::withoutSyncingToSearch(function () {
            $this->call([
                HemodialysisUnitROBasedConditionSeeder::class,
                DialysisMachinesChairsConditionSeeder::class,
                PeritonealDialysisTrainingFacilityConditionSeeder::class,
                RenalFunctionTestAnalyzerConditionSeeder::class,
                UltrasoundforKidneyBladderConditionSeeder::class,
                RenalBiopsyNeedlesImagingGuidanceConditionSeeder::class,
                DialysisWaterTreatmentPlantConditionSeeder::class,
                CentralVenousCatheterPlacementSetupConditionSeeder::class,
                CRRTMachinesforICUConditionSeeder::class,
                ElectrolyteABGAnalyzersConditionSeeder::class,
                TransplantWorkupCoordinationFacilityConditionSeeder::class,
                InfectionControlDedicatedDialysisAreaConditionSeeder::class,
                PatientEducationDietCounselingUnitConditionSeeder::class,
                EmergencyDialysisAccessConditionSeeder::class,
                NABHCompliantDialysisDocumentationMonitoringConditionSeeder::class,
            ]);
        });
    }
}
