<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;

class VASCULARSURGERYTREATMENTSMANAGEMENTOPTIONSproceduredoneDocxProceduresSeeder extends Seeder
{
    public function run(): void
    {
        Procedure::withoutSyncingToSearch(function () {
            $this->call([
                LifestyleModificationRiskFactorManagementSmokingDiabetesHypertensionSeeder::class,
                AntiplateletTherapyAspirinClopidogrelSeeder::class,
                AnticoagulationTherapyHeparinWarfarinNOACsSeeder::class,
                StatinTherapyLipidManagementSeeder::class,
                EndovascularAngioplastyStentingPeripheralCarotidRenalSeeder::class,
                EndovascularAneurysmRepairEVARSeeder::class,
                OpenSurgicalRepairAAAPeripheralArteryBypassSeeder::class,
                CarotidEndarterectomySeeder::class,
                FemoropoplitealFemorodistalBypassSurgerySeeder::class,
                ThrombectomyEmbolectomyAcuteLimbIschemiaSeeder::class,
                FasciotomyCompartmentSyndromeSeeder::class,
                VaricoseVeinSurgeryHighLigationStrippingPhlebectomySeeder::class,
                EndovenousLaserTherapyEVLTRadiofrequencyAblationRFASeeder::class,
                ManagementofChronicVenousUlcersDebridementSkinGraftsCompressionTherapySeeder::class,
                LymphedemaManagementSurgicalNonSurgicalSeeder::class,
                VascularTraumaRepairArterialVenousSeeder::class,
                ArteriovenousFistulaCreationRevisionforHemodialysisSeeder::class,
                SurgicalManagementofBuergersDiseaseVasculitisComplicationsSeeder::class,
                PoplitealArteryEntrapmentReleaseSeeder::class,
                MesentericRevascularizationEndovascularOpenSeeder::class,
                PeripheralAneurysmResectionGraftingSeeder::class,
                ManagementofVascularGraftInfectionsDebridementRevascularizationSeeder::class,
                CarotidArteryStentingSeeder::class,
                RaynaudsSurgicalInterventionsSympathectomySeeder::class,
                PostoperativeRehabilitationWoundCareSurveillanceSeeder::class,
            ]);
        });
    }
}
