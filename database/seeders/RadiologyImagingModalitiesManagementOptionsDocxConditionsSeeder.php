<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;

class RadiologyImagingModalitiesmanagementOptionsDocxConditionsSeeder extends Seeder
{
    public function run(): void
    {
        Condition::withoutSyncingToSearch(function () {
            $this->call([
                XrayImagingConditionSeeder::class,
                UltrasoundImagingConditionSeeder::class,
                ComputedTomographyCTScanConditionSeeder::class,
                MagneticResonanceImagingMRIConditionSeeder::class,
                MammographyConditionSeeder::class,
                DopplerUltrasoundConditionSeeder::class,
                InterventionalRadiologyProceduresConditionSeeder::class,
                CTAngiographyMRAngiographyConditionSeeder::class,
                FluoroscopyContrastStudiesConditionSeeder::class,
                NuclearMedicinePETCTImagingConditionSeeder::class,
                BoneDensitometryDEXAScanConditionSeeder::class,
                Echocardiography2D3DStressEchoEchocardiography2D3DStressEchoConditionSeeder::class,
                EchocardiographyConditionSeeder::class,
                CardiacCTCoronaryAngiographyConditionSeeder::class,
                GuidedMinimallyInvasiveProceduresConditionSeeder::class,
                ContrastEnhancedImagingConditionSeeder::class,
                PediatricImagingProtocolsConditionSeeder::class,
                TraumaImagingProtocolsConditionSeeder::class,
                FollowUpMonitoringImaginginOncologyConditionSeeder::class,
                ScreeningProgramsConditionSeeder::class,
                ImageGuidedPainManagementConditionSeeder::class,
                InterdisciplinaryRadiologyConsultationsConditionSeeder::class,
                TeleRadiologyRemoteReportingServicesConditionSeeder::class,
                RadiologySafetyRadiationDoseMonitoringConditionSeeder::class,
                PreoperativePlanningPostoperativeAssessmentConditionSeeder::class,
                ReportingDocumentationforNABHInsuranceComplianceConditionSeeder::class,
            ]);
        });
    }
}
