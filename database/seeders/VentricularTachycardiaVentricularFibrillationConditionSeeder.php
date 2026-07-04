<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class VentricularTachycardiaVentricularFibrillationConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Ventricular Tachycardia / Ventricular Fibrillation')],
            [
                'name' => 'Ventricular Tachycardia / Ventricular Fibrillation',
                'slug' => Str::slug('Ventricular Tachycardia / Ventricular Fibrillation'),
                'h1' => 'Ventricular Tachycardia / Ventricular Fibrillation',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Ventricular tachycardia and ventricular fibrillation are life-threatening arrhythmias originating from the heart’s lower chambers. They can cause sudden cardiac arrest if not treated immediately.',
                'about_more' => '',
                'overview' => 'Ventricular tachycardia and ventricular fibrillation are life-threatening arrhythmias originating from the heart’s lower chambers. They can cause sudden cardiac arrest if not treated immediately.',
                'symptoms' => [
            ['value' => 'Severe palpitations'],
            ['value' => 'Dizziness or fainting'],
            ['value' => 'Chest pain'],
            ['value' => 'Sudden collapse'],
            ['value' => 'Loss of consciousness'],
        ],
                'causes' => [
            ['value' => 'Previous heart attack and scar tissue'],
            ['value' => 'Cardiomyopathy'],
            ['value' => 'Electrolyte abnormalities'],
            ['value' => 'Severe coronary artery disease'],
            ['value' => 'Drug toxicity or inherited heart disorders'],
        ],
                'risks' => [
            ['value' => 'Sudden cardiac arrest'],
            ['value' => 'Brain injury from reduced oxygen supply'],
            ['value' => 'Heart failure'],
            ['value' => 'Recurrent dangerous arrhythmias'],
            ['value' => 'Death without emergency treatment'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Emergency defibrillation and CPR'],
            ['value' => 'Antiarrhythmic medications'],
            ['value' => 'Implantable cardioverter defibrillator (ICD)'],
            ['value' => 'Catheter ablation procedures'],
            ['value' => 'Treatment of underlying cardiac disease'],
        ],
                'recovery' => 'Immediate treatment is lifesaving. Long-term monitoring and cardiac device therapy significantly improve survival.',
                'sort_order' => 7,
                'is_active' => true,
                'meta_title' => 'Ventricular Tachycardia / Ventricular Fibrillation',
                'meta_description' => 'Ventricular tachycardia and ventricular fibrillation are life-threatening arrhythmias originating from the heart’s lower chambers. They can cause sudden cardiac',
                'meta_keywords' => '',
            ]
        );
    }
}
