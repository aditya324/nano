<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SpinalStenosisConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Spinal Stenosis')],
            [
                'name' => 'Spinal Stenosis',
                'slug' => Str::slug('Spinal Stenosis'),
                'h1' => 'Spinal Stenosis',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Spinal stenosis is narrowing of the spinal canal that places pressure on the spinal cord or spinal nerves. It commonly affects the cervical and lumbar spine and is usually associated with aging and degenerative spinal changes.',
                'about_more' => '',
                'overview' => 'Spinal stenosis is narrowing of the spinal canal that places pressure on the spinal cord or spinal nerves. It commonly affects the cervical and lumbar spine and is usually associated with aging and degenerative spinal changes.',
                'symptoms' => [
            ['value' => 'Back or neck pain'],
            ['value' => 'Numbness or tingling in limbs'],
            ['value' => 'Weakness while walking or standing'],
            ['value' => 'Balance difficulties and muscle cramps'],
            ['value' => 'Pain improving with rest or bending forward'],
        ],
                'causes' => [
            ['value' => 'Degenerative arthritis of the spine'],
            ['value' => 'Thickened ligaments and bone spurs'],
            ['value' => 'Herniated spinal discs'],
            ['value' => 'Congenital narrow spinal canal'],
            ['value' => 'Age-related spinal degeneration'],
        ],
                'risks' => [
            ['value' => 'Progressive nerve compression'],
            ['value' => 'Reduced walking ability and mobility'],
            ['value' => 'Chronic pain and muscle weakness'],
            ['value' => 'Loss of bladder or bowel control in severe cases'],
            ['value' => 'Permanent neurological impairment'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Pain-relieving and anti-inflammatory medications'],
            ['value' => 'Physiotherapy and mobility exercises'],
            ['value' => 'Lifestyle modifications and weight control'],
            ['value' => 'Epidural steroid injections'],
            ['value' => 'Surgical decompression for severe stenosis'],
        ],
                'recovery' => 'Early treatment improves mobility and symptom control. Surgical treatment often provides significant relief in severe nerve compression cases.',
                'sort_order' => 17,
                'is_active' => true,
                'meta_title' => 'Spinal Stenosis',
                'meta_description' => 'Spinal stenosis is narrowing of the spinal canal that places pressure on the spinal cord or spinal nerves. It commonly affects the cervical and lumbar spine and',
                'meta_keywords' => '',
            ]
        );
    }
}
