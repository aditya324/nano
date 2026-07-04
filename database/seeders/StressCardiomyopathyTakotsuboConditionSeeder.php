<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class StressCardiomyopathyTakotsuboConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Stress Cardiomyopathy (Takotsubo)')],
            [
                'name' => 'Stress Cardiomyopathy (Takotsubo)',
                'slug' => Str::slug('Stress Cardiomyopathy (Takotsubo)'),
                'h1' => 'Stress Cardiomyopathy (Takotsubo)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Stress cardiomyopathy, also known as Takotsubo cardiomyopathy or “broken heart syndrome,” is a temporary weakening of the heart muscle often triggered by severe emotional or physical stress.',
                'about_more' => '',
                'overview' => 'Stress cardiomyopathy, also known as Takotsubo cardiomyopathy or “broken heart syndrome,” is a temporary weakening of the heart muscle often triggered by severe emotional or physical stress.',
                'symptoms' => [
            ['value' => 'Sudden chest pain'],
            ['value' => 'Shortness of breath'],
            ['value' => 'Palpitations'],
            ['value' => 'Dizziness or fainting'],
            ['value' => 'Symptoms similar to a heart attack'],
        ],
                'causes' => [
            ['value' => 'Severe emotional stress or grief'],
            ['value' => 'Physical trauma or illness'],
            ['value' => 'Sudden anxiety or panic episodes'],
            ['value' => 'Neurological emergencies'],
            ['value' => 'Hormonal stress response abnormalities'],
        ],
                'risks' => [
            ['value' => 'Acute heart failure'],
            ['value' => 'Dangerous arrhythmias'],
            ['value' => 'Blood clot formation in the heart'],
            ['value' => 'Cardiogenic shock in severe cases'],
            ['value' => 'Rare recurrence episodes'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Emergency cardiac evaluation'],
            ['value' => 'Heart-supportive medications'],
            ['value' => 'Stress management and counseling'],
            ['value' => 'Monitoring in intensive cardiac care'],
            ['value' => 'Follow-up echocardiography assessment'],
        ],
                'recovery' => 'Most patients recover heart function within weeks to months. Emotional support and follow-up care are important for long-term recovery.',
                'sort_order' => 19,
                'is_active' => true,
                'meta_title' => 'Stress Cardiomyopathy (Takotsubo)',
                'meta_description' => 'Stress cardiomyopathy, also known as Takotsubo cardiomyopathy or “broken heart syndrome,” is a temporary weakening of the heart muscle often triggered by severe',
                'meta_keywords' => '',
            ]
        );
    }
}
