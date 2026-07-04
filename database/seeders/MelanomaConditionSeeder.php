<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MelanomaConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Melanoma')],
            [
                'name' => 'Melanoma',
                'slug' => Str::slug('Melanoma'),
                'h1' => 'Melanoma',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Melanoma, which means “black tumor,” is the most serious and dangerous type of skin cancer. It develops in melanocytes, the cells responsible for producing skin pigment (melanin). Melanoma can occur anywhere on the body, including areas not frequently exposed to the sun, and may spread rapidly to other organs if not detected and treated early.',
                'about_more' => '',
                'overview' => 'Melanoma, which means “black tumor,” is the most serious and dangerous type of skin cancer. It develops in melanocytes, the cells responsible for producing skin pigment (melanin). Melanoma can occur anywhere on the body, including areas not frequently exposed to the sun, and may spread rapidly to other organs if not detected and treated early.',
                'symptoms' => [
            ['value' => 'A new mole or growth on the skin'],
            ['value' => 'Changes in the size, shape, or color of an existing mole'],
            ['value' => 'Irregular or uneven borders on a mole'],
            ['value' => 'Itching, bleeding, or crusting skin lesions'],
            ['value' => 'Dark-colored lesions with multiple shades of brown, black, or red'],
        ],
                'causes' => [
            ['value' => 'Fair skin, freckles, blond or red hair, and blue eyes'],
            ['value' => 'Excessive sun exposure and blistering sunburns'],
            ['value' => 'Presence of many moles, especially atypical moles'],
            ['value' => 'Personal or family history of melanoma'],
            ['value' => 'History of tanning bed use and ultraviolet (UV) exposure'],
        ],
                'risks' => [
            ['value' => 'Weakened immune system increasing cancer risk'],
            ['value' => 'Skin that burns easily in sunlight'],
            ['value' => 'Living near the equator or at higher elevations with stronger UV exposure'],
            ['value' => 'Having many or unusual-looking moles'],
            ['value' => 'Spread of melanoma to lymph nodes or other organs if untreated'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Surgical removal of melanoma lesions'],
            ['value' => 'Immunotherapy and targeted therapy'],
            ['value' => 'Radiation therapy for advanced melanoma cases'],
            ['value' => 'Chemotherapy when required for metastatic disease'],
            ['value' => 'Regular skin examinations and long-term oncology follow-up'],
        ],
                'recovery' => 'The long-term outlook for melanoma depends on how early the cancer is detected and treated. Early-stage melanoma is often highly treatable, while advanced melanoma may spread aggressively if left untreated. Regular skin checks, sun protection, and prompt medical evaluation of suspicious skin changes are essential for early detection, effective treatment, and improved long-term outcomes. ________________________ 16. Premalignant Lesions (Actinic Keratosis, Dysplastic Nevi) Actinic Keratosis',
                'sort_order' => 22,
                'is_active' => true,
                'meta_title' => 'Melanoma',
                'meta_description' => 'Melanoma, which means “black tumor,” is the most serious and dangerous type of skin cancer. It develops in melanocytes, the cells responsible for producing skin',
                'meta_keywords' => '',
            ]
        );
    }
}
