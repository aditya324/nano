<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;

class CriticalCareEmergencyTreatmentsManagementOptionsDocxConditionsSeeder extends Seeder
{
    public function run(): void
    {
        Condition::withoutSyncingToSearch(function () {
            $this->call([
                AdvancedCardiacLifeSupportACLSProtocolsConditionSeeder::class,
                BasicLifeSupportBLSAirwayManagementConditionSeeder::class,
                MechanicalVentilationInvasiveNonInvasiveMechanicalVentilationInvasiveNonInvasiveConditionSeeder::class,
                MechanicalVentilationInvasiveNonInvasiveConditionSeeder::class,
                HemodynamicMonitoringSupportVasopressorsInotropesConditionSeeder::class,
                RapidFluidResuscitationElectrolyteCorrectionConditionSeeder::class,
                CentralLineArterialLineInsertionConditionSeeder::class,
                EmergencyDialysisRenalReplacementTherapyCRRTHDConditionSeeder::class,
                SepsisManagementEarlyAntibioticsSourceControlConditionSeeder::class,
                TraumaResuscitationDamageControlSurgeryConditionSeeder::class,
                BurnManagementFluidResuscitationWoundCareInfectionControlConditionSeeder::class,
                EmergencyBloodTransfusionMassiveTransfusionProtocolsEmergencyBloodTransfusionMassiveTransfusionProtocolsConditionSeeder::class,
                EmergencyBloodTransfusionMassiveTransfusionProtocolsConditionSeeder::class,
                DefibrillationCardioversionConditionSeeder::class,
                AntiarrhythmicTherapyConditionSeeder::class,
                ThrombolysisPCIforSTEMIConditionSeeder::class,
                StrokeManagementThrombolysisMechanicalThrombectomyConditionSeeder::class,
                ManagementofDKAHHSInsulinFluidsElectrolytesConditionSeeder::class,
                ManagementofShockVasopressorsInotropesFluidsConditionSeeder::class,
                SedationAnalgesiaandPainControlinICUConditionSeeder::class,
                InfectionControlinCriticalCareVAPCLABSIPreventionConditionSeeder::class,
                NutritionalSupportinICUEnteralParenteralNutritionalSupportinICUEnteralParenteralConditionSeeder::class,
                NutritionalSupportinICUEnteralParenteralConditionSeeder::class,
                ECMOExtracorporealMembraneOxygenationinSelectedCasesConditionSeeder::class,
                BedsideProceduresChestTubeParacentesisThoracentesisConditionSeeder::class,
                CriticalCareUltrasoundPointofCareImagingConditionSeeder::class,
                MultidisciplinaryICURoundsCareProtocolsConditionSeeder::class,
                PostCriticalCareRehabilitationFollowUpPostCriticalCareRehabilitationFollowUpConditionSeeder::class,
                PostCriticalCareRehabilitationFollowUpConditionSeeder::class,
            ]);
        });
    }
}
