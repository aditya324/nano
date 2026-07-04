<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CarotidArteryDissectionConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Carotid Artery Dissection')],
            [
                'name' => 'Carotid Artery Dissection',
                'slug' => Str::slug('Carotid Artery Dissection'),
                'h1' => 'Carotid Artery Dissection',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Carotid artery dissection occurs when a tear develops in the inner lining of the carotid artery, allowing blood to enter the vessel wall and disrupt normal blood flow to the brain.',
                'about_more' => '',
                'overview' => 'Carotid artery dissection occurs when a tear develops in the inner lining of the carotid artery, allowing blood to enter the vessel wall and disrupt normal blood flow to the brain.',
                'symptoms' => [
            ['value' => 'Sudden neck pain or headache'],
            ['value' => 'Facial pain or eye pain'],
            ['value' => 'Dizziness or visual disturbances'],
            ['value' => 'Weakness or numbness on one side'],
            ['value' => 'Stroke or transient ischemic attack symptoms'],
        ],
                'causes' => [
            ['value' => 'Neck trauma or sudden neck movement'],
            ['value' => 'Hypertension'],
            ['value' => 'Connective tissue disorders'],
            ['value' => 'Sports injuries or accidents'],
            ['value' => 'Spontaneous arterial wall weakness'],
        ],
                'risks' => [
            ['value' => 'Stroke due to clot formation'],
            ['value' => 'Reduced blood supply to the brain'],
            ['value' => 'Permanent neurological deficits'],
            ['value' => 'Recurrent arterial dissection'],
            ['value' => 'Life-threatening cerebrovascular events'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'CT angiography or MRI imaging'],
            ['value' => 'Blood thinning medications'],
            ['value' => 'Blood pressure management'],
            ['value' => 'Endovascular stenting procedures'],
            ['value' => 'Surgical repair in selected cases'],
        ],
                'recovery' => 'Many patients recover well with early treatment and stroke prevention therapy, though long-term follow-up is important.',
                'sort_order' => 23,
                'is_active' => true,
                'meta_title' => 'Carotid Artery Dissection',
                'meta_description' => 'Carotid artery dissection occurs when a tear develops in the inner lining of the carotid artery, allowing blood to enter the vessel wall and disrupt normal bloo',
                'meta_keywords' => '',
            ]
        );
    }
}
