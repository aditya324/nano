<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ArteriovenousFistulaGraftComplicationsConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Arteriovenous Fistula / Graft Complications')],
            [
                'name' => 'Arteriovenous Fistula / Graft Complications',
                'slug' => Str::slug('Arteriovenous Fistula / Graft Complications'),
                'h1' => 'Arteriovenous Fistula / Graft Complications',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Arteriovenous (AV) fistulas and grafts are surgically created vascular access sites used mainly for dialysis. Complications may affect blood flow and dialysis efficiency.',
                'about_more' => '',
                'overview' => 'Arteriovenous (AV) fistulas and grafts are surgically created vascular access sites used mainly for dialysis. Complications may affect blood flow and dialysis efficiency.',
                'symptoms' => [
            ['value' => 'Swelling or pain around the access site'],
            ['value' => 'Redness or signs of infection'],
            ['value' => 'Reduced dialysis flow'],
            ['value' => 'Bleeding from the fistula or graft'],
            ['value' => 'Weak thrill or bruit over the access site'],
        ],
                'causes' => [
            ['value' => 'Blood clot formation'],
            ['value' => 'Infection of the access site'],
            ['value' => 'Narrowing of blood vessels (stenosis)'],
            ['value' => 'Repeated needle trauma'],
            ['value' => 'Poor vascular circulation'],
        ],
                'risks' => [
            ['value' => 'Fistula thrombosis and blockage'],
            ['value' => 'Severe infection and sepsis'],
            ['value' => 'Bleeding or aneurysm formation'],
            ['value' => 'Hand ischemia (steal syndrome)'],
            ['value' => 'Loss of dialysis access'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Doppler ultrasound evaluation'],
            ['value' => 'Angioplasty for stenosis'],
            ['value' => 'Surgical revision or thrombectomy'],
            ['value' => 'Antibiotics for infections'],
            ['value' => 'Creation of new vascular access if required'],
        ],
                'recovery' => 'Most complications can be successfully managed with timely vascular intervention and regular monitoring.',
                'sort_order' => 14,
                'is_active' => true,
                'meta_title' => 'Arteriovenous Fistula / Graft Complications',
                'meta_description' => 'Arteriovenous (AV) fistulas and grafts are surgically created vascular access sites used mainly for dialysis. Complications may affect blood flow and dialysis e',
                'meta_keywords' => '',
            ]
        );
    }
}
