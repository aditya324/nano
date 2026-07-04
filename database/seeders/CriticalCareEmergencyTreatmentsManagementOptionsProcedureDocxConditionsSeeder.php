<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;

class CriticalCareEmergencyTreatmentsManagementOptionsProcedureDocxConditionsSeeder extends Seeder
{
    public function run(): void
    {
        Condition::withoutSyncingToSearch(function () {
            $this->call([
                EmergencyBloodTransfusionMassiveTransfusionProtocolsEmergencyBloodTransfusionMassiveTransfusionProtocolsConditionSeeder::class,
            ]);
        });
    }
}
