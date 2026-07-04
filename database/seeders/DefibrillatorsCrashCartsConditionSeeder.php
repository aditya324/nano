<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DefibrillatorsCrashCartsConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Defibrillators / Crash Carts')],
            [
                'name' => 'Defibrillators / Crash Carts',
                'slug' => Str::slug('Defibrillators / Crash Carts'),
                'h1' => 'Defibrillators / Crash Carts',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Defibrillators and crash carts are essential emergency medical equipment used in critical care, emergency response, and life-support situations to manage cardiac arrest, severe arrhythmias, respiratory emergencies, and other life-threatening medical conditions. Defibrillators deliver controlled electrical shocks to restore normal heart rhythm, while crash carts contain emergency medications, airway devices, monitoring equipment, and resuscitation tools required during medical emergencies.',
                'about_more' => '',
                'overview' => 'Defibrillators are advanced cardiac devices used to treat life-threatening arrhythmias such as ventricular fibrillation and pulseless ventricular tachycardia through electrical defibrillation or synchronized cardioversion. Crash carts, also known as code carts, are mobile emergency stations equipped with resuscitation supplies including emergency drugs, airway equipment, intravenous access tools, suction devices, oxygen support systems, and advanced cardiac life support accessories. These systems are commonly used in intensive care units, emergency departments, operation theaters, ambulances, cardiac care units, and hospital wards for rapid emergency response and resuscitation management.',
                'symptoms' => [
            ['value' => 'Sudden cardiac arrest or collapse'],
            ['value' => 'Severe arrhythmias or unstable heart rhythms'],
            ['value' => 'Respiratory failure or airway emergencies'],
            ['value' => 'Shock, circulatory collapse, or severe hemodynamic instability'],
            ['value' => 'Critical medical emergencies requiring immediate resuscitation support'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Skin burns or irritation from defibrillator pads'],
            ['value' => 'Cardiac rhythm disturbances during emergency resuscitation'],
            ['value' => 'Delayed treatment if equipment is unavailable or improperly maintained'],
            ['value' => 'Medication-related complications during emergency management'],
            ['value' => 'Mechanical or technical malfunction affecting emergency response effectiveness'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Defibrillators and crash carts support rapid emergency intervention during critical medical situations by providing immediate access to life-saving equipment and medications. Management may include defibrillation, synchronized cardioversion, advanced cardiac life support (ACLS), airway management, oxygen therapy, intravenous medication administration, cardiopulmonary resuscitation (CPR), cardiac monitoring, and ventilatory support. These systems enable healthcare teams to respond efficiently to cardiac emergencies, respiratory failure, trauma, shock, and other life-threatening conditions requiring urgent stabilization and resuscitation.'],
            ['value' => 'Continuous cardiac and respiratory monitoring after resuscitation'],
            ['value' => 'Evaluation of heart rhythm, blood pressure, and organ function'],
            ['value' => 'Restocking and maintenance of emergency equipment and medications'],
            ['value' => 'Follow-up cardiac evaluation and rehabilitation support when required'],
            ['value' => 'Long-term critical care monitoring and emergency preparedness planning'],
        ],
                'recovery' => 'The long-term outlook associated with defibrillator and crash cart use depends on the underlying medical emergency, speed of intervention, and effectiveness of resuscitation efforts. Early emergency response, proper equipment maintenance, trained healthcare personnel, rehabilitation support, and ongoing medical follow-up significantly help improve survival, restore cardiac function, reduce complications, and enhance overall patient outcomes in critical care settings. __________________ 74. Arterial Line / Central Line Kits Arterial Line / Central Line Kits Equipment',
                'sort_order' => 3,
                'is_active' => true,
                'meta_title' => 'Defibrillators / Crash Carts',
                'meta_description' => 'Defibrillators and crash carts are essential emergency medical equipment used in critical care, emergency response, and life-support situations to manage cardia',
                'meta_keywords' => '',
            ]
        );
    }
}
