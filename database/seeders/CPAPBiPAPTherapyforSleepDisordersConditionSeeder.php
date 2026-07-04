<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CPAPBiPAPTherapyforSleepDisordersConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('CPAP / BiPAP Therapy for Sleep Disorders')],
            [
                'name' => 'CPAP / BiPAP Therapy for Sleep Disorders',
                'slug' => Str::slug('CPAP / BiPAP Therapy for Sleep Disorders'),
                'h1' => 'CPAP / BiPAP Therapy for Sleep Disorders',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'CPAP (Continuous Positive Airway Pressure) and BiPAP (Bilevel Positive Airway Pressure) therapy are non-invasive respiratory support procedures used to manage sleep-related breathing disorders such as obstructive sleep apnea, sleep-related hypoventilation, and certain chronic respiratory conditions. These therapies help maintain open airways during sleep, improve oxygen delivery, reduce breathing interruptions, and enhance sleep quality and overall health.',
                'about_more' => '',
                'overview' => 'CPAP therapy delivers a continuous stream of pressurized air through a mask to prevent airway collapse during sleep, while BiPAP therapy provides two different pressure levels for inhalation and exhalation to support more comfortable breathing in selected patients. These therapies are commonly used in sleep medicine, pulmonology, and respiratory care settings for patients experiencing repeated breathing pauses, snoring, low oxygen levels, daytime fatigue, or chronic respiratory insufficiency. CPAP and BiPAP devices are often recommended after sleep studies and are customized according to the patient’s respiratory requirements and severity of sleep disorder.',
                'symptoms' => [
            ['value' => 'Loud snoring or interrupted breathing during sleep'],
            ['value' => 'Excessive daytime sleepiness or chronic fatigue'],
            ['value' => 'Morning headaches or poor sleep quality'],
            ['value' => 'Shortness of breath or nighttime breathing difficulty'],
            ['value' => 'Reduced concentration, irritability, or sleep-related oxygen desaturation'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Mask discomfort or skin irritation from prolonged device use'],
            ['value' => 'Nasal dryness, congestion, or throat irritation'],
            ['value' => 'Difficulty tolerating pressure settings during sleep'],
            ['value' => 'Air leakage reducing treatment effectiveness'],
            ['value' => 'Poor symptom control if therapy is not used consistently'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'CPAP and BiPAP therapy focus on improving airflow, preventing airway collapse, maintaining oxygen levels, and enhancing sleep quality in patients with sleep-related breathing disorders. Treatment may include positive airway pressure therapy, humidification systems, oxygen support when required, sleep monitoring, respiratory evaluation, lifestyle modification, and weight management. Patients may also benefit from smoking cessation, sleep hygiene improvement, positional therapy, pulmonary rehabilitation, and long-term sleep medicine or pulmonology follow-up to optimize respiratory and sleep health.'],
            ['value' => 'Regular monitoring of sleep quality and respiratory function'],
            ['value' => 'Proper mask fitting and device adjustment for patient comfort'],
            ['value' => 'Cleaning and maintenance of CPAP/BiPAP equipment'],
            ['value' => 'Follow-up sleep studies or pressure setting adjustments when required'],
            ['value' => 'Long-term respiratory and sleep disorder management support'],
        ],
                'recovery' => 'The long-term outlook following CPAP or BiPAP therapy is generally positive with consistent treatment adherence and proper respiratory management. Early diagnosis, regular device use, healthy lifestyle habits, weight control, sleep hygiene, smoking cessation, and continuous medical follow-up significantly help improve breathing during sleep, reduce cardiovascular and respiratory complications, restore daytime energy levels, and enhance overall quality of life. __________ 11. Pulmonary Thromboembolism Management (Anticoagulation / Thrombolysis) Pulmonary Thromboembolism Management (Anticoagulation / Thrombolysis) Procedures',
                'sort_order' => 11,
                'is_active' => true,
                'meta_title' => 'CPAP / BiPAP Therapy for Sleep Disorders',
                'meta_description' => 'CPAP (Continuous Positive Airway Pressure) and BiPAP (Bilevel Positive Airway Pressure) therapy are non-invasive respiratory support procedures used to manage s',
                'meta_keywords' => '',
            ]
        );
    }
}
