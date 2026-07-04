<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;

class TESTSEQUIPMENTFACILITIESdiabeticfootproceduredoneDocxProceduresSeeder extends Seeder
{
    public function run(): void
    {
        Procedure::withoutSyncingToSearch(function () {
            $this->call([
                DopplerUltrasoundforPeripheralCirculationSeeder::class,
                WoundDebridementInstrumentsSeeder::class,
                NegativePressureWoundTherapyVACSeeder::class,
                DressingBandagingSuppliesSeeder::class,
                OffloadingDevicesCustomFootwearSeeder::class,
                InfectionControlSterilizationEquipmentSeeder::class,
                ImagingforFootXrayMRISeeder::class,
                BloodGlucoseHbA1cTestingSeeder::class,
                PeripheralNeuropathyTestingMonofilamentBiothesiometerSeeder::class,
                HyperbaricOxygenTherapyFacilitySeeder::class,
            ]);
        });
    }
}
