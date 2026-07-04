<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CongenitalHeartDiseasePediatricandAdultSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Congenital Heart Disease (Pediatric and Adult)')],
            [
                'title' => 'Congenital Heart Disease (Pediatric and Adult)',
                'slug' => Str::slug('Congenital Heart Disease (Pediatric and Adult)'),
                'introduction' => 'Congenital heart disease (CHD) refers to structural abnormalities of the heart that are present from birth. These defects may affect the heart chambers, valves, blood vessels, or blood flow patterns. Some congenital heart defects are diagnosed during infancy, while others may remain unnoticed until adolescence or adulthood. Modern cardiology and cardiac surgery treatments allow many children and adults with CHD to lead healthy and active lives.',
                'what_is' => 'Congenital heart disease includes a wide range of conditions such as: Atrial septal defect (ASD) Ventricular septal defect (VSD) Tetralogy of Fallot Patent ductus arteriosus (PDA) Congenital valve abnormalities Cyanotic heart disease The severity varies from mild defects requiring observation to complex abnormalities needing surgery or catheter-based intervention. Diagnosis may involve: Echocardiography ECG Cardiac MRI CT angiography Cardiac catheterization Long-term cardiology follow-up is important for monitoring heart function and preventing complications.',
                'symptoms' => [
            ['value' => 'Shortness of breath'],
            ['value' => 'Poor growth in children'],
            ['value' => 'Cyanosis (bluish discoloration)'],
            ['value' => 'Fatigue during activity'],
            ['value' => 'Heart murmur or palpitations'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Heart failure'],
            ['value' => 'Arrhythmias'],
            ['value' => 'Pulmonary hypertension'],
            ['value' => 'Stroke or clot formation'],
            ['value' => 'Infective endocarditis'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Attend regular pediatric or adult cardiology follow-up visits'],
            ['value' => 'Take medications exactly as prescribed'],
            ['value' => 'Monitor exercise tolerance and symptoms carefully'],
            ['value' => 'Maintain infection prevention and dental hygiene'],
            ['value' => 'Follow activity recommendations provided by specialists'],
        ],
                'surgery_risks' => [
            ['value' => 'Heart failure'],
            ['value' => 'Arrhythmias'],
            ['value' => 'Pulmonary hypertension'],
            ['value' => 'Stroke or clot formation'],
            ['value' => 'Infective endocarditis'],
        ],
                'long_term_outlook' => 'With early diagnosis and appropriate treatment, many patients with congenital heart disease achieve improved survival, better heart function, and enhanced quality of life into adulthood.',
                'conclusion' => '',
                'seo_title' => 'Congenital Heart Disease (Pediatric and Adult)',
                'seo_description' => 'Congenital heart disease (CHD) refers to structural abnormalities of the heart that are present from birth. These defects may affect the heart chambers, valves, blood vessels, or blood flow patterns. Some congenital heart defects are diagnosed during infancy, while others may remain unnoticed until adolescence or adulthood. Modern cardiology and cardiac surgery treatments allow many children and adults with CHD to lead healthy and active lives.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
