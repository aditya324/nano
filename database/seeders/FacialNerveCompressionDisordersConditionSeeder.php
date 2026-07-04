<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class FacialNerveCompressionDisordersConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Facial Nerve Compression Disorders')],
            [
                'name' => 'Facial Nerve Compression Disorders',
                'slug' => Str::slug('Facial Nerve Compression Disorders'),
                'h1' => 'Facial Nerve Compression Disorders',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Facial nerve compression disorders occur when the facial nerve is compressed or irritated by blood vessels, tumors, inflammation, or structural abnormalities. These conditions may lead to facial twitching, weakness, pain, or abnormal facial movements.',
                'about_more' => '',
                'overview' => 'Facial nerve compression disorders occur when the facial nerve is compressed or irritated by blood vessels, tumors, inflammation, or structural abnormalities. These conditions may lead to facial twitching, weakness, pain, or abnormal facial movements.',
                'symptoms' => [
            ['value' => 'Facial twitching or spasms'],
            ['value' => 'Facial weakness or asymmetry'],
            ['value' => 'Pain or discomfort around the face or ear'],
            ['value' => 'Difficulty with facial expressions'],
            ['value' => 'Eye irritation due to incomplete eyelid closure'],
        ],
                'causes' => [
            ['value' => 'Blood vessel compression of facial nerves'],
            ['value' => 'Brain tumors or cysts'],
            ['value' => 'Facial nerve inflammation or infection'],
            ['value' => 'Previous trauma or surgery'],
            ['value' => 'Neurological degenerative conditions'],
        ],
                'risks' => [
            ['value' => 'Persistent facial weakness or spasms'],
            ['value' => 'Emotional distress and cosmetic concerns'],
            ['value' => 'Eye dryness and corneal damage'],
            ['value' => 'Difficulty eating or speaking'],
            ['value' => 'Progressive nerve dysfunction if untreated'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Medications for nerve irritation and spasms'],
            ['value' => 'Botulinum toxin injections in selected cases'],
            ['value' => 'MRI evaluation and neurological assessment'],
            ['value' => 'Microvascular decompression surgery'],
            ['value' => 'Facial physiotherapy and supportive care'],
        ],
                'recovery' => 'Many patients improve with medical or surgical treatment. Early intervention helps preserve facial nerve function and improves cosmetic outcomes.',
                'sort_order' => 34,
                'is_active' => true,
                'meta_title' => 'Facial Nerve Compression Disorders',
                'meta_description' => 'Facial nerve compression disorders occur when the facial nerve is compressed or irritated by blood vessels, tumors, inflammation, or structural abnormalities. T',
                'meta_keywords' => '',
            ]
        );
    }
}
