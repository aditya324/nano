<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;

class CARDIOLOGYTREATMENTSMANAGEMENTOPTIONSProceduredoneDocxProceduresSeeder extends Seeder
{
    public function run(): void
    {
        Procedure::withoutSyncingToSearch(function () {
            $this->call([
                LifestyleModificationDietExerciseSmokingCessationSeeder::class,
                AntiplateletTherapyAspirinP2Y12InhibitorsSeeder::class,
                AnticoagulationWarfarinNOACsSeeder::class,
                StatinTherapyLipidLoweringAgentsSeeder::class,
                BetaBlockersSeeder::class,
                ACEInhibitorsARBsARNISeeder::class,
                CalciumChannelBlockersSeeder::class,
                DiureticsLoopThiazidePotassiumSparingSeeder::class,
                AntiarrhythmicMedicationsSeeder::class,
                EmergencyThrombolysisasperSTEMIprotocolsSeeder::class,
                CongenitalHeartDiseasePediatricandAdultSeeder::class,
                PericardialDiseasesPericarditisPericardialEffusionTamponadeSeeder::class,
                EndocarditisInfectiveSeeder::class,
                HyperlipidemiaDyslipidemiaSeeder::class,
                PeripheralArterialDiseasePADSeeder::class,
                AorticAneurysmAorticDissectionSeeder::class,
                PulmonaryHypertensionSeeder::class,
                IschemicCardiomyopathySeeder::class,
                StressCardiomyopathyTakotsuboSeeder::class,
                CardiacTumorsPrimarySecondarySeeder::class,
                ElectrolyteInducedCardiacDysfunctionSeeder::class,
                DrugInducedCardiotoxicityegChemotherapySeeder::class,
                MyocarditisViralNonViralSeeder::class,
                StrokerelatedtoCardiacSourceCardioembolicSeeder::class,
                SyncopePresyncoperelatedtocardiaccausesSeeder::class,
            ]);
        });
    }
}
