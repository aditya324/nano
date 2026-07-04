<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;

class INTERNALMEDICINETREATMENTSMANAGEMENTOPTIONSyet2DocxProceduresSeeder extends Seeder
{
    public function run(): void
    {
        Procedure::withoutSyncingToSearch(function () {
            $this->call([
                LifestyleModificationPreventiveCareSeeder::class,
                PharmacotherapyforHypertensionSeeder::class,
                PharmacotherapyforDyslipidemiaSeeder::class,
                PharmacotherapyforDiabetesSeeder::class,
                AntiarrhythmicTherapyRateRhythmControlSeeder::class,
                DialysisforAcuteKidneyInjuryAKIChronicKidneyDiseaseCKDSeeder::class,
                DialysisforAKICKDSeeder::class,
                RenalReplacementTherapySeeder::class,
                LiverDiseaseManagementMedicationsMonitoringSupportiveCareSeeder::class,
                LiverDiseaseManagementSeeder::class,
                ManagementofInfectiousDiseasesAntibioticsAntiviralsAntimalarialsSeeder::class,
                ManagementofInfectiousDiseasesSeeder::class,
                ImmunomodulatoryTherapyAutoimmuneDiseasesSeeder::class,
                ImmunomodulatoryTherapySeeder::class,
                FluidManagementSeeder::class,
                BloodTransfusionSeeder::class,
                HematinicTherapySeeder::class,
                PainManagementSymptomControlSeeder::class,
                VaccinationPreventiveImmunizationSeeder::class,
                NutritionalSupportDieteticPlanningSeeder::class,
                AnticoagulationTherapySeeder::class,
                AntiplateletTherapySeeder::class,
                ManagementofAcuteFebrileIllnessSepsisProtocolsSeeder::class,
                ScreeningMonitoringofChronicDiseasesSeeder::class,
                MultidisciplinaryCareforMetabolicSyndromeObesitySeeder::class,
                PatientEducationSelfMonitoringforChronicIllnessesSeeder::class,
                TelemedicineRemoteMonitoringforChronicPatientsSeeder::class,
                PalliativeCareEndofLifeSupportSeeder::class,
                ManagementofCoagulationDisordersThromboticEventsSeeder::class,
                DiagnosticPointofCareTestingECGEchoLabTestsSeeder::class,
                DiagnosticPointofCareTestingSeeder::class,
                ManagementofAcuteExacerbationsCOPDAsthmaHeartFailureSeeder::class,
                ManagementofAcuteExacerbationsSeeder::class,
                CoordinationwithSubspecialtiesCardiologyNephrologyEndocrinologyPulmonologySeeder::class,
                CoordinationwithSubspecialtiesSeeder::class,
            ]);
        });
    }
}
