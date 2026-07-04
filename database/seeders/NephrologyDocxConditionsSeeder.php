<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;

class NephrologyDocxConditionsSeeder extends Seeder
{
    public function run(): void
    {
        Condition::withoutSyncingToSearch(function () {
            $this->call([
                AcuteKidneyInjuryAKIConditionSeeder::class,
                ChronicKidneyDiseaseCKDConditionSeeder::class,
                EndStageRenalDiseaseESRDConditionSeeder::class,
                DiabeticKidneyDiseaseConditionSeeder::class,
                HypertensiveNephropathyConditionSeeder::class,
                GlomerulonephritisConditionSeeder::class,
                NephroticSyndromeConditionSeeder::class,
                NephriticSyndromeConditionSeeder::class,
                ProteinuriaConditionSeeder::class,
                HematuriaConditionSeeder::class,
                ElectrolyteImbalanceConditionSeeder::class,
                FluidOverloadStatesConditionSeeder::class,
                AcidBaseDisordersConditionSeeder::class,
                PolycysticKidneyDiseaseConditionSeeder::class,
                ObstructiveUropathyRenalCauseConditionSeeder::class,
                RecurrentUrinaryTractInfectionsRenalInvolvementConditionSeeder::class,
                LupusNephritisConditionSeeder::class,
                VasculitisRelatedKidneyDiseaseConditionSeeder::class,
                AcuteInterstitialNephritisConditionSeeder::class,
                ChronicInterstitialNephritisConditionSeeder::class,
                DrugInducedKidneyInjuryConditionSeeder::class,
                ContrastInducedNephropathyConditionSeeder::class,
                PregnancyRelatedKidneyDisordersConditionSeeder::class,
                PediatricKidneyDisordersConditionSeeder::class,
                CongenitalRenalAnomaliesConditionSeeder::class,
                RenalTubularDisordersConditionSeeder::class,
                RenalArteryStenosisConditionSeeder::class,
                IschemicNephropathyConditionSeeder::class,
                PostInfectiousGlomerulonephritisConditionSeeder::class,
                RapidlyProgressiveGlomerulonephritisConditionSeeder::class,
                ChronicDialysisRelatedComplicationsConditionSeeder::class,
                AnemiaofChronicKidneyDiseaseConditionSeeder::class,
                MineralBoneDisorderinCKDConditionSeeder::class,
                SecondaryHyperparathyroidismConditionSeeder::class,
                UremiaConditionSeeder::class,
                VolumeDepletionandDehydrationConditionSeeder::class,
                RenalInvolvementinSystemicDiseasesConditionSeeder::class,
                KidneyTransplantFollowUpCasesConditionSeeder::class,
                RecurrentKidneyDiseasePostTransplantConditionSeeder::class,
                ChronicKidneyObstructionConditionSeeder::class,
                RenalFailurewithSepsisConditionSeeder::class,
                HepatorenalSyndromeConditionSeeder::class,
                CardiorenalSyndromeConditionSeeder::class,
                KidneyRelatedHypertensionConditionSeeder::class,
                ResistantHypertensionRenalCauseConditionSeeder::class,
                EdemaDuetoRenalDiseaseConditionSeeder::class,
                MetabolicAcidosisDuetoRenalDiseaseConditionSeeder::class,
                HyperkalemiaConditionSeeder::class,
                HyponatremiaConditionSeeder::class,
                RenalComplicationsofDiabetesConditionSeeder::class,
            ]);
        });
    }
}
