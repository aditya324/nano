<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CSSDSupportforENTInstrumentsSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('CSSD Support for ENT Instruments')],
            [
                'title' => 'CSSD Support for ENT Instruments',
                'slug' => Str::slug('CSSD Support for ENT Instruments'),
                'introduction' => 'CSSD (Central Sterile Services Department) support for ENT instruments ensures proper cleaning, sterilization, storage, and maintenance of specialized ENT surgical and diagnostic instruments. The service helps maintain instrument safety, functionality, and infection prevention standards. Proper sterilization is critical for safe ENT surgical care.',
                'what_is' => 'CSSD support includes: Instrument cleaning and decontamination Sterilization cycles Packing and storage Instrument tracking systems Maintenance and quality checks Sterility assurance monitoring ENT instruments requiring specialized sterilization include: Endoscopes Microsurgical tools Suction instruments Airway equipment Ear surgery instruments Standardized sterilization protocols improve surgical safety and reduce infection risks.',
                'symptoms' => [
            ['value' => 'Surgical site infection signs'],
            ['value' => 'Fever after procedures'],
            ['value' => 'Delayed healing'],
            ['value' => 'Persistent discharge'],
            ['value' => 'Instrument-related contamination concerns'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Cross-contamination'],
            ['value' => 'Instrument damage during sterilization'],
            ['value' => 'Incomplete sterilization failure'],
            ['value' => 'Infection transmission'],
            ['value' => 'Equipment malfunction from improper maintenance'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Follow postoperative hygiene instructions carefully'],
            ['value' => 'Attend wound review appointments regularly'],
            ['value' => 'Monitor for infection symptoms'],
            ['value' => 'Continue medications as prescribed'],
            ['value' => 'Report unusual postoperative symptoms promptly'],
        ],
                'surgery_risks' => [
            ['value' => 'Cross-contamination'],
            ['value' => 'Instrument damage during sterilization'],
            ['value' => 'Incomplete sterilization failure'],
            ['value' => 'Infection transmission'],
            ['value' => 'Equipment malfunction from improper maintenance'],
        ],
                'long_term_outlook' => 'Effective CSSD support improves surgical safety, reduces infection rates, and enhances long-term reliability of ENT procedures and patient care.',
                'conclusion' => '',
                'seo_title' => 'CSSD Support for ENT Instruments',
                'seo_description' => 'CSSD (Central Sterile Services Department) support for ENT instruments ensures proper cleaning, sterilization, storage, and maintenance of specialized ENT surgical and diagnostic instruments. The service helps maintain instrument safety, functionality, and infection prevention standards. Proper sterilization is critical for safe ENT surgical care.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
