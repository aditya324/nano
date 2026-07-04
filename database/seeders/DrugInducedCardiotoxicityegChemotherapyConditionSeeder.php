<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DrugInducedCardiotoxicityegChemotherapyConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Drug-Induced Cardiotoxicity (e.g., Chemotherapy)')],
            [
                'name' => 'Drug-Induced Cardiotoxicity (e.g., Chemotherapy)',
                'slug' => Str::slug('Drug-Induced Cardiotoxicity (e.g., Chemotherapy)'),
                'h1' => 'Drug-Induced Cardiotoxicity (e.g., Chemotherapy)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Drug-induced cardiotoxicity refers to damage to the heart muscle or cardiovascular system caused by medications, particularly chemotherapy drugs, targeted cancer therapies, or certain long-term medications.',
                'about_more' => '',
                'overview' => 'Drug-induced cardiotoxicity refers to damage to the heart muscle or cardiovascular system caused by medications, particularly chemotherapy drugs, targeted cancer therapies, or certain long-term medications.',
                'symptoms' => [
            ['value' => 'Shortness of breath'],
            ['value' => 'Fatigue and weakness'],
            ['value' => 'Swelling of legs or ankles'],
            ['value' => 'Chest pain or palpitations'],
            ['value' => 'Reduced exercise tolerance'],
        ],
                'causes' => [
            ['value' => 'Chemotherapy medications such as anthracyclines'],
            ['value' => 'Radiation therapy involving the chest'],
            ['value' => 'Long-term use of certain cardiac or psychiatric drugs'],
            ['value' => 'High-dose or prolonged medication exposure'],
            ['value' => 'Pre-existing heart disease increasing susceptibility'],
        ],
                'risks' => [
            ['value' => 'Heart failure and weakened heart muscle'],
            ['value' => 'Arrhythmias and conduction abnormalities'],
            ['value' => 'High blood pressure and vascular damage'],
            ['value' => 'Reduced cardiac pumping function'],
            ['value' => 'Permanent cardiovascular injury'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Cardiac monitoring during therapy'],
            ['value' => 'Echocardiography and cardiac imaging'],
            ['value' => 'Adjustment or discontinuation of offending drugs'],
            ['value' => 'Heart failure and cardioprotective medications'],
            ['value' => 'Multidisciplinary oncology and cardiology care'],
        ],
                'recovery' => 'Early detection of cardiotoxicity improves outcomes. Some cardiac effects are reversible, while others may require long-term management.',
                'sort_order' => 22,
                'is_active' => true,
                'meta_title' => 'Drug-Induced Cardiotoxicity (e.g., Chemotherapy)',
                'meta_description' => 'Drug-induced cardiotoxicity refers to damage to the heart muscle or cardiovascular system caused by medications, particularly chemotherapy drugs, targeted cance',
                'meta_keywords' => '',
            ]
        );
    }
}
