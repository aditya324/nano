<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class HeartFailureAcuteChronicConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Heart Failure (Acute / Chronic)')],
            [
                'name' => 'Heart Failure (Acute / Chronic)',
                'slug' => Str::slug('Heart Failure (Acute / Chronic)'),
                'h1' => 'Heart Failure (Acute / Chronic)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Heart failure is a serious cardiovascular condition in which the heart is unable to pump blood effectively to meet the body’s oxygen and nutrient needs. Acute heart failure develops suddenly and may require emergency medical treatment, while chronic heart failure progresses gradually over time due to long-standing heart disease or weakened heart muscle function. Heart failure can affect multiple organs and body systems, leading to fluid buildup, reduced circulation, and decreased physical endurance. Early diagnosis and long-term cardiac management are essential to improve heart function and prevent complications.',
                'about_more' => '',
                'overview' => 'Heart failure is a serious cardiovascular condition in which the heart is unable to pump blood effectively to meet the body’s oxygen and nutrient needs. Acute heart failure develops suddenly and may require emergency medical treatment, while chronic heart failure progresses gradually over time due to long-standing heart disease or weakened heart muscle function. Heart failure can affect multiple organs and body systems, leading to fluid buildup, reduced circulation, and decreased physical endurance. Early diagnosis and long-term cardiac management are essential to improve heart function and prevent complications.',
                'symptoms' => [
            ['value' => 'Shortness of breath during activity or at rest'],
            ['value' => 'Fatigue or reduced physical endurance'],
            ['value' => 'Swelling of the legs, ankles, or abdomen due to fluid buildup'],
            ['value' => 'Persistent cough or difficulty breathing while lying down'],
            ['value' => 'Rapid heartbeat, dizziness, or sudden weight gain from fluid retention'],
        ],
                'causes' => [
            ['value' => 'Coronary artery disease or previous heart attack'],
            ['value' => 'High blood pressure causing strain on the heart'],
            ['value' => 'Heart valve disease or cardiomyopathy'],
            ['value' => 'Diabetes, obesity, or chronic kidney disease'],
            ['value' => 'Arrhythmias, infections, or excessive alcohol and tobacco use affecting heart function'],
        ],
                'risks' => [
            ['value' => 'Fluid accumulation in the lungs causing respiratory distress'],
            ['value' => 'Kidney dysfunction or reduced organ perfusion'],
            ['value' => 'Heart rhythm abnormalities or sudden cardiac arrest'],
            ['value' => 'Reduced physical mobility and exercise intolerance'],
            ['value' => 'Recurrent hospital admissions and progressive heart damage'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Treatment for acute and chronic heart failure focuses on improving heart function, reducing symptoms, preventing complications, and enhancing overall quality of life. Management may include lifestyle modification, low-sodium diet planning, fluid restriction, regular physical activity, weight monitoring, and medications such as diuretics, ACE inhibitors, beta-blockers, and other heart failure therapies. Severe cases may require oxygen therapy, mechanical circulatory support, implantable cardiac devices, or advanced procedures such as heart transplantation. Patients may also benefit from cardiac rehabilitation, diabetes and blood pressure management, nutritional counseling, stress reduction, and long-term cardiology follow-up to optimize cardiovascular health.'],
        ],
                'recovery' => 'The long-term outlook for heart failure depends on the severity of heart dysfunction, underlying medical conditions, treatment adherence, and overall lifestyle management. Early diagnosis, medication compliance, healthy nutrition, exercise, smoking cessation, fluid management, cardiac rehabilitation, regular medical monitoring, and continuous cardiology follow-up significantly help improve heart function, reduce hospitalizations, prevent complications, preserve organ function, and enhance overall quality of life. __________________ 6. Arrhythmias (AF, VT, SVT, Bradyarrhythmias) Arrhythmias (AF, VT, SVT, Bradyarrhythmias)',
                'sort_order' => 5,
                'is_active' => true,
                'meta_title' => 'Heart Failure (Acute / Chronic)',
                'meta_description' => 'Heart failure is a serious cardiovascular condition in which the heart is unable to pump blood effectively to meet the body’s oxygen and nutrient needs. Acute h',
                'meta_keywords' => '',
            ]
        );
    }
}
