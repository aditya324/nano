<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;

class NephrologyTreatmentsservicesprocedureDocxConditionsSeeder extends Seeder
{
    public function run(): void
    {
        Condition::withoutSyncingToSearch(function () {
            $this->call([
                NephrologyOutpatientConsultationConditionSeeder::class,
                InpatientNephrologyCareConditionSeeder::class,
                MedicalManagementofAcuteKidneyInjuryConditionSeeder::class,
                ChronicKidneyDiseaseManagementProgramConditionSeeder::class,
                BloodPressureControlinRenalDiseaseConditionSeeder::class,
                DiabeticKidneyDiseaseManagementConditionSeeder::class,
                FluidandElectrolyteManagementConditionSeeder::class,
                AcidBaseDisorderCorrectionConditionSeeder::class,
                AnemiaManagementinCKDConditionSeeder::class,
                ErythropoietinTherapyConditionSeeder::class,
                IronTherapyConditionSeeder::class,
                MineralBoneDisorderManagementConditionSeeder::class,
                DietaryCounselingforRenalPatientsConditionSeeder::class,
                RenalNutritionTherapyConditionSeeder::class,
                HemodialysisInitiationandMaintenanceConditionSeeder::class,
                EmergencyHemodialysisConditionSeeder::class,
                MaintenanceHemodialysisProgramsConditionSeeder::class,
                PeritonealDialysisCounselingandSupportConditionSeeder::class,
                ContinuousAmbulatoryPeritonealDialysisCAPDConditionSeeder::class,
                DialysisAdequacyMonitoringConditionSeeder::class,
                DialysisCatheterInsertionConditionSeeder::class,
                TemporaryDialysisCatheterPlacementConditionSeeder::class,
                PermanentDialysisAccessCareConditionSeeder::class,
                ArteriovenousFistulaAVFCreationCoordinationConditionSeeder::class,
                DialysisAccessSurveillanceConditionSeeder::class,
                RenalBiopsyConditionSeeder::class,
                ImmunosuppressiveTherapyforGlomerularDiseasesConditionSeeder::class,
                SteroidTherapyforNephroticSyndromeConditionSeeder::class,
                TreatmentofLupusNephritisConditionSeeder::class,
                ManagementofVasculitisRelatedRenalDiseaseConditionSeeder::class,
                DrugDoseAdjustmentinRenalFailureConditionSeeder::class,
                ManagementofContrastInducedNephropathyConditionSeeder::class,
                ManagementofPregnancyRelatedRenalDisordersConditionSeeder::class,
                PediatricNephrologyCareCoordinationConditionSeeder::class,
                KidneyTransplantEvaluationandReferralConditionSeeder::class,
                PostKidneyTransplantFollowUpConditionSeeder::class,
                ManagementofTransplantRejectionwithTransplantTeamConditionSeeder::class,
                InfectionManagementinDialysisPatientsConditionSeeder::class,
                ManagementofDialysisComplicationsConditionSeeder::class,
                ConservativeNonDialysisKidneyCareConditionSeeder::class,
                EndofLifeRenalSupportiveCareConditionSeeder::class,
                RenalReplacementTherapyPlanningConditionSeeder::class,
                PatientEducationforCKDConditionSeeder::class,
                LifestyleModificationCounselingConditionSeeder::class,
                PreventionofProgressionofKidneyDiseaseConditionSeeder::class,
                ManagementofRenalHypertensionConditionSeeder::class,
                ManagementofEdemainRenalDiseaseConditionSeeder::class,
                ManagementofHyperkalemiaConditionSeeder::class,
                ManagementofHyponatremiaConditionSeeder::class,
                LongTermNephrologyFollowUpandMonitoringConditionSeeder::class,
            ]);
        });
    }
}
