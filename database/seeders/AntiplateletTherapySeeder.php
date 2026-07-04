<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AntiplateletTherapySeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Antiplatelet Therapy')],
            [
                'title' => 'Antiplatelet Therapy',
                'slug' => Str::slug('Antiplatelet Therapy'),
                'introduction' => 'Antiplatelet therapy involves the use of medications that prevent blood platelets from sticking together and forming harmful clots. These medications help improve blood flow and reduce the risk of heart attack, stroke, and other cardiovascular complications caused by blocked blood vessels.',
                'what_is' => 'Antiplatelet medications are commonly prescribed for individuals with coronary artery disease, stroke risk, peripheral vascular disease, or after procedures such as angioplasty and stent placement. Common antiplatelet drugs include aspirin and other platelet-inhibiting medications that reduce clot formation within arteries. Therapy is often combined with lifestyle modifications and ongoing cardiovascular monitoring to improve long-term heart and vascular health.',
                'symptoms' => [
            ['value' => 'Chest pain or angina related to reduced blood flow'],
            ['value' => 'History of heart attack or stroke'],
            ['value' => 'Peripheral artery disease or circulation problems'],
            ['value' => 'Increased risk of blood clot formation'],
            ['value' => 'Cardiovascular conditions requiring clot prevention therapy'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Increased bleeding or bruising tendency'],
            ['value' => 'Gastrointestinal bleeding or stomach irritation'],
            ['value' => 'Allergic reactions to medications'],
            ['value' => 'Bleeding complications after surgery or injury'],
            ['value' => 'Rare blood-related or liver-related side effects'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular monitoring for bleeding or bruising'],
            ['value' => 'Medication adherence and cardiovascular follow-up'],
            ['value' => 'Blood pressure and heart health monitoring'],
            ['value' => 'Lifestyle modifications including smoking cessation and healthy diet'],
            ['value' => 'Ongoing evaluation of clotting and cardiovascular risk factors'],
        ],
                'surgery_risks' => [
            ['value' => 'Increased bleeding or bruising tendency'],
            ['value' => 'Gastrointestinal bleeding or stomach irritation'],
            ['value' => 'Allergic reactions to medications'],
            ['value' => 'Bleeding complications after surgery or injury'],
            ['value' => 'Rare blood-related or liver-related side effects'],
        ],
                'long_term_outlook' => 'The long-term outlook with antiplatelet therapy is generally positive when medications are used consistently and monitored appropriately. Effective antiplatelet treatment can significantly reduce the risk of heart attack, stroke, and arterial clot formation. Continuous medical follow-up, preventive care, and healthy lifestyle practices are important for maintaining long-term cardiovascular and circulatory health.',
                'conclusion' => '',
                'seo_title' => 'Antiplatelet Therapy',
                'seo_description' => 'Antiplatelet therapy involves the use of medications that prevent blood platelets from sticking together and forming harmful clots. These medications help improve blood flow and reduce the risk of heart attack, stroke, and other cardiovascular complications caused by blocked blood vessels.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
