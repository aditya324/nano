<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;

class InternalMedicineDocxConditionsSeeder extends Seeder
{
    public function run(): void
    {
        Condition::withoutSyncingToSearch(function () {
            $this->call([
                HypertensionPrimarySecondaryConditionSeeder::class,
                DiabetesMellitusType12ConditionSeeder::class,
                DyslipidemiaHypercholesterolemiaConditionSeeder::class,
                CoronaryArteryDiseaseIschemicHeartDiseaseConditionSeeder::class,
                HeartFailureAcuteChronicConditionSeeder::class,
                ArrhythmiasAFVTSVTBradyarrhythmiasConditionSeeder::class,
                ChronicKidneyDiseaseCKDConditionSeeder::class,
                AcuteKidneyInjuryAKIConditionSeeder::class,
                ChronicLiverDiseaseCirrhosisConditionSeeder::class,
                GastrointestinalDisordersGERDPepticUlcerHepatitisConditionSeeder::class,
                RespiratoryDisordersCOPDAsthmaPneumoniaConditionSeeder::class,
                InfectiousDiseasesSepsisTBMalariaDengueViralInfectionsConditionSeeder::class,
                EndocrineDisordersThyroidAdrenalPituitaryPCOSEndocrineDisordersThyroidAdrenalPituitaryPCOSConditionSeeder::class,
                EndocrineDisordersThyroidAdrenalPituitaryPCOSConditionSeeder::class,
                ElectrolyteImbalancesNaKCaMgDisordersConditionSeeder::class,
                AnemiaIronDeficiencyB12HemolyticAplasticConditionSeeder::class,
                AutoimmuneDisordersSLERAVasculitisAutoimmuneDisordersSLERAVasculitisConditionSeeder::class,
                AutoimmuneDisordersSLERAVasculitisConditionSeeder::class,
                NeurologicalDisordersStrokeSeizuresPeripheralNeuropathyNeurologicalDisordersStrokeSeizuresPeripheralNeuropathyConditionSeeder::class,
                NeurologicalDisordersStrokeSeizuresPeripheralNeuropathyConditionSeeder::class,
                RheumatologicDisordersGoutOsteoarthritisOsteoporosisConditionSeeder::class,
                ObesityMetabolicSyndromeConditionSeeder::class,
                CoagulationDisordersHemophiliaDVTPEConditionSeeder::class,
                ChronicInfectiousDiseasesHIVHepatitisBCConditionSeeder::class,
                MalignanciesHematologicSolidTumorsinitialdiagnosissupportMalignanciesHematologicSolidTumorsInitialDiagnosisSupportConditionSeeder::class,
                MalignanciesHematologicSolidTumorsInitialDiagnosisSupportConditionSeeder::class,
                AcuteFebrileIllnessFeverofUnknownOriginConditionSeeder::class,
                FluidOverloadEdemaConditionSeeder::class,
                MultiOrganDysfunctionCriticalInternalMedicineCasesConditionSeeder::class,
            ]);
        });
    }
}
