<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class IschemicCardiomyopathyConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Ischemic Cardiomyopathy')],
            [
                'name' => 'Ischemic Cardiomyopathy',
                'slug' => Str::slug('Ischemic Cardiomyopathy'),
                'h1' => 'Ischemic Cardiomyopathy',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Ischemic cardiomyopathy is weakening of the heart muscle caused by reduced blood supply due to coronary artery disease or previous heart attacks. It commonly leads to chronic heart failure.',
                'about_more' => '',
                'overview' => 'Ischemic cardiomyopathy is weakening of the heart muscle caused by reduced blood supply due to coronary artery disease or previous heart attacks. It commonly leads to chronic heart failure.',
                'symptoms' => [
            ['value' => 'Breathlessness during activity or rest'],
            ['value' => 'Fatigue and exercise intolerance'],
            ['value' => 'Swelling of legs and abdomen'],
            ['value' => 'Chest pain or palpitations'],
            ['value' => 'Persistent cough or fluid retention'],
        ],
                'causes' => [
            ['value' => 'Severe coronary artery disease'],
            ['value' => 'Previous myocardial infarction'],
            ['value' => 'Long-standing hypertension'],
            ['value' => 'Diabetes and vascular disease'],
            ['value' => 'Smoking and unhealthy lifestyle habits'],
        ],
                'risks' => [
            ['value' => 'Progressive heart failure'],
            ['value' => 'Life-threatening arrhythmias'],
            ['value' => 'Sudden cardiac death'],
            ['value' => 'Kidney and liver dysfunction'],
            ['value' => 'Recurrent hospitalization'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Heart failure medications and monitoring'],
            ['value' => 'Coronary angioplasty or bypass surgery'],
            ['value' => 'Lifestyle and dietary modification'],
            ['value' => 'Implantable cardiac devices when needed'],
            ['value' => 'Cardiac rehabilitation and advanced heart care'],
        ],
                'recovery' => 'Long-term management improves heart function and symptom control. Early treatment helps reduce complications and improve survival.',
                'sort_order' => 18,
                'is_active' => true,
                'meta_title' => 'Ischemic Cardiomyopathy',
                'meta_description' => 'Ischemic cardiomyopathy is weakening of the heart muscle caused by reduced blood supply due to coronary artery disease or previous heart attacks. It commonly le',
                'meta_keywords' => '',
            ]
        );
    }
}
