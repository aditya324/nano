<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;

class CRITICALCAREEMERGENCYTREATMENTSMANAGEMENTOPTIONSdoneDocxProceduresSeeder extends Seeder
{
    public function run(): void
    {
        Procedure::withoutSyncingToSearch(function () {
            $this->call([
                AdvancedCardiacLifeSupportACLSProtocolsSeeder::class,
                BasicLifeSupportBLSAirwayManagementSeeder::class,
                MechanicalVentilationInvasiveNonInvasiveSeeder::class,
                HemodynamicMonitoringSupportVasopressorsInotropesSeeder::class,
                RapidFluidResuscitationElectrolyteCorrectionSeeder::class,
                CentralLineArterialLineInsertionSeeder::class,
                EmergencyDialysisRenalReplacementTherapyCRRTHDSeeder::class,
                SepsisManagementEarlyAntibioticsSourceControlSeeder::class,
                TraumaResuscitationDamageControlSurgerySeeder::class,
                BurnManagementFluidResuscitationWoundCareInfectionControlSeeder::class,
                EmergencyBloodTransfusionMassiveTransfusionProtocolsSeeder::class,
                DefibrillationCardioversionSeeder::class,
                AntiarrhythmicTherapySeeder::class,
                ThrombolysisPCIforSTEMISeeder::class,
                StrokeManagementThrombolysisMechanicalThrombectomySeeder::class,
                ManagementofDKAHHSInsulinFluidsElectrolytesSeeder::class,
                ManagementofShockVasopressorsInotropesFluidsSeeder::class,
                SedationAnalgesiaandPainControlinICUSeeder::class,
                InfectionControlinCriticalCareVAPCLABSIPreventionSeeder::class,
                NutritionalSupportinICUEnteralParenteralSeeder::class,
                ECMOExtracorporealMembraneOxygenationinSelectedCasesSeeder::class,
                BedsideProceduresChestTubeParacentesisThoracentesisSeeder::class,
                CriticalCareUltrasoundPointofCareImagingSeeder::class,
                MultidisciplinaryICURoundsCareProtocolsSeeder::class,
                PostCriticalCareRehabilitationFollowUpSeeder::class,
            ]);
        });
    }
}
