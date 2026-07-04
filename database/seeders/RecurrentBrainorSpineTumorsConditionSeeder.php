<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RecurrentBrainorSpineTumorsConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Recurrent Brain or Spine Tumors')],
            [
                'name' => 'Recurrent Brain or Spine Tumors',
                'slug' => Str::slug('Recurrent Brain or Spine Tumors'),
                'h1' => 'Recurrent Brain or Spine Tumors',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Recurrent brain or spine tumors refer to tumors that return after previous treatment such as surgery, radiation, or chemotherapy. Recurrence may occur months or years after initial therapy and often requires repeat neurosurgical and oncological management.',
                'about_more' => '',
                'overview' => 'Recurrent brain or spine tumors refer to tumors that return after previous treatment such as surgery, radiation, or chemotherapy. Recurrence may occur months or years after initial therapy and often requires repeat neurosurgical and oncological management.',
                'symptoms' => [
            ['value' => 'Return of headaches or seizures'],
            ['value' => 'Progressive weakness or numbness'],
            ['value' => 'Back pain or walking difficulty'],
            ['value' => 'Memory, vision, or speech problems'],
            ['value' => 'Loss of balance or coordination'],
        ],
                'causes' => [
            ['value' => 'Incomplete tumor removal'],
            ['value' => 'Aggressive malignant tumor behavior'],
            ['value' => 'Resistance to chemotherapy or radiation'],
            ['value' => 'Microscopic residual tumor cells'],
            ['value' => 'Genetic and molecular tumor factors'],
        ],
                'risks' => [
            ['value' => 'Progressive neurological deterioration'],
            ['value' => 'Increased difficulty of repeat surgery'],
            ['value' => 'Brain or spinal cord compression'],
            ['value' => 'Reduced quality of life and mobility'],
            ['value' => 'Spread of malignant disease'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Repeat MRI imaging and tumor evaluation'],
            ['value' => 'Revision neurosurgical tumor removal'],
            ['value' => 'Radiation therapy or radiosurgery'],
            ['value' => 'Chemotherapy and targeted therapies'],
            ['value' => 'Rehabilitation and palliative supportive care'],
        ],
                'recovery' => 'The outlook depends on the tumor type, recurrence pattern, and response to further treatment. Early detection and multidisciplinary management help improve survival and neurological function.',
                'sort_order' => 50,
                'is_active' => true,
                'meta_title' => 'Recurrent Brain or Spine Tumors',
                'meta_description' => 'Recurrent brain or spine tumors refer to tumors that return after previous treatment such as surgery, radiation, or chemotherapy. Recurrence may occur months or',
                'meta_keywords' => '',
            ]
        );
    }
}
