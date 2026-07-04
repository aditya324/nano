<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SpinalCordCompressionConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Spinal Cord Compression')],
            [
                'name' => 'Spinal Cord Compression',
                'slug' => Str::slug('Spinal Cord Compression'),
                'h1' => 'Spinal Cord Compression',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Spinal cord compression occurs when pressure on the spinal cord interferes with nerve function. Compression may result from disc prolapse, tumors, trauma, infections, or degenerative spine diseases. It is a serious neurological condition that can lead to weakness, numbness, or paralysis if untreated.',
                'about_more' => '',
                'overview' => 'Spinal cord compression occurs when pressure on the spinal cord interferes with nerve function. Compression may result from disc prolapse, tumors, trauma, infections, or degenerative spine diseases. It is a serious neurological condition that can lead to weakness, numbness, or paralysis if untreated.',
                'symptoms' => [
            ['value' => 'Neck or back pain'],
            ['value' => 'Weakness in arms or legs'],
            ['value' => 'Numbness or tingling sensations'],
            ['value' => 'Difficulty walking or balancing'],
            ['value' => 'Loss of bladder or bowel control in severe cases'],
        ],
                'causes' => [
            ['value' => 'Herniated spinal discs'],
            ['value' => 'Spinal tumors or infections'],
            ['value' => 'Degenerative spine disorders'],
            ['value' => 'Trauma or spinal fractures'],
            ['value' => 'Spinal canal narrowing (stenosis)'],
        ],
                'risks' => [
            ['value' => 'Permanent nerve damage or paralysis'],
            ['value' => 'Loss of bladder and bowel function'],
            ['value' => 'Chronic pain and disability'],
            ['value' => 'Reduced mobility and independence'],
            ['value' => 'Severe spinal cord injury complications'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Emergency neurological assessment'],
            ['value' => 'MRI spine imaging and evaluation'],
            ['value' => 'Medications to reduce inflammation and swelling'],
            ['value' => 'Surgical decompression of the spinal cord'],
            ['value' => 'Physiotherapy and rehabilitation support'],
        ],
                'recovery' => 'Early diagnosis and timely decompression improve neurological recovery. Delayed treatment increases the risk of permanent spinal cord damage.',
                'sort_order' => 13,
                'is_active' => true,
                'meta_title' => 'Spinal Cord Compression',
                'meta_description' => 'Spinal cord compression occurs when pressure on the spinal cord interferes with nerve function. Compression may result from disc prolapse, tumors, trauma, infec',
                'meta_keywords' => '',
            ]
        );
    }
}
