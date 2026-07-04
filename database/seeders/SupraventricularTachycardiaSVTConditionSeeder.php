<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SupraventricularTachycardiaSVTConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Supraventricular Tachycardia (SVT)')],
            [
                'name' => 'Supraventricular Tachycardia (SVT)',
                'slug' => Str::slug('Supraventricular Tachycardia (SVT)'),
                'h1' => 'Supraventricular Tachycardia (SVT)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Supraventricular Tachycardia (SVT) is a rapid heart rhythm originating above the ventricles. Episodes may begin and end suddenly and can cause palpitations and dizziness.',
                'about_more' => '',
                'overview' => 'Supraventricular Tachycardia (SVT) is a rapid heart rhythm originating above the ventricles. Episodes may begin and end suddenly and can cause palpitations and dizziness.',
                'symptoms' => [
            ['value' => 'Rapid heartbeat or palpitations'],
            ['value' => 'Chest discomfort'],
            ['value' => 'Dizziness or lightheadedness'],
            ['value' => 'Shortness of breath'],
            ['value' => 'Anxiety or sweating during episodes'],
        ],
                'causes' => [
            ['value' => 'Abnormal electrical pathways in the heart'],
            ['value' => 'Stress or anxiety'],
            ['value' => 'Excess caffeine or stimulants'],
            ['value' => 'Smoking and alcohol use'],
            ['value' => 'Heart disease or electrolyte imbalance'],
        ],
                'risks' => [
            ['value' => 'Recurrent rapid heartbeat episodes'],
            ['value' => 'Reduced blood pressure during attacks'],
            ['value' => 'Fainting episodes'],
            ['value' => 'Heart failure in persistent severe cases'],
            ['value' => 'Reduced quality of life'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Vagal maneuvers to slow heart rate'],
            ['value' => 'Antiarrhythmic medications'],
            ['value' => 'ECG and electrophysiology evaluation'],
            ['value' => 'Electrical cardioversion if unstable'],
            ['value' => 'Catheter ablation for recurrent SVT'],
        ],
                'recovery' => 'Most patients respond well to treatment. Catheter ablation can permanently cure many SVT cases.',
                'sort_order' => 8,
                'is_active' => true,
                'meta_title' => 'Supraventricular Tachycardia (SVT)',
                'meta_description' => 'Supraventricular Tachycardia (SVT) is a rapid heart rhythm originating above the ventricles. Episodes may begin and end suddenly and can cause palpitations and ',
                'meta_keywords' => '',
            ]
        );
    }
}
