<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class NegativePressureWoundTherapyVACConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Negative Pressure Wound Therapy (VAC)')],
            [
                'name' => 'Negative Pressure Wound Therapy (VAC)',
                'slug' => Str::slug('Negative Pressure Wound Therapy (VAC)'),
                'h1' => 'Negative Pressure Wound Therapy (VAC)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Negative Pressure Wound Therapy (NPWT), commonly known as VAC (Vacuum-Assisted Closure) therapy, is an advanced wound management system used to promote healing in complex, chronic, traumatic, surgical, and non-healing wounds. The system uses controlled negative pressure to remove excess fluid, reduce infection risk, improve blood circulation, and stimulate healthy tissue growth.',
                'about_more' => '',
                'overview' => 'VAC therapy involves placing a specialized foam or dressing over the wound, which is connected to a sealed vacuum system that applies controlled suction. This negative pressure helps remove wound exudate, decrease swelling, improve tissue oxygenation, and support faster wound healing. NPWT systems are widely used in burn care, diabetic ulcers, pressure sores, traumatic wounds, post-surgical wounds, graft stabilization, and reconstructive surgery. Vacuum pump and negative pressure control unit Specialized foam or wound dressing systems Sealed adhesive drapes for wound isolation Drainage tubing and fluid collection canisters Portable monitoring and pressure regulation systems',
                'symptoms' => [],
                'causes' => [
            ['value' => 'Chronic non-healing wounds and diabetic ulcers'],
            ['value' => 'Pressure sores and soft tissue injuries'],
            ['value' => 'Burn wound management and graft support'],
            ['value' => 'Postoperative wound care and surgical site healing'],
            ['value' => 'Traumatic wounds and reconstructive surgery support'],
        ],
                'risks' => [
            ['value' => 'Pain or discomfort during dressing changes'],
            ['value' => 'Bleeding or tissue irritation in sensitive wounds'],
            ['value' => 'Infection risk if dressing protocols are not maintained properly'],
            ['value' => 'Need for regular monitoring of wound healing progress'],
            ['value' => 'Skin irritation or leakage around dressing seal areas'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Negative Pressure Wound Therapy supports advanced wound care, burn management, reconstructive surgery, skin graft stabilization, infection control, chronic ulcer treatment, and postoperative wound healing. These systems help improve tissue regeneration, reduce healing time, and decrease complications associated with complex wounds.'],
            ['value' => 'Regular monitoring of wound condition and VAC system function'],
            ['value' => 'Scheduled dressing changes under sterile conditions'],
            ['value' => 'Infection prevention and wound hygiene management'],
            ['value' => 'Nutritional support and hydration to improve healing'],
            ['value' => 'Follow-up wound assessment and rehabilitation support when required'],
        ],
                'recovery' => 'The long-term outlook with Negative Pressure Wound Therapy is highly positive because modern VAC systems significantly improve wound healing, reduce infection risk, and support tissue recovery in complex wounds. Early intervention, proper wound care management, nutritional support, and continuous medical follow-up are important for maintaining successful long-term healing and functional outcomes. _________________ 166. Scar Management Laser Devices Scar Management Laser Devices Equipment',
                'sort_order' => 5,
                'is_active' => true,
                'meta_title' => 'Negative Pressure Wound Therapy (VAC)',
                'meta_description' => 'Negative Pressure Wound Therapy (NPWT), commonly known as VAC (Vacuum-Assisted Closure) therapy, is an advanced wound management system used to promote healing ',
                'meta_keywords' => '',
            ]
        );
    }
}
