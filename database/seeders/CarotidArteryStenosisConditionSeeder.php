<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CarotidArteryStenosisConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Carotid Artery Stenosis')],
            [
                'name' => 'Carotid Artery Stenosis',
                'slug' => Str::slug('Carotid Artery Stenosis'),
                'h1' => 'Carotid Artery Stenosis',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Carotid artery stenosis is narrowing of the carotid arteries that supply blood to the brain. The condition significantly increases the risk of stroke and transient ischemic attacks (TIA).',
                'about_more' => '',
                'overview' => 'Carotid artery stenosis is narrowing of the carotid arteries that supply blood to the brain. The condition significantly increases the risk of stroke and transient ischemic attacks (TIA).',
                'symptoms' => [
            ['value' => 'Sudden weakness or numbness'],
            ['value' => 'Difficulty speaking'],
            ['value' => 'Vision disturbances'],
            ['value' => 'Dizziness or imbalance'],
            ['value' => 'Temporary paralysis episodes'],
        ],
                'causes' => [
            ['value' => 'Atherosclerosis'],
            ['value' => 'High blood pressure'],
            ['value' => 'Smoking and diabetes'],
            ['value' => 'Elevated cholesterol levels'],
            ['value' => 'Advanced age and obesity'],
        ],
                'risks' => [
            ['value' => 'Stroke and brain damage'],
            ['value' => 'Transient ischemic attacks'],
            ['value' => 'Permanent neurological disability'],
            ['value' => 'Recurrent cerebrovascular events'],
            ['value' => 'Sudden death in severe cases'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Blood-thinning medications'],
            ['value' => 'Cholesterol-lowering therapy'],
            ['value' => 'Carotid Doppler evaluation'],
            ['value' => 'Carotid endarterectomy surgery'],
            ['value' => 'Carotid artery stenting'],
        ],
                'recovery' => 'Proper treatment greatly lowers stroke risk and improves long-term neurological health.',
                'sort_order' => 2,
                'is_active' => true,
                'meta_title' => 'Carotid Artery Stenosis',
                'meta_description' => 'Carotid artery stenosis is narrowing of the carotid arteries that supply blood to the brain. The condition significantly increases the risk of stroke and transi',
                'meta_keywords' => '',
            ]
        );
    }
}
