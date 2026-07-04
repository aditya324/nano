<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MenieresDiseaseConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Meniere’s Disease')],
            [
                'name' => 'Meniere’s Disease',
                'slug' => Str::slug('Meniere’s Disease'),
                'h1' => 'Meniere’s Disease',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Meniere’s disease is a chronic inner ear disorder affecting balance and hearing. It is characterized by episodes of vertigo, fluctuating hearing loss, tinnitus, and ear fullness due to abnormal fluid buildup in the inner ear.',
                'about_more' => '',
                'overview' => 'Meniere’s disease is a chronic inner ear disorder affecting balance and hearing. It is characterized by episodes of vertigo, fluctuating hearing loss, tinnitus, and ear fullness due to abnormal fluid buildup in the inner ear.',
                'symptoms' => [
            ['value' => 'Recurrent episodes of vertigo'],
            ['value' => 'Ringing in the ears (tinnitus)'],
            ['value' => 'Fluctuating hearing loss'],
            ['value' => 'Ear fullness or pressure sensation'],
            ['value' => 'Nausea and imbalance during attacks'],
        ],
                'causes' => [
            ['value' => 'Abnormal inner ear fluid regulation'],
            ['value' => 'Viral infections or inflammation'],
            ['value' => 'Autoimmune or allergic factors'],
            ['value' => 'Stress and dietary triggers'],
            ['value' => 'Genetic predisposition in some cases'],
        ],
                'risks' => [
            ['value' => 'Progressive hearing loss'],
            ['value' => 'Frequent balance disturbances'],
            ['value' => 'Anxiety and reduced quality of life'],
            ['value' => 'Chronic tinnitus and ear pressure'],
            ['value' => 'Increased risk of falls'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Low-salt diet and lifestyle changes'],
            ['value' => 'Medications for vertigo control'],
            ['value' => 'Hearing aids if hearing declines'],
            ['value' => 'Intratympanic injections in severe cases'],
            ['value' => 'Surgical procedures for refractory disease'],
        ],
                'recovery' => 'Symptoms may fluctuate over time. Proper treatment and lifestyle management help reduce attacks and preserve hearing.',
                'sort_order' => 14,
                'is_active' => true,
                'meta_title' => 'Meniere’s Disease',
                'meta_description' => 'Meniere’s disease is a chronic inner ear disorder affecting balance and hearing. It is characterized by episodes of vertigo, fluctuating hearing loss, tinnitus,',
                'meta_keywords' => '',
            ]
        );
    }
}
