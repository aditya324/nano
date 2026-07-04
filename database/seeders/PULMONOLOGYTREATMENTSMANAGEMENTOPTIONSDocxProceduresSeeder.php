<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;

class PULMONOLOGYTREATMENTSMANAGEMENTOPTIONSDocxProceduresSeeder extends Seeder
{
    public function run(): void
    {
        Procedure::withoutSyncingToSearch(function () {
            $this->call([
                InhalerTherapyBronchodilatorsCorticosteroidsSeeder::class,
                OxygenTherapyNasalCannulaMaskHighFlowNasalOxygenSeeder::class,
                MechanicalVentilationInvasiveNonInvasiveSeeder::class,
                PulmonaryRehabilitationProgramsSeeder::class,
                AntibioticTherapyCommunityHospitalAcquiredInfectionsSeeder::class,
                AntiTuberculosisTherapyATTSeeder::class,
                ImmunomodulatorsBiologicTherapySevereAsthmaILDSeeder::class,
                BronchoscopyDiagnosticTherapeuticSeeder::class,
                PleuralProceduresThoracentesisChestTubePleurodesisSeeder::class,
                CPAPBiPAPTherapyforSleepDisordersSeeder::class,
                PulmonaryThromboembolismManagementAnticoagulationThrombolysisSeeder::class,
                InterventionalPulmonologyProceduresStentBalloonDilatationSeeder::class,
                LungBiopsyTransbronchialVideoAssistedThoracoscopicSurgerySeeder::class,
                ManagementofPulmonaryHypertensionMedicationsInterventionsSeeder::class,
                AntiFibroticTherapyPulmonaryFibrosisSeeder::class,
                SmokingCessationProgramsCounselingSeeder::class,
                VaccinationInfluenzaPneumococcalCOVID19Seeder::class,
                NutritionalSupportExerciseTherapyinChronicLungDiseaseSeeder::class,
                PostCOVIDPulmonaryCareRehabilitationSeeder::class,
                ManagementofAcuteExacerbationsSteroidsAntibioticsOxygenSeeder::class,
                ChestPhysiotherapyAirwayClearanceTechniquesSeeder::class,
                VATSVideoAssistedThoracoscopicSurgerySeeder::class,
                LungCancerManagementSurgeryChemotherapyRadiotherapyTargetedTherapySeeder::class,
                MonitoringManagementofChronicOxygenDependencySeeder::class,
                MultidisciplinaryPulmonologyTeamApproachSeeder::class,
            ]);
        });
    }
}
