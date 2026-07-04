<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BradyarrhythmiasHeartBlockConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Bradyarrhythmias / Heart Block')],
            [
                'name' => 'Bradyarrhythmias / Heart Block',
                'slug' => Str::slug('Bradyarrhythmias / Heart Block'),
                'h1' => 'Bradyarrhythmias / Heart Block',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Bradyarrhythmias are abnormally slow heart rhythms often caused by problems in the heart’s electrical conduction system. Heart block occurs when electrical signals are delayed or blocked between the chambers of the heart.',
                'about_more' => '',
                'overview' => 'Bradyarrhythmias are abnormally slow heart rhythms often caused by problems in the heart’s electrical conduction system. Heart block occurs when electrical signals are delayed or blocked between the chambers of the heart.',
                'symptoms' => [
            ['value' => 'Slow pulse rate'],
            ['value' => 'Dizziness or fainting'],
            ['value' => 'Fatigue and weakness'],
            ['value' => 'Shortness of breath'],
            ['value' => 'Confusion or reduced alertness'],
        ],
                'causes' => [
            ['value' => 'Age-related degeneration of heart conduction tissue'],
            ['value' => 'Heart attack or ischemic damage'],
            ['value' => 'Medication side effects'],
            ['value' => 'Electrolyte imbalance'],
            ['value' => 'Congenital conduction abnormalities'],
        ],
                'risks' => [
            ['value' => 'Sudden fainting and falls'],
            ['value' => 'Heart failure'],
            ['value' => 'Reduced blood supply to organs'],
            ['value' => 'Cardiac arrest in severe block'],
            ['value' => 'Sudden death without treatment'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'ECG and Holter monitoring'],
            ['value' => 'Medication review and correction'],
            ['value' => 'Temporary cardiac pacing if needed'],
            ['value' => 'Permanent pacemaker implantation'],
            ['value' => 'Management of underlying cardiac disease'],
        ],
                'recovery' => 'Pacemaker therapy effectively restores heart rhythm in many patients and improves quality of life significantly.',
                'sort_order' => 9,
                'is_active' => true,
                'meta_title' => 'Bradyarrhythmias / Heart Block',
                'meta_description' => 'Bradyarrhythmias are abnormally slow heart rhythms often caused by problems in the heart’s electrical conduction system. Heart block occurs when electrical sign',
                'meta_keywords' => '',
            ]
        );
    }
}
