<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;

class NeurosurgeryDocxConditionsSeeder extends Seeder
{
    public function run(): void
    {
        Condition::withoutSyncingToSearch(function () {
            $this->call([
                BrainTumorsConditionSeeder::class,
                PrimaryBrainTumorsConditionSeeder::class,
                SecondaryMetastaticBrainTumorsConditionSeeder::class,
                HeadInjuryConditionSeeder::class,
                TraumaticBrainInjuryConditionSeeder::class,
                IntracranialHemorrhageConditionSeeder::class,
                SubduralHematomaConditionSeeder::class,
                ExtraduralHematomaConditionSeeder::class,
                IntracerebralHemorrhageConditionSeeder::class,
                HydrocephalusConditionSeeder::class,
                CongenitalHydrocephalusConditionSeeder::class,
                NormalPressureHydrocephalusConditionSeeder::class,
                SpinalCordCompressionConditionSeeder::class,
                CervicalDiscProlapseConditionSeeder::class,
                LumbarDiscProlapseConditionSeeder::class,
                ThoracicDiscProlapseConditionSeeder::class,
                SpinalStenosisConditionSeeder::class,
                DegenerativeSpineDiseaseConditionSeeder::class,
                CervicalSpondyloticMyelopathyConditionSeeder::class,
                LumbarCanalStenosisConditionSeeder::class,
                SpineTraumaConditionSeeder::class,
                VertebralFractureswithNeurologicalDeficitConditionSeeder::class,
                SpinalInstabilityConditionSeeder::class,
                BrainAbscessConditionSeeder::class,
                SpinalInfectionsConditionSeeder::class,
                TuberculosisofSpineConditionSeeder::class,
                CraniovertebralJunctionAnomaliesConditionSeeder::class,
                ChiariMalformationConditionSeeder::class,
                SyringomyeliaConditionSeeder::class,
                NeuralTubeDefectsConditionSeeder::class,
                NeuralTubeDefectsConditionSeeder::class,
                MeningoceleConditionSeeder::class,
                MyelomeningoceleConditionSeeder::class,
                TrigeminalNeuralgiaConditionSeeder::class,
                FacialNerveCompressionDisordersConditionSeeder::class,
                PeripheralNerveInjuriesConditionSeeder::class,
                BrachialPlexusInjuriesConditionSeeder::class,
                CarpalTunnelSyndromeSurgicalCasesConditionSeeder::class,
                UlnarNerveCompressionConditionSeeder::class,
                IntracranialAneurysmConditionSeeder::class,
                ArteriovenousMalformationAVMConditionSeeder::class,
                SubarachnoidHemorrhageConditionSeeder::class,
                PituitaryAdenomaConditionSeeder::class,
                SkullBaseTumorsConditionSeeder::class,
                CranialBoneDefectsConditionSeeder::class,
                CSFLeakConditionSeeder::class,
                SpinalTumorsConditionSeeder::class,
                IntramedullarySpinalTumorsConditionSeeder::class,
                ExtramedullarySpinalTumorsConditionSeeder::class,
                PostOperativeNeurosurgicalComplicationsConditionSeeder::class,
                RecurrentBrainorSpineTumorsConditionSeeder::class,
            ]);
        });
    }
}
