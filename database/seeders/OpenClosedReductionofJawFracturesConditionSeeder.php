<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class OpenClosedReductionofJawFracturesConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Open & Closed Reduction of Jaw Fractures')],
            [
                'name' => 'Open & Closed Reduction of Jaw Fractures',
                'slug' => Str::slug('Open & Closed Reduction of Jaw Fractures'),
                'h1' => 'Open & Closed Reduction of Jaw Fractures',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Open and closed reduction of jaw fractures are specialized surgical procedures performed to realign and stabilize fractured bones of the mandible (lower jaw), maxilla (upper jaw), or facial skeleton following trauma or injury. These procedures help restore facial structure, bite alignment, jaw function, and overall oral health.',
                'about_more' => '',
                'overview' => 'Closed reduction involves aligning the fractured jaw without surgical exposure of the bone, usually using wiring, splints, or fixation techniques to stabilize the jaw during healing. Open reduction involves surgically exposing the fracture site and using plates, screws, or fixation devices to precisely reposition and stabilize the broken bones. The choice of procedure depends on the severity, location, displacement, and complexity of the fracture. Early management is essential to restore chewing, speaking, breathing, and facial symmetry.',
                'symptoms' => [
            ['value' => 'Jaw pain, swelling, or facial bruising'],
            ['value' => 'Difficulty chewing, speaking, or opening the mouth'],
            ['value' => 'Bite misalignment or loose teeth'],
            ['value' => 'Facial deformity or asymmetry after trauma'],
            ['value' => 'Numbness, bleeding, or jaw instability'],
        ],
                'causes' => [
            ['value' => 'Road traffic accidents or facial trauma'],
            ['value' => 'Falls, sports injuries, or workplace accidents'],
            ['value' => 'Physical assault or blunt facial impact'],
            ['value' => 'Crush injuries affecting the jaw and facial bones'],
            ['value' => 'Trauma involving dental and facial skeletal structures'],
        ],
                'risks' => [
            ['value' => 'Infection or delayed bone healing'],
            ['value' => 'Malocclusion or persistent bite abnormalities'],
            ['value' => 'Nerve injury causing numbness or altered sensation'],
            ['value' => 'Jaw stiffness or limited mouth opening'],
            ['value' => 'Need for additional reconstructive or corrective procedures'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Clinical facial examination and imaging evaluation'],
            ['value' => 'Closed reduction using jaw fixation and stabilization techniques'],
            ['value' => 'Open reduction and internal fixation with plates and screws'],
            ['value' => 'Dental alignment correction and reconstructive jaw surgery when required'],
            ['value' => 'Long-term rehabilitation, physiotherapy, and postoperative follow-up care'],
        ],
                'recovery' => 'The long-term outlook for open and closed reduction of jaw fractures is generally very positive with timely diagnosis and proper surgical management. Early fracture stabilization, good oral hygiene, rehabilitation exercises, regular follow-up, and adherence to dietary and recovery instructions significantly improve bone healing, jaw function, facial symmetry, and overall quality of life. __________________________',
                'sort_order' => 2,
                'is_active' => true,
                'meta_title' => 'Open & Closed Reduction of Jaw Fractures',
                'meta_description' => 'Open and closed reduction of jaw fractures are specialized surgical procedures performed to realign and stabilize fractured bones of the mandible (lower jaw), m',
                'meta_keywords' => '',
            ]
        );
    }
}
