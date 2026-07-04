<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;

class INTERNALMEDICINETREATMENTSMANAGEMENTOPTIONSyetDocxProceduresSeeder extends Seeder
{
    public function run(): void
    {
        Procedure::withoutSyncingToSearch(function () {
            $this->call([
                LifestyleModificationPreventiveCareDietExerciseSmokingCessationSeeder::class,
                LifestyleModificationPreventiveCareSeeder::class,
                PharmacotherapyforHypertensionDiabetesDyslipidemiaSeeder::class,
                HeartFailureManagementACEiARBBetablockersDiureticsDeviceTherapySeeder::class,
                HeartFailureManagementSeeder::class,
                AntiarrhythmicTherapyRateRhythmControlSeeder::class,
                RenalReplacementTherapyDialysisforAKICKDSeeder::class,
                LiverDiseaseManagementMedicationsMonitoringSupportiveCareSeeder::class,
                LiverDiseaseManagementSeeder::class,
                ManagementofInfectiousDiseasesAntibioticsAntiviralsAntimalarialsSeeder::class,
                ManagementofInfectiousDiseasesSeeder::class,
                ImmunomodulatoryTherapyAutoimmuneDiseasesSeeder::class,
                ElectrolyteCorrectionFluidManagementSeeder::class,
                BloodTransfusionHematinicTherapySeeder::class,
                PainManagementSymptomControlSeeder::class,
                VaccinationPreventiveImmunizationSeeder::class,
                NutritionalSupportDieteticPlanningSeeder::class,
                ManagementofAcuteFebrileIllnessSepsisProtocolsSeeder::class,
                AnticoagulationAntiplateletTherapySeeder::class,
                ScreeningMonitoringofChronicDiseasesSeeder::class,
                MultidisciplinaryCareforMetabolicSyndromeObesitySeeder::class,
                PatientEducationSelfMonitoringforChronicIllnessesSeeder::class,
                TelemedicineRemoteMonitoringforChronicPatientsSeeder::class,
                PalliativeCareEndofLifeSupportSeeder::class,
                ManagementofCoagulationDisordersThromboticEventsSeeder::class,
                DiagnosticPointofCareTestingECGEchoLabTestsSeeder::class,
                ManagementofAcuteExacerbationsCOPDAsthmaHeartFailureSeeder::class,
                RiskStratificationPreventiveCardiologyInternalMedicineCareSeeder::class,
                CoordinationwithSubspecialtiesCardiologyNephrologyEndocrinologyPulmonologySeeder::class,
            ]);
        });
    }
}
