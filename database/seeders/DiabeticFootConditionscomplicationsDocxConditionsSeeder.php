<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;

class DiabeticFootConditionscomplicationsDocxConditionsSeeder extends Seeder
{
    public function run(): void
    {
        Condition::withoutSyncingToSearch(function () {
            $this->call([
                DiabeticFootUlcerDFUConditionSeeder::class,
                NeuropathicUlcerConditionSeeder::class,
                IschemicArterialUlcerConditionSeeder::class,
                MixedNeuroischemicUlcerConditionSeeder::class,
                GangreneDryWetGasformingConditionSeeder::class,
                OsteomyelitisofFootToesConditionSeeder::class,
                CharcotFootNeuropathicArthropathyConditionSeeder::class,
                CallositiesPressureSoresinDiabeticsConditionSeeder::class,
                FootDeformitiesClawToeHammerToeHalluxValgusConditionSeeder::class,
                FungalBacterialInfectionsCellulitisAbscessConditionSeeder::class,
                IngrownToenailsParonychiaConditionSeeder::class,
                NecrotizingSoftTissueInfectionNecrotizingFasciitisConditionSeeder::class,
                DiabeticFootSepsisConditionSeeder::class,
                PeripheralNeuropathyComplicationsSensoryMotorAutonomicConditionSeeder::class,
                PeripheralArterialDiseaserelatedFootComplicationsConditionSeeder::class,
                FootUlcerswithPoorWoundHealingConditionSeeder::class,
                RecurrentUlcersConditionSeeder::class,
                DiabeticFootwithEdemaConditionSeeder::class,
                FootDeformitiesleadingtoPressureUlcersConditionSeeder::class,
                NonHealingPostSurgicalWoundsinDiabeticFootConditionSeeder::class,
            ]);
        });
    }
}
