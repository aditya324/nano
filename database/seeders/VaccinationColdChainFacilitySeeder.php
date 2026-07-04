<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class VaccinationColdChainFacilitySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Vaccination & Cold Chain Facility')],
            [
                'title' => 'Vaccination & Cold Chain Facility',
                'slug' => Str::slug('Vaccination & Cold Chain Facility'),
                'introduction' => 'Vaccination and cold chain facilities are specialized systems used to safely store, transport, and administer vaccines for children while maintaining their effectiveness.',
                'what_is' => 'Vaccines protect children from life-threatening infectious diseases such as measles, polio, hepatitis, diphtheria, tetanus, and tuberculosis. Cold chain systems maintain vaccines at recommended temperatures using refrigerators, freezers, cold boxes, and temperature monitoring equipment to ensure vaccine potency.',
                'symptoms' => [
            ['value' => 'Requirement for routine childhood immunization'],
            ['value' => 'Exposure risk to infectious diseases'],
            ['value' => 'Need for booster vaccine doses'],
            ['value' => 'Outbreak prevention and public health protection'],
            ['value' => 'Travel or school vaccination requirements'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Vaccine spoilage if cold chain fails'],
            ['value' => 'Mild fever or injection site pain after vaccination'],
            ['value' => 'Rare allergic reactions to vaccines'],
            ['value' => 'Increased infection risk without immunization'],
            ['value' => 'Missed vaccinations causing incomplete protection'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Follow national immunization schedules properly'],
            ['value' => 'Monitor children for fever or allergic reactions'],
            ['value' => 'Maintain accurate vaccination records'],
            ['value' => 'Ensure vaccines are stored at correct temperatures'],
            ['value' => 'Attend booster dose appointments on time'],
        ],
                'surgery_risks' => [
            ['value' => 'Vaccine spoilage if cold chain fails'],
            ['value' => 'Mild fever or injection site pain after vaccination'],
            ['value' => 'Rare allergic reactions to vaccines'],
            ['value' => 'Increased infection risk without immunization'],
            ['value' => 'Missed vaccinations causing incomplete protection'],
        ],
                'long_term_outlook' => 'Vaccination programs significantly reduce childhood illness, disability, hospitalization, and mortality while improving overall public health.',
                'conclusion' => '',
                'seo_title' => 'Vaccination & Cold Chain Facility',
                'seo_description' => 'Vaccination and cold chain facilities are specialized systems used to safely store, transport, and administer vaccines for children while maintaining their effectiveness.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
