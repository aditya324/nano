<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PeripheralArterialDiseasePADSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Peripheral Arterial Disease (PAD)')],
            [
                'title' => 'Peripheral Arterial Disease (PAD)',
                'slug' => Str::slug('Peripheral Arterial Disease (PAD)'),
                'introduction' => 'Peripheral arterial disease (PAD) is a circulatory condition caused by narrowing or blockage of arteries supplying blood to the limbs, most commonly the legs. The condition usually develops due to atherosclerosis and reduced blood flow. Early treatment helps prevent severe complications and limb damage.',
                'what_is' => 'PAD commonly affects older adults and individuals with: Diabetes Smoking history High cholesterol Hypertension Coronary artery disease Diagnosis may include: Ankle-brachial index (ABI) Doppler ultrasound CT angiography Peripheral angiography Treatment options include: Lifestyle modification Medications Exercise therapy Angioplasty or vascular surgery Severe cases may lead to critical limb ischemia.',
                'symptoms' => [
            ['value' => 'Leg pain during walking (claudication)'],
            ['value' => 'Cold feet or legs'],
            ['value' => 'Weak pulses in legs'],
            ['value' => 'Non-healing wounds'],
            ['value' => 'Leg numbness or weakness'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Limb ischemia'],
            ['value' => 'Ulcer formation'],
            ['value' => 'Gangrene'],
            ['value' => 'Heart attack or stroke risk'],
            ['value' => 'Amputation in severe cases'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Stop smoking completely'],
            ['value' => 'Exercise regularly under supervision'],
            ['value' => 'Control diabetes and blood pressure properly'],
            ['value' => 'Maintain foot care and hygiene'],
            ['value' => 'Attend vascular follow-up appointments regularly'],
        ],
                'surgery_risks' => [
            ['value' => 'Limb ischemia'],
            ['value' => 'Ulcer formation'],
            ['value' => 'Gangrene'],
            ['value' => 'Heart attack or stroke risk'],
            ['value' => 'Amputation in severe cases'],
        ],
                'long_term_outlook' => 'Early diagnosis and treatment improve circulation, reduce complications, and preserve long-term limb and cardiovascular health.',
                'conclusion' => '',
                'seo_title' => 'Peripheral Arterial Disease (PAD)',
                'seo_description' => 'Peripheral arterial disease (PAD) is a circulatory condition caused by narrowing or blockage of arteries supplying blood to the limbs, most commonly the legs. The condition usually develops due to atherosclerosis and reduced blood flow. Early treatment helps prevent severe complications and limb damage.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
