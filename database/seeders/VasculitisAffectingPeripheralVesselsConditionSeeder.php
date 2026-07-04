<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class VasculitisAffectingPeripheralVesselsConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Vasculitis Affecting Peripheral Vessels')],
            [
                'name' => 'Vasculitis Affecting Peripheral Vessels',
                'slug' => Str::slug('Vasculitis Affecting Peripheral Vessels'),
                'h1' => 'Vasculitis Affecting Peripheral Vessels',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Peripheral vasculitis is inflammation of blood vessels affecting circulation to the limbs and organs. It may occur due to autoimmune diseases or infections.',
                'about_more' => '',
                'overview' => 'Peripheral vasculitis is inflammation of blood vessels affecting circulation to the limbs and organs. It may occur due to autoimmune diseases or infections.',
                'symptoms' => [
            ['value' => 'Pain and swelling in limbs'],
            ['value' => 'Skin rash or ulcers'],
            ['value' => 'Fever and fatigue'],
            ['value' => 'Numbness or tingling'],
            ['value' => 'Weakness and poor circulation'],
        ],
                'causes' => [
            ['value' => 'Autoimmune diseases'],
            ['value' => 'Infections and inflammatory disorders'],
            ['value' => 'Drug reactions'],
            ['value' => 'Connective tissue diseases'],
            ['value' => 'Unknown immune-related causes'],
        ],
                'risks' => [
            ['value' => 'Blood vessel blockage'],
            ['value' => 'Tissue ischemia and ulcers'],
            ['value' => 'Organ damage'],
            ['value' => 'Nerve injury and neuropathy'],
            ['value' => 'Chronic pain and disability'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Corticosteroids and immunosuppressants'],
            ['value' => 'Blood tests and vascular imaging'],
            ['value' => 'Pain and inflammation management'],
            ['value' => 'Treatment of underlying autoimmune disease'],
            ['value' => 'Surgical care for severe ischemia'],
        ],
                'recovery' => 'Many patients improve with early diagnosis and immunosuppressive therapy, though long-term monitoring is often needed.',
                'sort_order' => 16,
                'is_active' => true,
                'meta_title' => 'Vasculitis Affecting Peripheral Vessels',
                'meta_description' => 'Peripheral vasculitis is inflammation of blood vessels affecting circulation to the limbs and organs. It may occur due to autoimmune diseases or infections.',
                'meta_keywords' => '',
            ]
        );
    }
}
