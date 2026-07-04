<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class GastrointestinalBleedRequiringSurgeryConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Gastrointestinal Bleed Requiring Surgery')],
            [
                'name' => 'Gastrointestinal Bleed Requiring Surgery',
                'slug' => Str::slug('Gastrointestinal Bleed Requiring Surgery'),
                'h1' => 'Gastrointestinal Bleed Requiring Surgery',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Gastrointestinal bleeding requiring surgery refers to severe bleeding from the digestive tract that cannot be controlled with medications or endoscopic treatment and may become life-threatening.',
                'about_more' => '',
                'overview' => 'Gastrointestinal bleeding requiring surgery refers to severe bleeding from the digestive tract that cannot be controlled with medications or endoscopic treatment and may become life-threatening.',
                'symptoms' => [
            ['value' => 'Vomiting blood or coffee-colored material'],
            ['value' => 'Black tarry stools or rectal bleeding'],
            ['value' => 'Weakness and dizziness'],
            ['value' => 'Abdominal pain in some cases'],
            ['value' => 'Low blood pressure and shock symptoms'],
        ],
                'causes' => [
            ['value' => 'Peptic ulcers and gastritis'],
            ['value' => 'Intestinal tumors or cancers'],
            ['value' => 'Varices and liver disease'],
            ['value' => 'Diverticular disease or inflammatory bowel disease'],
            ['value' => 'Trauma or vascular abnormalities'],
        ],
                'risks' => [
            ['value' => 'Severe blood loss and anemia'],
            ['value' => 'Shock and circulatory collapse'],
            ['value' => 'Organ failure due to reduced blood supply'],
            ['value' => 'Recurrent uncontrolled bleeding'],
            ['value' => 'Death if untreated'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Emergency resuscitation and blood transfusion'],
            ['value' => 'Endoscopy and imaging evaluation'],
            ['value' => 'Surgical control of bleeding source'],
            ['value' => 'Intensive care monitoring'],
            ['value' => 'Treatment of underlying gastrointestinal disease'],
        ],
                'recovery' => 'Outcome depends on the cause and speed of intervention. Early surgical management significantly improves survival.',
                'sort_order' => 36,
                'is_active' => true,
                'meta_title' => 'Gastrointestinal Bleed Requiring Surgery',
                'meta_description' => 'Gastrointestinal bleeding requiring surgery refers to severe bleeding from the digestive tract that cannot be controlled with medications or endoscopic treatmen',
                'meta_keywords' => '',
            ]
        );
    }
}
