<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TraumaImagingProtocolsWholeBodyCTFASTScanConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Trauma Imaging Protocols (Whole Body CT & FAST Scan)')],
            [
                'name' => 'Trauma Imaging Protocols (Whole Body CT & FAST Scan)',
                'slug' => Str::slug('Trauma Imaging Protocols (Whole Body CT & FAST Scan)'),
                'h1' => 'Trauma Imaging Protocols (Whole Body CT & FAST Scan)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Trauma imaging protocols are specialized emergency diagnostic procedures used to rapidly evaluate injuries affecting the head, chest, abdomen, spine, blood vessels, bones, and internal organs after trauma or accidents. Imaging techniques such as Whole Body CT and FAST (Focused Assessment with Sonography for Trauma) scans help healthcare professionals quickly identify life-threatening injuries and guide emergency treatment.',
                'about_more' => '',
                'overview' => 'Whole Body CT scanning provides detailed cross-sectional imaging of multiple body regions in trauma patients, allowing rapid detection of fractures, internal bleeding, organ injury, and vascular damage. FAST scan is a rapid bedside ultrasound procedure used in emergency settings to detect internal bleeding or fluid accumulation in the abdomen, chest, or around the heart. These imaging protocols are widely used in trauma centers and emergency departments for quick assessment and stabilization of critically injured patients.',
                'symptoms' => [
            ['value' => 'Severe pain or multiple injuries after trauma'],
            ['value' => 'Loss of consciousness or neurological symptoms'],
            ['value' => 'Chest pain, breathing difficulty, or abdominal pain'],
            ['value' => 'Swelling, bleeding, or suspected fractures'],
            ['value' => 'Signs of shock, dizziness, or internal injury'],
        ],
                'causes' => [
            ['value' => 'Road traffic accidents or high-impact trauma'],
            ['value' => 'Falls, sports injuries, or workplace accidents'],
            ['value' => 'Blunt or penetrating injuries affecting internal organs'],
            ['value' => 'Bone fractures due to direct trauma'],
            ['value' => 'Severe impact causing blood vessel or tissue damage'],
        ],
                'risks' => [
            ['value' => 'Internal bleeding or hemorrhagic shock'],
            ['value' => 'Organ damage or respiratory complications'],
            ['value' => 'Spinal cord injury or neurological impairment'],
            ['value' => 'Infection, delayed healing, or long-term disability'],
            ['value' => 'Life-threatening emergencies requiring urgent intervention'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Whole Body CT and FAST scan imaging evaluation'],
            ['value' => 'Emergency trauma assessment and patient stabilization'],
            ['value' => 'Detection and monitoring of fractures and internal injuries'],
            ['value' => 'Surgical or interventional treatment planning'],
            ['value' => 'Long-term rehabilitation and trauma recovery monitoring'],
        ],
                'recovery' => 'The long-term outlook with trauma imaging protocols is generally very positive because rapid and accurate imaging evaluation supports early diagnosis and timely emergency treatment. Prompt trauma care, appropriate surgical or medical management, rehabilitation support, and regular follow-up can significantly improve recovery outcomes and reduce the risk of long-term complications.',
                'sort_order' => 16,
                'is_active' => true,
                'meta_title' => 'Trauma Imaging Protocols (Whole Body CT & FAST Scan)',
                'meta_description' => 'Trauma imaging protocols are specialized emergency diagnostic procedures used to rapidly evaluate injuries affecting the head, chest, abdomen, spine, blood vess',
                'meta_keywords' => '',
            ]
        );
    }
}
