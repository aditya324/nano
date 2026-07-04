<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SurgicalExtractionofImpactedMalposedTeethConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Surgical Extraction of Impacted / Malposed Teeth')],
            [
                'name' => 'Surgical Extraction of Impacted / Malposed Teeth',
                'slug' => Str::slug('Surgical Extraction of Impacted / Malposed Teeth'),
                'h1' => 'Surgical Extraction of Impacted / Malposed Teeth',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Surgical extraction of impacted or malposed teeth is a specialized oral and maxillofacial surgical procedure performed to remove teeth that fail to erupt properly or are positioned abnormally within the jawbone or gums. Wisdom teeth and canine teeth are among the most commonly affected teeth requiring surgical management.',
                'about_more' => '',
                'overview' => 'Impacted or malposed teeth may remain partially or completely trapped within the jaw due to lack of space, abnormal angulation, or obstruction from surrounding structures. These teeth can cause pain, swelling, infection, crowding, jaw damage, and problems with neighboring teeth if left untreated. Surgical extraction involves careful removal of the affected tooth under local anesthesia, sedation, or general anesthesia depending on the complexity of the case. Advanced imaging and surgical planning help improve safety and recovery outcomes.',
                'symptoms' => [
            ['value' => 'Pain or swelling around the affected tooth area'],
            ['value' => 'Difficulty chewing or opening the mouth'],
            ['value' => 'Gum infection or recurrent inflammation'],
            ['value' => 'Crowding or displacement of adjacent teeth'],
            ['value' => 'Jaw discomfort, bad breath, or food trapping around partially erupted teeth'],
        ],
                'causes' => [
            ['value' => 'Lack of space in the jaw for proper tooth eruption'],
            ['value' => 'Abnormal tooth angulation or developmental positioning'],
            ['value' => 'Genetic or hereditary dental alignment factors'],
            ['value' => 'Delayed eruption of permanent teeth'],
            ['value' => 'Obstruction from surrounding teeth, bone, or soft tissue'],
        ],
                'risks' => [
            ['value' => 'Pain, swelling, or bleeding after surgery'],
            ['value' => 'Infection or delayed healing at the extraction site'],
            ['value' => 'Temporary numbness due to nerve irritation in certain cases'],
            ['value' => 'Damage to adjacent teeth or surrounding tissues'],
            ['value' => 'Jaw stiffness or dry socket complications during healing'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Clinical dental examination and radiographic imaging evaluation'],
            ['value' => 'Surgical removal of impacted or malposed teeth'],
            ['value' => 'Bone removal or soft tissue exposure procedures when required'],
            ['value' => 'Infection control, pain management, and postoperative wound care'],
            ['value' => 'Orthodontic follow-up and long-term oral health monitoring'],
        ],
                'recovery' => 'The long-term outlook for surgical extraction of impacted or malposed teeth is generally very positive with proper surgical care and postoperative management. Early intervention, good oral hygiene, medication compliance, regular follow-up, and appropriate recovery care significantly reduce complications and improve long-term oral health and jaw function. ______________________ 2. Open & Closed Reduction of Jaw Fractures Open & Closed Reduction of Jaw Fractures Procedures',
                'sort_order' => 1,
                'is_active' => true,
                'meta_title' => 'Surgical Extraction of Impacted / Malposed Teeth',
                'meta_description' => 'Surgical extraction of impacted or malposed teeth is a specialized oral and maxillofacial surgical procedure performed to remove teeth that fail to erupt proper',
                'meta_keywords' => '',
            ]
        );
    }
}
