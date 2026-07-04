<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;

class TESTSEQUIPMENTFACILITIESGeneralSurgeryproceduredoneDocxProceduresSeeder extends Seeder
{
    public function run(): void
    {
        Procedure::withoutSyncingToSearch(function () {
            $this->call([
                LaparoscopicMinimallyInvasiveSurgeryTowersSeeder::class,
                ElectrosurgicalUnitsSeeder::class,
                EndoscopyColonoscopyEquipmentSeeder::class,
                SurgicalInstrumentsSterilizationUnitsSeeder::class,
                OTVentilationLaminarFlowSystemSeeder::class,
                HerniaAppendectomyGallbladderSurgeryInstrumentsSeeder::class,
                ImagingforSurgeryCArmUltrasoundSeeder::class,
                DiathermySuctionEquipmentSeeder::class,
                PatientMonitoringSystemsSeeder::class,
                SurgicalSuturesStaplersMeshSeeder::class,
            ]);
        });
    }
}
