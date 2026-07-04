<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SmokingCessationProgramsCounselingConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Smoking Cessation Programs & Counseling')],
            [
                'name' => 'Smoking Cessation Programs & Counseling',
                'slug' => Str::slug('Smoking Cessation Programs & Counseling'),
                'h1' => 'Smoking Cessation Programs & Counseling',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Smoking cessation programs and counseling are specialized preventive and therapeutic healthcare procedures designed to help individuals stop smoking and overcome nicotine dependence. These programs provide medical guidance, behavioral counseling, lifestyle support, and treatment strategies to reduce tobacco use, improve respiratory and cardiovascular health, and lower the risk of smoking-related diseases. Smoking cessation is one of the most effective ways to improve overall health and long-term quality of life.',
                'about_more' => '',
                'overview' => 'Smoking cessation programs combine medical treatment, psychological support, education, and behavioral therapy to help individuals quit smoking successfully. Counseling sessions help patients identify smoking triggers, manage cravings, cope with withdrawal symptoms, and develop healthier lifestyle habits. Treatment may include nicotine replacement therapy, prescription medications, motivational counseling, stress management techniques, and long-term follow-up support. These programs are commonly offered in hospitals, pulmonary clinics, rehabilitation centers, wellness programs, and primary healthcare settings under the guidance of physicians, pulmonologists, psychologists, and trained counselors.',
                'symptoms' => [
            ['value' => 'Chronic cough or breathing difficulty related to smoking'],
            ['value' => 'Nicotine cravings or withdrawal symptoms'],
            ['value' => 'Reduced exercise tolerance or fatigue'],
            ['value' => 'Frequent respiratory infections or throat irritation'],
            ['value' => 'Smoking-related health concerns affecting daily life and well-being'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Nicotine withdrawal symptoms such as irritability or anxiety'],
            ['value' => 'Weight gain or increased appetite after quitting smoking'],
            ['value' => 'Difficulty managing stress or cravings during the quitting process'],
            ['value' => 'Relapse risk without long-term counseling and support'],
            ['value' => 'Ongoing health complications if smoking continues'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Smoking cessation programs focus on eliminating tobacco dependence, reducing nicotine cravings, improving lung and heart health, and preventing smoking-related complications. Treatment may include behavioral counseling, nicotine replacement therapy, prescription medications, support groups, stress reduction techniques, pulmonary rehabilitation, breathing exercises, and lifestyle modification programs. Patients may also benefit from nutritional counseling, physical activity guidance, psychological support, and long-term follow-up care to maintain smoking abstinence and improve overall health outcomes.'],
            ['value' => 'Regular counseling and follow-up sessions to support smoking cessation'],
            ['value' => 'Monitoring withdrawal symptoms and treatment response'],
            ['value' => 'Lifestyle modification and stress management support'],
            ['value' => 'Respiratory health evaluation and pulmonary rehabilitation when required'],
            ['value' => 'Long-term wellness monitoring and relapse prevention counseling'],
        ],
                'recovery' => 'The long-term outlook following smoking cessation programs is highly positive when individuals remain committed to quitting tobacco use and maintaining healthy lifestyle habits. Early smoking cessation, regular counseling, medication adherence, pulmonary rehabilitation, exercise, healthy nutrition, and continuous medical follow-up significantly help improve lung function, reduce the risk of cancer and cardiovascular disease, prevent respiratory complications, increase life expectancy, and enhance overall quality of life. __________________ 17. Vaccination (Influenza, Pneumococcal, COVID-19) Vaccination (Influenza, Pneumococcal, COVID-19) Procedures',
                'sort_order' => 17,
                'is_active' => true,
                'meta_title' => 'Smoking Cessation Programs & Counseling',
                'meta_description' => 'Smoking cessation programs and counseling are specialized preventive and therapeutic healthcare procedures designed to help individuals stop smoking and overcom',
                'meta_keywords' => '',
            ]
        );
    }
}
