<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SubduralHematomaConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Subdural Hematoma')],
            [
                'name' => 'Subdural Hematoma',
                'slug' => Str::slug('Subdural Hematoma'),
                'h1' => 'Subdural Hematoma',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Subdural hematoma is a collection of blood between the brain surface and its outer protective covering (dura mater), usually caused by head trauma. The bleeding may develop suddenly or gradually and can compress brain tissue.',
                'about_more' => '',
                'overview' => 'Subdural hematoma is a collection of blood between the brain surface and its outer protective covering (dura mater), usually caused by head trauma. The bleeding may develop suddenly or gradually and can compress brain tissue.',
                'symptoms' => [
            ['value' => 'Persistent headache'],
            ['value' => 'Drowsiness or confusion'],
            ['value' => 'Weakness on one side of the body'],
            ['value' => 'Slurred speech or seizures'],
            ['value' => 'Loss of consciousness in severe cases'],
        ],
                'causes' => [
            ['value' => 'Head injury or falls'],
            ['value' => 'Road traffic accidents'],
            ['value' => 'Blood-thinning medications'],
            ['value' => 'Alcohol-related repeated trauma'],
            ['value' => 'Elderly age with fragile blood vessels'],
        ],
                'risks' => [
            ['value' => 'Brain compression and swelling'],
            ['value' => 'Progressive neurological deterioration'],
            ['value' => 'Paralysis or cognitive impairment'],
            ['value' => 'Seizures and altered consciousness'],
            ['value' => 'Life-threatening brain damage if untreated'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Emergency CT brain evaluation'],
            ['value' => 'Observation for small stable hematomas'],
            ['value' => 'Surgical drainage or craniotomy'],
            ['value' => 'Intensive neurological monitoring'],
            ['value' => 'Rehabilitation and supportive therapy'],
        ],
                'recovery' => 'Early surgical treatment often results in good recovery. Delayed diagnosis may increase the risk of permanent neurological damage.',
                'sort_order' => 7,
                'is_active' => true,
                'meta_title' => 'Subdural Hematoma',
                'meta_description' => 'Subdural hematoma is a collection of blood between the brain surface and its outer protective covering (dura mater), usually caused by head trauma. The bleeding',
                'meta_keywords' => '',
            ]
        );
    }
}
