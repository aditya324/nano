<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BasalCellCarcinomaConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Basal Cell Carcinoma')],
            [
                'name' => 'Basal Cell Carcinoma',
                'slug' => Str::slug('Basal Cell Carcinoma'),
                'h1' => 'Basal Cell Carcinoma',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Basal cell carcinoma is the most common type of skin cancer and develops in the basal cells located in the outer layer of the skin (epidermis). It commonly occurs in areas frequently exposed to sunlight such as the face, neck, scalp, and arms. Basal cell carcinoma usually grows slowly and rarely spreads to distant organs, but early diagnosis and treatment are important to prevent tissue damage and complications.',
                'about_more' => '',
                'overview' => 'Basal cell carcinoma is the most common type of skin cancer and develops in the basal cells located in the outer layer of the skin (epidermis). It commonly occurs in areas frequently exposed to sunlight such as the face, neck, scalp, and arms. Basal cell carcinoma usually grows slowly and rarely spreads to distant organs, but early diagnosis and treatment are important to prevent tissue damage and complications.',
                'symptoms' => [
            ['value' => 'Lumps, bumps, pimples, scabs, or scaly skin lesions'],
            ['value' => 'A brown, black, or blue-colored lesion'],
            ['value' => 'Flat, scaly, or slightly raised skin patches'],
            ['value' => 'White, waxy, or scar-like skin lesions'],
            ['value' => 'Sores that bleed, crust, or do not heal properly'],
        ],
                'causes' => [
            ['value' => 'Excessive exposure to ultraviolet (UV) radiation from sunlight'],
            ['value' => 'Frequent tanning bed use or sunburn history'],
            ['value' => 'Fair skin, light-colored eyes, or sensitive skin'],
            ['value' => 'Increasing age and chronic sun exposure'],
            ['value' => 'Weakened immune system or genetic predisposition'],
        ],
                'risks' => [
            ['value' => 'Increased risk of developing other skin cancers'],
            ['value' => 'Cancer spreading into deeper skin tissues or nearby structures'],
            ['value' => 'Inherited syndromes associated with skin cancer risk'],
            ['value' => 'Immune-suppressing medications increasing susceptibility'],
            ['value' => 'Personal or family history of skin cancer'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Electrodessication and curettage'],
            ['value' => 'Cryotherapy or cryosurgery'],
            ['value' => 'Chemotherapy or targeted therapy in advanced cases'],
            ['value' => 'Laser therapy'],
            ['value' => 'Photodynamic therapy (PDT) and surgical removal procedures'],
        ],
                'recovery' => 'The long-term outlook for basal cell carcinoma is generally excellent when diagnosed and treated early. Most cases are highly treatable and rarely life-threatening. Regular skin examinations, sun protection, and ongoing dermatologic follow-up are important for preventing recurrence and detecting new skin cancers at an early stage. _____________________________ 15. Skin Cancers (Basal Cell Carcinoma, Squamous Cell Carcinoma, Melanoma) Squamous Cell Carcinoma',
                'sort_order' => 20,
                'is_active' => true,
                'meta_title' => 'Basal Cell Carcinoma',
                'meta_description' => 'Basal cell carcinoma is the most common type of skin cancer and develops in the basal cells located in the outer layer of the skin (epidermis). It commonly occu',
                'meta_keywords' => '',
            ]
        );
    }
}
