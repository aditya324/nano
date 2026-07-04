<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MetabolicTestingEquipmentSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Metabolic Testing Equipment')],
            [
                'title' => 'Metabolic Testing Equipment',
                'slug' => Str::slug('Metabolic Testing Equipment'),
                'introduction' => 'Metabolic testing equipment consists of advanced diagnostic devices used to evaluate metabolic function, energy expenditure, respiratory efficiency, body composition, and nutritional status. These systems help healthcare professionals assess metabolic health, diagnose metabolic disorders, monitor treatment effectiveness, and develop personalized nutrition and exercise programs. Metabolic testing plays an important role in preventive healthcare, endocrinology, sports medicine, obesity management, and chronic disease care.',
                'what_is' => 'Metabolic testing equipment includes indirect calorimeters, resting metabolic rate analyzers, body composition analyzers, VO₂ max testing systems, respiratory gas analyzers, metabolic carts, and exercise physiology assessment devices. These technologies measure oxygen consumption, carbon dioxide production, calorie expenditure, fat and muscle composition, and cardiovascular performance to provide detailed insights into metabolic health and energy utilization. Metabolic testing equipment is widely used in hospitals, endocrinology clinics, fitness and rehabilitation centers, sports medicine facilities, obesity management programs, and preventive healthcare settings.',
                'symptoms' => [
            ['value' => 'Unexplained weight gain or difficulty losing weight'],
            ['value' => 'Fatigue, weakness, or reduced physical endurance'],
            ['value' => 'Metabolic syndrome or obesity-related health concerns'],
            ['value' => 'Diabetes, hormonal imbalance, or nutritional deficiencies'],
            ['value' => 'Poor exercise tolerance or abnormal energy metabolism'],
        ],
                'causes' => [
            ['value' => 'Obesity and metabolic syndrome'],
            ['value' => 'Diabetes and insulin resistance'],
            ['value' => 'Hormonal imbalance affecting metabolism'],
            ['value' => 'Poor nutrition or sedentary lifestyle'],
            ['value' => 'Reduced physical endurance or unexplained weight changes'],
        ],
                'condition_risks' => [
            ['value' => 'Inaccurate results due to improper testing preparation or calibration errors'],
            ['value' => 'Temporary fatigue or shortness of breath during exercise-based testing'],
            ['value' => 'Misinterpretation of results without proper clinical evaluation'],
            ['value' => 'Technical malfunction affecting testing accuracy'],
            ['value' => 'Delayed diagnosis if metabolic abnormalities remain unassessed'],
            ['value' => 'Treatment Options'],
            ['value' => 'Metabolic testing equipment supports effective diagnosis, treatment planning, and long-term metabolic management by helping healthcare providers evaluate energy expenditure, nutritional needs, and metabolic performance. Management may include personalized diet planning, weight management programs, diabetes care, exercise prescription, hormonal evaluation, rehabilitation therapy, lifestyle modification, and endocrinology follow-up. Patients may also benefit from sports performance assessment, obesity treatment programs, nutritional counseling, preventive health screening, and continuous metabolic monitoring to improve overall health outcomes.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular metabolic health evaluation and follow-up testing'],
            ['value' => 'Monitoring of body composition, calorie expenditure, and exercise performance'],
            ['value' => 'Nutritional counseling and individualized lifestyle management support'],
            ['value' => 'Calibration, maintenance, and quality control of testing equipment'],
            ['value' => 'Long-term endocrinology, rehabilitation, or wellness follow-up care'],
        ],
                'surgery_risks' => [
            ['value' => 'Inaccurate results due to improper testing preparation or calibration errors'],
            ['value' => 'Temporary fatigue or shortness of breath during exercise-based testing'],
            ['value' => 'Misinterpretation of results without proper clinical evaluation'],
            ['value' => 'Technical malfunction affecting testing accuracy'],
            ['value' => 'Delayed diagnosis if metabolic abnormalities remain unassessed'],
            ['value' => 'Treatment Options'],
            ['value' => 'Metabolic testing equipment supports effective diagnosis, treatment planning, and long-term metabolic management by helping healthcare providers evaluate energy expenditure, nutritional needs, and metabolic performance. Management may include personalized diet planning, weight management programs, diabetes care, exercise prescription, hormonal evaluation, rehabilitation therapy, lifestyle modification, and endocrinology follow-up. Patients may also benefit from sports performance assessment, obesity treatment programs, nutritional counseling, preventive health screening, and continuous metabolic monitoring to improve overall health outcomes.'],
        ],
                'long_term_outlook' => 'The long-term outlook associated with metabolic testing equipment is generally highly positive when integrated into preventive healthcare and chronic disease management programs. Regular metabolic assessment, healthy nutrition, exercise, weight management, lifestyle modification, continuous medical monitoring, and personalized healthcare planning significantly help improve metabolic stability, reduce chronic disease risk, enhance physical performance, support long-term wellness, and improve overall quality of life',
                'conclusion' => '',
                'seo_title' => 'Metabolic Testing Equipment',
                'seo_description' => 'Metabolic testing equipment consists of advanced diagnostic devices used to evaluate metabolic function, energy expenditure, respiratory efficiency, body composition, and nutritional status. These systems help healthcare professionals assess metabolic health, diagnose metabolic disorders, monitor treatment effectiveness, and develop personalized nutrition and exercise programs. Metabolic testing plays an important role in preventive healthcare, endocrinology, sports medicine, obesity management, and chronic disease care.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
