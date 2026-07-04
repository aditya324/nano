<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DiabeticFootUlcerDFUConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Diabetic Foot Ulcer (DFU)')],
            [
                'name' => 'Diabetic Foot Ulcer (DFU)',
                'slug' => Str::slug('Diabetic Foot Ulcer (DFU)'),
                'h1' => 'Diabetic Foot Ulcer (DFU)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Diabetic foot ulcer is an open sore or wound occurring in people with diabetes, usually on the feet or toes. Poor blood circulation and nerve damage contribute to delayed healing and increased infection risk.',
                'about_more' => '',
                'overview' => 'Diabetic foot ulcer is an open sore or wound occurring in people with diabetes, usually on the feet or toes. Poor blood circulation and nerve damage contribute to delayed healing and increased infection risk.',
                'symptoms' => [
            ['value' => 'Open wound or ulcer on the foot'],
            ['value' => 'Swelling and redness around the ulcer'],
            ['value' => 'Pain or numbness in the foot'],
            ['value' => 'Foul-smelling discharge from infected wounds'],
            ['value' => 'Blackened tissue in severe cases'],
        ],
                'causes' => [
            ['value' => 'Long-standing diabetes mellitus'],
            ['value' => 'Peripheral neuropathy and loss of sensation'],
            ['value' => 'Poor blood circulation'],
            ['value' => 'Improper footwear or foot trauma'],
            ['value' => 'Poor blood sugar control'],
        ],
                'risks' => [
            ['value' => 'Severe foot infections'],
            ['value' => 'Gangrene and tissue death'],
            ['value' => 'Osteomyelitis (bone infection)'],
            ['value' => 'Limb amputation'],
            ['value' => 'Recurrent ulcers and disability'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Blood sugar control and diabetic management'],
            ['value' => 'Wound cleaning and dressing'],
            ['value' => 'Antibiotics for infection'],
            ['value' => 'Debridement of dead tissue'],
            ['value' => 'Vascular procedures or surgery if needed'],
        ],
                'recovery' => 'Early treatment and proper foot care improve healing and reduce the risk of amputation.',
                'sort_order' => 1,
                'is_active' => true,
                'meta_title' => 'Diabetic Foot Ulcer (DFU)',
                'meta_description' => 'Diabetic foot ulcer is an open sore or wound occurring in people with diabetes, usually on the feet or toes. Poor blood circulation and nerve damage contribute ',
                'meta_keywords' => '',
            ]
        );
    }
}
