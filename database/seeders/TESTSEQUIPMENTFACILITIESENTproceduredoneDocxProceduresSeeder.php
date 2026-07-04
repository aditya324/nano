<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;

class TESTSEQUIPMENTFACILITIESENTproceduredoneDocxProceduresSeeder extends Seeder
{
    public function run(): void
    {
        Procedure::withoutSyncingToSearch(function () {
            $this->call([
                ENTOPDExaminationChairwithDiagnosticUnitSeeder::class,
                HeadlightLEDExaminationLightSeeder::class,
                OtoscopeVideoOtoscopeSeeder::class,
                DiagnosticRigidNasalEndoscopesSeeder::class,
                FlexibleNasoLaryngoscopeSeeder::class,
                VideoEndoscopyRecordingSystemSeeder::class,
                AudiometryPureToneAudiometerSeeder::class,
                SpeechAudiometrySetupSeeder::class,
                TympanometryImpedanceAudiometrySeeder::class,
                OtoacousticEmissionOAETestingSeeder::class,
                BrainstemEvokedResponseAudiometryBERASeeder::class,
                NewbornHearingScreeningEquipmentSeeder::class,
                TuningForkTestSetSeeder::class,
                MicroscopicEarExaminationFacilitySeeder::class,
                ENTOperatingMicroscopeSeeder::class,
                MicroEarSurgeryInstrumentSetsSeeder::class,
                TympanoplastyMastoidectomyEquipmentSeeder::class,
                FunctionalEndoscopicSinusSurgeryFESSSetSeeder::class,
                EndoscopicSinusSurgeryCameraMonitorSeeder::class,
                PoweredMicrodebriderSystemSeeder::class,
                CoblationRadiofrequencySurgeryUnitSeeder::class,
                TonsillectomyAdenoidectomyInstrumentsSeeder::class,
                LASERforENTProceduresCODiodeSeeder::class,
                TracheostomySetEmergencyAirwayEquipmentSeeder::class,
                VoiceSpeechEvaluationToolsSeeder::class,
                LaryngoscopyStroboscopyEquipmentSeeder::class,
                SwallowingAssessmentFEESSetupSeeder::class,
                ForeignBodyRemovalInstrumentsSeeder::class,
                EpistaxisManagementEquipmentCauteryPackingSeeder::class,
                AllergyTestingImmunotherapyFacilitySeeder::class,
                SleepStudyAccessforSleepApneaEvaluationSeeder::class,
                SnoringOSATreatmentEquipmentCPAPCoordinationSeeder::class,
                CTScanAccessforSinusTemporalBoneSeeder::class,
                MRIAccessforHeadNeckEvaluationSeeder::class,
                UltrasoundforNeckThyroidSeeder::class,
                FNACBiopsyFacilityforHeadNeckLesionsSeeder::class,
                HeadNeckCancerDiagnosticSetupSeeder::class,
                DayCareENTSurgeryFacilitySeeder::class,
                PostoperativeRecoveryMonitoringAreaSeeder::class,
                PediatricENTInstrumentsEquipmentSeeder::class,
                HearingAidTrialFittingFacilitySeeder::class,
                CochlearImplantEvaluationCoordinationSeeder::class,
                SterilizationInfectionControlSetupSeeder::class,
                CSSDSupportforENTInstrumentsSeeder::class,
                EmergencyENTProcedureReadinessSeeder::class,
                NABHCompliantENTOTOPDInfrastructureSeeder::class,
                DigitalMedicalRecordsPACSIntegrationSeeder::class,
                TeleENTConsultationFollowupFacilitySeeder::class,
                PatientCounselingEducationAreaSeeder::class,
                InsuranceTPADocumentationSupportSeeder::class,
                HearingAidTrialFittingFacilitySeeder::class,
                CochlearImplantEvaluationCoordinationSeeder::class,
                SterilizationInfectionControlSetupSeeder::class,
                CSSDSupportforENTInstrumentsSeeder::class,
                EmergencyENTProcedureReadinessSeeder::class,
                NABHCompliantENTOTOPDInfrastructureSeeder::class,
                DigitalMedicalRecordsPACSIntegrationSeeder::class,
                TeleENTConsultationFollowupFacilitySeeder::class,
                PatientCounselingEducationAreaSeeder::class,
                InsuranceTPADocumentationSupportSeeder::class,
            ]);
        });
    }
}
