<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;

class fgfgfgfgprocedureDocxProceduresSeeder extends Seeder
{
    public function run(): void
    {
        Procedure::withoutSyncingToSearch(function () {
            $this->call([
                ECGEchocardiographySeeder::class,
                XRayUltrasoundSeeder::class,
                BloodPressureMonitorsCentralMonitoringSeeder::class,
                LaboratoryTestingRFTLFTCBCElectrolytesSeeder::class,
                DiabetesLipidProfilingEquipmentSeeder::class,
                OxygenTherapyDevicesSeeder::class,
                PortableUltrasoundSeeder::class,
                PointofCareTestingDevicesSeeder::class,
                TelemedicineSetupSeeder::class,
            ]);
        });
    }
}
