<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;

class DIABETICFOOTTREATMENTSMANAGEMENTOPTIONSproceduredoneDocxProceduresSeeder extends Seeder
{
    public function run(): void
    {
        Procedure::withoutSyncingToSearch(function () {
            $this->call([
                BloodGlucoseOptimizationDiabetesManagementSeeder::class,
                PressureOffloadingTotalContactCastFootwearInsolesSeeder::class,
                WoundDebridementSharpSurgicalAutolyticEnzymaticSeeder::class,
                InfectionControlTopicalSystemicAntibioticsSeeder::class,
                CultureGuidedAntibioticTherapySeeder::class,
                ManagementofOsteomyelitisMedicalSurgicalSeeder::class,
                RevascularizationProceduresEndovascularSurgicalSeeder::class,
                AmputationMinorMajorwhenindicatedSeeder::class,
                CharcotFootManagementImmobilizationOrthoticsSurgerySeeder::class,
                AdvancedWoundCareHydrocolloidFoamAlginateDressingsSeeder::class,
                NegativePressureWoundTherapyNPWTSeeder::class,
                HyperbaricOxygenTherapyHBOTSeeder::class,
                SkinGraftingFlapCoverageforLargeUlcersSeeder::class,
                PainManagementNeuropathicPainControlSeeder::class,
                PatientEducationFootHygieneDailyInspectionSeeder::class,
                RegularFootScreeningRiskStratificationSeeder::class,
                OffloadingandCustomTherapeuticFootwearSeeder::class,
                VascularSurgeryReferralforIschemicFootSeeder::class,
                MultidisciplinaryFootClinicApproachSeeder::class,
                RehabilitationPhysiotherapyforFootFunctionSeeder::class,
            ]);
        });
    }
}
