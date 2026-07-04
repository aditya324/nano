<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;

class DermatologyConditionsCheckDocxConditionsSeeder extends Seeder
{
    public function run(): void
    {
        Condition::withoutSyncingToSearch(function () {
            $this->call([
                AcneVulgarisConditionSeeder::class,
                AtopicDermatitisConditionSeeder::class,
                PsoriasisConditionSeeder::class,
                TineaRingwormDermatophytosisConditionSeeder::class,
                CandidiasisConditionSeeder::class,
                ImpetigoConditionSeeder::class,
                CellulitisConditionSeeder::class,
                WartsConditionSeeder::class,
                HerpesSimplexConditionSeeder::class,
                HerpesZosterShinglesConditionSeeder::class,
                UrticariaHivesConditionSeeder::class,
                ContactDermatitisAllergicIrritantConditionSeeder::class,
                AlopeciaAreataConditionSeeder::class,
                PatternHairLossAndrogeneticAlopeciaConditionSeeder::class,
                VitiligoConditionSeeder::class,
                LichenPlanusConditionSeeder::class,
                SeborrheicDermatitisConditionSeeder::class,
                RosaceaConditionSeeder::class,
                HyperpigmentationMelasmaConditionSeeder::class,
                BasalCellCarcinomaConditionSeeder::class,
                SquamousCellCarcinomaConditionSeeder::class,
                MelanomaConditionSeeder::class,
                ActinicKeratosisConditionSeeder::class,
                DysplasticNeviConditionSeeder::class,
                DrugReactionsAllergicDermatosesConditionSeeder::class,
                OnychomycosisConditionSeeder::class,
                PsoriaticNailsConditionSeeder::class,
                ChronicPruritusConditionSeeder::class,
                PostInflammatoryHyperpigmentationPIHConditionSeeder::class,
                PigmentaryDisordersPostinflammatoryNevusConditionSeeder::class,
                NevusMolesBirthmarksConditionSeeder::class,
                WoundHealingComplicationsChronicUlcersConditionSeeder::class,
                DermatologicManifestationsofSystemicDiseaseConditionSeeder::class,
                DandruffConditionSeeder::class,
                ScalpPsoriasisConditionSeeder::class,
                AlopeciaConditionSeeder::class,
                InfantileHemangiomaConditionSeeder::class,
                PediatricAtopicDermatitisConditionSeeder::class,
            ]);
        });
    }
}
