<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;

class RheumatologytreatmentsmanagementOptionsDocxConditionsSeeder extends Seeder
{
    public function run(): void
    {
        Condition::withoutSyncingToSearch(function () {
            $this->call([
                LIST2RHEUMATOLOGYTREATMENTSMANAGEMENTOPTIONSConditionSeeder::class,
            ]);
        });
    }
}
