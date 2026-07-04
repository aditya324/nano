<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ChestPhysiotherapyAirwayClearanceTechniquesSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Chest Physiotherapy / Airway Clearance Techniques')],
            [
                'title' => 'Chest Physiotherapy / Airway Clearance Techniques',
                'slug' => Str::slug('Chest Physiotherapy / Airway Clearance Techniques'),
                'introduction' => 'Chest physiotherapy and airway clearance techniques are specialized respiratory therapy procedures used to help remove mucus and secretions from the lungs and airways, improve breathing efficiency, and support overall lung function. These therapies are commonly recommended for patients with chronic respiratory diseases, excessive mucus production, lung infections, and conditions that impair normal airway clearance.',
                'what_is' => 'Chest physiotherapy involves a combination of physical techniques such as chest percussion, vibration, postural drainage, breathing exercises, and assisted coughing to loosen and mobilize mucus from the lungs. Airway clearance techniques may also include positive expiratory pressure devices, oscillatory therapy devices, suctioning, nebulization support, and respiratory muscle training. These procedures are commonly used in conditions such as bronchiectasis, cystic fibrosis, COPD, pneumonia, asthma, neuromuscular disorders, and post-surgical respiratory care. Therapy is usually provided by physiotherapists, respiratory therapists, pulmonologists, or trained healthcare professionals in hospitals, rehabilitation centers, and home-care settings.',
                'symptoms' => [
            ['value' => 'Persistent cough with mucus or phlegm buildup'],
            ['value' => 'Difficulty clearing airway secretions'],
            ['value' => 'Shortness of breath or wheezing'],
            ['value' => 'Recurrent respiratory infections or chest congestion'],
            ['value' => 'Reduced lung function or breathing discomfort due to mucus accumulation'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Temporary fatigue or discomfort during therapy sessions'],
            ['value' => 'Low oxygen levels or dizziness in severe respiratory disease patients'],
            ['value' => 'Increased coughing or mucus production during airway clearance'],
            ['value' => 'Rib or muscle discomfort from vigorous physiotherapy techniques'],
            ['value' => 'Reduced treatment effectiveness if therapy is not performed correctly or consistently'],
            ['value' => 'Treatment Options'],
            ['value' => 'Chest physiotherapy and airway clearance techniques focus on improving mucus removal, enhancing breathing efficiency, reducing infection risk, and supporting long-term respiratory health. Treatment may include chest percussion, vibration therapy, postural drainage, breathing exercises, suctioning, nebulization therapy, positive expiratory pressure devices, oscillatory airway clearance systems, and pulmonary rehabilitation. Patients may also benefit from bronchodilator medications, hydration support, oxygen therapy, smoking cessation, vaccination, nutritional counseling, and long-term pulmonology follow-up to optimize respiratory function and prevent complications.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular respiratory monitoring and assessment of mucus clearance'],
            ['value' => 'Continued breathing exercises and airway clearance sessions'],
            ['value' => 'Hydration support to help loosen respiratory secretions'],
            ['value' => 'Monitoring oxygen levels and respiratory comfort during therapy'],
            ['value' => 'Long-term pulmonary rehabilitation and respiratory follow-up when required'],
        ],
                'surgery_risks' => [
            ['value' => 'Temporary fatigue or discomfort during therapy sessions'],
            ['value' => 'Low oxygen levels or dizziness in severe respiratory disease patients'],
            ['value' => 'Increased coughing or mucus production during airway clearance'],
            ['value' => 'Rib or muscle discomfort from vigorous physiotherapy techniques'],
            ['value' => 'Reduced treatment effectiveness if therapy is not performed correctly or consistently'],
            ['value' => 'Treatment Options'],
            ['value' => 'Chest physiotherapy and airway clearance techniques focus on improving mucus removal, enhancing breathing efficiency, reducing infection risk, and supporting long-term respiratory health. Treatment may include chest percussion, vibration therapy, postural drainage, breathing exercises, suctioning, nebulization therapy, positive expiratory pressure devices, oscillatory airway clearance systems, and pulmonary rehabilitation. Patients may also benefit from bronchodilator medications, hydration support, oxygen therapy, smoking cessation, vaccination, nutritional counseling, and long-term pulmonology follow-up to optimize respiratory function and prevent complications.'],
        ],
                'long_term_outlook' => 'The long-term outlook following chest physiotherapy and airway clearance therapy is generally positive when patients actively participate in regular respiratory care and rehabilitation. Early intervention, consistent airway clearance, pulmonary rehabilitation, medication adherence, healthy lifestyle habits, smoking cessation, and regular pulmonology follow-up significantly help improve breathing function, reduce respiratory infections, prevent mucus buildup, preserve lung health, and enhance overall quality of life.',
                'conclusion' => '',
                'seo_title' => 'Chest Physiotherapy / Airway Clearance Techniques',
                'seo_description' => 'Chest physiotherapy and airway clearance techniques are specialized respiratory therapy procedures used to help remove mucus and secretions from the lungs and airways, improve breathing efficiency, and support overall lung function. These therapies are commonly recommended for patients with chronic respiratory diseases, excessive mucus production, lung infections, and conditions that impair normal airway clearance.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
