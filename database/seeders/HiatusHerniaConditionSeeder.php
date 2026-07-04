<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class HiatusHerniaConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Hiatus Hernia')],
            [
                'name' => 'Hiatus Hernia',
                'slug' => Str::slug('Hiatus Hernia'),
                'h1' => 'Hiatus Hernia',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Hiatus hernia occurs when part of the stomach moves upward through the diaphragm into the chest cavity. It commonly contributes to acid reflux and digestive discomfort.',
                'about_more' => '',
                'overview' => 'Hiatus hernia occurs when part of the stomach moves upward through the diaphragm into the chest cavity. It commonly contributes to acid reflux and digestive discomfort.',
                'symptoms' => [
            ['value' => 'Heartburn and acid reflux'],
            ['value' => 'Chest discomfort after meals'],
            ['value' => 'Difficulty swallowing'],
            ['value' => 'Burping and bloating'],
            ['value' => 'Sour taste in the mouth'],
        ],
                'causes' => [
            ['value' => 'Weakness of the diaphragm opening'],
            ['value' => 'Obesity and increased abdominal pressure'],
            ['value' => 'Aging-related tissue weakness'],
            ['value' => 'Heavy lifting or chronic coughing'],
            ['value' => 'Pregnancy'],
        ],
                'risks' => [
            ['value' => 'Severe gastroesophageal reflux disease (GERD)'],
            ['value' => 'Esophagitis and ulcer formation'],
            ['value' => 'Difficulty swallowing'],
            ['value' => 'Bleeding or anemia'],
            ['value' => 'Rare stomach strangulation'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Lifestyle and dietary modification'],
            ['value' => 'Acid-reducing medications'],
            ['value' => 'Weight reduction and posture management'],
            ['value' => 'Endoscopy evaluation'],
            ['value' => 'Surgical repair for severe cases'],
        ],
                'recovery' => 'Many patients improve with medications and lifestyle changes. Surgery is effective for persistent or complicated cases.',
                'sort_order' => 8,
                'is_active' => true,
                'meta_title' => 'Hiatus Hernia',
                'meta_description' => 'Hiatus hernia occurs when part of the stomach moves upward through the diaphragm into the chest cavity. It commonly contributes to acid reflux and digestive dis',
                'meta_keywords' => '',
            ]
        );
    }
}
