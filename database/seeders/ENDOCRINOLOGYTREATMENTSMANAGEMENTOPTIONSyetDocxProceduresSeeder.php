<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;

class ENDOCRINOLOGYTREATMENTSMANAGEMENTOPTIONSyetDocxProceduresSeeder extends Seeder
{
    public function run(): void
    {
        Procedure::withoutSyncingToSearch(function () {
            $this->call([
                LifestyleModificationDietExerciseWeightManagementSeeder::class,
                OralHypoglycemicAgentsMetforminSulfonylureasSGLT2iDPP4iSeeder::class,
                InsulinTherapyMultipleRegimensPumpTherapySeeder::class,
                ContinuousGlucoseMonitoringCGMSeeder::class,
                ManagementofDKAHHSSeeder::class,
                ThyroidHormoneReplacementTherapySeeder::class,
                AntiThyroidMedicationsMethimazolePropylthiouracilSeeder::class,
                RadioactiveIodineTherapySeeder::class,
                ThyroidParathyroidSurgerySeeder::class,
                ManagementofPituitaryDisordersMedicalSurgicalRadiationSeeder::class,
                AdrenalHormoneReplacementSuppressionTherapySeeder::class,
                OsteoporosisManagementCalciumVitaminDBisphosphonatesDenosumabSeeder::class,
                BariatricSurgeryforObesityMetabolicSyndromeSeeder::class,
                PCOSManagementLifestyleMedicationsFertilitySupportSeeder::class,
                HormoneReplacementTherapyHRTforHypogonadismMenopauseSeeder::class,
                ManagementofHyperprolactinemiaDopamineAgonistsSeeder::class,
                TreatmentofEndocrineHypertensionSeeder::class,
                VitaminMineralSupplementationCalciumMagnesiumVitaminDSeeder::class,
                MonitoringAdjustmentofLongTermTherapySeeder::class,
                GeneticRareEndocrineDisorderManagementSeeder::class,
                InsulinPumpAdvancedDiabetesTechnologiesSeeder::class,
                PatientEducationSelfMonitoringTrainingSeeder::class,
                MultidisciplinaryEndocrineCareApproachSeeder::class,
                PreventiveEndocrinologyScreeningRiskFactorManagementSeeder::class,
                TeleEndocrinologyRemoteMonitoringServicesSeeder::class,
            ]);
        });
    }
}
