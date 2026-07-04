<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RosaceaConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Rosacea')],
            [
                'name' => 'Rosacea',
                'slug' => Str::slug('Rosacea'),
                'h1' => 'Rosacea',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Rosacea is a common chronic inflammatory skin condition that mainly affects the face and sometimes the eyes. It commonly causes facial redness, flushing, visible blood vessels, and acne-like bumps. Rosacea may develop gradually and can worsen over time if left untreated. The condition often affects adults between the ages of 30 and 50 years.',
                'about_more' => '',
                'overview' => 'Rosacea is a common chronic inflammatory skin condition that mainly affects the face and sometimes the eyes. It commonly causes facial redness, flushing, visible blood vessels, and acne-like bumps. Rosacea may develop gradually and can worsen over time if left untreated. The condition often affects adults between the ages of 30 and 50 years.',
                'symptoms' => [
            ['value' => 'Facial redness or flushing'],
            ['value' => 'Eye irritation or dryness'],
            ['value' => 'Burning or stinging sensation on the skin'],
            ['value' => 'Thickened skin or plaque-like areas'],
            ['value' => 'Small red bumps, pimples, or visible blood vessels'],
        ],
                'causes' => [
            ['value' => 'Hot or cold temperatures'],
            ['value' => 'Alcohol consumption'],
            ['value' => 'Certain skincare or hair products'],
            ['value' => 'Emotional stress or sun exposure'],
            ['value' => 'Hormonal changes and skin sensitivity'],
        ],
                'risks' => [
            ['value' => 'Easily sunburned or sensitive skin'],
            ['value' => 'Increased risk in individuals aged 30 to 50 years'],
            ['value' => 'History of smoking or chronic skin irritation'],
            ['value' => 'Family history of rosacea'],
            ['value' => 'Eye complications such as ocular rosacea or chronic irritation'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Laser therapy or light-based treatment'],
            ['value' => 'Surgical procedures for severe skin thickening'],
            ['value' => 'Antibiotics such as doxycycline to reduce inflammation and pimples'],
            ['value' => 'Topical creams or gels containing azelaic acid, ivermectin, or metronidazole'],
            ['value' => 'Brimonidine gel to reduce facial redness'],
        ],
                'recovery' => 'The long-term outlook for rosacea is generally manageable with proper treatment and trigger control. Although rosacea is a chronic condition with periods of flare-ups and remission, early dermatologic care and lifestyle modifications can significantly reduce redness, irritation, and skin discomfort. Consistent skincare, sun protection, and medical follow-up are important for maintaining long-term skin health and quality of life. ______________________ 14. Hyperpigmentation / Melasma Hyperpigmentation / Melasma',
                'sort_order' => 18,
                'is_active' => true,
                'meta_title' => 'Rosacea',
                'meta_description' => 'Rosacea is a common chronic inflammatory skin condition that mainly affects the face and sometimes the eyes. It commonly causes facial redness, flushing, visibl',
                'meta_keywords' => '',
            ]
        );
    }
}
