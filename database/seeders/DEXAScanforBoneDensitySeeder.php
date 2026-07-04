<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DEXAScanforBoneDensitySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('DEXA Scan for Bone Density')],
            [
                'title' => 'DEXA Scan for Bone Density',
                'slug' => Str::slug('DEXA Scan for Bone Density'),
                'introduction' => 'A DEXA (Dual-Energy X-ray Absorptiometry) scan is an advanced diagnostic imaging procedure used to measure bone mineral density and assess the risk of osteoporosis and fractures. It is considered the gold standard test for evaluating bone health and detecting early bone loss before fractures occur. DEXA scans help healthcare providers diagnose osteoporosis, monitor treatment effectiveness, and support long-term skeletal health management.',
                'what_is' => 'DEXA scanning uses low-dose X-ray technology to accurately measure bone density, commonly in areas such as the spine, hips, and wrists where fractures are most likely to occur. The procedure is non-invasive, painless, quick, and highly precise. DEXA scans are widely used in hospitals, diagnostic imaging centers, endocrinology clinics, orthopedic departments, and preventive healthcare programs. Bone density assessment is particularly important for postmenopausal women, elderly individuals, patients with hormonal disorders, long-term steroid use, nutritional deficiencies, or a history of fractures and metabolic bone diseases.',
                'symptoms' => [
            ['value' => 'Bone pain or back pain'],
            ['value' => 'Frequent fractures or fractures after minor injuries'],
            ['value' => 'Loss of height or stooped posture'],
            ['value' => 'Weak bones or reduced physical mobility'],
            ['value' => 'Risk factors for osteoporosis or metabolic bone disorders'],
        ],
                'causes' => [
            ['value' => 'Osteoporosis or age-related bone loss'],
            ['value' => 'Postmenopausal hormonal changes affecting bone density'],
            ['value' => 'Long-term steroid medication use'],
            ['value' => 'Nutritional deficiencies such as low calcium or vitamin D'],
            ['value' => 'History of fractures or metabolic bone disorders'],
        ],
                'condition_risks' => [
            ['value' => 'Minimal radiation exposure during imaging'],
            ['value' => 'Inaccurate results if patient positioning is improper'],
            ['value' => 'Delayed diagnosis if routine bone screening is not performed'],
            ['value' => 'Reduced bone health if osteoporosis remains untreated'],
            ['value' => 'Need for repeat monitoring in progressive bone disorders'],
            ['value' => 'Treatment Options'],
            ['value' => 'DEXA scanning supports effective osteoporosis and bone health management by helping healthcare providers assess fracture risk, diagnose bone loss, and monitor treatment response. Management may include calcium and vitamin D supplementation, osteoporosis medications, hormone therapy, weight-bearing exercise programs, nutritional counseling, physiotherapy, lifestyle modification, and endocrinology or orthopedic follow-up. Patients may also benefit from fall prevention strategies, metabolic evaluation, and long-term bone health monitoring to maintain skeletal strength and reduce fracture risk.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular bone density monitoring and follow-up scanning when required'],
            ['value' => 'Evaluation of osteoporosis treatment effectiveness'],
            ['value' => 'Nutritional counseling and bone health management support'],
            ['value' => 'Monitoring for progression of bone loss or fracture risk'],
            ['value' => 'Long-term endocrinology or orthopedic follow-up care'],
        ],
                'surgery_risks' => [
            ['value' => 'Minimal radiation exposure during imaging'],
            ['value' => 'Inaccurate results if patient positioning is improper'],
            ['value' => 'Delayed diagnosis if routine bone screening is not performed'],
            ['value' => 'Reduced bone health if osteoporosis remains untreated'],
            ['value' => 'Need for repeat monitoring in progressive bone disorders'],
            ['value' => 'Treatment Options'],
            ['value' => 'DEXA scanning supports effective osteoporosis and bone health management by helping healthcare providers assess fracture risk, diagnose bone loss, and monitor treatment response. Management may include calcium and vitamin D supplementation, osteoporosis medications, hormone therapy, weight-bearing exercise programs, nutritional counseling, physiotherapy, lifestyle modification, and endocrinology or orthopedic follow-up. Patients may also benefit from fall prevention strategies, metabolic evaluation, and long-term bone health monitoring to maintain skeletal strength and reduce fracture risk.'],
        ],
                'long_term_outlook' => 'The long-term outlook associated with DEXA scan monitoring is generally highly positive with early osteoporosis detection and appropriate medical management. Regular bone density assessment, medication adherence, healthy nutrition, calcium and vitamin D support, exercise, fall prevention, healthy lifestyle habits, and ongoing healthcare follow-up significantly help improve bone strength, reduce fracture risk, preserve mobility, maintain independence, and enhance overall quality of life.',
                'conclusion' => '',
                'seo_title' => 'DEXA Scan for Bone Density',
                'seo_description' => 'A DEXA (Dual-Energy X-ray Absorptiometry) scan is an advanced diagnostic imaging procedure used to measure bone mineral density and assess the risk of osteoporosis and fractures. It is considered the gold standard test for evaluating bone health and detecting early bone loss before fractures occur. DEXA scans help healthcare providers diagnose osteoporosis, monitor treatment effectiveness, and support long-term skeletal health management.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
