<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SyncopePresyncopeRelatedtoCardiacCausesConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Syncope / Pre-syncope Related to Cardiac Causes')],
            [
                'name' => 'Syncope / Pre-syncope Related to Cardiac Causes',
                'slug' => Str::slug('Syncope / Pre-syncope Related to Cardiac Causes'),
                'h1' => 'Syncope / Pre-syncope Related to Cardiac Causes',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Syncope refers to sudden temporary loss of consciousness caused by reduced blood flow to the brain, while pre-syncope describes near-fainting episodes. Cardiac-related syncope often results from arrhythmias or structural heart disease and may indicate serious underlying conditions.',
                'about_more' => '',
                'overview' => 'Syncope refers to sudden temporary loss of consciousness caused by reduced blood flow to the brain, while pre-syncope describes near-fainting episodes. Cardiac-related syncope often results from arrhythmias or structural heart disease and may indicate serious underlying conditions.',
                'symptoms' => [
            ['value' => 'Sudden fainting or collapse'],
            ['value' => 'Dizziness or lightheadedness'],
            ['value' => 'Palpitations before fainting'],
            ['value' => 'Chest discomfort or shortness of breath'],
            ['value' => 'Weakness and blurred vision before the episode'],
        ],
                'causes' => [
            ['value' => 'Abnormal heart rhythms (arrhythmias)'],
            ['value' => 'Heart block or bradycardia'],
            ['value' => 'Severe valvular heart disease'],
            ['value' => 'Cardiomyopathy or heart failure'],
            ['value' => 'Sudden drop in cardiac output during exertion'],
        ],
                'risks' => [
            ['value' => 'Falls and injury during fainting episodes'],
            ['value' => 'Sudden cardiac arrest'],
            ['value' => 'Recurrent syncopal attacks'],
            ['value' => 'Reduced blood supply to vital organs'],
            ['value' => 'Increased risk of death in severe cardiac disease'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'ECG, Holter monitoring, and cardiac evaluation'],
            ['value' => 'Treatment of arrhythmias or structural heart disease'],
            ['value' => 'Pacemaker or defibrillator implantation when required'],
            ['value' => 'Medications for rhythm stabilization'],
            ['value' => 'Lifestyle modification and trigger avoidance'],
        ],
                'recovery' => 'Outcome depends on the underlying cardiac condition. Early diagnosis and appropriate treatment significantly reduce the risk of serious complications.',
                'sort_order' => 25,
                'is_active' => true,
                'meta_title' => 'Syncope / Pre-syncope Related to Cardiac Causes',
                'meta_description' => 'Syncope refers to sudden temporary loss of consciousness caused by reduced blood flow to the brain, while pre-syncope describes near-fainting episodes. Cardiac-',
                'meta_keywords' => '',
            ]
        );
    }
}
