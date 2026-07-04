<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;

class PlasticBurnsAestheticSurgeryTreatmentsManagementOptionsDocxConditionsSeeder extends Seeder
{
    public function run(): void
    {
        Condition::withoutSyncingToSearch(function () {
            $this->call([
                AcuteBurnManagementConditionSeeder::class,
                SurgicalDebridementofBurnsWoundsConditionSeeder::class,
                SkinGraftingConditionSeeder::class,
                LocalRegionalFreeFlapReconstructionLocalRegionalFreeFlapReconstructionConditionSeeder::class,
                FlapReconstructionProceduresConditionSeeder::class,
                ScarRevisionContractureReleaseSurgeryConditionSeeder::class,
                MicrosurgicalReconstructionConditionSeeder::class,
                CleftLipPalateRepairConditionSeeder::class,
                RhinoplastyCosmeticFunctionalRhinoplastyCosmeticFunctionalConditionSeeder::class,
                RhinoplastyConditionSeeder::class,
                BreastReconstructionConditionSeeder::class,
                LiposuctionFatTransferConditionSeeder::class,
                AbdominoplastyBodyContouringSurgeryConditionSeeder::class,
                BotoxFillersNonSurgicalAestheticProceduresConditionSeeder::class,
                HairTransplantationScalpReconstructionConditionSeeder::class,
                HandSurgeryTendonRepairNerveRepairReplantationHandSurgeryTendonRepairNerveRepairReplantationConditionSeeder::class,
                HandSurgeryConditionSeeder::class,
                PostTraumaticFacialReconstructionPostTraumaticFacialReconstructionConditionSeeder::class,
                PostTraumaticFacialReconstructionConditionSeeder::class,
                PressureSoreManagementSurgicalRepairConditionSeeder::class,
                PediatricCongenitalDeformityCorrectionConditionSeeder::class,
                BurnScarManagementLaserSurgeryPhysiotherapyBurnScarManagementLaserSurgeryPhysiotherapyConditionSeeder::class,
                BurnScarManagementConditionSeeder::class,
                ExtremityLimbSalvageReconstructionConditionSeeder::class,
                AestheticSurgeryProceduresConditionSeeder::class,
                WoundVACTherapyAdvancedWoundCareConditionSeeder::class,
                ManagementofSoftTissueInfectionsNecrotizingFasciitisConditionSeeder::class,
                MultidisciplinaryTeamApproachConditionSeeder::class,
                TeleconsultationFollowUpforCosmeticReconstructiveCareConditionSeeder::class,
                PatientEducationonWoundCarePostoperativeRehabilitationScarPreventionPatientEducationonWoundCarePostoperativeRehabilitationScarPreventionConditionSeeder::class,
                PatientEducationonWoundCarePostoperativeRehabilitationScarPreventionConditionSeeder::class,
            ]);
        });
    }
}
