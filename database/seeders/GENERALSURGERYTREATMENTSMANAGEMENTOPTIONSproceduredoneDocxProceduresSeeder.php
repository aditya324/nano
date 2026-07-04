<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;

class GENERALSURGERYTREATMENTSMANAGEMENTOPTIONSproceduredoneDocxProceduresSeeder extends Seeder
{
    public function run(): void
    {
        Procedure::withoutSyncingToSearch(function () {
            $this->call([
                AppendectomyOpenLaparoscopicSeeder::class,
                CholecystectomyOpenLaparoscopicSeeder::class,
                HerniaRepairOpenLaparoscopicMeshSeeder::class,
                BowelResectionAnastomosisSeeder::class,
                ExploratoryLaparotomySeeder::class,
                LaparoscopicDiagnosticTherapeuticProceduresSeeder::class,
                ManagementofObstructionAdhesiolysisResectionSeeder::class,
                PepticUlcerPerforationRepairSeeder::class,
                WoundDebridementDrainageSeeder::class,
                AbscessIncisionDrainageSeeder::class,
                BreastLumpExcisionMastectomySeeder::class,
                SentinelLymphNodeBiopsySeeder::class,
                ThyroidectomyHemithyroidTotalSeeder::class,
                AnalProceduresHemorrhoidectomyFissurectomyFistulotomySeeder::class,
                PilonidalExcisionFlapProceduresSeeder::class,
                ColostomyIleostomyCreationClosureSeeder::class,
                OncologicResectionsColonBreastThyroidLiverPancreasSeeder::class,
                VascularSurgeryInterventionsforPADBypassPTASeeder::class,
                AmputationTraumaticDiabeticSeeder::class,
                TraumaResuscitationSurgicalControlDamageControlSurgerySeeder::class,
                PerioperativeCriticalCareSeeder::class,
                ManagementofBiliaryPancreatitisSeeder::class,
                PancreaticPseudocystDrainageExternalInternalSeeder::class,
                AbdominalAorticAneurysmRepairOpenEndovascularSeeder::class,
                VaricoseVeinProceduresEVLTSclerotherapyStrippingSeeder::class,
                TesticularExplorationTorsionRepairSeeder::class,
                HydrocelectomyVaricocelectomySeeder::class,
                NegativePressureWoundTherapyNPWTSeeder::class,
                DiabeticFootCareRevascularizationSeeder::class,
                EnhancedRecoveryAfterSurgeryERASProtocolsSeeder::class,
                NutritionOptimizationDieteticManagementPrePostOperativeSeeder::class,
                PainManagementAnalgesiaProtocolsSeeder::class,
                PreventionManagementofSurgicalSiteInfectionsSeeder::class,
                BloodLossManagementTransfusionProtocolsSeeder::class,
                LymphaticVascularLeakManagementegLymphoceleSeeder::class,
                PalliativeSurgicalCareinAdvancedCancerSeeder::class,
                EndoscopicProceduresERCPforStoneRemovalWhenSurgicalCollaborationSeeder::class,
                GIBleedControlEndoscopicSurgicalSeeder::class,
                TraumaRelatedOrthopedicSurgicalCareCollaborationSeeder::class,
                PostoperativeRehabilitationFollowupCareSeeder::class,
            ]);
        });
    }
}
