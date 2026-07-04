<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;

class MindCareMentalHealthDocxConditionsSeeder extends Seeder
{
    public function run(): void
    {
        Condition::withoutSyncingToSearch(function () {
            $this->call([
                AnxietyDisordersGeneralizedAnxietyDisorderPanicDisorderConditionSeeder::class,
                EatingDisordersAnorexiaBulimiaBingeEatingConditionSeeder::class,
                SubstanceUseDisordersAlcoholDrugsConditionSeeder::class,
                SubstanceUseDisordersAlcoholDrugsConditionSeeder::class,
                SleepDisordersInsomniaSleepApneaCircadianDisordersConditionSeeder::class,
                DementiaAlzheimersVascularOtherConditionSeeder::class,
                CognitiveImpairmentMildCognitiveImpairmentMildCognitiveImpairmentMildCognitiveImpairmentMCIConditionSeeder::class,
                SomaticSymptomDisorderPsychosomaticDisordersConditionSeeder::class,
                SelfHarmSuicidalIdeationRiskConditionSeeder::class,
                GriefandBereavementComplicationsConditionSeeder::class,
            ]);
        });
    }
}
