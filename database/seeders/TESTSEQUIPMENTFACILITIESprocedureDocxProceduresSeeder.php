<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;

class TESTSEQUIPMENTFACILITIESprocedureDocxProceduresSeeder extends Seeder
{
    public function run(): void
    {
        Procedure::withoutSyncingToSearch(function () {
            $this->call([
                SurgicalInstrumentsforJawToothExtractionSeeder::class,
            ]);
        });
    }
}
