<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;

class DERMATOLOGYTREATMENTSMANAGEMENTOPTIONSdoneDocxProceduresSeeder extends Seeder
{
    public function run(): void
    {
        Procedure::withoutSyncingToSearch(function () {
            $this->call([
                TopicalTherapySteroidsAntibioticsAntifungalsRetinoidsSeeder::class,
                ProceduresSeeder::class,
                SystemicTherapyOralAntibioticsAntifungalsRetinoidsImmunosuppressantsSeeder::class,
                ProceduresSeeder::class,
                BiologicTherapyPsoriasisSevereAtopicDermatitisSeeder::class,
                ProceduresSeeder::class,
                PhototherapyUVBPUVASeeder::class,
                ProceduresSeeder::class,
                CryotherapyforWartsandPrecancerousLesionsSeeder::class,
                ProceduresSeeder::class,
                LaserTherapyHairRemovalPigmentationVascularLesionsSeeder::class,
                ProceduresSeeder::class,
                SurgicalExcisionSkinCancersTumorsCystsSeeder::class,
                ProceduresSeeder::class,
                MohsMicrographicSurgeryforSkinCancerSeeder::class,
                ProceduresSeeder::class,
                ChemicalPeelsPigmentationAcneScarringSeeder::class,
                ChemicalPeelsSeeder::class,
                DermabrasionMicrodermabrasionSeeder::class,
                ProceduresSeeder::class,
                PlateletRichPlasmaPRPTherapyforHairSkinSeeder::class,
                ProceduresSeeder::class,
                IntralesionalTherapySteroids5FUSeeder::class,
                IntralesionalTherapySeeder::class,
                ManagementofChronicWoundsUlcersSeeder::class,
                PatchTestingforAllergicContactDermatitisSeeder::class,
                PatchTestingSeeder::class,
                NailCareTherapyforNailDisordersSeeder::class,
                NailCareTherapySeeder::class,
                HairGrowthHairLossTreatmentsMinoxidilFinasterideSeeder::class,
                HairGrowthHairLossTreatmentsSeeder::class,
                ManagementofDrugReactionsAllergicDermatosesSeeder::class,
                SkinCareCounselingPreventiveDermatologySeeder::class,
                CryoLaserSurgicalRemovalofBenignLesionsSeeder::class,
                RemovalofBenignSkinLesionsSeeder::class,
                MultidisciplinaryCarewithRheumatologyEndocrinologyforSystemicDisordersSeeder::class,
                MultidisciplinaryCareforSystemicDisordersSeeder::class,
                PatientEducationonSkinCancerPreventionSunProtectionSeeder::class,
                SkinCancerPreventionSunProtectionEducationSeeder::class,
                TeleDermatologyRemoteConsultationServicesTeleDermatologyRemoteConsultationServicesSeeder::class,
                TeleDermatologyRemoteConsultationServicesSeeder::class,
                ScarManagementCosmeticDermatologyProceduresSeeder::class,
                AntiagingPigmentationManagementTopicalProceduralSeeder::class,
                AntiAgingPigmentationManagementSeeder::class,
                PostprocedureFollowUpMonitoringSeeder::class,
                PostProcedureFollowUpMonitoringSeeder::class,
            ]);
        });
    }
}
