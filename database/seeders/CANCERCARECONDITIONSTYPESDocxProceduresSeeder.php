<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;

class CANCERCARECONDITIONSTYPESDocxProceduresSeeder extends Seeder
{
    public function run(): void
    {
        Procedure::withoutSyncingToSearch(function () {
            $this->call([
                BreastCancerSeeder::class,
                LungCancerSeeder::class,
                ColorectalCancerSeeder::class,
                GastricCancerSeeder::class,
                EsophagealCancerSeeder::class,
                LiverCancerHepatocellularCarcinomaSeeder::class,
                PancreaticCancerSeeder::class,
                HeadandNeckCancersOralLaryngealPharyngealSeeder::class,
                ThyroidCancerSeeder::class,
                ProstateCancerSeeder::class,
                CervicalCancerSeeder::class,
                OvarianCancerSeeder::class,
                EndometrialUterineCancerEndometrialUterineCancerSeeder::class,
                TesticularCancerSeeder::class,
                SkinCancerMelanomaNonMelanomaSeeder::class,
                HematologicMalignanciesLeukemiaLymphomaMyelomaSeeder::class,
                SarcomasBoneandSoftTissueSeeder::class,
                BrainTumorsPrimarySecondarySeeder::class,
                PediatricCancersLeukemiaNeuroblastomaWilmsTumorSeeder::class,
                PediatricCancersLeukemiaNeuroblastomaWilmsTumorSeeder::class,
                PediatricCancersLeukemiaNeuroblastomaWilmsTumorSeeder::class,
                MetastaticAdvancedStageCancersSeeder::class,
                RareCancersAdrenalNeuroendocrineTumorsSeeder::class,
                RareCancersAdrenalNeuroendocrineTumorsSeeder::class,
                CancerRelatedComplicationsMalignantEffusionsPainCachexiaSeeder::class,
                PreCancerousConditionsCervicalDysplasiaPolypsBarrettsEsophagusSeeder::class,
                MultiplePrimaryMalignanciesSeeder::class,
                TreatmentRelatedComplicationsNeutropeniaMucositisLymphedemaSeeder::class,
            ]);
        });
    }
}
