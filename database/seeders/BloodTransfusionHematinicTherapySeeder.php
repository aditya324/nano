<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BloodTransfusionHematinicTherapySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Blood Transfusion / Hematinic Therapy')],
            [
                'title' => 'Blood Transfusion / Hematinic Therapy',
                'slug' => Str::slug('Blood Transfusion / Hematinic Therapy'),
                'introduction' => 'Blood transfusion and hematinic therapy are specialized medical treatment procedures used to restore healthy blood levels, improve oxygen delivery, correct nutritional deficiencies, and support recovery in patients with anemia, blood loss, bleeding disorders, or hematologic conditions. These therapies help maintain proper circulation, improve energy levels, support organ function, and prevent complications related to low blood counts or nutritional deficiencies affecting blood formation.',
                'what_is' => 'Blood transfusion involves the administration of blood or blood components such as red blood cells, platelets, plasma, or clotting factors through intravenous infusion to replace lost or deficient blood components. Hematinic therapy includes the use of iron, vitamin B12, folic acid, and other nutritional supplements to stimulate healthy red blood cell production and correct deficiency-related anemia. These treatments are commonly used in anemia, blood loss after surgery or trauma, chronic kidney disease, hematologic disorders, nutritional deficiencies, cancer treatment support, and critical care settings. Therapy is supervised by physicians, hematologists, transfusion specialists, and critical care teams in hospitals, blood banks, and specialty clinics.',
                'symptoms' => [
            ['value' => 'Fatigue, weakness, or reduced energy levels'],
            ['value' => 'Pale skin, dizziness, or shortness of breath'],
            ['value' => 'Rapid heartbeat or low blood pressure due to blood loss'],
            ['value' => 'Easy bruising, bleeding, or delayed wound healing'],
            ['value' => 'Nutritional deficiency symptoms affecting blood formation and oxygen circulation'],
        ],
                'causes' => [
            ['value' => 'Iron deficiency anemia or nutritional deficiencies'],
            ['value' => 'Blood loss due to surgery, trauma, or gastrointestinal bleeding'],
            ['value' => 'Chronic kidney disease or chronic medical illnesses'],
            ['value' => 'Bone marrow or hematologic disorders affecting blood production'],
            ['value' => 'Cancer treatment, infections, or conditions causing low blood counts'],
        ],
                'condition_risks' => [
            ['value' => 'Allergic or transfusion-related reactions'],
            ['value' => 'Infection risk associated with blood transfusion procedures'],
            ['value' => 'Iron overload or metabolic imbalance with repeated transfusions'],
            ['value' => 'Fluid overload or circulatory complications in vulnerable patients'],
            ['value' => 'Delayed recovery if underlying causes of anemia or blood loss remain untreated'],
            ['value' => 'Treatment Options'],
            ['value' => 'Blood transfusion and hematinic therapy focus on restoring healthy blood levels, improving oxygen delivery, correcting nutritional deficiencies, and preventing complications. Treatment may include packed red blood cell transfusion, platelet transfusion, plasma therapy, iron supplementation, vitamin B12 injections, folic acid therapy, nutritional counseling, and treatment of underlying hematologic or medical conditions. Patients may also benefit from hydration support, chronic disease management, laboratory monitoring, rehabilitation care, hematology follow-up, and long-term preventive healthcare to maintain healthy blood function and overall well-being.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular monitoring of hemoglobin levels and blood parameters'],
            ['value' => 'Observation for transfusion reactions or treatment-related complications'],
            ['value' => 'Nutritional counseling and hematinic supplementation support'],
            ['value' => 'Monitoring for fluid overload, iron balance, or infection risk'],
            ['value' => 'Long-term hematology follow-up and blood health assessment'],
        ],
                'surgery_risks' => [
            ['value' => 'Allergic or transfusion-related reactions'],
            ['value' => 'Infection risk associated with blood transfusion procedures'],
            ['value' => 'Iron overload or metabolic imbalance with repeated transfusions'],
            ['value' => 'Fluid overload or circulatory complications in vulnerable patients'],
            ['value' => 'Delayed recovery if underlying causes of anemia or blood loss remain untreated'],
            ['value' => 'Treatment Options'],
            ['value' => 'Blood transfusion and hematinic therapy focus on restoring healthy blood levels, improving oxygen delivery, correcting nutritional deficiencies, and preventing complications. Treatment may include packed red blood cell transfusion, platelet transfusion, plasma therapy, iron supplementation, vitamin B12 injections, folic acid therapy, nutritional counseling, and treatment of underlying hematologic or medical conditions. Patients may also benefit from hydration support, chronic disease management, laboratory monitoring, rehabilitation care, hematology follow-up, and long-term preventive healthcare to maintain healthy blood function and overall well-being.'],
        ],
                'long_term_outlook' => 'The long-term outlook following blood transfusion and hematinic therapy is generally highly positive with proper medical management and treatment adherence. Balanced nutrition, medication compliance, regular blood monitoring, treatment of underlying medical conditions, healthy lifestyle habits, preventive healthcare, and continuous medical follow-up significantly help restore healthy blood levels, improve physical strength, preserve organ function, reduce complications, and enhance overall quality of life.',
                'conclusion' => '',
                'seo_title' => 'Blood Transfusion / Hematinic Therapy',
                'seo_description' => 'Blood transfusion and hematinic therapy are specialized medical treatment procedures used to restore healthy blood levels, improve oxygen delivery, correct nutritional deficiencies, and support recovery in patients with anemia, blood loss, bleeding disorders, or hematologic conditions. These therapies help maintain proper circulation, improve energy levels, support organ function, and prevent complications related to low blood counts or nutritional deficiencies affecting blood formation.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
