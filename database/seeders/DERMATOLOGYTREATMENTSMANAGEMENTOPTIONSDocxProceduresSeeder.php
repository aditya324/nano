<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;

class DERMATOLOGYTREATMENTSMANAGEMENTOPTIONSDocxProceduresSeeder extends Seeder
{
    public function run(): void
    {
        Procedure::withoutSyncingToSearch(function () {
            $this->call([
                TopicalTherapySteroidsAntibioticsAntifungalsRetinoidsSeeder::class,
                SystemicTherapyOralAntibioticsAntifungalsRetinoidsImmunosuppressantsSeeder::class,
                BiologicTherapyPsoriasisSevereAtopicDermatitisSeeder::class,
                PhototherapyUVBPUVASeeder::class,
                CryotherapyforWartsandPrecancerousLesionsSeeder::class,
                LaserTherapyHairRemovalPigmentationVascularLesionsSeeder::class,
                SurgicalExcisionSkinCancersTumorsCystsSeeder::class,
                MohsMicrographicSurgeryforSkinCancerSeeder::class,
                ChemicalPeelsPigmentationAcneScarringSeeder::class,
                DermabrasionMicrodermabrasionSeeder::class,
                PlateletRichPlasmaPRPTherapyforHairSkinSeeder::class,
                IntralesionalTherapySteroids5FUSeeder::class,
                ManagementofChronicWoundsUlcersSeeder::class,
                PatchTestingforAllergicContactDermatitisSeeder::class,
                NailCareTherapyforNailDisordersSeeder::class,
                HairGrowthHairLossTreatmentsMinoxidilFinasterideSeeder::class,
                ManagementofDrugReactionsAllergicDermatosesSeeder::class,
                SkinCareCounselingPreventiveDermatologySeeder::class,
                CryoLaserSurgicalRemovalofBenignLesionsSeeder::class,
                MultidisciplinaryCarewithRheumatologyEndocrinologyforSystemicDisordersSeeder::class,
                PatientEducationonSkinCancerPreventionSunProtectionSeeder::class,
                TeleDermatologyRemoteConsultationServicesTeleDermatologyRemoteConsultationServicesSeeder::class,
                ScarManagementCosmeticDermatologyProceduresSeeder::class,
                AntiagingPigmentationManagementTopicalProceduralSeeder::class,
                PostprocedureFollowUpMonitoringSeeder::class,
            ]);
        });
    }
}
