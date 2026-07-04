<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;

class gastroentrologydoneDocxProceduresSeeder extends Seeder
{
    public function run(): void
    {
        Procedure::withoutSyncingToSearch(function () {
            $this->call([
                LifestyleDietaryModificationGERDNAFLDIBSSeeder::class,
                ProtonPumpInhibitorsH2BlockersSeeder::class,
                AntacidsMucosalProtectantsSeeder::class,
                ProkineticAgentsGastroparesisDyspepsiaSeeder::class,
                AntibioticTherapyHpylorieradicationInfectiveDiarrheaSeeder::class,
                CorticosteroidsImmunomodulatorsIBDAutoimmuneHepatitisSeeder::class,
                BiologicTherapyIBDSeeder::class,
                UrsodeoxycholicAcidCholestaticDisordersGallstonesSeeder::class,
                EndoscopicVaricealLigationSclerotherapySeeder::class,
                EndoscopicDilatationEsophagealColonicStricturesSeeder::class,
                ERCPStoneExtractionStentPlacementSeeder::class,
                EndoscopicPolypectomySeeder::class,
                ColonoscopyUpperGIEndoscopyDiagnosticsTherapeuticsSeeder::class,
                LiverBiopsyPercutaneousTransjugularSeeder::class,
                ParacentesisAsciticFluidManagementSeeder::class,
                ManagementofHepaticEncephalopathySeeder::class,
                AntiviralTherapyHepatitisBCSeeder::class,
                LiverDiseaseMonitoringSurveillanceUltrasoundFibroscanAFPSeeder::class,
                TIPSTransjugularIntrahepaticPortosystemicShuntSeeder::class,
                EndoscopicSurgicalManagementofGIBleedSeeder::class,
                PancreaticPseudocystDrainageEndoscopicSurgicalSeeder::class,
                SurgicalResectionGICancersComplicatedIBDDiverticulitisSeeder::class,
                LaparoscopicOpenCholecystectomySeeder::class,
                NutritionalSupportEnteralParenteralSeeder::class,
                ManagementofElectrolyteImbalancesHydrationSeeder::class,
                StoolSoftenerLaxativeAntidiarrhealTherapySeeder::class,
            ]);
        });
    }
}
