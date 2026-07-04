<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ArrhythmiasAFVTSVTBradyarrhythmiasConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Arrhythmias (AF, VT, SVT, Bradyarrhythmias)')],
            [
                'name' => 'Arrhythmias (AF, VT, SVT, Bradyarrhythmias)',
                'slug' => Str::slug('Arrhythmias (AF, VT, SVT, Bradyarrhythmias)'),
                'h1' => 'Arrhythmias (AF, VT, SVT, Bradyarrhythmias)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Arrhythmias are disorders of the heart’s electrical system that cause abnormal heart rhythms, resulting in the heart beating too fast, too slow, or irregularly. Common arrhythmias include Atrial Fibrillation (AF), Ventricular Tachycardia (VT), Supraventricular Tachycardia (SVT), and Bradyarrhythmias. These conditions can affect blood circulation, heart function, and overall cardiovascular stability, ranging from mild symptoms to life-threatening cardiac emergencies. Early diagnosis and appropriate cardiac management are essential to prevent serious complications such as stroke, heart failure, or sudden cardiac arrest.',
                'about_more' => '',
                'overview' => 'Arrhythmias are disorders of the heart’s electrical system that cause abnormal heart rhythms, resulting in the heart beating too fast, too slow, or irregularly. Common arrhythmias include Atrial Fibrillation (AF), Ventricular Tachycardia (VT), Supraventricular Tachycardia (SVT), and Bradyarrhythmias. These conditions can affect blood circulation, heart function, and overall cardiovascular stability, ranging from mild symptoms to life-threatening cardiac emergencies. Early diagnosis and appropriate cardiac management are essential to prevent serious complications such as stroke, heart failure, or sudden cardiac arrest.',
                'symptoms' => [
            ['value' => 'Palpitations or irregular heartbeat'],
            ['value' => 'Rapid heartbeat or unusually slow pulse rate'],
            ['value' => 'Dizziness, lightheadedness, or fainting episodes'],
            ['value' => 'Chest discomfort or shortness of breath'],
            ['value' => 'Fatigue, weakness, or reduced exercise tolerance'],
        ],
                'causes' => [
            ['value' => 'Coronary artery disease or previous heart attack'],
            ['value' => 'High blood pressure or structural heart disease'],
            ['value' => 'Electrolyte imbalance or metabolic disorders'],
            ['value' => 'Stress, excessive caffeine, smoking, or alcohol use'],
            ['value' => 'Thyroid disorders, medications, or congenital electrical abnormalities affecting heart rhythm'],
        ],
                'risks' => [
            ['value' => 'Stroke or blood clot formation, especially in atrial fibrillation'],
            ['value' => 'Heart failure or reduced cardiac function'],
            ['value' => 'Sudden cardiac arrest or life-threatening ventricular arrhythmias'],
            ['value' => 'Reduced blood circulation causing dizziness or fainting'],
            ['value' => 'Progressive heart damage and recurrent hospitalization if untreated'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Treatment for arrhythmias focuses on restoring normal heart rhythm, controlling heart rate, preventing complications, and improving cardiovascular stability. Management may include lifestyle modification, anti-arrhythmic medications, blood thinners, electrolyte correction, and treatment of underlying heart disease. Advanced procedures may include electrical cardioversion, catheter ablation, pacemaker implantation, implantable cardioverter-defibrillator (ICD) placement, or cardiac surgery in selected cases. Patients may also benefit from cardiac rehabilitation, stress management, nutritional counseling, blood pressure control, endocrinology evaluation when required, and long-term cardiology follow-up to optimize heart health and rhythm control.'],
        ],
                'recovery' => 'The long-term outlook for arrhythmias depends on the type of rhythm disorder, underlying heart condition, treatment response, and overall cardiovascular health. Early diagnosis, medication adherence, healthy lifestyle habits, regular exercise, stress reduction, smoking cessation, routine cardiac monitoring, and continuous cardiology follow-up significantly help reduce complications, improve heart rhythm stability, prevent stroke and heart failure, preserve cardiac function, and enhance overall quality of life. ________________ 7. Chronic Kidney Disease (CKD)',
                'sort_order' => 6,
                'is_active' => true,
                'meta_title' => 'Arrhythmias (AF, VT, SVT, Bradyarrhythmias)',
                'meta_description' => 'Arrhythmias are disorders of the heart’s electrical system that cause abnormal heart rhythms, resulting in the heart beating too fast, too slow, or irregularly.',
                'meta_keywords' => '',
            ]
        );
    }
}
