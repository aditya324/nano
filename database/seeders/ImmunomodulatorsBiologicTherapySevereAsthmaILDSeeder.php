<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ImmunomodulatorsBiologicTherapySevereAsthmaILDSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Immunomodulators / Biologic Therapy (Severe Asthma, ILD)')],
            [
                'title' => 'Immunomodulators / Biologic Therapy (Severe Asthma, ILD)',
                'slug' => Str::slug('Immunomodulators / Biologic Therapy (Severe Asthma, ILD)'),
                'introduction' => 'Immunomodulators and biologic therapy are advanced respiratory treatment procedures used to manage severe asthma, interstitial lung disease (ILD), and other chronic inflammatory or immune-mediated lung conditions. These therapies work by targeting specific immune system pathways involved in inflammation, allergic responses, and lung tissue damage. They help reduce disease progression, improve breathing function, decrease exacerbations, and enhance overall respiratory health in patients who do not respond adequately to conventional treatment.',
                'what_is' => 'Biologic therapies are specialized medications developed to block specific inflammatory proteins, immune cells, or signaling pathways responsible for chronic airway and lung inflammation. Immunomodulators help regulate immune system activity to reduce lung damage and inflammatory complications in selected respiratory disorders. These therapies are commonly used in severe eosinophilic asthma, allergic asthma, autoimmune-related ILD, pulmonary fibrosis, and other advanced respiratory conditions requiring targeted treatment. Treatment is usually administered through injections, infusions, or long-term oral medications under close supervision by pulmonologists, immunologists, or respiratory specialists.',
                'symptoms' => [
            ['value' => 'Severe shortness of breath or uncontrolled asthma symptoms'],
            ['value' => 'Frequent asthma attacks or worsening respiratory flare-ups'],
            ['value' => 'Persistent cough or chronic lung inflammation'],
            ['value' => 'Reduced exercise tolerance or progressive breathing difficulty'],
            ['value' => 'Poor response to standard inhalers or conventional respiratory therapy'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Allergic or infusion-related reactions during biologic therapy'],
            ['value' => 'Increased susceptibility to infections due to immune suppression'],
            ['value' => 'Injection site pain, swelling, or irritation'],
            ['value' => 'Liver, kidney, or blood-related side effects with certain immunomodulators'],
            ['value' => 'Requirement for long-term monitoring and regular specialist follow-up'],
            ['value' => 'Treatment Options'],
            ['value' => 'Immunomodulators and biologic therapies focus on controlling chronic inflammation, reducing immune-mediated lung damage, improving breathing function, and preventing severe respiratory exacerbations. Treatment may include monoclonal antibody therapy, corticosteroid-sparing medications, immunosuppressive therapy, inhaler support, pulmonary rehabilitation, oxygen therapy, breathing exercises, and supportive respiratory care. Patients may also benefit from smoking cessation, vaccination, nutritional support, allergy management, lifestyle modification, and long-term pulmonology follow-up to optimize treatment outcomes and preserve lung function.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular monitoring of respiratory symptoms and lung function'],
            ['value' => 'Observation for allergic reactions or medication-related side effects'],
            ['value' => 'Routine laboratory tests and immune function assessment when required'],
            ['value' => 'Adjustment of therapy based on disease progression and treatment response'],
            ['value' => 'Long-term pulmonology follow-up and respiratory rehabilitation support'],
        ],
                'surgery_risks' => [
            ['value' => 'Allergic or infusion-related reactions during biologic therapy'],
            ['value' => 'Increased susceptibility to infections due to immune suppression'],
            ['value' => 'Injection site pain, swelling, or irritation'],
            ['value' => 'Liver, kidney, or blood-related side effects with certain immunomodulators'],
            ['value' => 'Requirement for long-term monitoring and regular specialist follow-up'],
            ['value' => 'Treatment Options'],
            ['value' => 'Immunomodulators and biologic therapies focus on controlling chronic inflammation, reducing immune-mediated lung damage, improving breathing function, and preventing severe respiratory exacerbations. Treatment may include monoclonal antibody therapy, corticosteroid-sparing medications, immunosuppressive therapy, inhaler support, pulmonary rehabilitation, oxygen therapy, breathing exercises, and supportive respiratory care. Patients may also benefit from smoking cessation, vaccination, nutritional support, allergy management, lifestyle modification, and long-term pulmonology follow-up to optimize treatment outcomes and preserve lung function.'],
        ],
                'long_term_outlook' => 'The long-term outlook following immunomodulator or biologic therapy depends on the severity of the underlying lung disease, response to treatment, overall immune status, and adherence to long-term respiratory care. Early intervention, consistent treatment, pulmonary rehabilitation, healthy lifestyle habits, infection prevention, and regular specialist follow-up significantly help improve symptom control, reduce disease progression, prevent exacerbations, preserve lung function, and enhance overall quality of life.',
                'conclusion' => '',
                'seo_title' => 'Immunomodulators / Biologic Therapy (Severe Asthma, ILD)',
                'seo_description' => 'Immunomodulators and biologic therapy are advanced respiratory treatment procedures used to manage severe asthma, interstitial lung disease (ILD), and other chronic inflammatory or immune-mediated lung conditions. These therapies work by targeting specific immune system pathways involved in inflammation, allergic responses, and lung tissue damage. They help reduce disease progression, improve breathing function, decrease exacerbations, and enhance overall respiratory health in patients who do not respond adequately to conventional treatment.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
