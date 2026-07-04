<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BariatricSurgeryforObesityMetabolicSyndromeSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Bariatric Surgery for Obesity & Metabolic Syndrome')],
            [
                'title' => 'Bariatric Surgery for Obesity & Metabolic Syndrome',
                'slug' => Str::slug('Bariatric Surgery for Obesity & Metabolic Syndrome'),
                'introduction' => 'Bariatric surgery is a specialized surgical treatment procedure used to support significant weight loss and improve metabolic health in individuals with severe obesity and obesity-related medical conditions. These procedures help reduce stomach size and alter digestive processes to limit food intake, improve hormonal balance, and support long-term weight management. Bariatric surgery is commonly recommended for patients with morbid obesity, metabolic syndrome, Type 2 diabetes, hypertension, sleep apnea, and other obesity-related complications when lifestyle and medical treatments alone are insufficient.',
                'what_is' => 'Bariatric surgery includes several minimally invasive and surgical techniques such as gastric bypass, sleeve gastrectomy, adjustable gastric banding, and biliopancreatic diversion procedures. These surgeries are commonly performed laparoscopically to reduce recovery time and surgical complications. Treatment planning involves comprehensive medical evaluation, nutritional assessment, psychological counseling, and metabolic screening before surgery. Bariatric procedures are performed in specialized obesity and metabolic surgery centers by multidisciplinary teams including bariatric surgeons, endocrinologists, nutritionists, physiotherapists, and psychologists to ensure safe treatment and long-term success.',
                'symptoms' => [
            ['value' => 'Severe obesity or excessive body weight'],
            ['value' => 'Difficulty losing weight despite diet and exercise programs'],
            ['value' => 'Type 2 diabetes or insulin resistance'],
            ['value' => 'High blood pressure, sleep apnea, or metabolic syndrome'],
            ['value' => 'Joint pain, reduced mobility, or obesity-related health complications'],
        ],
                'causes' => [
            ['value' => 'Severe obesity or morbid obesity'],
            ['value' => 'Metabolic syndrome or insulin resistance'],
            ['value' => 'Type 2 diabetes associated with obesity'],
            ['value' => 'Hypertension, sleep apnea, or obesity-related complications'],
            ['value' => 'Failure of long-term weight loss through diet and exercise alone'],
        ],
                'condition_risks' => [
            ['value' => 'Bleeding, infection, or complications related to surgery'],
            ['value' => 'Nutritional deficiencies requiring lifelong supplementation'],
            ['value' => 'Dumping syndrome or digestive discomfort after meals'],
            ['value' => 'Blood clots, dehydration, or postoperative complications'],
            ['value' => 'Weight regain if lifestyle changes are not maintained long-term'],
            ['value' => 'Treatment Options'],
            ['value' => 'Bariatric surgery focuses on achieving sustainable weight loss, improving metabolic function, reducing obesity-related complications, and enhancing overall quality of life. Treatment may include gastric bypass surgery, sleeve gastrectomy, adjustable gastric banding, nutritional counseling, behavioral therapy, exercise rehabilitation, vitamin and mineral supplementation, and long-term metabolic monitoring. Patients may also benefit from diabetes management, psychological support, endocrinology follow-up, lifestyle modification programs, and multidisciplinary obesity care to optimize recovery and maintain long-term health improvement.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular monitoring of weight loss progress and nutritional status'],
            ['value' => 'Lifelong vitamin and mineral supplementation when required'],
            ['value' => 'Gradual dietary progression and nutritional counseling after surgery'],
            ['value' => 'Physical activity and supervised exercise rehabilitation programs'],
            ['value' => 'Long-term bariatric, endocrinology, and metabolic follow-up care'],
        ],
                'surgery_risks' => [
            ['value' => 'Bleeding, infection, or complications related to surgery'],
            ['value' => 'Nutritional deficiencies requiring lifelong supplementation'],
            ['value' => 'Dumping syndrome or digestive discomfort after meals'],
            ['value' => 'Blood clots, dehydration, or postoperative complications'],
            ['value' => 'Weight regain if lifestyle changes are not maintained long-term'],
            ['value' => 'Treatment Options'],
            ['value' => 'Bariatric surgery focuses on achieving sustainable weight loss, improving metabolic function, reducing obesity-related complications, and enhancing overall quality of life. Treatment may include gastric bypass surgery, sleeve gastrectomy, adjustable gastric banding, nutritional counseling, behavioral therapy, exercise rehabilitation, vitamin and mineral supplementation, and long-term metabolic monitoring. Patients may also benefit from diabetes management, psychological support, endocrinology follow-up, lifestyle modification programs, and multidisciplinary obesity care to optimize recovery and maintain long-term health improvement.'],
        ],
                'long_term_outlook' => 'The long-term outlook following bariatric surgery is generally highly positive with proper postoperative care and lifestyle management. Healthy nutrition, regular exercise, weight monitoring, supplementation adherence, behavioral support, stress management, and continuous medical follow-up significantly help maintain weight loss, improve diabetes and metabolic syndrome, reduce cardiovascular complications, enhance mobility, and improve overall quality of life.',
                'conclusion' => '',
                'seo_title' => 'Bariatric Surgery for Obesity & Metabolic Syndrome',
                'seo_description' => 'Bariatric surgery is a specialized surgical treatment procedure used to support significant weight loss and improve metabolic health in individuals with severe obesity and obesity-related medical conditions. These procedures help reduce stomach size and alter digestive processes to limit food intake, improve hormonal balance, and support long-term weight management. Bariatric surgery is commonly recommended for patients with morbid obesity, metabolic syndrome, Type 2 diabetes, hypertension, sleep apnea, and other obesity-related complications when lifestyle and medical treatments alone are insufficient.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
