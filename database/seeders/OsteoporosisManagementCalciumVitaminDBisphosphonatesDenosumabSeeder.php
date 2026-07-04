<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class OsteoporosisManagementCalciumVitaminDBisphosphonatesDenosumabSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Osteoporosis Management (Calcium, Vitamin D, Bisphosphonates, Denosumab)')],
            [
                'title' => 'Osteoporosis Management (Calcium, Vitamin D, Bisphosphonates, Denosumab)',
                'slug' => Str::slug('Osteoporosis Management (Calcium, Vitamin D, Bisphosphonates, Denosumab)'),
                'introduction' => 'Osteoporosis management involves specialized medical and supportive treatment procedures used to strengthen bones, reduce bone loss, prevent fractures, and improve overall skeletal health. Osteoporosis causes bones to become weak, fragile, and more susceptible to fractures, particularly in the spine, hips, and wrists. Early diagnosis and long-term treatment are essential to maintain bone density, preserve mobility, and reduce the risk of serious complications related to bone weakness.',
                'what_is' => 'Osteoporosis management includes nutritional supplementation, medications, lifestyle modification, and regular bone health monitoring. Calcium and vitamin D supplementation help support bone formation and calcium absorption, while medications such as bisphosphonates and Denosumab work to reduce bone breakdown and improve bone strength. Treatment plans are individualized based on bone density results, fracture risk, age, hormonal status, and overall health condition. Osteoporosis care is commonly supervised by endocrinologists, orthopedic specialists, rheumatologists, and primary healthcare providers in hospitals, bone health clinics, and rehabilitation centers.',
                'symptoms' => [
            ['value' => 'Bone pain or back pain'],
            ['value' => 'Fragility fractures after minor injuries or falls'],
            ['value' => 'Loss of height or stooped posture'],
            ['value' => 'Weak bones or reduced physical mobility'],
            ['value' => 'Often asymptomatic until fractures occur'],
        ],
                'causes' => [
            ['value' => 'Age-related bone loss or postmenopausal osteoporosis'],
            ['value' => 'Calcium or vitamin D deficiency'],
            ['value' => 'Hormonal imbalance affecting bone metabolism'],
            ['value' => 'Long-term steroid medication use'],
            ['value' => 'Reduced physical activity or chronic medical conditions affecting bone health'],
        ],
                'condition_risks' => [
            ['value' => 'Increased risk of spine, hip, or wrist fractures'],
            ['value' => 'Chronic pain or disability following fractures'],
            ['value' => 'Medication-related side effects such as digestive discomfort or low calcium levels'],
            ['value' => 'Reduced mobility and loss of independence in severe osteoporosis'],
            ['value' => 'Long-term skeletal complications if bone loss progresses untreated'],
            ['value' => 'Treatment Options'],
            ['value' => 'Osteoporosis management focuses on improving bone density, preventing fractures, reducing bone loss, and maintaining long-term skeletal health. Treatment may include calcium and vitamin D supplementation, bisphosphonate therapy, Denosumab injections, hormone-related therapy when indicated, weight-bearing exercises, physiotherapy, fall prevention strategies, and nutritional counseling. Patients may also benefit from smoking cessation, reduced alcohol intake, regular bone density monitoring, endocrinology follow-up, and lifestyle modification to optimize bone strength and overall health outcomes.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular monitoring of bone density and calcium levels'],
            ['value' => 'Monitoring for medication side effects or fracture-related complications'],
            ['value' => 'Supervised exercise and physiotherapy programs to improve bone strength and balance'],
            ['value' => 'Nutritional counseling and lifestyle modification support'],
            ['value' => 'Long-term endocrinology or orthopedic follow-up care'],
        ],
                'surgery_risks' => [
            ['value' => 'Increased risk of spine, hip, or wrist fractures'],
            ['value' => 'Chronic pain or disability following fractures'],
            ['value' => 'Medication-related side effects such as digestive discomfort or low calcium levels'],
            ['value' => 'Reduced mobility and loss of independence in severe osteoporosis'],
            ['value' => 'Long-term skeletal complications if bone loss progresses untreated'],
            ['value' => 'Treatment Options'],
            ['value' => 'Osteoporosis management focuses on improving bone density, preventing fractures, reducing bone loss, and maintaining long-term skeletal health. Treatment may include calcium and vitamin D supplementation, bisphosphonate therapy, Denosumab injections, hormone-related therapy when indicated, weight-bearing exercises, physiotherapy, fall prevention strategies, and nutritional counseling. Patients may also benefit from smoking cessation, reduced alcohol intake, regular bone density monitoring, endocrinology follow-up, and lifestyle modification to optimize bone strength and overall health outcomes.'],
        ],
                'long_term_outlook' => 'The long-term outlook following osteoporosis management is generally positive with early intervention and consistent treatment adherence. Regular medication use, healthy nutrition, calcium and vitamin D support, exercise, fall prevention, healthy lifestyle habits, and continuous medical follow-up significantly help improve bone strength, reduce fracture risk, preserve mobility, maintain independence, and enhance overall quality of life.',
                'conclusion' => '',
                'seo_title' => 'Osteoporosis Management (Calcium, Vitamin D, Bisphosphonates, Denosumab)',
                'seo_description' => 'Osteoporosis management involves specialized medical and supportive treatment procedures used to strengthen bones, reduce bone loss, prevent fractures, and improve overall skeletal health. Osteoporosis causes bones to become weak, fragile, and more susceptible to fractures, particularly in the spine, hips, and wrists. Early diagnosis and long-term treatment are essential to maintain bone density, preserve mobility, and reduce the risk of serious complications related to bone weakness.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
