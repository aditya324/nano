<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;

class NEUROSURGERYTREATMENTSPROCEDURESproceduredoneDocxProceduresSeeder extends Seeder
{
    public function run(): void
    {
        Procedure::withoutSyncingToSearch(function () {
            $this->call([
                NeurosurgeryOutpatientConsultationSeeder::class,
                EmergencyNeurosurgicalCareSeeder::class,
                CraniotomyforBrainTumorsSeeder::class,
                DecompressiveCraniectomySeeder::class,
                EvacuationofIntracranialHematomaSeeder::class,
                BurrHoleSurgerySeeder::class,
                VentriculoperitonealVPShuntSurgerySeeder::class,
                EndoscopicThirdVentriculostomyETVSeeder::class,
                SurgeryforHydrocephalusSeeder::class,
                MicroscopicBrainTumorExcisionSeeder::class,
                SkullBaseSurgerySeeder::class,
                TranssphenoidalSurgeryforPituitaryTumorsSeeder::class,
                SpineDecompressionSurgerySeeder::class,
                MicrodiscectomySeeder::class,
                LaminectomySeeder::class,
                LaminoplastySeeder::class,
                SpinalFusionSurgerySeeder::class,
                InstrumentationandFixationofSpineSeeder::class,
                SurgeryforSpinalTumorsSeeder::class,
                SurgeryforSpinalInfectionsSeeder::class,
                SurgeryforTuberculosisofSpineSeeder::class,
                VertebroplastySeeder::class,
                KyphoplastySeeder::class,
                CraniovertebralJunctionStabilizationSeeder::class,
                SurgeryforChiariMalformationSeeder::class,
                SyringomyeliaDecompressionSurgerySeeder::class,
                RepairofNeuralTubeDefectsSeeder::class,
                PeripheralNerveRepairSurgerySeeder::class,
                BrachialPlexusSurgerySeeder::class,
                CarpalTunnelReleaseSurgerySeeder::class,
                UlnarNerveDecompressionSeeder::class,
                TrigeminalNeuralgiaSurgerySeeder::class,
                MicrovascularDecompressionSeeder::class,
                AneurysmClippingSurgerySeeder::class,
                AVMSurgerySeeder::class,
                CSFLeakRepairSeeder::class,
                BrainAbscessDrainageSeeder::class,
                SpinalAbscessDrainageSeeder::class,
                ManagementofNeurosurgicalTraumaSeeder::class,
                NeurocriticalCareManagementSeeder::class,
                PostOperativeNeurosurgicalICUCareSeeder::class,
                ImageGuidedNeurosurgerySeeder::class,
            ]);
        });
    }
}
