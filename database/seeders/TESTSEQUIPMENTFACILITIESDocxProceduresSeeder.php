<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;

class TESTSEQUIPMENTFACILITIESDocxProceduresSeeder extends Seeder
{
    public function run(): void
    {
        Procedure::withoutSyncingToSearch(function () {
            $this->call([
                LIST3TESTSEQUIPMENTFACILITIESSeeder::class,
            ]);
        });
    }
}
