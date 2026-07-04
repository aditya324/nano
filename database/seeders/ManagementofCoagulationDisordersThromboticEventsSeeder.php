<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ManagementofCoagulationDisordersThromboticEventsSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Management of Coagulation Disorders & Thrombotic Events')],
            [
                'title' => 'Management of Coagulation Disorders & Thrombotic Events',
                'slug' => Str::slug('Management of Coagulation Disorders & Thrombotic Events'),
                'introduction' => 'Management of coagulation disorders and thrombotic events involves the diagnosis, treatment, monitoring, and prevention of abnormal blood clotting or bleeding conditions. These medical services help maintain healthy blood circulation, prevent dangerous clot formation, reduce bleeding complications, and support long-term cardiovascular and hematologic health.',
                'what_is' => 'Coagulation disorder management is commonly used for conditions such as deep vein thrombosis (DVT), pulmonary embolism (PE), hemophilia, thrombophilia, atrial fibrillation-related clotting risk, and other bleeding or clotting abnormalities. Treatment approaches may include anticoagulants, antiplatelet medications, clotting factor replacement therapy, blood transfusion support, compression therapy, and continuous laboratory monitoring. Early diagnosis and individualized treatment are important to reduce life-threatening complications.',
                'symptoms' => [
            ['value' => 'Unusual bleeding or easy bruising'],
            ['value' => 'Swelling, pain, or redness in the limbs due to blood clots'],
            ['value' => 'Shortness of breath or chest pain related to pulmonary embolism'],
            ['value' => 'Prolonged bleeding after injury or surgery'],
            ['value' => 'Fatigue, weakness, or circulation-related symptoms'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Stroke and cardiovascular complications'],
            ['value' => 'Pulmonary embolism and respiratory distress'],
            ['value' => 'Severe bleeding and hemorrhagic complications'],
            ['value' => 'Recurrent blood clot formation'],
            ['value' => 'Long-term circulatory and organ-related complications'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular coagulation profile and blood monitoring'],
            ['value' => 'Medication adherence and dose adjustment when required'],
            ['value' => 'Monitoring for bleeding, bruising, or clot-related symptoms'],
            ['value' => 'Lifestyle counseling and preventive care guidance'],
            ['value' => 'Long-term follow-up with hematology and internal medicine specialists'],
        ],
                'surgery_risks' => [
            ['value' => 'Stroke and cardiovascular complications'],
            ['value' => 'Pulmonary embolism and respiratory distress'],
            ['value' => 'Severe bleeding and hemorrhagic complications'],
            ['value' => 'Recurrent blood clot formation'],
            ['value' => 'Long-term circulatory and organ-related complications'],
        ],
                'long_term_outlook' => 'The long-term outlook for coagulation disorders and thrombotic events depends on the underlying condition, severity, and response to treatment. Early diagnosis, proper medication management, continuous monitoring, and preventive care can significantly reduce the risk of life-threatening complications and improve quality of life. Ongoing specialist care and treatment adherence are essential for maintaining long-term circulatory and overall health.',
                'conclusion' => '',
                'seo_title' => 'Management of Coagulation Disorders & Thrombotic Events',
                'seo_description' => 'Management of coagulation disorders and thrombotic events involves the diagnosis, treatment, monitoring, and prevention of abnormal blood clotting or bleeding conditions. These medical services help maintain healthy blood circulation, prevent dangerous clot formation, reduce bleeding complications, and support long-term cardiovascular and hematologic health.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
