<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BloodTransfusionSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Blood Transfusion')],
            [
                'title' => 'Blood Transfusion',
                'slug' => Str::slug('Blood Transfusion'),
                'introduction' => 'A blood transfusion is a medical procedure in which donated blood or specific blood components are transferred into a patient’s bloodstream through an intravenous (IV) line. Blood transfusions help restore blood volume, improve oxygen delivery, and treat conditions affecting blood cells or blood loss.',
                'what_is' => 'Blood transfusions are commonly performed in hospitals, emergency departments, surgical units, and critical care settings. Patients may receive whole blood or specific blood components such as red blood cells, plasma, platelets, or clotting factors depending on their medical condition. Blood transfusions are used in cases of severe anemia, surgery, trauma, bleeding disorders, cancer treatment, or other conditions causing blood loss or abnormal blood cell levels.',
                'symptoms' => [
            ['value' => 'Severe anemia or low hemoglobin levels'],
            ['value' => 'Excessive blood loss due to injury or surgery'],
            ['value' => 'Fatigue, weakness, or shortness of breath'],
            ['value' => 'Bleeding disorders or clotting abnormalities'],
            ['value' => 'Low platelet count or blood cell deficiencies'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Allergic reactions'],
            ['value' => 'Alloimmunization or immune response to donor blood'],
            ['value' => 'Fever or transfusion-related reactions'],
            ['value' => 'Rare blood-borne infections'],
            ['value' => 'Post-transfusion purpura and clotting complications'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Monitoring vital signs and transfusion response'],
            ['value' => 'Observation for allergic or transfusion-related reactions'],
            ['value' => 'Follow-up blood tests to assess blood cell levels'],
            ['value' => 'Hydration and supportive medical care'],
            ['value' => 'Continued monitoring and treatment of the underlying condition'],
        ],
                'surgery_risks' => [
            ['value' => 'Allergic reactions'],
            ['value' => 'Alloimmunization or immune response to donor blood'],
            ['value' => 'Fever or transfusion-related reactions'],
            ['value' => 'Rare blood-borne infections'],
            ['value' => 'Post-transfusion purpura and clotting complications'],
        ],
                'long_term_outlook' => 'The long-term outlook after a blood transfusion depends on the underlying medical condition and the patient’s overall health. Blood transfusions can significantly improve oxygen delivery, blood counts, and recovery in individuals with severe anemia, blood loss, or blood disorders. Proper monitoring, safe transfusion practices, and ongoing medical care are important for reducing complications and supporting long-term health.',
                'conclusion' => '',
                'seo_title' => 'Blood Transfusion',
                'seo_description' => 'A blood transfusion is a medical procedure in which donated blood or specific blood components are transferred into a patient’s bloodstream through an intravenous (IV) line. Blood transfusions help restore blood volume, improve oxygen delivery, and treat conditions affecting blood cells or blood loss.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
