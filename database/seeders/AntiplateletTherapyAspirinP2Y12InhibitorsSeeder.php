<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AntiplateletTherapyAspirinP2Y12InhibitorsSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Antiplatelet Therapy (Aspirin, P2Y12 Inhibitors)')],
            [
                'title' => 'Antiplatelet Therapy (Aspirin, P2Y12 Inhibitors)',
                'slug' => Str::slug('Antiplatelet Therapy (Aspirin, P2Y12 Inhibitors)'),
                'introduction' => 'Antiplatelet therapy involves medications that reduce platelet aggregation and prevent blood clot formation within arteries. These medications are commonly used to prevent heart attacks, strokes, and complications after coronary interventions such as angioplasty and stenting. Antiplatelet agents are essential in the treatment and prevention of cardiovascular disease.',
                'what_is' => 'Common antiplatelet medications include: Aspirin Clopidogrel Ticagrelor Prasugrel These medicines help prevent clot formation in narrowed or stented coronary arteries. They are used in: Coronary artery disease Acute coronary syndrome Post-angioplasty care Stroke prevention Peripheral arterial disease Treatment duration varies depending on the patient’s cardiac condition and procedural history.',
                'symptoms' => [
            ['value' => 'Chest pain or angina'],
            ['value' => 'Previous heart attack history'],
            ['value' => 'Coronary artery blockage'],
            ['value' => 'Stroke or transient ischemic attack history'],
            ['value' => 'Post-stent placement management'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Increased bleeding tendency'],
            ['value' => 'Gastric irritation or ulcers'],
            ['value' => 'Bruising easily'],
            ['value' => 'Rare allergic reactions'],
            ['value' => 'Risk of bleeding during surgery or trauma'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Take medications exactly as prescribed'],
            ['value' => 'Do not stop therapy without medical advice'],
            ['value' => 'Monitor for unusual bleeding or bruising'],
            ['value' => 'Inform doctors before any surgical procedures'],
            ['value' => 'Attend regular cardiology follow-up appointments'],
        ],
                'surgery_risks' => [
            ['value' => 'Increased bleeding tendency'],
            ['value' => 'Gastric irritation or ulcers'],
            ['value' => 'Bruising easily'],
            ['value' => 'Rare allergic reactions'],
            ['value' => 'Risk of bleeding during surgery or trauma'],
        ],
                'long_term_outlook' => 'Antiplatelet therapy significantly reduces the risk of heart attack, stroke, and stent blockage, improving long-term cardiovascular survival and stability.',
                'conclusion' => '',
                'seo_title' => 'Antiplatelet Therapy (Aspirin, P2Y12 Inhibitors)',
                'seo_description' => 'Antiplatelet therapy involves medications that reduce platelet aggregation and prevent blood clot formation within arteries. These medications are commonly used to prevent heart attacks, strokes, and complications after coronary interventions such as angioplasty and stenting. Antiplatelet agents are essential in the treatment and prevention of cardiovascular disease.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
