<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;

class OralmaxillofacialSurgeryTreatmentsManagementOptionsDocxConditionsSeeder extends Seeder
{
    public function run(): void
    {
        Condition::withoutSyncingToSearch(function () {
            $this->call([
                SurgicalExtractionofImpactedMalposedTeethConditionSeeder::class,
                OpenClosedReductionofJawFracturesConditionSeeder::class,
                FacialSoftTissueLacerationRepairFacialSoftTissueLacerationRepairConditionSeeder::class,
                FacialSoftTissueLacerationRepairConditionSeeder::class,
                OrthognathicSurgeryforJawRealignmentConditionSeeder::class,
                CleftLipPalateRepairCraniofacialSurgeryConditionSeeder::class,
                SurgicalManagementofOralMaxillofacialTumorsConditionSeeder::class,
                BoneGraftingRidgeAugmentationSinusLiftConditionSeeder::class,
                TMJSurgeryConditionSeeder::class,
                ReconstructionwithLocalRegionalFreeFlapsConditionSeeder::class,
                TreatmentofOsteomyelitisJawInfectionsConditionSeeder::class,
                SalivaryGlandSurgeryConditionSeeder::class,
                FacialNerveRepairReconstructionConditionSeeder::class,
                CosmeticJawlineChinCheekAugmentationCosmeticJawlineChinCheekAugmentationConditionSeeder::class,
                CosmeticJawlineChinCheekAugmentationConditionSeeder::class,
                BiopsyofOralLesionsCystsConditionSeeder::class,
                DentalImplantPlacementPreImplantSurgeryDentalImplantPlacementPreImplantSurgeryConditionSeeder::class,
                DentalImplantPlacementPreImplantSurgeryConditionSeeder::class,
                ManagementofMalocclusionOrthodonticSurgeryManagementofMalocclusionOrthodonticSurgeryConditionSeeder::class,
                ManagementofMalocclusionOrthodonticSurgeryConditionSeeder::class,
                PostTraumaticFacialReconstructionConditionSeeder::class,
                ManagementofOralSubmucousFibrosisConditionSeeder::class,
                PediatricMaxillofacialSurgeryConditionSeeder::class,
                ProstheticRehabilitationConditionSeeder::class,
                MinimallyInvasiveOralSurgeriesEndoscopicLaserassistedMinimallyInvasiveOralSurgeriesEndoscopicLaserAssistedConditionSeeder::class,
                MinimallyInvasiveOralSurgeriesConditionSeeder::class,
                PreoperativePlanningwith3DImagingVirtualSurgicalPlanningConditionSeeder::class,
                PostoperativeRehabilitationPhysiotherapyforJawFunctionConditionSeeder::class,
                TeleconsultationFollowUpServicesConditionSeeder::class,
            ]);
        });
    }
}
