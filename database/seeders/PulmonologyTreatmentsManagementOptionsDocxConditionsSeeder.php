<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;

class PulmonologyTreatmentsManagementOptionsDocxConditionsSeeder extends Seeder
{
    public function run(): void
    {
        Condition::withoutSyncingToSearch(function () {
            $this->call([
                InhalerTherapyBronchodilatorsCorticosteroidsConditionSeeder::class,
                OxygenTherapyNasalCannulaMaskHighFlowNasalOxygenConditionSeeder::class,
                MechanicalVentilationInvasiveNonInvasiveMechanicalVentilationInvasiveNonInvasiveConditionSeeder::class,
                MechanicalVentilationInvasiveNonInvasiveConditionSeeder::class,
                PulmonaryRehabilitationProgramsConditionSeeder::class,
                AntibioticTherapyCommunityHospitalAcquiredInfectionsConditionSeeder::class,
                AntiTuberculosisTherapyATTConditionSeeder::class,
                ImmunomodulatorsBiologicTherapySevereAsthmaILDConditionSeeder::class,
                BronchoscopyDiagnosticTherapeuticConditionSeeder::class,
                PleuralProceduresThoracentesisChestTubePleurodesisConditionSeeder::class,
                CPAPBiPAPTherapyforSleepDisordersConditionSeeder::class,
                PulmonaryThromboembolismManagementAnticoagulationThrombolysisConditionSeeder::class,
                InterventionalPulmonologyProceduresStentBalloonDilatationConditionSeeder::class,
                LungBiopsyTransbronchialVideoAssistedThoracoscopicSurgeryConditionSeeder::class,
                ManagementofPulmonaryHypertensionMedicationsInterventionsConditionSeeder::class,
                AntiFibroticTherapyPulmonaryFibrosisConditionSeeder::class,
                SmokingCessationProgramsCounselingConditionSeeder::class,
                VaccinationInfluenzaPneumococcalCOVID19ConditionSeeder::class,
                NutritionalSupportExerciseTherapyinChronicLungDiseaseConditionSeeder::class,
                PostCOVIDPulmonaryCareRehabilitationConditionSeeder::class,
                ManagementofAcuteExacerbationsSteroidsAntibioticsOxygenConditionSeeder::class,
                ChestPhysiotherapyAirwayClearanceTechniquesConditionSeeder::class,
                VATSVideoAssistedThoracoscopicSurgeryConditionSeeder::class,
                LungCancerManagementSurgeryChemotherapyRadiotherapyTargetedTherapyConditionSeeder::class,
                MonitoringManagementofChronicOxygenDependencyConditionSeeder::class,
                MultidisciplinaryPulmonologyTeamApproachConditionSeeder::class,
            ]);
        });
    }
}
