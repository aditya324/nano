<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;

class GastroenterologyDocxConditionsSeeder extends Seeder
{
    public function run(): void
    {
        Condition::withoutSyncingToSearch(function () {
            $this->call([
                GastroesophagealRefluxDiseaseGERDConditionSeeder::class,
                PepticUlcerDiseaseGastricDuodenalConditionSeeder::class,
                GastritisDuodenitisConditionSeeder::class,
                DyspepsiaFunctionalOrganicConditionSeeder::class,
                GastrointestinalBleedUpperLowerConditionSeeder::class,
                EsophagealVaricesConditionSeeder::class,
                EsophagealStricturesMotilityDisordersConditionSeeder::class,
                BarrettsEsophagusConditionSeeder::class,
                InflammatoryBowelDiseaseCrohnsDiseaseUlcerativeColitisConditionSeeder::class,
                IrritableBowelSyndromeIBSConditionSeeder::class,
                ConstipationChronicDiarrheaConditionSeeder::class,
                InfectiveGastroenteritisConditionSeeder::class,
                MalabsorptionSyndromesCeliacDiseaseTropicalSprueConditionSeeder::class,
                PancreatitisAcuteChronicConditionSeeder::class,
                PancreaticPseudocystConditionSeeder::class,
                HepatitisViralAutoimmuneDrugInducedConditionSeeder::class,
                CirrhosisandComplicationsAscitesHepaticEncephalopathyConditionSeeder::class,
                NonAlcoholicFattyLiverDiseaseNAFLDNASHConditionSeeder::class,
                GallstonesCholelithiasisConditionSeeder::class,
                CholedocholithiasisBiliaryObstructionConditionSeeder::class,
                PrimarySclerosingCholangitisBiliaryStricturesConditionSeeder::class,
                LiverTumorsHepatocellularCarcinomaBenignTumorsConditionSeeder::class,
                GastrointestinalMalignanciesEsophagusStomachColonRectumLiverPancreasConditionSeeder::class,
                DiverticulosisDiverticulitisConditionSeeder::class,
                AnalFissureFistulaHemorrhoidsConditionSeeder::class,
                CdifficileColitisOtherInfectiveColitidesConditionSeeder::class,
                GastrointestinalMotilityDisordersGastroparesisChronicIntestinalPseudoObstructionConditionSeeder::class,
                PortalHypertensionConditionSeeder::class,
                JaundiceCholestaticDisordersConditionSeeder::class,
                GastrointestinalPolypsAdenomasConditionSeeder::class,
            ]);
        });
    }
}
