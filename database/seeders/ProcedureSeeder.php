<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;

class ProcedureSeeder extends Seeder
{
    public function run(): void
    {
        $procedures = require database_path(
            'seeders/data/procedures.php'
        );

        foreach ($procedures as $procedure) {

            Procedure::updateOrCreate(
                [
                    'slug' => $procedure['slug']
                ],
                $procedure
            );
        }
    }
}