<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;

class ENTTREATMENTSDocxProceduresSeeder extends Seeder
{
    public function run(): void
    {
        Procedure::withoutSyncingToSearch(function () {
            $this->call([
                ENTOutpatientConsultationSeeder::class,
                EarExaminationandSuctionCleaningSeeder::class,
                EarWaxRemovalSeeder::class,
                MedicalManagementofEarInfectionsSeeder::class,
                AntibioticandAntiInflammatoryTherapySeeder::class,
                HearingAssessmentandAudiometrySeeder::class,
                HearingAidEvaluationandFittingSeeder::class,
                TinnitusManagementSeeder::class,
                VertigoEvaluationandTreatmentSeeder::class,
                EpleyManeuverforBPPVSeeder::class,
                TonsillectomySeeder::class,
                MicrolaryngoscopySeeder::class,
                VoiceTherapySeeder::class,
                LaryngoscopyDiagnosticTherapeuticSeeder::class,
                ForeignBodyRemovalENTSeeder::class,
                ManagementofSnoringandSleepApneaSeeder::class,
                CPAPCounselingandSupportSeeder::class,
                TracheostomyEmergencyElectiveSeeder::class,
                TympanoplastySeeder::class,
                MyringoplastySeeder::class,
                TonsillectomySeeder::class,
                MicrolaryngoscopySeeder::class,
                VoiceTherapySeeder::class,
                LaryngoscopyDiagnosticTherapeuticSeeder::class,
                ForeignBodyRemovalENTSeeder::class,
                ManagementofSnoringandSleepApneaSeeder::class,
                CPAPCounselingandSupportSeeder::class,
                TracheostomyEmergencyElectiveSeeder::class,
                TympanoplastySeeder::class,
                MyringoplastySeeder::class,
                MastoidectomySeeder::class,
                OssiculoplastySeeder::class,
                CochlearImplantEvaluationandReferralSeeder::class,
                FacialNerveDecompressionENTRelatedSeeder::class,
                SalivaryGlandSurgerySeeder::class,
                ParotidectomySeeder::class,
                SubmandibularGlandExcisionSeeder::class,
                ThyroidSurgeryCoordinationENTApproachSeeder::class,
                NeckLumpEvaluationandBiopsySeeder::class,
                FNACofHeadandNeckSwellingsSeeder::class,
                HeadandNeckCancerSurgerywithOncologySeeder::class,
                EndoscopicSkullBaseProceduresENTRoleSeeder::class,
                PostOperativeENTCareSeeder::class,
                SpeechandSwallowingTherapySeeder::class,
                PediatricENTSurgicalProceduresSeeder::class,
                InfectionControlandPreventionSeeder::class,
                EmergencyENTCareSeeder::class,
                ENTDayCareProceduresSeeder::class,
                FollowUpandLongTermENTCareSeeder::class,
                PreventiveENTHealthCheckUpsSeeder::class,
            ]);
        });
    }
}
