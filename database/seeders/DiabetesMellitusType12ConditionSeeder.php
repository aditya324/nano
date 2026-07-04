<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DiabetesMellitusType12ConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Diabetes Mellitus Type 1 & 2')],
            [
                'name' => 'Diabetes Mellitus Type 1 & 2',
                'slug' => Str::slug('Diabetes Mellitus Type 1 & 2'),
                'h1' => 'Diabetes Mellitus Type 1 & 2',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Diabetes Mellitus is a chronic metabolic disorder characterized by elevated blood sugar levels due to problems with insulin production, insulin action, or both. Type 1 Diabetes occurs when the immune system destroys insulin-producing cells in the pancreas, leading to absolute insulin deficiency, while Type 2 Diabetes develops due to insulin resistance and reduced insulin effectiveness over time. Both conditions can affect multiple organs and body systems, requiring long-term medical management to prevent serious health complications and maintain overall metabolic stability.',
                'about_more' => '',
                'overview' => 'Diabetes Mellitus is a chronic metabolic disorder characterized by elevated blood sugar levels due to problems with insulin production, insulin action, or both. Type 1 Diabetes occurs when the immune system destroys insulin-producing cells in the pancreas, leading to absolute insulin deficiency, while Type 2 Diabetes develops due to insulin resistance and reduced insulin effectiveness over time. Both conditions can affect multiple organs and body systems, requiring long-term medical management to prevent serious health complications and maintain overall metabolic stability.',
                'symptoms' => [
            ['value' => 'Frequent urination and excessive thirst'],
            ['value' => 'Increased hunger or unexplained weight changes'],
            ['value' => 'Fatigue or reduced energy levels'],
            ['value' => 'Blurred vision or slow wound healing'],
            ['value' => 'Numbness, tingling, or recurrent infections in advanced cases'],
        ],
                'causes' => [
            ['value' => 'Autoimmune destruction of pancreatic insulin-producing cells in Type 1 Diabetes'],
            ['value' => 'Insulin resistance and metabolic dysfunction in Type 2 Diabetes'],
            ['value' => 'Genetic predisposition or family history of diabetes'],
            ['value' => 'Obesity, sedentary lifestyle, or unhealthy dietary habits'],
            ['value' => 'Hormonal imbalance, chronic stress, or certain medical conditions affecting glucose metabolism'],
        ],
                'risks' => [
            ['value' => 'Diabetic ketoacidosis (DKA) or severe hyperglycemia'],
            ['value' => 'Heart disease, stroke, or cardiovascular complications'],
            ['value' => 'Kidney damage or chronic kidney disease'],
            ['value' => 'Nerve damage, diabetic foot problems, or reduced sensation'],
            ['value' => 'Vision loss, infections, or poor wound healing due to uncontrolled blood sugar levels'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Treatment for Diabetes Mellitus Type 1 and Type 2 focuses on maintaining healthy blood sugar levels, preventing complications, and improving long-term metabolic health. Management may include insulin therapy, oral anti-diabetic medications, continuous glucose monitoring, healthy diet planning, regular physical activity, weight management, and lifestyle modification. Patients may also benefit from diabetes education, nutritional counseling, stress management, foot care, preventive health screening, endocrinology follow-up, and long-term metabolic monitoring to optimize diabetes control and overall well-being.'],
        ],
                'recovery' => 'The long-term outlook for Diabetes Mellitus Type 1 and Type 2 is generally positive with early diagnosis, proper treatment adherence, and healthy lifestyle management. Regular blood sugar monitoring, medication compliance, balanced nutrition, exercise, stress reduction, preventive healthcare, and continuous medical follow-up significantly help maintain metabolic stability, reduce diabetic complications, preserve organ function, improve daily functioning, and enhance overall quality of life. _________________ 3. Dyslipidemia / Hypercholesterolemia',
                'sort_order' => 2,
                'is_active' => true,
                'meta_title' => 'Diabetes Mellitus Type 1 & 2',
                'meta_description' => 'Diabetes Mellitus is a chronic metabolic disorder characterized by elevated blood sugar levels due to problems with insulin production, insulin action, or both.',
                'meta_keywords' => '',
            ]
        );
    }
}
