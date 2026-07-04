<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AntiplateletTherapyAspirinClopidogrelSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Antiplatelet Therapy (Aspirin, Clopidogrel)')],
            [
                'title' => 'Antiplatelet Therapy (Aspirin, Clopidogrel)',
                'slug' => Str::slug('Antiplatelet Therapy (Aspirin, Clopidogrel)'),
                'introduction' => 'Antiplatelet therapy helps prevent blood clots by reducing platelet aggregation inside blood vessels.',
                'what_is' => 'These medications are commonly prescribed in patients with vascular disease, stroke risk, stents, or peripheral arterial disease to improve blood flow and reduce clot-related complications.',
                'symptoms' => [
            ['value' => 'Often prescribed before symptoms worsen'],
            ['value' => 'Leg pain from poor circulation'],
            ['value' => 'History of clotting events'],
            ['value' => 'Stroke-related symptoms'],
            ['value' => 'Chest discomfort in vascular disease'],
        ],
                'causes' => [
            ['value' => 'Atherosclerosis'],
            ['value' => 'Peripheral arterial disease'],
            ['value' => 'Carotid artery disease'],
            ['value' => 'Previous stroke or TIA'],
            ['value' => 'Coronary artery disease'],
            ['value' => 'Post-stent placement'],
        ],
                'condition_risks' => [
            ['value' => 'Bleeding complications'],
            ['value' => 'Gastric irritation'],
            ['value' => 'Bruising'],
            ['value' => 'Drug interactions'],
            ['value' => 'Rare allergic reactions'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => 'Treatment includes medications such as aspirin and clopidogrel taken regularly under medical supervision. Therapy may be single or dual antiplatelet treatment depending on vascular condition and procedure history.',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Take medication regularly'],
            ['value' => 'Avoid self-discontinuation'],
            ['value' => 'Monitor for unusual bleeding'],
            ['value' => 'Routine vascular follow-up'],
        ],
                'surgery_risks' => [
            ['value' => 'Bleeding complications'],
            ['value' => 'Gastric irritation'],
            ['value' => 'Bruising'],
            ['value' => 'Drug interactions'],
            ['value' => 'Rare allergic reactions'],
        ],
                'long_term_outlook' => 'Long-term antiplatelet therapy significantly lowers the risk of stroke, heart attack, and vascular blockage recurrence.',
                'conclusion' => '',
                'seo_title' => 'Antiplatelet Therapy (Aspirin, Clopidogrel)',
                'seo_description' => 'Antiplatelet therapy helps prevent blood clots by reducing platelet aggregation inside blood vessels.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
