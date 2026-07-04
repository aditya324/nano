<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SquamousCellCarcinomaConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Squamous Cell Carcinoma')],
            [
                'name' => 'Squamous Cell Carcinoma',
                'slug' => Str::slug('Squamous Cell Carcinoma'),
                'h1' => 'Squamous Cell Carcinoma',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Squamous cell carcinoma is a common type of skin cancer that develops from squamous cells located in the middle and outer layers of the skin. It commonly occurs on areas frequently exposed to sunlight such as the face, ears, neck, lips, scalp, hands, and arms. Squamous cell carcinoma may grow more aggressively than basal cell carcinoma and can spread to nearby tissues or other parts of the body if left untreated.',
                'about_more' => '',
                'overview' => 'Squamous cell carcinoma is a common type of skin cancer that develops from squamous cells located in the middle and outer layers of the skin. It commonly occurs on areas frequently exposed to sunlight such as the face, ears, neck, lips, scalp, hands, and arms. Squamous cell carcinoma may grow more aggressively than basal cell carcinoma and can spread to nearby tissues or other parts of the body if left untreated.',
                'symptoms' => [
            ['value' => 'Rough-feeling bumps or growths that may crust, scab, or bleed'],
            ['value' => 'Wounds or sores that do not heal or repeatedly return'],
            ['value' => 'Flat sores with a scaly crust'],
            ['value' => 'Raised wart-like growths around the anus or genital area'],
            ['value' => 'New sores or raised areas developing on old scars or chronic wounds'],
        ],
                'causes' => [
            ['value' => 'Excessive exposure to ultraviolet (UV) radiation from sunlight'],
            ['value' => 'Frequent tanning bed use or repeated sunburns'],
            ['value' => 'Chronic skin injuries, scars, or long-standing wounds'],
            ['value' => 'Human papillomavirus (HPV) infection in some cases'],
            ['value' => 'Weakened immune system or exposure to harmful chemicals'],
        ],
                'risks' => [
            ['value' => 'Cancer involving mucous membranes such as the lips'],
            ['value' => 'Large or deeply invasive tumors'],
            ['value' => 'Human papillomavirus (HPV)-related skin lesions'],
            ['value' => 'Increased risk in individuals with weakened immunity'],
            ['value' => 'History of precancerous skin lesions or chronic sun damage'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Surgical removal of the cancerous lesion'],
            ['value' => 'Cryotherapy or curettage for early lesions'],
            ['value' => 'Radiation therapy for advanced or difficult-to-treat cases'],
            ['value' => 'Topical medications or photodynamic therapy for superficial lesions'],
            ['value' => 'Chemotherapy or targeted therapy for advanced disease'],
        ],
                'recovery' => 'The long-term outlook for squamous cell carcinoma is generally very good when detected and treated early. Most cases are highly treatable, although untreated tumors may grow deeper or spread to other tissues. Regular skin examinations, sun protection, and ongoing dermatologic follow-up are important for reducing recurrence risk and detecting future skin cancers early. ________________________________ 15. Skin Cancers (Basal Cell Carcinoma, Squamous Cell Carcinoma, Melanoma) Melanoma',
                'sort_order' => 21,
                'is_active' => true,
                'meta_title' => 'Squamous Cell Carcinoma',
                'meta_description' => 'Squamous cell carcinoma is a common type of skin cancer that develops from squamous cells located in the middle and outer layers of the skin. It commonly occurs',
                'meta_keywords' => '',
            ]
        );
    }
}
