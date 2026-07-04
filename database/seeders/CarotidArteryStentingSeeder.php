<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CarotidArteryStentingSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Carotid Artery Stenting')],
            [
                'title' => 'Carotid Artery Stenting',
                'slug' => Str::slug('Carotid Artery Stenting'),
                'introduction' => 'Carotid artery stenting is a minimally invasive vascular procedure used to open narrowed carotid arteries and improve blood flow to the brain.',
                'what_is' => 'The procedure helps reduce stroke risk in patients with carotid artery stenosis, especially those considered high risk for open surgery.',
                'symptoms' => [
            ['value' => 'Transient weakness'],
            ['value' => 'Slurred speech'],
            ['value' => 'Vision loss'],
            ['value' => 'Dizziness'],
            ['value' => 'Facial drooping'],
            ['value' => 'Stroke-like symptoms'],
        ],
                'causes' => [
            ['value' => 'Atherosclerosis'],
            ['value' => 'High cholesterol'],
            ['value' => 'Hypertension'],
            ['value' => 'Smoking'],
            ['value' => 'Diabetes mellitus'],
            ['value' => 'Previous transient ischemic attack (TIA)'],
        ],
                'condition_risks' => [
            ['value' => 'Stroke during procedure'],
            ['value' => 'Bleeding'],
            ['value' => 'Artery injury'],
            ['value' => 'Restenosis'],
            ['value' => 'Blood clot formation'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => 'A catheter is inserted through the groin or arm artery, and a balloon is used to widen the narrowed carotid artery. A stent is then placed to keep the artery open and maintain blood flow to the brain.',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Neurological monitoring'],
            ['value' => 'Antiplatelet medications'],
            ['value' => 'Blood pressure control'],
            ['value' => 'Avoid heavy exertion initially'],
            ['value' => 'Regular carotid Doppler follow-up'],
        ],
                'surgery_risks' => [
            ['value' => 'Stroke during procedure'],
            ['value' => 'Bleeding'],
            ['value' => 'Artery injury'],
            ['value' => 'Restenosis'],
            ['value' => 'Blood clot formation'],
        ],
                'long_term_outlook' => 'Carotid stenting effectively improves cerebral circulation and reduces long-term stroke risk in appropriately selected patients.',
                'conclusion' => '',
                'seo_title' => 'Carotid Artery Stenting',
                'seo_description' => 'Carotid artery stenting is a minimally invasive vascular procedure used to open narrowed carotid arteries and improve blood flow to the brain.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
