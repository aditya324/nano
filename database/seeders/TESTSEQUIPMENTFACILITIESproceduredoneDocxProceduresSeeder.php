<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;

class TESTSEQUIPMENTFACILITIESproceduredoneDocxProceduresSeeder extends Seeder
{
    public function run(): void
    {
        Procedure::withoutSyncingToSearch(function () {
            $this->call([
                ECG2DEchocardiographyStressEchoSeeder::class,
                TreadmillTestTMTExerciseECGSeeder::class,
                HolterMonitoringEventRecorderSeeder::class,
                AmbulatoryBloodPressureMonitoringSeeder::class,
                CardiacCTCoronaryAngiographySeeder::class,
                CardiacMRISeeder::class,
                ElectrophysiologyLabAblationEquipmentSeeder::class,
                CathLabDiagnosticInterventionalSeeder::class,
                PacemakerICDImplantationFacilitySeeder::class,
                DefibrillatorsExternalCardioverterSeeder::class,
            ]);
        });
    }
}
