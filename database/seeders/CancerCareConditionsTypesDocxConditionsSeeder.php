<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;

class CancerCareConditionsTypesDocxConditionsSeeder extends Seeder
{
    public function run(): void
    {
        Condition::withoutSyncingToSearch(function () {
            $this->call([
                MetastaticAdvancedStageCancersConditionSeeder::class,
            ]);
        });
    }
}
