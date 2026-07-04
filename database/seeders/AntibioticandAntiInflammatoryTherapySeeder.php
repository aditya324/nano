<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AntibioticandAntiInflammatoryTherapySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Antibiotic and Anti-Inflammatory Therapy')],
            [
                'title' => 'Antibiotic and Anti-Inflammatory Therapy',
                'slug' => Str::slug('Antibiotic and Anti-Inflammatory Therapy'),
                'introduction' => 'Antibiotic and anti-inflammatory therapy is a medical treatment used in ENT disorders to control infections, reduce swelling, relieve pain, and promote healing. The therapy is commonly used for ear infections, sinusitis, tonsillitis, throat infections, and inflammatory ENT conditions. Proper treatment helps prevent progression of disease and complications.',
                'what_is' => 'The treatment plan depends on the type of infection and severity of inflammation. Antibiotics target bacterial infections, while anti-inflammatory medications reduce tissue swelling, pain, redness, and irritation. Therapy may include: Oral medications Injectable antibiotics Nasal sprays Ear drops Gargles or topical medications ENT specialists carefully select medications based on patient age, allergy history, infection type, and associated medical conditions.',
                'symptoms' => [
            ['value' => 'Fever and infection symptoms'],
            ['value' => 'Ear or throat pain'],
            ['value' => 'Swelling and redness'],
            ['value' => 'Nasal congestion'],
            ['value' => 'Difficulty swallowing'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Allergic drug reactions'],
            ['value' => 'Antibiotic resistance'],
            ['value' => 'Stomach irritation'],
            ['value' => 'Medication side effects'],
            ['value' => 'Incomplete infection control if treatment is interrupted'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Take medications exactly as prescribed'],
            ['value' => 'Complete the entire antibiotic course'],
            ['value' => 'Maintain adequate hydration'],
            ['value' => 'Avoid self-medication without medical advice'],
            ['value' => 'Report allergic symptoms immediately'],
        ],
                'surgery_risks' => [
            ['value' => 'Allergic drug reactions'],
            ['value' => 'Antibiotic resistance'],
            ['value' => 'Stomach irritation'],
            ['value' => 'Medication side effects'],
            ['value' => 'Incomplete infection control if treatment is interrupted'],
        ],
                'long_term_outlook' => 'Appropriate antibiotic and anti-inflammatory therapy effectively controls ENT infections and reduces recurrence or long-term complications when used properly.',
                'conclusion' => '',
                'seo_title' => 'Antibiotic and Anti-Inflammatory Therapy',
                'seo_description' => 'Antibiotic and anti-inflammatory therapy is a medical treatment used in ENT disorders to control infections, reduce swelling, relieve pain, and promote healing. The therapy is commonly used for ear infections, sinusitis, tonsillitis, throat infections, and inflammatory ENT conditions. Proper treatment helps prevent progression of disease and complications.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
