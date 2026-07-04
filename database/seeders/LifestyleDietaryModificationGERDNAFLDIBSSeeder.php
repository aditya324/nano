<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class LifestyleDietaryModificationGERDNAFLDIBSSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Lifestyle & Dietary Modification (GERD, NAFLD, IBS)')],
            [
                'title' => 'Lifestyle & Dietary Modification (GERD, NAFLD, IBS)',
                'slug' => Str::slug('Lifestyle & Dietary Modification (GERD, NAFLD, IBS)'),
                'introduction' => 'Lifestyle and dietary modification is a foundational treatment approach used in many gastrointestinal disorders such as gastroesophageal reflux disease (GERD), non-alcoholic fatty liver disease (NAFLD), and irritable bowel syndrome (IBS). It focuses on improving digestive health through healthy eating habits, weight management, physical activity, and avoidance of triggering foods.',
                'what_is' => 'Dietary and lifestyle interventions help reduce symptoms, improve digestion, and prevent disease progression. Common recommendations include: Avoiding spicy and fatty foods Reducing caffeine and alcohol intake Eating smaller frequent meals Maintaining healthy body weight Increasing physical activity Stress management techniques These measures are often combined with medications and long-term follow-up care.',
                'symptoms' => [
            ['value' => 'Heartburn and acid reflux'],
            ['value' => 'Abdominal bloating and discomfort'],
            ['value' => 'Irregular bowel habits'],
            ['value' => 'Fatigue related to fatty liver disease'],
            ['value' => 'Indigestion and gastric irritation'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Difficulty maintaining long-term dietary discipline'],
            ['value' => 'Nutritional imbalance with improper dieting'],
            ['value' => 'Persistent symptoms if triggers continue'],
            ['value' => 'Weight regain after lifestyle improvement'],
            ['value' => 'Delayed improvement in chronic disease'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Follow physician-recommended diet plans'],
            ['value' => 'Maintain regular meal timings'],
            ['value' => 'Exercise regularly and maintain healthy weight'],
            ['value' => 'Avoid smoking and alcohol consumption'],
            ['value' => 'Attend regular medical follow-up visits'],
        ],
                'surgery_risks' => [
            ['value' => 'Difficulty maintaining long-term dietary discipline'],
            ['value' => 'Nutritional imbalance with improper dieting'],
            ['value' => 'Persistent symptoms if triggers continue'],
            ['value' => 'Weight regain after lifestyle improvement'],
            ['value' => 'Delayed improvement in chronic disease'],
        ],
                'long_term_outlook' => 'Consistent lifestyle modification significantly improves gastrointestinal health, reduces symptom recurrence, prevents disease progression, and enhances overall quality of life.',
                'conclusion' => '',
                'seo_title' => 'Lifestyle & Dietary Modification (GERD, NAFLD, IBS)',
                'seo_description' => 'Lifestyle and dietary modification is a foundational treatment approach used in many gastrointestinal disorders such as gastroesophageal reflux disease (GERD), non-alcoholic fatty liver disease (NAFLD), and irritable bowel syndrome (IBS). It focuses on improving digestive health through healthy eating habits, weight management, physical activity, and avoidance of triggering foods.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
