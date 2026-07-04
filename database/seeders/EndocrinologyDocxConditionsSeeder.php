<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;

class EndocrinologyDocxConditionsSeeder extends Seeder
{
    public function run(): void
    {
        Condition::withoutSyncingToSearch(function () {
            $this->call([
                DiabetesMellitusType1ConditionSeeder::class,
                DiabetesMellitusType2ConditionSeeder::class,
                GestationalDiabetesConditionSeeder::class,
                DiabeticKetoacidosisDKAHyperosmolarHyperglycemicStateHHSConditionSeeder::class,
                HypoglycemiaEndocrineDrugInducedConditionSeeder::class,
                ThyroidDisordersHypothyroidismHyperthyroidismConditionSeeder::class,
                GoiterThyroidNodulesConditionSeeder::class,
                ThyroidCancerConditionSeeder::class,
                ParathyroidDisordersHyperparathyroidismHypoparathyroidismConditionSeeder::class,
                AdrenalDisordersAddisonsDiseaseCushingsSyndromeAdrenalTumorsConditionSeeder::class,
                PituitaryDisordersAcromegalyHypopituitarismPituitaryAdenomasConditionSeeder::class,
                OsteoporosisOsteopeniaConditionSeeder::class,
                MetabolicSyndromeConditionSeeder::class,
                ObesityMorbidObesityConditionSeeder::class,
                PolycysticOvarySyndromePCOSPolycysticOvarySyndromePCOSConditionSeeder::class,
                PolycysticOvarySyndromePCOSConditionSeeder::class,
                HypogonadismMaleFemaleConditionSeeder::class,
                GrowthDisordersShortStatureGigantismConditionSeeder::class,
                HyperprolactinemiaConditionSeeder::class,
                DisordersofCalciumVitaminDMetabolismConditionSeeder::class,
                RareEndocrineTumorsPheochromocytomaNeuroendocrineTumorsConditionSeeder::class,
                MenopausePerimenopausalDisordersConditionSeeder::class,
                ThyroiditisAutoimmuneSubacuteConditionSeeder::class,
                CongenitalAdrenalHyperplasiaConditionSeeder::class,
                InsulinResistanceSyndromesConditionSeeder::class,
                EndocrineHypertensionConnsSyndromePheochromocytomaConditionSeeder::class,
            ]);
        });
    }
}
