<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;

class VascularSurgeryDocxConditionsSeeder extends Seeder
{
    public function run(): void
    {
        Condition::withoutSyncingToSearch(function () {
            $this->call([
                PeripheralArterialDiseasePADLowerLimbIschemiaConditionSeeder::class,
                CarotidArteryStenosisConditionSeeder::class,
                AbdominalAorticAneurysmAAAConditionSeeder::class,
                ThoracicAorticAneurysmDissectionConditionSeeder::class,
                AortoiliacOcclusiveDiseaseConditionSeeder::class,
                RenalArteryStenosisConditionSeeder::class,
                UpperLimbIschemiaSubclavianArteryDiseaseConditionSeeder::class,
                VaricoseVeinsChronicVenousInsufficiencyConditionSeeder::class,
                DeepVeinThrombosisDVTConditionSeeder::class,
                PulmonaryEmbolismPEsecondarytoDVTConditionSeeder::class,
                ChronicVenousUlcersConditionSeeder::class,
                LymphedemaPrimarySecondaryConditionSeeder::class,
                TraumaRelatedVascularInjuriesConditionSeeder::class,
                ArteriovenousFistulaGraftComplicationsConditionSeeder::class,
                BuergersDiseaseThromboangiitisObliteransConditionSeeder::class,
                VasculitisAffectingPeripheralVesselsConditionSeeder::class,
                PoplitealArteryEntrapmentSyndromeConditionSeeder::class,
                AcuteLimbIschemiaConditionSeeder::class,
                ThoracicOutletSyndromeConditionSeeder::class,
                MesentericIschemiaAcuteChronicConditionSeeder::class,
                PeripheralAneurysmsFemoralPoplitealVisceralConditionSeeder::class,
                VascularGraftInfectionsConditionSeeder::class,
                CarotidArteryDissectionConditionSeeder::class,
                RaynaudsPhenomenonrequiringsurgicalinterventionConditionSeeder::class,
                ComplexWoundsRequiringVascularInterventionConditionSeeder::class,
            ]);
        });
    }
}
