<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class StrokeRelatedtoCardiacSourceCardioembolicStrokeConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Stroke Related to Cardiac Source (Cardioembolic Stroke)')],
            [
                'name' => 'Stroke Related to Cardiac Source (Cardioembolic Stroke)',
                'slug' => Str::slug('Stroke Related to Cardiac Source (Cardioembolic Stroke)'),
                'h1' => 'Stroke Related to Cardiac Source (Cardioembolic Stroke)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Cardioembolic stroke occurs when a blood clot forms in the heart and travels to the brain, blocking blood flow and causing sudden neurological damage. Conditions such as atrial fibrillation and heart valve disease commonly increase the risk.',
                'about_more' => '',
                'overview' => 'Cardioembolic stroke occurs when a blood clot forms in the heart and travels to the brain, blocking blood flow and causing sudden neurological damage. Conditions such as atrial fibrillation and heart valve disease commonly increase the risk.',
                'symptoms' => [
            ['value' => 'Sudden weakness or paralysis on one side of the body'],
            ['value' => 'Difficulty speaking or understanding speech'],
            ['value' => 'Sudden vision loss or blurred vision'],
            ['value' => 'Loss of balance or coordination'],
            ['value' => 'Sudden severe headache or confusion'],
        ],
                'causes' => [
            ['value' => 'Atrial fibrillation and arrhythmias'],
            ['value' => 'Heart valve disease or artificial valves'],
            ['value' => 'Recent heart attack with clot formation'],
            ['value' => 'Cardiomyopathy and heart failure'],
            ['value' => 'Infective endocarditis and cardiac tumors'],
        ],
                'risks' => [
            ['value' => 'Permanent neurological disability'],
            ['value' => 'Recurrent strokes'],
            ['value' => 'Swallowing and speech difficulties'],
            ['value' => 'Paralysis and mobility problems'],
            ['value' => 'Increased mortality risk'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Emergency stroke evaluation and brain imaging'],
            ['value' => 'Blood-thinning medications to prevent clots'],
            ['value' => 'Management of underlying heart disease'],
            ['value' => 'Rehabilitation including physiotherapy and speech therapy'],
            ['value' => 'Long-term cardiac rhythm monitoring'],
        ],
                'recovery' => 'Recovery depends on the severity of brain injury and speed of treatment. Stroke prevention through proper cardiac care is extremely important.',
                'sort_order' => 24,
                'is_active' => true,
                'meta_title' => 'Stroke Related to Cardiac Source (Cardioembolic Stroke)',
                'meta_description' => 'Cardioembolic stroke occurs when a blood clot forms in the heart and travels to the brain, blocking blood flow and causing sudden neurological damage. Condition',
                'meta_keywords' => '',
            ]
        );
    }
}
