<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;

class neurosurgeryDocxProceduresSeeder extends Seeder
{
    public function run(): void
    {
        Procedure::withoutSyncingToSearch(function () {
            $this->call([
                AdvancedNeuroOTwithLaminarFlowSeeder::class,
                OperatingMicroscopeSeeder::class,
                NeuronavigationSystemSeeder::class,
                HighResolutionMRICTSeeder::class,
                CArmforSpineSurgerySeeder::class,
                NeuroEndoscopyEquipmentSeeder::class,
                SpineSurgeryInstrumentSetsSeeder::class,
                CranialFixationDrillSystemsSeeder::class,
                ICUwithNeuroMonitoringSeeder::class,
                IntraoperativeNeuromonitoringIONMSeeder::class,
                VentricularDrainageICPMonitoringSeeder::class,
                StereotacticBiopsyEquipmentSeeder::class,
                TraumaNeurosurgeryEmergencySetupSeeder::class,
                PostOperativeNeuroRehabilitationAccessSeeder::class,
                TeleNeurosurgeryConsultationFacilitySeeder::class,
            ]);
        });
    }
}
