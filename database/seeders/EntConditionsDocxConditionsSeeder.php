<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;

class EntConditionsDocxConditionsSeeder extends Seeder
{
    public function run(): void
    {
        Condition::withoutSyncingToSearch(function () {
            $this->call([
                EarPainOtalgiaConditionSeeder::class,
                EarDischargeOtorrheaConditionSeeder::class,
                ImpactedEarWaxConditionSeeder::class,
                OtitisExternaConditionSeeder::class,
                AcuteOtitisMediaConditionSeeder::class,
                ChronicSuppurativeOtitisMediaCSOMConditionSeeder::class,
                HearingLossConditionSeeder::class,
                ConductiveHearingLossConditionSeeder::class,
                SensorineuralHearingLossConditionSeeder::class,
                MixedHearingLossConditionSeeder::class,
                TinnitusConditionSeeder::class,
                VertigoConditionSeeder::class,
                BenignParoxysmalPositionalVertigoBPPVConditionSeeder::class,
                MenieresDiseaseConditionSeeder::class,
                EustachianTubeDysfunctionConditionSeeder::class,
                TympanicMembranePerforationConditionSeeder::class,
                FacialNervePalsyENTRelatedConditionSeeder::class,
                NasalBlockageConditionSeeder::class,
                DeviatedNasalSeptumDNSConditionSeeder::class,
                AllergicRhinitisConditionSeeder::class,
                AcuteRhinosinusitisConditionSeeder::class,
                ChronicSinusitisConditionSeeder::class,
                NasalPolypsConditionSeeder::class,
                EpistaxisNoseBleedConditionSeeder::class,
                AdenoidHypertrophyConditionSeeder::class,
                TonsillitisConditionSeeder::class,
                RecurrentTonsillitisConditionSeeder::class,
                SoreThroatConditionSeeder::class,
                PharyngitisConditionSeeder::class,
                LaryngitisConditionSeeder::class,
                HoarsenessofVoiceConditionSeeder::class,
                VoiceDisordersConditionSeeder::class,
                SnoringConditionSeeder::class,
                ObstructiveSleepApneaConditionSeeder::class,
                DysphagiaConditionSeeder::class,
                ForeignBodyinEarNoseorThroatConditionSeeder::class,
                NeckSwellingConditionSeeder::class,
                ThyroidSwellingENTEvaluationConditionSeeder::class,
                SalivaryGlandDisordersConditionSeeder::class,
                ParotidSwellingConditionSeeder::class,
                SubmandibularGlandDisordersConditionSeeder::class,
                OralCavityLesionsConditionSeeder::class,
                MouthUlcersConditionSeeder::class,
                HeadandNeckInfectionsConditionSeeder::class,
                HeadandNeckTumorsConditionSeeder::class,
                OralCancerConditionSeeder::class,
                LaryngealCancerConditionSeeder::class,
                NasopharyngealCancerConditionSeeder::class,
                PediatricENTDisordersConditionSeeder::class,
                PostENTSurgeryComplicationsConditionSeeder::class,
            ]);
        });
    }
}
