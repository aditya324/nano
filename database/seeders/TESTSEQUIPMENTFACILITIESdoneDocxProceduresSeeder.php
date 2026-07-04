<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;

class TESTSEQUIPMENTFACILITIESdoneDocxProceduresSeeder extends Seeder
{
    public function run(): void
    {
        Procedure::withoutSyncingToSearch(function () {
            $this->call([
                DuplexUltrasoundColorDopplerSeeder::class,
                CTAngiographyMRAngiographySeeder::class,
                EndovascularStentGraftsCathetersSeeder::class,
                VascularSurgicalInstrumentsSeeder::class,
                AnkleBrachialIndexABIDevicesSeeder::class,
                PeripheralAngioplastyEquipmentSeeder::class,
                BloodFlowMonitoringSystemsSeeder::class,
                CompressionTherapyEquipmentSeeder::class,
                SutureGraftMaterialsSeeder::class,
                PostoperativeVascularCareDevicesSeeder::class,
            ]);
        });
    }
}
