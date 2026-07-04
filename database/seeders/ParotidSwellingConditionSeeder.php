<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ParotidSwellingConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Parotid Swelling')],
            [
                'name' => 'Parotid Swelling',
                'slug' => Str::slug('Parotid Swelling'),
                'h1' => 'Parotid Swelling',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Parotid swelling is enlargement of the parotid salivary gland located near the cheeks and jaw. It may occur due to infections, duct blockage, autoimmune disease, or tumors.',
                'about_more' => '',
                'overview' => 'Parotid swelling is enlargement of the parotid salivary gland located near the cheeks and jaw. It may occur due to infections, duct blockage, autoimmune disease, or tumors.',
                'symptoms' => [
            ['value' => 'Swelling near the cheek or jaw'],
            ['value' => 'Pain while chewing or eating'],
            ['value' => 'Fever in infectious cases'],
            ['value' => 'Dry mouth or reduced saliva'],
            ['value' => 'Facial asymmetry or discomfort'],
        ],
                'causes' => [
            ['value' => 'Viral infections such as mumps'],
            ['value' => 'Bacterial salivary gland infection'],
            ['value' => 'Salivary duct obstruction or stones'],
            ['value' => 'Autoimmune disorders'],
            ['value' => 'Benign or malignant parotid tumors'],
        ],
                'risks' => [
            ['value' => 'Abscess formation'],
            ['value' => 'Facial nerve involvement'],
            ['value' => 'Chronic recurrent swelling'],
            ['value' => 'Difficulty eating or speaking'],
            ['value' => 'Spread of infection to nearby tissues'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Antibiotics and hydration'],
            ['value' => 'Warm compresses and gland massage'],
            ['value' => 'Imaging and salivary gland evaluation'],
            ['value' => 'Surgical removal of stones or tumors'],
            ['value' => 'ENT and surgical follow-up care'],
        ],
                'recovery' => 'Most infectious causes improve with treatment. Tumor-related swelling requires specialized management and long-term follow-up.',
                'sort_order' => 40,
                'is_active' => true,
                'meta_title' => 'Parotid Swelling',
                'meta_description' => 'Parotid swelling is enlargement of the parotid salivary gland located near the cheeks and jaw. It may occur due to infections, duct blockage, autoimmune disease',
                'meta_keywords' => '',
            ]
        );
    }
}
