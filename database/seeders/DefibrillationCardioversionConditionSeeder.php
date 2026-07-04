<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DefibrillationCardioversionConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Defibrillation / Cardioversion')],
            [
                'name' => 'Defibrillation / Cardioversion',
                'slug' => Str::slug('Defibrillation / Cardioversion'),
                'h1' => 'Defibrillation / Cardioversion',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Defibrillation and cardioversion are emergency cardiac procedures used to restore normal heart rhythm in patients experiencing life-threatening or abnormal cardiac arrhythmias. Defibrillation delivers an unsynchronized electrical shock to the heart during cardiac arrest caused by ventricular fibrillation or pulseless ventricular tachycardia, while cardioversion delivers a synchronized electrical shock to correct abnormal but organized heart rhythms such as atrial fibrillation, supraventricular tachycardia, or unstable tachyarrhythmias. These procedures are critical in emergency medicine, cardiology, and intensive care settings to stabilize heart function and improve survival outcomes.',
                'about_more' => '',
                'overview' => 'Defibrillation and cardioversion are performed using specialized defibrillator devices that deliver controlled electrical energy to the heart through external pads or paddles placed on the chest. Defibrillation is typically performed immediately during cardiac arrest without synchronization to the cardiac cycle, whereas cardioversion is synchronized with the heart’s electrical activity to safely restore normal rhythm. These procedures are commonly used in emergency departments, ambulances, operating rooms, cardiac care units, and intensive care settings for patients with severe arrhythmias or cardiac instability.',
                'symptoms' => [
            ['value' => 'Sudden collapse or loss of consciousness'],
            ['value' => 'Rapid, irregular, or unstable heartbeat'],
            ['value' => 'Chest pain, palpitations, or severe dizziness'],
            ['value' => 'Shortness of breath or circulatory instability'],
            ['value' => 'Cardiac arrest or severe hemodynamic compromise'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Skin burns or irritation at shock pad placement sites'],
            ['value' => 'Cardiac rhythm disturbances or recurrence of arrhythmias'],
            ['value' => 'Blood clot dislodgement in certain cardiac conditions'],
            ['value' => 'Low blood pressure or temporary cardiac instability'],
            ['value' => 'Rare complications related to sedation during cardioversion procedures'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Defibrillation and cardioversion procedures focus on restoring normal heart rhythm, stabilizing circulation, and preventing cardiac complications. Management may include emergency defibrillation, synchronized cardioversion, advanced cardiac life support protocols, oxygen therapy, antiarrhythmic medications, anticoagulants, cardiac monitoring, and intensive care support. Patients may also require treatment of underlying heart disease, electrolyte imbalance, myocardial infarction, or structural cardiac abnormalities. Long-term care may include medication management, catheter ablation, pacemaker or implantable cardioverter-defibrillator (ICD) placement, lifestyle modification, and regular cardiology follow-up.'],
            ['value' => 'Continuous cardiac rhythm and blood pressure monitoring'],
            ['value' => 'Observation for recurrence of arrhythmias or cardiac instability'],
            ['value' => 'Medication management and anticoagulation monitoring when required'],
            ['value' => 'Follow-up cardiac evaluation and ECG monitoring'],
            ['value' => 'Long-term cardiology follow-up and lifestyle modification support'],
        ],
                'recovery' => 'The long-term outlook following defibrillation or cardioversion depends on the underlying cardiac condition, speed of emergency treatment, recurrence of arrhythmias, and overall heart health. Early intervention, medication adherence, cardiac rehabilitation, healthy lifestyle habits, regular cardiology follow-up, and appropriate long-term rhythm management significantly help improve heart function, reduce complications, prevent recurrent arrhythmias, and enhance overall quality of life. ___________________ 13. Antiarrhythmic Therapy Antiarrhythmic Therapy Procedures',
                'sort_order' => 14,
                'is_active' => true,
                'meta_title' => 'Defibrillation / Cardioversion',
                'meta_description' => 'Defibrillation and cardioversion are emergency cardiac procedures used to restore normal heart rhythm in patients experiencing life-threatening or abnormal card',
                'meta_keywords' => '',
            ]
        );
    }
}
