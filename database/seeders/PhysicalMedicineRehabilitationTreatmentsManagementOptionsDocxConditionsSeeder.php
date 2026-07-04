<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;

class PhysicalMedicineRehabilitationTreatmentsManagementOptionsDocxConditionsSeeder extends Seeder
{
    public function run(): void
    {
        Condition::withoutSyncingToSearch(function () {
            $this->call([
                PhysiotherapyExerciseTherapyConditionSeeder::class,
                OccupationalTherapyConditionSeeder::class,
                SpeechSwallowingTherapyConditionSeeder::class,
                ProstheticsOrthoticsManagementConditionSeeder::class,
                ElectrotherapyConditionSeeder::class,
                JointMobilizationManualTherapyConditionSeeder::class,
                GaitTrainingBalanceExercisesGaitTrainingBalanceExercisesConditionSeeder::class,
                GaitTrainingBalanceExercisesConditionSeeder::class,
                PainManagementConditionSeeder::class,
                PosturalCorrectionErgonomicTrainingConditionSeeder::class,
                HydrotherapyAquaticTherapyConditionSeeder::class,
                RespiratoryTherapyPulmonaryRehabilitationConditionSeeder::class,
                NeuromuscularReeducationConditionSeeder::class,
                SplintingCastingforContracturePreventionSplintingCastingforContracturePreventionConditionSeeder::class,
                SplintingCastingforContracturePreventionConditionSeeder::class,
                StretchingFlexibilityProgramsConditionSeeder::class,
                StrengthTrainingFunctionalMobilityExercisesConditionSeeder::class,
                SpasticityManagementBotulinumToxinStretchingOrthosesSpasticityManagementBotulinumToxinStretchingOrthosesConditionSeeder::class,
                SpasticityManagementConditionSeeder::class,
                CardiacRehabilitationProgramsConditionSeeder::class,
                HomeExerciseProgramPatientEducationConditionSeeder::class,
                TeleRehabilitationRemoteMonitoringConditionSeeder::class,
                PainSymptomControlinChronicNeurologicalDisordersConditionSeeder::class,
                BalanceVestibularTherapyConditionSeeder::class,
                PediatricDevelopmentalTherapyProgramsConditionSeeder::class,
                PostAmputationRehabilitationGaitTrainingConditionSeeder::class,
                MultidisciplinaryRehabilitationTeamApproachConditionSeeder::class,
                AssessmentMonitoringofFunctionalOutcomeConditionSeeder::class,
            ]);
        });
    }
}
