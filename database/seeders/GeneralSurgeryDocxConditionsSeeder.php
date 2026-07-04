<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;

class GeneralSurgeryDocxConditionsSeeder extends Seeder
{
    public function run(): void
    {
        Condition::withoutSyncingToSearch(function () {
            $this->call([
                AppendicitisConditionSeeder::class,
                CholelithiasisSymptomaticGallstonesConditionSeeder::class,
                AcuteCholecystitisConditionSeeder::class,
                InguinalHerniaConditionSeeder::class,
                VentralIncisionalHerniaConditionSeeder::class,
                FemoralHerniaConditionSeeder::class,
                UmbilicalParaumbilicalHerniaConditionSeeder::class,
                HiatusHerniaConditionSeeder::class,
                StrangulatedObstructedHerniaConditionSeeder::class,
                IntestinalObstructionAdhesionsTumorVolvulusConditionSeeder::class,
                PepticUlcerDiseasePerforatedPepticUlcerConditionSeeder::class,
                TraumaBluntSharpAbdominalChestExtremityConditionSeeder::class,
                SoftTissueInfectionsCellulitisAbscessConditionSeeder::class,
                FourniersGangreneConditionSeeder::class,
                DiabeticFootUlcerLimbThreateningInfectionConditionSeeder::class,
                BreastLumpFibroadenomaConditionSeeder::class,
                CarcinomaBreastConditionSeeder::class,
                ThyroidNoduleGoiterConditionSeeder::class,
                CarcinomaThyroidConditionSeeder::class,
                HemorrhoidsPilesConditionSeeder::class,
                AnalFissureConditionSeeder::class,
                FistulainAnoConditionSeeder::class,
                PilonidalSinusConditionSeeder::class,
                GallbladderCarcinomaConditionSeeder::class,
                ColorectalCancerConditionSeeder::class,
                LiverTumorsBenignMalignantConditionSeeder::class,
                SplenicTraumaPathologyConditionSeeder::class,
                AbdominalAorticAneurysmConditionSeeder::class,
                VaricoseVeinsChronicVenousInsufficiencyConditionSeeder::class,
                PeripheralArterialDiseaseRequiringSurgicalCareConditionSeeder::class,
                BreastAbscessConditionSeeder::class,
                SkinTumorsMelanomaConditionSeeder::class,
                HydroceleVaricoceleConditionSeeder::class,
                TesticularTorsionTumorsConditionSeeder::class,
                BowelIschemiaConditionSeeder::class,
                GastrointestinalBleedRequiringSurgeryConditionSeeder::class,
                EsophagealStrictureTumorsConditionSeeder::class,
                PancreatitisPancreaticPseudocystConditionSeeder::class,
                GallstonePancreatitisConditionSeeder::class,
                BariatricSurgeryIndicationsObesityMetabolicConditionSeeder::class,
            ]);
        });
    }
}
