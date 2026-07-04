<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CardiacMRISeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Cardiac MRI')],
            [
                'title' => 'Cardiac MRI',
                'slug' => Str::slug('Cardiac MRI'),
                'introduction' => 'Cardiac MRI is an advanced imaging modality that provides detailed visualization of heart muscle, chambers, valves, blood vessels, and surrounding structures. It is highly useful in evaluating cardiomyopathy, congenital heart disease, myocarditis, and cardiac tumors. Cardiac MRI offers excellent tissue characterization without radiation exposure.',
                'what_is' => 'The procedure uses magnetic fields and radio waves to create detailed images of the heart. Cardiac MRI helps evaluate: Heart muscle damage Myocarditis Cardiomyopathy Congenital heart disease Cardiac tumors Scar tissue after heart attack Contrast agents may be used in some studies for enhanced visualization. The test provides highly accurate structural and functional cardiac assessment.',
                'symptoms' => [
            ['value' => 'Chest pain'],
            ['value' => 'Breathlessness'],
            ['value' => 'Suspected cardiomyopathy'],
            ['value' => 'Abnormal echocardiography findings'],
            ['value' => 'Unexplained heart failure symptoms'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Claustrophobia during scanning'],
            ['value' => 'Contrast-related allergic reactions'],
            ['value' => 'Difficulty in patients with certain implants'],
            ['value' => 'Temporary discomfort from prolonged scanning'],
            ['value' => 'Anxiety during imaging procedure'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Resume normal activities unless otherwise advised'],
            ['value' => 'Drink fluids if contrast was administered'],
            ['value' => 'Inform doctors about implanted devices before future scans'],
            ['value' => 'Attend follow-up consultations for interpretation'],
            ['value' => 'Continue cardiac treatment plans consistently'],
        ],
                'surgery_risks' => [
            ['value' => 'Claustrophobia during scanning'],
            ['value' => 'Contrast-related allergic reactions'],
            ['value' => 'Difficulty in patients with certain implants'],
            ['value' => 'Temporary discomfort from prolonged scanning'],
            ['value' => 'Anxiety during imaging procedure'],
        ],
                'long_term_outlook' => 'Cardiac MRI provides precise diagnosis and monitoring, enabling better management of complex cardiac conditions and improved long-term heart care.',
                'conclusion' => '',
                'seo_title' => 'Cardiac MRI',
                'seo_description' => 'Cardiac MRI is an advanced imaging modality that provides detailed visualization of heart muscle, chambers, valves, blood vessels, and surrounding structures. It is highly useful in evaluating cardiomyopathy, congenital heart disease, myocarditis, and cardiac tumors. Cardiac MRI offers excellent tissue characterization without radiation exposure.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
