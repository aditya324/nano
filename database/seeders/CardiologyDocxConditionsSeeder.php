<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;

class CardiologyDocxConditionsSeeder extends Seeder
{
    public function run(): void
    {
        Condition::withoutSyncingToSearch(function () {
            $this->call([
                CoronaryArteryDiseaseCADIschemicHeartDiseaseConditionSeeder::class,
                AcuteMyocardialInfarctionSTEMINSTEMIConditionSeeder::class,
                HeartFailureAcuteandChronicConditionSeeder::class,
                HypertensionPrimarySecondaryConditionSeeder::class,
                CardiomyopathiesDilatedHypertrophicRestrictiveConditionSeeder::class,
                ArrhythmiasAtrialFibrillationAtrialFlutterConditionSeeder::class,
                VentricularTachycardiaVentricularFibrillationConditionSeeder::class,
                SupraventricularTachycardiaSVTConditionSeeder::class,
                BradyarrhythmiasHeartBlockConditionSeeder::class,
                ValvularHeartDiseaseRheumaticandDegenerativeConditionSeeder::class,
                CongenitalHeartDiseasePediatricandAdultConditionSeeder::class,
                PericardialDiseasesPericarditisPericardialEffusionTamponadeConditionSeeder::class,
                EndocarditisInfectiveConditionSeeder::class,
                HyperlipidemiaDyslipidemiaConditionSeeder::class,
                PeripheralArterialDiseasePADConditionSeeder::class,
                AorticAneurysmAorticDissectionConditionSeeder::class,
                PulmonaryHypertensionConditionSeeder::class,
                IschemicCardiomyopathyConditionSeeder::class,
                StressCardiomyopathyTakotsuboConditionSeeder::class,
                CardiacTumorsPrimarySecondaryConditionSeeder::class,
                ElectrolyteInducedCardiacDysfunctionConditionSeeder::class,
                DrugInducedCardiotoxicityegChemotherapyConditionSeeder::class,
                MyocarditisViralNonViralConditionSeeder::class,
                StrokeRelatedtoCardiacSourceCardioembolicStrokeConditionSeeder::class,
                SyncopePresyncopeRelatedtoCardiacCausesConditionSeeder::class,
            ]);
        });
    }
}
