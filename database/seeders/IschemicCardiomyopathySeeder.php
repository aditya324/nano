<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class IschemicCardiomyopathySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Ischemic Cardiomyopathy')],
            [
                'title' => 'Ischemic Cardiomyopathy',
                'slug' => Str::slug('Ischemic Cardiomyopathy'),
                'introduction' => 'Ischemic cardiomyopathy is a condition where the heart muscle becomes weakened due to reduced blood supply from coronary artery disease or previous heart attacks. The weakened heart struggles to pump blood effectively, leading to heart failure symptoms. It is one of the most common causes of chronic heart failure.',
                'what_is' => 'The condition develops when coronary artery blockages damage heart muscle tissue over time. Evaluation may include: Echocardiography Coronary angiography ECG Cardiac MRI Stress testing Treatment may involve: Heart failure medications Angioplasty or bypass surgery Lifestyle modification Implantable cardiac devices Comprehensive cardiac rehabilitation improves recovery and long-term management.',
                'symptoms' => [
            ['value' => 'Breathlessness'],
            ['value' => 'Fatigue and weakness'],
            ['value' => 'Swelling of legs'],
            ['value' => 'Chest pain'],
            ['value' => 'Reduced exercise tolerance'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Heart failure progression'],
            ['value' => 'Dangerous arrhythmias'],
            ['value' => 'Sudden cardiac death'],
            ['value' => 'Recurrent heart attacks'],
            ['value' => 'Kidney dysfunction'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Follow heart failure medication schedules carefully'],
            ['value' => 'Restrict salt intake if advised'],
            ['value' => 'Monitor weight and swelling regularly'],
            ['value' => 'Attend cardiac rehabilitation programs'],
            ['value' => 'Avoid smoking and unhealthy diet habits'],
        ],
                'surgery_risks' => [
            ['value' => 'Heart failure progression'],
            ['value' => 'Dangerous arrhythmias'],
            ['value' => 'Sudden cardiac death'],
            ['value' => 'Recurrent heart attacks'],
            ['value' => 'Kidney dysfunction'],
        ],
                'long_term_outlook' => 'Appropriate treatment improves heart function, reduces hospitalizations, and enhances long-term survival and quality of life.',
                'conclusion' => '',
                'seo_title' => 'Ischemic Cardiomyopathy',
                'seo_description' => 'Ischemic cardiomyopathy is a condition where the heart muscle becomes weakened due to reduced blood supply from coronary artery disease or previous heart attacks. The weakened heart struggles to pump blood effectively, leading to heart failure symptoms. It is one of the most common causes of chronic heart failure.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
