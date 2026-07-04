<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SkinTumorsMelanomaConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Skin Tumors / Melanoma')],
            [
                'name' => 'Skin Tumors / Melanoma',
                'slug' => Str::slug('Skin Tumors / Melanoma'),
                'h1' => 'Skin Tumors / Melanoma',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Skin tumors may be benign or malignant growths arising from skin cells. Melanoma is an aggressive form of skin cancer originating from pigment-producing melanocytes and requires early detection for successful treatment.',
                'about_more' => '',
                'overview' => 'Skin tumors may be benign or malignant growths arising from skin cells. Melanoma is an aggressive form of skin cancer originating from pigment-producing melanocytes and requires early detection for successful treatment.',
                'symptoms' => [
            ['value' => 'New skin growth or changing mole'],
            ['value' => 'Irregular borders or uneven pigmentation'],
            ['value' => 'Bleeding or ulcerated skin lesion'],
            ['value' => 'Persistent itching or pain in a lesion'],
            ['value' => 'Rapid increase in size of a skin growth'],
        ],
                'causes' => [
            ['value' => 'Excessive sun or ultraviolet exposure'],
            ['value' => 'Family history of skin cancer'],
            ['value' => 'Fair skin and repeated sunburns'],
            ['value' => 'Chronic skin irritation or scars'],
            ['value' => 'Weak immune system'],
        ],
                'risks' => [
            ['value' => 'Local tissue invasion'],
            ['value' => 'Spread to lymph nodes and organs'],
            ['value' => 'Ulceration and bleeding'],
            ['value' => 'Recurrence after treatment'],
            ['value' => 'Life-threatening metastatic melanoma'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Skin examination and dermoscopy'],
            ['value' => 'Biopsy for diagnosis confirmation'],
            ['value' => 'Surgical excision of tumors'],
            ['value' => 'Immunotherapy or chemotherapy for advanced melanoma'],
            ['value' => 'Regular skin surveillance and sun protection'],
        ],
                'recovery' => 'Benign tumors generally have excellent outcomes. Early melanoma detection significantly improves survival and reduces metastatic risk.',
                'sort_order' => 32,
                'is_active' => true,
                'meta_title' => 'Skin Tumors / Melanoma',
                'meta_description' => 'Skin tumors may be benign or malignant growths arising from skin cells. Melanoma is an aggressive form of skin cancer originating from pigment-producing melanoc',
                'meta_keywords' => '',
            ]
        );
    }
}
