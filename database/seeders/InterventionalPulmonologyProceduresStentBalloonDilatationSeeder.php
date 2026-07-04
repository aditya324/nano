<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class InterventionalPulmonologyProceduresStentBalloonDilatationSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Interventional Pulmonology Procedures (Stent, Balloon Dilatation)')],
            [
                'title' => 'Interventional Pulmonology Procedures (Stent, Balloon Dilatation)',
                'slug' => Str::slug('Interventional Pulmonology Procedures (Stent, Balloon Dilatation)'),
                'introduction' => 'Interventional pulmonology procedures are advanced minimally invasive respiratory interventions used to diagnose and treat complex airway, lung, and pleural conditions. Procedures such as airway stent placement and balloon dilatation help relieve airway narrowing, obstruction, or collapse caused by tumors, scarring, inflammation, or other respiratory diseases. These procedures improve airflow, breathing function, and overall respiratory stability while reducing the need for major surgery in selected patients.',
                'what_is' => 'Balloon dilatation is a procedure in which a specialized balloon catheter is inserted into narrowed airways and inflated to widen the airway passage and improve airflow. Airway stents are tube-like devices placed inside the bronchial passages to keep narrowed or blocked airways open and maintain adequate breathing. These procedures are commonly performed using bronchoscopy under sedation or general anesthesia in specialized pulmonology units, operation theaters, or interventional respiratory care centers. Interventional pulmonology also includes airway tumor management, foreign body removal, pleural procedures, and advanced diagnostic respiratory interventions.',
                'symptoms' => [
            ['value' => 'Persistent shortness of breath or breathing difficulty'],
            ['value' => 'Airway obstruction causing wheezing or noisy breathing'],
            ['value' => 'Chronic cough or recurrent lung infections'],
            ['value' => 'Reduced oxygen levels or respiratory distress'],
            ['value' => 'Difficulty breathing due to tumors, airway narrowing, or lung disease complications'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Bleeding or airway injury during the procedure'],
            ['value' => 'Infection or inflammation within the respiratory tract'],
            ['value' => 'Airway perforation or temporary breathing difficulty'],
            ['value' => 'Stent migration, blockage, or mucus accumulation'],
            ['value' => 'Recurrence of airway narrowing requiring repeat intervention'],
            ['value' => 'Treatment Options'],
            ['value' => 'Interventional pulmonology procedures focus on restoring airway patency, improving breathing function, relieving respiratory obstruction, and supporting long-term respiratory health. Treatment may include balloon airway dilatation, airway stent placement, bronchoscopy-guided interventions, tumor debulking, laser therapy, cryotherapy, airway clearance procedures, and respiratory monitoring. Patients may also require oxygen therapy, antibiotics, bronchodilator medications, pulmonary rehabilitation, smoking cessation support, and multidisciplinary pulmonology follow-up to optimize recovery and reduce complications.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Continuous monitoring of breathing and oxygen levels after the procedure'],
            ['value' => 'Observation for bleeding, airway swelling, or respiratory complications'],
            ['value' => 'Airway clearance therapy and respiratory physiotherapy when required'],
            ['value' => 'Follow-up bronchoscopy or imaging to assess airway patency and stent position'],
            ['value' => 'Long-term pulmonology follow-up and management of underlying respiratory disease'],
        ],
                'surgery_risks' => [
            ['value' => 'Bleeding or airway injury during the procedure'],
            ['value' => 'Infection or inflammation within the respiratory tract'],
            ['value' => 'Airway perforation or temporary breathing difficulty'],
            ['value' => 'Stent migration, blockage, or mucus accumulation'],
            ['value' => 'Recurrence of airway narrowing requiring repeat intervention'],
            ['value' => 'Treatment Options'],
            ['value' => 'Interventional pulmonology procedures focus on restoring airway patency, improving breathing function, relieving respiratory obstruction, and supporting long-term respiratory health. Treatment may include balloon airway dilatation, airway stent placement, bronchoscopy-guided interventions, tumor debulking, laser therapy, cryotherapy, airway clearance procedures, and respiratory monitoring. Patients may also require oxygen therapy, antibiotics, bronchodilator medications, pulmonary rehabilitation, smoking cessation support, and multidisciplinary pulmonology follow-up to optimize recovery and reduce complications.'],
        ],
                'long_term_outlook' => 'The long-term outlook following interventional pulmonology procedures depends on the underlying airway condition, severity of obstruction, response to treatment, and overall lung health. Early intervention, regular respiratory monitoring, pulmonary rehabilitation, medication adherence, smoking cessation, and continuous pulmonology follow-up significantly help improve breathing function, reduce respiratory complications, maintain airway stability, and enhance overall quality of life.',
                'conclusion' => '',
                'seo_title' => 'Interventional Pulmonology Procedures (Stent, Balloon Dilatation)',
                'seo_description' => 'Interventional pulmonology procedures are advanced minimally invasive respiratory interventions used to diagnose and treat complex airway, lung, and pleural conditions. Procedures such as airway stent placement and balloon dilatation help relieve airway narrowing, obstruction, or collapse caused by tumors, scarring, inflammation, or other respiratory diseases. These procedures improve airflow, breathing function, and overall respiratory stability while reducing the need for major surgery in selected patients.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
