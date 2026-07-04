<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostOperativeNeurosurgicalComplicationsConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Post-Operative Neurosurgical Complications')],
            [
                'name' => 'Post-Operative Neurosurgical Complications',
                'slug' => Str::slug('Post-Operative Neurosurgical Complications'),
                'h1' => 'Post-Operative Neurosurgical Complications',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Post-operative neurosurgical complications are medical or neurological problems that may occur after brain or spine surgery. These complications can range from mild wound issues to serious infections, bleeding, or neurological deterioration.',
                'about_more' => '',
                'overview' => 'Post-operative neurosurgical complications are medical or neurological problems that may occur after brain or spine surgery. These complications can range from mild wound issues to serious infections, bleeding, or neurological deterioration.',
                'symptoms' => [
            ['value' => 'Fever or wound redness'],
            ['value' => 'Persistent headaches or vomiting'],
            ['value' => 'Weakness or new neurological deficits'],
            ['value' => 'Seizures or altered consciousness'],
            ['value' => 'CSF leakage or wound swelling'],
        ],
                'causes' => [
            ['value' => 'Surgical site infections'],
            ['value' => 'Post-operative bleeding or swelling'],
            ['value' => 'CSF leakage or shunt malfunction'],
            ['value' => 'Blood clots or poor wound healing'],
            ['value' => 'Underlying severe neurological disease'],
        ],
                'risks' => [
            ['value' => 'Brain swelling and neurological decline'],
            ['value' => 'Meningitis or severe infection'],
            ['value' => 'Persistent pain and disability'],
            ['value' => 'Repeat surgeries or prolonged hospitalization'],
            ['value' => 'Permanent neurological deficits'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Immediate neurological reassessment'],
            ['value' => 'Imaging studies to identify complications'],
            ['value' => 'Antibiotics and infection management'],
            ['value' => 'Revision surgery if necessary'],
            ['value' => 'Intensive rehabilitation and supportive care'],
        ],
                'recovery' => 'Most complications can be managed successfully with early detection and treatment. Careful follow-up improves recovery and reduces long-term neurological problems.',
                'sort_order' => 49,
                'is_active' => true,
                'meta_title' => 'Post-Operative Neurosurgical Complications',
                'meta_description' => 'Post-operative neurosurgical complications are medical or neurological problems that may occur after brain or spine surgery. These complications can range from ',
                'meta_keywords' => '',
            ]
        );
    }
}
