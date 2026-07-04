<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;

class sdsdsDocxProceduresSeeder extends Seeder
{
    public function run(): void
    {
        Procedure::withoutSyncingToSearch(function () {
            $this->call([
                DermatoscopesWoodsLampSeeder::class,
                CryotherapyEquipmentSeeder::class,
                LaserTherapyDevicesHairPigmentationVascularLesionsSeeder::class,
                PhototherapyUnitsUVBPUVASeeder::class,
                SkinBiopsyInstrumentsSeeder::class,
                ElectrocauteryRadiofrequencyDevicesSeeder::class,
                CosmeticDermatologyEquipmentFillersBotoxSeeder::class,
                SkinGraftingToolsSeeder::class,
                WoundCareDressingSuppliesSeeder::class,
                TeleDermatologySetupSeeder::class,
            ]);
        });
    }
}
