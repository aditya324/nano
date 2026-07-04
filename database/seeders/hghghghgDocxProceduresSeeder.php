<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;

class hghghghgDocxProceduresSeeder extends Seeder
{
    public function run(): void
    {
        Procedure::withoutSyncingToSearch(function () {
            $this->call([
                EEGVideoEEGSeeder::class,
                EMGNerveConductionStudyNCSSeeder::class,
                MRIBrainSpineSeeder::class,
                CTBrainSeeder::class,
                NeurophysiologyLabSeeder::class,
                CognitiveNeuropsychologicalTestingToolsSeeder::class,
                BiofeedbackNeurostimulationDevicesSeeder::class,
                TelepsychiatryConsultationFacilitiesSeeder::class,
                EEGCapsAmplifiersRecordingSystemsSeeder::class,
                PsychiatricCounselingTherapyRoomsSeeder::class,
            ]);
        });
    }
}
