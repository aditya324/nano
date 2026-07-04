<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostInfectiousGlomerulonephritisConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Post-Infectious Glomerulonephritis')],
            [
                'name' => 'Post-Infectious Glomerulonephritis',
                'slug' => Str::slug('Post-Infectious Glomerulonephritis'),
                'h1' => 'Post-Infectious Glomerulonephritis',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Post-infectious glomerulonephritis is inflammation of the kidney filtering units that develops after certain infections, commonly streptococcal throat or skin infections. The immune response triggered by infection causes kidney inflammation and impaired filtration.',
                'about_more' => '',
                'overview' => 'Post-infectious glomerulonephritis is inflammation of the kidney filtering units that develops after certain infections, commonly streptococcal throat or skin infections. The immune response triggered by infection causes kidney inflammation and impaired filtration.',
                'symptoms' => [
            ['value' => 'Dark or cola-colored urine due to blood'],
            ['value' => 'Swelling around eyes and legs'],
            ['value' => 'Reduced urine output'],
            ['value' => 'High blood pressure'],
            ['value' => 'Fatigue and weakness'],
        ],
                'causes' => [
            ['value' => 'Recent streptococcal throat infection'],
            ['value' => 'Skin infections such as impetigo'],
            ['value' => 'Immune system reaction after infection'],
            ['value' => 'Viral or bacterial illnesses'],
            ['value' => 'Delayed treatment of infections'],
        ],
                'risks' => [
            ['value' => 'Acute kidney injury'],
            ['value' => 'Severe hypertension'],
            ['value' => 'Fluid overload and breathing difficulty'],
            ['value' => 'Chronic kidney disease in rare severe cases'],
            ['value' => 'Electrolyte imbalance and reduced kidney function'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Antibiotics for underlying infection'],
            ['value' => 'Blood pressure and fluid management'],
            ['value' => 'Salt restriction and supportive care'],
            ['value' => 'Diuretics to reduce swelling'],
            ['value' => 'Dialysis in severe kidney dysfunction'],
        ],
                'recovery' => 'Most children and adults recover completely with proper treatment and monitoring. Early medical care reduces the risk of long-term kidney complications.',
                'sort_order' => 29,
                'is_active' => true,
                'meta_title' => 'Post-Infectious Glomerulonephritis',
                'meta_description' => 'Post-infectious glomerulonephritis is inflammation of the kidney filtering units that develops after certain infections, commonly streptococcal throat or skin i',
                'meta_keywords' => '',
            ]
        );
    }
}
